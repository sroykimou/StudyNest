<!doctype html>
<html lang="km">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>វិញ្ញាសាជីវវិទ្យា ២០១៩ - Photo View</title>
    
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
    
      .split-container {
        display: flex;
        width: 100%;
        max-width: 1400px;
        gap: 0;
        align-items: stretch;
        position: relative;
        margin-top: 10px;
      }
      .split-panel {
        flex: 1;
        min-width: 150px;
        transition: none !important;
      }
      .gutter {
        width: 12px;
        background: #cbd5e1;
        cursor: col-resize;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.2s;
        border-radius: 4px;
        margin: 0 8px;
        user-select: none;
      }
      .gutter:hover, .gutter.dragging {
        background: #1e3a8a;
      }
      .gutter-handle {
        color: #64748b;
        font-size: 12px;
        pointer-events: none;
      }
      .gutter:hover .gutter-handle, .gutter.dragging .gutter-handle {
        color: white;
      }
      body.dragging iframe {
        pointer-events: none;
      }
      .view-modes {
        display: flex;
        background: #e2e8f0;
        padding: 4px;
        border-radius: 30px;
        gap: 4px;
        margin-bottom: 10px;
        position: sticky;
        top: 20px;
        z-index: 100;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
      }
      .mode-btn {
        border: none;
        background: transparent;
        padding: 10px 20px;
        border-radius: 20px;
        font-family: inherit;
        font-weight: 700;
        font-size: 14px;
        color: #475569;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.2s;
      }
      .mode-btn.active {
        background: #1e3a8a;
        color: white;
        box-shadow: 0 4px 10px rgba(30, 58, 138, 0.2);
      }
    
      
      @media (max-width: 768px) {
        body {
          padding: 0 !important;
          margin: 0 !important;
          overflow: hidden !important;
          height: 100vh;
          width: 100vw;
          display: flex;
          flex-direction: column;
          gap: 0 !important;
          background: #0f172a !important;
        }
        .back-link {
          position: absolute;
          top: 10px;
          left: 10px;
          z-index: 101;
          background: rgba(15, 23, 42, 0.8);
          color: white !important;
          padding: 8px 14px;
          border-radius: 20px;
          font-size: 11px;
          backdrop-filter: blur(4px);
          margin-bottom: 0 !important;
          box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        .view-modes {
          position: relative !important;
          top: 0 !important;
          width: 100% !important;
          margin-bottom: 0 !important;
          border-radius: 0 !important;
          background: #1e293b !important;
          box-shadow: none !important;
          padding: 6px !important;
        }
        .mode-btn {
          flex: 1;
          justify-content: center;
          padding: 8px 10px;
          font-size: 11.5px;
          gap: 6px;
        }
        #btnSplit {
          display: none !important;
        }
        .split-container {
          flex: 1;
          height: calc(100vh - 48px);
          margin-top: 0 !important;
          width: 100% !important;
          max-width: 100% !important;
        }
        .photo-container {
          width: 100% !important;
          max-width: 100% !important;
          height: 100% !important;
          padding: 0 !important;
          margin: 0 !important;
          border: none !important;
          border-radius: 0 !important;
          box-shadow: none !important;
          display: flex;
          flex-direction: column;
        }
        .pdf-view {
          flex: 1;
          height: 100% !important;
          border-radius: 0 !important;
        }
        .caption {
          display: none !important;
        }
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

    <div class="view-modes">
      <button class="mode-btn active" id="btnExam" onclick="setViewMode('exam')">
        <i class="fas fa-file-alt"></i> វិញ្ញាសា (Exam)
      </button>
      <button class="mode-btn" id="btnSplit" onclick="setViewMode('split')">
        <i class="fas fa-columns"></i> ពុះអេក្រង់ (Split Screen)
      </button>
      <button class="mode-btn" id="btnSolution" onclick="setViewMode('solution')">
        <i class="fas fa-lightbulb"></i> ចម្លើយ (Solution)
      </button>
    </div>

    <div class="split-container" id="splitWrapper">
    <!-- Exam "Photo" -->
    <div id="exam-photo" class="photo-container split-panel">
      <iframe class="pdf-view" src="/grade12/science/biology_g12/exams/2019/2019.pdf#toolbar=0&navpanes=0&scrollbar=0"></iframe>
      <div class="caption">វិញ្ញាសាប្រឡងបាក់ឌុប ២០១៩</div>
    </div>

    
      <div id="drag-bar" class="gutter" style="display: none;">
        <div class="gutter-handle"><i class="fas fa-arrows-alt-h"></i></div>
      </div>

      <!-- Solution "Photo" (Hidden by default) -->
      <div id="solution-photo" class="photo-container split-panel" style="display: none;">
      <iframe class="pdf-view" src="/grade12/science/biology_g12/exams/2019/2019answer.pdf#toolbar=0&navpanes=0&scrollbar=0"></iframe>
      <div class="caption">ដំណោះស្រាយលម្អិត ២០១៩</div>
    </div>

    </div>

    

    <script>
      let isDragging = false;

      function initDrag() {
        const gutter = document.getElementById('drag-bar');
        const container = document.getElementById('splitWrapper');
        const leftPanel = document.getElementById('exam-photo');
        const rightPanel = document.getElementById('solution-photo');

        if (gutter.getAttribute('data-drag-init') === 'true') return;
        gutter.setAttribute('data-drag-init', 'true');

        gutter.addEventListener('mousedown', (e) => {
          isDragging = true;
          document.body.classList.add('dragging');
          gutter.classList.add('dragging');
          e.preventDefault();
        });

        document.addEventListener('mousemove', (e) => {
          if (!isDragging) return;
          
          const containerRect = container.getBoundingClientRect();
          const offsetX = e.clientX - containerRect.left;
          
          let percentage = (offsetX / containerRect.width) * 100;
          if (percentage < 15) percentage = 15;
          if (percentage > 85) percentage = 85;
          
          leftPanel.style.flex = `0 0 ${percentage}%`;
          rightPanel.style.flex = `0 0 ${100 - percentage - (gutter.offsetWidth / containerRect.width * 100)}%`;
        });

        document.addEventListener('mouseup', () => {
          if (isDragging) {
            isDragging = false;
            document.body.classList.remove('dragging');
            gutter.classList.remove('dragging');
          }
        });
      }

      function setViewMode(mode) {
        const exam = document.getElementById('exam-photo');
        const sol = document.getElementById('solution-photo');
        const gutter = document.getElementById('drag-bar');
        
        document.getElementById('btnExam').classList.remove('active');
        document.getElementById('btnSplit').classList.remove('active');
        document.getElementById('btnSolution').classList.remove('active');

        exam.style.flex = '';
        sol.style.flex = '';

        if (mode === 'exam') {
          document.getElementById('btnExam').classList.add('active');
          exam.style.display = 'block';
          sol.style.display = 'none';
          gutter.style.display = 'none';
        } else if (mode === 'solution') {
          document.getElementById('btnSolution').classList.add('active');
          exam.style.display = 'none';
          sol.style.display = 'block';
          gutter.style.display = 'none';
        } else if (mode === 'split') {
          document.getElementById('btnSplit').classList.add('active');
          exam.style.display = 'block';
          sol.style.display = 'block';
          gutter.style.display = 'flex';
          initDrag();
        }
      }
    </script>
  </body>
</html>



