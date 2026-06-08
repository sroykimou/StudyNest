const fs = require('fs');
const path = require('path');
const pdf = require('pdf-parse');

const pdfPath = path.join(__dirname, '..', 'grade12/science/biology_g12/bacii/2018.pdf');
const outputPath = path.join(__dirname, '..', 'grade12/science/biology_g12/bacii/2018_text.txt');

if (!fs.existsSync(pdfPath)) {
    console.log('PDF not found at ' + pdfPath);
    process.exit(1);
}

const dataBuffer = fs.readFileSync(pdfPath);
pdf(dataBuffer).then(function(data) {
    fs.writeFileSync(outputPath, data.text);
    console.log('Extracted to ' + outputPath);
}).catch(err => {
    console.error('Error:', err);
});
