<!doctype html>
<html lang="km">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>លំហាត់អនុវត្ត ៧១–៧៨ | StudyNest Physics G12</title>
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
        <h1>លំហាត់<em>អនុវត្ត ៧១–៧៨</em></h1>
        <p>លំហាត់ជ្រើសរើសសំខាន់ៗ ត្រៀមប្រឡងសញ្ញាបត្រមធ្យមសិក្សាទុតិយភូមិ</p>
      </div>
    </header>
    <div class="container">
      <div class="section-head">
        <h2>លំហាត់ទាំងអស់</h2>
        <div class="section-head-line"></div>
      </div>

      <!-- Exercise 71 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">71</div>
          <div class="ex-title">លំហាត់អនុវត្ត ៧១</div>
        </div>
        <div class="ex-body">
          ប្រូតុងមួយមានល្បឿន \(\vec{v}\) បានផ្លាស់ទីចូលក្នុងដែនម៉ាញេទិច
          \(\vec{B}\) ដែលកែងនឹងល្បឿន។
          <div class="ex-find">
            <span
              >ក. ចូរធ្វើគំនូសបំព្រួញលើរូប \(\vec{v}, \vec{B}\) និងកម្លាំង
              \(\vec{F}_m\)។</span
            >
          </div>

          <div class="ex-find">
            <span
              >ខ. គណនាកម្លាំង \(F_m\) ចំពោះ
              <span class="given">\(v = 3 \times 10^6\text{ m/s}\)</span>,
              <span class="given">\(B = 0.2\text{ T}\)</span>។ (បន្ទុកប្រូតុង
              <span class="given">\(q = 1.6 \times 10^{-19}\text{ C}\)</span
              >)</span
            >
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គំនូសបំព្រួញលើរូប \(\vec{v}, \vec{B}\) និង \(\vec{F}_m\)</div>
              <div class="sol-step">
                <span class="sol-label">ពន្យល់ :</span>
                <span class="sol-math">
                  តាមវិធានដៃស្តាំ ចំពោះភាគល្អិតផ្ទុកបន្ទុកវិជ្ជមាន (\(q > 0\)) វ៉ិចទ័រកម្លាំងឡូរិន \(\vec{F}_m = q(\vec{v} \times \vec{B})\) មាន៖<br>
                  - គល់ត្រង់ភាគល្អិត<br>
                  - ទិស៖ កែងទៅនឹងប្លង់កំណត់ដោយ \(\vec{v}\) និង \(\vec{B}\) (\(\vec{F}_m \perp \vec{v}\) និង \(\vec{F}_m \perp \vec{B}\))<br>
                  - ទិសដៅ៖ ស្របតាមច្បាប់ដៃស្តាំ (បើមេដៃចង្អុលតាម \(\vec{v}\), ម្រាមចង្អុលតាម \(\vec{B}\) នោះកម្លាំង \(\vec{F}_m\) ចេញពីបាតដៃ)។
                </span>
              </div>

              <div class="sol-title" style="margin-top: 15px;">ខ. គណនាកម្លាំង \(F_m\)</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\(F_m = |q| \cdot v \cdot B \sin\theta\)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \(q = 1.6 \times 10^{-19}\text{ C}\)<br>
                  \(v = 3 \times 10^6\text{ m/s}\)<br>
                  \(B = 0.2\text{ T}\)<br>
                  \(\vec{v} \perp \vec{B} \implies \theta = 90^\circ \implies \sin 90^\circ = 1\)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \(F_m = 1.6 \times 10^{-19} \times 3 \times 10^6 \times 0.2 \times 1 = 9.6 \times 10^{-14}\text{ N}\)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្លាំងម៉ាញេទិចគឺ \(F_m = 9.6 \times 10^{-14}\text{ N}\)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- Exercise 72 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">72</div>
          <div class="ex-title">លំហាត់អនុវត្ត ៧២</div>
        </div>
        <div class="ex-body">
          ប្រូតុងមួយផ្លាស់ទី ជាគន្លងរង្វង់មានកាំ
          <span class="given">\( 14\text{ cm}\)</span>
          ស្ថិតនៅក្នុងដែនម៉ាញេទិចឯកសណ្ឋានមួយដែលមានម៉ូឌុល
          <span class="given">\( 0.35\text{ T}\)</span>
          កែងទៅនឹងវ៉ិចទ័រល្បឿនរបស់ប្រូតុង។ គេឱ្យ
          <span class="given">\(m_p = 1.67 \times 10^{-27}\text{ kg}\)</span>,
          <span class="given">\(q_p = e = 1.6 \times 10^{-19}\text{ C}\)</span>។
          <div class="ex-find"><span>គណនាល្បឿនរបស់ប្រូតុង។</span></div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">គណនាល្បឿនរបស់ប្រូតុង \(v\)</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\(R = \dfrac{m_p \cdot v}{|q_p| \cdot B} \implies v = \dfrac{|q_p| \cdot B \cdot R}{m_p}\)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \(R = 14\text{ cm} = 0.14\text{ m}\)<br>
                  \(B = 0.35\text{ T}\)<br>
                  \(m_p = 1.67 \times 10^{-27}\text{ kg}\)<br>
                  \(q_p = 1.6 \times 10^{-19}\text{ C}\)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \(v = \dfrac{1.6 \times 10^{-19} \times 0.35 \times 0.14}{1.67 \times 10^{-27}} = \dfrac{7.84 \times 10^{-21}}{1.67 \times 10^{-27}} \approx 4.69 \times 10^6\text{ m/s}\)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ល្បឿនរបស់ប្រូតុងគឺ \(v \approx 4.69 \times 10^6\text{ m/s}\)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- Exercise 73 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">73</div>
          <div class="ex-title">លំហាត់អនុវត្ត ៧៣</div>
        </div>
        <div class="ex-body">
          អ៊ីយ៉ុងនៃភាគល្អិតអាល់ហ្វា (\(He^{2+}\)) មួយផ្លាស់ទី
          ឆ្លងកាត់ដែនម៉ាញេទិចឯកសណ្ឋានដោយល្បឿន \(\vec{v}\) ដែល \([\vec{v} \perp
          \vec{B}]\) ដែនម៉ាញេទិចមានតម្លៃ
          <span class="given">\( 4.22 \times 10^{-3}\text{ T}\)</span>។ ប្រសិនបើ
          កាំគន្លងរបស់ភាគល្អិតគឺ
          <span class="given">\( 1.5 \times 10^{-3}\text{ m}\)</span>។ គេឱ្យ
          <span class="given">\(m = 6.65 \times 10^{-27}\text{ kg}\)</span> និង
          <span class="given">\(q = 2e = 3.2 \times 10^{-19}\text{ C}\)</span>។
          <div class="ex-find">
            <span>គណនាល្បឿនរបស់អ៊ីយ៉ុងនៃភាគល្អិតអាល់ហ្វា។</span>
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">គណនាល្បឿនភាគល្អិតអាល់ហ្វា \(v\)</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\(R = \dfrac{m \cdot v}{|q| \cdot B} \implies v = \dfrac{|q| \cdot B \cdot R}{m}\)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \(q = 3.2 \times 10^{-19}\text{ C}\)<br>
                  \(B = 4.22 \times 10^{-3}\text{ T}\)<br>
                  \(R = 1.5 \times 10^{-3}\text{ m}\)<br>
                  \(m = 6.65 \times 10^{-27}\text{ kg}\)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \(v = \dfrac{3.2 \times 10^{-19} \times 4.22 \times 10^{-3} \times 1.5 \times 10^{-3}}{6.65 \times 10^{-27}} = \dfrac{2.0256 \times 10^{-24}}{6.65 \times 10^{-27}} \approx 304.6\text{ m/s}\)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ល្បឿនរបស់អ៊ីយ៉ុងអាល់ហ្វាគឺ \(v \approx 304.6\text{ m/s}\)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- Exercise 74 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">74</div>
          <div class="ex-title">លំហាត់អនុវត្ត ៧៤</div>
        </div>
        <div class="ex-body">
          ប្រូតុងមួយមានម៉ាស
          <span class="given">\(m_p = 1.67 \times 10^{-27}\text{ kg}\)</span>
          និងបន្ទុក
          <span class="given">\(q_p = e = 1.6 \times 10^{-19}\text{ C}\)</span>
          ធ្វើចលនាចូលក្នុងដែនម៉ាញេទិច គូសបានជារង្វង់ដែលមានកាំ
          <span class="given">\( 42\text{ cm}\)</span> និងល្បឿន
          <span class="given">\( 10^7\text{ m/s}\)</span>​ ។

          <div class="ex-find">
            <span>ក. គណនាអាំងតង់ស៊ីតេឌុចស្យុងម៉ាញេទិច។</span>
          </div>
          <div class="ex-find">
            <span>ខ. គណនាកម្លាំងម៉ាញេទិចដែលមានអំពើលើប្រូតុង។</span>
          </div>
          <div class="ex-find">
            <span>គ. គណនាសំទុះរបស់ប្រូតុងក្នុងដែនម៉ាញេទិច។</span>
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គណនាអាំងតង់ស៊ីតេឌុចស្យុងម៉ាញេទិច \(B\)</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\(R = \dfrac{m_p \cdot v}{|q_p| \cdot B} \implies B = \dfrac{m_p \cdot v}{|q_p| \cdot R}\)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \(m_p = 1.67 \times 10^{-27}\text{ kg}\)<br>
                  \(v = 10^7\text{ m/s}\)<br>
                  \(q_p = 1.6 \times 10^{-19}\text{ C}\)<br>
                  \(R = 42\text{ cm} = 0.42\text{ m}\)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \(B = \dfrac{1.67 \times 10^{-27} \times 10^7}{1.6 \times 10^{-19} \times 0.42} = \dfrac{1.67 \times 10^{-20}}{0.672 \times 10^{-19}} \approx 0.249\text{ T}\)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ អាំងតង់ស៊ីតេឌុចស្យុងម៉ាញេទិចគឺ \(B \approx 0.249\text{ T}\)
              </div>

              <div class="sol-title" style="margin-top: 15px;">ខ. គណនាកម្លាំងម៉ាញេទិច \(F_m\)</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\(F_m = |q_p| \cdot v \cdot B \sin\theta\)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \(\vec{v} \perp \vec{B} \implies \theta = 90^\circ \implies \sin\theta = 1\)<br>
                  \(q_p = 1.6 \times 10^{-19}\text{ C}\)<br>
                  \(v = 10^7\text{ m/s}\)<br>
                  \(B \approx 0.249\text{ T}\)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \(F_m = 1.6 \times 10^{-19} \times 10^7 \times 0.249 \approx 3.98 \times 10^{-13}\text{ N}\)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្លាំងម៉ាញេទិចលើប្រូតុងគឺ \(F_m \approx 3.98 \times 10^{-13}\text{ N}\)
              </div>

              <div class="sol-title" style="margin-top: 15px;">គ. គណនាសំទុះរបស់ប្រូតុង \(a\)</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\(F_m = m_p \cdot a \implies a = \dfrac{F_m}{m_p}\) (ឬតាមសំទុះឆ្ពោះផ្ចិត \(a = \dfrac{v^2}{R}\))</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \(a = \dfrac{(10^7)^2}{0.42} \approx 2.38 \times 10^{14}\text{ m/s}^2\)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ សំទុះរបស់ប្រូតុងគឺ \(a \approx 2.38 \times 10^{14}\text{ m/s}^2\)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- Exercise 75 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">75</div>
          <div class="ex-title">លំហាត់អនុវត្ត ៧៥</div>
        </div>
        <div class="ex-body">
          អេឡិចត្រុងមួយមានបន្ទុកអគ្គិសនី អវិជ្ជមានធ្វើចលនាដោយល្បឿន
          <span class="given">\( 10^7\text{ m/s}\)</span> ចូលទៅកែងនឹងវ៉ិចទ័រ
          \(\vec{B}\) ក្នុងតំបន់ដែនម៉ាញេទិចឯកសណ្ឋាន
          <span class="given">\( 18.2 \times 10^{-4}\text{ T}\)</span>។

          <div class="ex-find">
            <span>ក. បង្ហាញថាចលនារបស់អេឡិចត្រុង ជាចលនារង្វង់ស្មើ។</span>
          </div>
          <div class="ex-find"><span>ខ. គណនាកាំគន្លងរង្វង់របស់អេឡិចត្រុង។</span></div>
          <div class="ex-find"><span>គ. គណនាខួបនៃរង្វិលរបស់អេឡិចត្រុង។</span></div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. បង្ហាញថាចលនារបស់អេឡិចត្រុង ជាចលនារង្វង់ស្មើ</div>
              <div class="sol-step">
                <span class="sol-label">ភស្តុតាង :</span>
                <span class="sol-math">
                  - កម្លាំងឡូរិនមានអំពើលើអេឡិចត្រុងគឺ \(\vec{F}_m = q_e(\vec{v} \times \vec{B})\) ដែលជានិច្ចកាលកែងទៅនឹងវ៉ិចទ័រល្បឿន \(\vec{v}\)។<br>
                  - ដូចនេះ កម្លាំងឡូរិនមិនបង្កើតកម្មន្តទេ (\(W = 0\)) នាំឱ្យថាមពលស៊ីនេទិចរបស់ភាគល្អិតនៅថេរ ដូចនេះម៉ូឌុលល្បឿន \(v\) ថេរ (ចលនាស្មើ)។<br>
                  - ម្យ៉ាងវិញទៀត ម៉ូឌុលកម្លាំង \(F_m = |q_e| \cdot v \cdot B \sin 90^\circ = |q_e|vB\) មានតម្លៃថេរ ដើរតួជាកម្លាំងឆ្ពោះផ្ចិត៖ \(F_m = \dfrac{m_e v^2}{R} \implies R = \dfrac{m_e v}{|q_e|B}\) ដែលកាំ \(R\) មានតម្លៃថេរ។<br>
                  - ដោយសារគន្លងមានកាំថេរ និងល្បឿនមានម៉ូឌុលថេរ ដូចនេះអេឡិចត្រុងមានចលនារង្វង់ស្មើ។
                </span>
              </div>

              <div class="sol-title" style="margin-top: 15px;">ខ. គណនាកាំគន្លងរង្វង់ \(R\)</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\(R = \dfrac{m_e \cdot v}{|q_e| \cdot B}\)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \(m_e = 9.11 \times 10^{-31}\text{ kg}\)<br>
                  \(v = 10^7\text{ m/s}\)<br>
                  \(q_e = -1.6 \times 10^{-19}\text{ C} \implies |q_e| = 1.6 \times 10^{-19}\text{ C}\)<br>
                  \(B = 18.2 \times 10^{-4}\text{ T}\)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \(R = \dfrac{9.11 \times 10^{-31} \times 10^7}{1.6 \times 10^{-19} \times 18.2 \times 10^{-4}} = \dfrac{9.11 \times 10^{-24}}{2.912 \times 10^{-22}} \approx 0.0313\text{ m} = 3.13\text{ cm}\)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កាំគន្លងរង្វង់គឺ \(R \approx 3.13\text{ cm}\)
              </div>

              <div class="sol-title" style="margin-top: 15px;">គ. គណនាខួបនៃរង្វិល \(T\)</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\(T = \dfrac{2\pi R}{v}\) (ឬ \(T = \dfrac{2\pi m_e}{|q_e|B}\))</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \(T = \dfrac{2\pi \times 0.0313}{10^7} \approx 1.96 \times 10^{-8}\text{ s}\)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ខួបនៃចលនារង្វង់គឺ \(T \approx 1.96 \times 10^{-8}\text{ s}\)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- Exercise 76 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">76</div>
          <div class="ex-title">លំហាត់អនុវត្ត ៧៦</div>
        </div>
        <div class="ex-body">
          អេឡិចត្រុងមួយមានថាមពលស៊ីនេទិច
          <span class="given">\( 40\text{ eV}\)</span>
          គូសបានជាគន្លងរង្វង់នៅក្នុងប្លង់ដែល \(\vec{v} \perp \vec{B}\)។
          ដែនម៉ាញេទិចឯកសណ្ឋាន \(\vec{B}\)មានតម្លៃ
          <span class="given">\( 8 \times 10^{-4}\text{ T}\)</span>។
          ដោយដឹងថាក្នុងដែនម៉ាញេទិចឯកសណ្ឋាននេះ អេឡិចត្រុងមានចលនារង្វង់ស្មើ។
          គេឱ្យ អេឡិចត្រុងមានម៉ាស
          <span class="given">\(m_e = 9.11 \times 10^{-31}\text{ kg}\)</span>
          និងបន្ទុក
          <span class="given">\(q_e = -e = -1.6 \times 10^{-19}\text{ C}\)</span
          >។
          <div class="ex-find">
            <span>ក. គណនាកាំគន្លង \(R\) របស់ចលនាអេឡិចត្រុងនេះ</span>
          </div>
          <div class="ex-find">
            <span>ខ. គណនាល្បឿនចលនារបស់អេឡិចត្រុង វិលបានមួយជុំ។</span>
          </div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គណនាកាំគន្លង \(R\) របស់ចលនាអេឡិចត្រុង</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\(K = \dfrac{1}{2}m_e v^2 \implies v = \sqrt{\dfrac{2K}{m_e}}\)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \(K = 40\text{ eV} = 40 \times 1.6 \times 10^{-19}\text{ J} = 6.4 \times 10^{-18}\text{ J}\)<br>
                  \(m_e = 9.11 \times 10^{-31}\text{ kg}\)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">នាំឱ្យ :</span>
                <span class="sol-math">
                  \(v = \sqrt{\dfrac{2 \times 6.4 \times 10^{-18}}{9.11 \times 10^{-31}}} \approx 3.75 \times 10^6\text{ m/s}\)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">រូបមន្តកាំ :</span>
                <span class="sol-math">\(R = \dfrac{m_e \cdot v}{|q_e| \cdot B}\)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \(|q_e| = 1.6 \times 10^{-19}\text{ C}\)<br>
                  \(B = 8 \times 10^{-4}\text{ T}\)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \(R = \dfrac{9.11 \times 10^{-31} \times 3.75 \times 10^6}{1.6 \times 10^{-19} \times 8 \times 10^{-4}} = \dfrac{3.416 \times 10^{-24}}{1.28 \times 10^{-22}} \approx 0.0267\text{ m} = 2.67\text{ cm}\)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កាំគន្លងគឺ \(R \approx 2.67\text{ cm}\)
              </div>

              <div class="sol-title" style="margin-top: 15px;">ខ. គណនាល្បឿនចលនារបស់អេឡិចត្រុង វិលបានមួយជុំ</div>
              <div class="sol-step">
                <span class="sol-label">ពន្យល់ :</span>
                <span class="sol-math">
                  ល្បឿនចរន្តលីនេអ៊ែររបស់វាគឺ \(v \approx 3.75 \times 10^6\text{ m/s}\)។<br>
                  រីឯរយៈពេលវិលបានមួយជុំ (ហៅថាខួប \(T\)) គឺ៖<br>
                  \(T = \dfrac{2\pi R}{v} = \dfrac{2\pi \times 0.0267}{3.75 \times 10^6} \approx 4.47 \times 10^{-8}\text{ s}\)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ ល្បឿនគឺ \(v \approx 3.75 \times 10^6\text{ m/s}\) និងរយៈពេលវិលមួយជុំគឺ \(T \approx 4.47 \times 10^{-8}\text{ s}\)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- Exercise 77 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">77</div>
          <div class="ex-title">លំហាត់អនុវត្ត ៧៧</div>
        </div>
        <div class="ex-body">
          ប្រូតុងមួយម៉ាស
          <span class="given">\(m_p = 1.67 \times 10^{-27}\text{ kg}\)</span>
          និងបន្ទុក
          <span class="given">\(q_p = e = 1.6 \times 10^{-19}\text{ C}\)</span>
          ផ្លាស់ទីក្នុងដែនម៉ាញេទិចឯកសណ្ឋាន \(\vec{B}\) ដោយល្បឿន \(\vec{v}\) កែង
          \(\vec{B}\) លើគន្លងរង្វង់មួយដែលមានកាំ \(R\) និងប្រេកង់
          <span class="given">\( 5\text{ MHz}\)</span>

          <div class="ex-find">
            <span>ក. គណនាតម្លៃនៃអាំងតង់ស៊ីតេឌុចស្យុង \(B\)។</span>
          </div>
          <div class="ex-find">
            <span
              >ខ. គណនាកាំគន្លង \(R\) បើគេឱ្យ
              <span class="given">\(v = 10^5\text{ m/s}\)</span>។</span
            >
          </div>
          <div class="ex-find">
            <span>គ. គណនារយៈពេលដែលប្រូតុងផ្លាស់ទីបានមួយជុំ។</span>
          </div>
          <div class="ex-find"><span>ឃ. គណនាកម្មន្តដែលមានអំពើលើប្រូតុង។</span></div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គណនាតម្លៃនៃអាំងតង់ស៊ីតេឌុចស្យុង \(B\)</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\(f = \dfrac{1}{T} = \dfrac{|q_p| \cdot B}{2\pi \cdot m_p} \implies B = \dfrac{2\pi \cdot m_p \cdot f}{|q_p|}\)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \(m_p = 1.67 \times 10^{-27}\text{ kg}\)<br>
                  \(q_p = 1.6 \times 10^{-19}\text{ C}\)<br>
                  \(f = 5\text{ MHz} = 5 \times 10^6\text{ Hz}\)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \(B = \dfrac{2\pi \times 1.67 \times 10^{-27} \times 5 \times 10^6}{1.6 \times 10^{-19}} \approx 0.328\text{ T}\)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ អាំងតង់ស៊ីតេឌុចស្យុងម៉ាញេទិចគឺ \(B \approx 0.328\text{ T}\)
              </div>

              <div class="sol-title" style="margin-top: 15px;">ខ. គណនាកាំគន្លង \(R\)</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\(R = \dfrac{m_p \cdot v}{|q_p| \cdot B} = \dfrac{v}{2\pi \cdot f}\)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \(v = 10^5\text{ m/s}\)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \(R = \dfrac{10^5}{2\pi \times 5 \times 10^6} \approx 3.18 \times 10^{-3}\text{ m} = 3.18\text{ mm}\)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កាំគន្លងគឺ \(R \approx 3.18\text{ mm}\)
              </div>

              <div class="sol-title" style="margin-top: 15px;">គ. គណនារយៈពេលដែលប្រូតុងផ្លាស់ទីបានមួយជុំ (ខួប \(T\))</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\(T = \dfrac{1}{f}\)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \(T = \dfrac{1}{5 \times 10^6\text{ Hz}} = 2 \times 10^{-7}\text{ s}\)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ រយៈពេលផ្លាស់ទីបានមួយជុំគឺ \(T = 2 \times 10^{-7}\text{ s}\)
              </div>

              <div class="sol-title" style="margin-top: 15px;">ឃ. គណនាកម្មន្តដែលមានអំពើលើប្រូតុង \(W\)</div>
              <div class="sol-step">
                <span class="sol-label">ពន្យល់ :</span>
                <span class="sol-math">
                  កម្លាំងឡូរិន \(\vec{F}_m\) ដើរតួជាកម្លាំងឆ្ពោះផ្ចិត ដែលមានទិសកែងទៅនឹងវ៉ិចទ័រល្បឿន \(\vec{v}\) និងទិសដៅចលនាគ្រប់ខណៈ (\(\vec{F}_m \perp \vec{v}\))។<br>
                  នាំឱ្យមុំ \(\theta = (\vec{F}_m, \vec{v}) = 90^\circ \implies \cos 90^\circ = 0\)។<br>
                  កម្មន្តនៃកម្លាំងគឺ៖ \(W = F_m \cdot s \cdot \cos 90^\circ = 0\text{ J}\)។
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្មន្តនៃកម្លាំងម៉ាញេទិចមានអំពើលើប្រូតុងគឺ \(W = 0\text{ J}\)
              </div>
            </div>
          </details>
        </div>
      </div>

      <!-- Exercise 78 -->
      <div class="ex-card">
        <div class="ex-head">
          <div class="ex-badge">78</div>
          <div class="ex-title">លំហាត់អនុវត្ត ៧៨</div>
        </div>
        <div class="ex-body">
          ប្រូតុងមួយម៉ាស
          <span class="given">\(m_p = 1.67 \times 10^{-27}\text{ kg}\)</span>
          និងបន្ទុក
          <span class="given">\(q_p = e = 1.6 \times 10^{-19}\text{ C}\)</span>
          ផ្លាស់ទីក្នុងដែនម៉ាញេទិចឯកសណ្ឋាន \(\vec{B}\) ដោយល្បឿន \(\vec{v} \perp
          \vec{B}\)។ ដែល
          <span class="given">\(B = 6.68 \times 10^{-2}\text{ T}\)</span> និង
          <span class="given">\(v = 4 \times 10^7\text{ m/s}\)</span>

          <div class="ex-find">
            <span
              >ក. ចូរធ្វើគំនូសបំព្រួញលើរូប \(\vec{v}, \vec{B}\) និងកម្លាំង
              \(\vec{F}_m\) នៅខណៈណាមួយដែលប្រូតុងមានចលនាក្នុងដែនម៉ាញេទិច។</span
            >
          </div>
          <div class="ex-find"><span>ខ. គណនាកម្លាំង \(F_m\)។</span></div>
          <div class="ex-find"><span>គ. គណនាកាំគន្លង និងសំទុះនៃចលនារង្វិល។</span></div>

          <details class="ex-ans">
            <summary>បង្ហាញដំណោះស្រាយ (Show Solution)</summary>
            <div class="sol-block">
              <div class="sol-title">ក. គំនូសបំព្រួញលើរូប \(\vec{v}, \vec{B}\) និង \(\vec{F}_m\)</div>
              <div class="sol-step">
                <span class="sol-label">ពន្យល់ :</span>
                <span class="sol-math">
                  - វ៉ិចទ័រកម្លាំងម៉ាញេទិច \(\vec{F}_m\) ដើរតួជាកម្លាំងឆ្ពោះផ្ចិត បង្ហាញក្នុងគំនូសបំព្រួញមានទិសដៅចង្អុលចូលផ្ចិតនៃរង្វង់គន្លង។<br>
                  - \(\vec{v}\) មានទិសដៅប៉ះនឹងរង្វង់គន្លងត្រង់ចំណុចសិក្សា។<br>
                  - \(\vec{B}\) កែងនឹងប្លង់គន្លងរង្វង់។
                </span>
              </div>

              <div class="sol-title" style="margin-top: 15px;">ខ. គណនាកម្លាំង \(F_m\)</div>
              <div class="sol-step">
                <span class="sol-label">តាមរូបមន្ត :</span>
                <span class="sol-math">\(F_m = |q_p| \cdot v \cdot B \sin\theta\)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \(q_p = 1.6 \times 10^{-19}\text{ C}\)<br>
                  \(v = 4 \times 10^7\text{ m/s}\)<br>
                  \(B = 6.68 \times 10^{-2}\text{ T}\)<br>
                  \(\vec{v} \perp \vec{B} \implies \theta = 90^\circ \implies \sin 90^\circ = 1\)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \(F_m = 1.6 \times 10^{-19} \times 4 \times 10^7 \times 6.68 \times 10^{-2} \times 1 = 4.28 \times 10^{-13}\text{ N}\)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កម្លាំងម៉ាញេទិចគឺ \(F_m \approx 4.28 \times 10^{-13}\text{ N}\)
              </div>

              <div class="sol-title" style="margin-top: 15px;">គ. គណនាកាំគន្លង និងសំទុះនៃចលនារង្វិល</div>
              <div class="sol-step">
                <span class="sol-label">រូបមន្តកាំ :</span>
                <span class="sol-math">\(R = \dfrac{m_p \cdot v}{|q_p| \cdot B}\)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">ដោយ :</span>
                <span class="sol-math">
                  \(m_p = 1.67 \times 10^{-27}\text{ kg}\)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \(R = \dfrac{1.67 \times 10^{-27} \times 4 \times 10^7}{1.6 \times 10^{-19} \times 6.68 \times 10^{-2}} = \dfrac{6.68 \times 10^{-20}}{1.0688 \times 10^{-20}} \approx 6.25\text{ m}\)
                </span>
              </div>
              <div class="sol-step">
                <span class="sol-label">រូបមន្តសំទុះ :</span>
                <span class="sol-math">\(a = \dfrac{v^2}{R}\)</span>
              </div>
              <div class="sol-step">
                <span class="sol-label">គេបាន :</span>
                <span class="sol-math">
                  \(a = \dfrac{(4 \times 10^7)^2}{6.25} = 2.56 \times 10^{14}\text{ m/s}^2\)
                </span>
              </div>
              <div class="sol-box">
                ដូចនេះ៖ កាំគន្លងគឺ \(R \approx 6.25\text{ m}\) និងសំទុះគឺ \(a = 2.56 \times 10^{14}\text{ m/s}^2\)
              </div>
            </div>
          </details>
        </div>
      </div>
    </div>
  </body>
</html>
