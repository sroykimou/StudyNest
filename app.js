const express = require('express');
const app = express();
const path = require('path');

// This allows your HTML files to see each other
app.use(express.static('public'));

// This is a "Fake Database" (it's just a list in memory)
let lessons = [];

// Route to get lessons
app.get('/api/lessons', (req, res) => {
    res.json(lessons);
});

// Route to "Upload" a lesson
app.post('/api/upload', express.json(), (req, res) => {
    lessons.push(req.body);
    res.send("Lesson added to Mock Database!");
});

app.listen(3000, () => {
    console.log("🚀 Server is running at http://localhost:3000");
});