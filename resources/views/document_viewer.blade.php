<!doctype html>
<html lang="km">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }} - StudyNest Document Viewer</title>
    
    <!-- Kantumruy Pro Font -->
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@300;400;600;700&display=swap" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    
    <!-- PDF.js CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>

    <style>
      :root {
        --bg-primary: #0f172a;
        --bg-secondary: #1e293b;
        --accent-color: #2563eb;
        --accent-hover: #3b82f6;
        --text-primary: #f8fafc;
        --text-secondary: #94a3b8;
        --border-color: #334155;
        --shadow-lg: 0 10px 25px -5px rgba(0, 0, 0, 0.3), 0 8px 10px -6px rgba(0, 0, 0, 0.3);
      }

      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      body {
        font-family: "Kantumruy Pro", sans-serif;
        background-color: var(--bg-primary);
        color: var(--text-primary);
        height: 100vh;
        width: 100vw;
        display: flex;
        flex-direction: column;
        overflow: hidden;
      }

      /* Compact Slim Header */
      header {
        height: 56px;
        background-color: var(--bg-secondary);
        border-bottom: 1px solid var(--border-color);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 20px;
        z-index: 10;
        flex-shrink: 0;
      }

      .header-left {
        display: flex;
        align-items: center;
        gap: 16px;
      }

      .back-btn {
        background: transparent;
        border: none;
        color: var(--text-secondary);
        font-size: 18px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        transition: all 0.2s;
        text-decoration: none;
      }

      .back-btn:hover {
        background-color: var(--border-color);
        color: var(--text-primary);
      }

      .doc-title {
        font-size: 16px;
        font-weight: 600;
        max-width: 250px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
      }

      /* Layout modes inside header */
      .layout-modes-bar {
        display: flex;
        background: var(--bg-primary);
        padding: 3px;
        border-radius: 20px;
        gap: 2px;
        border: 1px solid var(--border-color);
      }

      .layout-btn {
        border: none;
        background: transparent;
        padding: 6px 12px;
        border-radius: 15px;
        font-family: inherit;
        font-weight: 700;
        font-size: 12px;
        color: var(--text-secondary);
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 6px;
        transition: all 0.2s;
      }

      .layout-btn.active {
        background: var(--accent-color);
        color: var(--text-primary);
      }

      .header-right {
        display: flex;
        align-items: center;
        gap: 8px;
      }

      .icon-btn {
        background: transparent;
        border: none;
        color: var(--text-secondary);
        font-size: 16px;
        cursor: pointer;
        width: 38px;
        height: 38px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s;
        text-decoration: none;
      }

      .icon-btn:hover {
        background-color: var(--border-color);
        color: var(--text-primary);
      }

      /* Split View Container Layout */
      .split-container {
        flex: 1;
        display: flex;
        width: 100%;
        height: calc(100vh - 56px);
        align-items: stretch;
        position: relative;
        overflow: hidden;
      }

      .split-panel {
        flex: 1;
        overflow: auto;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        background-color: var(--bg-primary);
        cursor: grab;
      }

      .split-panel:active {
        cursor: grabbing;
      }

      /* Draggable divider gutter */
      .gutter {
        width: 10px;
        background-color: var(--border-color);
        cursor: col-resize;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 4;
        transition: background 0.2s;
        user-select: none;
      }

      .gutter:hover, .gutter.dragging {
        background-color: var(--accent-color);
      }

      .gutter-handle {
        color: var(--text-secondary);
        font-size: 11px;
        pointer-events: none;
      }

      .gutter:hover .gutter-handle, .gutter.dragging .gutter-handle {
        color: var(--text-primary);
      }

      body.dragging iframe, body.dragging canvas {
        pointer-events: none;
      }

      canvas {
        background: white;
        box-shadow: var(--shadow-lg);
        border-radius: 4px;
        display: block;
        transform-origin: center center;
      }

      /* Mobile Floating Toggle Button (Hidden on Desktop) */
      .mobile-header-toggle {
        display: none;
      }

      .control-item:hover {
        background-color: var(--border-color);
        color: var(--text-primary);
      }

      .control-item.active {
        background-color: var(--accent-color);
        color: var(--text-primary);
      }

      

      /* Page Navigation Footer Overlay */
      .navigation-bar {
        position: absolute;
        bottom: 24px;
        left: 50%;
        transform: translateX(-50%);
        background-color: rgba(30, 41, 59, 0.9);
        backdrop-filter: blur(12px);
        border: 1px solid var(--border-color);
        padding: 6px 12px;
        border-radius: 30px;
        display: flex;
        align-items: center;
        gap: 16px;
        box-shadow: var(--shadow-lg);
        z-index: 5;
      }

      .nav-btn {
        background: transparent;
        border: none;
        color: var(--text-secondary);
        font-size: 14px;
        cursor: pointer;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s;
      }

      .nav-btn:hover:not(:disabled) {
        background-color: var(--border-color);
        color: var(--text-primary);
      }

      .nav-btn:disabled {
        opacity: 0.3;
        cursor: not-allowed;
      }

      .page-indicator {
        font-size: 13px;
        font-weight: 700;
        color: var(--text-primary);
        white-space: nowrap;
      }

      /* Loading and Error States */
      .status-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: var(--bg-primary);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 16px;
        z-index: 8;
        padding: 20px;
      }

      .spinner {
        width: 40px;
        height: 40px;
        border: 4px solid var(--border-color);
        border-top-color: var(--accent-color);
        border-radius: 50%;
        animation: spin 0.8s linear infinite;
      }

      .error-card {
        background-color: var(--bg-secondary);
        border: 1px solid var(--border-color);
        padding: 30px;
        border-radius: 12px;
        max-width: 400px;
        text-align: center;
        box-shadow: var(--shadow-lg);
      }

      .error-icon {
        color: #ef4444;
        font-size: 40px;
        margin-bottom: 16px;
      }

      .error-card h3 {
        margin-bottom: 8px;
        font-size: 18px;
      }

      .error-card p {
        color: var(--text-secondary);
        font-size: 14px;
        margin-bottom: 20px;
        line-height: 1.5;
      }

      .retry-btn {
        background-color: var(--accent-color);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s;
        text-decoration: none;
        display: inline-block;
      }

      .retry-btn:hover {
        background-color: var(--accent-hover);
      }

      @keyframes spin {
        to { transform: rotate(360deg); }
      }

      /* Responsive Layout Adjustments */
      @media (max-width: 768px) {
        header {
          padding: 0 10px;
          height: 48px;
        }
        .doc-title {
          font-size: 13px;
          max-width: 100px;
        }
        
        .layout-modes-bar {
          display: none !important; /* Hide central layout bar on mobile */
        }
        
        .mobile-header-toggle {
          display: flex; /* Show solution toggle near download on mobile */
        }

        .split-container {
          height: calc(100vh - 48px);
        }
        .split-panel {
          padding: 8px;
        }
        
        .navigation-bar {
          bottom: 24px;
          box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }
        
        #btnSplit {
          display: none !important; /* Force hide Split mode on mobile */
        }
      }
    </style>
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="header-left">
        <a href="javascript:history.back()" class="back-btn" title="ត្រឡប់ក្រោយ (Back)" aria-label="ត្រឡប់ក្រោយ (Go Back)">
          <i class="fas fa-arrow-left"></i>
        </a>
        <div class="doc-title" id="docTitle">{{ $title }}</div>
      </div>

      <!-- Layout modes selector inside header (visible only if solution is provided) -->
      @if(!empty($solution))
      <div class="layout-modes-bar" id="layoutModesBar">
        <button class="layout-btn active" id="btnExam" onclick="setLayoutMode('exam')" aria-label="វិញ្ញាសា (Exam Mode)">
          <i class="fas fa-file-alt"></i> <span>វិញ្ញាសា (Exam)</span>
        </button>
        <button class="layout-btn" id="btnSplit" onclick="setLayoutMode('split')" aria-label="ពុះអេក្រង់ (Split Screen Mode)">
          <i class="fas fa-columns"></i> <span>ពុះអេក្រង់</span>
        </button>
        <button class="layout-btn" id="btnSolution" onclick="setLayoutMode('solution')" aria-label="ចម្លើយ (Solution Mode)">
          <i class="fas fa-lightbulb"></i> <span>ចម្លើយ (Solution)</span>
        </button>
      </div>
      @endif

      <div class="header-right">
        @if(!empty($solution))
        <button class="icon-btn mobile-header-toggle" id="mobileHeaderToggle" onclick="toggleMobileView()" title="ប្តូរទៅចម្លើយ (Toggle Solution)" aria-label="ប្តូរទៅចម្លើយ (Toggle Solution Mode)">
          <i class="fas fa-lightbulb" style="color: #fbbf24;"></i>
        </button>
        @endif
        <a href="{{ $file }}" download class="icon-btn" id="headerDownloadBtn" title="ទាញយកវិញ្ញាសា (Download Exam)" aria-label="ទាញយកវិញ្ញាសា (Download Exam Document)">
          <i class="fas fa-download"></i>
        </a>
      </div>
    </header>

    <!-- Split View Container Workspace -->
    <div class="split-container" id="splitWrapper">
      <!-- Loading Overlay -->
      <div class="status-overlay" id="loadingOverlay">
        <div class="spinner"></div>
        <p>កំពុងផ្ទុកឯកសារ (Loading Document)...</p>
      </div>

      <!-- Error Overlay -->
      <div class="status-overlay" id="errorOverlay" style="display: none;">
        <div class="error-card">
          <i class="fas fa-exclamation-triangle error-icon"></i>
          <h3>មិនអាចផ្ទុកឯកសារបានទេ</h3>
          <p>មានបញ្ហាក្នុងការទាញយក ឬផ្ទុកឯកសារ PDF នេះ។ សូមព្យាយាមឡើងវិញ ឬទាញយកវាដោយផ្ទាល់។</p>
          <a href="{{ $file }}" download class="retry-btn">
            <i class="fas fa-download"></i> ទាញយកឯកសារជា PDF
          </a>
        </div>
      </div>

      <!-- Left Panel: Exam canvas -->
      <div id="exam-photo" class="split-panel">
        <canvas id="pdf-canvas-exam"></canvas>
      </div>

      <!-- Draggable Splitter bar -->
      @if(!empty($solution))
      <div id="drag-bar" class="gutter" style="display: none;">
        <div class="gutter-handle"><i class="fas fa-arrows-alt-h"></i></div>
      </div>
      @endif

      <!-- Right Panel: Solution canvas (visible only if solution is provided) -->
      @if(!empty($solution))
      <div id="solution-photo" class="split-panel" style="display: none;">
        <canvas id="pdf-canvas-sol"></canvas>
      </div>
      @endif

      <!-- Page Navigation overlay (centered bottom) -->
      <div class="navigation-bar" id="navigationBar" style="display: none;">
        <button class="nav-btn" id="prevPageBtn" title="ទំព័រមុន" aria-label="ទំព័រមុន (Previous Page)">
          <i class="fas fa-chevron-left"></i>
        </button>
        <span class="page-indicator">
          ទំព័រ <span id="pageNumDisplay">1</span> / <span id="pageCountDisplay">1</span>
        </span>
        <button class="nav-btn" id="nextPageBtn" title="ទំព័របន្ទាប់" aria-label="ទំព័របន្ទាប់ (Next Page)">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>

      </div>

    <!-- Viewer Script Logic -->
    <script>
      pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

      const fileUrl = "{{ $file }}";
      const solUrl = "{{ $solution ?? '' }}";

      let pdfDocExam = null;
      let pdfDocSol = null;

      let pageNumExam = 1;
      let pageNumSol = 1;

      let pageRenderingExam = false;
      let pageRenderingSol = false;
      let pendingPageNumExam = null;
      let pendingPageNumSol = null;

      let activeLayoutMode = 'exam'; // 'exam', 'split', 'solution'
      let scaleMode = 'page'; // 'page' or 'width'
      let currentZoom = 1.0; // zoom multiplier
      let baseScaleExam = 1.0;
      let baseScaleSol = 1.0;

      // Elements
      const splitWrapper = document.getElementById('splitWrapper');
      const examPanel = document.getElementById('exam-photo');
      const solPanel = document.getElementById('solution-photo');
      const dragBar = document.getElementById('drag-bar');

      const canvasExam = document.getElementById('pdf-canvas-exam');
      const ctxExam = canvasExam.getContext('2d');
      const canvasSol = document.getElementById('pdf-canvas-sol');
      const ctxSol = canvasSol ? canvasSol.getContext('2d') : null;

      const loadingOverlay = document.getElementById('loadingOverlay');
      const errorOverlay = document.getElementById('errorOverlay');
      const navigationBar = document.getElementById('navigationBar');
      

      const pageNumDisplay = document.getElementById('pageNumDisplay');
      const pageCountDisplay = document.getElementById('pageCountDisplay');
      

      const prevPageBtn = document.getElementById('prevPageBtn');
      const nextPageBtn = document.getElementById('nextPageBtn');
      
      
      
      
      
      const headerDownloadBtn = document.getElementById('headerDownloadBtn');
      

      // Load PDFs
      let loadPromises = [];

      // 1. Load Exam PDF
      loadPromises.push(
        pdfjsLib.getDocument(fileUrl).promise.then(pdf => {
          pdfDocExam = pdf;
        })
      );

      // 2. Load Solution PDF (if available)
      if (solUrl) {
        loadPromises.push(
          pdfjsLib.getDocument(solUrl).promise.then(pdf => {
            pdfDocSol = pdf;
          })
        );
      }

      Promise.all(loadPromises).then(() => {
        loadingOverlay.style.display = 'none';
        
        updateNavigationIndicators();
        renderAll();
      }).catch(err => {
        console.error("PDF loading failed:", err);
        loadingOverlay.style.display = 'none';
        errorOverlay.style.display = 'flex';
      });

      // Render Exam canvas
      function renderExamPage(num) {
        if (!pdfDocExam) return;
        if (pageRenderingExam) {
          pendingPageNumExam = num;
          return;
        }
        pageRenderingExam = true;

        pdfDocExam.getPage(num).then(page => {
          const viewportDefault = page.getViewport({ scale: 1.0 });
          const panelWidth = examPanel.clientWidth - 40;
          const panelHeight = examPanel.clientHeight - 40;

          if (scaleMode === 'page') {
            const scaleX = panelWidth / viewportDefault.width;
            const scaleY = panelHeight / viewportDefault.height;
            baseScaleExam = Math.min(scaleX, scaleY);
          } else {
            baseScaleExam = panelWidth / viewportDefault.width;
          }

          const finalScale = baseScaleExam * currentZoom;
          const viewport = page.getViewport({ scale: finalScale });

          const outputScale = window.devicePixelRatio || 1;
          canvasExam.width = Math.floor(viewport.width * outputScale);
          canvasExam.height = Math.floor(viewport.height * outputScale);
          canvasExam.style.width = Math.floor(viewport.width) + "px";
          canvasExam.style.height =  Math.floor(viewport.height) + "px";

          const transform = outputScale !== 1 
            ? [outputScale, 0, 0, outputScale, 0, 0] 
            : null;

          const renderContext = {
            canvasContext: ctxExam,
            transform: transform,
            viewport: viewport
          };

          page.render(renderContext).promise.then(() => {
            pageRenderingExam = false;
            if (pendingPageNumExam !== null) {
              const nextNum = pendingPageNumExam;
              pendingPageNumExam = null;
              renderExamPage(nextNum);
            }
          });
        });
      }

      // Render Solution canvas
      function renderSolPage(num) {
        if (!pdfDocSol || !canvasSol) return;
        if (pageRenderingSol) {
          pendingPageNumSol = num;
          return;
        }
        pageRenderingSol = true;

        pdfDocSol.getPage(num).then(page => {
          const viewportDefault = page.getViewport({ scale: 1.0 });
          const panelWidth = solPanel.clientWidth - 40;
          const panelHeight = solPanel.clientHeight - 40;

          if (scaleMode === 'page') {
            const scaleX = panelWidth / viewportDefault.width;
            const scaleY = panelHeight / viewportDefault.height;
            baseScaleSol = Math.min(scaleX, scaleY);
          } else {
            baseScaleSol = panelWidth / viewportDefault.width;
          }

          const finalScale = baseScaleSol * currentZoom;
          const viewport = page.getViewport({ scale: finalScale });

          const outputScale = window.devicePixelRatio || 1;
          canvasSol.width = Math.floor(viewport.width * outputScale);
          canvasSol.height = Math.floor(viewport.height * outputScale);
          canvasSol.style.width = Math.floor(viewport.width) + "px";
          canvasSol.style.height =  Math.floor(viewport.height) + "px";

          const transform = outputScale !== 1 
            ? [outputScale, 0, 0, outputScale, 0, 0] 
            : null;

          const renderContext = {
            canvasContext: ctxSol,
            transform: transform,
            viewport: viewport
          };

          page.render(renderContext).promise.then(() => {
            pageRenderingSol = false;
            if (pendingPageNumSol !== null) {
              const nextNum = pendingPageNumSol;
              pendingPageNumSol = null;
              renderSolPage(nextNum);
            }
          });
        });
      }

      // Render both active panels
      function renderAll() {
        if (activeLayoutMode === 'exam') {
          renderExamPage(pageNumExam);
        } else if (activeLayoutMode === 'solution') {
          renderSolPage(pageNumSol);
        } else if (activeLayoutMode === 'split') {
          renderExamPage(pageNumExam);
          renderSolPage(pageNumSol);
        }
        
      }

      // Update Paging Overlay status
      function updateNavigationIndicators() {
        let currentPage = 1;
        let totalPages = 1;

        if (activeLayoutMode === 'exam') {
          currentPage = pageNumExam;
          totalPages = pdfDocExam ? pdfDocExam.numPages : 1;
        } else if (activeLayoutMode === 'solution') {
          currentPage = pageNumSol;
          totalPages = pdfDocSol ? pdfDocSol.numPages : 1;
        } else if (activeLayoutMode === 'split') {
          currentPage = Math.max(pageNumExam, pageNumSol);
          totalPages = Math.max(
            pdfDocExam ? pdfDocExam.numPages : 1,
            pdfDocSol ? pdfDocSol.numPages : 1
          );
        }

        pageNumDisplay.textContent = currentPage;
        pageCountDisplay.textContent = totalPages;

        prevPageBtn.disabled = (currentPage <= 1);
        nextPageBtn.disabled = (currentPage >= totalPages);

        if (totalPages > 1) {
          navigationBar.style.display = 'flex';
        } else {
          navigationBar.style.display = 'none';
        }

        // Dynamically adjust download targets based on active view document
        if (activeLayoutMode === 'solution' && solUrl) {
          headerDownloadBtn.href = solUrl;
          
        } else {
          headerDownloadBtn.href = fileUrl;
          
        }
      }

      // Layout Switcher Logic
      function setLayoutMode(mode) {
        if (!pdfDocSol) return;
        activeLayoutMode = mode;

        // Reset panel flex styles
        examPanel.style.flex = '';
        solPanel.style.flex = '';

        // Reset button active classes
        document.getElementById('btnExam').classList.remove('active');
        document.getElementById('btnSplit').classList.remove('active');
        document.getElementById('btnSolution').classList.remove('active');

        if (mode === 'exam') {
          document.getElementById('btnExam').classList.add('active');
          examPanel.style.display = 'flex';
          solPanel.style.display = 'none';
          dragBar.style.display = 'none';
        } else if (mode === 'solution') {
          document.getElementById('btnSolution').classList.add('active');
          examPanel.style.display = 'none';
          solPanel.style.display = 'flex';
          dragBar.style.display = 'none';
        } else if (mode === 'split') {
          document.getElementById('btnSplit').classList.add('active');
          examPanel.style.display = 'flex';
          solPanel.style.display = 'flex';
          dragBar.style.display = 'flex';
          initDraggableSplit();
        }

        const mobileToggleBtn = document.getElementById('mobileHeaderToggle');
        if (mobileToggleBtn) {
           if (mode === 'exam' || mode === 'split') {
             mobileToggleBtn.innerHTML = '<i class="fas fa-lightbulb" style="color: #fbbf24;"></i>';
             mobileToggleBtn.title = "ប្តូរទៅចម្លើយ (Toggle Solution)";
           } else if (mode === 'solution') {
             mobileToggleBtn.innerHTML = '<i class="fas fa-file-alt" style="color: #38bdf8;"></i>';
             mobileToggleBtn.title = "ប្តូរទៅវិញ្ញាសា (Toggle Exam)";
           }
        }

        // Force repaint
        setTimeout(() => {
          updateNavigationIndicators();
          renderAll();
        }, 50);
      }

      function toggleMobileView() {
        if (activeLayoutMode === 'exam') {
          setLayoutMode('solution');
        } else {
          setLayoutMode('exam');
        }
      }

      // Pagination Actions
      function onPrevPage() {
        let changed = false;
        if (activeLayoutMode === 'exam' || activeLayoutMode === 'split') {
          if (pageNumExam > 1) { pageNumExam--; changed = true; }
        }
        if (activeLayoutMode === 'solution' || activeLayoutMode === 'split') {
          if (pageNumSol > 1) { pageNumSol--; changed = true; }
        }
        if (changed) {
          updateNavigationIndicators();
          renderAll();
        }
      }

      function onNextPage() {
        let changed = false;
        if (activeLayoutMode === 'exam' || activeLayoutMode === 'split') {
          if (pdfDocExam && pageNumExam < pdfDocExam.numPages) { pageNumExam++; changed = true; }
        }
        if (activeLayoutMode === 'solution' || activeLayoutMode === 'split') {
          if (pdfDocSol && pageNumSol < pdfDocSol.numPages) { pageNumSol++; changed = true; }
        }
        if (changed) {
          updateNavigationIndicators();
          renderAll();
        }
      }

      prevPageBtn.addEventListener('click', onPrevPage);
      nextPageBtn.addEventListener('click', onNextPage);

      // Fit mode button handlers
      

      

      // Zoom button handlers
      

      

      // Debounced window resize handler
      let resizeTimeout;
      window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
          renderAll();
        }, 150);
      });

      // Draggable Split Logic
      let isGutterDragging = false;
      function initDraggableSplit() {
        if (!dragBar || dragBar.getAttribute('data-drag-init') === 'true') return;
        dragBar.setAttribute('data-drag-init', 'true');

        dragBar.addEventListener('mousedown', (e) => {
          isGutterDragging = true;
          document.body.classList.add('dragging');
          dragBar.classList.add('dragging');
          e.preventDefault();
        });

        document.addEventListener('mousemove', (e) => {
          if (!isGutterDragging) return;

          const containerRect = splitWrapper.getBoundingClientRect();
          const offsetX = e.clientX - containerRect.left;

          let percentage = (offsetX / containerRect.width) * 100;
          if (percentage < 15) percentage = 15;
          if (percentage > 85) percentage = 85;

          examPanel.style.flex = `0 0 ${percentage}%`;
          solPanel.style.flex = `0 0 ${100 - percentage - (dragBar.offsetWidth / containerRect.width * 100)}%`;
          
          renderAll();
        });

        document.addEventListener('mouseup', () => {
          if (isGutterDragging) {
            isGutterDragging = false;
            document.body.classList.remove('dragging');
            dragBar.classList.remove('dragging');
          }
        });
      }

      // Drag-to-pan scrolling on panels
      function setupDragToScroll(panel) {
        let isDown = false;
        let startX, startY;
        let scrollLeft, scrollTop;

        panel.addEventListener('mousedown', (e) => {
          isDown = true;
          e.preventDefault();
          startX = e.pageX - panel.offsetLeft;
          startY = e.pageY - panel.offsetTop;
          scrollLeft = panel.scrollLeft;
          scrollTop = panel.scrollTop;
        });

        panel.addEventListener('mouseleave', () => { isDown = false; });
        panel.addEventListener('mouseup', () => { isDown = false; });

        panel.addEventListener('mousemove', (e) => {
          if (!isDown) return;
          e.preventDefault();
          const x = e.pageX - panel.offsetLeft;
          const y = e.pageY - panel.offsetTop;
          const walkX = (x - startX) * 1.5;
          const walkY = (y - startY) * 1.5;
          panel.scrollLeft = scrollLeft - walkX;
          panel.scrollTop = scrollTop - walkY;
        });
      }

      setupDragToScroll(examPanel);
      if (solPanel) setupDragToScroll(solPanel);

      // Keyboard navigation keys
      document.addEventListener('keydown', (e) => {
        switch (e.key) {
          case 'ArrowLeft':
          case 'ArrowUp':
            onPrevPage();
            break;
          case 'ArrowRight':
          case 'ArrowDown':
            onNextPage();
            break;
          case '+':
          case '=':
            
            break;
          case '-':
          case '_':
            
            break;
          case 'd':
          case 'D':
            const link = document.createElement('a');
            link.href = (activeLayoutMode === 'solution' && solUrl) ? solUrl : fileUrl;
            link.download = "";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            break;
        }
      });
    </script>
  </body>
</html>
