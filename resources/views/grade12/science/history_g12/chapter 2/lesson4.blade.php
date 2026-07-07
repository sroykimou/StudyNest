<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>មេរៀនទី៤៖ កម្ពុជាប្រជាធិបតេយ្យ (១៩៧៥-១៩៧៩) | StudyNest</title>
    
    <!-- Fonts & Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@400;600;700&family=Siemreap&family=Bokor&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

    <style>
      /* Override body layout for scrolling lessons */
      body {
        display: block !important;
        overflow-y: auto !important;
        padding: 40px 20px;
        background: radial-gradient(ellipse at 25% 35%, #451a03 0%, transparent 55%),
                    radial-gradient(ellipse at 75% 65%, #0f172a 0%, transparent 55%),
                    linear-gradient(135deg, #1e1b4b 0%, #0c0a09 50%, #1e1b4b 100%) !important;
        min-height: 100vh;
      }
      
      /* Subject specific accent colors (Gold/Amber) */
      :root {
        --accent: #f59e0b;
        --accent-glow: rgba(245, 158, 11, 0.35);
        --primary: #d97706;
        --primary-glow: rgba(217, 119, 6, 0.45);
      }

      .main-content {
        max-width: 900px;
        margin: 40px auto 80px;
        position: relative;
        z-index: 10;
      }

      .back-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: white;
        text-decoration: none;
        font-size: 0.95rem;
        background: rgba(255, 255, 255, 0.1);
        padding: 10px 20px;
        border-radius: 50px;
        backdrop-filter: blur(8px);
        border: 1px solid rgba(255, 255, 255, 0.15);
        transition: 0.3s;
      }

      .back-btn:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateX(-5px);
        box-shadow: 0 5px 15px rgba(245, 158, 11, 0.2);
        border-color: var(--accent);
      }

      header {
        text-align: center;
        margin-bottom: 40px;
        position: relative;
        z-index: 10;
      }

      header h1 {
        font-family: "Kantumruy Pro", "Siemreap", sans-serif;
        font-size: 2.8rem;
        font-weight: 700;
        color: #fff;
        text-shadow: 0 0 20px rgba(245, 158, 11, 0.3);
        margin-top: 20px;
      }

      header p {
        font-size: 1.2rem;
        color: var(--text-muted);
        margin-top: 10px;
      }

      .section-label {
        display: flex;
        align-items: center;
        gap: 15px;
        margin: 50px 0 25px;
      }

      .section-label h3 {
        margin: 0;
        font-size: 1.4rem;
        color: #f59e0b;
        font-weight: 700;
        white-space: nowrap;
        text-shadow: 0 0 10px rgba(245, 158, 11, 0.2);
      }

      .section-label::after {
        content: "";
        height: 2px;
        background: linear-gradient(to right, var(--accent), transparent);
        flex: 1;
        border-radius: 2px;
      }

      /* Dark glassmorphic card container structure */
      .card {
        background: var(--glass-bg);
        border: 1px solid var(--glass-border);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border-radius: 24px;
        padding: 32px;
        margin-bottom: 24px;
        color: white;
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
      }

      .card:hover {
        transform: translateY(-5px);
        border-color: var(--accent);
        box-shadow: 0 12px 40px rgba(245, 158, 11, 0.15);
      }

      .card::before {
        content: "";
        position: absolute;
        top: 0; left: 0; width: 6px; height: 100%;
        background: var(--accent);
        opacity: 0.3;
        transition: 0.3s;
      }

      .card:hover::before {
        opacity: 1;
        background: var(--accent);
        box-shadow: 0 0 10px var(--accent);
      }

      .question-box {
        display: flex;
        align-items: center;
        gap: 18px;
        margin-bottom: 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        padding-bottom: 15px;
      }

      .q-badge {
        background: linear-gradient(135deg, var(--primary), var(--accent));
        color: #000;
        font-weight: 800;
        min-width: 40px;
        height: 40px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
        flex-shrink: 0;
        box-shadow: 0 4px 15px var(--accent-glow);
      }

      .question-text {
        font-weight: 700;
        font-size: 1.25rem;
        color: #fff;
        line-height: 1.6;
      }

      .answer-box {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1.1rem;
        line-height: 1.8;
      }

      ul {
        list-style: none;
        padding-left: 5px;
        margin: 15px 0;
      }

      li {
        position: relative;
        padding-left: 28px;
        margin-bottom: 12px;
      }

      li::before {
        content: "✦";
        position: absolute;
        left: 0;
        color: var(--accent);
        font-weight: 700;
        font-size: 1rem;
      }

      .sub-header {
        display: block;
        margin-top: 25px;
        font-weight: 700;
        color: var(--accent);
        font-size: 1.15rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        padding-bottom: 8px;
        margin-bottom: 15px;
      }

      footer {
        text-align: center;
        padding: 60px 20px;
        margin-top: 80px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        color: var(--text-muted);
      }

      .study-logo {
        font-family: "Bokor", cursive;
        font-size: 1.8rem;
        color: var(--accent);
        margin-bottom: 10px;
        display: block;
        text-shadow: 0 0 10px var(--accent-glow);
      }

      /* Responsive styling */
      @media (max-width: 600px) {
        body {
          padding: 20px 10px;
        }
        header h1 { font-size: 1.8rem; }
        .card { padding: 24px; }
        .question-text { font-size: 1.1rem; }
        .q-badge { min-width: 35px; height: 35px; font-size: 1rem; }
      }
    </style>
</head>
<body>

    <div class="drops" id="drops"></div>
    <div class="particles" id="particles"></div>

    <header>
      <div class="container-nav" style="max-width: 900px; margin: 0 auto; text-align: left;">
        <a href="../history_g12" class="back-btn">
          <i class="fas fa-arrow-left"></i> ត្រឡប់ក្រោយ
        </a>
      </div>
      <h1>មេរៀនទី៤ ៖ កម្ពុជាប្រជាធិបតេយ្យ</h1>
      <p>(១៩៧៥-១៩៧៩) — សម័យកាលនៃរបបខ្មែរក្រហម និងមហាសោកនាដកម្ម</p>
    </header>

    <main class="main-content">
      
      <!-- Vocabulary Section -->
      <div class="section-label">
        <h3><i class="fas fa-book-open"></i> ពន្យល់ពាក្យគន្លឹះ</h3>
      </div>
      <div class="card">
        <div class="answer-box">
          <ul>
            <li><strong>លក្ខខណ្ឌកម្រិត៖</strong> គោលការណ៍ច្បាប់ ឬសេចក្ដីកំណត់ដែលបានចែងទុកជាមុន។</li>
            <li><strong>កមូហភាវូបនីយកម្ម៖</strong> การធ្វើឱ្យប្រជាជនរស់នៅក្នុងសហករណ៍កម្រិតខ្ពស់ គឺដេកជាមួយគ្នា ហូបរួមគ្នា ដែលអ្វីៗទាំងអស់ដាក់ជាសម្បត្តិរួមគ្នា។</li>
            <li><strong>អនីតិជន៖</strong> ជនដែលរុំទាន់គ្រប់អាយុតាមច្បាប់ ឬ គឺអាយុតិចជាង ១៨ ឆ្នាំ។</li>
            <li><strong>អង្គការភ្នែកម្នាស់៖</strong> គឺជាយន្តការតាមដានគ្នាទៅវិញទៅមក និងរាយការណ៍ប្រាប់អង្គការ ដែលមនុស្សទាំងអស់ជាផ្នែករបស់អង្គការ។</li>
          </ul>
        </div>
      </div>

      <!-- Section 1 -->
      <div class="section-label">
        <h3><i class="fas fa-sitemap"></i> ១. រចនាសម្ព័ន្ធដឹកនាំ</h3>
      </div>

      <!-- Q1 -->
      <div class="card">
        <div class="question-box">
          <div class="q-badge">១</div>
          <div class="question-text">តើពួកខ្មែរក្រហមបានចូលកាន់កាប់ទីក្រុងភ្នំពេញ នៅថ្ងៃ ខែ ឆ្នាំណា?</div>
        </div>
        <div class="answer-box">
          ពួកខ្មែរក្រហមបានចូលកាន់កាប់ទីក្រុងភ្នំពេញ នៅថ្ងៃទី <strong>១៧ ខែមេសា ឆ្នាំ ១៩៧៥</strong>។
        </div>
      </div>

      <!-- Q2 -->
      <div class="card">
        <div class="question-box">
          <div class="q-badge">២</div>
          <div class="question-text">តើពួកខ្មែរក្រហម មានគោលនយោបាយភ្លាមៗដូចម្ដេចខ្លះ?</div>
        </div>
        <div class="answer-box">
          ពួកខ្មែរក្រហមមានគោលនយោបាយ ដូចខាងក្រោម៖
          <ul>
            <li>ជម្លៀសប្រជាជនឱ្យចេញពីទីក្រុងភ្នំពេញទាំងអស់។</li>
            <li>លុបបំបាត់ទីផ្សារ។</li>
            <li>លុបបំបាត់ការប្រើប្រាស់ និងចរាចរណ៍រូបិយប័ណ្ណ។</li>
            <li>ផ្សឹកព្រះសង្ឃទាំងអស់ ហើយឱ្យទៅធ្វើស្រែចម្ការនៅជនបទ។</li>
            <li>ប្រហារជីវិតមេដឹកនាំរបប លន់ នល់។</li>
            <li>បង្កើតសហករណ៍កម្រិតខ្ពស់ទូទាំងប្រទេស។</li>
            <li>បណ្ដេញជនជាតិភាគតិចវៀតណាមឱ្យចេញទាំងអស់។</li>
            <li>បញ្ជូនទ័ពទៅតាមព្រំដែនជាតិ ជាពិសេសព្រំដែនវៀតណាម។</li>
          </ul>
        </div>
      </div>

      <!-- Q3 -->
      <div class="card">
        <div class="question-box">
          <div class="q-badge">៣</div>
          <div class="question-text">ហេតុអ្វីបានជា ពួកខ្មែរក្រហមជម្លៀសប្រជាជនចេញពីទីក្រុងភ្នំពេញ និងទីប្រជុំជននានា?</div>
        </div>
        <div class="answer-box">
          ពួកខ្មែរក្រហមជម្លៀសប្រជាជនចេញពីទីក្រុងភ្នំពេញ និងទីប្រជុំជននានា ព្រោះ៖
          <ul>
            <li>ដើម្បីបោសសម្អាតខ្មាំងកប់ក្នុងក្រុង។</li>
            <li>ខ្លាចអាមេរិកទម្លាក់គ្រាប់បែក។</li>
            <li>ខ្វះស្បៀងអាហារសម្រាប់ប្រជាជនក្នុងក្រុង។</li>
            <li>ពួកខ្មែរក្រហមត្រូវការកម្លាំងមូលដ្ឋាន។</li>
            <li>ដើម្បីបញ្ជូនប្រជាជនទៅធ្វើស្រែចម្ការនៅតាមជនបទ។</li>
          </ul>
        </div>
      </div>

      <!-- Q4 -->
      <div class="card">
        <div class="question-box">
          <div class="q-badge">៤</div>
          <div class="question-text">ដូចម្ដេចដែលហៅថា អង្គការ (ខ្មែរក្រហម)?</div>
        </div>
        <div class="answer-box">
          ពាក្យថា <strong>អង្គការ (ខ្មែរក្រហម)</strong> គឺសំដៅលើទាំងបក្សកុម្មុយនីស្ត ទាំងអង្គការនីតិបញ្ញត្តិ នីតិប្រតិបត្តិ និងអំណាចតុលាការ។
        </div>
      </div>

      <!-- Q5 -->
      <div class="card">
        <div class="question-box">
          <div class="q-badge">៥</div>
          <div class="question-text">តើរដ្ឋធម្មនុញ្ញកម្ពុជាប្រជាធិបតេយ្យ ត្រូវបានប្រកាសឱ្យប្រើនៅថ្ងៃ ខែ ឆ្នាំណា? និងមានខ្លឹមសារសំខាន់ៗអ្វីខ្លះ?</div>
        </div>
        <div class="answer-box">
          រដ្ឋធម្មនុញ្ញកម្ពុជាប្រជាធិបតេយ្យ ត្រូវបានប្រកាសឱ្យប្រើនៅថ្ងៃទី <strong>៥ ខែមករា ឆ្នាំ ១៩៧៦</strong> ដែលមានខ្លឹមសារសំខាន់ៗដូចជា៖
          <ul>
            <li>ឈ្មោះប្រទេសជាផ្លូវការថា "កម្ពុជាប្រជាធិបតេយ្យ"។</li>
            <li>ចម្រៀងជាតិឈ្មោះថា "១៧ មេសា មហាជោគជ័យ"។</li>
            <li>កំណត់រូបភាពទង់ជាតិកម្ពុជាប្រជាធិបតេយ្យ។</li>
            <li>កំណត់រូបសញ្ញាជាតិកម្ពុជាប្រជាធិបតេយ្យ។</li>
          </ul>
        </div>
      </div>

      <!-- Q6 -->
      <div class="card">
        <div class="question-box">
          <div class="q-badge">៦</div>
          <div class="question-text">ចូររៀបរាប់ពីការរៀបចំរចនាសម្ព័ន្ធគ្រប់គ្រងរដ្ឋក្នុងរបបកម្ពុជាប្រជាធិបតេយ្យ.</div>
        </div>
        <div class="answer-box">
          រចនាសម្ព័ន្ធគ្រប់គ្រងរដ្ឋក្នុងរបបកម្ពុជាប្រជាធិបតេយ្យ គឺ៖
          <ul>
            <li><strong>ខៀវ សំផន៖</strong> ប្រធានគណៈប្រធានរដ្ឋ (ប្រមុខរដ្ឋ)</li>
            <li><strong>នួន ជា៖</strong> ប្រធានសភាតំណាងប្រជាជនកម្ពុជា</li>
            <li><strong>ប៉ុល ពត៖</strong> នាយករដ្ឋមន្ត្រី</li>
            <li><strong>អៀង សារី៖</strong> ឧបនាយករដ្ឋមន្ត្រី រដ្ឋមន្ត្រីក្រសួងការបរទេស</li>
            <li><strong>វន វ៉េត៖</strong> ឧបនាយករដ្ឋមន្ត្រី រដ្ឋមន្ត្រីក្រសួងសេដ្ឋកិច្ច</li>
            <li><strong>ស៊ុន សេន៖</strong> ឧបនាយករដ្ឋមន្ត្រី រដ្ឋមន្ត្រីក្រសួងការពារជាតិ</li>
          </ul>
        </div>
      </div>

      <!-- Q7 -->
      <div class="card">
        <div class="question-box">
          <div class="q-badge">៧</div>
          <div class="question-text">តើពួកខ្មែរក្រហមបានបែងចែកប្រទេសជាប៉ុន្មានភូមិភាគ? ចូររៀបរាប់។</div>
        </div>
        <div class="answer-box">
          ពួកខ្មែរក្រហមបានបែងចែកប្រទេសជា ៦ ភូមិភាគ រួមមាន ៣២ តំបន់ ដូចខាងក្រោម៖
          <ul>
            <li>ភូមិភាគបូព៌ា (តំបន់ ២០៣)</li>
            <li>ភូមិភាគនិរតី (តំបន់ ៤០៥)</li>
            <li>ភូមិភាគឧត្តរ (តំបន់ ៣០៣)</li>
            <li>ភូមិភាគពាយ័ព្យ (តំបន់ ៥៦០)</li>
            <li>ភូមិភាគបស្ចិម (តំបន់ ៤០១)</li>
            <li>ភូមិភាគឦសាន (តំបន់ ១០៨)</li>
          </ul>
          <span class="sub-header">ក្រៅពីតំបន់ខាងលើ ពួកខ្មែរក្រហមបានបង្កើតតំបន់ស្វយ័ត ដូចជា៖</span>
          <ul>
            <li>តំបន់សៀមរាប-ឧត្តរមានជ័យ (តំបន់ ១០៦)</li>
            <li>តំបន់ព្រះវិហារ (តំបន់ ១០៣)</li>
            <li>ក្រុងកំពង់សោម ត្រូវបានចាត់ជាតំបន់ស្វយ័តផងដែរ។</li>
          </ul>
          <span class="sub-header">នៅឆ្នាំ ១៩៧៧ ពួកខ្មែរក្រហមបានបង្កើតភូមិភាគកណ្តាល និងតំបន់ស្វយ័តបន្ថែមដូចជា៖</span>
          <ul>
            <li>ភូមិភាគកណ្តាល</li>
            <li>តំបន់ស្វយ័តក្រចេះ (តំបន់ ៥០៥) និងតំបន់មណ្ឌលគិរី (តំបន់ ១០៥) បំបែកពីភូមិភាគឦសាន។</li>
          </ul>
        </div>
      </div>

      <!-- Section 2 -->
      <div class="section-label">
        <h3><i class="fas fa-bolt"></i> ២. នយោបាយមហាលោតផ្លោះមហាអស្ចារ្យ</h3>
      </div>

      <!-- Q8 -->
      <div class="card">
        <div class="question-box">
          <div class="q-badge">៨</div>
          <div class="question-text">តើគម្រោងផែនការ ៤ ឆ្នាំ (១៩៧៧-១៩៨០) របស់កម្ពុជាប្រជាធិបតេយ្យផ្ដោតសំខាន់ទៅលើអ្វីខ្លះ?</div>
        </div>
        <div class="answer-box">
          គម្រោងផែនការ ៤ ឆ្នាំ (១៩៧៧-១៩៨០) របស់កម្ពុជាប្រជាធិបតេយ្យផ្ដោតសំខាន់ទៅលើ៖
          <ul>
            <li>ប្រមូលទ្រព្យសម្បត្តិឯកជនទាំងអស់។</li>
            <li>ការដាំដុះស្រូវជាអាទិភាព។</li>
            <li>ពង្រីកកសិកម្ម។</li>
            <li>កមូហភាវូបនីយកម្ម។</li>
            <li>រួមបញ្ចូលទាំងគម្រោងដាំដុះ ការការពារ អនុផលព្រៃឈើ ការនេសាទ ការចិញ្ចឹមសត្វ និងការដាំដើមឈើ។</li>
          </ul>
        </div>
      </div>

      <!-- Q9 -->
      <div class="card">
        <div class="question-box">
          <div class="q-badge">៩</div>
          <div class="question-text">តើសហករណ៍ មានន័យដូចម្ដេច?</div>
        </div>
        <div class="answer-box">
          សហករណ៍ មានន័យថា ប្រជាជនរស់នៅរួម ធ្វើការរួម ហូបរួម និងចែករំលែកគ្នាជាកមូហភាព។
        </div>
      </div>

      <!-- Q10 -->
      <div class="card">
        <div class="question-box">
          <div class="q-badge">១០</div>
          <div class="question-text">តើពួកខ្មែរក្រហមបង្កើតសហករណ៍ដើម្បីអ្វី?</div>
        </div>
        <div class="answer-box">
          ពួកខ្មែរក្រហមបង្កើតសហករណ៍ដើម្បី៖
          <ul>
            <li>លុបបំបាត់កម្មសិទ្ធិឯកជន និងមូលធននិយម។</li>
            <li>ពង្រឹងវណ្ណៈកម្មករ និងកសិករ។</li>
          </ul>
        </div>
      </div>

      <!-- Q11 -->
      <div class="card">
        <div class="question-box">
          <div class="q-badge">១១</div>
          <div class="question-text">តើពួកខ្មែរក្រហមបង្កើតសហករណ៍មានប៉ុន្មានកម្រិត? ចូររៀបរាប់។</div>
        </div>
        <div class="answer-box">
          ពួកខ្មែរក្រហមបង្កើតសហករណ៍មាន ២ កម្រិត គឺ៖
          <ul>
            <li><strong>សហករណ៍កម្រិតទាប៖</strong> មានសមាជិកច្រើនគ្រួសារ ចាប់ពី ១០-៣០ គ្រួសារ ក្នុងភូមិមួយទាំងមូល។</li>
            <li><strong>សហករណ៍កម្រិតខ្ពស់៖</strong> មានសមាជិកច្រើនគ្រួសារ ចាប់ពី ៣-៤ ភូមិ ឬឃុំមួយទាំងមូល។</li>
          </ul>
        </div>
      </div>

      <!-- Q12 -->
      <div class="card">
        <div class="question-box">
          <div class="q-badge">១២</div>
          <div class="question-text">តើពួកខ្មែរក្រហមបានបែងចែកវណ្ណៈសង្គមដូចម្ដេចខ្លះ? ចូររៀបរាប់។</div>
        </div>
        <div class="answer-box">
          ពួកខ្មែរក្រហមបានបែងចែកវណ្ណៈសង្គមជា ២ គឺ៖
          <ul>
            <li><strong>...ប្រជាជនមូលដ្ឋាន ឬប្រជាជនចាស់៖</strong> គឺជាប្រជាជនដែលរស់នៅតាមតំបន់រំដោះគ្រប់គ្រងដោយបក្សកុម្មុយនីស្តកម្ពុជា មុនថ្ងៃទី ១៧ ខែមេសា ឆ្នាំ ១៩៧៥។</li>
            <li><strong>ប្រជាជនថ្មី ឬប្រជាជន ១៧ មេសា៖</strong> គឺជាប្រជាជនជម្លៀសចេញពីទីក្រុង ឬទីប្រជុំជននានា ក្រោយថ្ងៃទី ១៧ ខែមេសា ឆ្នាំ ១៩៧៥។</li>
          </ul>
        </div>
      </div>

      <!-- Section 3 -->
      <div class="section-label">
        <h3><i class="fas fa-skull-crossbones"></i> ៣. សោកនាដកម្ម</h3>
      </div>

      <!-- Q13 -->
      <div class="card">
        <div class="question-box">
          <div class="q-badge">១៣</div>
          <div class="question-text">តើជីវិតប្រជាជនខ្មែរក្នុងរបបកម្ពុជាប្រជាធិបតេយ្យ ជួបប្រទះនឹងបញ្ហាអ្វីខ្លះ?</div>
        </div>
        <div class="answer-box">
          ជីវិតប្រជាជនខ្មែរក្នុងរបបកម្ពុជាប្រជាធិបតេយ្យ ជួបប្រទះនឹងបញ្ហា ដូចជា៖
          <ul>
            <li>គ្មានកម្មសិទ្ធិឯកជន។</li>
            <li>សេរីភាពជំនឿ និងសាសនាត្រូវបានហាមឃាត់។</li>
            <li>ការងារបង្ខំឱ្យធ្វើការជាទម្ងន់។</li>
            <li>របបអាហារមិនគ្រប់គ្រាន់។</li>
            <li>វិស័យសុខាភិបាលមិនរីកចម្រើន (ប្រើថ្នាំទន្សាយ)។</li>
            <li>សន្តិសុខ និងសុវត្ថិភាពសង្គមត្រូវបានរឹតត្បិត។</li>
            <li>បង្ខំឱ្យរៀបការតាមការរៀបចំរបស់អង្គការ។</li>
            <li>បំបែកគ្រួសារ សាច់ញាតិ និងមិត្តភក្តិ។</li>
            <li>អប់រំ និងបណ្ដុះស្មារតីកុមារឱ្យមានឆន្ទៈដាច់ខាត និងជឿជាក់លើតែអង្គការមួយគត់។</li>
          </ul>
        </div>
      </div>

      <!-- Q14 -->
      <div class="card">
        <div class="question-box">
          <div class="q-badge">១៤</div>
          <div class="question-text">តើខ្មាំងរបស់អង្គការ សំដៅលើអ្នកណា?</div>
        </div>
        <div class="answer-box">
          ខ្មាំងរបស់អង្គការ សំដៅលើប្រជាជនដែលរអ៊ូរទាំពីការងារលំបាក ការលួចហូបអាហារ ឬជំងឺកន្ត្រាក់អារម្មណ៍ ជាដើម។
        </div>
      </div>

      <!-- Q15 -->
      <div class="card">
        <div class="question-box">
          <div class="q-badge">១៥</div>
          <div class="question-text">តើពួកខ្មែរក្រហមបែងចែកខ្មាំងរបស់អង្គការជាប៉ុន្មាន? អ្វីខ្លះ? ចូររៀបរាប់។</div>
        </div>
        <div class="answer-box">
          ពួកខ្មែរក្រហមបែងចែកខ្មាំងរបស់អង្គការជា ២ គឺ៖
          <span class="sub-header">◦ ខ្មាំងខាងក្នុង</span>
          <ul>
            <li>អ្នករដ្ឋការរបស់របបសាធារណរដ្ឋខ្មែរ</li>
            <li>ក្រុមជនជាតិភាគតិច</li>
            <li>ជនជាតិភាគតិចតំបន់ភ្នំ</li>
            <li>ជនជាតិខ្មែរឥស្លាម</li>
            <li>ជនជាតិភាគតិចវៀតណាម</li>
            <li>ជនជាតិភាគតិចចិន</li>
            <li>បញ្ញវន្ត</li>
            <li>ជនក្បត់ដទៃទៀត។</li>
          </ul>
          <span class="sub-header">◦ ខ្មាំងខាងក្រៅ</span>
          <ul>
            <li>សហរដ្ឋអាមេរិក</li>
            <li>ប្រទេសថៃ</li>
            <li>ប្រទេសវៀតណាម</li>
            <li>សហភាពសូវៀត</li>
            <li>ក្បាលម៉ាស៊ីន និងកងទ័ពដែលជាខ្មាំងបង្កប់ស៊ីរូងផ្ទៃក្នុង។</li>
          </ul>
        </div>
      </div>

      <!-- Section 4 -->
      <div class="section-label">
        <h3><i class="fas fa-frown"></i> ៤. ការដួលរលំនៃរបបកម្ពុជាប្រជាធិបតេយ្យ</h3>
      </div>

      <!-- Q16 -->
      <div class="card">
        <div class="question-box">
          <div class="q-badge">១៦</div>
          <div class="question-text">តើមូលហេតុអ្វីខ្លះបានជារបបកម្ពុជាប្រជាធិបតេយ្យដួលរលំ? ចូររៀបរាប់។</div>
        </div>
        <div class="answer-box">
          របបកម្ពុជាប្រជាធិបតេយ្យដួលរលំ ដោយសារមូលហេតុដូចជា៖
          <ul>
            <li><strong>ប្រជាជនកម្ពុជាលែងគាំទ្រ៖</strong> ពួកប៉ុល ពត បានបង្ខំឱ្យធ្វើការធ្ងន់ បង្អត់អាហារ ធ្វើទារុណកម្ម សម្លាប់ និងឱ្យប្រជាជនអត់ជំនឿ និងបះបោរប្រឆាំងនឹងពួកប៉ុល ពត។</li>
            <li><strong>ការធ្វើវិសុទ្ធកម្ម (Purge)៖</strong> ពួកប៉ុល ពត បានចោទប្រកាន់សម្លាប់មនុស្សបន្តបន្ទាប់ ទាំងគណៈភូមិភាគ គណៈតំបន់ មេបញ្ជាការទ័ព និងប្រជាជន ឱ្យតែសង្ស័យថាជាខ្មាំង រួចសម្លាប់ចោល។</li>
            <li><strong>សង្គ្រាមជាមួយវៀតណាម៖</strong> ពួកខ្មែរក្រហមបានបង្កសង្គ្រាមជាមួយវៀតណាម ប៉ុន្តែវៀតណាមបានវាយបកវិញយ៉ាងខ្លាំងមកលើពួកខ្មែរក្រហម។</li>
            <li><strong>ការបង្កើតរណសិរ្សសាមគ្គីសង្គ្រោះជាតិកម្ពុជា៖</strong> ដឹកនាំដោយសមមិត្ត ហេង សំរិន បានរំដោះប្រជាជន និងទឹកដីកម្ពុជា រហូតទទួលបានជ័យជម្នះទាំងស្រុង នៅថ្ងៃទី <strong>៧ ខែមករា ឆ្នាំ ១៩៧៩</strong>។</li>
          </ul>
        </div>
      </div>

    </main>

    <footer>
      <span class="study-logo">StudyNest</span>
      <p>&copy; 2024 រក្សាសិទ្ធិគ្រប់យ៉ាងដោយ StudyNest</p>
      <div style="margin-top: 20px; font-size: 1.2rem; display: flex; justify-content: center; gap: 20px;">
        <i class="fab fa-facebook" style="color: #1877f2;"></i>
        <i class="fab fa-telegram" style="color: #0088cc;"></i>
        <i class="fab fa-youtube" style="color: #ff0000;"></i>
      </div>
    </footer>

    <!-- StudyNest Core Script & Background Init -->
    <script src="{{ asset('assets/main.js') }}"></script>
    <script>
      StudyNest.authGuard();
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        if (typeof StudyNest !== 'undefined' && typeof StudyNest.initBackground === 'function') {
          StudyNest.initBackground();
        }
      });
    </script>
</body>
</html>
