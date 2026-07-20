<!doctype html>
<html lang="km">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>វិញ្ញាសា គណិតវិទ្យា ០១ | StudyNest</title>
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
        <h1>វិញ្ញាសា គណិតវិទ្យា (វិទ្យាសាស្ត្រពិត) ០១</h1>
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
          <p>គេឱ្យចំនួនកុំផ្លិច $z = 1 + i$ និង $w = \sqrt{3} + i$</p>
          <div class="sub-question">
            <p>ក. សរសេរ $\frac{z}{w}$ ជាទម្រង់ពីជគណិត។</p>
            <p>ខ. សរសេរ $z$, $w$ និង $\frac{z}{w}$ ជាទម្រង់ត្រីកោណមាត្រ។</p>
            <p>
              គ. ទាញរកតម្លៃប្រាកដនៃ $\cos\frac{\pi}{12}$ និង
              $\sin\frac{\pi}{12}$។
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
            <p><strong>ក. សរសេរ $\frac{z}{w}$ ជាទម្រង់ពីជគណិត៖</strong></p>
            <p>យើងមាន $z = 1 + i$ និង $w = \sqrt{3} + i$</p>
            <p>
              យើងបាន $\frac{z}{w} = \frac{1 + i}{\sqrt{3} + i} = \frac{(1 +
              i)(\sqrt{3} - i)}{(\sqrt{3} + i)(\sqrt{3} - i)}$
            </p>
            <p>
              $\frac{z}{w} = \frac{\sqrt{3} - i + i\sqrt{3} - i^2}{(\sqrt{3})^2
              - i^2} = \frac{\sqrt{3} + 1 + i(\sqrt{3} - 1)}{3 + 1}$
            </p>
            <div class="formula-box">
              ដូចនេះ $\frac{z}{w} = \frac{\sqrt{3} + 1}{4} + \frac{\sqrt{3} -
              1}{4}i$
            </div>

            <p>
              <strong
                >ខ. សរសេរ $z, w$ និង $\frac{z}{w}$ ជាទម្រង់ត្រីកោណមាត្រ៖</strong
              >
            </p>
            <p>
              $z = 1 + i = \sqrt{2}\left(\frac{\sqrt{2}}{2} +
              i\frac{\sqrt{2}}{2}\right) = \sqrt{2}\left(\cos\frac{\pi}{4} +
              i\sin\frac{\pi}{4}\right)$
            </p>
            <p>
              $w = \sqrt{3} + i = 2\left(\frac{\sqrt{3}}{2} +
              i\frac{1}{2}\right) = 2\left(\cos\frac{\pi}{6} +
              i\sin\frac{\pi}{6}\right)$
            </p>
            <p>
              $\frac{z}{w} = \frac{\sqrt{2}}{2}\left[\cos\left(\frac{\pi}{4} -
              \frac{\pi}{6}\right) + i\sin\left(\frac{\pi}{4} -
              \frac{\pi}{6}\right)\right] =
              \frac{\sqrt{2}}{2}\left(\cos\frac{\pi}{12} +
              i\sin\frac{\pi}{12}\right)$
            </p>
            <div class="formula-box">
              ដូចនេះ $z = \sqrt{2}\left(\cos\frac{\pi}{4} +
              i\sin\frac{\pi}{4}\right)$, $w = 2\left(\cos\frac{\pi}{6} +
              i\sin\frac{\pi}{6}\right)$ និង $\frac{z}{w} =
              \frac{\sqrt{2}}{2}\left(\cos\frac{\pi}{12} +
              i\sin\frac{\pi}{12}\right)$
            </div>

            <p>
              <strong
                >គ. ទាញរកតម្លៃប្រាកដនៃ $\cos\frac{\pi}{12}$ និង
                $\sin\frac{\pi}{12}$៖</strong
              >
            </p>
            <p>តាមសម្រាយខាងលើ យើងមាន៖</p>
            <p>
              $\frac{z}{w} = \frac{\sqrt{3} + 1}{4} + i\frac{\sqrt{3} - 1}{4}$
              និង $\frac{z}{w} = \frac{\sqrt{2}}{2}\left(\cos\frac{\pi}{12} +
              i\sin\frac{\pi}{12}\right)$
            </p>
            <p>ផ្ទឹមផ្នែកពិត និងផ្នែកនិម្មិត យើងបាន៖</p>
            <p>
              $\frac{\sqrt{2}}{2}\cos\frac{\pi}{12} = \frac{\sqrt{3} + 1}{4}
              \Rightarrow \cos\frac{\pi}{12} = \frac{\sqrt{6} + \sqrt{2}}{4}$
            </p>
            <p>
              $\frac{\sqrt{2}}{2}\sin\frac{\pi}{12} = \frac{\sqrt{3} - 1}{4}
              \Rightarrow \sin\frac{\pi}{12} = \frac{\sqrt{6} - \sqrt{2}}{4}$
            </p>
            <div class="formula-box">
              ដូចនេះ $\cos\frac{\pi}{12} = \frac{\sqrt{6} + \sqrt{2}}{4}$ និង
              $\sin\frac{\pi}{12} = \frac{\sqrt{6} - \sqrt{2}}{4}$
            </div>
          </div>
        </div>
      </section>

      <!-- Section II -->
      <section class="question-section" style="animation-delay: 0.2s">
        <h2>លំហាត់ II (១៥ ពិន្ទុ)</h2>
        <div class="question-content">
          <p>គណនាលីមីតខាងក្រោម៖</p>
          <div class="formula-box">
            <p>ក. $\lim_{x \to -1} \frac{x^3 + 1}{x^2 - 1}$</p>
            <p>ខ. $\lim_{x \to 0} \frac{1 + \sin^2 x - \cos 2x}{x^2}$</p>
            <p>គ. $\lim_{x \to 0} \frac{e^{2021x} - e^{2020x}}{x}$</p>
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
            <p><strong>គណនាលីមីតខាងក្រោម៖</strong></p>
            <p>
              <strong
                >ក. $L_1 = \lim_{x \to -1} \frac{x^3 + 1}{x^2 - 1}$</strong
              >
              (រាងមិនកំណត់ $\frac{0}{0}$)
            </p>
            <p>
              $L_1 = \lim_{x \to -1} \frac{(x + 1)(x^2 - x + 1)}{(x - 1)(x + 1)}
              = \lim_{x \to -1} \frac{x^2 - x + 1}{x - 1}$
            </p>
            <p>
              $L_1 = \frac{(-1)^2 - (-1) + 1}{-1 - 1} = \frac{3}{-2} =
              -\frac{3}{2}$
            </p>
            <div class="formula-box">
              ដូចនេះ $\lim_{x \to -1} \frac{x^3 + 1}{x^2 - 1} = -\frac{3}{2}$
            </div>

            <p>
              <strong
                >ខ. $L_2 = \lim_{x \to 0} \frac{1 + \sin^2 x - \cos
                2x}{x^2}$</strong
              >
              (រាងមិនកំណត់ $\frac{0}{0}$)
            </p>
            <p>
              $L_2 = \lim_{x \to 0} \frac{\sin^2 x + (1 - \cos 2x)}{x^2} =
              \lim_{x \to 0} \frac{\sin^2 x + 2\sin^2 x}{x^2}$
            </p>
            <p>
              $L_2 = \lim_{x \to 0} \frac{3\sin^2 x}{x^2} = 3\lim_{x \to 0}
              \left(\frac{\sin x}{x}\right)^2 = 3 \times 1^2 = 3$
            </p>
            <div class="formula-box">
              ដូចនេះ $\lim_{x \to 0} \frac{1 + \sin^2 x - \cos 2x}{x^2} = 3$
            </div>

            <p>
              <strong
                >គ. $L_3 = \lim_{x \to 0} \frac{e^{2021x} -
                e^{2020x}}{x}$</strong
              >
              (រាងមិនកំណត់ $\frac{0}{0}$)
            </p>
            <p>
              $L_3 = \lim_{x \to 0} \frac{e^{2020x}(e^x - 1)}{x} = \lim_{x \to
              0} e^{2020x} \cdot \lim_{x \to 0} \frac{e^x - 1}{x}$
            </p>
            <p>$L_3 = e^0 \times 1 = 1$</p>
            <div class="formula-box">
              ដូចនេះ $\lim_{x \to 0} \frac{e^{2021x} - e^{2020x}}{x} = 1$
            </div>
          </div>
        </div>
      </section>

      <!-- Section III -->
      <section class="question-section" style="animation-delay: 0.3s">
        <h2>លំហាត់ III (១៥ ពិន្ទុ)</h2>
        <div class="question-content">
          <p>
            ក្នុងស្បោងមួយមានប៊ូល $2$ គ្រាប់ ប៊ូលខ្មៅ $3$ គ្រាប់ និងប៊ូលខៀវ $5$
            គ្រាប់។ គេចាប់យកប៊ូលម្តងបីគ្រាប់ដោយចៃដន្យ។
            រកប្រូបាបនៃព្រឹត្តិការណ៍ដែលគេចាប់បាន៖
          </p>
          <div class="sub-question">
            <p>ក. $A$: ប៊ូលទាំងបីមានពណ៌ខៀវ។</p>
            <p>ខ. $B$: ប៊ូលទាំងបីមានពណ៌ខុសៗគ្នា។</p>
            <p>គ. $C$: យ៉ាងតិចមានប៊ូលពណ៌ខៀវមួយគ្រាប់។</p>
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
            <p>
              តាមបម្រាប់ ស្បោងមានប៊ូលស $2$ គ្រាប់ ប៊ូលខ្មៅ $3$ គ្រាប់ និងប៊ូលខៀវ
              $5$ គ្រាប់ សរុប $10$ គ្រាប់។
            </p>
            <p>ចាប់យកប៊ូល $3$ គ្រាប់ក្នុងពេលតែមួយ នោះចំនួនករណីអាចគឺ៖</p>
            <p>
              $n(S) = C(10, 3) = \frac{10!}{3!(10-3)!} = \frac{10 \times 9
              \times 8}{3 \times 2 \times 1} = 120$
            </p>

            <p><strong>ក. $A$: ប៊ូលទាំងបីមានពណ៌ខៀវ</strong></p>
            <p>ចំនួនករណីស្រប $n(A) = C(5, 3) = \frac{5!}{3!2!} = 10$</p>
            <p>
              ប្រូបាប $P(A) = \frac{n(A)}{n(S)} = \frac{10}{120} = \frac{1}{12}$
            </p>
            <div class="formula-box">ដូចនេះ $P(A) = \frac{1}{12}$</div>

            <p><strong>ខ. $B$: ប៊ូលទាំងបីមានពណ៌ខុសៗគ្នា</strong></p>
            <p>មានន័យថាចាប់បានស ១ ខ្មៅ ១ និងខៀវ ១។</p>
            <p>
              ចំនួនករណីស្រប $n(B) = C(2, 1) \times C(3, 1) \times C(5, 1) = 2
              \times 3 \times 5 = 30$
            </p>
            <p>
              ប្រូបាប $P(B) = \frac{n(B)}{n(S)} = \frac{30}{120} = \frac{1}{4}$
            </p>
            <div class="formula-box">ដូចនេះ $P(B) = \frac{1}{4}$</div>

            <p><strong>គ. $C$: យ៉ាងតិចមានប៊ូលពណ៌ខៀវមួយគ្រាប់</strong></p>
            <p>
              តាង $C'$ ជាព្រឹត្តិការណ៍ផ្ទុយ "គ្មានចាប់បានប៊ូលពណ៌ខៀវសោះ"
              មានន័យថាចាប់បានប៊ូលចេញពីប៊ូលសនិងខ្មៅសរុប $5$ គ្រាប់។
            </p>
            <p>$n(C') = C(5, 3) = 10$</p>
            <p>$P(C') = \frac{n(C')}{n(S)} = \frac{10}{120} = \frac{1}{12}$</p>
            <p>
              តាមរូបមន្តព្រឹត្តិការណ៍ផ្ទុយ $P(C) = 1 - P(C') = 1 - \frac{1}{12}
              = \frac{11}{12}$
            </p>
            <div class="formula-box">ដូចនេះ $P(C) = \frac{11}{12}$</div>
          </div>
        </div>
      </section>

      <!-- Section IV -->
      <section class="question-section" style="animation-delay: 0.4s">
        <h2>លំហាត់ IV (១៥ ពិន្ទុ)</h2>
        <div class="question-content">
          <p>
            ដោះស្រាយសមីការឌីផេរ៉ង់ស្យែល $(E): y'' - 4y' + 4y = 0$ ដោយដឹងថា
            $y'(0) = 7$ និង $y(0) = 2$។
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
            <p><strong>ដោះស្រាយសមីការឌីផេរ៉ង់ស្យែល៖</strong></p>
            <p>$(E): y'' - 4y' + 4y = 0$</p>
            <p>
              សមីការសម្គាល់៖ $\lambda^2 - 4\lambda + 4 = 0 \Leftrightarrow
              (\lambda - 2)^2 = 0 \Rightarrow \lambda = 2$ (ឫសឌុប)
            </p>
            <p>
              យើងបានចម្លើយទូទៅនៃសមីការគឺ $y = (Ax + B)e^{2x}$ ដែល $A, B \in
              \mathbb{R}$
            </p>

            <p>ដោយ $y(0) = 2$ នាំឱ្យ $(A(0) + B)e^0 = 2 \Rightarrow B = 2$</p>
            <p>
              យើងមាន $y' = A e^{2x} + 2(Ax + B)e^{2x} = (2Ax + A + 2B)e^{2x}$
            </p>
            <p>
              ដោយ $y'(0) = 7$ នាំឱ្យ $(2A(0) + A + 2B)e^0 = 7 \Rightarrow A + 2B
              = 7$
            </p>
            <p>ជំនួស $B = 2$ យើងបាន $A + 2(2) = 7 \Rightarrow A = 3$</p>

            <div class="formula-box">
              ដូចនេះ ចម្លើយនៃសមីការឌីផេរ៉ង់ស្យែលគឺ $y = (3x + 2)e^{2x}$
            </div>
          </div>
        </div>
      </section>

      <!-- Section V -->
      <section class="question-section" style="animation-delay: 0.5s">
        <h2>លំហាត់ V (១៥ ពិន្ទុ)</h2>
        <div class="question-content">
          <p>គេឱ្យសមីការអេលីប $(E): 25x^2 + 16y^2 - 50x + 32y - 359 = 0$</p>
          <div class="sub-question">
            <p>
              ក. កំណត់សមីការស្តង់ដានៃអេលីប។ ទាញរកកូអរដោនេផ្ចិត កំពូល កំណុំ
              ប្រវែងអ័ក្សតូច និងអ័ក្សធំ។
            </p>
            <p>ខ. សង់អេលីប $(E)$ ក្នុងតម្រុយអរតូណរម៉ាល់។</p>
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
            <p>
              <strong
                >ក. កំណត់សមីការស្តង់ដានៃអេលីប រួចទាញរកកូអរដោនេផ្ចិត កំពូល កំណុំ
                ប្រវែងអ័ក្សតូច និងអ័ក្សធំ៖</strong
              >
            </p>
            <p>យើងមានសមីការ $(E): 25x^2 + 16y^2 - 50x + 32y - 359 = 0$</p>
            <p>$25(x^2 - 2x) + 16(y^2 + 2y) = 359$</p>
            <p>$25(x^2 - 2x + 1) - 25 + 16(y^2 + 2y + 1) - 16 = 359$</p>
            <p>$25(x - 1)^2 + 16(y + 1)^2 = 400$</p>
            <p>
              ចែកអង្គទាំងពីរនឹង 400 យើងបាន៖ $\frac{(x - 1)^2}{16} + \frac{(y +
              1)^2}{25} = 1 \Rightarrow \frac{(x - 1)^2}{4^2} + \frac{(y +
              1)^2}{5^2} = 1$
            </p>
            <div class="formula-box">
              ដូចនេះ សមីការស្តង់ដាគឺ $\frac{(x - 1)^2}{4^2} + \frac{(y +
              1)^2}{5^2} = 1$
            </div>

            <p>
              ទម្រង់ទូទៅ $\frac{(x - h)^2}{b^2} + \frac{(y - k)^2}{a^2} = 1$
              (ដោយ $a > b > 0$, អ័ក្សធំស្របនឹងអ័ក្សអរដោនេ)
            </p>
            <p>យើងបាន $h = 1$, $k = -1$, $a = 5$, $b = 4$</p>
            <p>ដោយ $c^2 = a^2 - b^2 = 25 - 16 = 9 \Rightarrow c = 3$</p>
            <ul>
              <li><strong>ផ្ចិត៖</strong> $I(h, k) = I(1, -1)$</li>
              <li>
                <strong>កំពូល៖</strong> $V_{1,2}(h, k \pm a) = (1, -1 \pm 5)
                \Rightarrow V_1(1, -6), V_2(1, 4)$
              </li>
              <li>
                <strong>កំណុំ៖</strong> $F_{1,2}(h, k \pm c) = (1, -1 \pm 3)
                \Rightarrow F_1(1, -4), F_2(1, 2)$
              </li>
              <li><strong>ប្រវែងអ័ក្សធំ៖</strong> $2a = 2(5) = 10$</li>
              <li><strong>ប្រវែងអ័ក្សតូច៖</strong> $2b = 2(4) = 8$</li>
            </ul>

            <div style="text-align: center; margin: 30px 0">
              <svg
                viewBox="-100 -50 500 500"
                width="100%"
                style="max-width: 500px; background: white; font-family: serif"
              >
                <defs>
                  <style>
                    .grid-line {
                      stroke: #ccc;
                      stroke-width: 0.5;
                      stroke-dasharray: 2, 2;
                    }
                    .axis-line {
                      stroke: black;
                      stroke-width: 1;
                    }
                    .graph-path {
                      stroke: black;
                      stroke-width: 1.5;
                      fill: none;
                    }
                    .graph-label {
                      font-size: 14px;
                      font-style: italic;
                    }
                    .point {
                      fill: black;
                    }
                  </style>
                </defs>

                <!-- Grid (1 unit = 30px). Origin at X=150, Y=200 -->
                <!-- X goes from -4 to 6: 150 - 120 = 30 to 150 + 180 = 330 -->
                <!-- Y goes from -7 to 5: 200 + 210 = 410 to 200 - 150 = 50 -->
                <g class="grid-line">
                  <!-- Verticals -->
                  <line x1="30" y1="20" x2="30" y2="440" />
                  <line x1="60" y1="20" x2="60" y2="440" />
                  <line x1="90" y1="20" x2="90" y2="440" />
                  <line x1="120" y1="20" x2="120" y2="440" />
                  <line x1="150" y1="20" x2="150" y2="440" />
                  <line x1="180" y1="20" x2="180" y2="440" />
                  <line x1="210" y1="20" x2="210" y2="440" />
                  <line x1="240" y1="20" x2="240" y2="440" />
                  <line x1="270" y1="20" x2="270" y2="440" />
                  <line x1="300" y1="20" x2="300" y2="440" />
                  <line x1="330" y1="20" x2="330" y2="440" />

                  <!-- Horizontals -->
                  <line x1="10" y1="50" x2="350" y2="50" />
                  <line x1="10" y1="80" x2="350" y2="80" />
                  <line x1="10" y1="110" x2="350" y2="110" />
                  <line x1="10" y1="140" x2="350" y2="140" />
                  <line x1="10" y1="170" x2="350" y2="170" />
                  <line x1="10" y1="200" x2="350" y2="200" />
                  <line x1="10" y1="230" x2="350" y2="230" />
                  <line x1="10" y1="260" x2="350" y2="260" />
                  <line x1="10" y1="290" x2="350" y2="290" />
                  <line x1="10" y1="320" x2="350" y2="320" />
                  <line x1="10" y1="350" x2="350" y2="350" />
                  <line x1="10" y1="380" x2="350" y2="380" />
                  <line x1="10" y1="410" x2="350" y2="410" />
                </g>

                <!-- Axes -->
                <g class="axis-line">
                  <line x1="10" y1="200" x2="370" y2="200" />
                  <polygon points="370,200 362,196 362,204" />

                  <line x1="150" y1="440" x2="150" y2="20" />
                  <polygon points="150,20 146,28 154,28" />
                </g>

                <!-- Labels -->
                <text x="380" y="205" class="graph-label">x</text>
                <text x="145" y="10" class="graph-label">y</text>
                <text x="135" y="215" class="graph-label">0</text>
                <text x="180" y="215" class="graph-label">1</text>
                <text x="135" y="175" class="graph-label">1</text>

                <!-- Ellipse: Center (1, -1) -> (180, 230), rx=4, ry=5 -> rx=120, ry=150 -->
                <ellipse
                  cx="180"
                  cy="230"
                  rx="120"
                  ry="150"
                  class="graph-path"
                />

                <!-- Points -->
                <circle cx="180" cy="230" r="3" class="point" />
                <text x="190" y="235" font-size="12" font-style="italic">
                  I(1, -1)
                </text>

                <circle cx="180" cy="80" r="3" class="point" />
                <text x="190" y="85" font-size="12" font-style="italic">
                  V₂(1, 4)
                </text>

                <circle cx="180" cy="380" r="3" class="point" />
                <text x="190" y="385" font-size="12" font-style="italic">
                  V₁(1, -6)
                </text>

                <circle cx="180" cy="140" r="3" class="point" />
                <text x="190" y="145" font-size="12" font-style="italic">
                  F₂(1, 2)
                </text>

                <circle cx="180" cy="320" r="3" class="point" />
                <text x="190" y="325" font-size="12" font-style="italic">
                  F₁(1, -4)
                </text>
              </svg>
              <p style="font-size: 0.9rem; color: #64748b; margin-top: 10px">
                ក្រាបនៃអេលីប $(E)$
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Section VI -->
      <section class="question-section" style="animation-delay: 0.6s">
        <h2>លំហាត់ VI (២៥ ពិន្ទុ)</h2>
        <div class="question-content">
          <p>
            <strong>១.</strong> គេឱ្យអនុគមន៍ $f(x) = -x^2 + 1 - \ln x$
            ចំពោះគ្រប់ $x > 0$។
          </p>
          <div class="sub-question" style="margin-bottom: 20px">
            <p>ក. គណនា $f'(x)$។ រក $f(1)$ រួចទាញរកសញ្ញានៃ $f(x)$។</p>
          </div>

          <p>
            <strong>២.</strong> គេតាង $g(x) = -x + 1 + \frac{\ln x}{x}$
            ចំពោះគ្រប់ $x > 0$ និងមានក្រាបតំណាង $(C)$។
          </p>
          <div class="sub-question">
            <p>ក. រក $g'(x)$ រួចបង្ហាញថា $g'(x)$ មានសញ្ញាដូច $f(x)$។</p>
            <p>ខ. គណនាលីមីតចុងដែនកំណត់នៃ $g(x)$។ សង់តារាងអថេរភាពនៃ $g(x)$។</p>
            <p>
              គ. បង្ហាញថាបន្ទាត់ $(d): y = -x + 1$ ជាអាស៊ីមតូតទ្រេតនៃ $(C)$។
            </p>
            <p>ឃ. សង់ក្រាប $(C)$ និងអាស៊ីមតូតទាំងអស់របស់វា។</p>
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
            <p><strong>១. $f(x) = -x^2 + 1 - \ln x$</strong> ចំពោះ $x > 0$</p>
            <p><strong>ក. គណនា $f'(x)$ និងរកសញ្ញានៃ $f(x)$៖</strong></p>
            <p>$f'(x) = -2x - \frac{1}{x} = \frac{-2x^2 - 1}{x}$</p>
            <p>
              ដោយ $x > 0$ និង $-2x^2 - 1 < 0$ ជានិច្ច នាំឱ្យ $f'(x) < 0$
              ចំពោះគ្រប់ $x > 0$។ អនុគមន៍ $f$ ជាអនុគមន៍ចុះជានិច្ច។
            </p>
            <p>គណនា $f(1) = -(1)^2 + 1 - \ln 1 = -1 + 1 - 0 = 0$។</p>
            <p>ទាញរកសញ្ញា $f(x)$៖</p>
            <ul>
              <li>
                ចំពោះ $x \in (0, 1)$ ដោយ $f$ ចុះ នាំឱ្យ $f(x) > f(1) \Rightarrow
                f(x) > 0$
              </li>
              <li>ចំពោះ $x = 1$, នាំឱ្យ $f(x) = 0$</li>
              <li>
                ចំពោះ $x \in (1, +\infty)$ ដោយ $f$ ចុះ នាំឱ្យ $f(x) < f(1)
                \Rightarrow f(x) < 0$
              </li>
            </ul>

            <p>
              <strong>២. $g(x) = -x + 1 + \frac{\ln x}{x}$</strong> ចំពោះ $x >
              0$
            </p>
            <p><strong>ក. រក $g'(x)$ និងសញ្ញា៖</strong></p>
            <p>
              $g'(x) = -1 + \frac{(\ln x)' x - (x)' \ln x}{x^2} = -1 + \frac{1 -
              \ln x}{x^2} = \frac{-x^2 + 1 - \ln x}{x^2} = \frac{f(x)}{x^2}$
            </p>
            <p>
              ដោយ $x^2 > 0$ ចំពោះគ្រប់ $x > 0$ នាំឱ្យ $g'(x)$ មានសញ្ញាដូច
              $f(x)$។
            </p>

            <p><strong>ខ. គណនាលីមីតចុងដែន និងតារាងអថេរភាព៖</strong></p>
            <p>
              $\lim_{x \to 0^+} g(x) = \lim_{x \to 0^+} \left(-x + 1 + \frac{\ln
              x}{x}\right) = 0 + 1 + (-\infty) = -\infty$
            </p>
            <p>
              $\lim_{x \to +\infty} g(x) = \lim_{x \to +\infty} \left(-x + 1 +
              \frac{\ln x}{x}\right) = -\infty + 1 + 0 = -\infty$
            </p>
            <p>តារាងអថេរភាព៖ $g(1) = -1 + 1 + 0 = 0$</p>
            
            <div style="margin: 20px 0; overflow-x: auto;">
              <table style="width: 100%; border-collapse: collapse; text-align: center; border: 1px solid #cbd5e1;">
                <tr style="background: #f1f5f9;">
                  <th style="border: 1px solid #cbd5e1; padding: 10px;">$x$</th>
                  <th style="border: 1px solid #cbd5e1; padding: 10px;">$0$</th>
                  <th style="border: 1px solid #cbd5e1; padding: 10px;"></th>
                  <th style="border: 1px solid #cbd5e1; padding: 10px;">$1$</th>
                  <th style="border: 1px solid #cbd5e1; padding: 10px;"></th>
                  <th style="border: 1px solid #cbd5e1; padding: 10px;">$+\infty$</th>
                </tr>
                <tr>
                  <td style="border: 1px solid #cbd5e1; padding: 10px;">$g'(x)$</td>
                  <td style="border: 1px solid #cbd5e1; padding: 10px;">||</td>
                  <td style="border: 1px solid #cbd5e1; padding: 10px;">$+$</td>
                  <td style="border: 1px solid #cbd5e1; padding: 10px;">$0$</td>
                  <td style="border: 1px solid #cbd5e1; padding: 10px;">$-$</td>
                  <td style="border: 1px solid #cbd5e1; padding: 10px;"></td>
                </tr>
                <tr>
                  <td style="border: 1px solid #cbd5e1; padding: 10px;">$g(x)$</td>
                  <td style="border: 1px solid #cbd5e1; padding: 10px;">$-\infty$</td>
                  <td style="border: 1px solid #cbd5e1; padding: 10px;">$\nearrow$</td>
                  <td style="border: 1px solid #cbd5e1; padding: 10px;">$0$</td>
                  <td style="border: 1px solid #cbd5e1; padding: 10px;">$\searrow$</td>
                  <td style="border: 1px solid #cbd5e1; padding: 10px;">$-\infty$</td>
                </tr>
              </table>
            </div>

            <p>
              <strong
                >គ. បង្ហាញថាបន្ទាត់ $(d): y = -x + 1$ ជាអាស៊ីមតូតទ្រេតនៃ
                $(C)$៖</strong
              >
            </p>
            <p>
              $\lim_{x \to +\infty} [g(x) - (-x + 1)] = \lim_{x \to +\infty}
              \frac{\ln x}{x} = 0$
            </p>
            <p>
              ដូចនេះ បន្ទាត់ $(d): y = -x + 1$ ជាអាស៊ីមតូតទ្រេតនៃក្រាប $(C)$ នៅ
              $+\infty$។
            </p>

            <div style="text-align: center; margin: 30px 0">
              <svg
                viewBox="-100 -100 600 600"
                width="100%"
                style="max-width: 500px; background: white; font-family: serif"
              >
                <defs>
                  <style>
                    .grid-line {
                      stroke: #ccc;
                      stroke-width: 0.5;
                      stroke-dasharray: 2, 2;
                    }
                    .axis-line {
                      stroke: black;
                      stroke-width: 1;
                      fill: black;
                    }
                    .graph-path {
                      stroke: black;
                      stroke-width: 1.5;
                      fill: none;
                    }
                    .graph-asymptote {
                      stroke: #333;
                      stroke-width: 1.2;
                      stroke-dasharray: 4, 4;
                      fill: none;
                    }
                    .graph-label {
                      font-size: 14px;
                      font-style: italic;
                    }
                    .math-text {
                      font-size: 13px;
                    }
                  </style>
                </defs>
                <g class="grid-line">
                  <line x1="-50" y1="0" x2="450" y2="0" />
                  <line x1="-50" y1="50" x2="450" y2="50" />
                  <line x1="-50" y1="100" x2="450" y2="100" />
                  <line x1="-50" y1="150" x2="450" y2="150" />
                  <line x1="-50" y1="200" x2="450" y2="200" />
                  <line x1="-50" y1="250" x2="450" y2="250" />
                  <line x1="-50" y1="300" x2="450" y2="300" />
                  <line x1="-50" y1="350" x2="450" y2="350" />
                  <line x1="-50" y1="400" x2="450" y2="400" />
                  <line x1="-50" y1="450" x2="450" y2="450" />

                  <line x1="0" y1="-50" x2="0" y2="450" />
                  <line x1="50" y1="-50" x2="50" y2="450" />
                  <line x1="100" y1="-50" x2="100" y2="450" />
                  <line x1="150" y1="-50" x2="150" y2="450" />
                  <line x1="200" y1="-50" x2="200" y2="450" />
                  <line x1="250" y1="-50" x2="250" y2="450" />
                  <line x1="300" y1="-50" x2="300" y2="450" />
                  <line x1="350" y1="-50" x2="350" y2="450" />
                  <line x1="400" y1="-50" x2="400" y2="450" />
                </g>

                <!-- Axes -->
                <g class="axis-line">
                  <line x1="-80" y1="200" x2="480" y2="200" />
                  <polygon points="480,200 472,196 472,204" />
                  <line x1="100" y1="480" x2="100" y2="-80" />
                  <polygon points="100,-80 96,-72 104,-72" />
                </g>

                <text x="490" y="205" class="graph-label">x</text>
                <text x="85" y="-90" class="graph-label">y</text>
                <text x="85" y="215" class="graph-label">0</text>
                <text x="145" y="215" class="graph-label">1</text>
                <text x="195" y="215" class="graph-label">2</text>
                <text x="85" y="155" class="graph-label">1</text>

                <!-- Asymptote y = -x + 1 -->
                <line
                  x1="-50"
                  y1="50"
                  x2="400"
                  y2="500"
                  class="graph-asymptote"
                />
                <text x="350" y="460" class="math-text">(d): y = -x + 1</text>

                <!-- Curve C -->
                <path
                  class="graph-path"
                  d="M 110,480 C 115,300 125,210 150,200 S 250,280 400,430"
                />

                <text x="420" y="420" class="math-text">(C)</text>

                <!-- Local Max -->
                <circle cx="235.5" cy="267.5" r="3" fill="black" />
                <text x="245" y="267.5" class="math-text">M(e, g(e))</text>
              </svg>
              <p style="font-size: 0.9rem; color: #64748b; margin-top: 10px">
                ក្រាប $(C)$ និងអាស៊ីមតូត $(d)$
              </p>
            </div>
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
            ក្នុងតម្រុយអរតូណរម៉ាល់ $(O, \vec{i}, \vec{j}, \vec{k})$ គេឱ្យចំណុច
            $A(-1, 2, 3)$, $B(0, -1, 1)$ និង $C(2, 3, 5)$។
          </p>
          <div class="sub-question">
            <p>
              ក. រកសមីការប៉ារ៉ាម៉ែត្រនៃបន្ទាត់ $(L)$ ដែលកាត់តាមចំណុច $B$ និង
              $C$។
            </p>
            <p>
              ខ. សរសេរសមីការប្លង់ $(P)$ ដែលកាត់តាម $A$ ហើយកែងនឹងបន្ទាត់ $(L)$។
            </p>
            <p>គ. រកកូអរដោនេចំណុចប្រសព្វ $H$ រវាង $(L)$ និង $(P)$។</p>
            <p>ឃ. រកប្រភេទត្រីកោណ $ABC$ និងគណនាក្រឡាផ្ទៃ $S_{ABC}$។</p>
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
            <p>យើងមានចំណុច $A(-1, 2, 3), B(0, -1, 1)$ និង $C(2, 3, 5)$</p>

            <p>
              <strong
                >ក. រកសមីការប៉ារ៉ាម៉ែត្រនៃបន្ទាត់ $(L)$ កាត់តាម $B$ និង
                $C$៖</strong
              >
            </p>
            <p>
              វ៉ិចទ័រប្រាប់ទិសនៃ $(L)$ គឺ $\vec{BC} = (2 - 0, 3 - (-1), 5 - 1) =
              (2, 4, 4)$
            </p>
            <p>បន្ទាត់ $(L)$ កាត់តាម $B(0, -1, 1)$ មានសមីការប៉ារ៉ាម៉ែត្រ៖</p>
            <div class="formula-box">
              $(L): \begin{cases} x = 2t \\ y = -1 + 4t \\ z = 1 + 4t
              \end{cases} \quad (t \in \mathbb{R})$
            </div>

            <p>
              <strong
                >ខ. សរសេរសមីការប្លង់ $(P)$ ដែលកាត់តាម $A$ ហើយកែងនឹងបន្ទាត់
                $(L)$៖</strong
              >
            </p>
            <p>
              ដោយប្លង់ $(P) \perp (L)$ នាំឱ្យប្លង់ $(P)$ មានវ៉ិចទ័រណរម៉ាល់
              $\vec{n} = \vec{BC} = (2, 4, 4)$
            </p>
            <p>ប្លង់ $(P)$ កាត់តាម $A(-1, 2, 3)$ មានសមីការ៖</p>
            <p>$2(x - (-1)) + 4(y - 2) + 4(z - 3) = 0$</p>
            <p>$2x + 2 + 4y - 8 + 4z - 12 = 0$</p>
            <p>$2x + 4y + 4z - 18 = 0 \Leftrightarrow x + 2y + 2z - 9 = 0$</p>
            <div class="formula-box">
              ដូចនេះ សមីការប្លង់ $(P): x + 2y + 2z - 9 = 0$
            </div>

            <p>
              <strong
                >គ. រកកូអរដោនេចំណុចប្រសព្វ $H$ រវាង $(L)$ និង $(P)$៖</strong
              >
            </p>
            <p>យកសមីការប៉ារ៉ាម៉ែត្រ $(L)$ ជួសចូលសមីការប្លង់ $(P)$៖</p>
            <p>$(2t) + 2(-1 + 4t) + 2(1 + 4t) - 9 = 0$</p>
            <p>
              $2t - 2 + 8t + 2 + 8t - 9 = 0 \Rightarrow 18t - 9 = 0 \Rightarrow
              t = \frac{1}{2}$
            </p>
            <p>ជួស $t = \frac{1}{2}$ ទៅក្នុង $(L)$ យើងបាន៖</p>
            <p>
              $x = 2(\frac{1}{2}) = 1$, $y = -1 + 4(\frac{1}{2}) = 1$, $z = 1 +
              4(\frac{1}{2}) = 3$
            </p>
            <div class="formula-box">ដូចនេះ ចំណុចប្រសព្វគឺ $H(1, 1, 3)$</div>

            <p>
              <strong
                >ឃ. រកប្រភេទត្រីកោណ $ABC$ និងគណនាក្រឡាផ្ទៃ $S_{ABC}$៖</strong
              >
            </p>
            <p>$\vec{AB} = (0 - (-1), -1 - 2, 1 - 3) = (1, -3, -2)$</p>
            <p>$\vec{AC} = (2 - (-1), 3 - 2, 5 - 3) = (3, 1, 2)$</p>
            <p>ប្រវែងជ្រុង៖</p>
            <p>
              $AB = |\vec{AB}| = \sqrt{1^2 + (-3)^2 + (-2)^2} = \sqrt{1 + 9 + 4}
              = \sqrt{14}$
            </p>
            <p>
              $AC = |\vec{AC}| = \sqrt{3^2 + 1^2 + 2^2} = \sqrt{9 + 1 + 4} =
              \sqrt{14}$
            </p>
            <p>ដោយ $AB = AC$ នាំឱ្យ $ABC$ ជាត្រីកោណសមបាតកំពូល $A$។</p>
            <p>ក្រឡាផ្ទៃ $S_{ABC} = \frac{1}{2}|\vec{AB} \times \vec{AC}|$</p>
            <p>
              $\vec{AB} \times \vec{AC} = \begin{vmatrix} \vec{i} & \vec{j} &
              \vec{k} \\ 1 & -3 & -2 \\ 3 & 1 & 2 \end{vmatrix} = (-6 -
              (-2))\vec{i} - (2 - (-6))\vec{j} + (1 - (-9))\vec{k} = -4\vec{i} -
              8\vec{j} + 10\vec{k}$
            </p>
            <p>
              $|\vec{AB} \times \vec{AC}| = \sqrt{(-4)^2 + (-8)^2 + 10^2} =
              \sqrt{16 + 64 + 100} = \sqrt{180} = 6\sqrt{5}$
            </p>
            <p>$S_{ABC} = \frac{1}{2}(6\sqrt{5}) = 3\sqrt{5}$</p>
            <div class="formula-box">
              ដូចនេះ $ABC$ ជាត្រីកោណសមបាតកំពូល $A$ និងមានផ្ទៃ $S_{ABC} =
              3\sqrt{5}$ ឯកតាផ្ទៃ។
            </div>
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
