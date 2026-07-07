const fs = require('fs');
const path = __dirname + '/';

const template = fs.readFileSync(path + 'kanit-1.php', 'utf-8');

function buildHtml(examNumber, titleNum, sectionsHtml) {
  let html = template.replace(/<title>.*?<\/title>/, `<title>វិញ្ញាសា គណិតវិទ្យា ${titleNum} | StudyNest</title>`);
  html = html.replace(/<h1>.*?<\/h1>/, `<h1>វិញ្ញាសា គណិតវិទ្យា (វិទ្យាសាស្ត្រពិត) ${titleNum}</h1>`);
  
  const startIdx = html.indexOf('<!-- Section I -->');
  const endIdx = html.indexOf('<footer class="nav-footer">');
  
  const before = html.substring(0, startIdx);
  const after = html.substring(endIdx);
  
  return before + sectionsHtml + '\n      ' + after;
}

const exam13Sections = `<!-- Section I -->
      <section class="question-section" style="animation-delay: 0.1s">
        <h2>លំហាត់ I</h2>
        <div class="question-content">
          <p>គេឱ្យចំនួនកុំផ្លិច $z_1 = -1 + i\\sqrt{3}$ និង $z_2 = 1 - i\\sqrt{3}$ ។</p>
          <div class="sub-question">
            <p>ក. គណនា $z_1 + z_2 ; z_1 - z_2$ និង $z_1 \\times z_2$ ។</p>
            <p>ខ. សរសេរជាទម្រង់ត្រីកោណមាត្រនៃ $z_1 - z_2$ និង $z_1 \\times z_2$ ។</p>
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
            <p><strong>ក.</strong> $z_1 + z_2 = (-1 + i\\sqrt{3}) + (1 - i\\sqrt{3}) = 0$</p>
            <p>$z_1 - z_2 = (-1 + i\\sqrt{3}) - (1 - i\\sqrt{3}) = -2 + 2i\\sqrt{3}$</p>
            <p>$z_1 \\times z_2 = (-1 + i\\sqrt{3})(1 - i\\sqrt{3}) = -1 + i\\sqrt{3} + i\\sqrt{3} - i^2(3) = -1 + 2i\\sqrt{3} + 3 = 2 + 2i\\sqrt{3}$</p>
            <p><strong>ខ.</strong> $z_1 - z_2 = -2 + 2i\\sqrt{3} = 4\\left(-\\frac{1}{2} + i\\frac{\\sqrt{3}}{2}\\right) = 4\\left(\\cos\\frac{2\\pi}{3} + i\\sin\\frac{2\\pi}{3}\\right)$</p>
            <p>$z_1 \\times z_2 = 2 + 2i\\sqrt{3} = 4\\left(\\frac{1}{2} + i\\frac{\\sqrt{3}}{2}\\right) = 4\\left(\\cos\\frac{\\pi}{3} + i\\sin\\frac{\\pi}{3}\\right)$</p>
          </div>
        </div>
      </section>

      <!-- Section II -->
      <section class="question-section" style="animation-delay: 0.2s">
        <h2>លំហាត់ II</h2>
        <div class="question-content">
          <p>គណនាលីមីតខាងក្រោម៖</p>
          <div class="formula-box">
            <p>ក. $\\lim_{x\\to2} \\frac{x^3 - 8}{\\sqrt{x + 2} - 2}$</p>
            <p>ខ. $\\lim_{x\\to0} \\frac{\\cos x - 1}{\\sin^2 x}$</p>
            <p>គ. $\\lim_{x\\to0} \\frac{3\\sin 3x}{x}$</p>
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
            <p><strong>ក.</strong> $\\lim_{x\\to2} \\frac{x^3 - 8}{\\sqrt{x + 2} - 2} = \\lim_{x\\to2} \\frac{(x - 2)(x^2 + 2x + 4)(\\sqrt{x + 2} + 2)}{x + 2 - 4} = \\lim_{x\\to2} (x^2 + 2x + 4)(\\sqrt{x + 2} + 2)$</p>
            <p>$= (4 + 4 + 4)(\\sqrt{4} + 2) = 12 \\times 4 = 48$</p>
            <p><strong>ខ.</strong> $\\lim_{x\\to0} \\frac{\\cos x - 1}{\\sin^2 x} = \\lim_{x\\to0} \\frac{\\cos x - 1}{1 - \\cos^2 x} = \\lim_{x\\to0} \\frac{\\cos x - 1}{(1 - \\cos x)(1 + \\cos x)} = \\lim_{x\\to0} \\frac{-1}{1 + \\cos x} = -\\frac{1}{2}$</p>
            <p><strong>គ.</strong> $\\lim_{x\\to0} \\frac{3\\sin 3x}{x} = \\lim_{x\\to0} 3 \\times 3 \\frac{\\sin 3x}{3x} = 9 \\times 1 = 9$</p>
          </div>
        </div>
      </section>

      <!-- Section III -->
      <section class="question-section" style="animation-delay: 0.3s">
        <h2>លំហាត់ III</h2>
        <div class="question-content">
          <p>ក្នុងថង់មួយមានប៊ូលស 3 ប៊ូលខៀវ 3 និងប៊ូលក្រហម 2។ គេចាប់យកប៊ូលម្ដង 3 គ្រាប់ចេញពីថង់ដោយចៃដន្យ។ រកប្រូបាបនៃព្រឹត្តិការណ៍៖</p>
          <div class="sub-question">
            <p>ក. A : យ៉ាងតិចមានប៊ូលពីរពណ៌ខៀវ។</p>
            <p>ខ. B : ប៊ូលទាំងបីមានពណ៌ខុសៗគ្នា។</p>
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
            <p>ចំនួនប៊ូលសរុប = 3 + 3 + 2 = 8 គ្រាប់។</p>
            <p>ករណីអាច $n(S) = C(8, 3) = \\frac{8 \\times 7 \\times 6}{6} = 56$</p>
            <p><strong>ក.</strong> យ៉ាងតិចប៊ូលខៀវ 2: ខៀវ 2 ឬ ខៀវ 3</p>
            <p>$n(A) = C(3, 2) \\times C(5, 1) + C(3, 3) = 3 \\times 5 + 1 = 16$</p>
            <p>$P(A) = \\frac{16}{56} = \\frac{2}{7}$</p>
            <p><strong>ខ.</strong> ពណ៌ខុសៗគ្នា: ស 1, ខៀវ 1, ក្រហម 1</p>
            <p>$n(B) = C(3, 1) \\times C(3, 1) \\times C(2, 1) = 3 \\times 3 \\times 2 = 18$</p>
            <p>$P(B) = \\frac{18}{56} = \\frac{9}{28}$</p>
          </div>
        </div>
      </section>

      <!-- Section IV -->
      <section class="question-section" style="animation-delay: 0.4s">
        <h2>លំហាត់ IV</h2>
        <div class="question-content">
          <p><strong>១.</strong> គណនាអាំងតេក្រាល $I = \\int_{1}^{2} \\left(\\frac{x^2}{3} - \\frac{x}{2} + 3\\right) dx$ ។</p>
          <p><strong>២.</strong> គេមានអនុគមន៍ $f(x) = -\\frac{2 - x}{(1 - x)^2}$ ។ បង្ហាញថា $f(x) = -\\frac{1}{(x - 1)^2} + \\frac{1}{x - 1}$ ។ គណនា $K = \\int_{-1}^{0} f(x)dx$ ។</p>
        </div>

        <button class="toggle-btn" onclick="toggleSolution(this)">
          <i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ
        </button>
        <div class="solution-content" style="display: none">
          <h3 class="solution-title">
            <i class="fas fa-check-circle"></i> ដំណោះស្រាយ
          </h3>
          <div class="solution-body">
            <p><strong>១.</strong> $I = \\int_{1}^{2} \\left(\\frac{x^2}{3} - \\frac{x}{2} + 3\\right) dx = \\left[\\frac{x^3}{9} - \\frac{x^2}{4} + 3x\\right]_1^2$</p>
            <p>$I = \\left(\\frac{8}{9} - 1 + 6\\right) - \\left(\\frac{1}{9} - \\frac{1}{4} + 3\\right) = \\frac{7}{9} - 1 + 6 + \\frac{1}{4} - 3 = 2 + \\frac{7}{9} + \\frac{1}{4} = \\frac{72 + 28 + 9}{36} = \\frac{109}{36}$</p>
            <p><strong>២.</strong> បង្ហាញ $f(x) = -\\frac{1}{(x - 1)^2} + \\frac{1}{x - 1} = \\frac{-1 + x - 1}{(x - 1)^2} = \\frac{x - 2}{(1 - x)^2} = -\\frac{2 - x}{(1 - x)^2}$ ពិត។</p>
            <p>$K = \\int_{-1}^{0} \\left(-\\frac{1}{(x - 1)^2} + \\frac{1}{x - 1}\\right)dx = \\left[\\frac{1}{x - 1} + \\ln|x - 1|\\right]_{-1}^0 = \\left(\\frac{1}{-1} + \\ln 1\\right) - \\left(\\frac{1}{-2} + \\ln 2\\right)$</p>
            <p>$K = -1 - \\left(-\\frac{1}{2} + \\ln 2\\right) = -\\frac{1}{2} - \\ln 2$</p>
          </div>
        </div>
      </section>

      <!-- Section V -->
      <section class="question-section" style="animation-delay: 0.5s">
        <h2>លំហាត់ V</h2>
        <div class="question-content">
          <p><strong>A:</strong> គេមានវ៉ិចទ័រ $\\vec{u} = \\vec{i} - \\vec{j} + 2\\vec{k} ; \\vec{v} = -\\vec{i} + 2\\vec{j} + 2\\vec{k}$ និង $\\vec{w} = \\vec{i} + \\vec{j} - 2\\vec{k}$ ។ រកវ៉ិចទ័រ៖</p>
          <div class="sub-question">
            <p>ក. $\\vec{u} + \\vec{v}$ \\quad ខ. $\\vec{w} \\times \\vec{u}$ \\quad គ. $\\vec{w} \\times \\vec{v}$</p>
          </div>
          <p><strong>B:</strong> រកសមីការស្តង់ដាអេលីបដែលកំណុំមួយជាចំណុចមានកូអរដោនេ $(-1,0)$ និងកំពូលពីរទៀតមានកូអរដោនេ $(-3,0)$ និង $(3,0)$ ។</p>
        </div>

        <button class="toggle-btn" onclick="toggleSolution(this)">
          <i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ
        </button>
        <div class="solution-content" style="display: none">
          <h3 class="solution-title">
            <i class="fas fa-check-circle"></i> ដំណោះស្រាយ
          </h3>
          <div class="solution-body">
            <p><strong>A: ក.</strong> $\\vec{u} + \\vec{v} = (1 - 1)\\vec{i} + (-1 + 2)\\vec{j} + (2 + 2)\\vec{k} = \\vec{j} + 4\\vec{k}$</p>
            <p><strong>ខ.</strong> $\\vec{w} \\times \\vec{u} = \\begin{vmatrix} \\vec{i} & \\vec{j} & \\vec{k} \\\\ 1 & 1 & -2 \\\\ 1 & -1 & 2 \\end{vmatrix} = (2 - 2)\\vec{i} - (2 - (-2))\\vec{j} + (-1 - 1)\\vec{k} = -4\\vec{j} - 2\\vec{k}$</p>
            <p><strong>គ.</strong> $\\vec{w} \\times \\vec{v} = \\begin{vmatrix} \\vec{i} & \\vec{j} & \\vec{k} \\\\ 1 & 1 & -2 \\\\ -1 & 2 & 2 \\end{vmatrix} = (2 - (-4))\\vec{i} - (2 - 2)\\vec{j} + (2 - (-1))\\vec{k} = 6\\vec{i} + 3\\vec{k}$</p>
            <p><strong>B:</strong> កំពូលពីរមានកូអរដោនេ $(-3,0)$ និង $(3,0)$ នាំឱ្យផ្ចិតអេលីបគឺ $(0,0)$ ហើយអ័ក្សធំនៅតាមអ័ក្សកូអរដោនេអាប់ស៊ីស (x)។</p>
            <p>យើងបាន $a = 3$។ កំណុំមានកូអរដោនេ $(-1,0)$ នាំឱ្យ $c = 1$។</p>
            <p>យើងមាន $a^2 = b^2 + c^2 \\Rightarrow 9 = b^2 + 1 \\Rightarrow b^2 = 8$។</p>
            <p>សមីការស្តង់ដាគឺ $\\frac{x^2}{a^2} + \\frac{y^2}{b^2} = 1 \\Rightarrow \\frac{x^2}{9} + \\frac{y^2}{8} = 1$។</p>
          </div>
        </div>
      </section>

      <!-- Section VI -->
      <section class="question-section" style="animation-delay: 0.6s">
        <h2>លំហាត់ VI</h2>
        <div class="question-content">
          <p>គេមានសមីការឌីផេរ៉ង់ស្យែល $(E) : y' + 2y = \\frac{2e^{-x}}{1 + 2e^x}$ ។</p>
          <div class="sub-question">
            <p>ក. ផ្ទៀងផ្ទាត់ថាអនុគមន៍ $f$ ដែល $f(x) = e^{-2x}\\ln(1 + 2e^x)$ ជាចម្លើយមួយនៃ $(E)$ ។</p>
            <p>ខ. បង្ហាញថាអនុគមន៍ $\\phi$ ជាចម្លើយនៃ $(E)$ លុះត្រាតែ $(\\phi - f)$ ជាចម្លើយនៃ $(F) : y' + 2y = 0$ ។</p>
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
            <p><strong>ក.</strong> $f'(x) = -2e^{-2x}\\ln(1 + 2e^x) + e^{-2x} \\cdot \\frac{2e^x}{1 + 2e^x} = -2e^{-2x}\\ln(1 + 2e^x) + \\frac{2e^{-x}}{1 + 2e^x}$</p>
            <p>យកទៅជំនួសក្នុង $(E)$: $f'(x) + 2f(x) = -2e^{-2x}\\ln(1 + 2e^x) + \\frac{2e^{-x}}{1 + 2e^x} + 2e^{-2x}\\ln(1 + 2e^x) = \\frac{2e^{-x}}{1 + 2e^x}$ ពិត។</p>
            <p><strong>ខ.</strong> បើ $\\phi$ ជាចម្លើយនៃ $(E)$ នោះ $\\phi' + 2\\phi = \\frac{2e^{-x}}{1 + 2e^x}$</p>
            <p>ហើយដោយ $f$ ជាចម្លើយនៃ $(E)$ នោះ $f' + 2f = \\frac{2e^{-x}}{1 + 2e^x}$</p>
            <p>ដកសមីការទាំងពីរ: $(\\phi' - f') + 2(\\phi - f) = 0 \\Rightarrow (\\phi - f)' + 2(\\phi - f) = 0$ ដែលមានន័យថា $(\\phi - f)$ ជាចម្លើយនៃ $(F)$ ។ លក្ខខណ្ឌច្រាសក៏ពិតដូចគ្នា។</p>
          </div>
        </div>
      </section>

      <!-- Section VII -->
      <section class="question-section" style="animation-delay: 0.7s; border-bottom: none">
        <h2>លំហាត់ VII</h2>
        <div class="question-content">
          <p><strong>A:</strong> គេឱ្យអនុគមន៍ $g$ កំណត់លើ $(0, +\\infty)$ ដោយ $g(x) = x^2 + \\ln x$ ។</p>
          <div class="sub-question">
            <p>១. a: បង្ហាញថា $g$ ជាអនុគមន៍កើនដាច់ខាតលើ $(0, +\\infty)$ ។ b: គណនា $g(1)$ ។</p>
            <p>២. a: ទាញយកពីលទ្ធផលសំណួរទី១ បញ្ជាក់លទ្ធផលខាងក្រោម៖ បើ $x \\ge 1$ នោះ $x^2 + \\ln x \\ge 1$ បើ $0 < x \\le 1$ នោះ $x^2 + \\ln x \\le 1$ ។</p>
            <p>b: កំណត់សញ្ញានៃកន្សោម $x^2 + \\ln x - 1$ ពេល $x \\in (0, +\\infty)$ ។</p>
          </div>
          <p><strong>B:</strong> អនុគមន៍ $f$ កំណត់លើ $(0, +\\infty)$ ដោយ $f(x) = x + 1 - \\frac{\\ln x}{x}$ និងមានក្រាប $(C)$ ។</p>
          <div class="sub-question">
            <p>១. សិក្សាលីមីតនៃអនុគមន៍ $f$ ត្រង់ $0$ និង $+\\infty$ $(\\text{បើ } \\lim_{x\\to+\\infty} \\frac{\\ln x}{x} = 0)$ ។</p>
            <p>២. បង្ហាញថាដេរីវេនៃ $f$ គឺ $f'(x) = \\frac{x^2 + \\ln x - 1}{x^2}$ ។</p>
            <p>៣. ប្រើលទ្ធផលសំណួរ A សិក្សាសញ្ញានៃ $f'(x)$ រួចសង់តារាងអថេរភាព $f$ លើ $(0, +\\infty)$ ។</p>
            <p>៤. a: បង្ហាញថាបន្ទាត់ $\\Delta: y = x + 1$ ជាអាស៊ីមតូតទ្រេតនៃ $(C)$ ត្រង់ $+\\infty$ ។ b: សិក្សាទីតាំង $(C)$ ធៀបនឹង $\\Delta$ ។</p>
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
            <p><strong>A:</strong> ១. a: $g'(x) = 2x + \\frac{1}{x} > 0$ ចំពោះ $x > 0$។ ដូច្នេះ $g$ ជាអនុគមន៍កើនដាច់ខាតលើ $(0, +\\infty)$។</p>
            <p>b: $g(1) = 1^2 + \\ln 1 = 1$ ។</p>
            <p>២. a: ដោយ $g$ ជាអនុគមន៍កើន ដូច្នេះបើ $x \\ge 1 \\Rightarrow g(x) \\ge g(1) \\Rightarrow x^2 + \\ln x \\ge 1$ ។ បើ $0 < x \\le 1 \\Rightarrow g(x) \\le g(1) \\Rightarrow x^2 + \\ln x \\le 1$ ។</p>
            <p>b: តាម a: $x^2 + \\ln x - 1 \\ge 0$ ពេល $x \\in [1, +\\infty)$ និង $x^2 + \\ln x - 1 \\le 0$ ពេល $x \\in (0, 1]$ ។</p>
            <p><strong>B:</strong> ១. $\\lim_{x\\to 0^+} f(x) = \\lim_{x\\to 0^+} \\left(x + 1 - \\frac{\\ln x}{x}\\right) = 0 + 1 - \\frac{-\\infty}{0^+} = +\\infty$</p>
            <p>$\\lim_{x\\to +\\infty} f(x) = \\lim_{x\\to +\\infty} \\left(x + 1 - \\frac{\\ln x}{x}\\right) = +\\infty + 1 - 0 = +\\infty$</p>
            <p>២. $f'(x) = 1 - \\frac{\\frac{1}{x}x - \\ln x(1)}{x^2} = 1 - \\frac{1 - \\ln x}{x^2} = \\frac{x^2 - 1 + \\ln x}{x^2} = \\frac{x^2 + \\ln x - 1}{x^2}$</p>
            <p>៣. $x^2 > 0$ នាំឱ្យ $f'(x)$ មានសញ្ញាដូច $x^2 + \\ln x - 1$។ តាម A, $f'(x) < 0$ លើ $(0, 1)$ និង $f'(x) > 0$ លើ $(1, +\\infty)$។</p>
            <p>$f$ ចុះលើ $(0, 1)$ និងកើនលើ $(1, +\\infty)$។ អប្បបរមា $f(1) = 1 + 1 - 0 = 2$ ។</p>
            <p>៤. a: $\\lim_{x\\to+\\infty} (f(x) - (x + 1)) = \\lim_{x\\to+\\infty} \\left(-\\frac{\\ln x}{x}\\right) = 0$ នាំឱ្យ $\\Delta: y = x + 1$ ជាអាស៊ីមតូតទ្រេត។</p>
            <p>b: សិក្សាសញ្ញា $-\\frac{\\ln x}{x}$។ ពេល $x > 1, \\ln x > 0 \\Rightarrow -\\frac{\\ln x}{x} < 0$ ក្រាប $(C)$ នៅក្រោម $\\Delta$។ ពេល $0 < x < 1, \\ln x < 0 \\Rightarrow -\\frac{\\ln x}{x} > 0$ ក្រាប $(C)$ នៅលើ $\\Delta$។</p>
          </div>
        </div>
      </section>`;

fs.writeFileSync(path + 'kanit-13.php', buildHtml(13, '១៣', exam13Sections));
