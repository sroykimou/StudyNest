<!doctype html>
<html lang="km">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>វិញ្ញាសាជីវវិទ្យា ២០១៨ - Photo View</title>
    
    <!-- Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />

    <style>
      body {
        margin: 0;
        padding: 20px;
        background-color: #f0f2f5;
        font-family: "Kantumruy Pro", sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
      }

      /* Clean Photo Frame */
      .photo-container {
        width: 100%;
        max-width: 900px;
        background: white;
        padding: 10px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        border-radius: 8px;
        position: relative;
        transition: transform 0.3s ease;
      }

      .photo-container:hover {
        transform: translateY(-5px);
      }

      .pdf-view {
        width: 100%;
        height: 1200px;
        border: none;
        border-radius: 4px;
        display: block;
      }

      /* Label below "photo" */
      .caption {
        padding: 15px;
        text-align: center;
        font-weight: 700;
        color: #1e3a8a;
        font-size: 18px;
        border-top: 1px solid #eee;
        margin-top: 10px;
      }

      /* Simple Toggle Button */
      .reveal-btn {
        background: #1e3a8a;
        color: white;
        border: none;
        padding: 15px 30px;
        border-radius: 50px;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 10px;
        box-shadow: 0 4px 15px rgba(30, 58, 138, 0.3);
        position: sticky;
        bottom: 20px;
        z-index: 100;
      }

      .reveal-btn:hover {
        background: #2563eb;
      }

      .back-link {
        align-self: flex-start;
        text-decoration: none;
        color: #64748b;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 10px;
      }

      /* Hide browser PDF UI as much as possible */
      iframe {
        scrollbar-width: none;
        -ms-overflow-style: none;
      }
      iframe::-webkit-scrollbar {
        display: none;
      }
    </style>
    <!-- Main JS -->
    <script src="{{ asset('assets/main.js') }}"></script>
    <script>
      StudyNest.checkAccess(6);
    </script>
  </head>
  <body>
    <a href="biology_bacii_exams" class="back-link">
      <i class="fas fa-arrow-left"></i> ត្រឡប់ក្រោយ
    </a>

    <!-- Exam "Photo" -->
    <div class="photo-container">
      <iframe class="pdf-view" src="2018/2018.pdf#toolbar=0&navpanes=0&scrollbar=0"></iframe>
      <div class="caption">វិញ្ញាសាប្រឡងបាក់ឌុប ២០១៨</div>
    </div>

    <!-- Solution "Photo" (Hidden by default) -->
    <div id="solution-photo" class="photo-container" style="display: none;">
      <iframe class="pdf-view" src="2018/2018answer.pdf#toolbar=0&navpanes=0&scrollbar=0"></iframe>
      <div class="caption">ដំណោះស្រាយលម្អិត ២០១៨</div>
    </div>

    <!-- Sticky Reveal Button -->
    <button id="toggleBtn" class="reveal-btn" onclick="toggleSolution()">
      <i class="fas fa-lightbulb"></i> មើលចម្លើយ (Show Solution)
    </button>

    <script>
      function toggleSolution() {
        const sol = document.getElementById('solution-photo');
        const btn = document.getElementById('toggleBtn');
        
        if (sol.style.display === 'none') {
          sol.style.display = 'block';
          btn.innerHTML = '<i class="fas fa-eye-slash"></i> លាក់ចម្លើយ (Hide Solution)';
          btn.style.background = '#475569';
          // Scroll to solution
          sol.scrollIntoView({ behavior: 'smooth' });
        } else {
          sol.style.display = 'none';
          btn.innerHTML = '<i class="fas fa-lightbulb"></i> មើលចម្លើយ (Show Solution)';
          btn.style.background = '#1e3a8a';
          window.scrollTo({ top: 0, behavior: 'smooth' });
        }
      }
    </script>
  </body>
</html>
