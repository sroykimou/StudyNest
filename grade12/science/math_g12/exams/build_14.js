const fs = require('fs');
const path = __dirname + '/';

const template = fs.readFileSync(path + 'kanit-1.html', 'utf-8');

function buildHtml(examNumber, titleNum, sectionsHtml) {
  let html = template.replace(/<title>.*?<\/title>/, `<title>វិញ្ញាសា គណិតវិទ្យា ${titleNum} | StudyNest</title>`);
  html = html.replace(/<h1>.*?<\/h1>/, `<h1>វិញ្ញាសា គណិតវិទ្យា (វិទ្យាសាស្ត្រពិត) ${titleNum}</h1>`);
  
  const startIdx = html.indexOf('<!-- Section I -->');
  const endIdx = html.indexOf('<footer class="nav-footer">');
  
  const before = html.substring(0, startIdx);
  const after = html.substring(endIdx);
  
  return before + sectionsHtml + '\n      ' + after;
}

const exam14Sections = `<!-- Section I -->
      <section class="question-section" style="animation-delay: 0.1s">
        <h2>លំហាត់ I</h2>
        <div class="question-content">
          <p>គណនាលីមីតខាងក្រោម៖</p>
          <div class="formula-box">
            <p>១. $\\lim_{x\\to1} \\frac{1 - x^2}{x^2 + 2 - 3x}$</p>
            <p>២. $\\lim_{x\\to3} \\frac{\\sqrt{x + 6} - 3}{x^3 - 27}$</p>
            <p>៣. $\\lim_{x\\to0} \\frac{5\\sin 5x}{x}$</p>
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
            <p><strong>១.</strong> $\\lim_{x\\to1} \\frac{1 - x^2}{x^2 - 3x + 2} = \\lim_{x\\to1} \\frac{(1 - x)(1 + x)}{(x - 1)(x - 2)} = \\lim_{x\\to1} \\frac{-(x - 1)(1 + x)}{(x - 1)(x - 2)} = \\lim_{x\\to1} \\frac{-(1 + x)}{x - 2} = \\frac{-2}{-1} = 2$</p>
            <p><strong>២.</strong> $\\lim_{x\\to3} \\frac{\\sqrt{x + 6} - 3}{x^3 - 27} = \\lim_{x\\to3} \\frac{x + 6 - 9}{(x - 3)(x^2 + 3x + 9)(\\sqrt{x + 6} + 3)} = \\lim_{x\\to3} \\frac{x - 3}{(x - 3)(x^2 + 3x + 9)(\\sqrt{x + 6} + 3)}$</p>
            <p>$= \\frac{1}{(9 + 9 + 9)(\\sqrt{9} + 3)} = \\frac{1}{27 \\times 6} = \\frac{1}{162}$</p>
            <p><strong>៣.</strong> $\\lim_{x\\to0} \\frac{5\\sin 5x}{x} = \\lim_{x\\to0} 5 \\times 5 \\frac{\\sin 5x}{5x} = 25 \\times 1 = 25$</p>
          </div>
        </div>
      </section>

      <!-- Section II -->
      <section class="question-section" style="animation-delay: 0.2s">
        <h2>លំហាត់ II</h2>
        <div class="question-content">
          <p>គេមានចំនួនកុំផ្លិច $z_1 = \\sqrt{3} - i ; z_2 = (1 - \\sqrt{3}) + (1 - \\sqrt{3})i$ និង $z_3 = -\\frac{1}{2}$ ។</p>
          <div class="sub-question">
            <p>គណនា $z_1 + z_2 ; z = (z_1 + z_2) \\times z_3$ ។</p>
            <p>សរសេរជាទម្រង់ត្រីកោណមាត្រនៃចំនួនកុំផ្លិច $(z_1 + z_2) \\times z_3$ ។ គណនាតម្លៃនៃ $z^3$ ។</p>
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
            <p><strong>គណនា៖</strong> $z_1 + z_2 = (\\sqrt{3} - i) + (1 - \\sqrt{3} + i - i\\sqrt{3}) = 1 - i\\sqrt{3}$</p>
            <p>$z = (z_1 + z_2) \\times z_3 = (1 - i\\sqrt{3})\\left(-\\frac{1}{2}\\right) = -\\frac{1}{2} + i\\frac{\\sqrt{3}}{2}$</p>
            <p><strong>ទម្រង់ត្រីកោណមាត្រ៖</strong></p>
            <p>$z = -\\frac{1}{2} + i\\frac{\\sqrt{3}}{2} = 1\\left(\\cos\\frac{2\\pi}{3} + i\\sin\\frac{2\\pi}{3}\\right)$</p>
            <p><strong>គណនា $z^3$៖</strong></p>
            <p>$z^3 = \\left(\\cos\\frac{2\\pi}{3} + i\\sin\\frac{2\\pi}{3}\\right)^3 = \\cos\\left(3 \\times \\frac{2\\pi}{3}\\right) + i\\sin\\left(3 \\times \\frac{2\\pi}{3}\\right) = \\cos 2\\pi + i\\sin 2\\pi = 1$</p>
          </div>
        </div>
      </section>

      <!-- Section III -->
      <section class="question-section" style="animation-delay: 0.3s">
        <h2>លំហាត់ III</h2>
        <div class="question-content">
          <p><strong>១.</strong> គណនាអាំងតេក្រាល $I = \\int_{0}^{2} (6x^2 - 3x - 1)dx ; J = \\int_{0}^{\\frac{\\pi}{4}} (1 - 2\\sin^2 x)dx$ ។</p>
          <p><strong>២.</strong> គេមានអនុគមន៍ $f$ កំណត់លើ $\\mathbb{R}^*$ ដោយ $f(x) = -2\\left(\\frac{x + 1}{x^2}\\right)$ ។ បង្ហាញថា $f(x) = -\\frac{2}{x} - \\frac{2}{x^2}$ ។ គណនា $K = \\int_{1}^{e} f(x)dx$ ។ $(\\ln e = 1)$</p>
        </div>

        <button class="toggle-btn" onclick="toggleSolution(this)">
          <i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ
        </button>
        <div class="solution-content" style="display: none">
          <h3 class="solution-title">
            <i class="fas fa-check-circle"></i> ដំណោះស្រាយ
          </h3>
          <div class="solution-body">
            <p><strong>១.</strong> $I = \\int_{0}^{2} (6x^2 - 3x - 1)dx = \\left[2x^3 - \\frac{3}{2}x^2 - x\\right]_0^2 = \\left(16 - 6 - 2\\right) - 0 = 8$</p>
            <p>$J = \\int_{0}^{\\frac{\\pi}{4}} (1 - 2\\sin^2 x)dx = \\int_{0}^{\\frac{\\pi}{4}} \\cos 2x \\, dx = \\left[\\frac{1}{2}\\sin 2x\\right]_0^{\\pi/4} = \\frac{1}{2}\\sin\\frac{\\pi}{2} - 0 = \\frac{1}{2}$</p>
            <p><strong>២.</strong> $f(x) = -2\\left(\\frac{x + 1}{x^2}\\right) = \\frac{-2x - 2}{x^2} = -\\frac{2x}{x^2} - \\frac{2}{x^2} = -\\frac{2}{x} - \\frac{2}{x^2}$ ពិត។</p>
            <p>$K = \\int_{1}^{e} \\left(-\\frac{2}{x} - \\frac{2}{x^2}\\right)dx = \\left[-2\\ln|x| + \\frac{2}{x}\\right]_1^e = \\left(-2\\ln e + \\frac{2}{e}\\right) - \\left(-2\\ln 1 + 2\\right) = -2 + \\frac{2}{e} - 2 = -4 + \\frac{2}{e}$</p>
          </div>
        </div>
      </section>

      <!-- Section IV -->
      <section class="question-section" style="animation-delay: 0.4s">
        <h2>លំហាត់ IV</h2>
        <div class="question-content">
          <p>ក្នុងថង់មួយមានប៊ូល១៥គ្រាប់ដែលចែកចេញជា ប៊ូលពណ៌បៃតងចំនួន៧ និងគេសរសេរលេខពី១ដល់៧ រួចប៊ូលខៀវចំនួន៥ និងគេសរសេរប៊ូលទាំង៥នេះតាមលេខរៀងពី១ដល់៥ ចុងក្រោយប៊ូលពណ៌ក្រហមចំនួន៣ និងគេសរសេរលើប៊ូលទាំង៣នេះតាមលេខរៀងពី១ដល់៣។ គេចាប់យកប៊ូលមួយចេញពីថង់ដោយចៃដន្យ។ រកប្រូបាបនៃព្រឹត្តិការណ៍៖</p>
          <div class="sub-question">
            <p>A : ប៊ូលដែលចាប់មានពណ៌បៃតង</p>
            <p>B : ប៊ូលដែលចាប់បានមានលេខសេស</p>
            <p>C : ប៊ូលដែលចាប់បានមានពណ៌បៃតងនិងលេខសេស។</p>
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
            <p>ចំនួនប៊ូលសរុប $n(S) = 15$។ ចាប់យក ១ គ្រាប់ដោយចៃដន្យ នាំឱ្យចំនួនករណីអាចគឺ ១៥។</p>
            <p><strong>A:</strong> ប៊ូលពណ៌បៃតងមាន ៧។ $n(A) = 7 \\Rightarrow P(A) = \\frac{7}{15}$</p>
            <p><strong>B:</strong> ប៊ូលដែលមានលេខសេស៖</p>
            <ul>
              <li>បៃតងសេស (១,៣,៥,៧): ៤ គ្រាប់</li>
              <li>ខៀវសេស (១,៣,៥): ៣ គ្រាប់</li>
              <li>ក្រហមសេស (១,៣): ២ គ្រាប់</li>
            </ul>
            <p>សរុបមាន $4 + 3 + 2 = 9$ គ្រាប់។ $n(B) = 9 \\Rightarrow P(B) = \\frac{9}{15} = \\frac{3}{5}$</p>
            <p><strong>C:</strong> ប៊ូលពណ៌បៃតង និងលេខសេស មាន ៤ គ្រាប់។ $n(C) = 4 \\Rightarrow P(C) = \\frac{4}{15}$</p>
          </div>
        </div>
      </section>

      <!-- Section V -->
      <section class="question-section" style="animation-delay: 0.5s">
        <h2>លំហាត់ V</h2>
        <div class="question-content">
          <p><strong>១.</strong> គេមានសមីការ $18x^2 + 10y^2 = 90$ ។</p>
          <div class="sub-question">
            <p>ក. បង្ហាញថាសមីការនេះជាសមីការអេលីប។ រកប្រវែងអ័ក្សធំ អ័ក្សតូច និងកូអរដោនេកំពូលទាំងពីរ។</p>
          </div>
          <p><strong>២.</strong> នៅក្នុងលំហប្រដាប់ដោយតម្រុយអរតូណរម៉ាល់ $(O, \\vec{i}, \\vec{j}, \\vec{k})$ គេមានចំណុច $M(2,3,4) ; N(3,5,6) ; P(4,6,7)$ និង $Q(3,4,5)$ ។</p>
          <div class="sub-question">
            <p>ក. រកវ៉ិចទ័រ $\\vec{MN}$ និង $\\vec{QP}$ ។ ខ. បង្ហាញចតុកោណ $MNPQ$ ជាប្រលេឡូក្រាម។</p>
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
            <p><strong>១. ក.</strong> ចែកអង្គទាំងពីរនឹង 90 យើងបាន៖ $\\frac{18x^2}{90} + \\frac{10y^2}{90} = 1 \\Rightarrow \\frac{x^2}{5} + \\frac{y^2}{9} = 1$។ នេះជាទម្រង់ $\\frac{x^2}{b^2} + \\frac{y^2}{a^2} = 1$ ដែលមាន $a^2 = 9 > b^2 = 5 > 0$ ដូច្នេះវាជាសមីការអេលីប។</p>
            <p>យើងមាន $a = 3, b = \\sqrt{5}$ ។</p>
            <p>ប្រវែងអ័ក្សធំ $2a = 2(3) = 6$, ប្រវែងអ័ក្សតូច $2b = 2\\sqrt{5}$ ។</p>
            <p>កូអរដោនេកំពូលទាំងពីរ $V_{1,2}(0, \\pm a) \\Rightarrow V_1(0, 3)$ និង $V_2(0, -3)$ ។</p>
            <p><strong>២. ក.</strong> $\\vec{MN} = (3 - 2, 5 - 3, 6 - 4) = (1, 2, 2)$ ។ $\\vec{QP} = (4 - 3, 6 - 4, 7 - 5) = (1, 2, 2)$ ។</p>
            <p><strong>ខ.</strong> ដោយ $\\vec{MN} = \\vec{QP}$ នាំឱ្យ $MNPQ$ ជាប្រលេឡូក្រាម។</p>
          </div>
        </div>
      </section>

      <!-- Section VI -->
      <section class="question-section" style="animation-delay: 0.6s">
        <h2>លំហាត់ VI</h2>
        <div class="question-content">
          <p>ក. ដោះស្រាយសមីករឌីផេរ៉ង់ស្យែល $(E) : y'' + 2y' - 3y = 0$ ។</p>
          <p>ខ. រកចម្លើយពិសេសមួយនៃសមីការឌីផេរ៉ង់ស្យែល $(E)$ ដែល $y(0) = 1$ និង $y'(1) = e$ ។</p>
        </div>

        <button class="toggle-btn" onclick="toggleSolution(this)">
          <i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ
        </button>
        <div class="solution-content" style="display: none">
          <h3 class="solution-title">
            <i class="fas fa-check-circle"></i> ដំណោះស្រាយ
          </h3>
          <div class="solution-body">
            <p><strong>ក.</strong> សមីការសម្គាល់នៃ $(E)$ គឺ $\\lambda^2 + 2\\lambda - 3 = 0$ ។</p>
            <p>មានរាង $a + b + c = 1 + 2 - 3 = 0 \\Rightarrow \\lambda_1 = 1, \\lambda_2 = \\frac{c}{a} = -3$ ។</p>
            <p>ចម្លើយទូទៅនៃ $(E)$ គឺ $y = Ae^x + Be^{-3x}$ ដែល $A, B \\in \\mathbb{R}$ ។</p>
            <p><strong>ខ.</strong> យើងមាន $y(0) = 1 \\Rightarrow A + B = 1 \\quad (1)$</p>
            <p>$y'(x) = Ae^x - 3Be^{-3x}$ ។</p>
            <p>$y'(1) = e \\Rightarrow Ae - 3Be^{-3} = e$ ចែកអង្គទាំងពីរនឹង $e$ បាន $A - 3Be^{-4} = 1 \\quad (2)$</p>
            <p>ដកសមីការ $(1)$ និង $(2)$ បាន $B + 3Be^{-4} = 0 \\Rightarrow B(1 + 3e^{-4}) = 0 \\Rightarrow B = 0$ ។</p>
            <p>ជំនួសចូល $(1)$ បាន $A + 0 = 1 \\Rightarrow A = 1$ ។</p>
            <p>ដូចនេះ ចម្លើយពិសេសគឺ $y = e^x$ ។</p>
          </div>
        </div>
      </section>

      <!-- Section VII -->
      <section class="question-section" style="animation-delay: 0.7s; border-bottom: none">
        <h2>លំហាត់ VII</h2>
        <div class="question-content">
          <p>គេមានអនុគមន៍ $f$ កំណត់លើ $\\mathbb{R}$ ដោយ $f(x) = x + 2 - \\frac{4e^x}{e^x + 3}$ ។ គេតាងដោយ $C$ ក្រាបរបស់វាក្នុងប្លង់ប្រដាប់ដោយតម្រុយអរតូណរម៉ាល់ $(O, \\vec{i}, \\vec{j})$ ។</p>
          <div class="sub-question">
            <p>១. a. គណនាលីមីតនៃ $f$ ត្រង់ $-\\infty$ និង $+\\infty$ ។ b. សិក្សាទីតាំងនៃក្រាប $C$ ធៀបនឹងបន្ទាត់ $d_1$ ដែលមានសមីការ $y = x + 2$ ។</p>
            <p>២. a. ស្រាយបំភ្លឺថាចំពោះគ្រប់ចំនួនពិត $x ; f'(x) = \\left(\\frac{e^x - 3}{e^x + 3}\\right)^2$ ។ b. សិក្សាអថេរភាពនៃ $f$ លើ $\\mathbb{R}$ រួចសង់តារាងអថេរភាពនៃ $f$ ។</p>
            <p>៣. a. តើគេអាចថាយ៉ាងណាដោះបន្ទាត់ប៉ះ $d_2$ ទៅនឹងក្រាប $C$ ត្រង់ចំណុច $I$ ដែលមានអាប់ស៊ីស $\\ln 3$ ។ b. សិក្សាទីតាំងនៃក្រាប $C$ ធៀបនឹងបន្ទាត់ប៉ះ $d_2$ ។</p>
            <p>៤. a. បង្ហាញថាបន្ទាត់ប៉ះ $d_3$ ទៅនឹងក្រាប $C$ ត្រង់ចំណុចដែលមានអាប់ស៊ីសសូន្យមានសមីការ $y = \\frac{1}{4}x + 1$ ។</p>
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
            <p><strong>១. a.</strong> $\\lim_{x\\to-\\infty} f(x) = \\lim_{x\\to-\\infty} \\left(x + 2 - \\frac{4e^x}{e^x + 3}\\right) = -\\infty + 2 - 0 = -\\infty$</p>
            <p>$\\lim_{x\\to+\\infty} f(x) = \\lim_{x\\to+\\infty} \\left(x + 2 - \\frac{4}{1 + 3e^{-x}}\\right) = +\\infty + 2 - 4 = +\\infty$</p>
            <p><strong>b.</strong> សិក្សាទីតាំងធៀប $C$ និង $d_1: y = x + 2$ ៖</p>
            <p>$f(x) - y_d = -\\frac{4e^x}{e^x + 3}$ ។ ដោយ $4e^x > 0$ និង $e^x + 3 > 0$ នាំឱ្យ $-\\frac{4e^x}{e^x + 3} < 0$ ចំពោះគ្រប់ $x \\in \\mathbb{R}$ ។</p>
            <p>ដូច្នេះ ក្រាប $C$ នៅក្រោមបន្ទាត់ $d_1$ ជានិច្ច។ ($d_1$ ក៏ជាអាស៊ីមតូតទ្រេតខាង $-\\infty$ ដែរព្រោះលីមីតនៃផលដកត្រង់ $-\\infty$ គឺ 0)។</p>
            <p><strong>២. a.</strong> $f'(x) = 1 - \\frac{4e^x(e^x + 3) - 4e^x(e^x)}{(e^x + 3)^2} = 1 - \\frac{4e^{2x} + 12e^x - 4e^{2x}}{(e^x + 3)^2} = 1 - \\frac{12e^x}{(e^x + 3)^2}$</p>
            <p>$f'(x) = \\frac{(e^x + 3)^2 - 12e^x}{(e^x + 3)^2} = \\frac{e^{2x} + 6e^x + 9 - 12e^x}{(e^x + 3)^2} = \\frac{e^{2x} - 6e^x + 9}{(e^x + 3)^2} = \\frac{(e^x - 3)^2}{(e^x + 3)^2} = \\left(\\frac{e^x - 3}{e^x + 3}\\right)^2$ ពិត។</p>
            <p><strong>b.</strong> $f'(x) \\ge 0$ ជានិច្ចគ្រប់ $x \\in \\mathbb{R}$។ $f'(x) = 0 \\Leftrightarrow e^x - 3 = 0 \\Rightarrow x = \\ln 3$ ។ ដូច្នេះ $f$ ជាអនុគមន៍កើនលើ $\\mathbb{R}$ ។</p>
            <p><strong>៣. a.</strong> ត្រង់ $x = \\ln 3$, $f'(\\ln 3) = 0$ ។ ដូច្នេះ បន្ទាត់ប៉ះ $d_2$ ត្រង់ $x = \\ln 3$ គឺជាបន្ទាត់ប៉ះដេក (ស្របនឹងអ័ក្សអាប់ស៊ីស)។ សមីការវាគឺ $y = f(\\ln 3) = \\ln 3 + 2 - \\frac{4(3)}{3 + 3} = \\ln 3 + 2 - 2 = \\ln 3$ ។</p>
            <p><strong>b.</strong> ទីតាំងធៀប $C$ និង $d_2: y = \\ln 3$ ។ ដោយ $f$ ជាអនុគមន៍កើន ដូច្នេះបើ $x < \\ln 3 \\Rightarrow f(x) < \\ln 3$ (ក្រាប $C$ ក្រោម $d_2$) ហើយបើ $x > \\ln 3 \\Rightarrow f(x) > \\ln 3$ (ក្រាប $C$ លើ $d_2$) ។ ចំណុច $I(\\ln 3, \\ln 3)$ ជាចំណុចរបត់។</p>
            <p><strong>៤. a.</strong> ត្រង់ $x = 0$, $f'(0) = \\left(\\frac{1 - 3}{1 + 3}\\right)^2 = \\left(-\\frac{2}{4}\\right)^2 = \\frac{1}{4}$ ។ $f(0) = 0 + 2 - \\frac{4}{1 + 3} = 2 - 1 = 1$ ។</p>
            <p>បន្ទាត់ប៉ះ $d_3: y = f'(0)(x - 0) + f(0) = \\frac{1}{4}x + 1$ ពិត។</p>
          </div>
        </div>
      </section>`;

fs.writeFileSync(path + 'kanit-14.html', buildHtml(14, '១៤', exam14Sections));
