const fs = require('fs');
const path = require('path');
const http = require('http');

const SERVER_URL = 'http://localhost:8000';
const VIEWS_DIR = path.join(__dirname, '..', 'resources', 'views');
const PUBLIC_DIR = path.join(__dirname, '..', 'public');

// Recursively find all .blade.php files
function getFiles(dir, fileList = []) {
    const files = fs.readdirSync(dir);
    files.forEach(file => {
        const filePath = path.join(dir, file);
        const stat = fs.statSync(filePath);
        if (stat.isDirectory()) {
            getFiles(filePath, fileList);
        } else if (file.endsWith('.blade.php')) {
            fileList.push(filePath);
        }
    });
    return fileList;
}

// Convert view path to route URL
function getRouteUrl(viewPath) {
    const relativePath = path.relative(VIEWS_DIR, viewPath).replace(/\\/g, '/');
    
    // Ignore layouts and shared templates
    if (relativePath.startsWith('layouts/')) return null;
    
    if (relativePath === 'welcome.blade.php') return '/';
    if (relativePath === 'auth/login.blade.php') return '/login';
    if (relativePath === 'auth/register.blade.php') return '/register';
    if (relativePath === 'grade12/profile.blade.php') return '/grade12/profile';
    if (relativePath === 'grade12/pay.blade.php') return '/grade12/pay';
    if (relativePath === 'grade12/admin_panel.blade.php') return '/grade12/admin';
    if (relativePath === 'grade12/science/science_home.blade.php') return '/grade12/science';
    if (relativePath === 'grade12/social/social_home.blade.php') return '/grade12/social';
    
    // Check subject home: grade12/{track}/{subject}/{subject}.blade.php
    let match = relativePath.match(/^grade12\/(science|social)\/([^\/]+)\/\2\.blade\.php$/);
    if (match) {
        return `/grade12/${match[1]}/${match[2]}/`;
    }
    
    // Check subject lesson: grade12/{track}/{subject}/lesson/{path}.blade.php
    match = relativePath.match(/^grade12\/(science|social)\/([^\/]+)\/lesson\/(.+)\.blade\.php$/);
    if (match) {
        return `/grade12/${match[1]}/${match[2]}/lesson/${match[3]}`;
    }
    
    // Check subject exercise: grade12/{track}/{subject}/exercise\/(.+)\.blade\.php$/
    match = relativePath.match(/^grade12\/(science|social)\/([^\/]+)\/exercise\/(.+)\.blade\.php$/);
    if (match) {
        return `/grade12/${match[1]}/${match[2]}/exercise/${match[3]}`;
    }
    
    // Check subject exams list (bacii or exams folders)
    // grade12/{track}/{subject}/bacii/{subject}_bacii_exams.blade.php or exams/{subject}_exams.blade.php
    match = relativePath.match(/^grade12\/(science|social)\/([^\/]+)\/(bacii|exams)\/\2_(bacii_)?exams\.blade\.php$/);
    if (match) {
        return `/grade12/${match[1]}/${match[2]}/exams`;
    }
    
    // Check subject individual exam: grade12/{track}/{subject}/(bacii|exams)/{exam}.blade.php
    match = relativePath.match(/^grade12\/(science|social)\/([^\/]+)\/(bacii|exams)\/(.+)\.blade\.php$/);
    if (match) {
        return `/grade12/${match[1]}/${match[2]}/exams/${match[4]}`;
    }
    
    return null;
}

// Fetch URL and save as HTML
function fetchAndSave(url) {
    return new Promise((resolve, reject) => {
        const fullUrl = SERVER_URL + url;
        http.get(fullUrl, (res) => {
            if (res.statusCode !== 200 && res.statusCode !== 301 && res.statusCode !== 302) {
                console.error(`Failed to fetch ${url}: Status Code ${res.statusCode}`);
                resolve(); // skip failure
                return;
            }
            
            // Handle redirects (e.g. from no-slash to slash)
            if (res.statusCode === 301 || res.statusCode === 302) {
                const redirectUrl = res.headers.location;
                const pathOnly = redirectUrl.replace(SERVER_URL, '');
                console.log(`Redirecting ${url} -> ${pathOnly}`);
                fetchAndSave(pathOnly).then(resolve).catch(reject);
                return;
            }
            
            let data = '';
            res.on('data', chunk => { data += chunk; });
            res.on('end', () => {
                // Determine target file path
                let targetPath;
                if (url === '/') {
                    targetPath = path.join(PUBLIC_DIR, 'index.html');
                } else if (url === '/login') {
                    targetPath = path.join(PUBLIC_DIR, 'login.html');
                } else if (url === '/register') {
                    targetPath = path.join(PUBLIC_DIR, 'register.html');
                } else if (url === '/grade12/profile') {
                    targetPath = path.join(PUBLIC_DIR, 'grade12', 'profile.html');
                } else if (url === '/grade12/pay') {
                    targetPath = path.join(PUBLIC_DIR, 'grade12', 'pay.html');
                } else if (url === '/grade12/admin') {
                    targetPath = path.join(PUBLIC_DIR, 'grade12', 'admin.html');
                } else if (url.endsWith('/')) {
                    // Ends in slash, save as index.html inside the folder
                    const folderPath = path.join(PUBLIC_DIR, ...url.split('/').filter(Boolean));
                    fs.mkdirSync(folderPath, { recursive: true });
                    targetPath = path.join(folderPath, 'index.html');
                } else {
                    // Sub-routes (lessons, exercises, exams) - save as index.html inside a folder to allow clean urls
                    const folderPath = path.join(PUBLIC_DIR, ...url.split('/').filter(Boolean));
                    fs.mkdirSync(folderPath, { recursive: true });
                    targetPath = path.join(folderPath, 'index.html');
                }
                
                // Write file
                fs.mkdirSync(path.dirname(targetPath), { recursive: true });
                fs.writeFileSync(targetPath, data);
                console.log(`Saved: ${path.relative(PUBLIC_DIR, targetPath)}`);
                resolve();
            });
        }).on('error', err => {
            console.error(`Error requesting ${url}:`, err.message);
            resolve(); // skip
        });
    });
}

async function main() {
    console.log('Scanning Blade views...');
    const files = getFiles(VIEWS_DIR);
    const urls = new Set();
    
    files.forEach(file => {
        const url = getRouteUrl(file);
        if (url) urls.add(url);
    });
    
    // Add landing pages and static forms explicitly
    urls.add('/');
    urls.add('/login');
    urls.add('/register');
    urls.add('/grade12/profile');
    urls.add('/grade12/pay');
    urls.add('/grade12/admin');
    
    console.log(`Found ${urls.size} routes to export. Starting crawl...`);
    
    for (const url of urls) {
        await fetchAndSave(url);
    }
    
    console.log('Export completed successfully!');
}

main();
