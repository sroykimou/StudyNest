<!doctype html>
<html lang="km">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>វិញ្ញាសារត្រៀមប្រឡង គណិតវិទ្យា | StudyNest</title>
    <meta
      name="description"
      content="បណ្តុំវិញ្ញាសារត្រៀមប្រឡងសញ្ញាបត្រមធ្យមសិក្សាទុតិយភូមិ មុខវិជ្ជាគណិតវិទ្យា"
    />

    <!-- Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@300;400;600;700&family=Rajdhani:wght@600;700&display=swap"
      rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />

    <style>
      :root {
        --bg-canvas: #f1f5f9;
        --card-bg: #ffffff;
        --ink-black: #0f172a;
        --ink-gray: #475569;
        --royal-blue: #1e3a8a;
        --royal-blue-light: #eff6ff;
        --accent: #8b5cf6;
        --border-color: #e2e8f0;
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        background-color: var(--bg-canvas);
        color: var(--ink-black);
        font-family: "Kantumruy Pro", sans-serif;
        line-height: 1.8;
        padding: 20px;
        overflow-y: auto !important;
        display: block;
      }

      .container {
        max-width: 900px;
        margin: 0 auto;
      }

      /* Navigation action bar */
      .action-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #ffffff;
        padding: 12px 24px;
        border-radius: 12px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        border: 1px solid var(--border-color);
        margin-bottom: 24px;
      }

      .action-bar a {
        color: var(--royal-blue);
        text-decoration: none;
        font-weight: 700;
        font-size: 14.5px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: 0.2s;
      }

      .action-bar a:hover {
        color: var(--ink-black);
        transform: translateX(-3px);
      }

      .subject-badge {
        display: inline-block;
        padding: 4px 12px;
        background: var(--royal-blue-light);
        border: 1px solid var(--royal-blue);
        border-radius: 40px;
        font-size: 12px;
        color: var(--royal-blue);
        font-weight: 700;
      }

      /* Main Content Card */
      .content-card {
        background: var(--card-bg);
        padding: 40px;
        border-radius: 16px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        border: 1px solid var(--border-color);
      }

      /* Exam Title Block */
      .exam-title-block {
        text-align: center;
        margin-bottom: 40px;
        padding-bottom: 24px;
        border-bottom: 1px solid var(--border-color);
      }

      .exam-title-block h1 {
        font-size: 24px;
        font-weight: 700;
        color: var(--ink-black);
        margin-bottom: 8px;
      }

      .exam-title-block p {
        font-size: 15px;
        color: var(--ink-gray);
      }

      /* List view */
      .exam-list-container {
        display: flex;
        flex-direction: column;
        gap: 16px;
      }

      .exam-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 18px 24px;
        background: #f8fafc;
        border: 1px solid var(--border-color);
        border-radius: 12px;
        transition: 0.2s;
      }

      .exam-row:hover {
        background: var(--royal-blue-light);
        border-color: var(--royal-blue);
        transform: translateY(-2px);
        box-shadow: 0 10px 15px -3px rgba(30, 58, 138, 0.1);
      }

      .exam-info {
        display: flex;
        align-items: center;
        gap: 16px;
      }

      .exam-icon {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: white;
        color: var(--royal-blue);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        border: 1px solid var(--border-color);
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
      }

      .exam-row:hover .exam-icon {
        background: var(--royal-blue);
        color: white;
        border-color: var(--royal-blue);
      }

      .exam-meta h3 {
        font-size: 16px;
        font-weight: 700;
        color: var(--ink-black);
      }

      .btn-group {
        display: flex;
        gap: 10px;
      }

      .btn {
        padding: 10px 18px;
        border-radius: 10px;
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: 0.2s;
        border: 1px solid var(--border-color);
        background: #ffffff;
        color: var(--ink-black);
      }

      .btn:hover {
        background: #f1f5f9;
        border-color: var(--ink-black);
      }

      .btn-primary {
        background: var(--royal-blue);
        color: #ffffff;
        border-color: var(--royal-blue);
      }

      .btn-primary:hover {
        background: #172554;
        border-color: #172554;
      }

      @media (max-width: 768px) {
        .content-card {
          padding: 24px;
        }
        .exam-row {
          flex-direction: column;
          align-items: flex-start;
          gap: 16px;
        }
        .btn-group {
          width: 100%;
        }
        .btn {
          flex: 1;
          justify-content: center;
        }
      }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/professional.css') }}" />
  </head>
  <body>
    <!-- Animated Background -->
    <div class="drops" id="drops"></div>
    <div class="particles" id="particles"></div>

    <div class="container">
      <!-- Navigation Action Bar -->
      <div class="action-bar card">
        <a href="/grade12/science/math_g12/">
          <i class="fas fa-arrow-left"></i> ត្រឡប់ក្រោយ
        </a>
        <div class="subject-badge">គណិតវិទ្យា &bull; ថ្នាក់ទី១២</div>
      </div>

      <!-- Main Content Card -->
      <div class="content-card card">
        <!-- Directory Title Block -->
        <div class="exam-title-block">
          <h1>វិញ្ញាសារត្រៀមប្រឡង (Exam Preparation)</h1>
          <p>បណ្តុំវិញ្ញាសាសម្រាប់ត្រៀមប្រឡងសញ្ញាបត្រមធ្យមសិក្សាទុតិយភូមិ</p>
        </div>

        <!-- List of Exams -->
        <div class="exam-list-container">
          <!-- Kanit 1 -->
          <div class="exam-row">
            <div class="exam-info">
              <div class="exam-icon"><i class="fas fa-file-signature"></i></div>
              <div class="exam-meta">
                <h3>វិញ្ញាសារត្រៀមប្រឡងទី ០១</h3>
              </div>
            </div>
            <div class="btn-group">
              <a href="/grade12/science/math_g12/exams/kanit-1" class="btn btn-primary">
                <i class="fas fa-eye"></i> មើលវិញ្ញាសា
              </a>
            </div>
          </div>

          <!-- Kanit 2 -->
          <div class="exam-row">
            <div class="exam-info">
              <div class="exam-icon"><i class="fas fa-file-signature"></i></div>
              <div class="exam-meta">
                <h3>វិញ្ញាសារត្រៀមប្រឡងទី ០២</h3>
              </div>
            </div>
            <div class="btn-group">
              <a href="/grade12/science/math_g12/exams/kanit-2" class="btn btn-primary">
                <i class="fas fa-eye"></i> មើលវិញ្ញាសា
              </a>
            </div>
          </div>

          <!-- Kanit 3 -->
          <div class="exam-row">
            <div class="exam-info">
              <div class="exam-icon"><i class="fas fa-file-signature"></i></div>
              <div class="exam-meta">
                <h3>វិញ្ញាសារត្រៀមប្រឡងទី ០៣</h3>
              </div>
            </div>
            <div class="btn-group">
              <a href="/grade12/science/math_g12/exams/kanit-3" class="btn btn-primary">
                <i class="fas fa-eye"></i> មើលវិញ្ញាសា
              </a>
            </div>
          </div>

          <!-- Kanit 4 -->
          <div class="exam-row">
            <div class="exam-info">
              <div class="exam-icon"><i class="fas fa-file-signature"></i></div>
              <div class="exam-meta">
                <h3>វិញ្ញាសារត្រៀមប្រឡងទី ០៤</h3>
              </div>
            </div>
            <div class="btn-group">
              <a href="/grade12/science/math_g12/exams/kanit-4" class="btn btn-primary">
                <i class="fas fa-eye"></i> មើលវិញ្ញាសា
              </a>
            </div>
          </div>

          <!-- Kanit 5 -->
          <div class="exam-row">
            <div class="exam-info">
              <div class="exam-icon"><i class="fas fa-file-signature"></i></div>
              <div class="exam-meta">
                <h3>វិញ្ញាសារត្រៀមប្រឡងទី ០៥</h3>
              </div>
            </div>
            <div class="btn-group">
              <a href="/grade12/science/math_g12/exams/kanit-5" class="btn btn-primary">
                <i class="fas fa-eye"></i> មើលវិញ្ញាសា
              </a>
            </div>
          </div>

          <!-- Kanit 6 -->
          <div class="exam-row">
            <div class="exam-info">
              <div class="exam-icon"><i class="fas fa-file-signature"></i></div>
              <div class="exam-meta">
                <h3>វិញ្ញាសារត្រៀមប្រឡងទី ០៦</h3>
              </div>
            </div>
            <div class="btn-group">
              <a href="/grade12/science/math_g12/exams/kanit-6" class="btn btn-primary">
                <i class="fas fa-eye"></i> មើលវិញ្ញាសា
              </a>
            </div>
          </div>

          <!-- Kanit 7 -->
          <div class="exam-row">
            <div class="exam-info">
              <div class="exam-icon"><i class="fas fa-file-signature"></i></div>
              <div class="exam-meta">
                <h3>វិញ្ញាសារត្រៀមប្រឡងទី ០៧</h3>
              </div>
            </div>
            <div class="btn-group">
              <a href="/grade12/science/math_g12/exams/kanit-7" class="btn btn-primary">
                <i class="fas fa-eye"></i> មើលវិញ្ញាសា
              </a>
            </div>
          </div>

          <!-- Kanit 8 -->
          <div class="exam-row">
            <div class="exam-info">
              <div class="exam-icon"><i class="fas fa-file-signature"></i></div>
              <div class="exam-meta">
                <h3>វិញ្ញាសារត្រៀមប្រឡងទី ០៨</h3>
              </div>
            </div>
            <div class="btn-group">
              <a href="/grade12/science/math_g12/exams/kanit-8" class="btn btn-primary">
                <i class="fas fa-eye"></i> មើលវិញ្ញាសា
              </a>
            </div>
          </div>

          <!-- Kanit 9 -->
          <div class="exam-row">
            <div class="exam-info">
              <div class="exam-icon"><i class="fas fa-file-signature"></i></div>
              <div class="exam-meta">
                <h3>វិញ្ញាសារត្រៀមប្រឡងទី ០៩</h3>
              </div>
            </div>
            <div class="btn-group">
              <a href="/grade12/science/math_g12/exams/kanit-9" class="btn btn-primary">
                <i class="fas fa-eye"></i> មើលវិញ្ញាសា
              </a>
            </div>
          </div>

          <!-- Kanit 10 -->
          <div class="exam-row">
            <div class="exam-info">
              <div class="exam-icon"><i class="fas fa-file-signature"></i></div>
              <div class="exam-meta">
                <h3>វិញ្ញាសារត្រៀមប្រឡងទី ១០</h3>
              </div>
            </div>
            <div class="btn-group">
              <a href="/grade12/science/math_g12/exams/kanit-10" class="btn btn-primary">
                <i class="fas fa-eye"></i> មើលវិញ្ញាសា
              </a>
            </div>
          </div>

          <!-- Kanit 11 -->
          <div class="exam-row">
            <div class="exam-info">
              <div class="exam-icon"><i class="fas fa-file-signature"></i></div>
              <div class="exam-meta">
                <h3>វិញ្ញាសារត្រៀមប្រឡងទី ១១</h3>
              </div>
            </div>
            <div class="btn-group">
              <a href="/grade12/science/math_g12/exams/kanit-11" class="btn btn-primary">
                <i class="fas fa-eye"></i> មើលវិញ្ញាសា
              </a>
            </div>
          </div>

          <!-- Kanit 12 -->
          <div class="exam-row">
            <div class="exam-info">
              <div class="exam-icon"><i class="fas fa-file-signature"></i></div>
              <div class="exam-meta">
                <h3>វិញ្ញាសារត្រៀមប្រឡងទី ១២</h3>
              </div>
            </div>
            <div class="btn-group">
              <a href="/grade12/science/math_g12/exams/kanit-12" class="btn btn-primary">
                <i class="fas fa-eye"></i> មើលវិញ្ញាសា
              </a>
            </div>
          </div>

          <!-- Kanit 13 -->
          <div class="exam-row">
            <div class="exam-info">
              <div class="exam-icon"><i class="fas fa-file-signature"></i></div>
              <div class="exam-meta">
                <h3>វិញ្ញាសារត្រៀមប្រឡងទី ១៣</h3>
              </div>
            </div>
            <div class="btn-group">
              <a href="/grade12/science/math_g12/exams/kanit-13" class="btn btn-primary">
                <i class="fas fa-eye"></i> មើលវិញ្ញាសា
              </a>
            </div>
          </div>

          <!-- Kanit 14 -->
          <div class="exam-row">
            <div class="exam-info">
              <div class="exam-icon"><i class="fas fa-file-signature"></i></div>
              <div class="exam-meta">
                <h3>វិញ្ញាសារត្រៀមប្រឡងទី ១៤</h3>
              </div>
            </div>
            <div class="btn-group">
              <a href="/grade12/science/math_g12/exams/kanit-14" class="btn btn-primary">
                <i class="fas fa-eye"></i> មើលវិញ្ញាសា
              </a>
            </div>
          </div>

          <!-- Kanit 15 -->
          <div class="exam-row">
            <div class="exam-info">
              <div class="exam-icon"><i class="fas fa-file-signature"></i></div>
              <div class="exam-meta">
                <h3>វិញ្ញាសារត្រៀមប្រឡងទី ១៥</h3>
              </div>
            </div>
            <div class="btn-group">
              <a href="/grade12/science/math_g12/exams/kanit-15" class="btn btn-primary">
                <i class="fas fa-eye"></i> មើលវិញ្ញាសា
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Core Scripts -->
    <script src="{{ asset('assets/main.js') }}"></script>
    <script>
      // Protect page
      StudyNest.authGuard();

      // Initialize background
      StudyNest.initBackground();
    </script>
  </body>
</html>
