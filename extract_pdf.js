const fs = require('fs');
const pdf = require('pdf-parse');

let dataBuffer = fs.readFileSync('C:/IT/kimou/StudyNest/grade12/science/biology_g12/lesson/chapter_5/កម្រងសំណួរចម្លើយជីវវិទ្យា_ជា_សុភា (2).pdf');

pdf(dataBuffer).then(function(data) {
    fs.writeFileSync('pdf_text.txt', data.text);
    console.log('PDF text extracted to pdf_text.txt');
});
