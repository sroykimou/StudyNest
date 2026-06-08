const fs = require('fs');
const path = require('path');
const { PDFParse } = require('pdf-parse');

const baciiDir = path.join(__dirname, 'grade12/science/biology_g12/bacii');

const pdfFiles = [
    '2014.1.pdf',
    '2014.2.pdf',
    '2015.pdf',
    '2016.pdf',
    '2017.pdf',
    '2018.pdf',
    '2019.pdf',
    '2021.pdf'
];

async function extractText(filename) {
    const pdfPath = path.join(baciiDir, filename);
    const textPath = path.join(baciiDir, filename.replace('.pdf', '_text.txt'));
    
    if (!fs.existsSync(pdfPath)) {
        console.log(`File not found: ${pdfPath}`);
        return;
    }
    
    try {
        const dataBuffer = fs.readFileSync(pdfPath);
        const parser = new PDFParse({ data: dataBuffer });
        const result = await parser.getText();
        
        fs.writeFileSync(textPath, result.text);
        console.log(`Successfully extracted ${filename} -> ${path.basename(textPath)} (Length: ${result.text.trim().length})`);
    } catch (error) {
        console.error(`Error extracting ${filename}:`, error.message);
    }
}

async function run() {
    for (const file of pdfFiles) {
        await extractText(file);
    }
}

run();
