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

const exam15Sections = `<!-- Section I -->
      <section class="question-section" style="animation-delay: 0.1s">
        <h2>លំហាត់ I</h2>
        <div class="question-content">
          <p>គណនាលីមីតខាងក្រោម៖</p>
          <div class="formula-box">
            <p>១. $\\lim_{x\\to1} \\frac{1 - x^2}{x^3 - x^2 + x - 1}$</p>
            <p>២. $\\lim_{x\\to0} \\frac{\\sin 3x}{-x}$</p>
            <p>៣. $\\lim_{x\\to0} \\frac{\\sqrt{2 + x} - \\sqrt{2 - x}}{\\sin x}$</p>
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
            <p><strong>១.</strong> $\\lim_{x\\to1} \\frac{1 - x^2}{x^2(x - 1) + (x - 1)} = \\lim_{x\\to1} \\frac{-(x - 1)(x + 1)}{(x - 1)(x^2 + 1)} = \\lim_{x\\to1} \\frac{-(x + 1)}{x^2 + 1} = \\frac{-2}{2} = -1$</p>
            <p><strong>២.</strong> $\\lim_{x\\to0} \\frac{\\sin 3x}{-x} = \\lim_{x\\to0} -3 \\frac{\\sin 3x}{3x} = -3 \\times 1 = -3$</p>
            <p><strong>៣.</strong> $\\lim_{x\\to0} \\frac{(\\sqrt{2+x} - \\sqrt{2-x})(\\sqrt{2+x} + \\sqrt{2-x})}{\\sin x (\\sqrt{2+x} + \\sqrt{2-x})} = \\lim_{x\\to0} \\frac{2+x - (2-x)}{\\sin x (\\sqrt{2+x} + \\sqrt{2-x})}$</p>
            <p>$= \\lim_{x\\to0} \\frac{2x}{\\sin x (\\sqrt{2+x} + \\sqrt{2-x})} = 2 \\times 1 \\times \\frac{1}{\\sqrt{2} + \\sqrt{2}} = \\frac{2}{2\\sqrt{2}} = \\frac{1}{\\sqrt{2}} = \\frac{\\sqrt{2}}{2}$</p>
          </div>
        </div>
      </section>

      <!-- Section II -->
      <section class="question-section" style="animation-delay: 0.2s">
        <h2>លំហាត់ II</h2>
        <div class="question-content">
          <p>ក្នុងថ្នាក់រៀនមួយមានសិស្សពូកែចំនួន 10 នាក់ ដែលក្នុងនោះមាន 4 នាក់ជាសិស្សស្រី និង 6 នាក់ជាសិស្សប្រុស។ គេរៀបចំសិស្សជាក្រុម ក្នុងមួយក្រុមមាន 4 នាក់ដោយចៃដន្យ។ រកប្រូបាបនៃព្រឹត្តិការណ៍៖</p>
          <div class="sub-question">
            <p>ក. ក្រុមសិស្សដែលជ្រើសរើសបានសុទ្ធតែស្រី។</p>
            <p>ខ. ក្រុមសិស្សដែលជ្រើសរើសបានសុទ្ធតែប្រុស។</p>
            <p>គ. ក្រុមសិស្សដែលជ្រើសរើសបាន 50% ជាសិស្សប្រុស។</p>
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
            <p>ចំនួនករណីអាច $n(S) = C(10, 4) = \\frac{10 \\times 9 \\times 8 \\times 7}{24} = 210$</p>
            <p><strong>ក.</strong> សុទ្ធតែស្រី៖ $n(A) = C(4, 4) = 1 \\Rightarrow P(A) = \\frac{1}{210}$</p>
            <p><strong>ខ.</strong> សុទ្ធតែប្រុស៖ $n(B) = C(6, 4) = 15 \\Rightarrow P(B) = \\frac{15}{210} = \\frac{1}{14}$</p>
            <p><strong>គ.</strong> 50% ប្រុស (មានន័យថា ប្រុស 2 និងស្រី 2)៖ $n(C) = C(6, 2) \\times C(4, 2) = 15 \\times 6 = 90$</p>
            <p>$P(C) = \\frac{90}{210} = \\frac{3}{7}$</p>
          </div>
        </div>
      </section>

      <!-- Section III -->
      <section class="question-section" style="animation-delay: 0.3s">
        <h2>លំហាត់ III</h2>
        <div class="question-content">
          <p>គេឱ្យចំនួនកុំផ្លិច $z_1 = 1 + i\\sqrt{3}$ និង $z_2 = 6(\\cos\\frac{\\pi}{4} - i\\sin\\frac{\\pi}{4})$ ។</p>
          <div class="sub-question">
            <p>ក. សរសេរ $z_1$ ជាទម្រង់ត្រីកោណមាត្រ។</p>
            <p>ខ. រកម៉ូឌុល និងអាកុយម៉ង់នៃ $z_1^3$ ។</p>
            <p>គ. សរសេរផលគុណ $z_1 \\times z_2$ ជាទម្រង់ពីជគណិត។</p>
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
            <p><strong>ក.</strong> $z_1 = 1 + i\\sqrt{3} = 2\\left(\\frac{1}{2} + i\\frac{\\sqrt{3}}{2}\\right) = 2\\left(\\cos\\frac{\\pi}{3} + i\\sin\\frac{\\pi}{3}\\right)$</p>
            <p><strong>ខ.</strong> $z_1^3 = 2^3\\left(\\cos\\frac{3\\pi}{3} + i\\sin\\frac{3\\pi}{3}\\right) = 8(\\cos\\pi + i\\sin\\pi)$</p>
            <p>ម៉ូឌុល $|z_1^3| = 8$, អាកុយម៉ង់ $\\arg(z_1^3) = \\pi$</p>
            <p><strong>គ.</strong> $z_2 = 6\\left(\\frac{\\sqrt{2}}{2} - i\\frac{\\sqrt{2}}{2}\\right) = 3\\sqrt{2} - 3i\\sqrt{2}$</p>
            <p>$z_1 \\times z_2 = (1 + i\\sqrt{3})(3\\sqrt{2} - 3i\\sqrt{2}) = 3\\sqrt{2} - 3i\\sqrt{2} + 3i\\sqrt{6} + 3\\sqrt{6}$</p>
            <p>$= 3(\\sqrt{6} + \\sqrt{2}) + 3i(\\sqrt{6} - \\sqrt{2})$</p>
          </div>
        </div>
      </section>

      <!-- Section IV -->
      <section class="question-section" style="animation-delay: 0.4s">
        <h2>លំហាត់ IV</h2>
        <div class="question-content">
          <p><strong>១.</strong> ក្នុងលំហ $(O, \\vec{i}, \\vec{j}, \\vec{k})$ គេមានចំណុច $A(-2,1,0) ; B(0,1,1) ; C(1,2,2)$ និង $D(0,3,-4)$ ។</p>
          <div class="sub-question">
            <p>ក. រកវ៉ិចទ័រ $\\vec{AB} ; \\vec{AC} ; \\vec{AD} ; \\vec{BC} ; \\vec{BD}$ និង $\\vec{CD}$ ។</p>
            <p>ខ. គណនាប្រវែង $AB ; AC ; AD ; BC ; BD$ និង $CD$ ។ ទាញបញ្ជាក់ថា $ABD$ និង $ACD$ ជាត្រីកោណកែងត្រង់ $A$ ។</p>
          </div>
          <p><strong>២.</strong> គេមានសមីការ $9y^2 - 16x^2 = 144$ ។ បង្ហាញថាសមីការនេះជាសមីការអ៊ីពែរបូល។ រកកូអរដោនេកំពូលទាំងពីរ និងកំណុំទាំងពីរនៃអ៊ីពែរបូល។ រកសមីការអាស៊ីមតូត និងសង់អ៊ីពែរបូលនេះ។</p>
        </div>

        <button class="toggle-btn" onclick="toggleSolution(this)">
          <i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ
        </button>
        <div class="solution-content" style="display: none">
          <h3 class="solution-title">
            <i class="fas fa-check-circle"></i> ដំណោះស្រាយ
          </h3>
          <div class="solution-body">
            <p><strong>១. ក.</strong> $\\vec{AB} = (2, 0, 1), \\vec{AC} = (3, 1, 2), \\vec{AD} = (2, 2, -4), \\vec{BC} = (1, 1, 1), \\vec{BD} = (0, 2, -5), \\vec{CD} = (-1, 1, -6)$</p>
            <p><strong>ខ.</strong> $AB = \\sqrt{5}, AC = \\sqrt{14}, AD = \\sqrt{24} = 2\\sqrt{6}, BC = \\sqrt{3}, BD = \\sqrt{29}, CD = \\sqrt{38}$</p>
            <p>$\\vec{AB} \\cdot \\vec{AD} = 2(2) + 0(2) + 1(-4) = 4 - 4 = 0 \\Rightarrow ABD$ កែងត្រង់ $A$</p>
            <p>$\\vec{AC} \\cdot \\vec{AD} = 3(2) + 1(2) + 2(-4) = 6 + 2 - 8 = 0 \\Rightarrow ACD$ កែងត្រង់ $A$</p>
            <p><strong>២.</strong> $9y^2 - 16x^2 = 144 \\Rightarrow \\frac{y^2}{16} - \\frac{x^2}{9} = 1 \\Rightarrow \\frac{y^2}{4^2} - \\frac{x^2}{3^2} = 1$ ។ នេះជាអ៊ីពែរបូលអ័ក្សទទឹងឈរ (y)។</p>
            <p>ផ្ចិត $O(0, 0)$។ កំពូល $V_{1,2}(0, \\pm 4)$។ $c^2 = a^2 + b^2 = 16 + 9 = 25 \\Rightarrow c = 5$។ កំណុំ $F_{1,2}(0, \\pm 5)$។</p>
            <p>អាស៊ីមតូត $y = \\pm \\frac{4}{3}x$ ។</p>
          </div>
        </div>
      </section>

      <!-- Section V -->
      <section class="question-section" style="animation-delay: 0.5s">
        <h2>លំហាត់ V</h2>
        <div class="question-content">
          <p>គណនាអាំងតេក្រាលខាងក្រោម៖</p>
          <div class="formula-box">
            <p>ក. $I = \\int_{1}^{3} (x - 2 + 3x^2)dx$</p>
            <p>ខ. $J = \\int_{0}^{\\frac{\\pi}{4}} (\\sin 2x - \\cos x)dx$</p>
            <p>គ. $K = \\int_{0}^{1} \\frac{x^3 + (x + 1)^2}{x^2 + 1}dx$ (បង្ហាញថា $\\frac{x^3 + (x + 1)^2}{x^2 + 1} = x + 1 + \\frac{x}{x^2 + 1}$)</p>
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
            <p><strong>ក.</strong> $I = \\left[\\frac{x^2}{2} - 2x + x^3\\right]_1^3 = \\left(\\frac{9}{2} - 6 + 27\\right) - \\left(\\frac{1}{2} - 2 + 1\\right) = \\frac{8}{2} + 21 + 1 = 26$</p>
            <p><strong>ខ.</strong> $J = \\left[-\\frac{1}{2}\\cos 2x - \\sin x\\right]_0^{\\pi/4} = \\left(-\\frac{1}{2}\\cos\\frac{\\pi}{2} - \\sin\\frac{\\pi}{4}\\right) - \\left(-\\frac{1}{2} - 0\\right) = -\\frac{\\sqrt{2}}{2} + \\frac{1}{2} = \\frac{1 - \\sqrt{2}}{2}$</p>
            <p><strong>គ.</strong> $K = \\int_0^1 \\left(x + 1 + \\frac{x}{x^2 + 1}\\right)dx = \\left[\\frac{x^2}{2} + x + \\frac{1}{2}\\ln(x^2 + 1)\\right]_0^1 = \\left(\\frac{1}{2} + 1 + \\frac{1}{2}\\ln 2\\right) - 0 = \\frac{3 + \\ln 2}{2}$</p>
          </div>
        </div>
      </section>

      <!-- Section VI -->
      <section class="question-section" style="animation-delay: 0.6s">
        <h2>លំហាត់ VI</h2>
        <div class="question-content">
          <p>១. ដោះស្រាយសមីការឌីផេរ៉ង់ស្យែល $(E) : y'' - 3y' + 2y = 0$ ។</p>
          <p>២. រកចម្លើយពិសេសមួយនៃ $(E)$ ដែល $y(0) = 1$ និង $y'(1) = 2e^2$ ។</p>
        </div>

        <button class="toggle-btn" onclick="toggleSolution(this)">
          <i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ
        </button>
        <div class="solution-content" style="display: none">
          <h3 class="solution-title">
            <i class="fas fa-check-circle"></i> ដំណោះស្រាយ
          </h3>
          <div class="solution-body">
            <p><strong>១.</strong> សមីការសម្គាល់ $\\lambda^2 - 3\\lambda + 2 = 0 \\Rightarrow \\lambda_1 = 1, \\lambda_2 = 2$</p>
            <p>ចម្លើយទូទៅ $y = Ae^x + Be^{2x}$ ដែល $A, B \\in \\mathbb{R}$</p>
            <p><strong>២.</strong> $y(0) = 1 \\Rightarrow A + B = 1 \\quad (1)$</p>
            <p>$y'(x) = Ae^x + 2Be^{2x}$</p>
            <p>$y'(1) = 2e^2 \\Rightarrow Ae + 2Be^2 = 2e^2 \\Rightarrow A + 2Be = 2e \\quad (2)$</p>
            <p>ពី $(1) \\Rightarrow A = 1 - B$ ជំនួសចូល $(2)$: $1 - B + 2Be = 2e \\Rightarrow B(2e - 1) = 2e - 1 \\Rightarrow B = 1$</p>
            <p>នាំឱ្យ $A = 0$ ។ ចម្លើយពិសេសគឺ $y = e^{2x}$ ។</p>
          </div>
        </div>
      </section>

      <!-- Section VII -->
      <section class="question-section" style="animation-delay: 0.7s; border-bottom: none">
        <h2>លំហាត់ VII</h2>
        <div class="question-content">
          <p>គេមានអនុគមន៍ $f$ កំណត់លើ $\\mathbb{R}$ ដោយ $f(x) = x + \\frac{1 - 3e^x}{1 + e^x}$ និងមានក្រាប $(C)$ ។</p>
          <div class="sub-question">
            <p>១. បង្ហាញថា $f(x) = x + 1 - \\frac{4e^x}{1 + e^x}$ និងគណនាលីមីតនៃ $f$ ត្រង់ $-\\infty$ ។ ស្រាយថាបន្ទាត់ $d_1: y = x + 1$ ជាអាស៊ីមតូតទ្រេតត្រង់ $-\\infty$ និងសិក្សាទីតាំងធៀប។</p>
            <p>២. គណនាលីមីតនៃ $f$ ត្រង់ $+\\infty$ ។ ស្រាយថាបន្ទាត់ $d_2: y = x - 3$ ជាអាស៊ីមតូតទ្រេតត្រង់ $+\\infty$ និងសិក្សាទីតាំងធៀប។</p>
            <p>៣. គណនាដេរីវេ $f'(x)$ និងបង្ហាញថា $f'(x) = \\left(\\frac{e^x - 1}{e^x + 1}\\right)^2$ ។ សិក្សាអថេរភាព និងសង់តារាងអថេរភាព។</p>
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
            <p><strong>១.</strong> $x + 1 - \\frac{4e^x}{1 + e^x} = \\frac{(x+1)(1+e^x) - 4e^x}{1+e^x} = \\frac{x + xe^x + 1 + e^x - 4e^x}{1+e^x} = x + \\frac{1-3e^x}{1+e^x}$ ពិត។</p>
            <p>$\\lim_{x\\to-\\infty} f(x) = -\\infty$។ $\\lim_{x\\to-\\infty} (f(x) - (x+1)) = \\lim_{x\\to-\\infty} -\\frac{4e^x}{1+e^x} = 0$ នាំឱ្យ $d_1$ ជាអាស៊ីមតូតទ្រេត។</p>
            <p>ដោយ $-\\frac{4e^x}{1+e^x} < 0$ នាំឱ្យ $(C)$ នៅក្រោម $d_1$ ជានិច្ច។</p>
            <p><strong>២.</strong> $\\lim_{x\\to+\\infty} f(x) = +\\infty$។ $f(x) - (x-3) = x + 1 - \\frac{4e^x}{1+e^x} - x + 3 = 4 - \\frac{4e^x}{1+e^x} = \\frac{4+4e^x-4e^x}{1+e^x} = \\frac{4}{1+e^x}$</p>
            <p>$\\lim_{x\\to+\\infty} \\frac{4}{1+e^x} = 0$ នាំឱ្យ $d_2: y = x - 3$ ជាអាស៊ីមតូតទ្រេត។</p>
            <p>ដោយ $\\frac{4}{1+e^x} > 0$ នាំឱ្យ $(C)$ នៅលើ $d_2$ ជានិច្ច។</p>
            <p><strong>៣.</strong> $f'(x) = 1 - \\frac{4e^x(1+e^x) - 4e^x(e^x)}{(1+e^x)^2} = 1 - \\frac{4e^x}{(1+e^x)^2} = \\frac{1+2e^x+e^{2x}-4e^x}{(1+e^x)^2} = \\frac{(e^x-1)^2}{(e^x+1)^2} = \\left(\\frac{e^x-1}{e^x+1}\\right)^2$</p>
            <p>$f'(x) \\ge 0$ ជានិច្ច។ អនុគមន៍កើនលើ $\\mathbb{R}$។ $f'(0) = 0$ ។ $f(0) = -1$ (ចំណុចរបត់)។</p>
          </div>
        </div>
      </section>`;

fs.writeFileSync(path + 'kanit-15.html', buildHtml(15, '១៥', exam15Sections));
