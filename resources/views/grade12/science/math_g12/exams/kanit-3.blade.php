<!doctype html>
<html lang="km">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>វិញ្ញាសា គណិតវិទ្យា ០៣ | StudyNest</title>
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
        <h1>វិញ្ញាសា គណិតវិទ្យា (វិទ្យាសាស្ត្រពិត) ០៣</h1>
        <p>សម្រាប់ការត្រៀមប្រឡងសញ្ញាបត្រមធ្យមសិក្សាទុតិយភូមិ</p>
      </header>

      <div class="exam-meta">
        <span><i class="far fa-clock"></i> រយៈពេល៖ ១៥០ នាទី</span>
        <span><i class="fas fa-star"></i> ពិន្ទុសរុប៖ ១២៥ ពិន្ទុ</span>
      </div>

      <!-- Section I -->
      <section class="question-section" style="animation-delay: 0.1s">
        <h2>លំហាត់ I (១៥ ពិន្ទុ)</h2>
        <div class="question-content">
          <div class="sub-question">
            <p>
              ១. កំណត់ចំនួនពិត $a, b$ ដើម្បីឱ្យ $2 - 3i$ ជាចម្លើយនៃសមីការ $x^2 +
              ax + b = 0$ ។
            </p>
            <p>
              ២. កំណត់ម៉ូឌុល និងអាគុយម៉ង់នៃ $\left( \frac{1 + i\sqrt{3}}{1 + i}
              \right)^{10}$ ។
            </p>
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
            <p><strong>១. កំណត់ចំនួនពិត $a, b$៖</strong></p>
            <p>បើ $2 - 3i$ ជាចម្លើយ នោះ $2 + 3i$ ក៏ជាចម្លើយដែរ។</p>
            <p>ផលបូកឫស $S = (2 - 3i) + (2 + 3i) = 4 = -a \Rightarrow a = -4$</p>
            <p>
              ផលគុណឫស $P = (2 - 3i)(2 + 3i) = 4 + 9 = 13 = b \Rightarrow b = 13$
            </p>
            <div class="formula-box">ដូចនេះ $a = -4$ និង $b = 13$</div>
            <p><strong>២. កំណត់ម៉ូឌុល និងអាគុយម៉ង់៖</strong></p>
            <p>
              តាង $z = \frac{1 + i\sqrt{3}}{1 + i} =
              \frac{2\left(\cos\frac{\pi}{3} +
              i\sin\frac{\pi}{3}\right)}{\sqrt{2}\left(\cos\frac{\pi}{4} +
              i\sin\frac{\pi}{4}\right)} = \sqrt{2}\left(\cos\frac{\pi}{12} +
              i\sin\frac{\pi}{12}\right)$
            </p>
            <p>
              $z^{10} = (\sqrt{2})^{10} \left(\cos\frac{10\pi}{12} +
              i\sin\frac{10\pi}{12}\right) = 32 \left(\cos\frac{5\pi}{6} +
              i\sin\frac{5\pi}{6}\right)$
            </p>
            <div class="formula-box">
              ដូចនេះ ម៉ូឌុលគឺ $|z^{10}| = 32$ និងអាគុយម៉ង់គឺ $\arg(z^{10}) =
              \frac{5\pi}{6} + 2k\pi$
            </div>
          </div>
        </div>
      </section>

      <!-- Section II -->
      <section class="question-section" style="animation-delay: 0.2s">
        <h2>លំហាត់ II (១៥ ពិន្ទុ)</h2>
        <div class="question-content">
          <p>១. គណនាលីមីតខាងក្រោម៖</p>
          <div class="formula-box">
            <p>
              ក. $\lim_{x\to3} \left( \frac{1}{x - 3} - \frac{6}{x^2 - 9}
              \right)$
            </p>
            <p>ខ. $\lim_{x\to0} \frac{\tan x - \sin x}{x^3}$</p>
            <p>
              គ. $\lim_{x\to-\infty} \left( \sqrt{x^2 - x + 1} - \sqrt{x^2 + x +
              1} \right)$
            </p>
          </div>
          <p>
            ២. កំណត់ចំនួនពិត $a, b$ និង $c$ ដើម្បីឱ្យ $\frac{2x + 1}{x^2(x + 1)} =
            \frac{a}{x} + \frac{b}{x^2} + \frac{c}{x + 1}$ ចំពោះ $x \notin \{-1,0\}$ ។ គណនា $I = \int_1^2
            \frac{2x + 1}{x^2(x + 1)} dx$ ។
          </p>
        </div>

        <button class="toggle-btn" onclick="toggleSolution(this)">
          <i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ
        </button>
        <div class="solution-content" style="display: none">
          <h3 class="solution-title">
            <i class="fas fa-check-circle"></i> ដំណោះស្រាយ
          </h3>
          <div class="solution-body">
            <p><strong>១. គណនាលីមីត៖</strong></p>
            <p>
              ក. $\lim_{x\to3} \left( \frac{1}{x - 3} - \frac{6}{x^2 - 9} \right) = \lim_{x\to3} \left[ \frac{1}{x - 3} - \frac{6}{(x-3)(x+3)} \right]$
            </p>
            <p>
              $= \lim_{x\to3} \frac{x+3-6}{(x-3)(x+3)} = \lim_{x\to3} \frac{x-3}{(x-3)(x+3)} = \lim_{x\to3} \frac{1}{x+3} = \frac{1}{6}$
            </p>
            <p>
              ខ. $\lim_{x\to0} \frac{\tan x - \sin x}{x^3} = \lim_{x\to0} \frac{\frac{\sin x}{\cos x} - \sin x}{x^3} = \lim_{x\to0} \frac{\sin x - \cos x \sin x}{x^3 \cos x}$
            </p>
            <p>
              $= \lim_{x\to0} \frac{\sin x(1 - \cos x)}{x^3 \cos x} = \lim_{x\to0} \frac{2 \sin x \cdot \sin^2 \frac{x}{2}}{x^3 \cos x} = \lim_{x\to0} \frac{2}{\cos x} \cdot \frac{\sin x}{x} \cdot \left( \frac{\sin \frac{x}{2}}{\frac{x}{2}} \right)^2 \cdot \frac{1}{4} = \frac{2}{1} \cdot 1 \cdot 1^2 \cdot \frac{1}{4} = \frac{1}{2}$
            </p>
            <p>
              គ. $\lim_{x\to-\infty} \left( \sqrt{x^2 - x + 1} - \sqrt{x^2 + x + 1} \right)$
            </p>
            <p>
              $= \lim_{x\to-\infty} \frac{(\sqrt{x^2-x+1}-\sqrt{x^2+x+1})(\sqrt{x^2-x+1}+\sqrt{x^2+x+1})}{\sqrt{x^2-x+1}+\sqrt{x^2+x+1}}$
            </p>
            <p>
              $= \lim_{x\to-\infty} \frac{(x^2-x+1)-(x^2+x+1)}{\sqrt{x^2(1-\frac{1}{x}+\frac{1}{x^2})}+\sqrt{x^2(1+\frac{1}{x}+\frac{1}{x^2})}} = \lim_{x\to-\infty} \frac{-2x}{|x|\sqrt{1-\dots}+|x|\sqrt{1+\dots}}$
            </p>
            <p>
              $= \lim_{x\to-\infty} \frac{-2x}{-x\left(\sqrt{1-\frac{1}{x}+\frac{1}{x^2}}+\sqrt{1+\frac{1}{x}+\frac{1}{x^2}}\right)} = \frac{2}{\sqrt{1}+\sqrt{1}} = 1$
            </p>
            <p><strong>២. កំណត់ $a, b, c$ និងគណនាអាំងតេក្រាល៖</strong></p>
            <p>$\frac{2x + 1}{x^2(x + 1)} = \frac{ax(x+1) + b(x+1) + cx^2}{x^2(x+1)} = \frac{(a+c)x^2 + (a+b)x + b}{x^2(x+1)}$</p>
            <p>
              នាំឱ្យ $\begin{cases} a+c=0 \\ a+b=2 \\ b=1 \end{cases} \Rightarrow \begin{cases} b = 1 \\ a = 1 \\ c = -1 \end{cases}$
            </p>
            <p>ដូចនេះ $a=1, b=1$ និង $c=-1$</p>
            <p>
              $I = \int_1^2 \frac{2x+1}{x^2(x+1)} dx = \int_1^2 \left( \frac{1}{x} + \frac{1}{x^2} - \frac{1}{x+1} \right) dx = \left[ \ln|x| - \frac{1}{x} - \ln|x+1| \right]_1^2$
            </p>
            <p>
              $= (\ln 2 - \frac{1}{2} - \ln 3) - (\ln 1 - 1 - \ln 2) = -\frac{1}{2} + 1 + \ln 2 - \ln 3 + \ln 2 = \frac{1}{2} + \ln \frac{4}{3}$
            </p>
            <div class="formula-box">
              ដូចនេះ $I = \frac{1}{2} + \ln\frac{4}{3}$
            </div>
          </div>
        </div>
      </section>

      <!-- Section III -->
      <section class="question-section" style="animation-delay: 0.3s">
        <h2>លំហាត់ III (១៥ ពិន្ទុ)</h2>
        <div class="question-content">
          <p>
            ក្នុងថង់មួយមានលេខ 1 ដល់ 9 ។
            គេចាប់យកលេខបីខ្ទង់ម្តងមួយៗដោយមិនដាក់ចូលវិញ។
            រកប្រូបាបនៃព្រឹត្តិការណ៍៖
          </p>
          <div class="sub-question">
            <p>ក. $A$: លេខទាំងបីខ្ទង់ជាពហុគុណនៃ $5$ ។</p>
            <p>
              ខ. $B$: លេខទាំងបីខ្ទង់បង្កើតបានបីតួនៃស្វ៊ីតនព្វន្តមួយមានផលសងរួមស្មើ $3$ ។
            </p>
            <p>
              គ. $C$: លេខទាំងបីខ្ទង់បង្កើតបានបីតួនៃស្វ៊ីតធរណីមាត្រមួយមានរេសុងស្មើ $2$ ។
            </p>
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
            <p>ដោយគេចាប់យកលេខបីខ្ទង់ម្តងមួយៗចេញពីថង់ដែលមានលេខ 1 ដល់ 9 ដោយមិនដាក់ចូលវិញ យើងបាន៖</p>
            <p>ការចាប់លើកទីមួយមាន 9 របៀប</p>
            <p>ការចាប់លើកទីពីរមាន 8 របៀប</p>
            <p>ការចាប់លើកទីបីមាន 7 របៀប</p>
            <p>នាំឱ្យ $n(S) = 9 \times 8 \times 7 = 504$</p>
            <p><strong>ក. $A$: លេខទាំងបីខ្ទង់ជាពហុគុណនៃ $5$៖</strong></p>
            <p>យើងដឹងហើយថាចំនួនដែលជាពហុគុណនៃ 5 គឺជាចំនួនទាំងឡាយណាដែលមានលេខខាងចុងជាលេខ 0 ឬ 5</p>
            <p>នោះយើងត្រូវធ្វើដ្យាងណាឱ្យខ្ទង់ទីបីនៃចំនួននោះជាលេខ 5</p>
            <p>ខ្ទង់ទីមួយមាន 8 របៀប, ខ្ទង់ទីពីរមាន 7 របៀប, ខ្ទង់ទីបីជាលេខ 5 មាន 1 របៀប</p>
            <p>
              យើងបាន $n(A) = 8 \times 7 \times 1 = 56 \Rightarrow P(A) = \frac{56}{504} = \frac{1}{9}$
            </p>
            <div class="formula-box">ដូចនេះ $P(A) = \frac{1}{9}$</div>
            <p><strong>ខ. $B$: បង្កើតបានស្វ៊ីតនព្វន្ត $d=3$៖</strong></p>
            <p>សំណុំដែលសមស្របគឺ $B = \{(1, 4, 7); (2, 5, 8); (3, 6, 9)\}$ នាំឱ្យ $n(B) = 3$ ។</p>
            <p>$P(B) = \frac{3}{504} = \frac{1}{168}$</p>
            <div class="formula-box">ដូចនេះ $P(B) = \frac{1}{168}$</div>
            <p><strong>គ. $C$: បង្កើតបានស្វ៊ីតធរណីមាត្រ $q=2$៖</strong></p>
            <p>សំណុំគឺ $C = \{(1, 2, 4); (2, 4, 8)\}$ នាំឱ្យ $n(C) = 2$ ។</p>
            <p>$P(C) = \frac{2}{504} = \frac{1}{252}$</p>
            <div class="formula-box">ដូចនេះ $P(C) = \frac{1}{252}$</div>
          </div>
        </div>
      </section>

      <!-- Section IV -->
      <section class="question-section" style="animation-delay: 0.4s">
        <h2>លំហាត់ IV (១៥ ពិន្ទុ)</h2>
        <div class="question-content">
          <div class="sub-question">
            <p>ក. ដោះស្រាយសមីការ $(E): 2y'' - 3y' + y = 0$ ។</p>
            <p>
              ខ. រកចម្លើយមួយនៃ $(E)$ ដោយដឹងថាបន្ទាត់ $(D): y = 2x + 1$
              ប៉ះក្រាបនៃចម្លើយត្រង់ចំណុច $A(0,1)$ ។
            </p>
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
            <p><strong>ក. ដោះស្រាយសមីការ $(E)$៖</strong></p>
            <p>
              សមីការសម្គាល់ $2\lambda^2 - 3\lambda + 1 = 0 \Rightarrow \lambda_1 = 1, \lambda_2 = \frac{1}{2}$ [$\because a+b+c=0$]
            </p>
            <div class="formula-box">
              ដូចនេះ ចម្លើយទូទៅគឺ $y = Ae^x + Be^{\frac{1}{2}x}$ ដែល $A, B \in \mathbb{R}$
            </div>
            <p><strong>ខ. រកចម្លើយមួយនៃ $(E)$៖</strong></p>
            <p>ដោយដឹងថាបន្ទាត់ $(D): y = 2x + 1$ ប៉ះក្រាបនៃចម្លើយត្រង់ចំណុច $A(0,1)$ យើងបាន $\begin{cases} y(0) = 1 \\ y'(0) = 2 \end{cases}$</p>
            <p>ចំពោះ $y(0) = 1 \Rightarrow A + B = 1$ ($*$)</p>
            <p>
              ហើយ $y' = \left( Ae^x + Be^{\frac{1}{2}x} \right)' = Ae^x + \frac{1}{2}Be^{\frac{1}{2}x}$
            </p>
            <p>
              ដោយ $y'(0) = 2 \Rightarrow A + \frac{1}{2}B = 2 \Rightarrow A = 2 - \frac{1}{2}B$ យកជំនួសចូល ($*$) យើងបាន
            </p>
            <p>
              $2 - \frac{1}{2}B + B = 1 \Rightarrow 2 + \frac{1}{2}B = 1 \Rightarrow \frac{1}{2}B = -1 \Rightarrow B = -2$
            </p>
            <p>នាំឱ្យ $A = 2 - \frac{1}{2}(-2) = 3$</p>
            <p>នាំឱ្យ $y = 3e^x - 2e^{\frac{1}{2}x}$</p>
            <div class="formula-box">
              ដូចនេះ ចម្លើយគឺ $y = 3e^x - 2e^{\frac{1}{2}x}$
            </div>
          </div>
        </div>
      </section>

      <!-- Section V -->
      <section class="question-section" style="animation-delay: 0.5s">
        <h2>លំហាត់ V (១៥ ពិន្ទុ)</h2>
        <div class="question-content">
          <p>គេឱ្យសមីការអេលីប $(E): 16x^2 + 25y^2 - 32x - 100y - 284 = 0$ ។</p>
          <div class="sub-question">
            <p>ក. រកសមីការស្តង់ដានៃ $(E)$ ។</p>
            <p>
              ខ. រកកូអរដោនេផ្ចិត កំពូល កំណុំ ប្រវែងអ័ក្សតូច ប្រវែងអ័ក្សធំ
              និងសង់អេលីប $(E)$ ។
            </p>
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
            <p><strong>ក. រកសមីការស្តង់ដា៖</strong></p>
            <p>$(16x^2 - 32x) + (25y^2 - 100y) = 284$</p>
            <p>$16(x^2 - 2x) + 25(y^2 - 4y) = 284$</p>
            <p>$16(x^2 - 2x + 1 - 1) + 25(y^2 - 4y + 4 - 4) = 284$</p>
            <p>$16[(x-1)^2-1] + 25[(y-2)^2-4] = 284$</p>
            <p>$16(x-1)^2 - 16 + 25(y-2)^2 - 100 = 284 \Rightarrow 16(x-1)^2 + 25(y-2)^2 = 400$</p>
            <p>ចែកអង្គទាំងពីរនឹង 400 យើងបាន $\frac{(x-1)^2}{25} + \frac{(y-2)^2}{16} = 1 \Rightarrow \frac{(x-1)^2}{5^2} + \frac{(y-2)^2}{4^2} = 1$</p>
            <div class="formula-box">
              ដូចនេះ សមីការស្តង់ដាគឺ $\frac{(x-1)^2}{5^2} + \frac{(y-2)^2}{4^2} = 1$
            </div>
            <p><strong>ខ. រកកូអរដោនេ និងសង់៖</strong></p>
            <p>តាមរយៈចម្លើយខាងលើ អេលីប $(E)$ មានសមីការស្តង់ដាដែល $a > b > 0$</p>
            <p>យើងទាញបាន $a=5; b=4; h=1; k=2$</p>
            <p>ហើយ $c^2 = a^2 - b^2 = 25 - 16 = 9 \Rightarrow c = 3$</p>
            <ul>
              <li>ផ្ចិត $I(h, k) = (1, 2)$</li>
              <li>កំពូល $V_{1,2}(h \pm a, k) = (-4, 2); (6, 2)$</li>
              <li>កំណុំ $F_{1,2}(h \pm c, k) = (-2, 2); (4, 2)$</li>
              <li>អ័ក្សតូច $2b = 2 \times 4 = 8$</li>
              <li>អ័ក្សធំ $2a = 2 \times 5 = 10$</li>
            </ul>
            <p>ដូចនេះ ផ្ចិត $I(1, 2)$, កំពូល $V_{1,2} = (-4, 2); (6, 2)$, កំណុំ $F_{1,2} = (-2, 2); (4, 2)$, អ័ក្សតូច $2b = 8$ និងអ័ក្សធំ $2a = 10$</p>
          </div>
        </div>
      </section>

      <!-- Section VI -->
      <section class="question-section" style="animation-delay: 0.6s">
        <h2>លំហាត់ VI (២៥ ពិន្ទុ)</h2>
        <div class="question-content">
          <p>
            គេឱ្យអនុគមន៍ $f$ កំណត់ចំពោះ $x > 0$ ដោយ $f(x) = 2x - 5 + \frac{1}{x}
            - \frac{\ln x}{x}$ ។
          </p>
          <div class="sub-question">
            <p>
              ក. គណនា $\lim_{x\to0^+} f(x)$ និង $\lim_{x\to+\infty} f(x)$ ។
              ទាញរកសមីការអាស៊ីមតូតឈរនៃក្រាប $(C)$ តំណាងអនុគមន៍ $f$ ។
            </p>
            <p>
              ខ. ស្រាយថាបន្ទាត់ $(d): y = 2x - 5$ ជាអាស៊ីមតូតទ្រេតនៃ $(C)$ ផ្នែក
              $+\infty$ ។ សិក្សាទីតាំងរាងរវាង $(C)$ និង $(d)$ ។
            </p>
            <p>
              គ. គណនា $f'(x)$ រួចបញ្ជាក់ថា $f'(x)$ មានសញ្ញាដូច $u(x) = 2x^2 - 2
              + \ln x$ ។
            </p>
            <p>
              ឃ. បង្ហាញថា $u'(x) > 0$ រួចទាញរកសញ្ញានៃ $u(x)$ ។ គូសតារាងអថេរភាពនៃ
              $f$ ។
            </p>
            <p>
              ង. បង្ហាញថាក្រាប $(C)$ កាត់អ័ក្ស $(ox)$ ត្រង់ពីរចំណុច $\alpha,
              \beta$ ដែល $\frac{1}{e} < \alpha < 1$ និង $2 < \beta < e$ ។
            </p>
            <p>
              ច. សង់ $(C)$ និង $(d)$ ។ គេឱ្យ $e = 2.7, \frac{1}{e} = 0.4$ និង $\ln 2 = 0.7$ ។
            </p>
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
            <p><strong>ក. លីមីត និងអាស៊ីមតូត៖</strong></p>
            <p>
              $\lim_{x\to0^+} f(x) = \lim_{x\to0^+} (2x - 5 + \frac{1}{x} - \frac{\ln x}{x}) = 2(0)-5+(+\infty)-(-\infty) = +\infty$
            </p>
            <p>
              $\lim_{x\to+\infty} f(x) = \lim_{x\to+\infty} (2x - 5 + \frac{1}{x} - \frac{\ln x}{x}) = 2(+\infty)-5+0-0 = +\infty$
            </p>
            <p>ដោយ $\lim_{x\to0^+} f(x) = +\infty$ នាំឱ្យ $x=0$ ជាអាស៊ីមតូតឈរនៃក្រាប $(C)$ ផ្នែក $+\infty$ ។</p>
            <p><strong>ខ. អាស៊ីមតូតទ្រេត៖</strong></p>
            <p>
              ពិនិត្យមើល $\lim_{x\to+\infty} [f(x) - (y_d)] = \lim_{x\to+\infty} [ (2x-5+\frac{1}{x}-\frac{\ln x}{x}) - (2x-5) ] = \lim_{x\to+\infty} (\frac{1}{x} - \frac{\ln x}{x}) = 0$
            </p>
            <p>ដូចនេះ បន្ទាត់ $(d): y = 2x - 5$ ជាអាស៊ីមតូតទ្រេតនៃ $(C)$ ផ្នែក $+\infty$ ។</p>
            <p>
              យើងមាន $y_C - y_d = \frac{1}{x} - \frac{\ln x}{x} = \frac{1 - \ln x}{x}$ ចំពោះ $x > 0$ នាំឱ្យ $y_C - y_d$ មានសញ្ញាដូច $1 - \ln x$
            </p>
            <p>
              $\bullet y_C - y_d = 0 \Rightarrow 1 - \ln x = 0 \Rightarrow \ln x = 1 \Rightarrow x = e$
            </p>
            <p>
              $\bullet y_C - y_d > 0 \Rightarrow 1 - \ln x > 0 \Rightarrow \ln x < 1 \Rightarrow x < e$
            </p>
            <p>
              $\bullet y_C - y_d < 0 \Rightarrow 1 - \ln x < 0 \Rightarrow \ln x > 1 \Rightarrow x > e$
            </p>
            <p>ដូចនេះ $(C)$ ប្រសព្វ $(d)$ ត្រង់ $x = e$; $(C)$ នៅលើ $(d)$ ពេល $x \in (0, e)$ និង $(C)$ នៅក្រោម $(d)$ ពេល $x \in (e, +\infty)$</p>
            <p><strong>គ. គណនាដេរីវេ៖</strong></p>
            <p>$f'(x) = 2 - \frac{1}{x^2} - \frac{(1/x)x - \ln x}{x^2} = 2 - \frac{1}{x^2} - \frac{1 - \ln x}{x^2} = \frac{2x^2 - 1 - (1 - \ln x)}{x^2} = \frac{2x^2 - 2 + \ln x}{x^2}$</p>
            <p>ដោយ $x^2 > 0$ នាំឱ្យ $f'(x)$ មានសញ្ញាដូច $u(x) = 2x^2 - 2 + \ln x$</p>
            <p><strong>ឃ. សិក្សា $u(x)$៖</strong></p>
            <p>$u'(x) = 4x + \frac{1}{x} = \frac{4x^2+1}{x} > 0$ ចំពោះ $x > 0$ នាំឱ្យ $u(x)$ ជាអនុគមន៍កើនដាច់ខាត។</p>
            <p>ពិនិត្យ $u(1) = 2(1)^2 - 2 + \ln 1 = 0$ ។</p>
            <p>យើងទាញបាន $u(x) < 0$ ពេល $x \in (0, 1)$ និង $u(x) > 0$ ពេល $x \in (1, +\infty)$</p>
            <p>ដូចនេះ $f$ មានអប្បបរមា $f(1) = 2(1)-5+1-0 = -2$ ។</p>
          </div>
        </div>
      </section>

      <!-- Section VII -->
      <section
        class="question-section"
        style="animation-delay: 0.7s; border-bottom: none"
      >
        <h2>លំហាត់ VII (២៥ ពិន្ទុ)</h2>
        <div class="question-content">
          <p>
            គេឱ្យបន្ទាត់ $(d): \frac{x-3}{2} = \frac{y-3}{2} = \frac{z-2}{-1}$
            និងស៊្វែរ $(S): x^2 + y^2 + z^2 - 4x + 2y - 2z - 3 = 0$ ។
          </p>
          <div class="sub-question">
            <p>ក. កំណត់កូអរដោនេផ្ចិត $I$ និងកាំ $R$ នៃស៊្វែរ $(S)$ ។</p>
            <p>
              ខ. រកកូអរដោនេនៃចំណុច $A$ ដែលជាចំណោលកែងនៃ $I$ លើបន្ទាត់ $(d)$ ។
            </p>
            <p>គ. គណនា $AI$ រួចទាញថាបន្ទាត់ $(d)$ ប៉ះស៊្វែរ $(S)$ ។</p>
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
            <p><strong>ក. ផ្ចិត និងកាំស៊្វែរ៖</strong></p>
            <p>$(x^2 - 4x) + (y^2 + 2y) + (z^2 - 2z) = 3$</p>
            <p>$(x-2)^2-4 + (y+1)^2-1 + (z-1)^2-1 = 3 \Rightarrow (x-2)^2 + (y+1)^2 + (z-1)^2 = 9$</p>
            <div class="formula-box">ដូចនេះ ផ្ចិត $I(2, -1, 1)$ និងកាំ $R = 3$</div>
            <p><strong>ខ. រកចំណុច $A$៖</strong></p>
            <p>តាង $A(a, b, c) \Rightarrow \vec{AI} = (2-a, -1-b, 1-c)$</p>
            <p>ដោយ $(d): \frac{x-3}{2} = \frac{y-3}{2} = \frac{z-2}{-1} = t \Rightarrow \begin{cases} a = 2t+3 \\ b = 2t+3 \\ c = -t+2 \end{cases}$ និងវ៉ិចទ័រប្រាប់ទិស $\vec{n} = (2, 2, -1)$</p>
            <p>ដោយ $A$ ជាចំណោលកែង នាំឱ្យ $\vec{AI} \perp (d) \Rightarrow \vec{AI} \cdot \vec{n} = 0$</p>
            <p>$2(2-a) + 2(-1-b) + (-1)(1-c) = 0 \Rightarrow -2a - 2b + c + 1 = 0$ ($*$)</p>
            <p>យក ($**$) ជំនួសចូល ($*$) : $-2(2t+3) - 2(2t+3) + (-t+2) + 1 = 0 \Rightarrow -4t-6-4t-6-t+3 = 0 \Rightarrow -9t-9=0 \Rightarrow t = -1$</p>
            <p>នាំឱ្យ $\begin{cases} a = 2(-1)+3 = 1 \\ b = 2(-1)+3 = 1 \\ c = -(-1)+2 = 3 \end{cases} \Rightarrow A(1, 1, 3)$</p>
            <div class="formula-box">ដូចនេះ កូអរដោនេ $A(1, 1, 3)$</div>
            <p><strong>គ. គណនា $AI$៖</strong></p>
            <p>យើងមាន $\vec{AI} = (1, -2, -2) \Rightarrow AI = \sqrt{1^2 + (-2)^2 + (-2)^2} = 3$</p>
            <p>យើងសង្កេតឃើញថា $AI = R = 3$ នាំឱ្យបន្ទាត់ $(d)$ ប៉ះស៊្វែរ $(S)$ ត្រង់ចំណុច $A$ ។</p>
            <div class="formula-box">ដូចនេះ បន្ទាត់ $(d)$ ប៉ះស៊្វែរ $(S)$</div>
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
