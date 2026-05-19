const fs = require('fs');
const path = 'C:/IT/kimou/StudyNest/grade12/science/math_g12/exams/';

const template = fs.readFileSync(path + 'kanit-1.html', 'utf-8');

function buildHtml(examNumber, titleNum, sectionsHtml) {
  let html = template.replace(/<title>.*?<\/title>/, `<title>វិញ្ញាសា គណិតវិទ្យា ${titleNum} | StudyNest</title>`);
  html = html.replace(/<h1>.*?<\/h1>/, `<h1>វិញ្ញាសា គណិតវិទ្យា (វិទ្យាសាស្ត្រពិត) ${titleNum}</h1>`);
  
  // replace from <!-- Section I --> to <footer
  const startIdx = html.indexOf('<!-- Section I -->');
  const endIdx = html.indexOf('<footer class="nav-footer">');
  
  const before = html.substring(0, startIdx);
  const after = html.substring(endIdx);
  
  return before + sectionsHtml + '\n      ' + after;
}

const exam8Sections = `<!-- Section I -->
      <section class="question-section" style="animation-delay: 0.1s">
        <h2>លំហាត់ I</h2>
        <div class="question-content">
          <p>គេឱ្យចំនួនកុំផ្លិច $a = 2\\sqrt{3} - 2i$ និង $b = -\\sqrt{2} + i\\sqrt{2}$។</p>
          <div class="sub-question">
            <p>ក. ចូរសរសេរ $z = a^2 + b^2 + 4ai + 2\\sqrt{2}b$ ជាទម្រង់ពីជគណិត។</p>
            <p>ខ. ចូរសរសេរ $a, b$ និង $ab$ ជាទម្រង់ត្រីកោណមាត្រ។</p>
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
            <p><strong>ក. សរសេរ $z$ ជាទម្រង់ពីជគណិត៖</strong></p>
            <p>យើងមាន $a = 2\\sqrt{3} - 2i$ និង $b = -\\sqrt{2} + i\\sqrt{2}$</p>
            <p>យើងបាន $z = (2\\sqrt{3} - 2i)^2 + (-\\sqrt{2} + i\\sqrt{2})^2 + 4i(2\\sqrt{3} - 2i) + 2\\sqrt{2}(-\\sqrt{2} + i\\sqrt{2})$</p>
            <p>$= (12 - 8i\\sqrt{3} - 4) + (2 - 4i - 2) + (8i\\sqrt{3} + 8) + (-4 + 4i)$</p>
            <p>$= 8 - 8i\\sqrt{3} - 4i + 8i\\sqrt{3} + 8 - 4 + 4i = 12$</p>
            <div class="formula-box">ដូចនេះ $z = 12$</div>

            <p><strong>ខ. សរសេរ $a, b, ab$ ជាទម្រង់ត្រីកោណមាត្រ៖</strong></p>
            <p>$a = 2\\sqrt{3} - 2i = 4\\left(\\frac{\\sqrt{3}}{2} - i\\frac{1}{2}\\right) = 4\\left[\\cos\\left(-\\frac{\\pi}{6}\\right) + i\\sin\\left(-\\frac{\\pi}{6}\\right)\\right]$</p>
            <p>$b = -\\sqrt{2} + i\\sqrt{2} = 2\\left(-\\frac{\\sqrt{2}}{2} + i\\frac{\\sqrt{2}}{2}\\right) = 2\\left(\\cos\\frac{3\\pi}{4} + i\\sin\\frac{3\\pi}{4}\\right)$</p>
            <p>$ab = 4\\left[\\cos\\left(-\\frac{\\pi}{6}\\right) + i\\sin\\left(-\\frac{\\pi}{6}\\right)\\right] \\times 2\\left(\\cos\\frac{3\\pi}{4} + i\\sin\\frac{3\\pi}{4}\\right)$</p>
            <p>$= 8\\left[\\cos\\left(-\\frac{\\pi}{6} + \\frac{3\\pi}{4}\\right) + i\\sin\\left(-\\frac{\\pi}{6} + \\frac{3\\pi}{4}\\right)\\right]$</p>
            <div class="formula-box">ដូចនេះ $ab = 8\\left(\\cos\\frac{7\\pi}{12} + i\\sin\\frac{7\\pi}{12}\\right)$</div>
          </div>
        </div>
      </section>

      <!-- Section II -->
      <section class="question-section" style="animation-delay: 0.2s">
        <h2>លំហាត់ II</h2>
        <div class="question-content">
          <p>គណនាលីមីតខាងក្រោម៖</p>
          <div class="formula-box">
            <p>ក. $\\lim_{x \\to +\\infty} \\left(\\sqrt{x - \\sqrt{x}} - \\sqrt{x}\\right)$</p>
            <p>ខ. $\\lim_{x \\to 0} \\frac{1 - \\sqrt{\\cos x}}{\\tan^2 x}$</p>
            <p>គ. $\\lim_{x \\to 0} \\frac{e^{2021x} - e^{2020x}}{\\ln(1 + x)}$</p>
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
            <p><strong>គណនាលីមីត៖</strong></p>
            <p><strong>ក.</strong> $\\lim_{x \\to +\\infty} \\left(\\sqrt{x - \\sqrt{x}} - \\sqrt{x}\\right) = \\lim_{x \\to +\\infty} \\frac{(\\sqrt{x - \\sqrt{x}} - \\sqrt{x})(\\sqrt{x - \\sqrt{x}} + \\sqrt{x})}{\\sqrt{x - \\sqrt{x}} + \\sqrt{x}}$</p>
            <p>$= \\lim_{x \\to +\\infty} \\frac{x - \\sqrt{x} - x}{\\sqrt{x\\left(1 - \\frac{1}{\\sqrt{x}}\\right)} + \\sqrt{x}} = \\lim_{x \\to +\\infty} \\frac{-\\sqrt{x}}{\\sqrt{x}\\left(\\sqrt{1 - \\frac{1}{\\sqrt{x}}} + 1\\right)}$</p>
            <p>$= \\lim_{x \\to +\\infty} \\frac{-1}{\\sqrt{1 - \\frac{1}{\\sqrt{x}}} + 1} = \\frac{-1}{1 + 1} = -\\frac{1}{2}$</p>
            <div class="formula-box">ដូចនេះ $\\lim_{x \\to +\\infty} \\left(\\sqrt{x - \\sqrt{x}} - \\sqrt{x}\\right) = -\\frac{1}{2}$</div>

            <p><strong>ខ.</strong> $\\lim_{x \\to 0} \\frac{1 - \\sqrt{\\cos x}}{\\tan^2 x} = \\lim_{x \\to 0} \\frac{1 - \\cos x}{\\tan^2 x(1 + \\sqrt{\\cos x})} = \\lim_{x \\to 0} \\frac{2\\sin^2\\frac{x}{2}}{\\tan^2 x(1 + \\sqrt{\\cos x})}$</p>
            <p>$= \\lim_{x \\to 0} 2\\left(\\frac{\\sin\\frac{x}{2}}{\\frac{x}{2}}\\right)^2 \\cdot \\left(\\frac{x}{\\tan x}\\right)^2 \\cdot \\frac{1}{4} \\cdot \\frac{1}{1 + \\sqrt{\\cos x}} = 2(1)^2(1)^2 \\cdot \\frac{1}{4} \\cdot \\frac{1}{2} = \\frac{1}{4}$</p>
            <div class="formula-box">ដូចនេះ $\\lim_{x \\to 0} \\frac{1 - \\sqrt{\\cos x}}{\\tan^2 x} = \\frac{1}{4}$</div>

            <p><strong>គ.</strong> $\\lim_{x \\to 0} \\frac{e^{2021x} - e^{2020x}}{\\ln(1 + x)} = \\lim_{x \\to 0} \\frac{e^{2020x}(e^x - 1)}{\\ln(1 + x)} = \\lim_{x \\to 0} e^{2020x} \\cdot \\frac{e^x - 1}{x} \\cdot \\frac{x}{\\ln(1 + x)}$</p>
            <p>$= e^0 \\cdot 1 \\cdot 1 = 1$</p>
            <div class="formula-box">ដូចនេះ $\\lim_{x \\to 0} \\frac{e^{2021x} - e^{2020x}}{\\ln(1 + x)} = 1$</div>
          </div>
        </div>
      </section>

      <!-- Section III -->
      <section class="question-section" style="animation-delay: 0.3s">
        <h2>លំហាត់ III</h2>
        <div class="question-content">
          <p>ក្នុងប្រអប់មួយមានឃ្លីសពីរគ្រាប់ចុះលេខ 1, 2 និងឃ្លីខ្មៅបីគ្រាប់ចុះលេខ 1, 2, 3។ គេចាប់យកឃ្លីពីរគ្រាប់ព្រមគ្នាដោយចៃដន្យ។ រកប្រូបាបនៃព្រឹត្តិការណ៍៖</p>
          <div class="sub-question">
            <p>A: ចាប់បានឃ្លីទាំងពីរមានពណ៌ដូចគ្នា។</p>
            <p>B: ចាប់បានឃ្លីមានផលបូកលេខស្មើ 3។</p>
            <p>C: ចាប់បានឃ្លីមានពណ៌ដូចគ្នា និងមានផលបូកលេខស្មើ 3។</p>
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
            <p>ចំនួនករណីអាច $n(S) = C(5, 2) = \\frac{5!}{3!2!} = 10$</p>
            
            <p><strong>A: ពណ៌ដូចគ្នា</strong></p>
            <p>$n(A) = C(2, 2) + C(3, 2) = 1 + 3 = 4$</p>
            <div class="formula-box">ដូចនេះ $P(A) = \\frac{4}{10} = \\frac{2}{5}$</div>

            <p><strong>B: ផលបូកលេខស្មើ 3</strong></p>
            <p>ករណីស្របគឺ $B = \\{(w_1, w_2), (w_1, b_2), (w_2, b_1), (b_1, b_2)\\} \\Rightarrow n(B) = 4$</p>
            <div class="formula-box">ដូចនេះ $P(B) = \\frac{4}{10} = \\frac{2}{5}$</div>

            <p><strong>C: ពណ៌ដូចគ្នា និងផលបូកស្មើ 3</strong></p>
            <p>ករណីស្របគឺ $C = \\{(w_1, w_2), (b_1, b_2)\\} \\Rightarrow n(C) = 2$</p>
            <div class="formula-box">ដូចនេះ $P(C) = \\frac{2}{10} = \\frac{1}{5}$</div>
          </div>
        </div>
      </section>

      <!-- Section IV -->
      <section class="question-section" style="animation-delay: 0.4s">
        <h2>លំហាត់ IV</h2>
        <div class="question-content">
          <p><strong>១.</strong> គេឱ្យអនុគមន៍ $f(x) = \\frac{4 - 2x}{(2x + 1)(x^2 + 1)}$ ដែល $x \\neq -\\frac{1}{2}$។</p>
          <div class="sub-question">
            <p>ក. កំណត់ $m, n, p$ ដើម្បីឱ្យ $f(x) = \\frac{m}{2x + 1} + \\frac{nx + p}{x^2 + 1}$។</p>
            <p>ខ. គណនា $I(a) = \\int_0^a f(x)dx$។ រួចទាញរក $\\lim_{a \\to +\\infty} I(a)$។</p>
          </div>
          <p><strong>២.</strong> គេឱ្យសមីការ $(E): y'' + 3y' + 2y = 2x^2 + 12x + 13$។</p>
          <div class="sub-question">
            <p>ក. ដោះស្រាយសមីការ $(F): y'' + 3y' + 2y = 0$។</p>
            <p>ខ. កំណត់ពហុធាដឺក្រេទីពីរ $P(x)$ ជាចម្លើយមួយនៃសមីការ $(E)$។</p>
            <p>គ. ទាញរកចម្លើយទូទៅនៃសមីការ $(E)$។</p>
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
            <p><strong>១. ក. កំណត់ $m, n, p$៖</strong></p>
            <p>$\\frac{m}{2x + 1} + \\frac{nx + p}{x^2 + 1} = \\frac{m(x^2 + 1) + (nx + p)(2x + 1)}{(2x + 1)(x^2 + 1)} = \\frac{(m + 2n)x^2 + (n + 2p)x + (m + p)}{(2x + 1)(x^2 + 1)}$</p>
            <p>ផ្ទឹមមេគុណ៖ $\\begin{cases} m + 2n = 0 \\\\ n + 2p = -2 \\\\ m + p = 4 \\end{cases} \\Rightarrow m = 4, n = -2, p = 0$</p>
            
            <p><strong>ខ. គណនា $I(a)$ និងលីមីត៖</strong></p>
            <p>$I(a) = \\int_0^a \\left(\\frac{4}{2x + 1} - \\frac{2x}{x^2 + 1}\\right)dx = \\left[2\\ln|2x + 1| - \\ln(x^2 + 1)\\right]_0^a$</p>
            <p>$I(a) = 2\\ln(2a + 1) - \\ln(a^2 + 1) = \\ln\\frac{(2a + 1)^2}{a^2 + 1}$</p>
            <p>$\\lim_{a \\to +\\infty} I(a) = \\lim_{a \\to +\\infty} \\ln\\frac{(2a + 1)^2}{a^2 + 1} = \\ln 4 = 2\\ln 2$</p>

            <p><strong>២. ក. ដោះស្រាយ $(F)$៖</strong></p>
            <p>សមីការសម្គាល់៖ $\\lambda^2 + 3\\lambda + 2 = 0 \\Rightarrow \\lambda_1 = -1, \\lambda_2 = -2$</p>
            <p>ចម្លើយទូទៅ $(F)$: $y_h = Ae^{-x} + Be^{-2x}$ ដែល $A, B \\in \\mathbb{R}$</p>
            
            <p><strong>ខ. កំណត់ $P(x)$៖</strong></p>
            <p>តាង $P(x) = ax^2 + bx + c \\Rightarrow P'(x) = 2ax + b, P''(x) = 2a$</p>
            <p>ជំនួសចូល $(E)$: $2a + 3(2ax + b) + 2(ax^2 + bx + c) = 2x^2 + 12x + 13$</p>
            <p>$2ax^2 + (6a + 2b)x + (2a + 3b + 2c) = 2x^2 + 12x + 13$</p>
            <p>$\\begin{cases} 2a = 2 \\\\ 6a + 2b = 12 \\\\ 2a + 3b + 2c = 13 \\end{cases} \\Rightarrow a = 1, b = 3, c = 1$</p>
            <p>ដូចនេះ $P(x) = x^2 + 3x + 1$</p>

            <p><strong>គ. ចម្លើយទូទៅនៃ $(E)$៖</strong></p>
            <div class="formula-box">ដូចនេះ $y = y_h + P(x) = Ae^{-x} + Be^{-2x} + x^2 + 3x + 1$</div>
          </div>
        </div>
      </section>

      <!-- Section V -->
      <section class="question-section" style="animation-delay: 0.5s">
        <h2>លំហាត់ V</h2>
        <div class="question-content">
          <p><strong>១.</strong> គេឱ្យវ៉ិចទ័រ $\\vec{u} = -4\\vec{i} + \\vec{j} + \\vec{k}$ និង $\\vec{v} = -\\vec{j} + \\vec{k}$។</p>
          <div class="sub-question">
            <p>ក. រกกូអរដោនេចំណុច $M$ បើ $\\vec{OM} = \\vec{u} + 2\\vec{v}$។</p>
            <p>ខ. គណនា $\\vec{n} = \\vec{u} \\times \\vec{v}$ រួចទាញថា $\\vec{u}$ និង $\\vec{v}$ មិនកូលីនេអ៊ែរគ្នា។</p>
            <p>គ. រកសមីការប្លង់ $(P)$ កាត់តាម $M$ ហើយកែងនឹង $\\vec{n}$។</p>
            <p>ឃ. រกกូអរដោនេនៃចំណុច $A, B, C$ បើ $\\vec{OA} = \\vec{u}; \\vec{OB} = \\vec{v}$ និង $\\vec{OC} = \\vec{n}$។ ទាញរកមាឌចតមុខ $OABC$។</p>
          </div>
          <p><strong>២.</strong> គេឱ្យប៉ារ៉ាបូល $(P): x^2 + ax + by + c = 0$។</p>
          <div class="sub-question">
            <p>ក. កំណត់ $a, b, c$ បើវាគាត់តាម $A(-1, 2); B(-3, 5)$ និង $C(3, 2)$។</p>
            <p>ខ. សរសេរសមីការស្តង់ដានៃ $(P)$ រួចសង់។</p>
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
            <p><strong>១. ក. រกกូអរដោនេ $M$៖</strong></p>
            <p>$\\vec{OM} = (-4, 1, 1) + 2(0, -1, 1) = (-4, -1, 3) \\Rightarrow M(-4, -1, 3)$</p>
            
            <p><strong>ខ. គណនា $\\vec{n}$៖</strong></p>
            <p>$\\vec{n} = \\begin{vmatrix} \\vec{i} & \\vec{j} & \\vec{k} \\\\ -4 & 1 & 1 \\\\ 0 & -1 & 1 \\end{vmatrix} = 2\\vec{i} + 4\\vec{j} + 4\\vec{k} = (2, 4, 4)$</p>
            <p>ដោយ $\\vec{n} \\neq \\vec{0}$ នាំឱ្យ $\\vec{u}, \\vec{v}$ មិនកូលីនេអ៊ែរ។</p>

            <p><strong>គ. សមីការប្លង់ $(P)$៖</strong></p>
            <p>$2(x + 4) + 4(y + 1) + 4(z - 3) = 0 \\Rightarrow x + 2y + 2z = 0$</p>

            <p><strong>ឃ. មាឌចតមុខ $OABC$៖</strong></p>
            <p>$A(-4, 1, 1), B(0, -1, 1), C(2, 4, 4)$</p>
            <p>$V = \\frac{1}{6}|(\\vec{OA} \\times \\vec{OB}) \\cdot \\vec{OC}| = \\frac{1}{6}|(2, 4, 4) \\cdot (2, 4, 4)| = \\frac{36}{6} = 6$ ឯកតាមាឌ</p>

            <p><strong>២. ក. កំណត់ $a, b, c$៖</strong></p>
            <p>កាត់ $A(-1, 2) \\Rightarrow -a + 2b + c = -1$ (1)</p>
            <p>កាត់ $B(-3, 5) \\Rightarrow -3a + 5b + c = -9$ (2)</p>
            <p>កាត់ $C(3, 2) \\Rightarrow 3a + 2b + c = -9$ (3)</p>
            <p>ដោះស្រាយប្រព័ន្ធសមីការបាន $a = -2, b = -4, c = 5$។</p>

            <p><strong>ខ. សមីការស្តង់ដា៖</strong></p>
            <p>$(P): x^2 - 2x - 4y + 5 = 0 \\Rightarrow (x - 1)^2 = 4(y - 1)$</p>
            <p>កំពូល $V(1, 1)$, កំណុំ $F(1, 2)$, បន្ទាត់ប្រាប់ទិស $y = 0$។</p>
          </div>
        </div>
      </section>

      <!-- Section VI -->
      <section class="question-section" style="animation-delay: 0.6s; border-bottom: none">
        <h2>លំហាត់ VI</h2>
        <div class="question-content">
          <p><strong>១.</strong> $f(x) = (x - 1)e^x + 1$ ដែល $x \\in \\mathbb{R}$។</p>
          <div class="sub-question">
            <p>ក. គណនា $f'(x)$ រួចសង់តារាងអថេរភាព $f$។</p>
            <p>ខ. ទាញរកសញ្ញានៃ $f(x)$។</p>
          </div>
          <p><strong>២.</strong> $g(x) = (x - 2)(e^x + 1)$។</p>
          <div class="sub-question">
            <p>ក. គណនា $\\lim_{x \\to \\pm\\infty} g(x)$។ គណនា $g'(x)$ រួចសិក្សាសញ្ញារបស់វា។</p>
            <p>ខ. បង្ហាញថា $(d): y = x - 2$ ជាអាស៊ីមតូតទ្រេតនៃ $(C)$ ខាង $-\\infty$ រួចសិក្សាទីតាំងធៀប។</p>
            <p>គ. កំណត់សមីការបន្ទាត់ប៉ះ $(T)$ ទៅនឹង $(C)$ ដែលស្របនឹង $(d)$។</p>
            <p>ឃ. គណនា $g''(x)$ រួចរកចំណុចរបត់ $I$។</p>
            <p>ង. សង់តារាងអថេរភាពនៃ $g$។</p>
            <p>ច. សង់ក្រាប $(C)$ និងគណនាក្រឡាផ្ទៃ $S(a)$ ខណ្ឌដោយ $(C)$ អាស៊ីមតូតទ្រេត $(d)$ និង $x = a, x = 2$ បន្ទាប់មកគណនា $\\lim_{a \\to -\\infty} S(a)$។</p>
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
            <p><strong>១. ក. $f'(x)$ និងតារាងអថេរភាព៖</strong></p>
            <p>$f'(x) = e^x + (x - 1)e^x = xe^x$</p>
            <p>ដោយ $e^x > 0$, $f'(x)$ មានសញ្ញាដូច $x$។</p>
            <p>$f(1) = 1$។ (អនុគមន៍ចុះលើ $(-\\infty, 0)$ និងកើនលើ $(0, +\\infty)$, អប្បបរមា $f(0) = 0$)</p>
            
            <p><strong>ខ. សញ្ញា $f(x)$៖</strong></p>
            <p>តាមតារាងអថេរភាព $f(x) \\geq 0$ គ្រប់ $x \\in \\mathbb{R}$។</p>

            <p><strong>២. ក. លីមីត និង $g'(x)$៖</strong></p>
            <p>$\\lim_{x \\to -\\infty} g(x) = -\\infty$, $\\lim_{x \\to +\\infty} g(x) = +\\infty$</p>
            <p>$g'(x) = e^x + 1 + (x - 2)e^x = (x - 1)e^x + 1 = f(x)$</p>
            <p>ដោយ $f(x) \\geq 0 \\Rightarrow g'(x) \\geq 0$។ អនុគមន៍ $g$ កើនជានិច្ច។</p>

            <p><strong>ខ. អាស៊ីមតូតទ្រេត និងទីតាំង៖</strong></p>
            <p>$\\lim_{x \\to -\\infty} (g(x) - (x - 2)) = \\lim_{x \\to -\\infty} (x - 2)e^x = 0 \\Rightarrow (d): y = x - 2$ ជាអាស៊ីមតូតទ្រេត</p>
            <p>$g(x) - y_d = (x - 2)e^x$ មានសញ្ញាដូច $x - 2$។</p>
            <p>$x < 2 \\Rightarrow (C)$ នៅក្រោម $(d)$</p>
            <p>$x > 2 \\Rightarrow (C)$ នៅលើ $(d)$</p>

            <p><strong>គ. បន្ទាត់ប៉ះ $(T)$៖</strong></p>
            <p>$(T) \\parallel (d) \\Rightarrow g'(x) = 1 \\Rightarrow f(x) = 1 \\Rightarrow (x - 1)e^x = 0 \\Rightarrow x = 1$</p>
            <p>$y(1) = -e - 1 \\Rightarrow (T): y = 1(x - 1) - e - 1 = x - e - 2$</p>

            <p><strong>ឃ. ចំណុចរបត់ $I$៖</strong></p>
            <p>$g''(x) = f'(x) = xe^x$។ $g''(x) = 0 \\Rightarrow x = 0, y(0) = -4$។ $I(0, -4)$</p>

            <p><strong>ច. ក្រឡាផ្ទៃ $S(a)$៖</strong></p>
            <p>លើចន្លោះ $a < 2$, $(d)$ នៅលើ $(C)$។</p>
            <p>$S(a) = \\int_a^2 ((x - 2) - g(x))dx = \\int_a^2 -(x - 2)e^x dx$</p>
            <p>តាមអាំងតេក្រាលដោយផ្នែក បាន $S(a) = -[(x - 3)e^x]_a^2 = e^2 + (a - 3)e^a$</p>
            <p>$\\lim_{a \\to -\\infty} S(a) = e^2 \\approx 7.29$</p>
          </div>
        </div>
      </section>`;

const exam9Sections = `<!-- Section I -->
      <section class="question-section" style="animation-delay: 0.1s">
        <h2>លំហាត់ I</h2>
        <div class="question-content">
          <p>គណនាលីមីតខាងក្រោម៖</p>
          <div class="formula-box">
            <p>ក. $\\lim_{x \\to 1} \\frac{x^2 + 6x - 7}{x^2 - 5x + 4}$</p>
            <p>ខ. $\\lim_{x \\to 1} \\left( \\frac{2}{x^2 - 1} - \\frac{1}{x - 1} \\right)$</p>
            <p>គ. $\\lim_{x \\to 0} \\left[ \\frac{1}{2(1 - \\cos x)} - \\frac{1}{\\sin^2 x} \\right]$</p>
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
            <p><strong>ក.</strong> $\\lim_{x \\to 1} \\frac{x^2 + 6x - 7}{x^2 - 5x + 4} = \\lim_{x \\to 1} \\frac{(x - 1)(x + 7)}{(x - 1)(x - 4)} = \\lim_{x \\to 1} \\frac{x + 7}{x - 4} = \\frac{8}{-3} = -\\frac{8}{3}$</p>
            <p><strong>ខ.</strong> $\\lim_{x \\to 1} \\left( \\frac{2}{x^2 - 1} - \\frac{1}{x - 1} \\right) = \\lim_{x \\to 1} \\frac{2 - (x + 1)}{(x - 1)(x + 1)} = \\lim_{x \\to 1} \\frac{1 - x}{(x - 1)(x + 1)} = \\lim_{x \\to 1} \\frac{-1}{x + 1} = -\\frac{1}{2}$</p>
            <p><strong>គ.</strong> $\\lim_{x \\to 0} \\left[ \\frac{1}{2(1 - \\cos x)} - \\frac{1}{\\sin^2 x} \\right] = \\lim_{x \\to 0} \\frac{\\sin^2 x - 2(1 - \\cos x)}{2(1 - \\cos x)\\sin^2 x}$</p>
            <p>$= \\lim_{x \\to 0} \\frac{1 - \\cos^2 x - 2 + 2\\cos x}{2(1 - \\cos x)(1 - \\cos^2 x)} = \\lim_{x \\to 0} \\frac{-(1 - \\cos x)^2}{2(1 - \\cos x)^2(1 + \\cos x)} = \\frac{-1}{2(2)} = -\\frac{1}{4}$</p>
          </div>
        </div>
      </section>

      <!-- Section II -->
      <section class="question-section" style="animation-delay: 0.2s">
        <h2>លំហាត់ II</h2>
        <div class="question-content">
          <p>គេឱ្យចំនួនកុំផ្លិច $z = -2 + 2\\sqrt{3}i$ និង $w = x(x - i) + y(y + i)$។</p>
          <div class="sub-question">
            <p>ក. សរសេរ $z$ ជាទម្រង់ត្រីកោណមាត្រ។</p>
            <p>ខ. សរសេរ $z^3$ ជាទម្រង់ $a + bi$។</p>
            <p>គ. គណនា $x, y$ ដើម្បីឱ្យ $w = z^3$។</p>
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
            <p><strong>ក. $z$ ជាទម្រង់ត្រីកោណមាត្រ៖</strong></p>
            <p>$z = 4\\left(-\\frac{1}{2} + i\\frac{\\sqrt{3}}{2}\\right) = 4\\left(\\cos\\frac{2\\pi}{3} + i\\sin\\frac{2\\pi}{3}\\right)$</p>
            
            <p><strong>ខ. $z^3$៖</strong></p>
            <p>$z^3 = 4^3(\\cos 2\\pi + i\\sin 2\\pi) = 64$។ ដូចនេះ $z^3 = 64 + 0i$</p>

            <p><strong>គ. គណនា $x, y$៖</strong></p>
            <p>$w = x^2 - xi + y^2 + yi = (x^2 + y^2) + (y - x)i$</p>
            <p>$w = z^3 \\Rightarrow \\begin{cases} x^2 + y^2 = 64 \\\\ y - x = 0 \\end{cases} \\Rightarrow y = x, 2x^2 = 64 \\Rightarrow x^2 = 32 \\Rightarrow x = \\pm 4\\sqrt{2}$</p>
            <div class="formula-box">ដូចនេះ $x = y = \\pm 4\\sqrt{2}$</div>
          </div>
        </div>
      </section>

      <!-- Section III -->
      <section class="question-section" style="animation-delay: 0.3s">
        <h2>លំហាត់ III</h2>
        <div class="question-content">
          <p>ក្នុងប្រអប់មួយមានឃ្លីបួនគ្រាប់ដែលចុះលេខ 1, 2, 3, 4។ គេចាប់យកឃ្លីម្តងមួយៗចំនួនពីរដងដោយមិនដាក់ចូលវិញ។ រកប្រូបាបនៃព្រឹត្តិការណ៍៖</p>
          <div class="sub-question">
            <p>A: ឃ្លីមួយមានលេខសេស និងឃ្លីមួយទៀតមានលេខគូ។</p>
            <p>B: ផលបូកលេខលើឃ្លីទាំងពីរជាពហុគុណនៃ 3។</p>
            <p>C: លេខលើឃ្លីទាំងពីរជាពហុគុណនៃ 2។</p>
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
            <p>ចំនួនករណីអាច $n(S) = 4 \\times 3 = 12$</p>

            <p><strong>A: សេសមួយ គូមួយ</strong></p>
            <p>សេស $\\{1, 3\\}$, គូ $\\{2, 4\\}$។ $n(A) = 2 \\times 2 \\times 2 = 8$</p>
            <div class="formula-box">ដូចនេះ $P(A) = \\frac{8}{12} = \\frac{2}{3}$</div>

            <p><strong>B: ផលបូកជាពហុគុណនៃ 3</strong></p>
            <p>ករណីស្របគឺ $B = \\{(1,2), (2,1), (2,4), (4,2)\\} \\Rightarrow n(B) = 4$</p>
            <div class="formula-box">ដូចនេះ $P(B) = \\frac{4}{12} = \\frac{1}{3}$</div>

            <p><strong>C: លេខទាំងពីរជាពហុគុណនៃ 2</strong></p>
            <p>ទាំងពីរត្រូវតែជាលេខគូ $\\{2, 4\\}$។ ករណីស្របគឺ $C = \\{(2,4), (4,2)\\} \\Rightarrow n(C) = 2$</p>
            <div class="formula-box">ដូចនេះ $P(C) = \\frac{2}{12} = \\frac{1}{6}$</div>
          </div>
        </div>
      </section>

      <!-- Section IV -->
      <section class="question-section" style="animation-delay: 0.4s">
        <h2>លំហាត់ IV</h2>
        <div class="question-content">
          <p><strong>១.</strong> $f(x) = \\frac{3x^2 - 5x - 2}{x(x - 1)^2}$ ចំពោះ $x \\notin \\{0, 1\\}$។</p>
          <div class="sub-question">
            <p>ក. កំណត់ $a, b, c$ ដើម្បីឱ្យ $f(x) = \\frac{a}{x} + \\frac{b}{x - 1} + \\frac{c}{(x - 1)^2}$។</p>
            <p>ខ. គណនា $I = \\int_2^3 f(x)dx$។</p>
          </div>
          <p><strong>២.</strong> $(E): y'' - 3y' + 2y = 2x^2 - 6x + 2$។</p>
          <div class="sub-question">
            <p>ក. រកអនុគមន៍ដឺក្រេទីពីរ $g(x)$ ដែលជាចម្លើយមួយនៃ $(E)$។</p>
            <p>ខ. បង្ហាញថា $f(x)$ ជាចម្លើយនៃ $(E)$ លុះត្រាតែ $f(x) - g(x)$ ជាចម្លើយនៃ $(E'): y'' - 3y' + 2y = 0$។</p>
            <p>គ. ដោះស្រាយសមីការ $(E')$ រួចទាញរកចម្លើយទូទៅនៃសមីការ $(E)$។</p>
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
            <p><strong>១. ក. កំណត់ $a, b, c$៖</strong></p>
            <p>$\\frac{a}{x} + \\frac{b}{x - 1} + \\frac{c}{(x - 1)^2} = \\frac{(a + b)x^2 + (-2a - b + c)x + a}{x(x - 1)^2}$</p>
            <p>ផ្ទឹមមេគុណ៖ $a = -2, a + b = 3 \\Rightarrow b = 5, -2a - b + c = -5 \\Rightarrow c = -4$</p>
            
            <p><strong>ខ. គណនា $I$៖</strong></p>
            <p>$I = \\int_2^3 \\left(-\\frac{2}{x} + \\frac{5}{x - 1} - \\frac{4}{(x - 1)^2}\\right)dx = \\left[-2\\ln|x| + 5\\ln|x - 1| + \\frac{4}{x - 1}\\right]_2^3$</p>
            <p>$= \\left(-2\\ln 3 + 5\\ln 2 + 2\\right) - \\left(-2\\ln 2 + 5\\ln 1 + 4\\right) = 7\\ln 2 - 2\\ln 3 - 2 = \\ln\\frac{128}{9} - 2$</p>

            <p><strong>២. ក. រក $g(x)$៖</strong></p>
            <p>តាង $g(x) = ax^2 + bx + c \\Rightarrow g''(x) - 3g'(x) + 2g(x) = 2ax^2 + (-6a + 2b)x + (2a - 3b + 2c)$</p>
            <p>ផ្ទឹមមេគុណបាន $a = 1, b = 0, c = 0 \\Rightarrow g(x) = x^2$</p>

            <p><strong>ខ. បង្ហាញលក្ខខណ្ឌ៖</strong></p>
            <p>$(f - g)'' - 3(f - g)' + 2(f - g) = (f'' - 3f' + 2f) - (g'' - 3g' + 2g) = 0 \\Leftrightarrow f$ ជាចម្លើយនៃ $(E)$</p>

            <p><strong>គ. ដោះស្រាយ $(E')$ នឹងទាញរកចម្លើយទូទៅ៖</strong></p>
            <p>$(E'): y_h = Ae^x + Be^{2x}$</p>
            <p>ចម្លើយទូទៅ $(E): y = y_h + g(x) = Ae^x + Be^{2x} + x^2$</p>
          </div>
        </div>
      </section>

      <!-- Section V -->
      <section class="question-section" style="animation-delay: 0.5s">
        <h2>លំហាត់ V</h2>
        <div class="question-content">
          <p>គេឱ្យចំណុច $S(0, 0, 3)$ និងវ៉ិចទ័រ $\\vec{n} = \\vec{i} + \\vec{j} + \\vec{k}$។</p>
          <div class="sub-question">
            <p>ក. រកសមីការប៉ារ៉ាម៉ែត្របន្ទាត់ $(d)$ ដែលកាត់តាមចំណុច $S$ ហើយស្របនឹង $\\vec{n}$។</p>
            <p>ខ. យក $M(a, b, c)$។ រកទំនាក់ទំនង $a, b, c$ ដើម្បីឱ្យ $\\vec{SM}$ អរតូកូណាល់នឹង $\\vec{n}$។</p>
            <p>គ. គេឱ្យចំណុច $A(3, 0, 0)$ និង $B(0, 3, 0)$។ បង្ហាញថា $\\Delta ABS$ ជាត្រីកោណសម័ង្ស។</p>
            <p>ឃ. គណនា $\\vec{SA} \\times \\vec{SB}$ រួចទាញរកផ្ទៃក្រឡានៃត្រីកោណ $SAB$។</p>
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
            <p><strong>ក. សមីការ $(d)$៖</strong></p>
            <div class="formula-box">$(d): x = t, y = t, z = 3 + t \\quad (t \\in \\mathbb{R})$</div>
            
            <p><strong>ខ. ទំនាក់ទំនង $a, b, c$៖</strong></p>
            <p>$\\vec{SM} = (a, b, c - 3)$។ $\\vec{SM} \\perp \\vec{n} \\Rightarrow \\vec{SM} \\cdot \\vec{n} = 0 \\Rightarrow a + b + c - 3 = 0$</p>

            <p><strong>គ. $\\Delta ABS$ ជាត្រីកោណសម័ង្ស៖</strong></p>
            <p>$SA = \\sqrt{3^2 + 0 + (-3)^2} = 3\\sqrt{2}$</p>
            <p>$SB = \\sqrt{0 + 3^2 + (-3)^2} = 3\\sqrt{2}$</p>
            <p>$AB = \\sqrt{(-3)^2 + 3^2 + 0} = 3\\sqrt{2}$</p>
            <p>ដោយ $SA = SB = AB \\Rightarrow \\Delta ABS$ ជាត្រីកោណសម័ង្ស។</p>

            <p><strong>ឃ. $\\vec{SA} \\times \\vec{SB}$ និងផ្ទៃក្រឡា៖</strong></p>
            <p>$\\vec{SA} = (3, 0, -3), \\vec{SB} = (0, 3, -3)$</p>
            <p>$\\vec{SA} \\times \\vec{SB} = \\begin{vmatrix} \\vec{i} & \\vec{j} & \\vec{k} \\\\ 3 & 0 & -3 \\\\ 0 & 3 & -3 \\end{vmatrix} = 9\\vec{i} + 9\\vec{j} + 9\\vec{k}$</p>
            <p>$S_{SAB} = \\frac{1}{2}|\\vec{SA} \\times \\vec{SB}| = \\frac{1}{2}\\sqrt{81 + 81 + 81} = \\frac{9\\sqrt{3}}{2}$</p>
          </div>
        </div>
      </section>

      <!-- Section VI -->
      <section class="question-section" style="animation-delay: 0.6s">
        <h2>លំហាត់ VI</h2>
        <div class="question-content">
          <p><strong>១.</strong> $f(x) = -x^2 + 1 - \\ln x$ ដែល $x > 0$។</p>
          <div class="sub-question">
            <p>ក. គណនា $f'(x)$។ គណនា $f(1)$ រួចទាញរកសញ្ញានៃ $f(x)$។</p>
          </div>
          <p><strong>២.</strong> $g(x) = -x + 1 + \\frac{\\ln x}{x}$។</p>
          <div class="sub-question">
            <p>ក. គណនា $g'(x)$ រួចបង្ហាញថាមានសញ្ញាដូច $f(x)$។</p>
            <p>ខ. គណនាលីមីត និងសង់តារាងអថេរភាពនៃ $g$។</p>
            <p>គ. រកសមីការអាស៊ីមតូតទ្រេត $(d)$ រួចសិក្សាទីតាំងធៀប។</p>
            <p>ឃ. សង់ក្រាប $(C)$ និងបន្ទាត់ $(d)$។</p>
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
            <p><strong>១. ក. $f'(x)$ និងសញ្ញា $f(x)$៖</strong></p>
            <p>$f'(x) = -2x - \\frac{1}{x} = \\frac{-2x^2 - 1}{x} < 0$ គ្រប់ $x > 0$</p>
            <p>$f(1) = 0$។ ដូច្នេះ $x \\in (0, 1), f(x) > 0$ និង $x \\in (1, +\\infty), f(x) < 0$។</p>
            
            <p><strong>២. ក. $g'(x)$ និងសញ្ញា៖</strong></p>
            <p>$g'(x) = -1 + \\frac{1 - \\ln x}{x^2} = \\frac{-x^2 + 1 - \\ln x}{x^2} = \\frac{f(x)}{x^2}$</p>
            <p>មានសញ្ញាដូច $f(x)$ ព្រោះ $x^2 > 0$។</p>

            <p><strong>ខ. លីមីត និងតារាងអថេរភាព៖</strong></p>
            <p>$\\lim_{x \\to 0^+} g(x) = -\\infty$, $\\lim_{x \\to +\\infty} g(x) = -\\infty$</p>
            <p>អតិបរមាត្រង់ $x = 1, y = 0$។</p>

            <p><strong>គ. អាស៊ីមតូតទ្រេត និងទីតាំងធៀប៖</strong></p>
            <p>$\\lim_{x \\to +\\infty} \\left[g(x) - (-x + 1)\\right] = \\lim_{x \\to +\\infty} \\frac{\\ln x}{x} = 0 \\Rightarrow (d): y = -x + 1$ ជាអាស៊ីមតូតទ្រេត។</p>
            <p>ទីតាំងធៀបអាស្រ័យនឹង $\\ln x$៖ $x \\in (0, 1)$ ក្រោម, $x = 1$ ប្រសព្វ, $x > 1$ លើ។</p>
          </div>
        </div>
      </section>

      <!-- Section VII -->
      <section class="question-section" style="animation-delay: 0.7s; border-bottom: none">
        <h2>លំហាត់ VII</h2>
        <div class="question-content">
          <p>គេឱ្យសមីការអ៊ីពែរបូល $-x^2 + 4y^2 - 2x - 16y + 11 = 0$។</p>
          <div class="sub-question">
            <p>ក. រกกូអរដោនេផ្ចិត កំពូល កំណុំ និងសមីការអាស៊ីមតូត។</p>
            <p>ខ. សង់អ៊ីពែរបូល។</p>
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
            <p><strong>ក. សមីការស្តង់ដា និងធាតុ៖</strong></p>
            <p>$- (x^2 + 2x) + 4(y^2 - 4y) = -11 \\Rightarrow - (x + 1)^2 + 1 + 4(y - 2)^2 - 16 = -11$</p>
            <p>$\\Rightarrow 4(y - 2)^2 - (x + 1)^2 = 4 \\Rightarrow \\frac{(y - 2)^2}{1^2} - \\frac{(x + 1)^2}{2^2} = 1$</p>
            <p>$h = -1, k = 2, a = 1, b = 2$។ $c = \\sqrt{1 + 4} = \\sqrt{5}$</p>
            <ul>
              <li>ផ្ចិត $I(-1, 2)$</li>
              <li>កំពូល $V(-1, 2 \\pm 1) \\Rightarrow V_1(-1, 1), V_2(-1, 3)$</li>
              <li>កំណុំ $F(-1, 2 \\pm \\sqrt{5}) \\Rightarrow F_1(-1, 2 - \\sqrt{5}), F_2(-1, 2 + \\sqrt{5})$</li>
              <li>អាស៊ីមតូត $y = 2 \\pm \\frac{1}{2}(x + 1)$</li>
            </ul>
          </div>
        </div>
      </section>
`;

fs.writeFileSync(path + 'kanit-8.html', buildHtml(8, '០៨', exam8Sections));
fs.writeFileSync(path + 'kanit-9.html', buildHtml(9, '០៩', exam9Sections));
