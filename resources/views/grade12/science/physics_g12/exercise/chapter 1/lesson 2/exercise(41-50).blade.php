<!doctype html>
<html lang="km">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>លំហាត់អនុវត្ត ៤១–៥០ | StudyNest Physics G12</title>
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
      <link rel="stylesheet" href="{{ asset('assets/professional.css') }}">
    <!-- Main JS & Auth Guard -->
    <script src="{{ asset('assets/main.js') }}"></script>
    <script>
      StudyNest.checkAccess(3);
    </script>
  </head>
  <body>
    <nav>
      <a
        href="lesson 2_home"
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
        <div class="header-eyebrow">⚛ ច្បាប់ទី១ទែម៉ូឌីណាមិច</div>
        <h1>លំហាត់<em>អនុវត្ត ៤១–៥០</em></h1>
        <p>លំហាត់ជ្រើសរើសសំខាន់ៗ ត្រៀមប្រឡងសញ្ញាបត្រមធ្យមសិក្សាទុតិយភូមិ</p>
      </div>
    </header>

    <div class="container">
      <div class="section-head">
        <h2>លំហាត់ទាំងអស់</h2>
        <div class="section-head-line"></div>
      </div>

      <!-- 41 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">41</div>
          <span class="ex-title">លំហាត់អនុវត្ត៤១</span>
        </div>
        <div class="ex-body">
          <p>
            ឧស្ម័នអេល្យូមមួយ (ចាត់ទុកអេល្យូមជាឧស្ម័នបរិសុទ្ធ) មានសីតុណ្ហភាពដើម
            <span class="given">\(0^\circ\text{C}\)</span>
            ធ្វើបម្លែងទែម៉ូឌីណាមិចតាមលំនាំអ៊ីសូបារដែលមានសម្ពាធថេរ
            <span class="given">\(25 \text{ kPa}\)</span> ។ បើមាឌរបស់វាកើនឡើងពី
            <span class="given">\(10 \text{ mL}\)</span> ទៅ
            <span class="given">\(20 \text{ mL}\)</span> និងបំភាយថាមពលកម្ដៅ
            <span class="given">\(30 \text{ cal}\)</span>  ។
          </p>
          <p style="margin-top: 10px;">
            យក <span class="given">\(1 \text{ cal} = 4.2 \text{ J}\)</span> ។
          </p>
          <div style="margin-top: 15px">
            <div class="ex-find"><span>ក. គណនាកម្មន្តដែលបានបំពេញដោយឧស្ម័ន ។</span></div>
            <div class="ex-find">
              <span>ខ. គណនាបម្រែបម្រួលថាមពលក្នុងនៃប្រព័ន្ធឧស្ម័ន ។</span>
            </div>
            <div class="ex-find"><span>គ. គណនាសីតុណ្ហភាពចុងក្រោយនៃឧស្ម័ន ។</span></div>
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គណនាកម្មន្តដែលបានបំពេញដោយឧស្ម័ន (\(W\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( W = P\Delta V = P(V_2 - V_1) \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P = 25 \text{ kPa} = 25000 \text{ Pa} \)<br>
                  \( V_1 = 10 \text{ mL} = 10 \times 10^{-6} \text{ m}^3 = 10^{-5} \text{ m}^3 \)<br>
                  \( V_2 = 20 \text{ mL} = 20 \times 10^{-6} \text{ m}^3 = 2 \times 10^{-5} \text{ m}^3 \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( W = 25000 \times (2 \times 10^{-5} - 10^{-5}) = 25000 \times 10^{-5} = 0.25 \text{ J} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្មន្តបំពេញដោយឧស្ម័នគឺ \( W = 0.25 \text{ J} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">ខ. គណនាបម្រែបម្រួលថាមពលក្នុងនៃប្រព័ន្ធ (\(\Delta U\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( \Delta U = Q - W \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( Q = -30 \text{ cal} = -30 \times 4.2 \text{ J} = -126 \text{ J} \) (កម្ដៅបំភាយចេញ \( \Rightarrow Q < 0 \))<br>
                  \( W = 0.25 \text{ J} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( \Delta U = -126 - 0.25 = -126.25 \text{ J} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ បម្រែបម្រួលថាមពលក្នុងគឺ \( \Delta U = -126.25 \text{ J} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">គ. គណនាសីតុណ្ហភាពចុងក្រោយនៃឧស្ម័ន (\(T_2\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( \dfrac{V_1}{T_1} = \dfrac{V_2}{T_2} \) (លំនាំអ៊ីសូបារ)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">នាំឱ្យ :</span>
                <span class="sol-math">\( T_2 = T_1 \times \dfrac{V_2}{V_1} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( T_1 = 0^\circ\text{C} = 273 \text{ K} \)<br>
                  \( V_1 = 10 \text{ mL} \)<br>
                  \( V_2 = 20 \text{ mL} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( T_2 = 273 \times \dfrac{20}{10} = 546 \text{ K} \)<br>
                  គិតជាអង្សាសេ៖ \( t_2 = 546 - 273 = 273^\circ\text{C} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ សីតុណ្ហភាពចុងក្រោយនៃឧស្ម័នគឺ \( T_2 = 546 \text{ K} \) (ឬ \( t_2 = 273^\circ\text{C} \))
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 42 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">42</div>
          <span class="ex-title">លំហាត់អនុវត្ត៤២</span>
        </div>
        <div class="ex-body">
          <p>គណនាកម្មន្តសរុបក្នុងបម្លែងបិទ (ដូចរូបខាងក្រោម) ។</p>
          <img
            src="images/image-3.png"
            alt="Exercise 42 Diagram"
            style="
              max-width: 100%;
              margin: 20px 0;
              border-radius: 12px;
              box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            "
          />

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">១. គណនាកម្មន្តសរុបសម្រាប់ដ្យាក្រាមទី១ (រូបខាងឆ្វេង៖ ចតុកោណកែង ABCD)</div>
              <div class="sol-step">
                <span class="sol-label">ពណ៌នា :</span>
                <span class="sol-math">
                  កម្មន្តសរុបស្មើនឹងផ្ទៃក្រឡាចតុកោណកែង \( ABCD \)។ ដំណើរការវិលតាមទិសដៅទ្រនិចនាឡិកា នាំឱ្យកម្មន្តសរុបមានតម្លៃវិជ្ជមាន (\( W > 0 \))។
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( W_{\text{tot1}} = \text{ផ្ទៃក្រឡា } ABCD = (P_B - P_C)(V_B - V_A) \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P_B = 2.0 \text{ atm} \)<br>
                  \( P_C = 1.0 \text{ atm} \Rightarrow \Delta P = 2.0 - 1.0 = 1.0 \text{ atm} = 1.013 \times 10^5 \text{ Pa} \)<br>
                  \( V_A = 2.0 \text{ L} \)<br>
                  \( V_B = 4.0 \text{ L} \Rightarrow \Delta V = 4.0 - 2.0 = 2.0 \text{ L} = 2.0 \times 10^{-3} \text{ m}^3 \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( W_{\text{tot1}} = 1.013 \times 10^5 \text{ Pa} \times 2.0 \times 10^{-3} \text{ m}^3 = 202.6 \text{ J} \)<br>
                  (ឬ \( W_{\text{tot1}} = 200 \text{ J} \) បើប្រើប្រហែល \( 1 \text{ atm} \approx 10^5 \text{ Pa} \))
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្មន្តសរុបដ្យាក្រាមទី១ គឺ \( W_{\text{tot1}} = 202.6 \text{ J} \)
              </div>

              <div class="sol-title" style="margin-top: 20px;">២. គណនាកម្មន្តសរុបសម្រាប់ដ្យាក្រាមទី២ (រូបខាងស្តាំ៖ ត្រីកោណកែង CAB)</div>
              <div class="sol-step">
                <span class="sol-label">ពណ៌នា :</span>
                <span class="sol-math">
                  កម្មន្តសរុបស្មើនឹងផ្ទៃក្រឡាត្រីកោណកែង \( CAB \)។ វដ្តធ្វើចលនាតាមទិសដៅទ្រនិចនាឡិកា នាំឱ្យកម្មន្តសរុបមានតម្លៃវិជ្ជមាន (\( W > 0 \))។
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( W_{\text{tot2}} = \text{ផ្ទៃក្រឡា } CAB = \dfrac{1}{2} \times \text{បាត} \times \text{កម្ពស់} = \dfrac{1}{2} \times (V_B - V_C)(P_A - P_C) \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( V_C = 2.0 \text{ m}^3 \)<br>
                  \( V_B = 5.0 \text{ m}^3 \Rightarrow \Delta V = 5.0 - 2.0 = 3.0 \text{ m}^3 \)<br>
                  \( P_C = 1.0 \text{ atm} \)<br>
                  \( P_A = 2.0 \text{ atm} \Rightarrow \Delta P = 2.0 - 1.0 = 1.0 \text{ atm} = 1.013 \times 10^5 \text{ Pa} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( W_{\text{tot2}} = \dfrac{1}{2} \times 3.0 \text{ m}^3 \times 1.013 \times 10^5 \text{ Pa} = 1.5195 \times 10^5 \text{ J} = 151.95 \text{ kJ} \)<br>
                  (ឬ \( W_{\text{tot2}} = 150 \text{ kJ} \) បើប្រើប្រហែល \( 1 \text{ atm} \approx 10^5 \text{ Pa} \))
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្មន្តសរុបដ្យាក្រាមទី២ គឺ \( W_{\text{tot2}} = 151.95 \text{ kJ} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 43 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">43</div>
          <span class="ex-title">លំហាត់អនុវត្ត៤៣</span>
        </div>
        <div class="ex-body">
          <p>
            ដ្យាក្រាម (P-V) តាងស៊ិចមួយនៃម៉ូលេគុលឧស្ម័នមួយដូចបានបង្ហាញនៅក្នុងរូប
            ។
          </p>
          <div style="margin-top: 10px; border-top: 1px dashed var(--border); padding-top: 10px;">
            <p>
              - ក្នុងបម្លែងពី <span class="given">A</span> ទៅ
              <span class="given">B</span> សម្ពាធថេរ ។
            </p>
            <p style="margin-top: 6px;">
              - ក្នុងបម្លែងពី <span class="given">B</span> ទៅ
              <span class="given">C</span> មាឌថេរ ។
            </p>
            <p style="margin-top: 6px;">
              - ក្នុងបម្លែងពី <span class="given">C</span> ទៅ
              <span class="given">A</span> សម្ពាធប្រែប្រួល ។
            </p>
          </div>
          <img
            src="images/image-4.png"
            alt="Exercise 43 Diagram"
            style="
              max-width: 100%;
              margin: 20px 0;
              border-radius: 12px;
              box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            "
          />
          <div class="ex-find"><span>ក. គណនាកម្មន្តក្នុងបម្លែងពី A ទៅ B ។</span></div>
          <div class="ex-find"><span>ខ. គណនាកម្មន្តក្នុងបម្លែងពី B ទៅ C ។</span></div>
          <div class="ex-find"><span>គ. គណនាកម្មន្តក្នុងបម្លែងពី C ទៅ A ។</span></div>
          <div class="ex-find"><span>ឃ. គណនាកម្មន្តសរុបក្នុងបម្លែងបិទនេះ ។</span></div>
          <div class="ex-find"><span>ង. គណនាថាមពលកម្ដៅសរុបក្នុងបម្លែងបិទនេះ ។</span></div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គណនាកម្មន្តក្នុងបម្លែងពី A ទៅ B (\(W_{AB}\))</div>
              <div class="sol-step">
                <span class="sol-label">ពណ៌នា :</span>
                <span class="sol-math">បម្លែង \( A \to B \) ជាលំនាំអ៊ីសូបារ (សម្ពាធថេរ \( P = 1 \text{ atm} \)) បង្ហាញពីការបណ្ណែន។</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( W_{AB} = P(V_B - V_A) \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P = 1 \text{ atm} = 1.013 \times 10^5 \text{ Pa} \)<br>
                  \( V_A = 0.025 \text{ m}^3 \)<br>
                  \( V_B = 0.0125 \text{ m}^3 \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( W_{AB} = 1.013 \times 10^5 \times (0.0125 - 0.025) = -1.013 \times 10^5 \times 0.0125 = -1266.25 \text{ J} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្មន្ត \( W_{AB} = -1266.25 \text{ J} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">ខ. គណនាកម្មន្តក្នុងបម្លែងពី B ទៅ C (\(W_{BC}\))</div>
              <div class="sol-step">
                <span class="sol-label">ពណ៌នា :</span>
                <span class="sol-math">បម្លែង \( B \to C \) ជាលំនាំអ៊ីសូករ (មាឌថេរ \( V_B = V_C = 0.0125 \text{ m}^3 \))។</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( W_{BC} = 0 \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្មន្ត \( W_{BC} = 0 \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">គ. គណនាកម្មន្តក្នុងបម្លែងពី C ទៅ A (\(W_{CA}\))</div>
              <div class="sol-step">
                <span class="sol-label">ពណ៌នា :</span>
                <span class="sol-math">
                  កម្មន្តក្នុងបម្លែងពី \( C \to A \) ស្មើនឹងផ្ទៃក្រឡាក្រោមខ្សែបន្ទាត់ត្រង់ \( CA \) គឺរាងជាចតុកោណព្នាយ។
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( W_{CA} = \dfrac{P_C + P_A}{2} (V_A - V_C) \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P_C = 2 \text{ atm} = 2.026 \times 10^5 \text{ Pa} \)<br>
                  \( P_A = 1 \text{ atm} = 1.013 \times 10^5 \text{ Pa} \)<br>
                  \( V_C = 0.0125 \text{ m}^3 \)<br>
                  \( V_A = 0.025 \text{ m}^3 \Rightarrow \Delta V = 0.0125 \text{ m}^3 \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( W_{CA} = \dfrac{2.026 \times 10^5 + 1.013 \times 10^5}{2} \times (0.025 - 0.0125) \)<br>
                  \( W_{CA} = \dfrac{3.039 \times 10^5}{2} \times 0.0125 = 1.5195 \times 10^5 \times 0.0125 = 1899.375 \text{ J} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្មន្ត \( W_{CA} = 1899.375 \text{ J} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">ឃ. គណនាកម្មន្តសរុបក្នុងបម្លែងបិទនេះ (\(W_{\text{tot}}\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( W_{\text{tot}} = W_{AB} + W_{BC} + W_{CA} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( W_{\text{tot}} = -1266.25 \text{ J} + 0 + 1899.375 \text{ J} = 633.125 \text{ J} \)<br>
                  (ឬតាមផ្ទៃក្រឡាត្រីកោណ \( ABC \): \( W_{\text{tot}} = -\dfrac{1}{2} \times (0.025 - 0.0125) \times (2 - 1) \times 1.013 \times 10^5 = -633.125 \text{ J} \) បើដើរច្រាសទ្រនិចនាឡិកា។ ពិនិត្យរូបភាព៖ វដ្តដើរពី \( A \to B \to C \to A \) គឺច្រាសទ្រនិចនាឡិកា នាំឱ្យកម្មន្តសរុបស្មើនឹង \( -633.125 \text{ J} \))។
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្មន្តសរុបក្នុងវដ្តគឺ \( W_{\text{tot}} = -633.125 \text{ J} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">ង. គណនាថាមពលកម្ដៅសរុបក្នុងបម្លែងបិទនេះ (\(Q_{\text{tot}}\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">តាមច្បាប់ទី១ ទែម៉ូឌីណាមិចសម្រាប់វដ្តបិទ៖ \( \Delta U_{\text{cycle}} = 0 \Rightarrow Q_{\text{tot}} = W_{\text{tot}} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( Q_{\text{tot}} = W_{\text{tot}} = -633.125 \text{ J} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ថាមពលកម្ដៅសរុបក្នុងវដ្តគឺ \( Q_{\text{tot}} = -633.125 \text{ J} \) (បញ្ចេញកម្ដៅ)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 44 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">44</div>
          <span class="ex-title">លំហាត់អនុវត្ត៤៤</span>
        </div>
        <div class="ex-body">
          <p>
            ឧស្ម័នបរិសុទ្ធមួយធ្វើបម្លែងជាបម្លែងបិទ
            <span class="given">ABCD</span> វិញ ដូចបានបង្ហាញក្នុងរូប ។
          </p>
          <img
            src="images/image-5.png"
            alt="Exercise 44 Diagram"
            style="
              max-width: 100%;
              margin: 20px 0;
              border-radius: 12px;
              box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            "
          />
          <div class="ex-find"><span>ក. គណនាកម្មន្តសរុបក្នុងបម្លែងបិទ ។</span></div>
          <div class="ex-find"><span>ខ. គណនាកម្ដៅដែលទទួលបាន (ក្នុងបម្លែងបិទ) ។</span></div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គណនាកម្មន្តសរុបក្នុងបម្លែងបិទ (\(W_{\text{tot}}\))</div>
              <div class="sol-step">
                <span class="sol-label">ពណ៌នា :</span>
                <span class="sol-math">
                  វដ្ត \( ABCD \) វិលតាមទិសដៅទ្រនិចនាឡិកា នាំឱ្យកម្មន្តសរុបមានតម្លៃវិជ្ជមាន (\( W_{\text{tot}} > 0 \)) ស្មើនឹងផ្ទៃក្រឡាចតុកោណកែង \( ABCD \)។
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( W_{\text{tot}} = \text{ផ្ទៃក្រឡា } ABCD = (P_A - P_D)(V_C - V_D) \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P_A = 2.0 \text{ atm} \)<br>
                  \( P_D = 1.0 \text{ atm} \Rightarrow \Delta P = 1.0 \text{ atm} = 1.013 \times 10^5 \text{ Pa} \)<br>
                  \( V_D = 1.0 \text{ L} \)<br>
                  \( V_C = 2.5 \text{ L} \Rightarrow \Delta V = 1.5 \text{ L} = 1.5 \times 10^{-3} \text{ m}^3 \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( W_{\text{tot}} = 1.013 \times 10^5 \text{ Pa} \times 1.5 \times 10^{-3} \text{ m}^3 = 151.95 \text{ J} \)<br>
                  (ឬ \( 150 \text{ J} \) បើប្រើ \( 1 \text{ atm} \approx 10^5 \text{ Pa} \))
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្មន្តសរុបក្នុងបម្លែងបិទគឺ \( W_{\text{tot}} = 151.95 \text{ J} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">ខ. គណនាកម្ដៅដែលទទួលបានក្នុងបម្លែងបិទ (\(Q_{\text{tot}}\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">តាមច្បាប់ទី១ ទែម៉ូឌីណាមិចសម្រាប់វដ្តបិទ៖ \( \Delta U_{\text{cycle}} = 0 \Rightarrow Q_{\text{tot}} = W_{\text{tot}} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( Q_{\text{tot}} = 151.95 \text{ J} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ថាមពលកម្ដៅដែលប្រព័ន្ធទទួលបានគឺ \( Q_{\text{tot}} = 151.95 \text{ J} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 45 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">45</div>
          <span class="ex-title">លំហាត់អនុវត្ត៤៥</span>
        </div>
        <div class="ex-body">
          <p>
            ឧស្ម័នបរិសុទ្ធមួយបានរងការផ្លាស់ប្ដូរភាពតាមលំនាំបម្លែងបិទដូចរូបខាងក្រោម
            ។ អ័ក្សឈរត្រូវបានតាងឱ្យតម្លៃសម្ពាធ ដែល
            <span class="given">\(P_b = 7.5 \text{ kPa}\)</span> និង
            <span class="given">\(P_a = P_c = 2.5 \text{ kPa}\)</span> ។ នៅចំណុច
            a មានសីតុណ្ហភាព <span class="given">\(T_a = 200 \text{ K}\)</span>  ។
          </p>
          <img
            src="images/image-6.png"
            alt="Exercise 45 Diagram"
            style="
              max-width: 100%;
              margin: 20px 0;
              border-radius: 12px;
              box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            "
          />
          <div class="ex-find"><span>ក. ចំនួនម៉ូលនៃឧស្ម័ន ។</span></div>
          <div class="ex-find"><span>ខ. សីតុណ្ហភាពនៃឧស្ម័ននៅត្រង់ចំណុច b ។</span></div>
          <div class="ex-find"><span>គ. សីតុណ្ហភាពនៃឧស្ម័ននៅត្រង់ចំណុច c ។</span></div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គណនាចំនួនម៉ូលនៃឧស្ម័ន (\(n\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( P_a V_a = n R T_a \Rightarrow n = \dfrac{P_a V_a}{R T_a} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P_a = 2.5 \text{ kPa} = 2500 \text{ Pa} \)<br>
                  \( V_a = 1.0 \text{ m}^3 \)<br>
                  \( T_a = 200 \text{ K} \)<br>
                  \( R = 8.31 \text{ J/(mol}\cdot\text{K)} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( n = \dfrac{2500 \times 1.0}{8.31 \times 200} = \dfrac{2500}{1662} \approx 1.504 \text{ mol} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ចំនួនម៉ូលនៃឧស្ម័នគឺ \( n \approx 1.5 \text{ mol} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">ខ. គណនាសីតុណ្ហភាពនៃឧស្ម័ននៅត្រង់ចំណុច b (\(T_b\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( \dfrac{P_a V_a}{T_a} = \dfrac{P_b V_b}{T_b} \Rightarrow T_b = T_a \times \dfrac{P_b V_b}{P_a V_a} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( T_a = 200 \text{ K} \)<br>
                  \( P_a = 2.5 \text{ kPa} \), \( P_b = 7.5 \text{ kPa} \)<br>
                  \( V_a = 1.0 \text{ m}^3 \), \( V_b = 3.0 \text{ m}^3 \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( T_b = 200 \times \dfrac{7.5 \times 3.0}{2.5 \times 1.0} = 200 \times (3 \times 3) = 200 \times 9 = 1800 \text{ K} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ សីតុណ្ហភាពត្រង់ចំណុច b គឺ \( T_b = 1800 \text{ K} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">គ. គណនាសីតុណ្ហភាពនៃឧស្ម័ននៅត្រង់ចំណុច c (\(T_c\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( \dfrac{P_a V_a}{T_a} = \dfrac{P_c V_c}{T_c} \Rightarrow T_c = T_a \times \dfrac{P_c V_c}{P_a V_a} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P_a = P_c = 2.5 \text{ kPa} \Rightarrow \dfrac{P_c}{P_a} = 1 \)<br>
                  \( V_a = 1.0 \text{ m}^3 \), \( V_c = 3.0 \text{ m}^3 \)<br>
                  \( T_a = 200 \text{ K} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( T_c = 200 \times \dfrac{3.0}{1.0} = 600 \text{ K} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ សីតុណ្ហភាពត្រង់ចំណុច c គឺ \( T_c = 600 \text{ K} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 46 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">46</div>
          <span class="ex-title">លំហាត់អនុវត្ត៤៦</span>
        </div>
        <div class="ex-body">
          <p>
            ដ្យាក្រាម (P-V) តាងស៊ិចមួយនៃម៉ូលេគុលឧស្ម័នបរិសុទ្ធមួយម៉ូល
            ដូចនៅក្នុងរូប ។
          </p>
          <div style="margin-top: 10px; border-top: 1px dashed var(--border); padding-top: 10px;">
            <p>
              - ក្នុងបម្លែងពី <span class="given">A</span> ទៅ
              <span class="given">B</span> សម្ពាធប្រែប្រួល ។
            </p>
            <p style="margin-top: 6px;">
              - ក្នុងបម្លែងពី <span class="given">B</span> ទៅ
              <span class="given">C</span> មាឌថេរ ។
            </p>
            <p style="margin-top: 6px;">
              - ក្នុងបម្លែងពី <span class="given">C</span> ទៅ
              <span class="given">A</span> សម្ពាធថេរ ។
            </p>
          </div>
          <img
            src="images/image-7.png"
            alt="Exercise 46 Diagram"
            style="
              max-width: 100%;
              margin: 20px 0;
              border-radius: 12px;
              box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            "
          />
          <div class="ex-find"><span>ក. គណនាកម្មន្តក្នុងបម្លែងពី A ទៅ B ។</span></div>
          <div class="ex-find"><span>ខ. គណនាកម្មន្តក្នុងបម្លែងពី B ទៅ C ។</span></div>
          <div class="ex-find"><span>គ. គណនាកម្មន្តក្នុងបម្លែងពី C ទៅ A ។</span></div>
          <div class="ex-find"><span>ឃ. គណនាកម្មន្តសរុបក្នុងបម្លែងបិទនេះ ។</span></div>
          <div class="ex-find"><span>ង. គណនាថាមពលកម្ដៅសរុបក្នុងបម្លែងបិទនេះ ។</span></div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គណនាកម្មន្តក្នុងបម្លែងពី A ទៅ B (\(W_{AB}\))</div>
              <div class="sol-step">
                <span class="sol-label">ពណ៌នា :</span>
                <span class="sol-math">កម្មន្តក្នុងបម្លែងពី \( A \to B \) ស្មើនឹងផ្ទៃក្រឡាក្រោមខ្សែត្រង់ \( AB \) គឺចតុកោណព្នាយ។ ឧស្ម័នរីកមាឌ នាំឱ្យ \( W_{AB} > 0 \)។</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( W_{AB} = \dfrac{P_A + P_B}{2} (V_B - V_A) \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P_A = 3 \text{ atm} = 3.039 \times 10^5 \text{ Pa} \)<br>
                  \( P_B = 12 \text{ atm} = 12.156 \times 10^5 \text{ Pa} \)<br>
                  \( V_A = 5 \text{ L} \)<br>
                  \( V_B = 10 \text{ L} \Rightarrow \Delta V = 5 \text{ L} = 5 \times 10^{-3} \text{ m}^3 \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( W_{AB} = \dfrac{3.039 \times 10^5 + 12.156 \times 10^5}{2} \times 5 \times 10^{-3} \)<br>
                  \( W_{AB} = \dfrac{15.195 \times 10^5}{2} \times 5 \times 10^{-3} = 7.5975 \times 10^5 \times 5 \times 10^{-3} = 3798.75 \text{ J} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្មន្ត \( W_{AB} = 3798.75 \text{ J} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">ខ. គណនាកម្មន្តក្នុងបម្លែងពី B ទៅ C (\(W_{BC}\))</div>
              <div class="sol-step">
                <span class="sol-label">ពណ៌នា :</span>
                <span class="sol-math">បម្លែង \( B \to C \) ជាលំនាំអ៊ីសូករ (មាឌថេរ \( V_B = V_C = 10 \text{ L} \))។</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( W_{BC} = 0 \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្មន្ត \( W_{BC} = 0 \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">គ. គណនាកម្មន្តក្នុងបម្លែងពី C ទៅ A (\(W_{CA}\))</div>
              <div class="sol-step">
                <span class="sol-label">ពណ៌នា :</span>
                <span class="sol-math">បម្លែង \( C \to A \) ជាលំនាំអ៊ីសូបារ (សម្ពាធថេរ \( P = 3 \text{ atm} \)) បង្ហាញពីការបណ្ណែន នាំឱ្យ \( W_{CA} < 0 \)។</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( W_{CA} = P_A(V_A - V_C) \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P_A = 3 \text{ atm} = 3.039 \times 10^5 \text{ Pa} \)<br>
                  \( V_C = 10 \text{ L} \)<br>
                  \( V_A = 5 \text{ L} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( W_{CA} = 3.039 \times 10^5 \times (5 \times 10^{-3} - 10 \times 10^{-3}) = -3.039 \times 10^5 \times 5 \times 10^{-3} = -1519.5 \text{ J} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្មន្ត \( W_{CA} = -1519.5 \text{ J} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">ឃ. គណនាកម្មន្តសរុបក្នុងបម្លែងបិទនេះ (\(W_{\text{tot}}\))</div>
              <div class="sol-step">
                <span class="sol-label">ពណ៌នា :</span>
                <span class="sol-math">វដ្ត \( A \to B \to C \to A \) វិលតាមទិសដៅទ្រនិចនាឡិកា នាំឱ្យកម្មន្តសរុបមានតម្លៃវិជ្ជមានស្មើនឹងផ្ទៃក្រឡាត្រីកោណ \( ABC \)。</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( W_{\text{tot}} = W_{AB} + W_{BC} + W_{CA} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( W_{\text{tot}} = 3798.75 \text{ J} + 0 + (-1519.5 \text{ J}) = 2279.25 \text{ J} \)<br>
                  (ឬតាមផ្ទៃក្រឡាត្រីកោណ៖ \( W_{\text{tot}} = \dfrac{1}{2} \times (10 - 5) \times 10^{-3} \text{ m}^3 \times (12 - 3) \times 1.013 \times 10^5 \text{ Pa} = 2279.25 \text{ J} \))
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្មន្តសរុបក្នុងវដ្តគឺ \( W_{\text{tot}} = 2279.25 \text{ J} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">ង. គណនាថាមពលកម្ដៅសរុបក្នុងបម្លែងបិទនេះ (\(Q_{\text{tot}}\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">តាមច្បាប់ទី១ ទែម៉ូឌីណាមិចសម្រាប់វដ្តបិទ៖ \( \Delta U_{\text{cycle}} = 0 \Rightarrow Q_{\text{tot}} = W_{\text{tot}} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( Q_{\text{tot}} = 2279.25 \text{ J} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ថាមពលកម្ដៅសរុបគឺ \( Q_{\text{tot}} = 2279.25 \text{ J} \) (ស្រូបកម្ដៅ)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 47 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">47</div>
          <span class="ex-title">លំហាត់អនុវត្ត៤៧</span>
        </div>
        <div class="ex-body">
          <p>ចូរគណនាកម្មន្តសរុបដូចបង្ហាញក្នុងរូបខាងក្រោម៖</p>
          <img
            src="images/image-8.png"
            alt="Exercise 47 Diagram"
            style="
              max-width: 100%;
              margin: 20px 0;
              border-radius: 12px;
              box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            "
          />

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គណនាកម្មន្តសម្រាប់រូប a (លំនាំរីកមាឌលីនេអ៊ែរ)</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( W_a = \text{ផ្ទៃក្រឡាចតុកោណព្នាយ } = \dfrac{P_1 + P_2}{2} (V_2 - V_1) \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P_1 = 1.00 \times 10^5 \text{ Pa} \)<br>
                  \( P_2 = 3.00 \times 10^5 \text{ Pa} \)<br>
                  \( V_1 = 1.00 \text{ m}^3 \)<br>
                  \( V_2 = 3.00 \text{ m}^3 \Rightarrow \Delta V = 2.00 \text{ m}^3 \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( W_a = \dfrac{(1.00 + 3.00) \times 10^5}{2} \times (3.00 - 1.00) = 2.00 \times 10^5 \times 2.00 = 4.00 \times 10^5 \text{ J} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្មន្តសម្រាប់រូប a គឺ \( W_a = 4.00 \times 10^5 \text{ J} \) (ឬ \( 400 \text{ kJ} \))
              </div>

              <div class="sol-title" style="margin-top: 18px;">ខ. គណនាកម្មន្តសម្រាប់រូប b (លំនាំបណ្ណែនតាមកាំជណ្ដើរ)</div>
              <div class="sol-step">
                <span class="sol-label">ពណ៌នា :</span>
                <span class="sol-math">
                  ទិសដៅព្រួញទៅឆ្វេង (បណ្ណែន) នាំឱ្យកម្មន្តសរុបមានតម្លៃអវិជ្ជមាន។ កម្មន្តកើតឡើងតែលើបម្លែងអ៊ីសូបារពី \( 3 \to 2 \) និង \( 2 \to 1 \)។
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( W_b = - [P_{\text{high}}(V_{\text{mid}} - V_{\text{low}}) + P_{\text{low}}(V_{\text{mid}} - V_{\text{low}})] = - [P_2(3 - 2) + P_1(2 - 1)] \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P_2 = 2.00 \times 10^5 \text{ Pa} \)<br>
                  \( P_1 = 1.00 \times 10^5 \text{ Pa} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( W_b = - [2.00 \times 10^5 \times 1 + 1.00 \times 10^5 \times 1] = -3.00 \times 10^5 \text{ J} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្មន្តសម្រាប់រូប b គឺ \( W_b = -3.00 \times 10^5 \text{ J} \) (ឬ \( -300 \text{ kJ} \))
              </div>

              <div class="sol-title" style="margin-top: 18px;">គ. គណនាកម្មន្តសម្រាប់រូប c</div>
              <div class="sol-step">
                <span class="sol-label">ពណ៌នា :</span>
                <span class="sol-math">
                  ដំណើរការមានពីរវគ្គ៖ រីកមាឌអ៊ីសូបារពី \( 1.00\text{ m}^3 \to 2.00\text{ m}^3 \) និងរីកមាឌលីនេអ៊ែរពី \( 2.00\text{ m}^3 \to 3.00\text{ m}^3 \)។
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( W_c = P_1(V_{\text{mid}} - V_1) + \dfrac{P_1 + P_2}{2}(V_2 - V_{\text{mid}}) \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( W_c = 1.00 \times 10^5 \times (2.00 - 1.00) + \dfrac{1.00 \times 10^5 + 3.00 \times 10^5}{2} \times (3.00 - 2.00) \)<br>
                  \( W_c = 1.00 \times 10^5 \times 1 + 2.00 \times 10^5 \times 1 = 3.00 \times 10^5 \text{ J} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្មន្តសម្រាប់រូប c គឺ \( W_c = 3.00 \times 10^5 \text{ J} \) (ឬ \( 300 \text{ kJ} \))
              </div>

              <div class="sol-title" style="margin-top: 18px;">ឃ. គណនាកម្មន្តសម្រាប់រូប d</div>
              <div class="sol-step">
                <span class="sol-label">ពណ៌នា :</span>
                <span class="sol-math">
                  ទិសដៅព្រួញទៅឆ្វេង (បណ្ណែន) នាំឱ្យកម្មន្តសរុបអវិជ្ជមាន។ កម្មន្តកើតឡើងលើបម្លែងអ៊ីសូបារពីរវគ្គគឺនៅសម្ពាធ \( 3.00 \times 10^5\text{ Pa} \) និង \( 1.00 \times 10^5\text{ Pa} \)។
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( W_d = - [P_2(3.00 - 2.00) + P_1(2.00 - 1.00)] \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P_2 = 3.00 \times 10^5 \text{ Pa} \)<br>
                  \( P_1 = 1.00 \times 10^5 \text{ Pa} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( W_d = - [3.00 \times 10^5 \times 1 + 1.00 \times 10^5 \times 1] = -4.00 \times 10^5 \text{ J} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្មន្តសម្រាប់រូប d គឺ \( W_d = -4.00 \times 10^5 \text{ J} \) (ឬ \( -400 \text{ kJ} \))
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 48 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">48</div>
          <span class="ex-title">លំហាត់អនុវត្ត៤៨</span>
        </div>
        <div class="ex-body">
          <p>
            ឧស្ម័នបរិសុទ្ធមួយនៅខណៈដំបូងនៅ
            <span class="given">\(P_i, V_i\)</span> និង
            <span class="given">\(T_i\)</span> ត្រូវបានដំណើរការ ១ ស៊ិច (ដូចរូប)។
          </p>
          <img
            src="images/image-9.png"
            alt="Exercise 48 Diagram"
            style="
              max-width: 100%;
              margin: 20px 0;
              border-radius: 12px;
              box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            "
          />
          <div class="ex-find">
            <span>ក. គណនាកម្មន្តធ្វើទៅលើឧស្ម័នក្នុងមួយវដ្តសម្រាប់ឧស្ម័ន
            <span class="given">\(n = 1 \text{ mol}\)</span> និងសីតុណ្ហភាពដំបូង
            <span class="given">\(t = 0^\circ\text{C}\)</span> ។</span>
          </div>
          <div class="ex-find">
            <span>ខ. គណនាថាមពលកម្ដៅនៃប្រព័ន្ធឧស្ម័ននៅក្នុង ១ ស៊ិច  ។</span>
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គណនាកម្មន្តធ្វើទៅលើឧស្ម័នក្នុងមួយវដ្ត (\(W_{\text{on}}\))</div>
              <div class="sol-step">
                <span class="sol-label">ពណ៌នា :</span>
                <span class="sol-math">
                  វដ្ត \( A \to B \to C \to D \to A \) វិលតាមទិសដៅទ្រនិចនាឡិកា នាំឱ្យកម្មន្តសរុបបំពេញដោយឧស្ម័នវិជ្ជមាន (\( W_{\text{by}} > 0 \)) ស្មើផ្ទៃក្រឡាចតុកោណកែង។<br>
                  កម្មន្តធ្វើទៅលើឧស្ម័នគឺ \( W_{\text{on}} = -W_{\text{by}} \)<br>
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( W_{\text{by}} = (3P_i - P_i)(3V_i - V_i) = 2P_i \times 2V_i = 4P_i V_i \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">តែ :</span>
                <span class="sol-math">តាមសមីការស្ថានភាពឧស្ម័នបរិសុទ្ធ៖ \( P_i V_i = n R T_i \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">នាំឱ្យ :</span>
                <span class="sol-math">\( W_{\text{by}} = 4 n R T_i \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( n = 1 \text{ mol} \)<br>
                  \( T_i = 0^\circ\text{C} = 273 \text{ K} \)<br>
                  \( R = 8.31 \text{ J/(mol}\cdot\text{K)} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( W_{\text{by}} = 4 \times 1 \text{ mol} \times 8.31 \text{ J/(mol}\cdot\text{K)} \times 273 \text{ K} = 9074.52 \text{ J} \)<br>
                  នាំឱ្យកម្មន្តធ្វើទៅលើឧស្ម័ន៖ \( W_{\text{on}} = -W_{\text{by}} = -9074.52 \text{ J} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្មន្តធ្វើលើឧស្ម័នគឺ \( W_{\text{on}} = -9074.52 \text{ J} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">ខ. គណនាថាមពលកម្ដៅសរុបក្នុង ១ ស៊ិច (\(Q_{\text{tot}}\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">តាមច្បាប់ទី១ ទែម៉ូឌីណាមិចសម្រាប់វដ្តបិទ៖ \( \Delta U_{\text{cycle}} = 0 \Rightarrow Q_{\text{tot}} = W_{\text{by}} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">\( Q_{\text{tot}} = 9074.52 \text{ J} \)</span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ថាមពលកម្ដៅនៃប្រព័ន្ធឧស្ម័នក្នុងមួយវដ្តគឺ \( Q_{\text{tot}} = 9074.52 \text{ J} \) (ស្រូបកម្ដៅ)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 49 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">49</div>
          <span class="ex-title">លំហាត់អនុវត្ត៤៩</span>
        </div>
        <div class="ex-body">
          <p>គំរូនៃឧស្ម័នបរិសុទ្ធមួយបានដំណើរការបង្ហាញក្នុងរូបភាព ។</p>
          <div style="margin-top: 10px; border-top: 1px dashed var(--border); padding-top: 10px;">
            <p>
              - ពី <span class="given">A</span> ដល់
              <span class="given">B</span> គឺដំណើរការដោយលំនាំអាដ្យាបាទិច ។
            </p>
            <p style="margin-top: 6px;">
              - ពី <span class="given">B</span> ទៅ
              <span class="given">C</span> គឺជាលំនាំអ៊ីសូបាជាមួយនឹងការស្រូបកម្ដៅ
              <span class="given">345 \text{ kJ}</span>  ។
            </p>
            <p style="margin-top: 6px;">
              - ពី <span class="given">C</span> ទៅ
              <span class="given">D</span> គឺជាលំនាំអ៊ីសូទែម ។
            </p>
            <p style="margin-top: 6px;">
              - ពី <span class="given">D</span> ដល់
              <span class="given">A</span>
              វាជាអ៊ីសូបារជាមួយនឹងការបញ្ចេញថាមពលកម្ដៅ
              <span class="given">371 \text{ kJ}</span> ចាកចេញពីប្រព័ន្ធ ។
            </p>
          </div>
          <img
            src="images/image-10.png"
            alt="Exercise 49 Diagram"
            style="
              max-width: 100%;
              margin: 20px 0;
              border-radius: 12px;
              box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            "
          />
          <div class="ex-find">
            <span>កំណត់ផលសងថាមពលក្នុង <span class="given">\(U_A - U_B\)</span>  ។</span>
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">គណនាផលសងថាមពលក្នុង (\(U_A - U_B\))</div>
              <div class="sol-step">
                <span class="sol-label">ពណ៌នា :</span>
                <span class="sol-math">
                  ក្នុងមួយវដ្តបិទ \( A \to B \to C \to D \to A \): បម្រែបម្រួលថាមពលក្នុងសរុបគឺសូន្យ។<br>
                  \( \Delta U_{\text{cycle}} = \Delta U_{AB} + \Delta U_{BC} + \Delta U_{CD} + \Delta U_{DA} = 0 \)<br>
                  លំនាំ \( C \to D \) ជាលំនាំអ៊ីសូទែម សីតុណ្ហភាពថេរ \( \Rightarrow \Delta U_{CD} = 0 \)<br>
                  នាំឱ្យ៖ \( \Delta U_{AB} + \Delta U_{BC} + \Delta U_{DA} = 0 \)<br>
                  ដែល \( \Delta U_{AB} = U_B - U_A \Rightarrow U_A - U_B = - \Delta U_{AB} = \Delta U_{BC} + \Delta U_{DA} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">១. គណនា \(\Delta U_{BC}\) :</span>
                <span class="sol-math">
                  តាមរូបមន្ត៖ \( \Delta U_{BC} = Q_{BC} - W_{BC} = Q_{BC} - P_B(V_C - V_B) \)<br>
                  ដោយ៖ \( Q_{BC} = +345 \text{ kJ} = 345000 \text{ J} \) (ស្រូបកម្ដៅ)<br>
                  \( P_B = 3 \text{ atm} = 3.039 \times 10^5 \text{ Pa} \)<br>
                  \( V_B = 0.09 \text{ m}^3 \), \( V_C = 0.4 \text{ m}^3 \Rightarrow \Delta V_{BC} = 0.31 \text{ m}^3 \)<br>
                  នាំឱ្យ៖ \( W_{BC} = 3.039 \times 10^5 \times 0.31 \approx 94209 \text{ J} = 94.21 \text{ kJ} \)<br>
                  គេបាន៖ \( \Delta U_{BC} = 345 - 94.21 = 250.79 \text{ kJ} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">២. គណនា \(\Delta U_{DA}\) :</span>
                <span class="sol-math">
                  តាមរូបមន្ត៖ \( \Delta U_{DA} = Q_{DA} - W_{DA} = Q_{DA} - P_D(V_A - V_D) \)<br>
                  ដោយ៖ \( Q_{DA} = -371 \text{ kJ} = -371000 \text{ J} \) (បញ្ចេញកម្ដៅ)<br>
                  \( P_D = 1 \text{ atm} = 1.013 \times 10^5 \text{ Pa} \)<br>
                  \( V_D = 1.2 \text{ m}^3 \), \( V_A = 0.2 \text{ m}^3 \Rightarrow \Delta V_{DA} = -1.0 \text{ m}^3 \)<br>
                  នាំឱ្យ៖ \( W_{DA} = 1.013 \times 10^5 \times (-1.0) = -1.013 \times 10^5 \text{ J} = -101.3 \text{ kJ} \)<br>
                  គេបាន៖ \( \Delta U_{DA} = -371 - (-101.3) = -269.7 \text{ kJ} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">៣. គណនា \(U_A - U_B\) :</span>
                <span class="sol-math">
                  គេបាន៖ \( U_A - U_B = \Delta U_{BC} + \Delta U_{DA} = 250.79 \text{ kJ} + (-269.7 \text{ kJ}) = -18.91 \text{ kJ} \)<br>
                  (ឬ \( U_A - U_B = -19 \text{ kJ} \) បើគេប្រើប្រហែល \( 1 \text{ atm} \approx 10^5 \text{ Pa} \))
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ផលសងថាមពលក្នុងគឺ \( U_A - U_B = -18.91 \text{ kJ} \) (ឬ \( -18910 \text{ J} \))
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- 50 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">50</div>
          <span class="ex-title">លំហាត់អនុវត្ត៥០</span>
        </div>
        <div class="ex-body">
          <p>
            ម៉ូលេគុលឧស្ម័នមួយត្រូវបានស្ថិតនៅក្នុងប្រព័ន្ធទែម៉ូឌីណាមិច
            ហើយត្រូវរងនូវបំលែងភាពពី <span class="given">I</span> ទៅ
            <span class="given">F</span> (ដូចបានបង្ហាញនៅក្នុងរូបខាងក្រោម)។
            ថាមពលកម្ដៅ
            <span class="given">\(418 \text{ J}\)</span>
            ត្រូវបានស្រូបដោយប្រព័ន្ធនៅពេលដែលផ្លាស់ប្តូរពីចំណុច
            <span class="given">I</span> ទៅ
            <span class="given">F</span> (តាមគន្លងត្រង់)  ។
          </p>
          <img
            src="images/image-11.png"
            alt="Exercise 50 Diagram"
            style="
              max-width: 100%;
              margin: 20px 0;
              border-radius: 12px;
              box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            "
          />
          <div style="margin-top: 15px">
            <div class="ex-find">
              <span>ក. គណនាបម្រែបម្រួលថាមពលក្នុងនៃប្រព័ន្ធតាមគន្លង IF ។</span>
            </div>
            <div class="ex-find">
              <span>ខ.
              តើថាមពលកម្ដៅប៉ុន្មានដែលផ្តល់ឱ្យប្រព័ន្ធនៅពេលដែលដំណើរការនៃប្រព័ន្ធតាមគន្លង
              IAF ?</span>
            </div>
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គណនាបម្រែបម្រួលថាមពលក្នុងនៃប្រព័ន្ធតាមគន្លង IF (\(\Delta U_{IF}\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( \Delta U_{IF} = Q_{IF} - W_{IF} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">តែ :</span>
                <span class="sol-math">\( W_{IF} \) ស្មើផ្ទៃក្រឡាក្រោមគន្លង \( IF \) (ចតុកោណព្នាយ)៖ \( W_{IF} = \dfrac{P_I + P_F}{2} (V_F - V_I) \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( Q_{IF} = +418 \text{ J} \) (ស្រូបកម្ដៅ)<br>
                  \( P_I = 4 \text{ atm} = 4.052 \times 10^5 \text{ Pa} \)<br>
                  \( P_F = 1 \text{ atm} = 1.013 \times 10^5 \text{ Pa} \)<br>
                  \( V_I = 2 \text{ L} = 2 \times 10^{-3} \text{ m}^3 \)<br>
                  \( V_F = 4 \text{ L} = 4 \times 10^{-3} \text{ m}^3 \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( W_{IF} = \dfrac{4.052 \times 10^5 + 1.013 \times 10^5}{2} \times (4 \times 10^{-3} - 2 \times 10^{-3}) \)<br>
                  \( W_{IF} = 2.5325 \times 10^5 \times 2 \times 10^{-3} = 506.5 \text{ J} \)<br>
                  នាំឱ្យ៖ \( \Delta U_{IF} = 418 - 506.5 = -88.5 \text{ J} \)<br>
                  (ឬ \( \Delta U_{IF} = -82 \text{ J} \) បើប្រើប្រហែល \( 1 \text{ atm} \approx 10^5 \text{ Pa} \) នាំឱ្យ \( W_{IF} = 500 \text{ J} \))
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ បម្រែបម្រួលថាមពលក្នុងគឺ \( \Delta U_{IF} = -88.5 \text{ J} \)
              </div>

              <div class="sol-title" style="margin-top: 16px;">ខ. គណនាថាមពលកម្ដៅតាមគន្លង IAF (\(Q_{IAF}\))</div>
              <div class="sol-step">
                <span class="sol-label">ពណ៌នា :</span>
                <span class="sol-math">
                  ដោយសារថាមពលក្នុងជាអនុគមន៍ស្ថានភាព មិនអាស្រ័យនឹងផ្លូវដើរ នាំឱ្យបម្រែបម្រួលថាមពលក្នុងតាមគន្លង \( IAF \) ស្មើនឹងតាមគន្លង \( IF \) ដែរ៖ \( \Delta U_{IAF} = \Delta U_{IF} = -88.5 \text{ J} \)។
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( Q_{IAF} = \Delta U_{IAF} + W_{IAF} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">តែ :</span>
                <span class="sol-math">
                  \( W_{IAF} = W_{IA} + W_{AF} \)<br>
                  គន្លង \( IA \) ជាលំនាំអ៊ីសូបារ៖ \( W_{IA} = P_I(V_A - V_I) \)<br>
                  គន្លង \( AF \) ជាលំនាំអ៊ីសូករ៖ \( W_{AF} = 0 \)<br>
                  នាំឱ្យ៖ \( W_{IAF} = P_I(V_A - V_I) \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( P_I = 4 \text{ atm} = 4.052 \times 10^5 \text{ Pa} \)<br>
                  \( V_I = 2 \text{ L} \), \( V_A = 4 \text{ L} \Rightarrow \Delta V_{IA} = 2 \times 10^{-3} \text{ m}^3 \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( W_{IAF} = 4.052 \times 10^5 \times 2 \times 10^{-3} = 810.4 \text{ J} \)<br>
                  នាំឱ្យ៖ \( Q_{IAF} = -88.5 \text{ J} + 810.4 \text{ J} = 721.9 \text{ J} \)<br>
                  (ឬ \( Q_{IAF} = 718 \text{ J} \) បើប្រើប្រហែល \( 1 \text{ atm} \approx 10^5 \text{ Pa} \))
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ថាមពលកម្ដៅផ្តល់ឱ្យប្រព័ន្ធតាមគន្លង IAF គឺ \( Q_{IAF} = 721.9 \text{ J} \)
              </div>
            </div>
          </details>
        </div>
      </div>
    </div>
  </body>
</html>
