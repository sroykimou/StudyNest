const fs = require('fs');
const zlib = require('zlib');
const path = require('path');

function readObject(hash) {
    const dir = hash.substring(0, 2);
    const file = hash.substring(2);
    const objPath = path.join('.git', 'objects', dir, file);
    if (!fs.existsSync(objPath)) return null;
    const compressed = fs.readFileSync(objPath);
    return zlib.inflateSync(compressed);
}

function parseTree(buffer) {
    let offset = 0;
    while(buffer[offset] !== 0) offset++;
    offset++; // null byte
    const entries = [];
    while (offset < buffer.length) {
        const space = buffer.indexOf(32, offset);
        const mode = buffer.toString('utf8', offset, space);
        offset = space + 1;
        const nullByte = buffer.indexOf(0, offset);
        const name = buffer.toString('utf8', offset, nullByte);
        offset = nullByte + 1;
        const hash = buffer.toString('hex', offset, offset + 20);
        offset += 20;
        entries.push({ mode, name, hash });
    }
    return entries;
}

try {
    const headPath = fs.readFileSync('.git/HEAD', 'utf8').trim();
    let commitHash = '';
    if (headPath.startsWith('ref: ')) {
        commitHash = fs.readFileSync('.git/' + headPath.split(' ')[1], 'utf8').trim();
    } else {
        commitHash = headPath;
    }

    const commitObj = readObject(commitHash);
    const commitContent = commitObj.toString('utf8');
    const treeHash = commitContent.match(/tree ([a-f0-9]{40})/)[1];

    const treeObj = readObject(treeHash);
    const entries = parseTree(treeObj);

    const idx = entries.find(e => e.name === 'index.php' || e.name === 'index.html');
    if (idx) {
        const idxContent = readObject(idx.hash);
        const nullIdx = idxContent.indexOf(0);
        fs.writeFileSync('index.php', idxContent.slice(nullIdx + 1));
        console.log('Restored index.php');
    }

    const errIdx = entries.find(e => e.name === '404.php' || e.name === '404.html');
    if (errIdx) {
        const errContent = readObject(errIdx.hash);
        const nullIdx = errContent.indexOf(0);
        fs.writeFileSync('404.php', errContent.slice(nullIdx + 1));
        console.log('Restored 404.php');
    }
} catch (err) {
    console.error(err);
}
