<!doctype html>
<html lang="km">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>លំហាត់អនុវត្ត ១១–២០ | StudyNest Physics G12</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@300;400;600;700&family=DM+Serif+Display&display=swap"
      rel="stylesheet"
    />
    <script>
      MathJax = {
        tex: { inlineMath: [["\\(", "\\)"]], displayMath: [["\\[", "\\]"]] },
        options: { skipHtmlTags: ["script", "noscript", "style", "textarea"] },
      };
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/3.2.2/es5/tex-chtml.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
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
      .ex-card:nth-child(3n + 2) {
        border-left-color: var(--accent2);
      }
      .ex-card:nth-child(3n) {
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
      .ex-card:nth-child(3n + 2) .ex-badge {
        background: var(--accent2);
      }
      .ex-card:nth-child(3n) .ex-badge {
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
      .ex-card:nth-child(3n + 2) .given {
        background: #d1fae5;
        color: #065f46;
      }
      .ex-card:nth-child(3n) .given {
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

      .system-diagram {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 20px auto 0;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
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
        href="lesson 1_home"
        style="
          color: rgba(78, 81, 224, 0.993);
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
        <div class="header-eyebrow">⚛ ដែន និងកម្លាំងម៉ាញេទិច</div>
        <h1>លំហាត់<em>អនុវត្ត ១១–២០</em></h1>
        <p>លំហាត់ជ្រើសរើសសំខាន់ៗ ត្រៀមប្រឡងសញ្ញាបត្រមធ្យមសិក្សាទុតិយភូមិ</p>
      </div>
    </header>
    <div class="container">
      <div class="section-head">
        <h2>លំហាត់ទាំងអស់</h2>
        <div class="section-head-line"></div>
      </div>

      <!-- Exercise 11 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">11</div>
          <div class="ex-title">លំហាត់អនុវត្ត១១</div>
        </div>
        <div class="ex-body">
          សៀគ្វីវង់មួយស្ថិតក្នុងមជ្ឈដ្ឋានខ្យល់ មានផ្ចិត \(O\) កាំ
          <span class="given">\(R = 12.56\text{ cm}\)</span> ហើយឆ្លងកាត់ដោយចរន្ត
          \(I\) និងមានតម្លៃដែនម៉ាញេទិចត្រង់ផ្ចិត \(O\) គឺ
          <span class="given">\(B = 400\mu\text{T}\)</span>។

          <div class="ex-find">
            <span>គណនាតម្លៃអាំងតង់ស៊ីតេចរន្តដែលឆ្លងកាត់ខ្សែចម្លង។</span>
          </div>
          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">គណនាតម្លៃអាំងតង់ស៊ីតេចរន្តដែលឆ្លងកាត់ខ្សែចម្លង</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( B = 2\pi \times 10^{-7} \dfrac{I}{R} \implies I = \dfrac{B \cdot R}{2\pi \times 10^{-7}} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( B = 400\,\mu\text{T} = 400 \times 10^{-6}\,\text{T} = 4 \times 10^{-4}\,\text{T} \)<br>
                  \( R = 12.56\,\text{cm} = 12.56 \times 10^{-2}\,\text{m} \approx 4\pi \times 10^{-2}\,\text{m} \) (ព្រោះ \(4 \times 3.14 = 12.56\))
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( I = \dfrac{4 \times 10^{-4} \times 4\pi \times 10^{-2}}{2\pi \times 10^{-7}} = \dfrac{16\pi \times 10^{-6}}{2\pi \times 10^{-7}} = 8 \times 10 = 80\,\text{A} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ អាំងតង់ស៊ីតេចរន្តដែលឆ្លងកាត់គឺ \( I = 80\,\text{A} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- Exercise 12 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">12</div>
          <div class="ex-title">លំហាត់អនុវត្ត១២</div>
        </div>
        <div class="ex-body">
          ប៊ូប៊ីនសំប៉ែតមាន
          <span class="given">\(N = 60\text{ }\)ស្ពៀ</span> ហើយកាំមធ្យម
          <span class="given">\(R = 15.7\text{ cm}\)</span> និងឆ្លងកាត់ដោយចរន្ត
          <span class="given">\(I = 20\text{ A}\)</span>។
          ដោយដឹងថាជ្រាបម៉ាញេទិចរបស់មជ្ឈដ្ឋានខ្យល់
          <span class="given">\(\mu_0 = 4\pi \times 10^{-7}\text{ SI}\)</span>។
          <div class="ex-find">
            <span>គណនាអាំងឌុចស្យុងម៉ាញេទិចត្រង់ផ្ចិតនៃបូប៊ីនសំប៉ែតនេះ ។</span>
          </div>
          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">គណនាអាំងឌុចស្យុងម៉ាញេទិចត្រង់ផ្ចិតនៃបូប៊ីនសំប៉ែត</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( B = 2\pi \times 10^{-7} \dfrac{N \cdot I}{R} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( N = 60\,\text{ស្ពៀ} \)<br>
                  \( I = 20\,\text{A} \)<br>
                  \( R = 15.7\,\text{cm} = 15.7 \times 10^{-2}\,\text{m} \approx 5\pi \times 10^{-2}\,\text{m} \) (ព្រោះ \(5 \times 3.14 = 15.7\))
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( B = 2\pi \times 10^{-7} \times \dfrac{60 \times 20}{5\pi \times 10^{-2}} = \dfrac{2400\pi \times 10^{-7}}{5\pi \times 10^{-2}} = 480 \times 10^{-5}\,\text{T} = 4.8 \times 10^{-3}\,\text{T} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ អាំងឌុចស្យុងម៉ាញេទិចគឺ \( B = 4.8\,\text{mT} = 4.8 \times 10^{-3}\,\text{T} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- Exercise 13 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">13</div>
          <div class="ex-title">លំហាត់អនុវត្ត១៣</div>
        </div>
        <div class="ex-body">
          ប៊ូប៊ីនសំប៉ែតមាន
          <span class="given">\(N = 200\text{ }\)ស្ពៀ</span> ហើយកាំមធ្យម
          <span class="given">\(R = 40\text{ cm}\)</span> និងឆ្លងកាត់ដោយចរន្ត
          \(I\)។ គេឃើញដែនម៉ាញេទិចត្រង់ផ្ចិតនៃប៊ូប៊ីនសំប៉ែតនេះមានតម្លៃ
          <span class="given">\(B = 7.85 \times 10^{-3}\text{ mT}\)</span>។
          គេឱ្យ
          <span class="given">\(\mu_0 = 4\pi \times 10^{-7}\text{ SI}\)</span>។
          <div class="ex-find">
            <span>គណនាអាំងតង់ ស៊ីតេចរន្តឆ្លងកាត់បូប៊ីនសំប៉ែតនេះ ។</span>
          </div>
          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">គណនាអាំងតង់ស៊ីតេចរន្តឆ្លងកាត់បូប៊ីនសំប៉ែត</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( B = 2\pi \times 10^{-7} \dfrac{N \cdot I}{R} \implies I = \dfrac{B \cdot R}{2\pi \times 10^{-7} \cdot N} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( N = 200\,\text{ស្ពៀ} \)<br>
                  \( R = 40\,\text{cm} = 0.4\,\text{m} \)<br>
                  \( B = 7.85 \times 10^{-3}\,\text{mT} = 7.85 \times 10^{-6}\,\text{T} \approx 2.5\pi \times 10^{-6}\,\text{T} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( I = \dfrac{7.85 \times 10^{-6} \times 0.4}{2\pi \times 10^{-7} \times 200} = \dfrac{3.14 \times 10^{-6}}{400\pi \times 10^{-7}} = \dfrac{\pi \times 10^{-6}}{400\pi \times 10^{-7}} = 0.025\,\text{A} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ អាំងតង់ស៊ីតេចរន្តឆ្លងកាត់គឺ \( I = 0.025\,\text{A} = 25\,\text{mA} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- Exercise 14 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">14</div>
          <div class="ex-title">លំហាត់អនុវត្ត១៤</div>
        </div>
        <div class="ex-body">
          ប៊ូប៊ីនសំប៉ែតមាន
          <span class="given">\(N = 500\text{ }\)ស្ពៀ</span> ហើយកាំមធ្យម
          <span class="given">\(R = 20\text{ cm}\)</span> និងឆ្លងកាត់ដោយចរន្ត
          \(I\)។ គេឃើញដែនម៉ាញេទិចត្រង់ផ្ចិតនៃប៊ូប៊ីនសំប៉ែតនេះមានតម្លៃ
          <span class="given">\(B = 7.85 \times 10^{-3}\text{ mT}\)</span>។
          គេឱ្យ
          <span class="given">\(\mu_0 = 4\pi \times 10^{-7}\text{ SI}\)</span>។
          <div class="ex-find">
            <span>គណនាអាំងតង់ស៊ីតេចរន្តឆ្លងកាត់ប៊ូប៊ីនសំប៉ែតនេះ។</span>
          </div>
          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">គណនាអាំងតង់ស៊ីតេចរន្តឆ្លងកាត់ប៊ូប៊ីនសំប៉ែត</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( B = 2\pi \times 10^{-7} \dfrac{N \cdot I}{R} \implies I = \dfrac{B \cdot R}{2\pi \times 10^{-7} \cdot N} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( N = 500\,\text{ស្ពៀ} \)<br>
                  \( R = 20\,\text{cm} = 0.2\,\text{m} \)<br>
                  \( B = 7.85 \times 10^{-3}\,\text{mT} = 7.85 \times 10^{-6}\,\text{T} \approx 2.5\pi \times 10^{-6}\,\text{T} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( I = \dfrac{7.85 \times 10^{-6} \times 0.2}{2\pi \times 10^{-7} \times 500} = \dfrac{1.57 \times 10^{-6}}{1000\pi \times 10^{-7}} \approx \dfrac{0.5\pi \times 10^{-6}}{1000\pi \times 10^{-7}} = 0.005\,\text{A} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ អាំងតង់ស៊ីតេចរន្តឆ្លងកាត់គឺ \( I = 0.005\,\text{A} = 5\,\text{mA} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- Exercise 15 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">15</div>
          <div class="ex-title">លំហាត់អនុវត្ត១៥</div>
        </div>
        <div class="ex-body">
          ប៊ូប៊ីនសំប៉ែតមួយមាន \(N\) ស្ពៀ ហើយមានកាំមធ្យម
          <span class="given">\(R = 25.12\text{ cm}\)</span>
          និងឆ្លងកាត់ដោយចរន្តអគ្គិសនី
          <span class="given">\(I = 5\text{ A}\)</span>
          ហើយគេឃើញដែនម៉ាញេទិចត្រង់ផ្ចិតនៃប៊ូប៊ីនសំប៉ែតនេះមានតម្លៃ
          <span class="given">\(B = 4\text{ mT}\)</span>។

          <div class="ex-find">
            <span>គណនាចំនួនស្ពៀដែលរុំដើម្បីបង្កើតប៊ូប៊ីនសំប៉ែតនេះ។</span>
          </div>
          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">គណនាចំនួនស្ពៀដែលរុំដើម្បីបង្កើតប៊ូប៊ីនសំប៉ែត</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( B = 2\pi \times 10^{-7} \dfrac{N \cdot I}{R} \implies N = \dfrac{B \cdot R}{2\pi \times 10^{-7} \cdot I} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( R = 25.12\,\text{cm} = 25.12 \times 10^{-2}\,\text{m} \approx 8\pi \times 10^{-2}\,\text{m} \) (ព្រោះ \(8 \times 3.14 = 25.12\))<br>
                  \( I = 5\,\text{A} \)<br>
                  \( B = 4\,\text{mT} = 4 \times 10^{-3}\,\text{T} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( N = \dfrac{4 \times 10^{-3} \times 8\pi \times 10^{-2}}{2\pi \times 10^{-7} \times 5} = \dfrac{32\pi \times 10^{-5}}{10\pi \times 10^{-7}} = 3.2 \times 10^2 = 320\,\text{ស្ពៀ} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ចំនួនស្ពៀគឺ \( N = 320\,\text{ស្ពៀ} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- Exercise 16 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">16</div>
          <div class="ex-title">លំហាត់អនុវត្ត១៦</div>
        </div>
        <div class="ex-body">
          ប៊ូប៊ីនសំប៉ែតមួយមាន
          <span class="given">\(N = 50\text{ }\)ស្ពៀ</span> ហើយមានកាំមធ្យម
          <span class="given">\(R = 0.10\text{ m}\)</span> និងឆ្លងកាត់ដោយចរន្ត
          <span class="given">\(I = 20\text{ A}\)</span>។ គេឱ្យ
          <span class="given">\(\mu_0 = 4\pi \times 10^{-7}\text{ SI}\)</span>។
          <div class="ex-find">
            <span
              >គណនាអាំងតង់ស៊ីតេឌុចស្យុងម៉ាញេទិចត្រង់ផ្ចិតនៃប៊ូប៊ីនសំប៉ែតនេះ។</span
            >
          </div>
          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">គណនាអាំងឌុចស្យុងម៉ាញេទិចត្រង់ផ្ចិតនៃប៊ូប៊ីនសំប៉ែត</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( B = 2\pi \times 10^{-7} \dfrac{N \cdot I}{R} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( N = 50\,\text{ស្ពៀ} \)<br>
                  \( R = 0.10\,\text{m} \)<br>
                  \( I = 20\,\text{A} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( B = 2\pi \times 10^{-7} \times \dfrac{50 \times 20}{0.10} = 2\pi \times 10^{-7} \times 10000 = 2\pi \times 10^{-3}\,\text{T} \approx 6.28 \times 10^{-3}\,\text{T} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ អាំងឌុចស្យុងម៉ាញេទិចគឺ \( B = 6.28\,\text{mT} = 2\pi \times 10^{-3}\,\text{T} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- Exercise 17 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">17</div>
          <div class="ex-title">លំហាត់អនុវត្ត១៧</div>
        </div>
        <div class="ex-body">
          ប៊ូប៊ីនសំប៉ែតមួយមានចំនួន
          <span class="given">\(N = 200\text{ }\)ស្ពៀ</span> ហើយមានកាំ
          <span class="given">\(R = 25.12\text{ m}\)</span> និងឆ្លងកាត់ដោយចរន្ត
          <span class="given">\(I = 4\text{ A}\)</span>
          ក្នុងមជ្ឈដ្ឋានជ្រាបម៉ាញេទិចធៀប
          <span class="given">\(\mu_r = 500\)</span>។

          <div class="ex-find">
            <span
              >គណនាអាំងតង់ស៊ីតេឌុចស្យុងម៉ាញេទិចត្រង់ផ្ចិតនៃប៊ូប៊ីនសំប៉ែតនេះ។</span
            >
          </div>
          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">គណនាអាំងឌុចស្យុងម៉ាញេទិចត្រង់ផ្ចិតនៃប៊ូប៊ីនសំប៉ែត</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( B = \mu_r \cdot B_0 = \mu_r \cdot 2\pi \times 10^{-7} \dfrac{N \cdot I}{R} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( N = 200\,\text{ស្ពៀ} \)<br>
                  \( R = 25.12\,\text{m} \approx 8\pi\,\text{m} \) (ព្រោះ \(8 \times 3.14 = 25.12\))<br>
                  \( I = 4\,\text{A} \)<br>
                  \( \mu_r = 500 \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( B = 500 \times 2\pi \times 10^{-7} \times \dfrac{200 \times 4}{8\pi} = 1000\pi \times 10^{-7} \times \dfrac{800}{8\pi} = 10^{-2}\,\text{T} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ អាំងឌុចស្យុងម៉ាញេទិចគឺ \( B = 10^{-2}\,\text{T} = 10\,\text{mT} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- Exercise 18 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">18</div>
          <div class="ex-title">លំហាត់អនុវត្ត១៨</div>
        </div>
        <img
          src="images/image-1.png"
          alt="ម៉ាស៊ីនកម្ដៅ"
          class="system-diagram"
        />
        <div class="ex-body">
          សៀគ្វីវង់ពីរស្ថិតក្នុងមជ្ឈដ្ឋានខ្យល់ មានផ្ចិត \(O\)
          រួមគ្នាមានកាំស្មើគ្នា
          <span class="given">\(R = 6.28\text{ cm}\)</span>។
          សៀគ្វីវង់ទាំងពីរស្ថិតនៅក្នុងប្លង់កែងគ្នាដូចរូប
          ហើយឆ្លងកាត់ដោយចរន្តដែលមានតម្លៃស្មើគ្នាពេលនេះ
          គេឃើញដែនម៉ាញេទិចផ្គួបត្រង់ផ្ចិត \(O\) មានតម្លៃ
          <span class="given">\(B = 30\sqrt{2}\mu\text{T}\)</span>។
          ដោយដឹងថាជ្រាបម៉ាញេទិចរបស់មជ្ឈដ្ឋានខ្យល់
          <span class="given">\(\mu_0 = 4\pi \times 10^{-7}\text{ SI}\)</span
          >។<br />

          ក.
          ចូរធ្វើគំនូសបំព្រួញវ៉ិចទ័រដែនម៉ាញេទិចត្រង់ផ្ចិតបង្កើតដោយសៀគ្វីវង់នីមួយៗ។<br />
          ខ. គណនាតម្លៃដែនម៉ាញេទិចត្រង់ផ្ចិត \(O\) បង្កើតដោយសៀគ្វីវង់នីមួយៗ។<br />
          គ. គណនាអាំងតង់ស៊ីតេចរន្ត \(I\) ឆ្លងកាត់សៀគ្វីវង់នីមួយៗ។
          
          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ដំណោះស្រាយលំហាត់១៨</div>
              
              <div class="sol-step">
                <span class="sol-label">ក. គំនូសវ៉ិចទ័រ :</span>
                <span class="sol-math">
                  ដោយប្លង់នៃវង់ខ្សែទាំងពីរត្រួតស៊ីគ្នាត្រង់ផ្ចិត \(O\) ហើយកែងគ្នា នោះវ៉ិចទ័រដែនម៉ាញេទិច \(\vec{B}_1\) និង \(\vec{B}_2\) ដែលបង្កើតដោយខ្សែនីមួយៗគឺកែងគ្នា (\(\vec{B}_1 \perp \vec{B}_2\))។<br>
                  វ៉ិចទ័រដែនម៉ាញេទិចផ្គួបគឺ៖ \(\vec{B} = \vec{B}_1 + \vec{B}_2\)
                </span>
              </div>

              <div class="sol-step">
                <span class="sol-label">ខ. ដែនម៉ាញេទិច :</span>
                <span class="sol-math">
                  ដោយចរន្តឆ្លងកាត់មានតម្លៃស្មើគ្នា និងកាំស្មើគ្នា នាំឱ្យ៖ \( B_1 = B_2 = B' \)<br>
                  ដោយ \(\vec{B}_1 \perp \vec{B}_2\) គេបាន៖ \( B = \sqrt{B_1^2 + B_2^2} = B'\sqrt{2} \)<br>
                  នាំឱ្យ៖ \( B' = \dfrac{B}{\sqrt{2}} = \dfrac{30\sqrt{2}\,\mu\text{T}}{\sqrt{2}} = 30\,\mu\text{T} \)<br>
                  ដូចនេះ៖ \( B_1 = B_2 = 30\,\mu\text{T} = 3 \times 10^{-5}\,\text{T} \)
                </span>
              </div>

              <div class="sol-step">
                <span class="sol-label">គ. គណនា \(I\) :</span>
                <span class="sol-math">
                  តាមរូបមន្ត៖ \( B' = 2\pi \times 10^{-7} \dfrac{I}{R} \implies I = \dfrac{B' \cdot R}{2\pi \times 10^{-7}} \)<br>
                  ដោយ៖<br>
                  \( B' = 30\,\mu\text{T} = 3 \times 10^{-5}\,\text{T} \)<br>
                  \( R = 6.28\,\text{cm} = 6.28 \times 10^{-2}\,\text{m} \approx 2\pi \times 10^{-2}\,\text{m} \) (ព្រោះ \(2 \times 3.14 = 6.28\))<br>
                  គេបាន៖<br>
                  \( I = \dfrac{3 \times 10^{-5} \times 2\pi \times 10^{-2}}{2\pi \times 10^{-7}} = 3\,\text{A} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ចរន្តឆ្លងកាត់ខ្សែនីមួយៗគឺ \( I = 3\,\text{A} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- Exercise 19 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">19</div>
          <div class="ex-title">លំហាត់អនុវត្ត១៩</div>
        </div>
        <div class="ex-body">
          ខ្សែចម្លងវង់ពីរមានកាំស្មើគ្នា
          <span class="given">\(R = 5\text{ cm}\)</span> មានផ្ចិតរួម
          ត្រូវដាក់យ៉ាងណាឱ្យអ័ក្សកែងគ្នា។ បើគេឱ្យចរន្តឆ្លងកាត់មានតម្លៃស្មើគ្នា
          <span class="given">\(I = 5\text{ A}\)</span>។
          <div class="ex-find">
            <span
              >គណនាដែនម៉ាញេទិចត្រង់ផ្ចិតរួមនៃវង់ខ្សែទាំងពីរដោយគូសរូបបញ្ជាក់ផង។</span
            >
          </div>
          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">គណនាដែនម៉ាញេទិចត្រង់ផ្ចិតរួមនៃវង់ខ្សែទាំងពីរ</div>
              <div class="sol-step">
                <span class="sol-label">ពន្យល់ :</span>
                <span class="sol-math">
                  ដោយអ័ក្សនៃខ្សែចម្លងវង់ទាំងពីរកែងគ្នា នោះប្លង់នៃវង់ខ្សែទាំងពីរក៏កែងគ្នាដែរ។ នាំឱ្យវ៉ិចទ័រដែនម៉ាញេទិចដែលបង្កើតដោយវង់ខ្សែនីមួយៗត្រង់ផ្ចិតរួម \(O\) មានទិសកែងគ្នា (\(\vec{B}_1 \perp \vec{B}_2\))។
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">រូបមន្តដែន :</span>
                <span class="sol-math">
                  \( B_1 = B_2 = 2\pi \times 10^{-7} \dfrac{I}{R} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( I = 5\,\text{A} \)<br>
                  \( R = 5\,\text{cm} = 5 \times 10^{-2}\,\text{m} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គណនា :</span>
                <span class="sol-math">
                  \( B_1 = B_2 = 2\pi \times 10^{-7} \times \dfrac{5}{5 \times 10^{-2}} = 2\pi \times 10^{-5}\,\text{T} \approx 6.28 \times 10^{-5}\,\text{T} \)<br>
                  ដែនម៉ាញេទិចផ្គួបគឺ៖ \( B = \sqrt{B_1^2 + B_2^2} = B_1\sqrt{2} \)<br>
                  \( B = 2\pi \times 10^{-5} \times \sqrt{2} = 2\pi\sqrt{2} \times 10^{-5}\,\text{T} \approx 8.88 \times 10^{-5}\,\text{T} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ដែនម៉ាញេទិចផ្គួបត្រង់ផ្ចិតរួមគឺ \( B \approx 8.88 \times 10^{-5}\,\text{T} \)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- Exercise 20 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">20</div>
          <div class="ex-title">លំហាត់អនុវត្ត២០</div>
        </div>
        <div class="ex-body">
          សូឡេណូអុីតមួយមានប្រវែង
          <span class="given">\(L = 20\text{ cm}\)</span> ហើយមានចំនួនស្ពៀទាំងអស់
          <span class="given">\(N = 200\)</span>។
          គេឱ្យចរន្តឆ្លងកាត់សូឡេណូអុីតនេះ គឺ
          <span class="given">\(I = 3.25\text{ A}\)</span>។ គេឱ្យ
          <span class="given">\(\mu_0 = 4\pi \times 10^{-7}\text{ SI}\)</span>។

          <div class="ex-find">
            <span>គណនាដែនម៉ាញេទិចត្រង់ផ្ចិតនៃសូឡេណូអុីត។</span>
          </div>
          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">គណនាដែនម៉ាញេទិចត្រង់ផ្ចិតនៃសូឡេណូអុីត</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\( B = 4\pi \times 10^{-7} \dfrac{N \cdot I}{L} \)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \( N = 200\,\text{ស្ពៀ} \)<br>
                  \( I = 3.25\,\text{A} \)<br>
                  \( L = 20\,\text{cm} = 0.2\,\text{m} \)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \( B = 4\pi \times 10^{-7} \times \dfrac{200 \times 3.25}{0.2} = 4\pi \times 10^{-7} \times 3250 = 1.3\pi \times 10^{-3}\,\text{T} \approx 4.08 \times 10^{-3}\,\text{T} \)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ដែនម៉ាញេទិចគឺ \( B \approx 4.08 \times 10^{-3}\,\text{T} = 4.08\,\text{mT} \)
              </div>
            </div>
          </details>
        </div>
      </div>
    </div>
  </body>
</html>
