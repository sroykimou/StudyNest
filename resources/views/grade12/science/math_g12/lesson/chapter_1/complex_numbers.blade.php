<!doctype html>
<html lang="km">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>មេរៀនទី១ - ចំនួនកុំផ្លិច | StudyNest</title>

    <link
      href="https://fonts.googleapis.com/css2?family=Siemreap&display=swap"
      rel="stylesheet"
    />

    <!-- MathJax for rendering math equations -->
    <script>
      window.MathJax = {
        tex: { inlineMath: [['$','$'], ['\\(','\\)']], displayMath: [['$$','$$'], ['\\[','\\]']] },
        svg: { fontCache: 'global' }
      };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-svg.js" async></script>

    <style>
      :root {
        --primary-color: #6d28d9;
        --accent-color: #8b5cf6;
        --bg-color: #f1f5f9;
      }

      body {
        margin: 0;
        font-family: "Siemreap", "Khmer OS Siemreap", Arial, sans-serif;
        background: var(--bg-color);
        color: #1e293b;
        line-height: 1.8;
      }

      header {
        background: linear-gradient(135deg, #3b0764, var(--primary-color));
        color: white;
        text-align: center;
        padding: 50px 20px;
        border-bottom: 5px solid var(--accent-color);
      }

      header h1 {
        margin: 0;
        font-size: 2.2rem;
      }
      header h2 {
        margin: 10px 0 0;
        font-weight: normal;
        opacity: 0.9;
      }

      .container {
        max-width: 850px;
        margin: -30px auto 60px;
        padding: 0 20px;
      }

      .card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        margin-bottom: 20px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
      }

      .question {
        font-weight: bold;
        color: var(--primary-color);
        margin-bottom: 15px;
        font-size: 1.1rem;
        display: flex;
        align-items: center;
        gap: 10px;
        border-bottom: 1px solid #e2e8f0;
        padding-bottom: 10px;
      }

      .answer-text {
        padding-left: 10px;
        color: #334155;
      }

      ul {
        padding-left: 25px;
        margin: 10px 0;
      }

      li {
        margin-bottom: 8px;
      }

      table {
        width: 100%;
        border-collapse: collapse;
        margin: 15px 0;
      }

      th,
      td {
        border: 1px solid #cbd5e1;
        padding: 12px;
        text-align: left;
      }

      th {
        background: #f8fafc;
        color: var(--primary-color);
      }

      .badge {
        background: #ede9fe;
        color: var(--primary-color);
        padding: 2px 10px;
        border-radius: 4px;
        font-size: 0.9rem;
      }

      .formula-box {
        background: linear-gradient(135deg, #faf5ff, #ede9fe);
        border-left: 4px solid var(--accent-color);
        padding: 18px 22px;
        margin: 15px 0;
        border-radius: 0 10px 10px 0;
        font-size: 1rem;
        overflow-x: auto;
      }

      .example-box {
        background: #f0fdf4;
        border-left: 4px solid #22c55e;
        padding: 18px 22px;
        margin: 15px 0;
        border-radius: 0 10px 10px 0;
      }

      .example-box .example-title {
        font-weight: bold;
        color: #15803d;
        margin-bottom: 8px;
      }

      .note-box {
        background: #fff7ed;
        border-left: 4px solid #f97316;
        padding: 15px 20px;
        margin: 15px 0;
        border-radius: 0 10px 10px 0;
        color: #9a3412;
      }

      footer {
        text-align: center;
        padding: 40px;
        color: #64748b;
        font-size: 0.9rem;
      }

      .back-link {
        display: inline-block;
        margin-bottom: 20px;
        color: white;
        text-decoration: none;
        font-size: 0.9rem;
      }

      @media (max-width: 600px) {
        header {
          padding: 30px 15px;
        }
        h1 {
          font-size: 1.6rem;
        }
        .formula-box {
          font-size: 0.85rem;
        }
      }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/professional.css') }}">
    <!-- Main JS & Auth Guard -->
    <script src="{{ asset('assets/main.js') }}"></script>
    <script>
      StudyNest.authGuard();
    </script>
  </head>

  <body>
    <header>
      <a href="../../math_g12" class="back-link"
        ><i class="fas fa-arrow-left"></i> ត្រឡប់ក្រោយ</a
      >
      <h1>មេរៀនទី ១</h1>
      <h2>ចំនួនកុំផ្លិច (Complex Numbers)</h2>
    </header>

    <div class="container">

      <!-- Q1 -->
      <div class="card">
        <div class="question">
          ១. តើចំនួនកុំផ្លិចជាអ្វី?
        </div>
        <div class="answer-text">
          ចំនួនកុំផ្លិច (Complex Number) គឺជាចំនួនដែលមានទម្រង់ $z = a + bi$ ដែល៖
          <ul>
            <li>$a$ ជាផ្នែកពិត (real part) សរសេរ $\text{Re}(z) = a$</li>
            <li>$b$ ជាផ្នែកនិម្មិត (imaginary part) សរសេរ $\text{Im}(z) = b$</li>
            <li>$i$ ជាអង្គភាពនិម្មិត (imaginary unit) ដែល $i^2 = -1$</li>
          </ul>
          <div class="formula-box">
            $$z = a + bi \quad \text{ដែល} \quad a, b \in \mathbb{R} \quad \text{និង} \quad i^2 = -1$$
          </div>
        </div>
      </div>

      <!-- Q2 -->
      <div class="card">
        <div class="question">
          ២. តើអង្គភាពនិម្មិត $i$ មានលក្ខណៈអ្វីខ្លះ?
        </div>
        <div class="answer-text">
          អង្គភាពនិម្មិត $i$ គឺជាចំនួនដែល $i^2 = -1$ ឬ $i = \sqrt{-1}$។
          <br>ស្វ័យគុណរបស់ $i$ មានលក្ខណៈជាវដ្ត (cycle) ៖
          <div class="formula-box">
            $$i^0 = 1, \quad i^1 = i, \quad i^2 = -1, \quad i^3 = -i, \quad i^4 = 1, \quad i^5 = i, \quad \ldots$$
          </div>
          <div class="note-box">
            <strong>ចំណាំ៖</strong> ដើម្បីគណនា $i^n$ គេយក $n$ ចែកនឹង $4$ រួចមើលសំណល់៖
            សំណល់ $0 \Rightarrow 1$, សំណល់ $1 \Rightarrow i$, សំណល់ $2 \Rightarrow -1$, សំណល់ $3 \Rightarrow -i$។
          </div>
        </div>
      </div>

      <!-- Q3 -->
      <div class="card">
        <div class="question">
          ៣. តើចំនួនកុំផ្លិចពីរស្មើគ្នានៅពេលណា?
        </div>
        <div class="answer-text">
          ចំនួនកុំផ្លិចពីរ $z_1 = a_1 + b_1 i$ និង $z_2 = a_2 + b_2 i$ ស្មើគ្នា
          លុះត្រាតែផ្នែកពិតស្មើគ្នា និង ផ្នែកនិម្មិតស្មើគ្នា ៖
          <div class="formula-box">
            $$z_1 = z_2 \iff a_1 = a_2 \quad \text{និង} \quad b_1 = b_2$$
          </div>
        </div>
      </div>

      <!-- Q4 -->
      <div class="card">
        <div class="question">
          ៤. តើប្រមាណវិធីនៃចំនួនកុំផ្លិចមានអ្វីខ្លះ?
        </div>
        <div class="answer-text">
          ចំពោះ $z_1 = a + bi$ និង $z_2 = c + di$ ៖
          <table>
            <thead>
              <tr>
                <th>ប្រមាណវិធី</th>
                <th>រូបមន្ត</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>ផ្សំ (Addition)</td>
                <td>$z_1 + z_2 = (a+c) + (b+d)i$</td>
              </tr>
              <tr>
                <td>ដក (Subtraction)</td>
                <td>$z_1 - z_2 = (a-c) + (b-d)i$</td>
              </tr>
              <tr>
                <td>គុណ (Multiplication)</td>
                <td>$z_1 \cdot z_2 = (ac - bd) + (ad + bc)i$</td>
              </tr>
              <tr>
                <td>ចែក (Division)</td>
                <td>$\displaystyle \frac{z_1}{z_2} = \frac{(ac+bd) + (bc-ad)i}{c^2 + d^2}$</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Q5 -->
      <div class="card">
        <div class="question">
          ៥. ការគុណចំនួនកុំផ្លិចពីរធ្វើដូចម្តេច? ចូរបង្ហាញឧទាហរណ៍។
        </div>
        <div class="answer-text">
          គេគុណចំនួនកុំផ្លិចដូចគុណពហុធា (expand/FOIL) រួចជំនួស $i^2 = -1$ ៖
          <div class="formula-box">
            $$(a + bi)(c + di) = ac + adi + bci + bdi^2 = (ac - bd) + (ad + bc)i$$
          </div>
          <div class="example-box">
            <div class="example-title">ឧទាហរណ៍៖</div>
            គណនា $(3 + 2i)(1 - 4i)$៖
            <br>
            $$= 3(1) + 3(-4i) + 2i(1) + 2i(-4i)$$
            $$= 3 - 12i + 2i - 8i^2$$
            $$= 3 - 10i - 8(-1)$$
            $$= 3 - 10i + 8 = 11 - 10i$$
          </div>
        </div>
      </div>

      <!-- Q6 -->
      <div class="card">
        <div class="question">
          ៦. តើចំនួនកុំផ្លិចឆ្លាស់ (conjugate) ជាអ្វី? តើវាមានលក្ខណៈអ្វី?
        </div>
        <div class="answer-text">
          បើ $z = a + bi$ នោះចំនួនកុំផ្លិចឆ្លាស់របស់វា សរសេរ $\bar{z}$ គឺ ៖
          <div class="formula-box">
            $$\bar{z} = a - bi$$
          </div>
          លក្ខណៈសម្បត្តិសំខាន់ៗ ៖
          <ul>
            <li>$z + \bar{z} = 2a = 2\,\text{Re}(z)$</li>
            <li>$z - \bar{z} = 2bi = 2i\,\text{Im}(z)$</li>
            <li>$z \cdot \bar{z} = a^2 + b^2 = |z|^2$</li>
            <li>$\overline{z_1 + z_2} = \bar{z}_1 + \bar{z}_2$</li>
            <li>$\overline{z_1 \cdot z_2} = \bar{z}_1 \cdot \bar{z}_2$</li>
          </ul>
        </div>
      </div>

      <!-- Q7 -->
      <div class="card">
        <div class="question">
          ៧. តើម៉ូឌុល (modulus) នៃចំនួនកុំផ្លិចគឺជាអ្វី?
        </div>
        <div class="answer-text">
          ម៉ូឌុល (modulus) នៃ $z = a + bi$ សរសេរ $|z|$ គឺជាចម្ងាយពីចំណុចដើម $O$ ដល់ចំណុច $M(a, b)$ ៖
          <div class="formula-box">
            $$|z| = \sqrt{a^2 + b^2}$$
          </div>
          <div class="example-box">
            <div class="example-title">ឧទាហរណ៍៖</div>
            $z = 3 + 4i$ នោះ $|z| = \sqrt{3^2 + 4^2} = \sqrt{9 + 16} = \sqrt{25} = 5$
          </div>
          លក្ខណៈសម្បត្តិ ៖
          <ul>
            <li>$|z| \geq 0$ និង $|z| = 0 \iff z = 0$</li>
            <li>$|z_1 \cdot z_2| = |z_1| \cdot |z_2|$</li>
            <li>$\displaystyle \left|\frac{z_1}{z_2}\right| = \frac{|z_1|}{|z_2|}$ ចំពោះ $z_2 \neq 0$</li>
            <li>$|z_1 + z_2| \leq |z_1| + |z_2|$ (វិសមភាពត្រីកោណ)</li>
          </ul>
        </div>
      </div>

      <!-- Q8 -->
      <div class="card">
        <div class="question">
          ៨. តើទម្រង់ត្រីកោណមាត្រ (trigonometric form) នៃចំនួនកុំផ្លិចជាអ្វី?
        </div>
        <div class="answer-text">
          រាល់ចំនួនកុំផ្លិច $z \neq 0$ អាចសរសេរជាទម្រង់ត្រីកោណមាត្រ ៖
          <div class="formula-box">
            $$z = r(\cos\theta + i\sin\theta)$$
          </div>
          ដែល ៖
          <ul>
            <li>$r = |z| = \sqrt{a^2 + b^2}$ ជាម៉ូឌុល</li>
            <li>$\theta = \arg(z)$ ជាអាគុយម៉ង់ (argument) គឺមុំដែល $OM$ ធ្វើជាមួយអ័ក្ស $Ox$</li>
            <li>$a = r\cos\theta$ និង $b = r\sin\theta$</li>
          </ul>
          <div class="note-box">
            <strong>ការរកមុំ $\theta$៖</strong>
            $$\cos\theta = \frac{a}{r}, \quad \sin\theta = \frac{b}{r}$$
            ជាមួយ $\theta \in ]-\pi, \pi]$ ឬ $\theta \in [0, 2\pi[$
          </div>
        </div>
      </div>

      <!-- Q9 -->
      <div class="card">
        <div class="question">
          ៩. តើការគុណ និងចែកចំនួនកុំផ្លិចក្នុងទម្រង់ត្រីកោណមាត្រ ធ្វើដូចម្តេច?
        </div>
        <div class="answer-text">
          បើ $z_1 = r_1(\cos\theta_1 + i\sin\theta_1)$ និង $z_2 = r_2(\cos\theta_2 + i\sin\theta_2)$ នោះ ៖

          <div class="formula-box">
            <strong>គុណ ៖</strong>
            $$z_1 \cdot z_2 = r_1 r_2 \big[\cos(\theta_1 + \theta_2) + i\sin(\theta_1 + \theta_2)\big]$$
          </div>

          <div class="formula-box">
            <strong>ចែក ៖</strong>
            $$\frac{z_1}{z_2} = \frac{r_1}{r_2} \big[\cos(\theta_1 - \theta_2) + i\sin(\theta_1 - \theta_2)\big]$$
          </div>

          <div class="note-box">
            <strong>ច្បាប់៖</strong> គុណម៉ូឌុល ផ្សំមុំ; ចែកម៉ូឌុល ដកមុំ។
          </div>
        </div>
      </div>

      <!-- Q10 -->
      <div class="card">
        <div class="question">
          ១០. តើរូបមន្ត De Moivre គឺជាអ្វី?
        </div>
        <div class="answer-text">
          រូបមន្ត De Moivre អនុញ្ញាតឱ្យគណនាស្វ័យគុណទី $n$ នៃចំនួនកុំផ្លិចក្នុងទម្រង់ត្រីកោណមាត្រ ៖
          <div class="formula-box">
            $$\big[\cos\theta + i\sin\theta\big]^n = \cos(n\theta) + i\sin(n\theta)$$
          </div>
          ដូចនេះបើ $z = r(\cos\theta + i\sin\theta)$ នោះ ៖
          <div class="formula-box">
            $$z^n = r^n \big[\cos(n\theta) + i\sin(n\theta)\big]$$
          </div>
          <div class="example-box">
            <div class="example-title">ឧទាហរណ៍៖</div>
            គណនា $(1 + i)^8$
            <br>ដំបូងសរសេរ $1 + i$ ជាទម្រង់ត្រីកោណមាត្រ ៖
            $$r = \sqrt{1^2 + 1^2} = \sqrt{2}, \quad \theta = \frac{\pi}{4}$$
            $$1 + i = \sqrt{2}\left(\cos\frac{\pi}{4} + i\sin\frac{\pi}{4}\right)$$
            ប្រើរូបមន្ត De Moivre ៖
            $$(1+i)^8 = (\sqrt{2})^8\left(\cos\frac{8\pi}{4} + i\sin\frac{8\pi}{4}\right)$$
            $$= 16(\cos 2\pi + i\sin 2\pi) = 16(1 + 0) = 16$$
          </div>
        </div>
      </div>

      <!-- Q11 -->
      <div class="card">
        <div class="question">
          ១១. តើទម្រង់អិចស្ប៉ូណង់ស្យែល (exponential form) ជាអ្វី?
        </div>
        <div class="answer-text">
          រូបមន្ត Euler បង្ហាញថា ៖
          <div class="formula-box">
            $$e^{i\theta} = \cos\theta + i\sin\theta$$
          </div>
          ដូចនេះ ចំនួនកុំផ្លិច $z$ អាចសរសេរជា ៖
          <div class="formula-box">
            $$z = r \cdot e^{i\theta}$$
          </div>
          ការគុណ និងស្វ័យគុណក្នុងទម្រង់នេះងាយស្រួលខ្លាំង ៖
          <ul>
            <li>$z_1 \cdot z_2 = r_1 r_2 \cdot e^{i(\theta_1 + \theta_2)}$</li>
            <li>$z^n = r^n \cdot e^{in\theta}$</li>
          </ul>
        </div>
      </div>

      <!-- Q12 -->
      <div class="card">
        <div class="question">
          ១២. តើឫសទី $n$ នៃចំនួនកុំផ្លិច មានប៉ុន្មាន? រូបមន្តរបស់វាជាអ្វី?
        </div>
        <div class="answer-text">
          ចំនួនកុំផ្លិច $z \neq 0$ មានឫសទី $n$ ចំនួន $n$ ឫស ៖
          <div class="formula-box">
            $$w_k = \sqrt[n]{r} \left(\cos\frac{\theta + 2k\pi}{n} + i\sin\frac{\theta + 2k\pi}{n}\right)$$
            $$\text{ចំពោះ } k = 0, 1, 2, \ldots, n-1$$
          </div>
          <div class="example-box">
            <div class="example-title">ឧទាហរណ៍៖ រកឫសការ៉េនៃ $i$</div>
            $i = \cos\frac{\pi}{2} + i\sin\frac{\pi}{2}$, ដែល $r = 1, \theta = \frac{\pi}{2}$
            <br>
            $$w_k = \cos\frac{\frac{\pi}{2} + 2k\pi}{2} + i\sin\frac{\frac{\pi}{2} + 2k\pi}{2}$$
            <ul>
              <li>$k=0$: $w_0 = \cos\frac{\pi}{4} + i\sin\frac{\pi}{4} = \frac{\sqrt{2}}{2} + \frac{\sqrt{2}}{2}i$</li>
              <li>$k=1$: $w_1 = \cos\frac{5\pi}{4} + i\sin\frac{5\pi}{4} = -\frac{\sqrt{2}}{2} - \frac{\sqrt{2}}{2}i$</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Q13 -->
      <div class="card">
        <div class="question">
          ១៣. តើចំនួនកុំផ្លិចត្រូវបានតំណាងនៅក្នុងប្លង់កុំផ្លិចដូចម្តេច?
        </div>
        <div class="answer-text">
          ចំនួនកុំផ្លិច $z = a + bi$ ត្រូវតំណាងដោយចំណុច $M(a, b)$ ក្នុងប្លង់កុំផ្លិច (Argand diagram) ៖
          <ul>
            <li>អ័ក្សផ្ដេក ($Ox$) គឺជាអ័ក្សពិត (real axis)</li>
            <li>អ័ក្សឈរ ($Oy$) គឺជាអ័ក្សនិម្មិត (imaginary axis)</li>
            <li>ម៉ូឌុល $|z|$ គឺជាចម្ងាយពី $O$ ដល់ $M$</li>
            <li>អាគុយម៉ង់ $\arg(z)$ គឺជាមុំរបស់ $\overrightarrow{OM}$ ធៀបនឹង $Ox$</li>
          </ul>
        </div>
      </div>

      <!-- Q14 -->
      <div class="card">
        <div class="question">
          ១៤. ចូរដោះស្រាយសមីការ $z^2 + 2z + 5 = 0$ ក្នុងសំណុំ $\mathbb{C}$។
        </div>
        <div class="answer-text">
          គណនាដេស្គ្រីមីណង់ ៖
          <div class="formula-box">
            $$\Delta = b^2 - 4ac = 4 - 20 = -16 < 0$$
          </div>
          ព្រោះ $\Delta < 0$ សមីការមានឫសកុំផ្លិចពីរ ៖
          $$\sqrt{\Delta} = \sqrt{-16} = 4i$$
          <div class="formula-box">
            $$z = \frac{-b \pm \sqrt{\Delta}}{2a} = \frac{-2 \pm 4i}{2}$$
          </div>
          $$z_1 = -1 + 2i, \quad z_2 = -1 - 2i$$
          <div class="note-box">
            <strong>ចំណាំ៖</strong> ឫសទាំងពីរជាចំនួនកុំផ្លិចឆ្លាស់គ្នា (conjugate pair)។
          </div>
        </div>
      </div>

      <!-- Q15 Summary -->
      <div class="card">
        <div class="question">
          ១៥. សង្ខេបរូបមន្តសំខាន់ៗ
        </div>
        <div class="answer-text">
          <table>
            <thead>
              <tr>
                <th>ទម្រង់ / រូបមន្ត</th>
                <th>កន្សោម</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>ទម្រង់ពីជគណិត</td>
                <td>$z = a + bi$</td>
              </tr>
              <tr>
                <td>ទម្រង់ត្រីកោណមាត្រ</td>
                <td>$z = r(\cos\theta + i\sin\theta)$</td>
              </tr>
              <tr>
                <td>ទម្រង់អិចស្ប៉ូណង់ស្យែល</td>
                <td>$z = re^{i\theta}$</td>
              </tr>
              <tr>
                <td>ម៉ូឌុល</td>
                <td>$|z| = \sqrt{a^2 + b^2}$</td>
              </tr>
              <tr>
                <td>ចំនួនឆ្លាស់</td>
                <td>$\bar{z} = a - bi$</td>
              </tr>
              <tr>
                <td>De Moivre</td>
                <td>$(\cos\theta + i\sin\theta)^n = \cos(n\theta) + i\sin(n\theta)$</td>
              </tr>
              <tr>
                <td>ឫសទី $n$</td>
                <td>$w_k = \sqrt[n]{r}\,\text{cis}\!\left(\frac{\theta+2k\pi}{n}\right)$</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>

    <footer>
      ចេះគឺជាប់ — StudyNest
    </footer>
  </body>
</html>
