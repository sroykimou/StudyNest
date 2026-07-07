<!doctype html>
<html lang="km">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>លំហាត់អនុវត្ត ៥១–៦០ | StudyNest Physics G12</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@300;400;600;700&family=DM+Serif+Display&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
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
    <link rel="stylesheet" href="{{ asset('assets/professional.css') }}" />
    <!-- Main JS & Auth Guard -->
    <script src="{{ asset('assets/main.js') }}"></script>
    <script>
      StudyNest.checkAccess(3);
    </script>
  </head>
  <body>
    <nav>
      <a
        href="lesson 1_home"
        style="
          color: white;
          text-decoration: none;
          display: flex;
          align-items: center;
          gap: 8px;
        "
        ><i class="fas fa-arrow-left"></i> ត្រឡប់ក្រោយ</a
      >
      <div class="nav-brand">Study<span>Nest</span> Pro</div>
      <span class="nav-tag">រូបវិទ្យា ថ្នាក់ទី ១២</span>
    </nav>

    <header>
      <div class="header-inner">
        <div class="header-eyebrow">⚛ ទ្រឹស្តីបទសុីនេទិចនៃឧស្ម័ន</div>
        <h1>លំហាត់<em>អនុវត្ត</em> ៥១–៦០</h1>
        <p>លំហាត់ជ្រើសរើសសំខាន់ៗ ត្រៀមប្រឡងសញ្ញាបត្រមធ្យមសិក្សាទុតិយភូមិ</p>
      </div>
    </header>

    <div class="container">
      <div class="section-head">
        <h2>លំហាត់ទាំងអស់</h2>
        <div class="section-head-line"></div>
      </div>

      <!-- 51 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">51</div>
          <span class="ex-title">លំហាត់អនុវត្ត ៥១</span>
        </div>
        <div class="ex-body">
          <p>
            ដបមួយផ្ទុកឧស្ម័នពេញ ស្ថិតក្រោមសម្ពាធ
            <span class="given"> 2.5 atm</span> នៅសីតុណ្ហភាព
            <span class="given"> 27°C</span> សម្ពាធកើនឡើងដល់
            <span class="given">3 atm</span>។
          </p>
          <div class="ex-find">
            <span>តើគេត្រូវកម្ដៅឧស្ម័នដល់សីតុណ្ហភាពប៉ុន្មាន °C ?</span>
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">
                គណនាសីតុណ្ហភាពថ្មីរបស់ឧស្ម័ន (\(t_2\))
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math"
                  >\( \dfrac{P_1}{T_1} = \dfrac{P_2}{T_2} \Rightarrow T_2 = T_1
                  \times \dfrac{P_2}{P_1} \)</span
                >
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P_1 = 2.5 \text{ atm} \)<br />
                  \( T_1 = 27 + 273 = 300 \text{ K} \)<br />
                  \( P_2 = 3 \text{ atm} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( T_2 = 300 \times \dfrac{3}{2.5} = 360 \text{ K} \)<br />
                  នាំឲ្យ៖ \( t_2 = T_2 - 273 = 360 - 273 = 87^\circ\text{C} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ គេត្រូវកម្ដៅដល់សីតុណ្ហភាព \( t_2 = 87^\circ\text{C} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 52 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">52</div>
          <span class="ex-title">លំហាត់អនុវត្ត ៥២</span>
        </div>
        <div class="ex-body">
          <p>
            បាឡុងមួយបិទជិតមានផ្ទុកឧស្ម័នដែលគេសន្មត់ថាជាឧស្ម័នបរិសុទ្ធស្ថិតក្រោមសម្ពាធ
            <span class="given">1 atm</span>
            បើគេទុកបាឡុងនោះនៅក្នុងម្លប់មានសីតុណ្ហភាព
            <span class="given">\(T_1\)</span>។
            បន្ទាប់មកគេយកបាឡុងនោះទៅដាក់ហាលថ្ងៃនាំឧ្យសីតុណ្ណភាពវាកើនឡើងពីរដង ។
          </p>
          <div class="ex-find">
            <span
              >គណនាសម្ពាធឧស្ម័នក្នុងបាឡុងនោះ បើគេសន្មត់ថាមាឌបាឡុងថេរ​ ។</span
            >
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">គណនាសម្ពាធឧស្ម័នក្នុងបាឡុង (\(P_2\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math"
                  >\( \dfrac{P_1}{T_1} = \dfrac{P_2}{T_2} \)</span
                >
              </div>
              <div class="sol-step">
                <span class="sol-label">នាំឱ្យ :</span>
                <span class="sol-math"
                  >\( P_2 = P_1 \times \dfrac{T_2}{T_1} \)</span
                >
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P_1 = 1 \text{ atm} \)<br />
                  \( T_2 = 2 T_1 \Rightarrow \dfrac{T_2}{T_1} = 2 \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math"
                  >\( P_2 = 1 \times 2 = 2 \text{ atm} \)</span
                >
              </div>
              <div class="sol-box">
                ដូចនេះ៖ សម្ពាធឧស្ម័នក្នុងបាឡុងគឺ \( P_2 = 2 \text{ atm} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 53 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">53</div>
          <span class="ex-title">លំហាត់អនុវត្ត ៥៣</span>
        </div>
        <div class="ex-body">
          <p>
            បាឡុងមួយបិទជិតមានផ្ទុកឧស្ម័នដែលគេសន្មត់ថាជាឧស្ម័នបរិសុទ្ធស្ថិតក្រោមសម្ពាធ
            <span class="given">2 atm</span>
            បើគេទុកបាឡុងនោះនៅក្នុងម្លប់មានសីតុណ្ហភាព
            <span class="given">27°C</span>។
            បន្ទាប់មកគេយកបាឡុងនោះទៅដាក់ហាលថ្ងៃនាំឧ្យសីតុណ្ណភាពវាកើនឡើងរហូតដល់
            <span class="given">47°C</span> ។
          </p>
          <div class="ex-find">
            <span
              >គណនាសម្ពាធឧស្ម័នក្នុងបាឡុងនោះ បើគេសន្មត់ថាមាឌបាឡុងថេរ​ ។</span
            >
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">គណនាសម្ពាធឧស្ម័នក្នុងបាឡុង (\(P_2\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math"
                  >\( \dfrac{P_1}{T_1} = \dfrac{P_2}{T_2} \)</span
                >
              </div>
              <div class="sol-step">
                <span class="sol-label">នាំឱ្យ :</span>
                <span class="sol-math"
                  >\( P_2 = P_1 \times \dfrac{T_2}{T_1} \)</span
                >
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P_1 = 2 \text{ atm} \)<br />
                  \( T_1 = 27 + 273 = 300 \text{ K} \)<br />
                  \( T_2 = 47 + 273 = 320 \text{ K} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math"
                  >\( P_2 = 2 \times \dfrac{320}{300} \approx 2.13 \text{ atm}
                  \)</span
                >
              </div>
              <div class="sol-box">
                ដូចនេះ៖ សម្ពាធឧស្ម័នក្នុងបាឡុងគឺ \( P_2 \approx 2.13 \text{ atm}
                \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 54 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">54</div>
          <span class="ex-title">លំហាត់អនុវត្ត ៥៤</span>
        </div>
        <div class="ex-body">
          <p>
            ផង់នីមួយៗមានម៉ាស \(m_0\) និងផ្លាស់ដោយល្បឿន \(v_0\)តាមបណ្ដោយអ័ក្ស
            \(ox\)។ គេដឹងថាក្នុងផ្ទៃ
            <span class="given">4 mm²</span> និងក្នុងមួយវិនាទីមានផង់ចំនួន
            <span class="given">\( 1 \times 10^5 \)</span> ទៅទង្គិចផ្ទៃនោះ ។​
            គេសន្មត់ទង្គិចរវាងផង់និងផ្ទៃប៉ះ ជាទង្គិចស្ទក់ ។
          </p>
          <p>
            គេឲ្យ \( m_0 = 9.11 \times 10^{-31} \) kg និង \( v_0 = 8 \times 10^7
            \) m/s ។
          </p>
          <div class="ex-find">
            <span>ចូររកសម្ពាធរបស់ផង់លើផ្ទៃប៉ះនោះ ។</span>
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">រកសម្ពាធរបស់ផង់លើផ្ទៃប៉ះ (\(P\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math"
                  >\( P = \dfrac{F}{A} = \dfrac{N m_0 v_0}{A \Delta t} \)</span
                >
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( N = 1 \times 10^5 \)ម៉ូលេគុល<br />
                  \( m_0 = 9.11 \times 10^{-31} \text{ kg} \)<br />
                  \( v_0 = 8 \times 10^7 \text{ m/s} \)<br />
                  \( A = 4 \text{ mm}^2 = 4 \times 10^{-6} \text{ m}^2 \)<br />
                  \( \Delta t = 1 \text{ s} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math"
                  >\( P = \dfrac{10^5 \times 9.11 \times 10^{-31} \times 8
                  \times 10^7}{4 \times 10^{-6} \times 1} = 1.822 \times
                  10^{-11} \text{ Pa} \)</span
                >
              </div>
              <div class="sol-box">
                ដូចនេះ៖ សម្ពាធរបស់ផង់លើផ្ទៃប៉ះគឺ \( P = 1.822 \times 10^{-11}
                \text{ Pa} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 55 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">55</div>
          <span class="ex-title">លំហាត់អនុវត្ត ៥៥</span>
        </div>
        <div class="ex-body">
          <p>
            ប្រូតុងមានមួយមានម៉ាស
            <span class="given">\( m_p = 1.67 \times 10^{-27} \) kg</span>
            និងផ្លាស់ទីដោយល្បឿនដើម \(v_o\) តាមបណ្តោយអ័ក្ស
            \(ox\)ក្នុងធុងមួយមានរាងជាគូប ។ គេដឹងថាក្នុងផ្ទៃ
            <span class="given">4 mm²</span> និងក្នុងមួយវិនាទីមានផង់ចំនួន
            <span class="given">\( 5 \times 10^{13} \)</span> ទៅទង្គិចផ្ទៃនោះ
            ហើយសម្ពាធរបស់ប្រូតុងលើផ្ទៃប៉ះគឺ<span class="given"
              >\( 8.35 \times 10^{-2} \) Pa</span
            >។ គេសន្មត់ទង្គិចរវាងប្រូតុងនិងផ្ទៃប៉ះ ជាទង្គិចស្ទក់ ។
          </p>
          <div class="ex-find">
            <span>ក. គណនាកម្លាំងដែលប្រូតុងនីមួយៗមានលើផ្ទៃប៉ះ ។</span>
          </div>
          <div class="ex-find">
            <span>ខ. គណនាល្បឿនប្រូតុងនៅខណ:វាទៅប៉ះនឹងផ្ទៃម្ខាងទៀតនៃគូប ។</span>
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គណនាកម្លាំងប្រូតុងនីមួយៗលើផ្ទៃប៉ះ</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( F_0 = \dfrac{F}{N} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">តែ :</span>
                <span class="sol-math">\( F = P \cdot A \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">នាំឱ្យ :</span>
                <span class="sol-math">\( F_0 = \dfrac{P \cdot A}{N} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P = 8.35 \times 10^{-2} \text{ Pa} \)<br />
                  \( A = 4 \text{ mm}^2 = 4 \times 10^{-6} \text{ m}^2 \)<br />
                  \( N = 5 \times 10^{13} \)ម៉ូលេគុល
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math"
                  >\( F_0 = \dfrac{8.35 \times 10^{-2} \times 4 \times
                  10^{-6}}{5 \times 10^{13}} = 6.68 \times 10^{-21} \text{ N}
                  \)</span
                >
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្លាំងដែលប្រូតុងនីមួយៗមានលើផ្ទៃគឺ \( F_0 = 6.68 \times
                10^{-21} \text{ N} \)
              </div>

              <div class="sol-title" style="margin-top: 16px">
                ខ. គណនាល្បឿនប្រូតុង (\(v_0\))
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math"
                  >\( F = \dfrac{N m_p v_0}{\Delta t} \)</span
                >
              </div>
              <div class="sol-step">
                <span class="sol-label">តែ :</span>
                <span class="sol-math">\( F = P \cdot A \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">នាំឱ្យ :</span>
                <span class="sol-math"
                  >\( P \cdot A = \dfrac{N m_p v_0}{\Delta t} \Rightarrow v_0 =
                  \dfrac{P \cdot A \cdot \Delta t}{N m_p} \)</span
                >
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P = 8.35 \times 10^{-2} \text{ Pa} \)<br />
                  \( A = 4 \text{ mm}^2 = 4 \times 10^{-6} \text{ m}^2 \)<br />
                  \( \Delta t = 1 \text{ s} \)<br />
                  \( N = 5 \times 10^{13} \)ម៉ូលេគុល<br />
                  \( m_p = 1.67 \times 10^{-27} \text{ kg} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math"
                  >\( v_0 = \dfrac{8.35 \times 10^{-2} \times 4 \times 10^{-6}
                  \times 1}{5 \times 10^{13} \times 1.67 \times 10^{-27}} = 4
                  \times 10^6 \text{ m/s} \)</span
                >
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ល្បឿនប្រូតុងគឺ \( v_0 = 4 \times 10^6 \text{ m/s} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 56 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">56</div>
          <span class="ex-title">លំហាត់អនុវត្ត ៥៦</span>
        </div>
        <div class="ex-body">
          <p>
            ប្រូតុងមួយមានម៉ាស
            <span class="given">\( 6.68 \times 10^{-27} \) kg</span>
            និងផ្លាស់ទីដោយល្បឿន \(v\) តាមបណ្តោយអ័ក្ស
            \(ox\)ក្នុងគូបមួយដែលមានទ្រនុង
            <span class="given">L = 3 mm</span
            >។ប្រូតុងផ្លាស់ពីផ្ទៃម្ខាងទៅផ្ទៃម្ខាងទៀតនិងក្នុងក្នុងរយ:ពេល
            <span class="given">2 ns</span>។ គេសន្មត់ទង្គិចរវាងប្រូតុងនិងផ្ទៃប៉ះ
            ជាទង្គិចស្ទក់ ។
          </p>
          <div class="ex-find">
            <span>ក. គណនាល្បឿនដើមប្រូតុងនៅខណ:វាចាប់ផ្តើមចេញពីផ្ធៃខាងគូប ។</span>
          </div>
          <div class="ex-find">
            <span
              >ខ. គណនាសម្ពាធប្រូតុងមួយលើផ្ទៃខាងគូប ។គេដឹងថាក្នុងរយ:ពេល
              <span class="given">2 ns</span> មានផង់ចំនួន
              <span class="given">\( 2 \times 10^{6} \)</span>
              ទៅទង្គិចនឹងផ្ទៃខាងគូបនោះ ។</span
            >
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គណនាល្បឿនដើមប្រូតុង (\(v\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( v = \dfrac{L}{\Delta t} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( L = 3 \text{ mm} = 3 \times 10^{-3} \text{ m} \)<br />
                  \( \Delta t = 2 \text{ ns} = 2 \times 10^{-9} \text{ s} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math"
                  >\( v = \dfrac{3 \times 10^{-3}}{2 \times 10^{-9}} = 1.5
                  \times 10^6 \text{ m/s} \)</span
                >
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ល្បឿនដើមរបស់ប្រូតុងគឺ \( v = 1.5 \times 10^6 \text{ m/s}
                \)
              </div>

              <div class="sol-title" style="margin-top: 16px">
                ខ. គណនាសម្ពាធប្រូតុងមួយលើផ្ទៃខាងគូប (\(P_1\))
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( P = \dfrac{F}{A} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">តែ :</span>
                <span class="sol-math"
                  >\(F = NF_0 \) <br />
                  \( F_0 = \dfrac{m_0 v}{\Delta t}\) <br />
                  \(A = L^2 \)</span
                >
              </div>
              <div class="sol-step">
                <span class="sol-label">នាំឱ្យ :</span>
                <span class="sol-math"
                  >\( P = \dfrac{Nm_0 v}{L^2 \Delta t} \)</span
                >
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( N = 2 \times 10^{6} \)ម៉ូលេគុល<br />
                  \( m_0 = 6.68 \times 10^{-27} \text{ kg} \)<br />
                  \( v = 1.5 \times 10^6 \text{ m/s} \)<br />
                  \( \Delta t = 2 \times 10^{-9} \text{ s} \)<br />
                  \( A = (3 \times 10^{-3})^2 = 9 \times 10^{-6} \text{ m}^2 \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math"
                  >\( P = \dfrac{2 \times 10^{6} \times 6.68 \times 10^{-27}
                  \times 1.5 \times 10^6}{9 \times 10^{-6} \times 2 \times
                  10^{-9}} \approx 5.57 \times 10^{-7} \text{ Pa} \)</span
                >
              </div>
              <div class="sol-box">
                ដូចនេះ៖ សម្ពាធប្រូតុងមួយគឺ \( P \approx 5.57 \times 10^{-7}
                \text{ Pa} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 57 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">57</div>
          <span class="ex-title">លំហាត់អនុវត្ត ៥៧</span>
        </div>
        <div class="ex-body">
          <p>
            ភាគល្អិតមួយមានម៉ាស
            <span class="given">\( 6.68 \times 10^{-27} \) kg</span>
            និងផ្លាស់ទីដោយល្បឿន
            <span class="given">1500 Km/s</span> តាមបណ្តោយអ័ក្ស
            \(ox\)ក្នុងមាឌមួយដែលមានរាងជាគូបទ្រនុងនីមួយៗមានរង្វាស់ប្រវែង L។
            គេដឹងថាក្នុងផ្ទៃ
            <span class="given">4 mm²</span> និងក្នុងមួយវិនាទីមានផង់ចំនួន
            <span class="given">\( 5 \times 10^{13} \)</span> ទៅទង្គិចផ្ទៃនោះ
            ហើយសម្ពាធរបស់ប្រូតុងលើផ្ទៃប៉ះគឺ<span class="given"
              >\( 8.35 \times 10^{-2} \) Pa</span
            >។ គេសន្មត់ទង្គិចរវាងប្រូតុងនិងផ្ទៃប៉ះ ជាទង្គិចស្ទក់ ។
          </p>

          <div class="ex-find">
            <span
              >ក. គណនាប្រវែងទ្រនុង L ​នៃគូប និងកម្លាំងដែលមានអំពើលើភាគល្អិតមួយ
              ។</span
            >
          </div>
          <div class="ex-find">
            <span
              >ខ. គណនាអាំពុលស្យុង និងសម្ពាធលើផ្ទៃខាងគូបរបស់ភាគល្អិតមួយ ។</span
            >
          </div>
          <div class="ex-find">
            <span
              >គ. គណនាសម្ពាធសរុបរបស់ភាគល្អិតលើផ្ទៃគូប ។ ពេលប៉ះ
              <span class="given">25 ns</span> ; ចំនួន
              <span class="given">\(25 \times 10^6\)</span>
              ទៅទង្គិចនឹងផ្ទៃគូប។</span
            >
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">
                ក. គណនាប្រវែងទ្រនុង L និងកម្លាំង (\(F_0\))
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math"
                  >\( L = v \times \Delta t \quad \)<br />
                  \(F_0 = \dfrac{m_0 v}{\Delta t} \)</span
                >
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( v = 1500 \text{ km/s} = 1.5 \times 10^6 \text{ m/s} \)<br />
                  \( \Delta t = 25 \text{ ns} = 25 \times 10^{-9} \text{ s}
                  \)<br />
                  \( m_0 = 6.68 \times 10^{-27} \text{ kg} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( L = 1.5 \times 10^6 \times 25 \times 10^{-9} = 0.0375
                  \text{ m} = 37.5 \text{ mm} \)<br />
                  \( F_0 = \dfrac{6.68 \times 10^{-27} \times 1.5 \times
                  10^6}{25 \times 10^{-9}} \approx 4.01 \times 10^{-13} \text{
                  N} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ \( L = 37.5 \text{ mm} \) និងកម្លាំងគឺ \( F_0 \approx
                4.01 \times 10^{-13} \text{ N} \)
              </div>

              <div class="sol-title" style="margin-top: 16px">
                ខ. គណនាអាំពុលស្យុង (\(\Delta p\)) និងសម្ពាធភាគល្អិតមួយ (\(\Delta
                P\))
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math"
                  >\( \Delta p = m_0 v \quad \)<br />
                  \( \Delta P= \dfrac{F_0}{A} \)</span
                >
              </div>
              <div class="sol-step">
                <span class="sol-label">តែ :</span>
                <span class="sol-math">\( A = L^2 \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">នាំឱ្យ :</span>
                <span class="sol-math">\( \Delta P = \dfrac{F_0}{L^2} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( m_0 = 6.68 \times 10^{-27} \text{ kg} \)<br />
                  \( v = 1.5 \times 10^6 \text{ m/s} \)<br />
                  \( F_0 = 4.01 \times 10^{-13} \text{ N} \)<br />
                  \( L = 0.0375 \text{ m} \Rightarrow A = 1.40625 \times 10^{-3}
                  \text{ m}^2 \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( \Delta p = 6.68 \times 10^{-27} \times 1.5 \times 10^6 =
                  1.002 \times 10^{-20} \text{ kg}\cdot\text{m/s} \)<br />
                  \( \Delta P = \dfrac{4.01 \times 10^{-13}}{1.40625 \times
                  10^{-3}} \approx 2.85 \times 10^{-10} \text{ Pa} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ \( \Delta p = 1.002 \times 10^{-20} \text{
                kg}\cdot\text{m/s} \) និង \( \Delta P \approx 2.85 \times
                10^{-10} \text{ Pa} \)
              </div>

              <div class="sol-title" style="margin-top: 16px">
                គ. គណនាសម្ពាធសរុប
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( P = N \times \Delta P \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( N = 25 \times 10^6 \)ម៉ូលេគុល<br />
                  \( \Delta P \approx 2.85 \times 10^{-10} \text{ Pa} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math"
                  >\( P = 25 \times 10^6 \times 2.85 \times 10^{-10} \approx
                  7.13 \times 10^{-3} \text{ Pa} \)</span
                >
              </div>
              <div class="sol-box">
                ដូចនេះ៖ សម្ពាធសរុបគឺ \( P_ \approx 7.13 \times 10^{-3} \text{
                Pa} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 58 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">58</div>
          <span class="ex-title">លំហាត់អនុវត្ត ៥៨</span>
        </div>
        <div class="ex-body">
          <p>
            ផង់នីមួយៗមានម៉ាស \(m_0\) និងផ្លាស់ដោយល្បឿន \(v_0\)តាមបណ្ដោយអ័ក្ស
            \(ox\)។ គេដឹងថាក្នុងផ្ទៃ
            <span class="given">2 mm²</span> និងក្នុងមួយវិនាទីមានផង់ចំនួន
            <span class="given">\( 1 \times 10^5 \)</span> ទៅទង្គិចផ្ទៃនោះ ។​
            គេសន្មត់ទង្គិចរវាងផង់និងផ្ទៃប៉ះ ជាទង្គិចស្ទក់ ។
          </p>
          <p>
            គេឲ្យ \( m_0 = 9.11 \times 10^{-31} \) kg និង \( v_0 = 8 \times 10^7
            \) m/s ។
          </p>
          <div class="ex-find">
            <span>ក. គណនាកម្លាំងសរុបដែលផង់មានលើផ្ទៃប៉ះ ។</span>
          </div>
          <div class="ex-find"><span>ខ. គណនាសម្ពាធលើផ្ទៃប៉ះ ។</span></div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គណនាកម្លាំងសរុបដែលផង់មានលើផ្ទៃប៉ះ</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math"
                  >\( F = \dfrac{N m_0 v_0}{\Delta t} \)</span
                >
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( N = 1 \times 10^5 \)ម៉ូលេគុល<br />
                  \( m_0 = 9.11 \times 10^{-31} \text{ kg} \)<br />
                  \( v_0 = 8 \times 10^7 \text{ m/s} \)<br />
                  \( \Delta t = 1 \text{ s} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math"
                  >\( F = \dfrac{10^5 \times 9.11 \times 10^{-31} \times 8
                  \times 10^7}{1} = 7.288 \times 10^{-18} \text{ N} \)</span
                >
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្លាំងសរុបលើផ្ទៃប៉ះគឺ \( F = 7.288 \times 10^{-18}
                \text{ N} \)
              </div>

              <div class="sol-title" style="margin-top: 16px">
                ខ. គណនាសម្ពាធលើផ្ទៃប៉ះ (\(P\))
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( P = \dfrac{F}{A} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( F = 7.288 \times 10^{-18} \text{ N} \)<br />
                  \( A = 2 \text{ mm}^2 = 2 \times 10^{-6} \text{ m}^2 \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math"
                  >\( P = \dfrac{7.288 \times 10^{-18}}{2 \times 10^{-6}} =
                  3.644 \times 10^{-12} \text{ Pa} \)</span
                >
              </div>
              <div class="sol-box">
                ដូចនេះ៖ សម្ពាធលើផ្ទៃប៉ះគឺ \( P = 3.644 \times 10^{-12} \text{
                Pa} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 59 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">59</div>
          <span class="ex-title">លំហាត់អនុវត្ត ៥៩</span>
        </div>
        <div class="ex-body">
          <p>
            អេឡិចត្រុងមួយមានម៉ាស
            <span class="given">\( m_e = 9.11 \times 10^{-31} \) kg</span>
            និងផ្លាស់ទីដោយល្បឿន <span class="given">\(v\)</span>តាមបណ្តោយអ័ក្ស
            <span class="given">\(ox\)</span>ក្នុងគូបមួយដែលមានទ្រនុង
            <span class="given">L = 2 mm</span>។
            អេឡិចត្រុងផ្លាស់ពីផ្ទៃម្ខាងទៅផ្ទៃម្ខាងទៀតនិងក្នុងរយ:ពេល
            <span class="given">25 ns</span>។
            គេសន្មត់ទង្គិចរវាងអេឡិចត្រុងនិងផ្ទៃប៉ះ ជាទង្គិចខ្ទាត ។
          </p>
          <div class="ex-find">
            <span>ក. គណនាល្បឿនអេឡិចត្រុងនៅខណ:វាចាប់ផ្តើមចេញពីផ្ធៃខាងគូប ។</span>
          </div>
          <div class="ex-find">
            <span>ខ. គណនាសម្ពាធរបស់អេឡិចត្រុងមួយលើផ្ទៃខាងគូប ។</span>
          </div>
          <div class="ex-find">
            <span
              >គ. គណនាសម្ពាធសរុបរបស់អេឡិចត្រុងលើផ្ទៃគូប ។ គេដឹងថាក្នុងរយ:ពេល
              <span class="given">25 ns</span> មានផង់ចំនួន
              <span class="given">\( 25 \times 10^{6} \)</span>
              ទៅទង្គិចនឹងផ្ទៃខាងគូបនោះ ។</span
            >
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គណនាល្បឿនអេឡិចត្រុង (\(v\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( v = \dfrac{L}{\Delta t} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( L = 2 \text{ mm} = 2 \times 10^{-3} \text{ m} \)<br />
                  \( \Delta t = 25 \text{ ns} = 25 \times 10^{-9} \text{ s} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math"
                  >\( v = \dfrac{2 \times 10^{-3}}{25 \times 10^{-9}} = 8 \times
                  10^4 \text{ m/s} \)</span
                >
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ល្បឿនរបស់អេឡិចត្រុងគឺ \( v = 8 \times 10^4 \text{ m/s}
                \)
              </div>

              <div class="sol-title" style="margin-top: 16px">
                ខ. គណនាសម្ពាធរបស់អេឡិចត្រុងមួយលើផ្ទៃ
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( \Delta P = \dfrac{F_0}{A} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">តែ :</span>
                <span class="sol-math"
                  >\( F_0 = \dfrac{2 m_e v}{\Delta t} \quad \)(ទង្គិចខ្ទាត)<br />
                  \(A = L^2 \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">នាំឱ្យ :</span>
                <span class="sol-math"
                  >\( \Delta P = \dfrac{2 m_e v}{L^2 \Delta t} \)</span
                >
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( m_e = 9.11 \times 10^{-31} \text{ kg} \)<br />
                  \( v = 8 \times 10^4 \text{ m/s} \)<br />
                  \( \Delta t = 25 \times 10^{-9} \text{ s} \)<br />
                  \( A = (2 \times 10^{-3})^2 = 4 \times 10^{-6} \text{ m}^2 \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math"
                  >\( \Delta P = \dfrac{2 \times 9.11 \times 10^{-31} \times 8
                  \times 10^4}{4 \times 10^{-6} \times 25 \times 10^{-9}}
                  \approx 1.458 \times 10^{-12} \text{ Pa} \)</span
                >
              </div>
              <div class="sol-box">
                ដូចនេះ៖ សម្ពាធអេឡិចត្រុងមួយគឺ \( \Delta P \approx 1.458 \times
                10^{-12} \text{ Pa} \)
              </div>

              <div class="sol-title" style="margin-top: 16px">
                គ. គណនាសម្ពាធសរុបរបស់អេឡិចត្រុងលើផ្ទៃគូប
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( P = N \times \Delta P \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( N = 25 \times 10^6 \)ម៉ូលេគុល<br />
                  \( \Delta P \approx 1.458 \times 10^{-12} \text{ Pa} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math"
                  >\( P = 25 \times 10^6 \times 1.458 \times 10^{-12} \approx
                  3.64 \times 10^{-5} \text{ Pa} \)</span
                >
              </div>
              <div class="sol-box">
                ដូចនេះ៖ សម្ពាធសរុបគឺ \( P \approx 3.64 \times 10^{-5} \text{ Pa}
                \)
              </div>
            </div>
          </details>
        </div>
      </div>
    </div>
  </body>
</html>
