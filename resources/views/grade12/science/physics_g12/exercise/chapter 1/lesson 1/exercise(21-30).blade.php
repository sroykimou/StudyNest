<!doctype html>
<html lang="km">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>លំហាត់អនុវត្ត ២១–៣០ | StudyNest Physics G12</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@300;400;600;700&family=DM+Serif+Display&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <script>
      MathJax = {
        tex: { inlineMath: [["\\(", "\\)"]], displayMath: [["\\[", "\\]"]] },
        options: { skipHtmlTags: ["script", "noscript", "style", "textarea"] },
      };
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/3.2.2/es5/tex-chtml.min.js"></script>

    <style>
      :root {
        --dark: #0f172a;
        --navy: #1e3a5f;
        --blue: #2563eb;
        --accent: #f59e0b;
        --accent2: #10b981;
        --surface: #ffffff;
        --muted: #64748b;
        --border: #e2e8f0;
        --bg: #f8fafc;
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        background: var(--bg);
        color: #1e293b;
        font-family: "Kantumruy Pro", system-ui, sans-serif;
        line-height: 1.92;
        min-height: 100vh;
      }

      nav {
        background: var(--dark);
        padding: 0 40px;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: sticky;
        top: 0;
        z-index: 100;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.12);
      }

      .nav-brand {
        font-family: "DM Serif Display", serif;
        color: white;
        font-size: 1.45rem;
      }
      .nav-brand span {
        color: var(--accent);
      }

      .nav-tag {
        background: rgba(59, 130, 246, 0.25);
        border: 1px solid #3b82f6;
        color: #bae6fd;
        padding: 6px 18px;
        border-radius: 9999px;
        font-weight: 700;
        font-size: 0.85rem;
      }

      header {
        background: linear-gradient(
          135deg,
          var(--dark) 0%,
          var(--navy) 55%,
          #1e40af 100%
        );
        padding: 82px 40px 95px;
        position: relative;
        overflow: hidden;
        color: white;
      }

      header::after {
        content: "";
        position: absolute;
        bottom: -5px;
        left: 0;
        right: 0;
        height: 65px;
        background: var(--bg);
        clip-path: ellipse(62% 100% at 50% 100%);
      }

      .header-inner {
        max-width: 860px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
      }

      .header-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: rgba(245, 158, 11, 0.2);
        border: 1px solid rgba(245, 158, 11, 0.5);
        color: var(--accent);
        padding: 8px 20px;
        border-radius: 9999px;
        font-weight: 700;
        margin-bottom: 24px;
      }

      header h1 {
        font-family: "DM Serif Display", serif;
        font-size: 2.8rem;
        line-height: 1.2;
      }

      .container {
        max-width: 860px;
        margin: 0 auto;
        padding: 52px 24px 110px;
      }

      .section-head {
        display: flex;
        align-items: center;
        gap: 16px;
        margin: 60px 0 32px;
      }

      .section-head h2 {
        font-size: 0.98rem;
        font-weight: 700;
        color: var(--muted);
        text-transform: uppercase;
        letter-spacing: 2px;
      }

      .section-head-line {
        flex: 1;
        height: 1px;
        background: var(--border);
      }

      .ex-card {
        background: white;
        border-radius: 20px;
        border: 1px solid var(--border);
        border-left: 6px solid var(--blue);
        margin-bottom: 28px;
        box-shadow: 0 8px 25px rgba(15, 23, 42, 0.08);
        transition: all 0.3s ease;
      }

      .ex-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 22px 45px rgba(37, 99, 235, 0.16);
      }

      /* Fixed color sequence: Blue, Green, Yellow */
      .ex-card:nth-child(3n - 1) {
        border-left-color: var(--blue);
      }
      .ex-card:nth-child(3n) {
        border-left-color: var(--accent2);
      }
      .ex-card:nth-child(3n + 1) {
        border-left-color: var(--accent);
      }

      .ex-head {
        padding: 20px 28px;
        border-bottom: 1px solid var(--border);
        display: flex;
        align-items: center;
        gap: 16px;
        background: #f8fbff;
      }

      .ex-badge {
        width: 44px;
        height: 44px;
        background: var(--blue);
        color: white;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1.1rem;
        flex-shrink: 0;
      }

      .ex-card:nth-child(3n - 1) .ex-badge {
        background: var(--blue);
      }
      .ex-card:nth-child(3n) .ex-badge {
        background: var(--accent2);
      }
      .ex-card:nth-child(3n + 1) .ex-badge {
        background: var(--accent);
      }

      .ex-title {
        font-size: 1.12rem;
        font-weight: 700;
        color: var(--dark);
      }

      .ex-body {
        padding: 28px;
        font-size: 1.03rem;
      }

      .given {
        background: #dbeafe;
        color: #1e40af;
        font-weight: 700;
        padding: 3px 9px;
        border-radius: 6px;
      }

      .ex-card:nth-child(3n - 1) .given {
        background: #dbeafe;
        color: #1e40af;
      }
      .ex-card:nth-child(3n) .given {
        background: #d1fae5;
        color: #065f46;
      }
      .ex-card:nth-child(3n + 1) .given {
        background: #fef3c7;
        color: #92400e;
      }

      .ex-find {
        margin-top: 18px;
        padding-top: 16px;
        border-top: 1px dashed var(--border);
        font-weight: 600;
        color: var(--muted);
        display: grid;
        grid-template-columns: 28px 1fr;
        align-items: start;
        line-height: 1.8;
      }

      .ex-find::before {
        content: "➤";
        color: var(--blue);
        font-size: 1.1rem;
        display: block;
      }

      details.ex-ans {
        margin-top: 15px;
        background: #f8fafc;
        border: 1px solid var(--border);
        border-radius: 12px;
        padding: 10px 18px;
        cursor: pointer;
        transition: 0.3s ease;
      }
      details.ex-ans[open] {
        background: #f8fafc;
        border-color: #cbd5e1;
      }
      details.ex-ans summary {
        font-weight: 700;
        color: var(--blue);
        outline: none;
        user-select: none;
        font-size: 0.95rem;
      }

      /* Premium Khmer G12 Solution Sheet Styling */
      .sol-block {
        margin-top: 12px;
        padding-top: 16px;
        border-top: 1px dashed var(--border);
        font-size: 0.95rem;
        line-height: 2;
        color: #334155;
      }
      .sol-title {
        font-weight: 700;
        color: var(--blue);
        margin-bottom: 8px;
        font-size: 1rem;
      }
      .sol-step {
        display: grid;
        grid-template-columns: 100px 1fr;
        margin-bottom: 8px;
        align-items: start;
      }
      .sol-label {
        font-weight: 600;
        color: var(--muted);
      }
      .sol-math {
        font-family: inherit;
      }
      .sol-box {
        display: inline-block;
        border: 2px solid var(--accent2);
        padding: 6px 16px;
        border-radius: 8px;
        font-weight: 700;
        background: #f0fdf4;
        color: #166534;
        margin-top: 12px;
        box-shadow: 0 4px 10px rgba(16, 185, 129, 0.08);
      }

      @media (max-width: 700px) {
        header h1 {
          font-size: 2.3rem;
        }
        .container {
          padding: 40px 16px;
        }
        .ex-head,
        .ex-body {
          padding: 20px;
        }
        .sol-step {
          grid-template-columns: 1fr;
          gap: 4px;
        }
      }
    </style>
      <link rel="stylesheet" href="{{ asset('assets/professional.css') }}">
    <!-- Main JS & Auth Guard -->
    <script src="{{ asset('assets/main.js') }}"></script>
    <script>
      StudyNest.checkAccess(3);
    </script>
  </head>
  <body>
    <nav>
      <a href="lesson 1_home" style="color: white; text-decoration: none; display: flex; align-items: center; gap: 8px;"><i class="fas fa-arrow-left"></i> ត្រឡប់ក្រោយ</a>
      <div class="nav-brand">Study<span>Nest</span> Pro</div>
      <span class="nav-tag">រូបវិទ្យា ថ្នាក់ទី ១២</span>
    </nav>

    <header>
      <div class="header-inner">
        <div class="header-eyebrow">⚛ ទ្រឹស្តីបទសុីនេទិចនៃឧស្ម័ន</div>
        <h1>លំហាត់<em>អនុវត្ត</em> ២១–៣០</h1>
        <p>លំហាត់ជ្រើសរើសសំខាន់ៗ ត្រៀមប្រឡងសញ្ញាបត្រមធ្យមសិក្សាទុតិយភូមិ</p>
      </div>
    </header>

    <div class="container">
      <div class="section-head">
        <h2>លំហាត់ទាំងអស់</h2>
        <div class="section-head-line"></div>
      </div>

      <!-- 21 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">21</div>
          <span class="ex-title">លំហាត់អនុវត្ត២១</span>
        </div>
        <div class="ex-body">
          <p>
            ក្នុងធុងបិទជិតមួយដឧស្ម័ន
            <span class="given">0.25 mol</span> មានម៉ាសសរុប
            <span class="given">7 g</span> ។
          </p>
          <p>
            គេដឹងថា ចំនួនអាវ៉ូកាដ្រូ \(N_A = 6.02 \times 10^{23}\) ម៉ូលេគុល/mol
            ។
          </p>
          <div class="ex-find"><span>ក. គណនាចំនួនម៉ូលេគុលសរុបក្នុងធុងនេះ ។</span></div>
          <div
            class="ex-find"
            style="margin-top: 4px; border-top: none; padding-top: 0"
          >
            <span>ខ. តើឧស្ម័នក្នុងធុងជាឧស្ម័នអ្វី ?</span>
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គណនាចំនួនម៉ូលេគុលសរុបក្នុងធុង (\(N\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( n = \dfrac{N}{N_A} \text{ នាំឲ្យ } N = n \cdot N_A \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( n = 0.25 \text{ mol} \)<br>
                  \( N_A = 6.02 \times 10^{23} \text{ ម៉ូលេគុល/mol} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( N = 0.25 \times 6.02 \times 10^{23} = 1.505 \times 10^{23} \text{ ម៉ូលេគុល} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ចំនួនម៉ូលេគុលសរុបគឺ \( N = 1.505 \times 10^{23} \text{ ម៉ូលេគុល} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">ខ. តើឧស្ម័នក្នុងធុងជាឧស្ម័នអ្វី ?</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( M = \dfrac{m}{n} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( m = 7 \text{ g} \)<br>
                  \( n = 0.25 \text{ mol} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( M = \dfrac{7}{0.25} = 28 \text{ g/mol} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ឧស្ម័នដែលមានម៉ាសម៉ូល \( M = 28 \text{ g/mol} \) គឺឧស្ម័នអាសូត (\(N_2\))
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 22 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">22</div>
          <span class="ex-title">លំហាត់អនុវត្ត២២</span>
        </div>
        <div class="ex-body">
          <p>
            ឧស្ម័នបរិសុទ្ធមួយមានមាឌ
            <span class="given">600 cm³</span> ស្ថិតក្រោមសម្ពាធ
            <span class="given">16.62 atm</span> នៅសីតុណ្ហភាព
            <span class="given">27°C</span> ។
          </p>
          <div class="ex-find"><span>ក. គណនាចំនួនម៉ូលនៃឧស្ម័ន ។</span></div>
          <div
            class="ex-find"
            style="margin-top: 4px; border-top: none; padding-top: 0"
          >
            <span>ខ. គណនាម៉ាសសរុបនៃឧស្ម័ន ។បើឧស្ម័នមានម៉ាសម៉ូល \(M = 4\) g/mol ។</span>
          </div>
          <div
            class="ex-find"
            style="margin-top: 4px; border-top: none; padding-top: 0"
          >
            <span>គ. បើឧស្ម័នមាន \(2 \times 10^{20}\) ម៉ូលេគុល
            ។គណនាម៉ាសម៉ូលេគុលនីមួយៗនៃឧស្ម័ន ។</span>
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គណនាចំនួនម៉ូលនៃឧស្ម័ន (\(n\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( PV = nRT \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">នាំឱ្យ :</span>
                <span class="sol-math">\( n = \dfrac{PV}{RT} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P \approx 16.62 \times 10^5 \text{ Pa} \) (យក \( 1 \text{ atm} \approx 10^5 \text{ Pa} \))<br>
                  \( V = 600 \text{ cm}^3 = 6 \times 10^{-4} \text{ m}^3 \)<br>
                  \( T = 27 + 273 = 300 \text{ K} \)<br>
                  \( R = 8.31 \text{ J/(mol}\cdot\text{K)} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( n = \dfrac{16.62 \times 10^5 \times 6 \times 10^{-4}}{8.31 \times 300} = 0.4 \text{ mol} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ចំនួនម៉ូលនៃឧស្ម័នគឺ \( n = 0.4 \text{ mol} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">ខ. គណនាម៉ាសសរុបនៃឧស្ម័ន (\(m\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( n = \dfrac{m}{M} \text{ នាំឲ្យ } m = n \cdot M \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( n = 0.4 \text{ mol} \)<br>
                  \( M = 4 \text{ g/mol} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( m = 0.4 \times 4 = 1.6 \text{ g} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ម៉ាសសរុបនៃឧស្ម័នគឺ \( m = 1.6 \text{ g} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">គ. គណនាម៉ាសម៉ូលេគុលនីមួយៗនៃឧស្ម័ន (\(m_0\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( m_0 = \dfrac{m}{N} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( m = 1.6 \text{ g} = 1.6 \times 10^{-3} \text{ kg} \)<br>
                  \( N = 2 \times 10^{20} \text{ ម៉ូលេគុល} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( m_0 = \dfrac{1.6 \times 10^{-3}}{2 \times 10^{20}} = 8 \times 10^{-24} \text{ kg} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ម៉ាសម៉ូលេគុលនីមួយៗគឺ \( m_0 = 8 \times 10^{-24} \text{ kg} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 23 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">23</div>
          <span class="ex-title">លំហាត់អនុវត្ត២៣</span>
        </div>
        <div class="ex-body">
          <p>
            ឧស្ម័នបរិសុទ្ធមួយមានសម្ពាធ
            <span class="given">1.52 MPa</span> នៅសីតុណ្ហភាព
            <span class="given">25°C</span> និងមានមាឌ
            <span class="given">10 L</span> ។
          </p>
          <div class="ex-find"><span>ក. តើឧស្ម័ននោះចំនួនម៉ូលប៉ុន្មាន ?</span></div>
          <div
            class="ex-find"
            style="margin-top: 4px; border-top: none; padding-top: 0"
          >
            <span>ខ. គណនាម៉ាសសរុបនៃឧស្ម័ន :</span>
          </div>
          <div
            class="ex-find"
            style="
              margin-top: 2px;
              border-top: none;
              padding-top: 0;
              padding-left: 20px;
            "
          >
            <span>① បើជាម៉ូលេគុលអ៊ីដ្រូសែន \((H_2)\) ។</span>
          </div>
          <div
            class="ex-find"
            style="
              margin-top: 2px;
              border-top: none;
              padding-top: 0;
              padding-left: 20px;
            "
          >
            <span>② បើជាម៉ូលេគុលអុកស៊ីសែន \((O_2)\) ។</span>
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គណនាចំនួនម៉ូលនៃឧស្ម័ន (\(n\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( PV = nRT \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">នាំឱ្យ :</span>
                <span class="sol-math">\( n = \dfrac{PV}{RT} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P = 1.52 \text{ MPa} = 1.52 \times 10^6 \text{ Pa} \)<br>
                  \( V = 10 \text{ L} = 10 \times 10^{-3} \text{ m}^3 = 10^{-2} \text{ m}^3 \)<br>
                  \( T = 25 + 273 = 298 \text{ K} \)<br>
                  \( R = 8.31 \text{ J/(mol}\cdot\text{K)} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( n = \dfrac{1.52 \times 10^6 \times 10^{-2}}{8.31 \times 298} \approx 6.14 \text{ mol} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ចំនួនម៉ូលគឺ \( n \approx 6.14 \text{ mol} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">ខ. គណនាម៉ាសសរុបនៃឧស្ម័ន (\(m\))</div>
              
              <div class="sol-title" style="font-size: 0.9rem; color: #475569; margin-left: 10px;">① បើជាម៉ូលេគុលអ៊ីដ្រូសែន (\(H_2\)) :</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( n = \dfrac{m}{M} \text{ នាំឲ្យ } m = n \cdot M \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( n \approx 6.14 \text{ mol} \)<br>
                  \( M = 2 \text{ g/mol} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( m = 6.14 \times 2 = 12.28 \text{ g} \)</span>
              </div>
              
              <div class="sol-title" style="font-size: 0.9rem; color: #475569; margin-left: 10px; margin-top: 10px;">② បើជាម៉ូលេគុលអុកស៊ីសែន (\(O_2\)) :</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( n = \dfrac{m}{M} \text{ នាំឲ្យ } m = n \cdot M \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( n \approx 6.14 \text{ mol} \)<br>
                  \( M = 32 \text{ g/mol} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( m = 6.14 \times 32 = 196.48 \text{ g} \)</span>
              </div>
              
              <div class="sol-box" style="margin-top: 12px;">
                ដូចនេះ៖ ម៉ាសសរុបគឺ ① \( 12.28 \text{ g} \) និង ② \( 196.48 \text{ g} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 24 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">24</div>
          <span class="ex-title">លំហាត់អនុវត្ត ២៤</span>
        </div>
        <div class="ex-body">
          <p>
            ធុងមួយមានផ្ទុកអេល្យូម <span class="given">(He)</span> ចំនួន
            <span class="given">2 mol</span> នៅសីតុណ្ហភាព
            <span class="given">27°C</span>។ គេសន្មត់ថាអេល្យូមជាឧស្ម័នបរិសុទ្ធ។
          </p>
          <p>
            គេផ្តល់ឲ្យ \( R = 8.31 \) J/mol·K និង \( k_B = 1.38 \times 10^{-23}
            \) J/K។
          </p>
          <div class="ex-find">
            <span>ក. គណនាថាមពលសុីនេទិចមធ្យមរបស់ម៉ូលេគុលឧស្ម័ននីមួយៗ។</span>
          </div>
          <div class="ex-find">
            <span>ខ. គណនាថាមពលសុីនេទិចសរុបទាំងអស់របស់ម៉ូលេគុល។</span>
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គណនាថាមពលសុីនេទិចមធ្យមរបស់ម៉ូលេគុលនីមួយៗ (\(K_{\text{av}}\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( K_{\text{av}} = \dfrac{3}{2} k_B T \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( k_B = 1.38 \times 10^{-23} \text{ J/K} \)<br>
                  \( T = 27 + 273 = 300 \text{ K} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( K_{\text{av}} = 1.5 \times 1.38 \times 10^{-23} \times 300 = 6.21 \times 10^{-21} \text{ J} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ថាមពលសុីនេទិចមធ្យមគឺ \( K_{\text{av}} = 6.21 \times 10^{-21} \text{ J} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">ខ. គណនាថាមពលសុីនេទិចសរុបទាំងអស់ (\(K_{\text{tot}}\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( K_{\text{tot}} = \dfrac{3}{2} n R T \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( n = 2 \text{ mol} \)<br>
                  \( R = 8.31 \text{ J/(mol}\cdot\text{K)} \)<br>
                  \( T = 300 \text{ K} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( K_{\text{tot}} = 1.5 \times 2 \times 8.31 \times 300 = 7479 \text{ J} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ថាមពលសុីនេទិចសរុបគឺ \( K_{\text{tot}} = 7479 \text{ J} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 25 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">25</div>
          <span class="ex-title">លំហាត់អនុវត្ត ២៥</span>
        </div>
        <div class="ex-body">
          <p>
            ក្នុងធុងមួយមានមាឌ
            <span class="given">200 ml</span> មានចំនួនម៉ូលេគុលសរុប
            <span class="given">\(5 \times 10^{21}\)</span> ហើយស្ថិតក្រោមសម្ពាធ
            <span class="given">250 kPa</span>។
          </p>
          <p>
            គេផ្តល់ឲ្យ \( k_B = 1.38 \times 10^{-23} \) J/K និង \( N_A = 6.02
            \times 10^{23} \) ម៉ូលេគុល/mol។
          </p>
          <div class="ex-find">
            <span>ក. គណនាថាមពលសុីនេទិចមធ្យមរបស់ភាគល្អិតនីមួយៗ។</span>
          </div>
          <div class="ex-find"><span>ខ. គណនាចំនួនម៉ូលនៃឧស្ម័ននៅក្នុងធុង។</span></div>
          <div class="ex-find"><span>គ. គណនាសីតុណ្ហភាពនៃឧស្ម័ន។</span></div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គណនាថាមពលសុីនេទិចមធ្យម (\(K_{\text{av}}\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( K_{\text{av}} = \dfrac{3PV}{2N} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P = 250 \text{ kPa} = 2.5 \times 10^5 \text{ Pa} \)<br>
                  \( V = 200 \text{ ml} = 2 \times 10^{-4} \text{ m}^3 \)<br>
                  \( N = 5 \times 10^{21} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( K_{\text{av}} = \dfrac{3 \times 2.5 \times 10^5 \times 2 \times 10^{-4}}{2 \times 5 \times 10^{21}} = 1.5 \times 10^{-20} \text{ J} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ថាមពលសុីនេទិចមធ្យមគឺ \( K_{\text{av}} = 1.5 \times 10^{-20} \text{ J} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">ខ. គណនាចំនួនម៉ូលនៃឧស្ម័ន (\(n\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( n = \dfrac{N}{N_A} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( N = 5 \times 10^{21} \)<br>
                  \( N_A = 6.02 \times 10^{23} \text{ mol}^{-1} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( n = \dfrac{5 \times 10^{21}}{6.02 \times 10^{23}} \approx 0.0083 \text{ mol} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ចំនួនម៉ូលគឺ \( n \approx 0.0083 \text{ mol} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">គ. គណនាសីតុណ្ហភាពនៃឧស្ម័ន (\(T\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( T = \dfrac{2 K_{\text{av}}}{3 k_B} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( K_{\text{av}} = 1.5 \times 10^{-20} \text{ J} \)<br>
                  \( k_B = 1.38 \times 10^{-23} \text{ J/K} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( T = \dfrac{2 \times 1.5 \times 10^{-20}}{3 \times 1.38 \times 10^{-23}} \approx 724.64 \text{ K} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ សីតុណ្ហភាពគឺ \( T \approx 724.64 \text{ K} \quad (t \approx 451.64^\circ\text{C}) \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 26 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">26</div>
          <span class="ex-title">លំហាត់អនុវត្ត ២៦</span>
        </div>
        <div class="ex-body">
          <p>
            <span class="given">2 mol</span> នៃឧស្ម័នអុកស៊ីសែន មានមាឌ
            <span class="given">5 L</span> ក្រោមសម្ពាធ
            <span class="given">8 atm</span>។
          </p>
          <div class="ex-find">
            <span>គណនាថាមពលសុីនេទិចមធ្យមនៃម៉ូលេគុលឧស្ម័ននីមួយៗ។</span>
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">គណនាថាមពលសុីនេទិចមធ្យម (\(K_{\text{av}}\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( K_{\text{av}} = \dfrac{3PV}{2 n N_A} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P = 8 \text{ atm} = 8 \times 1.013 \times 10^5 \text{ Pa} = 8.104 \times 10^5 \text{ Pa} \)<br>
                  \( V = 5 \text{ L} = 5 \times 10^{-3} \text{ m}^3 \)<br>
                  \( n = 2 \text{ mol} \)<br>
                  \( N_A = 6.02 \times 10^{23} \text{ mol}^{-1} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( K_{\text{av}} = \dfrac{3 \times 8.104 \times 10^5 \times 5 \times 10^{-3}}{2 \times 2 \times 6.02 \times 10^{23}} \approx 5.05 \times 10^{-21} \text{ J} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ថាមពលសុីនេទិចមធ្យមគឺ \( K_{\text{av}} \approx 5.05 \times 10^{-21} \text{ J} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 27 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">27</div>
          <span class="ex-title">លំហាត់អនុវត្ត ២៧</span>
        </div>
        <div class="ex-body">
          <p>
            គេមានម៉ូលេគុលអុកសុីសែនមួយនៅក្នុងខ្យល់ស្ថិតក្នុងបន្ទប់ដែលមានសីតុណ្ហភាព
            <span class="given">27°C</span>គិតជាអេឡិចត្រុងវ៉ុល ។
          </p>
          <p>
            គេឲ្យ 1eV= \( 1.6 \times 10^{-19} \) J​ និងថេរប៊ុលស្មាន់ \( k_B =
            1.38 \times 10^{-23} \) J/K ។
          </p>
          <div class="ex-find">
            <span>គណនាតម្លៃមធ្យមនៃថាមពលសុីនេទិចរបស់ឧស្ម័ននីមួយៗ។</span>
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">គណនាតម្លៃមធ្យមនៃថាមពលសុីនេទិច (\(K_{\text{av}}\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( K_{\text{av}} = \dfrac{3}{2} k_B T \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( T = 27 + 273 = 300 \text{ K} \)<br>
                  \( k_B = 1.38 \times 10^{-23} \text{ J/K} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( K_{\text{av}} = 1.5 \times 1.38 \times 10^{-23} \times 300 = 6.21 \times 10^{-21} \text{ J} \)<br>
                  គិតជា \( \text{eV} \): \( K_{\text{av}} = \dfrac{6.21 \times 10^{-21}}{1.6 \times 10^{-19}} \approx 0.0388 \text{ eV} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ថាមពលសុីនេទិចមធ្យមគឺ \( K_{\text{av}} \approx 0.0388 \text{ eV} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 28 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">28</div>
          <span class="ex-title">លំហាត់អនុវត្ត ២៨</span>
        </div>
        <div class="ex-body">
          <p>
            បាឡុងមួយមានមាឌ
            <span class="given">V = 4000 cm³</span>
            ដែលក្នុងនោះផ្ទុកឧស្ម័នអេល្យូមក្រោមសម្ពាធ
            <span class="given">1.2 atm</span>។ បើវាមានថាមពលសុីនេទិចមធ្យម<span
              class="given"
              >\( K_{\text{av}} = 3.6 \times 10^{-22} \) J​
            </span>
            ។
          </p>

          <div class="ex-find"><span>គណនាចំនួនម៉ូលនៃឧស្ម័ននអេល្យូមក្នុងបាឡុង ។</span></div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">គណនាចំនួនម៉ូលនៃឧស្ម័ន (\(n\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( P V = \dfrac{2}{3} N K_{\text{av}} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">តែ :</span>
                <span class="sol-math">\( N = n \cdot N_A \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">នាំឱ្យ :</span>
                <span class="sol-math">\( P V = \dfrac{2}{3} n N_A K_{\text{av}} \Rightarrow n = \dfrac{3PV}{2 N_A K_{\text{av}}} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P = 1.2 \text{ atm} = 1.2 \times 1.013 \times 10^5 \text{ Pa} = 1.2156 \times 10^5 \text{ Pa} \)<br>
                  \( V = 4000 \text{ cm}^3 = 4 \times 10^{-3} \text{ m}^3 \)<br>
                  \( K_{\text{av}} = 3.6 \times 10^{-22} \text{ J} \)<br>
                  \( N_A = 6.02 \times 10^{23} \text{ mol}^{-1} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( n = \dfrac{3 \times 1.2156 \times 10^5 \times 4 \times 10^{-3}}{2 \times 6.02 \times 10^{23} \times 3.6 \times 10^{-22}} \approx 3.37 \text{ mol} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ចំនួនម៉ូលនៃឧស្ម័នគឺ \( n \approx 3.37 \text{ mol} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 29 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">29</div>
          <span class="ex-title">លំហាត់អនុវត្ត ២៩</span>
        </div>
        <div class="ex-body">
          <p>
            ធុងមួយមានផ្ទុកអេល្យូម <span class="given">He</span> ចំនួន
            <span class="given">\( 0.5 \) mol</span> នៅសីតុណ្ហភាព
            <span class="given">27°C</span>។ គេសន្មត់ថាអេល្យូមជាឧស្ម័នបរិសុទ្ធ។

            <span class="given">\( T = 27 \) °C</span>។
          </p>
          <p>
            គេឲ្យ \( R = 8.31 \) J/mol·K ; \( k_B = 1.38 \times 10^{-23} \) J/K
            ។​
          </p>
          <div class="ex-find">
            <span>ក. គណនាថាមពលសុីនេទិចមធ្យមរបស់ម៉ូលេគុលឧស្ម័ននីមួយៗ។</span>
          </div>
          <div
            class="ex-find"
            style="margin-top: 4px; border-top: none; padding-top: 0"
          >
            <span>ខ. គណនាថាមពលសុីនេទិចសរុបទាំងអស់របស់ម៉ូលេគុលឧស្ម័ន។</span>
          </div>

          <div
            class="ex-find"
            style="margin-top: 4px; border-top: none; padding-top: 0"
          >
            <span>គ. គណនាសម្ពាធឧស្ម័នអេល្យូមក្នុងធុង ប្រសិនបើធុងមានមាឌ \( 4.53 \times
            10^{-3} \) m³ ។</span>
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គណនាថាមពលសុីនេទិចមធ្យម (\(K_{\text{av}}\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( K_{\text{av}} = \dfrac{3}{2} k_B T \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( T = 27 + 273 = 300 \text{ K} \)<br>
                  \( k_B = 1.38 \times 10^{-23} \text{ J/K} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( K_{\text{av}} = 1.5 \times 1.38 \times 10^{-23} \times 300 = 6.21 \times 10^{-21} \text{ J} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ថាមពលសុីនេទិចមធ្យមគឺ \( K_{\text{av}} = 6.21 \times 10^{-21} \text{ J} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">ខ. គណនាថាមពលសុីនេទិចសរុប (\(K_{\text{tot}}\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( K_{\text{tot}} = \dfrac{3}{2} n R T \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( n = 0.5 \text{ mol} \)<br>
                  \( R = 8.31 \text{ J/(mol}\cdot\text{K)} \)<br>
                  \( T = 300 \text{ K} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( K_{\text{tot}} = 1.5 \times 0.5 \times 8.31 \times 300 = 1869.75 \text{ J} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ថាមពលសុីនេទិចសរុបគឺ \( K_{\text{tot}} = 1869.75 \text{ J} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">គ. គណនាសម្ពាធឧស្ម័ន (\(P\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( PV = nRT \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">នាំឱ្យ :</span>
                <span class="sol-math">\( P = \dfrac{nRT}{V} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( n = 0.5 \text{ mol} \)<br>
                  \( R = 8.31 \text{ J/(mol}\cdot\text{K)} \)<br>
                  \( T = 300 \text{ K} \)<br>
                  \( V = 4.53 \times 10^{-3} \text{ m}^3 \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( P = \dfrac{0.5 \times 8.31 \times 300}{4.53 \times 10^{-3}} \approx 2.75 \times 10^5 \text{ Pa} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ សម្ពាធឧស្ម័នគឺ \( P \approx 2.75 \times 10^5 \text{ Pa} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 30 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">30</div>
          <span class="ex-title">លំហាត់អនុវត្ត ៣០</span>
        </div>
        <div class="ex-body">
          <p>
            បាឡុងមួយមានមាឌ
            <span class="given">\( V = 0.30 \) m³</span>និងចំនួនម៉ូល
            <span class="given">\( n = 2 \) mol</span> នៅសីតុណ្ហភាព
            <span class="given">\( T = 20 \) °C</span>។
            សន្មត់ថាឧស្ម័នជាឧស្ម័នបរិសុទ្ធ។
          </p>

          <div class="ex-find">
            <span>ក. គណនាថាមពលសុីនេទិចសរុបទាំងអស់របស់ម៉ូលេគុលឧស្ម័ន។</span>
          </div>
          <div class="ex-find">
            <span>ខ. គណនាថាមពលសុីនេទិចមធ្យមរបស់ម៉ូលេគុលឧស្ម័ននីមួយៗ។</span>
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គណនាថាមពលសុីនេទិចសរុប (\(K_{\text{tot}}\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( K_{\text{tot}} = \dfrac{3}{2} n R T \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( n = 2 \text{ mol} \)<br>
                  \( R = 8.31 \text{ J/(mol}\cdot\text{K)} \)<br>
                  \( T = 20 + 273 = 293 \text{ K} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( K_{\text{tot}} = 1.5 \times 2 \times 8.31 \times 293 = 7304.49 \text{ J} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ថាមពលសុីនេទិចសរុបគឺ \( K_{\text{tot}} = 7304.49 \text{ J} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">ខ. គណនាថាមពលសុីនេទិចមធ្យម (\(K_{\text{av}}\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( K_{\text{av}} = \dfrac{3}{2} k_B T \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( T = 293 \text{ K} \)<br>
                  \( k_B = 1.38 \times 10^{-23} \text{ J/K} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( K_{\text{av}} = 1.5 \times 1.38 \times 10^{-23} \times 293 \approx 6.06 \times 10^{-21} \text{ J} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ថាមពលសុីនេទិចមធ្យមគឺ \( K_{\text{av}} \approx 6.06 \times 10^{-21} \text{ J} \)
              </div>
            </div>
          </details>
        </div>
      </div>
    </div>
  </body>
</html>
