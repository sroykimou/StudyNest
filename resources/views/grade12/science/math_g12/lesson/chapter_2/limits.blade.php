<!doctype html>
<html lang="km">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>មេរៀនទី២ - លីមីតនៃអនុគមន៍ | StudyNest</title>
    <link href="https://fonts.googleapis.com/css2?family=Siemreap&display=swap" rel="stylesheet" />
    <script>
      window.MathJax = {
        tex: { inlineMath: [['$','$'], ['\\(','\\)']], displayMath: [['$$','$$'], ['\\[','\\]']] },
        svg: { fontCache: 'global' }
      };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-svg.js" async></script>
    <style>
      :root { --primary-color: #6d28d9; --accent-color: #8b5cf6; --bg-color: #f1f5f9; }
      body { margin: 0; font-family: "Siemreap", "Khmer OS Siemreap", Arial, sans-serif; background: var(--bg-color); color: #1e293b; line-height: 1.8; }
      header { background: linear-gradient(135deg, #3b0764, var(--primary-color)); color: white; text-align: center; padding: 50px 20px; border-bottom: 5px solid var(--accent-color); }
      header h1 { margin: 0; font-size: 2.2rem; }
      header h2 { margin: 10px 0 0; font-weight: normal; opacity: 0.9; }
      .container { max-width: 850px; margin: -30px auto 60px; padding: 0 20px; }
      .card { background: white; border-radius: 12px; padding: 25px; margin-bottom: 20px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05); }
      .question { font-weight: bold; color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem; display: flex; align-items: center; gap: 10px; border-bottom: 1px solid #e2e8f0; padding-bottom: 10px; }
      .answer-text { padding-left: 10px; color: #334155; }
      ul { padding-left: 25px; margin: 10px 0; }
      li { margin-bottom: 8px; }
      table { width: 100%; border-collapse: collapse; margin: 15px 0; }
      th, td { border: 1px solid #cbd5e1; padding: 12px; text-align: left; }
      th { background: #f8fafc; color: var(--primary-color); }
      .formula-box { background: linear-gradient(135deg, #faf5ff, #ede9fe); border-left: 4px solid var(--accent-color); padding: 18px 22px; margin: 15px 0; border-radius: 0 10px 10px 0; font-size: 1rem; overflow-x: auto; }
      .example-box { background: #f0fdf4; border-left: 4px solid #22c55e; padding: 18px 22px; margin: 15px 0; border-radius: 0 10px 10px 0; }
      .example-box .example-title { font-weight: bold; color: #15803d; margin-bottom: 8px; }
      .note-box { background: #fff7ed; border-left: 4px solid #f97316; padding: 15px 20px; margin: 15px 0; border-radius: 0 10px 10px 0; color: #9a3412; }
      footer { text-align: center; padding: 40px; color: #64748b; font-size: 0.9rem; }
      .back-link { display: inline-block; margin-bottom: 20px; color: white; text-decoration: none; font-size: 0.9rem; }
      @media (max-width: 600px) { header { padding: 30px 15px; } h1 { font-size: 1.6rem; } .formula-box { font-size: 0.85rem; } }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/professional.css') }}">
    <script src="{{ asset('assets/main.js') }}"></script>
    <script>StudyNest.authGuard();</script>
  </head>
  <body>
    <header>
      <a href="../../math_g12" class="back-link"><i class="fas fa-arrow-left"></i> ត្រឡប់ក្រោយ</a>
      <h1>មេរៀនទី ២</h1>
      <h2>លីមីតនៃអនុគមន៍ (Limits of Functions)</h2>
    </header>

    <div class="container">

      <!-- Q1 -->
      <div class="card">
        <div class="question">១. តើលីមីតនៃអនុគមន៍ជាអ្វី?</div>
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
        <div class="question">២. តើប្រមាណវិធីលើលីមីតមានអ្វីខ្លះ?</div>
        <div class="answer-text">
          បើ $\displaystyle\lim_{x \to a} f(x) = L$ និង $\displaystyle\lim_{x \to a} g(x) = M$ នោះ ៖
          <table>
            <thead>
              <tr><th>ប្រមាណវិធី</th><th>រូបមន្ត</th></tr>
            </thead>
            <tbody>
              <tr><td>ថេរ</td><td>$\displaystyle\lim_{x \to a} k = k$</td></tr>
              <tr><td>ផ្សំ / ដក</td><td>$\displaystyle\lim_{x \to a} \big[f(x) \pm g(x)\big] = L \pm M$</td></tr>
              <tr><td>ថេរគុណ</td><td>$\displaystyle\lim_{x \to a} k \cdot f(x) = kL$</td></tr>
              <tr><td>គុណ</td><td>$\displaystyle\lim_{x \to a} f(x) \cdot g(x) = L \cdot M$</td></tr>
              <tr><td>ចែក</td><td>$\displaystyle\lim_{x \to a} \frac{f(x)}{g(x)} = \frac{L}{M}$ ចំពោះ $M \neq 0$</td></tr>
              <tr><td>ស្វ័យគុណ</td><td>$\displaystyle\lim_{x \to a} \big[f(x)\big]^n = L^n$</td></tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Q3 -->
      <div class="card">
        <div class="question">៣. តើការគណនាលីមីតធ្វើដូចម្តេច?</div>
        <div class="answer-text">
          ដើម្បីគណនា $\displaystyle\lim_{x \to x_0} f(x)$ គេជំនួស $x = x_0$ ទៅក្នុងកន្សោមអនុគមន៍ $f(x)$ ៖
          <ul>
            <li>បើ $f(x_0) = k$ ជាចំនួនកំណត់ នោះ $k$ ជាលីមីត ។</li>
            <li>បើ $f(x_0)$ សថិតនៅក្នុងទម្រង់មិនកំណត់ ($\frac{0}{0}$, $\frac{\infty}{\infty}$, $\infty - \infty$, $0 \cdot \infty$, ...) នោះគេត្រូវប្រើវិធីផ្សេង ។</li>
          </ul>
          <div class="example-box">
            <div class="example-title">ឧទាហរណ៍៖</div>
            $\displaystyle\lim_{x \to 1} (x^3 + 5x^2 - x) = 1^3 + 5(1)^2 - 1 = 1 + 5 - 1 = 5$
          </div>
        </div>
      </div>

      <!-- Q4 -->
      <div class="card">
        <div class="question">៤. តើលីមីតរាងមិនកំណត់ $\frac{0}{0}$ ដោះស្រាយដូចម្តេច?</div>
        <div class="answer-text">
          ដើម្បីគណនាលីមីតរាង $\frac{0}{0}$ គេត្រូវ ៖
          <ul>
            <li>បំបែកភាគយក និងភាគបែង ជាផលគុណកត្តា ដែលមាន $(x - a)$ ជាកត្តារួម</li>
            <li>សម្រួលកត្តារួម $(x - a)$ ចោល</li>
            <li>រួចគណនាលីមីតនៃប្រភាគថ្មី ដោយជំនួស $x = a$</li>
          </ul>
          <div class="example-box">
            <div class="example-title">ឧទាហរណ៍៖</div>
            គណនា $\displaystyle\lim_{x \to 5} \frac{x^2 - 25}{2x - 10}$
            <br><br>
            ជំនួស $x = 5$: $\frac{25-25}{10-10} = \frac{0}{0}$ → រាងមិនកំណត់
            $$\lim_{x \to 5} \frac{x^2 - 25}{2x - 10} = \lim_{x \to 5} \frac{(x-5)(x+5)}{2(x-5)} = \lim_{x \to 5} \frac{x+5}{2} = \frac{10}{2} = 5$$
          </div>
        </div>
      </div>

      <!-- Q5 -->
      <div class="card">
        <div class="question">៥. តើរូបមន្តសំខាន់សម្រាប់បំបែកកត្តាមានអ្វីខ្លះ?</div>
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
        <div class="question">៦. តើលីមីតដែលមានឫសការ៉េ គណនាដូចម្តេច?</div>
        <div class="answer-text">
          បើលីមីតមានរាង $\frac{0}{0}$ ហើយមានឫសការ៉េ គេគុណភាគយក និងភាគបែង នឹង<strong>កន្សោមឆ្លាស់</strong> (conjugate) ៖
          <div class="formula-box">
            $$(\sqrt{a} - \sqrt{b}) \times \frac{\sqrt{a} + \sqrt{b}}{\sqrt{a} + \sqrt{b}} = \frac{a - b}{\sqrt{a} + \sqrt{b}}$$
          </div>
          <div class="example-box">
            <div class="example-title">ឧទាហរណ៍៖</div>
            គណនា $\displaystyle\lim_{x \to 4} \frac{\sqrt{x} - 2}{x - 4}$
            <br><br>
            គុណនឹង $\frac{\sqrt{x}+2}{\sqrt{x}+2}$ ៖
            $$\lim_{x \to 4} \frac{(\sqrt{x}-2)(\sqrt{x}+2)}{(x-4)(\sqrt{x}+2)} = \lim_{x \to 4} \frac{x - 4}{(x-4)(\sqrt{x}+2)} = \lim_{x \to 4} \frac{1}{\sqrt{x}+2} = \frac{1}{4}$$
          </div>
        </div>
      </div>

      <!-- Q7 -->
      <div class="card">
        <div class="question">៧. តើលីមីតរាង $\frac{\infty}{\infty}$ ដោះស្រាយដូចម្តេច?</div>
        <div class="answer-text">
          ចំពោះ $\displaystyle\lim_{x \to \pm\infty} \frac{P(x)}{Q(x)}$ ដែល $P(x)$ និង $Q(x)$ ជាពហុធា គេ<strong>ចែកភាគយក និងភាគបែង នឹងស្វ័យគុណខ្ពស់បំផុតរបស់ $x$</strong> នៅភាគបែង ៖
          <div class="formula-box">
            បើ $\deg P = \deg Q$ នោះ $\displaystyle\lim_{x \to \pm\infty} \frac{P(x)}{Q(x)} = \frac{\text{មេគុណ } x^n \text{ ភាគយក}}{\text{មេគុណ } x^n \text{ ភាគបែង}}$
          </div>
          <div class="formula-box">
            បើ $\deg P < \deg Q$ នោះ $\displaystyle\lim_{x \to \pm\infty} \frac{P(x)}{Q(x)} = 0$
          </div>
          <div class="example-box">
            <div class="example-title">ឧទាហរណ៍៖</div>
            $\displaystyle\lim_{x \to +\infty} \frac{3x^2 + 2x - 1}{5x^2 - 4} = \lim_{x \to +\infty} \frac{3 + \frac{2}{x} - \frac{1}{x^2}}{5 - \frac{4}{x^2}} = \frac{3}{5}$
          </div>
        </div>
      </div>

      <!-- Q8 -->
      <div class="card">
        <div class="question">៨. តើលីមីតរាង $\infty - \infty$ ដោះស្រាយដូចម្តេច?</div>
        <div class="answer-text">
          រាង $\infty - \infty$ ជារាងមិនកំណត់។ គេប្រើវិធីដូចខាងក្រោម ៖
          <ul>
            <li><strong>ពហុធា ៖</strong> ដាក់ $x$ ជាកត្តារួម (ស្វ័យគុណខ្ពស់បំផុត)</li>
            <li><strong>ប្រភាគ ៖</strong> ផ្សំប្រភាគរួចសម្រួល</li>
            <li><strong>ឫស ៖</strong> គុណនឹងកន្សោមឆ្លាស់</li>
          </ul>
          <div class="example-box">
            <div class="example-title">ឧទាហរណ៍៖</div>
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
        <div class="question">៩. តើលីមីតស្តង់ដារសំខាន់ៗមានអ្វីខ្លះ?</div>
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
            <strong>ចំណាំ៖</strong> លីមីតទាំងនេះប្រើញឹកញាប់ក្នុងការគណនា។ ពិសេស $\displaystyle\lim_{x \to 0}\frac{\sin x}{x} = 1$ គឺជាមូលដ្ឋានគ្រឹះសម្រាប់ដេរីវេនៃអនុគមន៍ត្រីកោណមាត្រ។
          </div>
        </div>
      </div>

      <!-- Q10 -->
      <div class="card">
        <div class="question">១០. ចូរគណនាលីមីតដែលប្រើរូបមន្តស្តង់ដារ។</div>
        <div class="answer-text">
          <div class="example-box">
            <div class="example-title">ឧទាហរណ៍ ១៖</div>
            គណនា $\displaystyle\lim_{x \to 0} \frac{\sin 3x}{x}$
            <br><br>
            $$\lim_{x \to 0} \frac{\sin 3x}{x} = \lim_{x \to 0} \frac{\sin 3x}{3x} \cdot 3 = 1 \cdot 3 = 3$$
          </div>
          <div class="example-box">
            <div class="example-title">ឧទាហរណ៍ ២៖</div>
            គណនា $\displaystyle\lim_{x \to 0} \frac{\sin 5x}{\sin 2x}$
            <br><br>
            $$\lim_{x \to 0} \frac{\sin 5x}{\sin 2x} = \lim_{x \to 0} \frac{\sin 5x}{5x} \cdot \frac{2x}{\sin 2x} \cdot \frac{5}{2} = 1 \cdot 1 \cdot \frac{5}{2} = \frac{5}{2}$$
          </div>
        </div>
      </div>

      <!-- Q11 -->
      <div class="card">
        <div class="question">១១. តើលីមីតនៅអនន្ត (limits at infinity) ជាអ្វី?</div>
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
        <div class="question">១២. ចូរគណនា $\displaystyle\lim_{x \to 3} \frac{x^3 - 27}{x^2 - 9}$ ។</div>
        <div class="answer-text">
          <div class="example-box">
            <div class="example-title">ដំណោះស្រាយ៖</div>
            ជំនួស $x = 3$: $\frac{27-27}{9-9} = \frac{0}{0}$ → រាងមិនកំណត់
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
        <div class="question">១៣. សង្ខេបរូបមន្ត និងវិធីគណនាលីមីត</div>
        <div class="answer-text">
          <table>
            <thead>
              <tr><th>ទម្រង់មិនកំណត់</th><th>វិធីដោះស្រាយ</th></tr>
            </thead>
            <tbody>
              <tr><td>$\dfrac{0}{0}$ (ពហុធា)</td><td>បំបែកកត្តា រួចសម្រួល $(x-a)$</td></tr>
              <tr><td>$\dfrac{0}{0}$ (ឫស)</td><td>គុណនឹងកន្សោមឆ្លាស់ (conjugate)</td></tr>
              <tr><td>$\dfrac{\infty}{\infty}$</td><td>ចែកនឹង $x^n$ (ស្វ័យគុណខ្ពស់បំផុត)</td></tr>
              <tr><td>$\infty - \infty$ (ពហុធា)</td><td>ដាក់ $x$ ជាកត្តារួម</td></tr>
              <tr><td>$\infty - \infty$ (ឫស)</td><td>គុណនឹងកន្សោមឆ្លាស់</td></tr>
            </tbody>
          </table>

          <div class="note-box">
            <strong>លីមីតស្តង់ដារចំបាច់ៗ ៖</strong>
            <br>$\displaystyle\lim_{x \to 0}\frac{\sin x}{x} = 1$, &ensp;
            $\displaystyle\lim_{x \to 0}\frac{e^x - 1}{x} = 1$, &ensp;
            $\displaystyle\lim_{x \to +\infty}\left(1+\frac{1}{x}\right)^x = e$
          </div>
        </div>
      </div>

    </div>

    <footer>ចេះគឺជាប់ — StudyNest</footer>
  </body>
</html>
