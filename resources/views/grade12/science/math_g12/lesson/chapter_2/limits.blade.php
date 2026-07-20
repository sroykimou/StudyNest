<!doctype html>
<html lang="km">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>មេរៀនទី២ - លីមីតនៃអនុគមន៍ (Limits) | StudyNest</title>
    <meta name="description" content="មេរៀនទី២ លីមីតនៃអនុគមន៍ គណិតវិទ្យា ថ្នាក់ទី១២ - និយមន័យ ប្រមាណវិធីលីមីត រាងមិនកំណត់ និងលីមីតនៅអនន្ត" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,400;0,600;0,700;1,400;1,700&family=Poppins:wght@400;600;700&family=Rajdhani:wght@600;700&display=swap"
      rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />

    <!-- MathJax 3 (Ultra Large Scale 200% Configuration) -->
    <script>
      window.MathJax = {
        tex: {
          inlineMath: [['$', '$'], ['\\(', '\\)']],
          displayMath: [['$$', '$$'], ['\\[', '\\]']],
          processEscapes: true
        },
        chtml: {
          scale: 2.0,
          displayAlign: 'left'
        },
        svg: {
          scale: 2.0,
          displayAlign: 'left'
        },
        options: {
          skipHtmlTags: ['script', 'noscript', 'style', 'textarea', 'pre']
        }
      };
    </script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/3.2.2/es5/tex-chtml.min.js"
      async
    ></script>

    <!-- Main Global CSS -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/professional.css') }}" />

    <style>
      :root {
        --primary-color: #5b21b6;
        --accent-color: #7c3aed;
        --accent-glow: rgba(124, 58, 237, 0.3);
        --bg-dark: #0f172a;
        --card-bg: #ffffff;
        --text-dark: #000000;
        --text-muted: #1e293b;
        --border-color: #94a3b8;
      }

      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      body {
        font-family: "Kantumruy Pro", sans-serif;
        background-color: #f1f5f9;
        color: var(--text-dark);
        font-size: 1.6rem; /* Huge base font size (~25.6px) */
        line-height: 2.3;
        padding: 32px;
        overflow-y: auto !important;
        display: block;
      }

      .container {
        max-width: 1040px;
        margin: 0 auto;
      }

      /* Navigation action bar */
      .action-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #ffffff;
        padding: 20px 36px;
        border-radius: 20px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
        border: 2px solid var(--border-color);
        margin-bottom: 36px;
      }

      .action-bar a {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 700;
        font-size: 1.45rem;
        display: inline-flex;
        align-items: center;
        gap: 14px;
        transition: 0.2s;
      }

      .action-bar a:hover {
        color: var(--text-dark);
        transform: translateX(-4px);
      }

      .subject-badge {
        display: inline-block;
        padding: 10px 26px;
        background: #f3e8ff;
        border: 2px solid #a855f7;
        border-radius: 40px;
        font-size: 1.3rem;
        color: var(--primary-color);
        font-weight: 700;
      }

      /* Lesson Header Banner */
      .lesson-header {
        background: linear-gradient(135deg, #2e1065, #5b21b6);
        color: white;
        padding: 60px 48px;
        border-radius: 28px;
        text-align: center;
        margin-bottom: 44px;
        box-shadow: 0 16px 40px rgba(91, 33, 182, 0.32);
        position: relative;
        overflow: hidden;
      }

      .lesson-header h1 {
        font-size: 46px;
        font-weight: 700;
        margin-bottom: 16px;
      }

      .lesson-header p {
        font-size: 26px;
        opacity: 0.95;
      }

      /* Card Container */
      .card {
        background: var(--card-bg);
        border-radius: 24px;
        padding: 44px;
        margin-bottom: 36px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
        border: 2px solid var(--border-color);
        transition: transform 0.2s, box-shadow 0.2s;
      }

      .card:hover {
        box-shadow: 0 14px 36px rgba(124, 58, 237, 0.15);
      }

      .question {
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 24px;
        font-size: 1.95rem; /* ~31.2px heading */
        display: flex;
        align-items: center;
        gap: 16px;
        border-bottom: 3.5px solid #e9d5ff;
        padding-bottom: 18px;
      }

      .answer-text {
        color: #000000;
        font-size: 1.6rem; /* ~25.6px text */
        font-weight: 400;
        line-height: 2.3;
      }

      ul {
        padding-left: 36px;
        margin: 20px 0;
      }

      li {
        margin-bottom: 14px;
        font-size: 1.6rem;
      }

      table {
        width: 100%;
        border-collapse: collapse;
        margin: 30px 0;
        border-radius: 14px;
        overflow: hidden;
        font-size: 1.6rem;
      }

      th, td {
        border: 2px solid #94a3b8;
        padding: 18px 24px;
        text-align: left;
      }

      th {
        background: #f3e8ff;
        color: var(--primary-color);
        font-weight: 700;
        font-size: 1.7rem;
      }

      .formula-box {
        background: linear-gradient(135deg, #faf5ff, #f3e8ff);
        border-left: 8px solid var(--accent-color);
        padding: 28px 36px;
        margin: 28px 0;
        border-radius: 0 18px 18px 0;
        font-size: 1.75rem;
        overflow-x: auto;
      }

      .example-box {
        background: #f0fdf4;
        border-left: 8px solid #16a34a;
        padding: 30px 36px;
        margin: 28px 0;
        border-radius: 0 18px 18px 0;
        font-size: 1.65rem;
      }

      .example-title {
        font-weight: 700;
        color: #15803d;
        font-size: 1.85rem;
        margin-bottom: 16px;
        display: flex;
        align-items: center;
        gap: 14px;
      }

      .note-box {
        background: #fff7ed;
        border-left: 8px solid #ea580c;
        padding: 28px 36px;
        margin: 28px 0;
        border-radius: 0 18px 18px 0;
        color: #7c2d12;
        font-size: 1.65rem;
      }

      footer {
        text-align: center;
        padding: 48px 0;
        color: var(--text-muted);
        font-size: 1.3rem;
      }

      /* MathJax Heavy Extra Large Scaling Overrides (220% - 250%) */
      mjx-container {
        font-size: 210% !important;
        font-weight: 700 !important;
        color: #000000 !important;
        line-height: 2.2 !important;
        margin: 12px 0 !important;
      }

      mjx-container[jax="CHTML"][display="true"],
      mjx-container[display="true"] {
        font-size: 240% !important;
        margin: 22px 0 !important;
        text-align: left !important;
      }

      .formula-box mjx-container,
      .example-box mjx-container {
        font-size: 235% !important;
      }

      @media (max-width: 768px) {
        body {
          padding: 20px;
          font-size: 1.3rem;
        }
        .lesson-header {
          padding: 38px 24px;
        }
        .lesson-header h1 {
          font-size: 32px;
        }
        .lesson-header p {
          font-size: 20px;
        }
        .card {
          padding: 28px;
        }
        .question {
          font-size: 1.5rem;
        }
        .formula-box {
          font-size: 1.4rem;
          padding: 20px 22px;
        }
        mjx-container {
          font-size: 170% !important;
        }
      }
    </style>
  </head>

  <body>
    <!-- Background elements -->
    <div class="drops" id="drops"></div>
    <div class="particles" id="particles"></div>

    <div class="container">
      <!-- Navigation Bar -->
      <div class="action-bar card">
        <a href="/grade12/science/math_g12/">
          <i class="fas fa-arrow-left"></i> ត្រឡប់ក្រោយ
        </a>
        <div class="subject-badge">គណិតវិទ្យា &bull; ជំពូកទី ២</div>
      </div>

      <!-- Banner Header -->
      <div class="lesson-header">
        <h1>មេរៀនទី ២ ៖ លីមីតនៃអនុគមន៍ (Limits of Functions)</h1>
        <p>និយមន័យ ប្រមាណវិធីលីមីត រាងមិនកំណត់ និងលីមីតនៅអនន្ត</p>
      </div>

      <!-- Q1 -->
      <div class="card">
        <div class="question"><i class="fas fa-arrows-to-dot"></i> ១. តើលីមីតនៃអនុគមន៍ជាអ្វី?</div>
        <div class="answer-text">
          បើ $x$ ខិតជិត $a$ រួចអនុគមន៍ $y = f(x)$ ខិតជិតតម្លៃ $b$ ណាមួយ នោះគេកំណត់សរសេរ ៖
          <div class="formula-box">
            $$\lim_{x \to a} f(x) = b$$
          </div>
          គេអានថា «លីមីតនៃ $f(x)$ ពេល $x$ ខិតទៅ $a$ ស្មើ $b$» ។
        </div>
      </div>

      <!-- Q2 -->
      <div class="card">
        <div class="question"><i class="fas fa-calculator"></i> ២. តើប្រមាណវិធីលើលីមីតមានអ្វីខ្លះ?</div>
        <div class="answer-text">
          បើ $\displaystyle\lim_{x \to a} f(x) = L$ និង $\displaystyle\lim_{x \to a} g(x) = M$ នោះ ៖
          <table>
            <thead>
              <tr><th>ប្រមាណវិធី</th><th>រូបមន្ត</th></tr>
            </thead>
            <tbody>
              <tr><td><strong>ថេរ</strong></td><td>$\displaystyle\lim_{x \to a} k = k$</td></tr>
              <tr><td><strong>ផ្សំ / ដក</strong></td><td>$\displaystyle\lim_{x \to a} \big[f(x) \pm g(x)\big] = L \pm M$</td></tr>
              <tr><td><strong>ថេរគុណ</strong></td><td>$\displaystyle\lim_{x \to a} k \cdot f(x) = kL$</td></tr>
              <tr><td><strong>គុណ</strong></td><td>$\displaystyle\lim_{x \to a} f(x) \cdot g(x) = L \cdot M$</td></tr>
              <tr><td><strong>ចែក</strong></td><td>$\displaystyle\lim_{x \to a} \frac{f(x)}{g(x)} = \frac{L}{M}$ ចំពោះ $M \neq 0$</td></tr>
              <tr><td><strong>ស្វ័យគុណ</strong></td><td>$\displaystyle\lim_{x \to a} \big[f(x)\big]^n = L^n$</td></tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Q3 -->
      <div class="card">
        <div class="question"><i class="fas fa-list-check"></i> ៣. តើការគណនាលីមីតធ្វើដូចម្តេច?</div>
        <div class="answer-text">
          ដើម្បីគណនា $\displaystyle\lim_{x \to x_0} f(x)$ គេជំនួស $x = x_0$ ទៅក្នុងកន្សោមអនុគមន៍ $f(x)$ ៖
          <ul>
            <li>បើ $f(x_0) = k$ ជាចំនួនកំណត់ នោះ $k$ ជាលីមីត ។</li>
            <li>បើ $f(x_0)$ ស្ថិតនៅក្នុងទម្រង់មិនកំណត់ ($\frac{0}{0}$, $\frac{\infty}{\infty}$, $\infty - \infty$, $0 \cdot \infty$, ...) នោះគេត្រូវប្រើវិធីផ្សេង ។</li>
          </ul>
          <div class="example-box">
            <div class="example-title"><i class="fas fa-check-circle"></i> ឧទាហរណ៍ ៖</div>
            $\displaystyle\lim_{x \to 1} (x^3 + 5x^2 - x) = 1^3 + 5(1)^2 - 1 = 1 + 5 - 1 = 5$
          </div>
        </div>
      </div>

      <!-- Q4 -->
      <div class="card">
        <div class="question"><i class="fas fa-divide"></i> ៤. តើលីមីតរាងមិនកំណត់ $\frac{0}{0}$ ដោះស្រាយដូចម្តេច?</div>
        <div class="answer-text">
          ដើម្បីគណនាលីមីតរាង $\frac{0}{0}$ គេត្រូវ ៖
          <ul>
            <li>បំបែកភាគយក និងភាគបែង ជាផលគុណកត្តា ដែលមាន $(x - a)$ ជាកត្តារួម</li>
            <li>សម្រួលកត្តារួម $(x - a)$ ចោល</li>
            <li>រួចគណនាលីមីតនៃប្រភាគថ្មី ដោយជំនួស $x = a$</li>
          </ul>
          <div class="example-box">
            <div class="example-title"><i class="fas fa-check-circle"></i> ឧទាហរណ៍ ៖</div>
            គណនា $\displaystyle\lim_{x \to 5} \frac{x^2 - 25}{2x - 10}$
            <br><br>
            ជំនួស $x = 5$: $\frac{25-25}{10-10} = \frac{0}{0}$ &rarr; រាងមិនកំណត់
            $$\lim_{x \to 5} \frac{x^2 - 25}{2x - 10} = \lim_{x \to 5} \frac{(x-5)(x+5)}{2(x-5)} = \lim_{x \to 5} \frac{x+5}{2} = \frac{10}{2} = 5$$
          </div>
        </div>
      </div>

      <!-- Q5 -->
      <div class="card">
        <div class="question"><i class="fas fa-square-root-variable"></i> ៥. តើរូបមន្តសំខាន់សម្រាប់បំបែកកត្តាមានអ្វីខ្លះ?</div>
        <div class="answer-text">
          <div class="formula-box">
            $$a^n - b^n = (a - b)(a^{n-1} + a^{n-2}b + a^{n-3}b^2 + \cdots + b^{n-1})$$
          </div>
          ឧទាហរណ៍ជាក់លាក់ ៖
          <ul>
            <li>$a^2 - b^2 = (a-b)(a+b)$</li>
            <li>$a^3 - b^3 = (a-b)(a^2 + ab + b^2)$</li>
            <li>$a^n - 1 = (a-1)(a^{n-1} + a^{n-2} + \cdots + a + 1)$</li>
          </ul>
          កន្សោមឆ្លាស់ ៖
          <ul>
            <li>$(\sqrt{a} - \sqrt{b})(\sqrt{a} + \sqrt{b}) = a - b$</li>
            <li>$(\sqrt[3]{a} - \sqrt[3]{b})(\sqrt[3]{a^2} + \sqrt[3]{ab} + \sqrt[3]{b^2}) = a - b$</li>
          </ul>
        </div>
      </div>

      <!-- Q6 -->
      <div class="card">
        <div class="question"><i class="fas fa-square-root-variable"></i> ៦. តើលីមីតដែលមានឫសការ៉េ គណនាដូចម្តេច?</div>
        <div class="answer-text">
          បើលីមីតមានរាង $\frac{0}{0}$ ហើយមានឫសការ៉េ គេគុណភាគយក និងភាគបែង នឹង<strong>កន្សោមឆ្លាស់</strong> (Conjugate) ៖
          <div class="formula-box">
            $$(\sqrt{a} - \sqrt{b}) \times \frac{\sqrt{a} + \sqrt{b}}{\sqrt{a} + \sqrt{b}} = \frac{a - b}{\sqrt{a} + \sqrt{b}}$$
          </div>
          <div class="example-box">
            <div class="example-title"><i class="fas fa-check-circle"></i> ឧទាហរណ៍ ៖</div>
            គណនា $\displaystyle\lim_{x \to 4} \frac{\sqrt{x} - 2}{x - 4}$
            <br><br>
            គុណនឹង $\frac{\sqrt{x}+2}{\sqrt{x}+2}$ ៖
            $$\lim_{x \to 4} \frac{(\sqrt{x}-2)(\sqrt{x}+2)}{(x-4)(\sqrt{x}+2)} = \lim_{x \to 4} \frac{x - 4}{(x-4)(\sqrt{x}+2)} = \lim_{x \to 4} \frac{1}{\sqrt{x}+2} = \frac{1}{4}$$
          </div>
        </div>
      </div>

      <!-- Q7 -->
      <div class="card">
        <div class="question"><i class="fas fa-infinity"></i> ៧. តើលីមីតរាង $\frac{\infty}{\infty}$ ដោះស្រាយដូចម្តេច?</div>
        <div class="answer-text">
          ចំពោះ $\displaystyle\lim_{x \to \pm\infty} \frac{P(x)}{Q(x)}$ ដែល $P(x)$ និង $Q(x)$ ជាពហុធា គេ<strong>ចែកភាគយក និងភាគបែង នឹងស្វ័យគុណខ្ពស់បំផុតរបស់ $x$</strong> នៅភាគបែង ៖
          <div class="formula-box">
            បើ $\deg P = \deg Q$ នោះ $\displaystyle\lim_{x \to \pm\infty} \frac{P(x)}{Q(x)} = \frac{\text{មេគុណ } x^n \text{ ភាគយក}}{\text{មេគុណ } x^n \text{ ភាគបែង}}$
          </div>
          <div class="formula-box">
            បើ $\deg P < \deg Q$ នោះ $\displaystyle\lim_{x \to \pm\infty} \frac{P(x)}{Q(x)} = 0$
          </div>
          <div class="example-box">
            <div class="example-title"><i class="fas fa-check-circle"></i> ឧទាហរណ៍ ៖</div>
            $\displaystyle\lim_{x \to +\infty} \frac{3x^2 + 2x - 1}{5x^2 - 4} = \lim_{x \to +\infty} \frac{3 + \frac{2}{x} - \frac{1}{x^2}}{5 - \frac{4}{x^2}} = \frac{3}{5}$
          </div>
        </div>
      </div>

      <!-- Q8 -->
      <div class="card">
        <div class="question"><i class="fas fa-infinity"></i> ៨. តើលីមីតរាង $\infty - \infty$ ដោះស្រាយដូចម្តេច?</div>
        <div class="answer-text">
          រាង $\infty - \infty$ ជារាងមិនកំណត់។ គេប្រើវិធីដូចខាងក្រោម ៖
          <ul>
            <li><strong>ពហុធា ៖</strong> ដាក់ $x$ ជាកត្តារួម (ស្វ័យគុណខ្ពស់បំផុត)</li>
            <li><strong>ប្រភាគ ៖</strong> ផ្សំប្រភាគរួចសម្រួល</li>
            <li><strong>ឫស ៖</strong> គុណនឹងកន្សោមឆ្លាស់</li>
          </ul>
          <div class="example-box">
            <div class="example-title"><i class="fas fa-check-circle"></i> ឧទាហរណ៍ ៖</div>
            $\displaystyle\lim_{x \to +\infty} \left(\sqrt{x^2 + x} - x\right)$
            <br><br>
            គុណនឹងកន្សោមឆ្លាស់ ៖
            $$= \lim_{x \to +\infty} \frac{(\sqrt{x^2+x}-x)(\sqrt{x^2+x}+x)}{\sqrt{x^2+x}+x} = \lim_{x \to +\infty} \frac{x^2+x-x^2}{\sqrt{x^2+x}+x}$$
            $$= \lim_{x \to +\infty} \frac{x}{\sqrt{x^2+x}+x} = \lim_{x \to +\infty} \frac{1}{\sqrt{1+\frac{1}{x}}+1} = \frac{1}{2}$$
          </div>
        </div>
      </div>

      <!-- Q9 -->
      <div class="card">
        <div class="question"><i class="fas fa-star"></i> ៩. តើលីមីតស្តង់ដារសំខាន់ៗមានអ្វីខ្លះ?</div>
        <div class="answer-text">
          <table>
            <thead>
              <tr><th>លីមីត</th><th>តម្លៃ</th></tr>
            </thead>
            <tbody>
              <tr><td>$\displaystyle\lim_{x \to 0} \frac{\sin x}{x}$</td><td>$= 1$</td></tr>
              <tr><td>$\displaystyle\lim_{x \to 0} \frac{\tan x}{x}$</td><td>$= 1$</td></tr>
              <tr><td>$\displaystyle\lim_{x \to 0} \frac{1 - \cos x}{x^2}$</td><td>$= \dfrac{1}{2}$</td></tr>
              <tr><td>$\displaystyle\lim_{x \to 0} \frac{e^x - 1}{x}$</td><td>$= 1$</td></tr>
              <tr><td>$\displaystyle\lim_{x \to 0} \frac{\ln(1+x)}{x}$</td><td>$= 1$</td></tr>
              <tr><td>$\displaystyle\lim_{x \to +\infty} \left(1 + \frac{1}{x}\right)^x$</td><td>$= e$</td></tr>
            </tbody>
          </table>
          <div class="note-box">
            <strong><i class="fas fa-lightbulb"></i> ចំណាំ ៖</strong> លីមីតទាំងនេះប្រើញឹកញាប់ក្នុងការគណនា។ ពិសេស $\displaystyle\lim_{x \to 0}\frac{\sin x}{x} = 1$ គឺជាមូលដ្ឋានគ្រឹះសម្រាប់ដេរីវេនៃអនុគមន៍ត្រីកោណមាត្រ។
          </div>
        </div>
      </div>

      <!-- Q10 -->
      <div class="card">
        <div class="question"><i class="fas fa-calculator"></i> ១០. ចូរគណនាលីមីតដែលប្រើរូបមន្តស្តង់ដារ</div>
        <div class="answer-text">
          <div class="example-box">
            <div class="example-title"><i class="fas fa-check-circle"></i> ឧទាហរណ៍ ១ ៖</div>
            គណនា $\displaystyle\lim_{x \to 0} \frac{\sin 3x}{x}$
            <br><br>
            $$\lim_{x \to 0} \frac{\sin 3x}{x} = \lim_{x \to 0} \frac{\sin 3x}{3x} \cdot 3 = 1 \cdot 3 = 3$$
          </div>
          <div class="example-box">
            <div class="example-title"><i class="fas fa-check-circle"></i> ឧទាហរណ៍ ២ ៖</div>
            គណនា $\displaystyle\lim_{x \to 0} \frac{\sin 5x}{\sin 2x}$
            <br><br>
            $$\lim_{x \to 0} \frac{\sin 5x}{\sin 2x} = \lim_{x \to 0} \frac{\sin 5x}{5x} \cdot \frac{2x}{\sin 2x} \cdot \frac{5}{2} = 1 \cdot 1 \cdot \frac{5}{2} = \frac{5}{2}$$
          </div>
        </div>
      </div>

      <!-- Q11 -->
      <div class="card">
        <div class="question"><i class="fas fa-infinity"></i> ១១. តើលីមីតនៅអនន្ត (Limits at Infinity) ជាអ្វី?</div>
        <div class="answer-text">
          លីមីតនៅអនន្តគឺជាការសិក្សាអាកប្បកិរិយារបស់ $f(x)$ ពេល $x \to +\infty$ ឬ $x \to -\infty$ ៖
          <div class="formula-box">
            $$\lim_{x \to +\infty} f(x) = L \quad \text{មានន័យថា} \quad f(x) \text{ ខិតជិត } L \text{ ពេល } x \text{ កើនឡើងជានិច្ច}$$
          </div>
          លក្ខណៈមូលដ្ឋាន ៖
          <ul>
            <li>$\displaystyle\lim_{x \to \pm\infty} k = k$ (ថេរ)</li>
            <li>$\displaystyle\lim_{x \to +\infty} \frac{1}{x^n} = 0$ ចំពោះ $n > 0$</li>
            <li>$\displaystyle\lim_{x \to +\infty} x^n = +\infty$ ចំពោះ $n > 0$</li>
            <li>$\displaystyle\lim_{x \to +\infty} e^x = +\infty$ និង $\displaystyle\lim_{x \to -\infty} e^x = 0$</li>
          </ul>
        </div>
      </div>

      <!-- Q12 -->
      <div class="card">
        <div class="question"><i class="fas fa-calculator"></i> ១២. គណនា $\displaystyle\lim_{x \to 3} \frac{x^3 - 27}{x^2 - 9}$</div>
        <div class="answer-text">
          <div class="example-box">
            <div class="example-title"><i class="fas fa-check-circle"></i> ដំណោះស្រាយ ៖</div>
            ជំនួស $x = 3$: $\frac{27-27}{9-9} = \frac{0}{0}$ &rarr; រាងមិនកំណត់
            <br><br>
            បំបែកកត្តា ៖
            $$\frac{x^3 - 27}{x^2 - 9} = \frac{(x-3)(x^2+3x+9)}{(x-3)(x+3)}$$
            សម្រួល $(x-3)$ ចោល ៖
            $$\lim_{x \to 3} \frac{x^2+3x+9}{x+3} = \frac{9+9+9}{6} = \frac{27}{6} = \frac{9}{2}$$
          </div>
        </div>
      </div>

      <!-- Q13 Summary -->
      <div class="card">
        <div class="question"><i class="fas fa-list-check"></i> ១៣. សង្ខេបរូបមន្ត និងវិធីគណនាលីមីត</div>
        <div class="answer-text">
          <table>
            <thead>
              <tr><th>ទម្រង់មិនកំណត់</th><th>វិធីដោះស្រាយ</th></tr>
            </thead>
            <tbody>
              <tr><td>$\dfrac{0}{0}$ (ពហុធា)</td><td>បំបែកកត្តា រួចសម្រួល $(x-a)$</td></tr>
              <tr><td>$\dfrac{0}{0}$ (ឫស)</td><td>គុណនឹងកន្សោមឆ្លាស់ (Conjugate)</td></tr>
              <tr><td>$\dfrac{\infty}{\infty}$</td><td>ចែកនឹង $x^n$ (ស្វ័យគុណខ្ពស់បំផុត)</td></tr>
              <tr><td>$\infty - \infty$ (ពហុធា)</td><td>ដាក់ $x$ ជាកត្តារួម</td></tr>
              <tr><td>$\infty - \infty$ (ឫស)</td><td>គុណនឹងកន្សោមឆ្លាស់</td></tr>
            </tbody>
          </table>

          <div class="note-box">
            <strong><i class="fas fa-bookmark"></i> លីមីតស្តង់ដារចំបាច់ៗ ៖</strong>
            <br>$\displaystyle\lim_{x \to 0}\frac{\sin x}{x} = 1$, &ensp;
            $\displaystyle\lim_{x \to 0}\frac{e^x - 1}{x} = 1$, &ensp;
            $\displaystyle\lim_{x \to +\infty}\left(1+\frac{1}{x}\right)^x = e$
          </div>
        </div>
      </div>

    </div>

    <footer>ចេះគឺជាប់ &bull; StudyNest Educational Platform</footer>

    <!-- Core Scripts -->
    <script src="{{ asset('assets/main.js') }}"></script>
    <script>
      StudyNest.authGuard();
      StudyNest.initBackground();
    </script>
  </body>
</html>
