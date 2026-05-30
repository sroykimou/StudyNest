const fs = require('fs');
const path = require('path');

const replacements = [
    ["េសពé", "ស្ពៀរ"],
    ["េសéព", "ស្ពៀរ"],
    ["ចរនT", "ចរន្ត"],
    ["ចរនអT", "ចរន្ត"],
    ["ចរនà", "ចរន្ត"],
    ["@តង់", "ត្រង់"],
    ["@បែវង", "ប្រវែង"],
    ["@សប", "ស្រប"],
    ["@បតB ុង", "ប្រូតុង"],
    ["េអឡចិ @តង£", "អេឡិចត្រុង"],
    ["សូេលណូអតុី", "សូឡេណូអ៊ីត"],
    ["សូេលណូអត", "សូឡេណូអ៊ីត"],
    ["េសãគsីវង់", "សៀគ្វីវង់"],
    ["េសãគវsីង", "សៀគ្វីវង់"],
    ["បបូ ន៊ី", "បូប៊ីន"],
    ["បបូ ៊ីន", "បូប៊ីន"],
    ["ផចិត", "ផ្ចិត"],
    ["ផតចិ", "ផ្ចិត"],
    ["ចមងយ", "ចម្ងាយ"],
    ["0ងំ តងស់ ុីេត", "អាំងតង់ស៊ីតេ"],
    ["0ំងតង់សុីេត", "អាំងតង់ស៊ីតេ"],
    ["0ងំ ឌុ ចសយងុ", "អាំងឌុចស្យុង"],
    ["0ំងឌុចស្យុង", "អាំងឌុចស្យុង"],
    ["ឌីេអឡិ ច@ទិច", "ឌីអេឡិចត្រិច"],
    ["មជឈYÅន", "មជ្ឈដ្ឋាន"],
    ["កម`ងំ", "កម្លាំង"],
    ["ម៉េញទិច", "ម៉ាញេទិច"],
    ["ម៉ញទិច", "ម៉ាញេទិច"],
    ["ជ@មបម៉េញទិច", "ជម្រាបម៉ាញេទិច"],
    ["ជ@មបម៉ាញេទិច", "ជម្រាបម៉ាញេទិច"],
    ["េតសា](", "តេស្លា"],
    ["េត6`ែម@៉ត", "តេស្លាម៉ែត"],
    ["សុញញកស", "សុញ្ញាកាស"],
    ["សុញញ កស", "សុញ្ញាកាស"],
    ["î@តង់", "ឱ្យត្រង់"],
    ["រcង", "រវាង"],
    ["េរãងគន", "រៀងៗខ្លួន"],
    ["គិ តជ", "គិតជា"],
    ["េគេ0យ", "គេឱ្យ"],
    ["េគឲយ", "គេឱ្យ"],
    ["េគឱយ", "គេឱ្យ"],
    ["សិ ថត", "ស្ថិត"],
    ["សិ តថ", "ស្ថិត"],
    ["បេងក ត", "បង្កើត"],
    ["បេងតក", "បង្កើត"],
    ["េក តមន", "កើតមាន"],
    ["𝜇%", "\\mu_0"],
    ["𝜇0", "\\mu_0"],
    ["𝜇'", "\\mu_r"],
    ["𝜇𝑟", "\\mu_r"],
    ["𝜇-", "\\mu_r"],
    ["𝐵8", "B_H"],
    ["𝐵!", "B_H"],
    ["𝐵\"", "B"],
    ["µT", "\\mu\\text{T}"],
    ["Ω", "\\Omega"],
    ["𝜋", "\\pi"],
    ["× 10\"", "\\times 10"],
    ["10\"#", "10^{-5}"],
    ["10\"&", "10^{-7}"],
    ["10\"*", "10^{-4}"],
    ["10\":", "10^{-3}"],
    ["10\"3B", "10^{-19}"],
    ["10\"3:", "10^{-13}"],
    ["10\")", "10^{-4}"],
    ["10#", "10^5"],
    ["10&", "10^7"],
    ["10D", "10^6"],
    ];

function applyFixes(content) {
    let newContent = content;
    for (const [oldStr, newStr] of replacements) {
        newContent = newContent.split(oldStr).join(newStr);
    }
    
    // Context-sensitive replacements
    newContent = newContent.split("ចរន ").join("ចរន្ត ");
    newContent = newContent.split("ចរន។").join("ចរន្ត។");
    newContent = newContent.split("ចរនអ").join("ចរន្តអ");
    
    newContent = newContent.replace(/កំ\s*([A-Z])/g, 'កាំ $1');
    newContent = newContent.split("មានកំ").join("មានកាំ");
    newContent = newContent.split("កំនៃ").join("កាំនៃ");

    return newContent;
}

const baseDir = path.join(__dirname, "grade12/science/physics_g12/exercise");
const chapters = ["chapter 1", "chapter 2", "chapter 3"];

chapters.forEach(chapter => {
    const chapterPath = path.join(baseDir, chapter);
    if (!fs.existsSync(chapterPath)) {
        console.log(`Chapter directory ${chapter} not found.`);
        return;
    }

    // Function to process a directory recursively
    function processDir(dir) {
        const entries = fs.readdirSync(dir, { withFileTypes: true });
        for (const entry of entries) {
            const fullPath = path.join(dir, entry.name);
            if (entry.isDirectory()) {
                processDir(fullPath);
            } else if (entry.isFile() && entry.name.endsWith('.html')) {
                console.log(`Processing ${fullPath}...`);
                const content = fs.readFileSync(fullPath, 'utf8');
                const newContent = applyFixes(content);
                
                if (newContent !== content) {
                    fs.writeFileSync(fullPath, newContent, 'utf8');
                    console.log(`  Fixed errors in ${entry.name}`);
                } else {
                    console.log(`  No errors found in ${entry.name}`);
                }
            }
        }
    }

    processDir(chapterPath);
});
