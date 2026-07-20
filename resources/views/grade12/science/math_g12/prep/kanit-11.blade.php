<!doctype html>
<html lang="km">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>វិញ្ញាសា គណិតវិទ្យា ១១ | StudyNest</title>
    <!-- Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@300;400;600;700&family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />

    <!-- MathJax -->
    <script>
      window.MathJax = {
        tex: {
          inlineMath: [
            ["$", "$"],
            ["\\(", "\\)"],
          ],
          displayMath: [
            ["$$", "$$"],
            ["\\[", "\\]"],
          ],
          processEscapes: true,
        },
        options: {
          skipHtmlTags: ["script", "noscript", "style", "textarea", "pre"],
        },
      };
    </script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/3.2.2/es5/tex-chtml.min.js"
      async
    ></script>

    <style>
      :root {
        --primary: #4f46e5;
        --accent: #74ebd5;
        --bg-dark: #0f172a;
        --card-bg: rgba(255, 255, 255, 0.95);
        --text-dark: #1e293b;
        --text-muted: #64748b;
        --orange: #f97316;
        --blue: #2563eb;
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: "Kantumruy Pro", sans-serif;
        background: radial-gradient(circle at top right, #1e1b4b, #0f172a);
        color: var(--text-dark);
        line-height: 1.8;
        min-height: 100vh;
        padding: 40px 20px;
      }

      .container {
            max-width: 210mm;
            min-height: 297mm;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 8px;
            padding: 20mm;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            position: relative;
            overflow: hidden;
            box-sizing: border-box;
        }

      .container::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 8px;
        background: linear-gradient(90deg, var(--primary), var(--accent));
      }

      .header {
        text-align: center;
        margin-bottom: 40px;
        border-bottom: 2px solid #e2e8f0;
        padding-bottom: 30px;
      }

      .header h1 {
        font-size: 2rem;
        color: var(--bg-dark);
        margin-bottom: 10px;
        font-weight: 700;
      }

      .header p {
        color: var(--text-muted);
        font-size: 1.1rem;
      }

      .exam-meta {
        display: flex;
        justify-content: space-between;
        background: #f8fafc;
        padding: 15px 25px;
        border-radius: 12px;
        margin-bottom: 40px;
        font-weight: 600;
        color: var(--primary);
        border: 1px solid #e2e8f0;
      }

      .question-section {
        margin-bottom: 40px;
        animation: fadeIn 0.5s ease-out both;
        border-bottom: 1px dashed #e2e8f0;
        padding-bottom: 30px;
      }

      @keyframes fadeIn {
        from {
          opacity: 0;
          transform: translateY(10px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      h2 {
        display: inline-block;
        background: var(--bg-dark);
        color: white;
        padding: 4px 16px;
        border-radius: 8px;
        font-size: 1.2rem;
        margin-bottom: 20px;
      }

      .question-content {
        padding-left: 10px;
      }

      .sub-question {
        margin-top: 10px;
        padding-left: 20px;
      }

      .formula-box {
        background: #f1f5f9;
        padding: 15px;
        border-radius: 12px;
        margin: 15px 0;
        border-left: 4px solid var(--primary);
        font-size: 1.1rem;
        overflow-x: auto;
      }

      .toggle-btn {
        background: rgba(79, 70, 229, 0.1);
        color: var(--primary);
        border: 1px solid var(--primary);
        padding: 8px 16px;
        border-radius: 8px;
        cursor: pointer;
        font-family: inherit;
        font-weight: 600;
        margin-top: 15px;
        margin-left: 10px;
        transition: all 0.2s;
        font-size: 0.95rem;
      }
      .toggle-btn:hover {
        background: var(--primary);
        color: white;
      }

      .solution-content {
        background: #f8fafc;
        border: 1px solid #cbd5e1;
        border-radius: 12px;
        padding: 20px;
        margin-top: 15px;
        border-left: 4px solid #10b981;
      }

      .solution-title {
        color: #059669;
        font-size: 1.1rem;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: 700;
      }

      .solution-body {
        font-size: 1.05rem;
        line-height: 2;
      }

      .solution-body p {
        margin-bottom: 8px;
      }

      .nav-footer {
        margin-top: 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 20px;
      }

      .back-btn {
        text-decoration: none;
        color: var(--primary);
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.2s;
      }

      .back-btn:hover {
        transform: translateX(-5px);
      }

      .print-btn {
        background: var(--bg-dark);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 10px;
        cursor: pointer;
        font-family: inherit;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: background 0.2s;
      }

      .print-btn:hover {
        background: #1e293b;
      }

      @media print {
        body {
          background: white !important;
          color: black !important;
          padding: 0;
        }
        * {
          -webkit-print-color-adjust: exact !important;
          print-color-adjust: exact !important;
        }
        .container {
          box-shadow: none;
          max-width: 100%;
          padding: 10mm;
          border: none;
        }
        .container::before {
          display: none;
        }
        .nav-footer,
        .print-btn,
        .toggle-btn {
          display: none !important;
        }
        .solution-content {
          display: block !important;
          border: 1px solid #cbd5e1 !important;
          background: #f8fafc !important;
          page-break-inside: avoid;
          break-inside: avoid;
        }
        .question-section {
          border-bottom: 1px solid #ccc !important;
          page-break-inside: avoid;
          break-inside: avoid;
        }
      }

      @media (max-width: 640px) {
        .container {
          padding: 25px;
        }
        .exam-meta {
          flex-direction: column;
          gap: 10px;
          text-align: center;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <header class="header">
        <h1>វិញ្ញាសា គណិតវិទ្យា (វិទ្យាសាស្ត្រពិត) ១១</h1>
        <p>សម្រាប់ការត្រៀមប្រឡងសញ្ញាបត្រមធ្យមសិក្សាទុតិយភូមិ</p>
      </header>

      <div class="exam-meta">
        <span><i class="far fa-clock"></i> រយៈពេល៖ ១៥០ នាទី</span>
        <span><i class="fas fa-star"></i> ពិន្ទុសរុប៖ ១២៥ ពិន្ទុ</span>
      </div>

      <!-- Section I -->
      <section class="question-section" style="animation-delay: 0.1s">
        <h2>លំហាត់ I</h2>
        <div class="question-content">
          <p>គណនាលីមីតខាងក្រោម៖</p>
          <div class="sub-question">
            <p>ក. $\lim_{x \to \frac{\pi}{4}} \frac{2\sin(x - \frac{\pi}{4})}{(\frac{\pi}{4} - x)}$</p>
            <p>ខ. $\lim_{x \to 0} \frac{-2\sin 5x}{\sqrt{5} - \sqrt{x+5}}$</p>
            <p>គ. $\lim_{x \to 0} \frac{1 - \cos^2 3x}{-2x^2}$</p>
            <p>ឃ. $\lim_{x \to 0} \frac{x^2 - x}{|x|}$</p>
          </div>
        </div>

        <button class="toggle-btn" onclick="toggleSolution(this)">
          <i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ
        </button>
        <div class="solution-content" style="display: none">
          <h3 class="solution-title">
            <i class="fas fa-check-circle"></i> ដំណោះស្រាយ
          </h3>
          <div class="solution-body">
            <p><strong>ក.</strong> $\lim_{x \to \frac{\pi}{4}} \frac{2\sin(x - \frac{\pi}{4})}{(\frac{\pi}{4} - x)} = -2$</p>
            <p><strong>ខ.</strong> $\lim_{x \to 0} \frac{-2\sin 5x}{\sqrt{5} - \sqrt{x+5}} = 20\sqrt{5}$</p>
            <p><strong>គ.</strong> $\lim_{x \to 0} \frac{1 - \cos^2 3x}{-2x^2} = -\frac{9}{2}$</p>
            <p><strong>ឃ.</strong> គ្មានលីមីត (ដោយសារលីមីតឆ្វេង និងស្តាំខុសគ្នា)</p>
          </div>
        </div>
      </section>

      <!-- Section II -->
      <section class="question-section" style="animation-delay: 0.2s">
        <h2>លំហាត់ II</h2>
        <div class="question-content">
          <p>គេឱ្យចំនួនកុំផ្លិច $z_1 = -1 + i\sqrt{3}$ និង $z_2 = -1 - i\sqrt{3}$។</p>
          <div class="sub-question">
            <p>ក. គណនា $z_1 + z_2$ ; $z_1 - z_2$ និង $z_1 \cdot z_2$។</p>
            <p>ខ. សរសេរចំនួនកុំផ្លិច $z_1$ និង $z_2$ ជាទម្រង់ត្រីកោណមាត្រ។</p>
            <p>គ. បង្ហាញថា $z_1$ និង $z_2$ ជាឫសនៃសមីការ $z^3 - 8 = 0$។</p>
          </div>
        </div>

        <button class="toggle-btn" onclick="toggleSolution(this)">
          <i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ
        </button>
        <div class="solution-content" style="display: none">
          <h3 class="solution-title">
            <i class="fas fa-check-circle"></i> ដំណោះស្រាយ
          </h3>
          <div class="solution-body">
            <p><strong>ក.</strong> $z_1 + z_2 = -2$, $z_1 - z_2 = 2i\sqrt{3}$, $z_1 \cdot z_2 = 4$</p>
            <p><strong>ខ.</strong> $z_1 = 2(\cos \frac{2\pi}{3} + i\sin \frac{2\pi}{3})$, $z_2 = 2(\cos \frac{4\pi}{3} + i\sin \frac{4\pi}{3})$</p>
            <p><strong>គ.</strong> តាមរយៈការលើកជាស្វ័យគុណបី នឹងទទួលបាន 8 ពិតប្រាកដ។</p>
          </div>
        </div>
      </section>

      <!-- Section III -->
      <section class="question-section" style="animation-delay: 0.3s">
        <h2>លំហាត់ III</h2>
        <div class="question-content">
          <p>នៅក្នុងចានមួយមានប៊ូល $12$ ដែលគេសរសេរលេខពី $1$ ដល់ $12$។ គេចាប់យកប៊ូល $3$ ចេញពីចានព្រមគ្នាដោយចៃដន្យ។</p>
          <div class="sub-question">
            <p>ក. រកប្រូបាបដែល «គេចាប់បានប៊ូលទាំងបីមានលេខសុទ្ធតែចែកដាច់នឹង 3»។</p>
            <p>ខ. រកប្រូបាបដែល «គេចាប់បានប៊ូលតែមួយគត់មានលេខចែកដាច់នឹង 3»។</p>
            <p>គ. រកប្រូបាបដែល «គេចាប់បានប៊ូលមានលេខតាមលំដាប់កើនជាស៊ីតនព្វន្តដែលមានផលសងរួម $d = 3$»។</p>
          </div>
        </div>

        <button class="toggle-btn" onclick="toggleSolution(this)">
          <i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ
        </button>
        <div class="solution-content" style="display: none">
          <h3 class="solution-title">
            <i class="fas fa-check-circle"></i> ដំណោះស្រាយ
          </h3>
          <div class="solution-body">
            <p><strong>ក.</strong> $P(A) = \frac{1}{55}$</p>
            <p><strong>ខ.</strong> $P(B) = \frac{28}{55}$</p>
            <p><strong>គ.</strong> $P(C) = \frac{3}{110}$</p>
          </div>
        </div>
      </section>

      <!-- Section IV -->
      <section class="question-section" style="animation-delay: 0.4s">
        <h2>លំហាត់ IV</h2>
        <div class="question-content">
          <p>$f$ ជាអនុគមន៍កំណត់លើ $]0, +\infty[$ ដោយ $f(x) = x - 5 + \frac{8\ln x}{x} + \frac{9}{x}$ និង $C$ ជាក្រាបរបស់វា។</p>
          <div class="sub-question">
            <p><strong>១.</strong></p>
            <p>ក. រក $\lim_{x \to +\infty} f(x)$។</p>
            <p>ខ. រក $\lim_{x \to 0^+} f(x)$។</p>
            <p>គ. ស្រាយបំព្លឺថាបន្ទាត់ $\Delta$ ដែលមានសមីការ $y = x - 5$ ជាអាស៊ីមតូតទ្រេតនៃខ្សែក្រោង $C$ នៅជិត $+\infty$។</p>
            <p>ឃ. កំណត់កូអរដោនេចំណុចប្រសព្វរវាង $\Delta$ និង $C$។</p>
            <p><strong>២.</strong></p>
            <p>ក. បង្ហាញថាចំពោះគ្រប់ $x$ នៅលើ $]0, +\infty[$ គេបាន $f'(x) = \frac{g(x)}{x^2}$ ដោយ $g(x) = x^2 - 8\ln x - 1$។</p>
            <p>ខ. សិក្សាអថេរភាពនៃអនុគមន៍ $f$ ដោយដឹងថាសមីការ $g(x) = 0$ មានចម្លើយ $x' = 1$ និង $x'' = \alpha$ ($1 < \alpha$)។</p>
          </div>
        </div>

        <button class="toggle-btn" onclick="toggleSolution(this)">
          <i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ
        </button>
        <div class="solution-content" style="display: none">
          <h3 class="solution-title">
            <i class="fas fa-check-circle"></i> ដំណោះស្រាយ
          </h3>
          <div class="solution-body">
            <p><strong>១.</strong></p>
            <p>ក. $+\infty$</p>
            <p>ខ. $-\infty$</p>
            <p>គ. $\lim_{x \to +\infty} [f(x) - (x - 5)] = \lim_{x \to +\infty} \left(\frac{8\ln x}{x} + \frac{9}{x}\right) = 0$</p>
            <p>ឃ. ចំណុចប្រសព្វគឺ $x = e^{-9/8}$</p>
            <p><strong>២.</strong></p>
            <p>ក. ធ្វើដេរីវេធម្មតា</p>
            <p>ខ. $f$ កើនលើ $(0, 1)$ ចុះលើ $(1, \alpha)$ និងកើនលើ $(\alpha, +\infty)$</p>
          </div>
        </div>
      </section>

      <!-- Section V -->
      <section class="question-section" style="animation-delay: 0.5s; border-bottom: none">
        <h2>លំហាត់ V</h2>
        <div class="question-content">
          <p>$f$ ជាអនុគមន៍កំណត់លើ $\mathbb{R}$ ដោយ $f(x) = 4 - x - 2e^{-x}$។ គេតាងដោយ $C$ ជាក្រាបរបស់វា។</p>
          <div class="sub-question">
            <p><strong>១.</strong></p>
            <p>ក. រក $\lim_{x \to +\infty} f(x)$។</p>
            <p>ខ. បង្ហាញថាបន្ទាត់ $D$ មានសមីការ $y = -x + 4$ ជាអាស៊ីមតូតនៃខ្សែក្រោង $C$។</p>
            <p>គ. តើខ្សែក្រោង $C$ នៅលើឬក្រោមបន្ទាត់ $D$ ចូរបញ្ជាក់។</p>
            <p>ឃ. ផ្ទៀងផ្ទាត់ថាគ្រប់ចំនួនពិត $x$, $f(x) = \frac{4e^x - xe^x - 2}{e^x}$។</p>
            <p>ង. រក $\lim_{x \to -\infty} f(x)$ (ប្រើលទ្ធផល $\lim_{x \to -\infty} xe^x = 0$)។</p>
            <p><strong>២.</strong></p>
            <p>ក. គណនា $f'(x)$។ សិក្សាអថេរភាពនៃ $f$។ កំណត់តម្លៃពិតនៃអតិបរមារបស់ $f$។</p>
            <p>ខ. $A$ ជាចំណុចមួយនៅលើខ្សែក្រោង $C$ ដែលមានអាប់ស៊ីស $0$។ កំណត់សមីការបន្ទាត់ប៉ះខ្សែក្រោង $C$ ត្រង់ $A$។</p>
            <p>គ. បង្ហាញថាសមីការ $f(x) = 0$ មានចម្លើយតែមួយគត់ដែលគេតាងដោយ $\beta$ នៅចន្លោះ $[-1, 0]$។</p>
          </div>
        </div>

        <button class="toggle-btn" onclick="toggleSolution(this)">
          <i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ
        </button>
        <div class="solution-content" style="display: none">
          <h3 class="solution-title">
            <i class="fas fa-check-circle"></i> ដំណោះស្រាយ
          </h3>
          <div class="solution-body">
            <p><strong>១.</strong></p>
            <p>ក. $-\infty$</p>
            <p>ខ. $\lim_{x \to +\infty} [f(x) - (-x + 4)] = \lim_{x \to +\infty} (-2e^{-x}) = 0$</p>
            <p>គ. $C$ ស្ថិតនៅក្រោម $D$ ជានិច្ច</p>
            <p>ឃ. តម្រូវភាគបែង</p>
            <p>ង. $-\infty$</p>
            <p><strong>២.</strong></p>
            <p>ក. $f'(x) = \frac{-e^x + 2}{e^x}$, អតិបរមា $f(\ln 2) = 3 - \ln 2$</p>
            <p>ខ. $(T): y = x + 2$</p>
            <p>គ. ប្រើទ្រឹស្តីបទតម្លៃកណ្តាល</p>
          </div>
        </div>
      </section>

      <footer class="nav-footer">
        <a href="../../../..//" class="back-btn">
          <i class="fas fa-arrow-left"></i> ត្រឡប់ទៅទំព័រដើម
        </a>
      </footer>
    </div>

    <script>
      function toggleSolution(btn) {
        const content = btn.nextElementSibling;
        if (content.style.display === "none" || content.style.display === "") {
          content.style.display = "block";
          btn.innerHTML = '<i class="fas fa-eye-slash"></i> លាក់ដំណោះស្រាយ';
        } else {
          content.style.display = "none";
          btn.innerHTML = '<i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ';
        }
      }
    </script>
    <script src="{{ asset('assets/main.js') }}"></script>
    <script>StudyNest.authGuard(); StudyNest.checkAccess(6);</script>
  </body>
</html>