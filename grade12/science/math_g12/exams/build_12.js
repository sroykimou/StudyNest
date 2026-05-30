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

const exam12Sections = `<!-- Section I -->
      <section class="question-section" style="animation-delay: 0.1s">
        <h2>លំហាត់ I</h2>
        <div class="question-content">
          <p>គណនាលីមីតខាងក្រោម៖</p>
          <div class="formula-box">
            <p>ក. $\\lim_{x \\to 1} \\frac{x^3 - x^2 + x - 1}{x - 1}$</p>
            <p>ខ. $\\lim_{x \\to -\\frac{\\pi}{2}} \\frac{\\sin^2 x - 1}{1 + \\sin x}$</p>
            <p>គ. $\\lim_{x \\to +\\infty} (\\sqrt{x^2 + x} - x)$</p>
            <p>ឃ. $\\lim_{x \\to 0} \\frac{(e^{-x} + e^x)\\sin^2 x}{2x^2}$</p>
            <p>ង. $\\lim_{x \\to +\\infty} \\left[\\ln(x + 2) - \\ln x - \\frac{2}{x + 2} + \\frac{1}{4}\\right]$</p>
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
            <p><strong>ក.</strong> $\\lim_{x \\to 1} \\frac{x^3 - x^2 + x - 1}{x - 1} = \\lim_{x \\to 1} \\frac{x^2(x - 1) + (x - 1)}{x - 1} = \\lim_{x \\to 1} (x^2 + 1) = 2$</p>
            <p><strong>ខ.</strong> $\\lim_{x \\to -\\frac{\\pi}{2}} \\frac{\\sin^2 x - 1}{1 + \\sin x} = \\lim_{x \\to -\\frac{\\pi}{2}} \\frac{(\\sin x - 1)(\\sin x + 1)}{1 + \\sin x} = \\lim_{x \\to -\\frac{\\pi}{2}} (\\sin x - 1) = -1 - 1 = -2$</p>
            <p><strong>គ.</strong> $\\lim_{x \\to +\\infty} (\\sqrt{x^2 + x} - x) = \\lim_{x \\to +\\infty} \\frac{x^2 + x - x^2}{\\sqrt{x^2 + x} + x} = \\lim_{x \\to +\\infty} \\frac{x}{x\\left(\\sqrt{1 + \\frac{1}{x}} + 1\\right)} = \\frac{1}{1 + 1} = \\frac{1}{2}$</p>
            <p><strong>ឃ.</strong> $\\lim_{x \\to 0} \\frac{(e^{-x} + e^x)\\sin^2 x}{2x^2} = \\lim_{x \\to 0} \\frac{e^{-x} + e^x}{2} \\cdot \\left(\\frac{\\sin x}{x}\\right)^2 = \\frac{1 + 1}{2} \\cdot 1^2 = 1$</p>
            <p><strong>ង.</strong> $\\lim_{x \\to +\\infty} \\left[\\ln\\left(\\frac{x + 2}{x}\\right) - \\frac{2}{x + 2} + \\frac{1}{4}\\right] = \\ln(1) - 0 + \\frac{1}{4} = \\frac{1}{4}$</p>
          </div>
        </div>
      </section>

      <!-- Section II -->
      <section class="question-section" style="animation-delay: 0.2s">
        <h2>លំហាត់ II</h2>
        <div class="question-content">
          <p><strong>1.</strong> គេមានចំនួនកុំផ្លិច $z_1 = \\sqrt{2} ; z_2 = -i\\sqrt{2}$ និង $z_3 = i\\sqrt{2}$ ។</p>
          <div class="sub-question">
            <p>ក. គណនា $z_1 + z_2 ; z_1 + z_3$ និង $(z_1 + z_2)(z_1 + z_3)$ ។</p>
            <p>ខ. កំណត់ម៉ូឌុល និងអាកុយម៉ង់ $z_1 + z_2 ; z_1 + z_3$ និង $\\left(\\frac{z_1 + z_3}{z_1 + z_2}\\right)^2$ ។</p>
          </div>
          <p><strong>2.</strong> គណនា $i^n$ ចំពោះតម្លៃនៃចំនួនគត់វិជ្ជមាន $n \\ge 1$ ។ ទាញយកតម្លៃ $i^{2015} - i^{2014}$ ។</p>
        </div>

        <button class="toggle-btn" onclick="toggleSolution(this)">
          <i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ
        </button>
        <div class="solution-content" style="display: none">
          <h3 class="solution-title">
            <i class="fas fa-check-circle"></i> ដំណោះស្រាយ
          </h3>
          <div class="solution-body">
            <p><strong>1. ក.</strong> $z_1 + z_2 = \\sqrt{2} - i\\sqrt{2}$</p>
            <p>$z_1 + z_3 = \\sqrt{2} + i\\sqrt{2}$</p>
            <p>$(z_1 + z_2)(z_1 + z_3) = (\\sqrt{2} - i\\sqrt{2})(\\sqrt{2} + i\\sqrt{2}) = (\\sqrt{2})^2 - (i\\sqrt{2})^2 = 2 - (-2) = 4$</p>
            <p><strong>ខ.</strong> $z_1 + z_2 = 2\\left(\\frac{\\sqrt{2}}{2} - i\\frac{\\sqrt{2}}{2}\\right) = 2\\left(\\cos\\left(-\\frac{\\pi}{4}\\right) + i\\sin\\left(-\\frac{\\pi}{4}\\right)\\right)$</p>
            <p>ម៉ូឌុល $|z_1 + z_2| = 2$, អាកុយម៉ង់ $\\arg(z_1 + z_2) = -\\frac{\\pi}{4}$</p>
            <p>$z_1 + z_3 = 2\\left(\\cos\\frac{\\pi}{4} + i\\sin\\frac{\\pi}{4}\\right)$</p>
            <p>ម៉ូឌុល $|z_1 + z_3| = 2$, អាកុយម៉ង់ $\\arg(z_1 + z_3) = \\frac{\\pi}{4}$</p>
            <p>$\\left(\\frac{z_1 + z_3}{z_1 + z_2}\\right)^2 = \\left(\\frac{2e^{i\\pi/4}}{2e^{-i\\pi/4}}\\right)^2 = (e^{i\\pi/2})^2 = e^{i\\pi} = -1 = 1(\\cos\\pi + i\\sin\\pi)$</p>
            <p>ម៉ូឌុលស្មើ 1, អាកុយម៉ង់ស្មើ $\\pi$ ។</p>
            <p><strong>2.</strong> ចំពោះ $k \\in \\mathbb{N}: i^{4k} = 1, i^{4k+1} = i, i^{4k+2} = -1, i^{4k+3} = -i$</p>
            <p>$i^{2015} - i^{2014} = i^{4(503) + 3} - i^{4(503) + 2} = i^3 - i^2 = -i - (-1) = 1 - i$</p>
          </div>
        </div>
      </section>

      <!-- Section III -->
      <section class="question-section" style="animation-delay: 0.3s">
        <h2>លំហាត់ III</h2>
        <div class="question-content">
          <p>ក្នុងថ្នាក់រៀនមួយមានសិស្សអាស៊ី 4 នាក់ សិស្សអាហ្វ្រិក 2 នាក់ និងសិស្សអឺរ៉ុប 3 នាក់។ គេរៀបចំសិស្សជាក្រុមស្វ័យសិក្សាក្នុងមួយក្រុមមានសិស្ស 3 នាក់ដោយចៃដន្យ។ រកប្រូបាបនៃព្រឹត្តិការណ៍ខាងក្រោម៖</p>
          <div class="sub-question">
            <p>ក. យ៉ាងតិចមានសិស្ស 2 នាក់ជាសិស្សអាស៊ី។</p>
            <p>ខ. យ៉ាងតិចមានសិស្ស 2 នាក់ជាសិស្សអឺរ៉ុប។</p>
            <p>គ. មានសិស្សម្នាក់ក្នុងមួយទ្វីប។</p>
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
            <p>ចំនួនសិស្សសរុប = 4 + 2 + 3 = 9 នាក់។</p>
            <p>ចំនួនករណីអាច $n(S) = C(9, 3) = \\frac{9 \\times 8 \\times 7}{6} = 84$</p>
            <p><strong>ក.</strong> សិស្សអាស៊ី $\\ge 2$: អាស៊ី 2 ឬ អាស៊ី 3</p>
            <p>$n(A) = C(4, 2) \\times C(5, 1) + C(4, 3) = 6 \\times 5 + 4 = 34$ $\\Rightarrow P(A) = \\frac{34}{84} = \\frac{17}{42}$</p>
            <p><strong>ខ.</strong> សិស្សអឺរ៉ុប $\\ge 2$: អឺរ៉ុប 2 ឬ អឺរ៉ុប 3</p>
            <p>$n(B) = C(3, 2) \\times C(6, 1) + C(3, 3) = 3 \\times 6 + 1 = 19$ $\\Rightarrow P(B) = \\frac{19}{84}$</p>
            <p><strong>គ.</strong> មានសិស្សម្នាក់ក្នុងមួយទ្វីប (អាស៊ី 1, អាហ្វ្រិក 1, អឺរ៉ុប 1)</p>
            <p>$n(C) = C(4, 1) \\times C(2, 1) \\times C(3, 1) = 4 \\times 2 \\times 3 = 24$ $\\Rightarrow P(C) = \\frac{24}{84} = \\frac{2}{7}$</p>
          </div>
        </div>
      </section>

      <!-- Section IV -->
      <section class="question-section" style="animation-delay: 0.4s">
        <h2>លំហាត់ IV</h2>
        <div class="question-content">
          <p>គេមានអនុគមន៍ $f$ កំណត់លើ $I = ]0, +\\infty[$ ដោយ $f(x) = \\frac{x + \\ln x}{x^2}$ ។</p>
          <div class="sub-question">
            <p><strong>A:</strong> $h$ ជាអនុគមន៍កំណត់លើ $I$ ដោយ $h(x) = -x + 1 - 2\\ln x$ ។ គណនា $h(1)$ និងសិក្សាអថេរភាពនៃ $h(x)$ ដោយមិនតម្រូវឱ្យគណនាលីមីតនៃ $h(x)$ ត្រង់ 0 និង $+\\infty$ ឡើយ។</p>
            <p><strong>B:</strong> ក. គណនាលីមីតនៃ $f(x)$ ត្រង់ 0 និង $+\\infty$ ។</p>
            <p>ខ. គណនាដេរីវេ $f'(x)$ នៃអនុគមន៍ $f(x)$ ។</p>
            <p>គ. បង្ហាញថាលើ $I$, $f'(x)$ មានសញ្ញាដូច $h(x)$ ។</p>
            <p>ឃ. ទាញរកអថេរភាពនៃ $f$ លើ $I$ និងសង់ក្រាប $C$ នៃ $f(x)$ នៅក្នុងតម្រុយអរតូណរម៉ាល់ $(O, \\vec{i}, \\vec{j})$ ។</p>
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
            <p><strong>A:</strong> $h(1) = -1 + 1 - 2(0) = 0$។ $h'(x) = -1 - \\frac{2}{x} = -\\frac{x+2}{x}$ ។ ដោយ $x > 0 \\Rightarrow h'(x) < 0$ ។</p>
            <p>ដូច្នេះ $h$ ជាអនុគមន៍ចុះដាច់ខាត។ ចំពោះ $x \\in (0, 1) \\Rightarrow h(x) > h(1) = 0$ ។ ចំពោះ $x \\in (1, +\\infty) \\Rightarrow h(x) < 0$ ។</p>
            <p><strong>B: ក.</strong> $\\lim_{x \\to 0^+} f(x) = \\lim_{x \\to 0^+} \\frac{x + \\ln x}{x^2} = \\frac{-\\infty}{0^+} = -\\infty$</p>
            <p>$\\lim_{x \\to +\\infty} f(x) = \\lim_{x \\to +\\infty} \\left(\\frac{1}{x} + \\frac{\\ln x}{x^2}\\right) = 0 + 0 = 0$</p>
            <p><strong>ខ.</strong> $f'(x) = \\frac{\\left(1 + \\frac{1}{x}\\right)x^2 - 2x(x + \\ln x)}{x^4} = \\frac{x^2 + x - 2x^2 - 2x\\ln x}{x^4} = \\frac{-x^2 + x - 2x\\ln x}{x^4} = \\frac{-x + 1 - 2\\ln x}{x^3} = \\frac{h(x)}{x^3}$</p>
            <p><strong>គ.</strong> ដោយ $x^3 > 0$ ចំពោះគ្រប់ $x > 0$ ដូច្នេះ $f'(x)$ មានសញ្ញាដូច $h(x)$ ។</p>
            <p><strong>ឃ.</strong> $f$ កើនលើ $(0, 1)$ និងចុះលើ $(1, +\\infty)$។ អតិបរមា $f(1) = \\frac{1 + 0}{1} = 1$។</p>
          </div>
        </div>
      </section>

      <!-- Section V -->
      <section class="question-section" style="animation-delay: 0.5s">
        <h2>លំហាត់ V</h2>
        <div class="question-content">
          <p>គេមានសមីការឌីផេរ៉ង់ស្យែល $(E): y'' + 4y = x^2 + 2x - 1$ ។</p>
          <div class="sub-question">
            <p>A: រកអនុគមន៍ $f_1(x) = ax^2 + bx + c$ ជាចម្លើយនៃសមីការ $(E)$ ។</p>
            <p>B: បង្ហាញថាបើ $f(x)$ ជាចម្លើយនៃសមីការ $(E)$ នោះ $f(x) - f_1(x)$ ជាចម្លើយនៃសមីការ $y'' + 4y = 0$ ។</p>
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
            <p><strong>A:</strong> ដោយ $f_1(x) = ax^2 + bx + c \\Rightarrow f_1'(x) = 2ax + b \\Rightarrow f_1''(x) = 2a$</p>
            <p>យកទៅជំនួសក្នុង $(E)$: $2a + 4(ax^2 + bx + c) = x^2 + 2x - 1$</p>
            <p>$4ax^2 + 4bx + (2a + 4c) = x^2 + 2x - 1$</p>
            <p>ផ្ទឹមមេគុណ: $4a = 1 \\Rightarrow a = \\frac{1}{4}$</p>
            <p>$4b = 2 \\Rightarrow b = \\frac{1}{2}$</p>
            <p>$2a + 4c = -1 \\Rightarrow 2(\\frac{1}{4}) + 4c = -1 \\Rightarrow \\frac{1}{2} + 4c = -1 \\Rightarrow 4c = -\\frac{3}{2} \\Rightarrow c = -\\frac{3}{8}$</p>
            <p>ដូចនេះ $f_1(x) = \\frac{1}{4}x^2 + \\frac{1}{2}x - \\frac{3}{8}$</p>
            <p><strong>B:</strong> ឧបមាថា $f(x)$ ជាចម្លើយ $(E)$ នោះ $f''(x) + 4f(x) = x^2 + 2x - 1 \\quad (1)$</p>
            <p>$f_1(x)$ ជាចម្លើយ $(E)$ នោះ $f_1''(x) + 4f_1(x) = x^2 + 2x - 1 \\quad (2)$</p>
            <p>ដក $(1)$ និង $(2)$ អង្គនិងអង្គ៖ $(f''(x) - f_1''(x)) + 4(f(x) - f_1(x)) = 0 \\Rightarrow (f - f_1)'' + 4(f - f_1) = 0$</p>
            <p>ដូចនេះ $f(x) - f_1(x)$ ជាចម្លើយនៃសមីការ $y'' + 4y = 0$ ។</p>
          </div>
        </div>
      </section>

      <!-- Section VI -->
      <section class="question-section" style="animation-delay: 0.6s; border-bottom: none">
        <h2>លំហាត់ VI</h2>
        <div class="question-content">
          <p>A. ក្នុងតម្រុយអរតូណរម៉ាល់មានទិសដៅវិជ្ជមាន $(O, \\vec{i}, \\vec{j}, \\vec{k})$ គេមានចំណុច $A(2, 2, 1) ; B(4, -2, 0) ; C(3, 1, 1)$ និង $D(1, 5, 2)$ ។ បង្ហាញថា $ABCD$ ជាប្រលេឡូក្រាម រួចរកផ្ទៃក្រឡាប្រលេឡូក្រាមនេះ។</p>
          <p>B. រកសមីការប៉ារ៉ាម៉ែត្រនៃបន្ទាត់ដែលកាត់តាមចំណុច $A(2, 2, 1)$ និង $B(4, -2, 0)$ ។</p>
          <p>C. រកសមីការប្លង់ដែលកាត់តាមចំណុច $A(2, 2, 1) ; B(4, -2, 0) ; D(1, 5, 2)$ ។</p>
        </div>

        <button class="toggle-btn" onclick="toggleSolution(this)">
          <i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ
        </button>
        <div class="solution-content" style="display: none">
          <h3 class="solution-title">
            <i class="fas fa-check-circle"></i> ដំណោះស្រាយ
          </h3>
          <div class="solution-body">
            <p><strong>A.</strong> $\\vec{AB} = (4 - 2, -2 - 2, 0 - 1) = (2, -4, -1)$</p>
            <p>$\\vec{DC} = (3 - 1, 1 - 5, 1 - 2) = (2, -4, -1)$</p>
            <p>ដោយ $\\vec{AB} = \\vec{DC}$ ដូច្នេះ $ABCD$ ជាប្រលេឡូក្រាម។</p>
            <p>ផ្ទៃក្រឡា $S = |\\vec{AB} \\times \\vec{AD}|$ ។ $\\vec{AD} = (1 - 2, 5 - 2, 2 - 1) = (-1, 3, 1)$</p>
            <p>$\\vec{AB} \\times \\vec{AD} = \\begin{vmatrix} \\vec{i} & \\vec{j} & \\vec{k} \\\\ 2 & -4 & -1 \\\\ -1 & 3 & 1 \\end{vmatrix} = (-4 - (-3))\\vec{i} - (2 - 1)\\vec{j} + (6 - 4)\\vec{k} = -\\vec{i} - \\vec{j} + 2\\vec{k}$</p>
            <p>$S = \\sqrt{(-1)^2 + (-1)^2 + 2^2} = \\sqrt{1 + 1 + 4} = \\sqrt{6}$ ឯកតាផ្ទៃ។</p>
            <p><strong>B.</strong> បន្ទាត់កាត់តាម $A$ និងមានវ៉ិចទ័រប្រាប់ទិស $\\vec{u} = \\vec{AB} = (2, -4, -1)$ គឺ៖</p>
            <p>$\\begin{cases} x = 2 + 2t \\\\ y = 2 - 4t \\\\ z = 1 - t \\end{cases} \\quad (t \\in \\mathbb{R})$</p>
            <p><strong>C.</strong> ប្លង់កាត់តាម $A, B, D$ គឺប្លង់កាត់តាម $A$ និងមានវ៉ិចទ័រណរម៉ាល់ $\\vec{n} = \\vec{AB} \\times \\vec{AD} = (-1, -1, 2)$ ៖</p>
            <p>$-(x - 2) - (y - 2) + 2(z - 1) = 0 \\Rightarrow -x + 2 - y + 2 + 2z - 2 = 0 \\Rightarrow x + y - 2z - 2 = 0$</p>
          </div>
        </div>
      </section>`;

fs.writeFileSync(path + 'kanit-12.html', buildHtml(12, '១២', exam12Sections));
