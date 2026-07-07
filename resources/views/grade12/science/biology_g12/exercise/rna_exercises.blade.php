<!doctype html>
<html lang="km">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>លំហាត់ ARN | StudyNest</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@300;400;600;700&family=Poppins:wght@400;600&family=Rajdhani:wght@600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <style>
      :root {
        --bio-dark: #065f46;
        --bio-main: #10b981;
        --bio-light: #d1fae5;
        --bg: #f8fafc;
        --text: #1e293b;
        --accent: #f59e0b;
        --blue: #2563eb;
      }

      body {
        font-family: 'Kantumruy Pro', sans-serif;
        background: var(--bg);
        padding: 40px 20px;
        line-height: 1.8;
        color: var(--text);
      }

      .container {
        max-width: 900px;
        margin: 0 auto;
        background: white;
        padding: 50px;
        border-radius: 30px;
        box-shadow: 0 10px 50px rgba(0, 0, 0, 0.05);
      }

      header {
        text-align: center;
        margin-bottom: 50px;
        border-bottom: 2px solid var(--bio-light);
        padding-bottom: 30px;
      }

      h1 {
        color: var(--bio-dark);
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
      }

      .subtitle {
        font-size: 1.1rem;
        font-weight: 600;
        color: #64748b;
      }

      .section-header {
        background: var(--bio-light);
        color: var(--bio-dark);
        padding: 12px 25px;
        border-radius: 15px;
        font-weight: 700;
        font-size: 1.2rem;
        margin: 40px 0 20px;
        display: flex;
        align-items: center;
        gap: 12px;
      }

      .practice-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        padding: 20px;
        border-radius: 18px;
        margin-bottom: 15px;
        display: flex;
        gap: 15px;
        transition: 0.3s;
      }

      .practice-card:hover {
        border-color: var(--bio-main);
        background: #f8fafc;
      }

      .prob-num {
        background: var(--bio-main);
        color: white;
        min-width: 28px;
        height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 700;
        margin-top: 4px;
      }

      .math-font {
        font-family: 'Rajdhani', sans-serif;
        font-weight: 700;
        color: var(--blue);
      }

      .section-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-left: 8px solid var(--bio-main);
        padding: 30px;
        margin-bottom: 25px;
        border-radius: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: all 0.3s ease;
      }

      .section-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 25px rgba(16, 185, 129, 0.1);
      }

      .section-info h2 {
        color: var(--bio-dark);
        font-size: 1.3rem;
        margin-bottom: 8px;
      }

      .section-info p {
        color: #64748b;
        font-size: 0.95rem;
      }

      .download-btn {
        background: var(--bio-dark);
        color: white;
        padding: 12px 25px;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 10px;
        transition: 0.3s;
      }

      .download-btn:hover {
        background: var(--bio-main);
      }

      .back-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-top: 40px;
        text-decoration: none;
        color: white;
        font-weight: 700;
        background: var(--bio-dark);
        padding: 12px 25px;
        border-radius: 15px;
        transition: 0.3s;
      }

      .back-btn:hover {
        background: var(--bio-main);
      }

      @media (max-width: 640px) {
        .container {
          padding: 30px;
        }
        .section-card {
          flex-direction: column;
          text-align: center;
          gap: 20px;
        }
        .download-btn {
          width: 100%;
          justify-content: center;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <header>
        <h1>
          <svg
            width="32"
            height="32"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2.5"
            stroke-linecap="round"
            stroke-linejoin="round"
            style="color: var(--bio-main)"
          >
            <path d="M4 22c5.5-2 8.5-10 16-12"></path>
            <path d="M5.5 17.5l2-2"></path>
            <path d="M8.5 12.5l2-2"></path>
            <path d="M12.5 8.5l2-2"></path>
            <path d="M16 5l2-2"></path>
          </svg>
          លំហាត់ ARN
        </h1>
        <div class="subtitle">អនុវត្តលំហាត់តាមកម្រិត ដើម្បីពង្រឹងសមត្ថភាព</div>
      </header>

      <!-- SECTION 1 -->
      <div class="section-header">
        <i class="fas fa-microscope"></i> លំហាត់ ARN កម្រិត ១
      </div>

      <div class="practice-set">
        <div class="practice-card">
          <span class="prob-num">១</span>
          <div>
            សែនមួយមានប្រវែង <span class="math-font">10200nm</span> ។<br />
            ក. តើសែននេះមាននុយគ្លេអូទីតប៉ុន្មាន ?<br />
            ខ. ក្នុងសែននេះចំនួននុយគ្លេអូទីត
            <span class="math-font">G = 18.10³</span> ។
            គណនាចំនួននុយគ្លេអូទីតនីមួយៗរបស់សែន។
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">២</span>
          <div>
            សែនមានប្រវែង <span class="math-font">646 nm</span> ។
            នៅលើច្រវ៉ាក់ទី១មាននុយគ្លេអូទីត
            <span class="math-font">A = 26%</span>
            និងនៅលើច្រវ៉ាក់ទី២មាននុយគ្លេអូទីត
            <span class="math-font">A = 18%</span> ។<br />
            ក. គណនាចំនួននុយគ្លេអូទីតប្រភេទនីមួយៗរបស់សែន ?<br />
            ខ.
            គណនាចំនួនសម្ព័ន្ធអ៊ីដ្រូសែនសរុបក្នុងម៉ូលេគុលសែនកូនទាំងអស់ដែលកើតក្រោយពេលម៉ូលេគុលសែនស្វ័យដំឡើងទ្វេ
            <span class="math-font">៣</span> ដង ?<br />
            គ. ចូររកចំនួនសម្ព័ន្ធអ៊ីដ្រូសែនសរុបក្នុងម៉ូលេគុលសែន ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៣</span>
          <div>
            គេមានសែនពីរដែលមានប្រវែងស្មើគ្នា។ សែនទី១មានសម្ព័ន្ធអ៊ីដ្រូសែនសរុប
            <span class="math-font">2990</span> និងមាននុយគ្លេអូទីតប្រភេទ
            <span class="math-font">A = 20%</span> នៃចំនួននុយគ្លេអូទីតទាំងអស់។
            សែនទី២មានផលដករវាងនុយគ្លេអូទីតប្រភេទអាដេនីន និងស៊ីតូស៊ីនស្មើ
            <span class="math-font">30%</span> នៃចំនួននុយគ្លេអូទីតទាំងអស់។
            ចូររកចំនួននុយគ្លេអូទីតប្រភេទនីមួយៗរបស់សែននីមួយៗ ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៤</span>
          <div>
            សែនមួយមានផលដករវាងនុយគ្លេអូទីតប្រភេទ
            <span class="math-font">A² - C² = 5%</span>
            និងមានចំនួនសម្ព័ន្ធអ៊ីដ្រូសែនសរុប
            <span class="math-font">6900</span> ។<br />
            ក. គណនាសមាមាត្រនៃរាល់ប្រភេទនុយគ្លេអូទីតប្រភេទនីមួយៗរបស់សែន ?<br />
            ខ. គណនាចំនួននុយគ្លេអូទីតប្រភេទនីមួយៗរបស់សែន ?<br />
            គ. រកចំនួនប្រូតេអ៊ីនដែលសំយោគពីសែនខាងលើ? ដោយគេដឹងថា
            <span class="math-font">ℓសែន</span> ស្មើ
            <span class="math-font">១០%</span> នៃ
            <span class="math-font">ℓADN</span> ។
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៥</span>
          <div>
            សែនមួយមានម៉ាស់ម៉ូលេគុល
            <span class="math-font">54.10⁴</span> ខ្នាតកាបូន
            ហើយនុយគ្លេអូទីតមួយមានម៉ាស់ជាមធ្យម
            <span class="math-font">300</span> ខ្នាតកាបូន។
            គេដឹងថាក្នុងច្រវ៉ាក់ទី១មានផលធៀបដូចតទៅ :
            <span class="math-font">T/C = 7/2, A/G = 1, T/A = 7/3</span> ។<br />
            ក. គណនាចំនួននុយគ្លេអូទីតប្រភេទនីមួយៗរបស់សែន ?<br />
            ខ. គណនាចំនួនជំហាន និងចំនួនសម្ព័ន្ធគីមីក្នុងសែន ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៦</span>
          <div>
            សែនមួយមានផលដករវាងនុយគ្លេអូទីតប្រភេទ
            <span class="math-font">A² - C² = 12.5%</span>
            មានចំនួនសម្ព័ន្ធអ៊ីដ្រូសែនសរុប
            <span class="math-font">3375</span> ។<br />
            ក. គណនាសមាមាត្រជាភាគរយនៃរាល់ប្រភេទនុយគ្លេអូទីតនីមួយៗរបស់សែន ?<br />
            ខ. គណនាចំនួននុយគ្លេអូទីតប្រភេទនីមួយៗរបស់សែន ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៧</span>
          <div>
            សែនមួយមានផលបូករវាងនុយគ្លេអូទីតប្រភេទ
            <span class="math-font">A² + C² = 13%</span> នៃចំនួននុយគ្លេអូទីតសរុប
            និងមានចំនួនសម្ព័ន្ធអ៊ីដ្រូសែនសរុប
            <span class="math-font">5850</span> ។ គេដឹងទៀតថា
            ចំនួននុយគ្លេអូទីតប្រភេទ
            <span class="math-font">C</span> ធំជាងចំនួននុយគ្លេអូទីតប្រភេទ
            <span class="math-font">A</span> ។<br />
            ក. គណនាសមាមាត្រជាភាគរយនៃរាល់ប្រភេទនុយគ្លេអូទីតនីមួយៗរបស់សែន?<br />
            ខ. តើសែននេះមានចំនួនជំហានប៉ុន្មាន ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៨</span>
          <div>
            អង្កត់របស់ម៉ូលេគុល ADN១ មាននុយគ្លេអូទីតសរុប
            <span class="math-font">2700</span>
            ដែលក្នុងនោះមាននុយគ្លេអូទីតប្រភេទស៊ីតូស៊ីនស្មើនឹង
            <span class="math-font">1/9</span> ។ ច្រវ៉ាក់ទី១នៃអង្កត់ម៉ូលេគុល ADN
            មាននុយគ្លេអូទីត <span class="math-font">3</span> ប្រភេទគឺ
            <span class="math-font">2/3</span> ជានុយគ្លេអូទីត
            <span class="math-font">T₁</span>
            នុយគ្លេអូទីតសល់ជានុយគ្លេអូទីតប្រភេទ
            <span class="math-font">A</span> និងនុយគ្លេអូទីតប្រភេទផ្សេងទៀត ។<br />
            ក. គណនាចំនួននុយគ្លេអូទីតប្រភេទនីមួយៗរបស់សែន?<br />
            ខ. គណនាចំនួននុយគ្លេអូទីតប្រភេទនីមួយៗនៃច្រវ៉ាក់ម្ខាងៗរបស់សែន?<br />
            គ. តើសែនមានប៉ុន្មានជំហាន ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៩</span>
          <div>
            សែនមួយមានសម្ព័ន្ធគីមីរវាង
            <span class="math-font">H₃PO₄</span> និងស្ករ សរុប
            <span class="math-font">50238</span> ហើយផលដករវាងនុយគ្លេអូទីតប្រភេទ
            <span class="math-font">A</span> និង
            <span class="math-font">C</span> ស្មើ
            <span class="math-font">2160</span> ។<br />
            ក. គណនាចំនួននុយគ្លេអូទីតប្រភេទនីមួយៗរបស់សែន?<br />
            ខ. គណនាប្រវែងរបស់សែន។<br />
            គ. រកចំនួនសម្ព័ន្ធអ៊ីដ្រូសែនសរុបក្នុងសែននេះ។
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">១០</span>
          <div>
            សែនមួយមាននុយគ្លេអូទីតប្រភេទ
            <span class="math-font">A</span> ធំជាងនុយគ្លេអូទីតប្រភេទ
            <span class="math-font">C</span> ហើយផលគុណនុយគ្លេអូទីត
            <span class="math-font">A</span>
            និងនុយគ្លេអូទីតផ្សេងទៀតដែលមិនមែនជាបាសបំពេញគ្នាស្មើ
            <span class="math-font">6%</span> ។ ម៉ូលេគុល ADN
            នេះមានទំនាក់ទំនងនុយគ្លេអូទីតដូចតទៅ:
            <span class="math-font">3300 - (G-C)/2 = 1/8 (3A + 4C)</span>
            ។<br />
            ក. គណនាចំនួននុយគ្លេអូទីតប្រភេទនីមួយៗរបស់សែននេះ ?<br />
            ខ. គណនាចំនួននុយគ្លេអូទីតនីមួយៗនៅលើច្រវ៉ាក់នីមួយៗរបស់សែន? បើគេដឹងថា
            នៅលើច្រវ៉ាក់ទី១ ផលដក <span class="math-font">A</span> និង
            <span class="math-font">C</span> ស្មើ
            <span class="math-font">800</span> ហើយផលបូក
            <span class="math-font">T</span> និង
            <span class="math-font">G</span> ស្មើ
            <span class="math-font">1800</span> ។<br />
            គ. គណនាចំនួនសែន ដោយគេដឹងថា ប្រវែងសែនស្មើ
            <span class="math-font">១០%</span> នៃប្រវែង ADN។
          </div>
        </div>
      </div>

      <!-- SECTION 2 -->
      <div class="section-header" style="margin-top: 60px">
        <i class="fas fa-dna"></i> លំហាត់ ARN កម្រិត ២ (ការចម្លងក្រម
        និងការបកប្រែក្រម)
      </div>

      <!-- Homework Set 1 -->
      <div
        class="section-title-alt"
        style="margin: 25px 0 15px; font-weight: 700; color: var(--bio-dark)"
      >
        កិច្ចការផ្ទះទី ១ (មូលដ្ឋាន ARNm)
      </div>
      <div class="practice-set">
        <div class="practice-card">
          <span class="prob-num">១</span>
          <div>
            ម៉ូលេគុល ARNm មួយមានរីបូនុយក្លេអូទីត
            <span class="math-font">A = 1200</span> ដែលមានសមាមាត្រ
            <span class="math-font">40%</span> នៃចំនួនរីបូនុយក្លេអូទីតទាំងអស់ ។
            ក្នុងនោះផលដករីបូនុយក្លេអូទីត <span class="math-font">C</span> និង
            <span class="math-font">U</span> ស្មើ
            <span class="math-font">600</span> ឯរីបូនុយក្លេអូទីតកានីនគ្មាន ។<br />
            ក. គណនាចំនួនរីបូនុយក្លេអូទីតប្រភេទនីមួយៗរបស់ ARNm ?<br />
            ខ. គណនាចំនួនសម្ព័ន្ធគីមីក្នុងម៉ូលេគុល ARNm ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">២</span>
          <div>
            ម៉ូលេគុល ARNm មួយមានរីបូនុយក្លេអូទីត
            <span class="math-font">U = 1200</span> ដែលមានសមាមាត្រ
            <span class="math-font">20%</span> នៃរីបូនុយក្លេអូទីតទាំងអស់ ។<br />
            ក. គណនាចំនួននុយក្លេអូទីតសរុបក្នុងសែនដែលបានសំយោគ ARNm ?<br />
            ខ. គណនាចំនួនអាស៊ីតអាមីណេក្នុងម៉ូលេគុលប្រូតេអ៊ីនដែលសំយោគចេញពី ARNm ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៣</span>
          <div>
            ម៉ូលេគុល ARNm មួយមានរីបូនុយក្លេអូទីត
            <span class="math-font">A = 120, U = 310, C = 240</span>
            និងមានចំនួនរីបូនុយក្លេអូទីតសរុប
            <span class="math-font">840</span> ។<br />
            ក. គណនាចំនួនរីបូនុយក្លេអូទីតប្រភេទនីមួយៗរបស់ ARNm ?<br />
            ខ. គណនាប្រវែងម៉ូលេគុល ARNm ?
          </div>
        </div>
      </div>

      <!-- Homework Set 2 -->
      <div
        class="section-title-alt"
        style="margin: 35px 0 15px; font-weight: 700; color: var(--bio-dark)"
      >
        កិច្ចការផ្ទះទី ២ (សែន និង ARNm)
      </div>
      <div class="practice-set">
        <div class="practice-card">
          <span class="prob-num">១</span>
          <div>
            ម៉ូលេគុល ARNm មួយមានសមាមាត្ររីបូនុយក្លេអូទីតដូចតទៅ :
            <span class="math-font">U=20%, C=30%, G=10%</span> ។
            ក្នុងសែនមាននុយក្លេអូទីត <span class="math-font">A=600</span> ។<br />
            ក. គណនាភាគរយនុយក្លេអូទីតនីមួយៗរបស់សែន ?<br />
            ខ. គណនាម៉ាស់ម៉ូលេគុលរបស់សែន បើគេដឹងថា
            នុយក្លេអូទីតនីមួយៗមានម៉ាស់មធ្យម
            <span class="math-font">300</span> ខ្នាតកាបូន ។<br />
            គ. គណនាប្រវែងសែនដែលកំណត់សំយោគ ARNm ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">២</span>
          <div>
            ក្នុងម៉ូលេគុល ARNm
            មួយមានសមាមាត្រជាភាគរយនៃប្រភេទនុយក្លេអូទីតមានដូចតទៅ :
            <span class="math-font">U=32%, C=26%, A=28%</span> ។<br />
            ក. រកសមាមាត្រជាភាគរយនៃនុយក្លេអូទីតប្រភេទនីមួយៗក្នុងសែន ?<br />
            ខ. បើក្នុងសែននោះមាននុយក្លេអូទីតប្រភេទអាដេនីនស្មើ
            <span class="math-font">600</span> ។
            គណនាចំនួននុយក្លេអូទីតប្រភេទនីមួយៗរបស់សែន ?
          </div>
        </div>
      </div>

      <!-- Homework Set 3 -->
      <div
        class="section-title-alt"
        style="margin: 35px 0 15px; font-weight: 700; color: var(--bio-dark)"
      >
        កិច្ចការផ្ទះទី ៣ (ការបកប្រែក្រម និងប្រូតេអ៊ីន)
      </div>
      <div class="practice-set">
        <div class="practice-card">
          <span class="prob-num">១</span>
          <div>
            ម៉ូលេគុល ARNm មួយមានរីបូនុយក្លេអូទីត
            <span class="math-font">U = 1200</span> ដែលមានសមាមាត្រ
            <span class="math-font">20%</span> នៃរីបូនុយក្លេអូទីតទាំងអស់ ។<br />
            ក. គណនាចំនួននុយក្លេអូទីតសរុបក្នុងសែនដែលបានសំយោគ ARNm ?<br />
            ខ. គណនាចំនួនអាស៊ីតអាមីណេក្នុងម៉ូលេគុលប្រូតេអ៊ីនដែលសំយោគចេញពី ARNm
            ?<br />
            គ. គណនាចំនួនអង់ទីកូដុងរបស់ ARNt ដែលចូលរួមសំយោគប្រូតេអ៊ីន ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">២</span>
          <div>
            ម៉ាស់ម៉ូលេគុលនៃប្រភេទប្រូតេអ៊ីនមួយគឺ
            <span class="math-font">65780</span>
            ហើយអាស៊ីតអាមីណេមួយមានម៉ាស់ម៉ូលេគុលប្រហែល
            <span class="math-font">110</span> ខ្នាតកាបូន ។<br />
            ក. តើម៉ូលេគុល ARNm
            ចូលរួមក្នុងសំយោគប្រូតេអ៊ីនខាងលើត្រូវមានត្រីធាតុចម្លងក្រមប៉ុន្មាន ?
            និងមានអាស៊ីតអាមីណេប៉ុន្មាន ?<br />
            ខ. តើសែនដែលកំណត់សំយោគប្រូតេអ៊ីននោះមានប្រវែងប៉ុន្មាន ?<br />
            គ. តើ ARNt ត្រូវចូលទៅក្នុងរីបូសូមប៉ុន្មានដង
            ដើម្បីចូលរួមសំយោគម៉ូលេគុលប្រូតេអ៊ីនខាងលើ ?
          </div>
        </div>
      </div>

      <!-- Homework Set 4 -->
      <div
        class="section-title-alt"
        style="margin: 35px 0 15px; font-weight: 700; color: var(--bio-dark)"
      >
        កិច្ចការផ្ទះទី ៤ (សមាមាត្រ និងម៉ាស់)
      </div>
      <div class="practice-set">
        <div class="practice-card">
          <span class="prob-num">១</span>
          <div>
            សែនមួយមានម៉ាស់ម៉ូលេគុល
            <span class="math-font">540000</span> ខ្នាតកាបូន ។
            សែននេះកំណត់សំយោគម៉ូលេគុល ARNm ដែលមានរីបូនុយក្លេអូទីតសមាមាត្រដូចតទៅ
            : <span class="math-font">U = 2A = 3C = 4G</span> ។<br />
            ក. រកចំនួនរីបូនុយក្លេអូទីតប្រភេទនីមួយៗរបស់ម៉ូលេគុល ?<br />
            ខ.
            ចូររកចំនួននុយក្លេអូទីតប្រភេទនីមួយៗនៅលើច្រវ៉ាក់ម្ខាងៗរបស់សែន ?
            បើម៉ូលេគុល ARNm នេះចម្លងក្រមចេញពីច្រវ៉ាក់ទី១ របស់សែន ។
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">២</span>
          <div>
            ម៉ូលេគុល ADN មួយបានសំយោគម៉ូលេគុលប្រូតេអ៊ីន ៨ ប្រភេទ ។<br />
            ក.
            បើសិនជាប្រភេទប្រូតេអ៊ីននីមួយៗមានអាស៊ីតអាមីណេជាមធ្យម
            <span class="math-font">298</span> តើម៉ូលេគុល ADN នេះ
            មានប្រវែងប៉ុន្មាន ?<br />
            ខ. កាលណាម៉ូលេគុល ADN នេះស្វ័យដំឡើងទ្វេ
            តើវាត្រូវការនុយក្លេអូទីតសេរីប៉ុន្មាន ?<br />
            គ. ក្នុងម៉ូលេគុល ADN
            នេះមានចំនួននុយក្លេអូទីតប្រភេទ
            <span class="math-font">T = 5000</span>
            ចូររកចំនួននុយក្លេអូទីតប្រភេទផ្សេងទៀតដែលមានក្នុងម៉ូលេគុល ADN នេះ ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៣</span>
          <div>
            ម៉ូលេគុល ARNm មួយមានរីបូនុយក្លេអូទីតប្រភេទ
            <span class="math-font">U, A, C, G</span> ដែលមានសមាមាត្រ
            ចែកតាមលំដាប់ដោយដូចតទៅគឺ
            <span class="math-font">3:4:6:7</span> ។ ម៉ូលេគុល ARNm
            នេះសំយោគចេញពីសែនមួយដែលមានប្រវែង
            <span class="math-font">0.408</span> មីក្រូដម៉ែត្រ ។<br />
            ក. គណនាចំនួននុយក្លេអូទីតប្រភេទនីមួយៗរបស់សែន ?<br />
            ខ. គណនាម៉ាស់ម៉ូលេគុលនុយក្លេអូទីតនីមួយៗរបស់សែន ?
            បើនុយក្លេអូទីតមួយមានម៉ាស់ម៉ូលេគុលជាមធ្យម
            <span class="math-font">300</span> ខ្នាតកាបូន ។
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៤</span>
          <div>
            សែនមួយមានម៉ាស់ម៉ូលេគុល
            <span class="math-font">195.10⁴</span> ខ្នាតកាបូន ។<br />
            ក. គណនាប្រវែងម៉ូលេគុល ARNm ដែលសំយោគចេញពីសែននេះ ?
            បើគេដឹងថានុយក្លេអូទីតមួយមានម៉ាស់
            <span class="math-font">300</span> ខ្នាតកាបូន ។<br />
            ខ. គណនាចំនួននុយក្លេអូទីតរាល់ប្រភេទនីមួយៗរបស់ ARNm បើនៅក្នុងសែននោះមាន
            <span class="math-font">C=35%</span>
            នៃនុយក្លេអូទីតទាំងអស់របស់សែនដែលសំយោគចេញពីច្រវ៉ាក់ទី១មាន
            <span class="math-font">A = 500, C = 1000</span> ។
          </div>
        </div>
      </div>

      <!-- Homework Set 5 -->
      <div
        class="section-title-alt"
        style="margin: 35px 0 15px; font-weight: 700; color: var(--bio-dark)"
      >
        កិច្ចការផ្ទះទី ៥ (ការចម្លងក្រម និងល្បឿនរីបូសូម)
      </div>
      <div class="practice-set">
        <div class="practice-card">
          <span class="prob-num">១</span>
          <div>
            សែនមួយមានប្រវែង
            <span class="math-font">387,6nm</span> ។ ក្នុងសែននោះ
            <span class="math-font">A = 350</span> ។
            ក្នុងច្រវ៉ាក់មួយនៃច្រវ៉ាក់ទាំងពីរមាន
            <span class="math-font">T=150</span> និង
            <span class="math-font">C=60</span> ។<br />
            ក. គណនាចំនួនប្រភេទនុយក្លេអូទីតនៅលើច្រវ៉ាក់ម្ខាងៗរបស់សែន ?<br />
            ខ.
            តើសែនខាងលើអាចសំយោគម៉ូលេគុលប្រូតេអ៊ីនមួយដែលមានអាស៊ីតអាមីណេចំនួនប៉ុន្មាន
            ?<br />
            គ. បើសិនជាសែនខាងលើចម្លងក្រម ៦ ដង ហើយជាមធ្យមក្នុងការចម្លងនីមួយៗ រីបូសូម
            ១២ ត្រូវបានឆ្លងកាត់ដើម្បីសំយោគប្រូតេអ៊ីន ។
            ក្រោយពីសំយោគប្រូតេអ៊ីនមួយចំនួនរួចមក
            តើមានអាស៊ីតអាមីណេទាំងអស់ចំនួនប៉ុន្មាន ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">២</span>
          <div>
            ម៉ូលេគុល ARNm ២ បានសំយោគចេញពីសែនមួយ
            ក្នុងពេលសំយោគប្រូតេអ៊ីនមានរីបូសូមមួយបម្លាស់ទីលើ ARNm ទាំង ២
            ដែលឃ្លាតគ្នាជាចម្ងាយ
            <span class="math-font">៥</span> ណាណូម៉ែត្រ
            ដោយគ្មានត្រឡប់មកវិញម្តងទៀតឡើយ ។ រីបូសូមបម្លាស់ទីលើ ARNm ទាំង ២
            ប្រើរយៈពេលអស់
            <span class="math-font">២ នាទី ៣០ វិនាទី</span> ។<br />
            ក. គណនាល្បឿនបម្លាស់ទីលើម៉ូលេគុល ARNm ទាំង ២ ?<br />
            ខ. គណនាចំនួនសម្ព័ន្ធអ៊ីដ្រូសែនសរុបសែននោះបើគេដឹងថា
            <span class="math-font">A=20%</span>
            នៃចំនួននុយក្លេអូទីតសរុប ។
          </div>
        </div>
      </div>

      <!-- Practice Exercises Section -->
      <div
        class="section-title-alt"
        style="margin: 45px 0 15px; font-weight: 700; color: var(--bio-dark); border-top: 2px solid var(--bio-light); padding-top: 25px;"
      >
        លំហាត់អនុវត្តន៍បន្ថែម
      </div>
      <div class="practice-set">
        <div class="practice-card">
          <span class="prob-num">១</span>
          <div>
            ច្រវ៉ាក់ម្ខាងរបស់ម៉ូលេគុល ADN 1 មានប្រវែង
            <span class="math-font">20,4</span> មីក្រុង ។<br />
            ក. នៅពេលធ្វើស្វ័យដំឡើងទ្វេ តើម៉ូលេគុល ADN
            នេះត្រូវការនុយក្លេអូទីតសេរីចំនួនប៉ុន្មាន ?<br />
            ខ. ក្នុងម៉ូលេគុល ADN ខាងលើចំនួននុយក្លេអូទីតទីមីន
            <span class="math-font">T = 38000</span> ។
            គណនាចំនួនប្រភេទនុយក្លេអូទីតនីមួយៗរបស់ម៉ូលេគុល ADN ។<br />
            គ. តើម៉ូលេគុល ADN នេះធ្វើសំយោគប្រូតេអ៊ីនបានប៉ុន្មានប្រភេទ ?
            បើសិនជាសែននីមួយៗមានជាមធ្យម
            <span class="math-font">១២០០</span> នុយក្លេអូទីត ។
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">២</span>
          <div>
            មាន ARNt ចូលទៅក្នុងរីបូសូម
            <span class="math-font">600</span> ដង ដើម្បីចូលរួមសំយោគម៉ូលេគុល
            ប្រូតេអ៊ីនមួយ ។<br />
            ក. គណនាម៉ាស់ម៉ូលេគុលប្រូតេអ៊ីននេះ បើគេដឹងថាម៉ាស់ម៉ូលេគុលមធ្យម
            របស់អាស៊ីតអាមីណេ 1 គឺស្មើនឹង
            <span class="math-font">110</span> ខ្នាតកាបូន ?<br />
            ខ. ម៉ូលេគុល ADN មួយផ្ទុកព័ត៌មានកំណត់នូវទម្រង់ប្រូតេអ៊ីនដូចខាងលើ
            <span class="math-font">18</span> ប្រភេទ ។ តើម៉ូលេគុល ADN
            នេះមានប្រវែងប៉ុន្មាន (គិតជា <span class="math-font">mm</span>) ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៣</span>
          <div>
            សែនមួយមានម៉ាស់
            <span class="math-font">234.10⁴</span> ខ្នាតកាបូន ហើយនុយក្លេអូទីតមួយមាន
            ម៉ាស់ម៉ូលេគុលជាមធ្យម <span class="math-font">300</span> ខ្នាតកាបូន ។
            សែននេះកំណត់សំយោគម៉ូលេគុល ARNm មួយដែលមានផលធៀបរីបូនុយក្លេអូទីតដូចតទៅ :
            <span class="math-font">A = 2/3 U, C = 4/5 A, G = 3/4 C</span> ។<br />
            ក. គណនាចំនួននុយក្លេអូទីតប្រភេទនីមួយៗរបស់សែន ?<br />
            ខ. គណនាចំនួនសម្ព័ន្ធអ៊ីដ្រូសែនសរុបក្នុងសែននេះ ។
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៤</span>
          <div>
            ម៉ូលេគុល ARNm មួយកំណត់សំយោគប្រូតេអ៊ីនមួយដែលមានអាស៊ីតអាមីណេ
            <span class="math-font">398</span> ។<br />
            ក. គណនាភាគរយនៃនុយក្លេអូទីតប្រភេទនីមួយៗក្នុងសែន ដែលសំយោគ ARNm នេះ ?
            បើគេដឹងថា ក្នុងម៉ូលេគុល ARNm នេះមានរីបូនុយក្លេអូទីតប្រភេទ <span class="math-font">A = 25%, C = 10%, G = 15%</span> ។<br />
            ខ. សែននេះជាអង្កត់មួយរបស់ ADN ដែលមានប្រវែង <span class="math-font">20%</span>
            នៃប្រវែងម៉ូលេគុល ADN ។ គណនាចំនួននុយក្លេអូទីតប្រភេទនីមួយៗក្នុងម៉ូលេគុល ADN ?
            បើគេដឹងថា ADN នេះមាននុយក្លេអូទីត <span class="math-font">C_ADN = 2500</span> ។
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៥</span>
          <div>
            សែនមួយមានសម្ព័ន្ធអ៊ីដ្រូសែនសរុបទាំងអស់ <span class="math-font">3441</span> ។
            សែននេះកំណត់សំយោគ ARNm មួយដែលមានសមាសភាពរីបូនុយក្លេអូទីតប្រភេទ
            <span class="math-font">U = 2/14, A = 3/14, C = 4/14, G = 5/14</span>
            នៃរីបូនុយក្លេអូទីតទាំងអស់ ។<br />
            ក. ចូររកចំនួននុយក្លេអូទីតនៃរាល់ប្រភេទនីមួយៗរបស់សែន ?<br />
            ខ. ចូររកចំនួនរីបូនុយក្លេអូទីតនៃរាល់ប្រភេទនីមួយៗរបស់ ARNm ?<br />
            គ. ចូររកចំនួននុយក្លេអូទីតនៃរាល់ប្រភេទនីមួយៗក្នុងរាល់ច្រវ៉ាក់ម្ខាងៗរបស់សែន ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៦</span>
          <div>
            ម៉ូលេគុលប្រូតេអ៊ីនមួយមាន <span class="math-font">178</span> អាស៊ីតអាមីណេ ។<br />
            ក. គណនាប្រវែងម៉ូលេគុល ARNm ដែលបានចម្លងក្រមចេញពីសែនខាងលើ ?<br />
            ខ. ក្នុងសមាសភាពសែននេះ៖ គេឃើញថាផលដករវាងអាដេនីន និងនុយក្លេអូទីតប្រភេទផ្សេងទៀត ស្មើ
            <span class="math-font">២០០</span> ។ ម៉ូលេគុល ARNm ដែលសំយោគចេញពីសែននេះមាន
            <span class="math-font">U = 250</span> និង <span class="math-font">C = 60</span> ។
            ចូរដោះស្រាយរកចំនួននៃប្រភេទនុយក្លេអូទីតនីមួយៗរបស់សែន និងចំនួននៃប្រភេទនុយក្លេអូទីត
            នីមួយៗនៅលើច្រវ៉ាក់ម្ខាងៗ របស់សែន ។<br />
            គ. គណនាសមាមាត្រជាភាគរយនៃប្រភេទនុយក្លេអូទីតនីមួយៗរបស់ម៉ូលេគុល ARNm ដែលរៀបរាប់ខាងលើ ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៧</span>
          <div>
            សែនមួយមាននុយក្លេអូទីតសរុប <span class="math-font">1280</span> និងនុយក្លេអូទីតប្រភេទ
            <span class="math-font">A = 180</span> ។ រកចំនួននុយក្លេអូទីតប្រភេទនីមួយៗក្នុងច្រវ៉ាក់នីមួយៗ
            របស់សែន ? បើគេដឹងថា :<br />
            − បើ ARNm ចម្លងព័ត៌មានចេញពីច្រវ៉ាក់ទី១ នោះផលធៀប <span class="math-font">A_ARNm / G_ARNm = 1/2</span><br />
            − បើ ARNm ចម្លងព័ត៌មានចេញពីច្រវ៉ាក់ទី២ នោះផលធៀប <span class="math-font">A_ARNm / G_ARNm = 1/3</span>
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៨</span>
          <div>
            សែនមួយមាននុយក្លេអូទីតទាំងអស់ <span class="math-font">792</span> ។
            សែននេះសំយោគ ARNm 4 លើក ត្រូវការរីបូនុយក្លេអូទីតប្រភេទ <span class="math-font">A</span>
            និង <span class="math-font">U</span> ស្មើនឹង <span class="math-font">5</span> ដង នុយក្លេអូទីតប្រភេទ
            <span class="math-font">C</span> របស់សែន ។ រកចំនួននុយក្លេអូទីតប្រភេទនីមួយៗរបស់សែន ។
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៩</span>
          <div>
            សែនមួយសំយោគ ARNm 3 លើក ត្រូវការរីបូនុយក្លេអូទីតសេរីចំនួន <span class="math-font">2250</span> ។
            គេដឹងថា ARNm 1 មានផលបូករីបូនុយក្លេអូទីតប្រភេទ <span class="math-font">A + U = 40%</span>
            នៃរីបូនុយក្លេអូទីតទាំងអស់ ។<br />
            ក. តើប្រូតេអ៊ីនដែលកំណត់សំយោគដោយសែនខាងលើនេះមានអាស៊ីតអាមីណេចំនួនប៉ុន្មាន ?<br />
            ខ. បើសិនជាសែននេះស្វ័យដំឡើងទ្វេ 4 លើក តើវាត្រូវការនុយក្លេអូទីតសេរីប្រភេទនីមួយៗប៉ុន្មាន ?<br />
            គ. ចូររកប្រវែងរបស់សែនគិតជាមីលីម៉ែត្រ ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">១០</span>
          <div>
            ម៉ូលេគុល ARNm មួយមានប្រវែង <span class="math-font">408 nm</span> និងមានផលបូកនុយក្លេអូទីត
            <span class="math-font">C</span> និង <span class="math-font">U</span> ស្មើ <span class="math-font">30%</span>
            ហើយផលដក <span class="math-font">C</span> និង <span class="math-font">U</span> ស្មើ <span class="math-font">10%</span>
            នៃនុយក្លេអូទីតសរុបរបស់ ARNm ។ ក្នុងច្រវ៉ាក់ទី១របស់សែនដែលកំណត់សំយោគ ARNm
            នេះមាននុយក្លេអូទីត <span class="math-font">C = 30%</span> និង <span class="math-font">T = 40%</span> ។
            សែននេះកំណត់សំយោគម៉ូលេគុលប្រូតេអ៊ីនមួយចំនួន ក្រោយពីសំយោគប្រូតេអ៊ីនរួច គេសង្កេតឃើញមានអាស៊ីតអាមីណេជាសរុបទាំងអស់
            បើគិតបញ្ចូលគ្នាមានចំនួន <span class="math-font">1990</span> ។<br />
            ក. គណនាចំនួននុយក្លេអូទីតប្រភេទនីមួយៗរបស់សែន ?<br />
            ខ. តើមានរីបូសូមចំនួនប៉ុន្មានចូលរួមក្នុងសំយោគប្រូតេអ៊ីននេះ ? បើគេដឹងថារីបូសូមនីមួយៗរំកិលលើ ARNm តែមួយដង ។
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">១១</span>
          <div>
            សែនមួយ មានផលបូកនុយក្លេអូទីត <span class="math-font">C</span> និង <span class="math-font">G</span> ស្មើ <span class="math-font">40%</span> នៃចំនួននុយក្លេអូទីត
            ទាំងអស់ ។ សែននេះត្រូវការនុយក្លេអូទីតសេរីចំនួន <span class="math-font">9000</span> ដើម្បីធ្វើស្វ័យ
            ដំឡើងទ្វេ <span class="math-font">2</span> ដង។ ក្រោយពីស្វ័យ ដំឡើងទ្វេសែនទាំងអស់នោះបានសំយោគ
            ម៉ូលេគុល ARNm <span class="math-font">1</span> ដងដូចគ្នា ហើយត្រូវការរីបូនុយក្លេអូទីតសេរីប្រភេទ
            <span class="math-font">U = 2908</span> និង <span class="math-font">G = 1988</span> ។<br />
            ក. គណនាចំនួននុយក្លេអូទីតប្រភេទនីមួយៗមុនស្វ័យដំឡើងទ្វេ ?<br />
            ខ. គណនាចំនួនរីបូនុយក្លេអូទីតប្រភេទនីមួយៗរបស់ម៉ូលេគុល ARNm ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">១២</span>
          <div>
            ម៉ូលេគុល ADN មួយមានចំនួននុយក្លេអូទីត <span class="math-font">A = 6.10⁵</span> ចំនួននុយក្លេអូទីត
            <span class="math-font">C = 4</span> ដង នៃចំនួននុយក្លេអូទីតប្រភេទអាដេនីន ។<br />
            ក. តើម៉ូលេគុល ADN នេះមានប្រវែងប៉ុន្មាន ?<br />
            ខ. តើម៉ូលេគុល ADN នេះមានប៉ុន្មានជំហាន ?<br />
            គ. បើសិនជាសែននីមួយៗមានជាមធ្យម <span class="math-font">6 000</span> តើម៉ូលេគុល ADN នេះអាច
            សំយោគប្រូតេអ៊ីនបានប៉ុន្មានប្រភេទ ?<br />
            ឃ. គណនាចំនួនអាស៊ីតអាមីណេក្នុងម៉ូលេគុលប្រូតេអ៊ីនដែលសំយោគបាន ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">១៣</span>
          <div>
            ម៉ូលេគុល ARNm 1 មានផលបូកនុយក្លេអូទីតប្រភេទ <span class="math-font">C</span> និង <span class="math-font">G</span> លើសផលបូក
            នុយក្លេអូទីត <span class="math-font">A</span> និង <span class="math-font">U</span> ចំនួន <span class="math-font">350</span> ។ ម៉ូលេគុល ARNm នេះសំយោគចេញពី
            សែន 1 ដែលត្រូវការផលបូកនុយក្លេអូទីតសេរីប្រភេទ <span class="math-font">T</span> និង <span class="math-font">G</span> ស្មើ <span class="math-font">4500</span>
            ដើម្បីធ្វើស្វ័យដំឡើងទ្វេ <span class="math-font">2</span> ដង ។<br />
            ក. គណនាចំនួននុយក្លេអូទីតប្រភេទនីមួយៗរបស់សែន ?<br />
            ខ. រកចំនួនអាស៊ីតអាមីណេដែលកំណត់សំយោគដោយសែនខាងលើ ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">១៤</span>
          <div>
            សែនមួយមាននុយក្លេអូទីតប្រភេទ <span class="math-font">C</span> ច្រើនជាងនុយក្លេអូទីតប្រភេទ <span class="math-font">A</span> ចំនួន
            <span class="math-font">៣៦០</span> ។ ម៉ូលេគុល ARNm ដែលសំយោគចេញពីសែននោះមានសមាសភាពរីបូនុយក្លេអូទីត <span class="math-font">A, U, C, G</span> តាមសមាមាត្រលំដាប់លំដោយ :
            <span class="math-font">A = 1/10, U = 2/10, C = 3/10</span> និង <span class="math-font">G = 4/10</span> នៃចំនួនរីបូនុយក្លេអូទីតសរុបទាំងអស់ ។<br />
            ក. ចំនួននុយក្លេអូទីតប្រភេទនីមួយៗរបស់សែន ?<br />
            ខ. ម៉ាស់ម៉ូលេគុលរបស់ប្រូតេអ៊ីនមួយ បើអាស៊ីតអាមីណេមួយមានម៉ាស់ជាមធ្យម <span class="math-font">110</span> ។
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">១៥</span>
          <div>
            ម៉ូលេគុល ARNm មួយមានសមាសភាពរីបូនុយក្លេអូទីត <span class="math-font">A, U, G, C</span> ដែលចែក
            ជាសមាមាត្រតាមលំដាប់លំដោយ: <span class="math-font">9:3:3:1</span> ។ ម៉ូលេគុល ARNm នេះមាន
            ប្រវែង <span class="math-font">326,4 nm</span> ។<br />
            ក. គណនាចំនួនរីបូនុយក្លេអូទីតប្រភេទនីមួយៗរបស់ម៉ូលេគុល ARNm នេះ ។<br />
            ខ. គណនាចំនួននុយក្លេអូទីតប្រភេទនីមួយៗរបស់សែនដែលកំណត់សំយោគម៉ូលេគុល ARNm នេះ ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">១៦</span>
          <div>
            សែនមួយ មានចំនួនសម្ព័ន្ធអ៊ីដ្រូសែនសរុប <span class="math-font">2052</span> ។ សែននេះកំណត់សំយោគ
            ម៉ូលេគុល ARNm មួយដែលមានសមាមាត្ររីបូនុយក្លេអូទីតដូចតទៅ : <span class="math-font">U = 2A = 3C = 4G</span> ។<br />
            ក. គណនាសមាមាត្រជាភាគរយនៃរាល់នុយក្លេអូទីតនីមួយៗរបស់សែន ?<br />
            ខ. សែននេះជាអង្កត់មួយរបស់ម៉ូលេគុល ADN ដែលមានប្រវែង <span class="math-font">20%</span> នៃ
            ប្រវែង ម៉ូលេគុល ADN ។ គណនាចំនួននុយក្លេអូទីតប្រភេទនីមួយៗក្នុងម៉ូលេគុល ADN នេះ ? បើគេដឹងថា ម៉ូលេគុល ADN នេះមាននុយក្លេអូទីតប្រភេទទីមីន <span class="math-font">T = 3000</span> ។
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">១៧</span>
          <div>
            ម៉ូលេគុល ARNm មួយកំណត់សំយោគប្រូតេអ៊ីនមួយដែលមានអាស៊ីតអាមីណេ <span class="math-font">398</span> ។<br />
            ក. គណនាភាគរយនៃនុយក្លេអូទីតប្រភេទនីមួយៗក្នុងសែន ដែលសំយោគ ARNm នេះ ? ក្នុងម៉ូលេគុល ARNm នេះមានរីបូនុយក្លេអូទីតប្រភេទ <span class="math-font">A = 25%, C = 10%, G = 15%</span> ។
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">១៨</span>
          <div>
            សែនមួយមានម៉ាស់ម៉ូលេគុល <span class="math-font">36.10⁴</span> ខ្នាតកាបូន និងសមាមាត្រ <span class="math-font">A/C= 2/3</span> ។
            នុយក្លេអូទីតមួយ មានម៉ាស់ម៉ូលេគុលមធ្យម <span class="math-font">300</span> ខ្នាតកាបូន ។ ម៉ូលេគុល
            ARNm 1 ដែលសំយោគចេញពីសែននោះ មានរីបូនុយក្លេអូទីត <span class="math-font">A_ARNm = 25%</span> និង <span class="math-font">C_ARNm = 40%</span> ។ ក្នុងចលនាការសំយោគ ARNm
            ពីច្រវ៉ាក់ម្ខាងដែលជាពុម្ពគំរូមជ្ឈមណ្ឌលកោសិកាផ្តល់រីបូនុយក្លេអូទីតសេរី <span class="math-font">A = 450</span> ។<br />
            ក. គណនាចំនួនរីបូនុយក្លេអូទីតប្រភេទនីមួយៗរបស់ម៉ូលេគុល ARNm ?<br />
            ខ. គណនាចំនួនម៉ូលេគុល ARNm ?<br />
            គ. គណនាចំនួនអាស៊ីតអាមីណេក្នុងម៉ូលេគុលប្រូតេអ៊ីនដែលសំយោគចេញពី ARNm ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">១៩</span>
          <div>
            សែន ១ មានសម្ព័ន្ធអ៊ីដ្រូសែនរវាងនុយក្លេអូទីតប្រភេទ <span class="math-font">A</span> និង <span class="math-font">T</span> ស្មើនឹងសម្ព័ន្ធ
            អ៊ីដ្រូសែនរវាងនុយក្លេអូទីត <span class="math-font">C</span> និង <span class="math-font">G</span> ស្មើ <span class="math-font">240</span> ។ នៅលើច្រវ៉ាក់ទី១មានផល
            បូកម៉ាស់នុយក្លេអូទីតប្រភេទ <span class="math-font">T</span> និង <span class="math-font">C</span> ស្មើ <span class="math-font">18000</span> ហើយផលដកម៉ាស់នុយក្លេអូទីតប្រភេទ <span class="math-font">A</span> និង <span class="math-font">G</span> ស្មើ <span class="math-font">9000</span> ។<br />
            ក. ចូររកចំនួននុយក្លេអូទីតប្រភេទនីមួយៗក្នុងច្រវ៉ាក់នីមួយៗរបស់សែននេះ<br />
            ខ. ចូររកចំនួនរីបូនុយក្លេអូទីតប្រភេទនីមួយៗរបស់ម៉ូលេគុល ARNm ? បើគេដឹងថាវាបានចម្លងព័ត៌មានចេញពីច្រវ៉ាក់ទី១ របស់សែន ?<br />
            គ. គណនាចំនួនអាស៊ីតអាមីណេក្នុងម៉ូលេគុលប្រូតេអ៊ីនដែលសំយោគចេញពី ARNm ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">២០</span>
          <div>
            ម៉ូលេគុល ADN មួយមានសម្ព័ន្ធគីមីរវាង <span class="math-font">H₃PO₄</span> និងស្ករសរុប <span class="math-font">50238</span> ហើយ
            ផលដករវាង នុយក្លេអូទីតប្រភេទ <span class="math-font">A</span> និង <span class="math-font">C</span> ស្មើ <span class="math-font">2160</span> ។<br />
            ក. គណនាចំនួននុយប្រភេទនីមួយៗរបស់ម៉ូលេគុល ADN ?<br />
            ខ. គណនាប្រវែងសែន របស់ម៉ូលេគុល ADN ។<br />
            គ. រកចំនួនសម្ព័ន្ធអ៊ីដ្រូសែនសរុបក្នុងម៉ូលេគុល ADN ។
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">២១</span>
          <div>
            ម៉ូលេគុល ARNm មួយមានរីបូនុយក្លេអូទីត ៤ ប្រភេទ <span class="math-font">A, U, C, G</span> ដែលបែងចែក
            ជាសមាមាត្រ តាមលំដាប់លំដោយដូចតទៅ <span class="math-font">៣ : ៤: ៦ : ៧</span> ។ ម៉ូលេគុល
            ARNm នេះសំយោគចេញ ពីអង្កត់ ADN មួយដែលគេដឹងថា ក្រោយពីអង្កត់ ADN នោះស្វ័យដំឡើងទ្វេ ២ លើក បង្កើតបានអង្កត់ ADN កូនសរុប បើគិតបញ្ចូលគ្នាទាំងអស់មានប្រវែង <span class="math-font">១.៦៣២</span> មីក្រូដម៉ែត្រ ។<br />
            ក. គណនាចំនួនរីបូនុយក្លេអូទីតប្រភេទនីមួយៗរបស់ម៉ូលេគុល ARNm ?<br />
            ខ. គណនាចំនួននុយក្លេអូទីតប្រភេទនីមួយៗរបស់អង្កត់ ADN ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">២២</span>
          <div>
            សែន ១ មានសម្ព័ន្ធអ៊ីដ្រូសែនរវាង <span class="math-font">A</span> និង <span class="math-font">T</span> ស្មើ <span class="math-font">240</span> ហើយសម្ព័ន្ធអ៊ីដ្រូសែនរវាង <span class="math-font">C</span> និង <span class="math-font">G</span> ស្មើ <span class="math-font">324</span> ។<br />
            ក. គណនាចំនួនអាស៊ីតអាមីណេក្នុងម៉ូលេគុលប្រូតេអ៊ីនដែលកំណត់សំយោគដោយសែននេះ ?<br />
            ខ. សែននេះសំយោគ ARNm 2 លើក ត្រូវការរីបូនុយក្លេអូទីតប្រភេទ <span class="math-font">A</span> លើស <span class="math-font">U</span> ចំនួន <span class="math-font">40</span> និងរីបូនុយក្លេអូទីតប្រភេទ <span class="math-font">G</span> លើស <span class="math-font">C</span> ចំនួន <span class="math-font">40</span> ។ ចូររកចំនួននុយក្លេអូទីតប្រភេទនីមួយៗ ARNm ?<br />
            គ. ក្នុងពេលសំយោគប្រូតេអ៊ីន រីបូសូមមួយបានឆ្លងកាត់ ARNm ទាំងពីរដែលឃ្លាតពីគ្នា <span class="math-font">៦.៩៦</span> ណាណូម៉ែត្រ ដោយល្បឿន <span class="math-font">4,7nm / s</span> ។ ចូររកយៈពេលដែលរីបូសូមឆ្លងកាត់ ARNm ទាំងពីរ ។
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">២៣</span>
          <div>
            សែនមួយមានប្រវែង <span class="math-font">680nm</span> ។ សែននេះកំណត់សំយោគម៉ូលេគុល ARNm 1 មានទំនាក់ទំនង <span class="math-font">2A - 3C = 3G - 2U</span> ។<br />
            ក. គណនាចំនួននុយក្លេអូទីតប្រភេទនីមួយៗរបស់សែន ?<br />
            ខ. គណនាចំនួនរីបូនុយក្លេអូទីតប្រភេទនីមួយៗរបស់ម៉ូលេគុល ARNm ? បើគេដឹងថា <span class="math-font">C_ARNm - G_ARNm = 400</span> និង <span class="math-font">A_ARNm - U_ARNm = 600</span> ។
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">២៤</span>
          <div>
            ARNt ដឹកនាំចូលទៅក្នុងរីបូសូម <span class="math-font">680</span> ដង ដើម្បីចូលរួមសំយោគប្រូតេអ៊ីនមួយ ។<br />
            ក. គណនាម៉ាស់ម៉ូលេគុលប្រូតេអ៊ីន ? ដោយអាស៊ីតអាមីណេ 1 មានម៉ាស់ម៉ូលេគុល <span class="math-font">110</span> ខ្នាតកាបូន ។<br />
            ខ. ម៉ូលេគុល ADN មួយអាចផ្ទុកព័ត៌មានកំណត់ទម្រង់ប្រូតេអ៊ីនដូចខាងលើ <span class="math-font">16</span> ប្រភេទ ។ តើម៉ូលេគុល ADN នេះមានប្រវែងប៉ុន្មានមីលីម៉ែត្រ ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">២៥</span>
          <div>
            ម៉ូលេគុល ARNm មួយមានទំនាក់ទំនងរីបូនុយក្លេអូទីតដូចតទៅ : <span class="math-font">A = 4U, U/G = 1/5</span> និង <span class="math-font">C/G = 1/2</span> ។<br />
            ក. គណនាសមាមាត្រជាភាគរយនៃនុយក្លេអូទីតប្រភេទនីមួយៗរបស់អង្កត់ ADN ដែលកំណត់សំយោគ ARNm ខាងលើ ?<br />
            ខ. គណនាចំនួនអាស៊ីតអាមីណេក្នុងម៉ូលេគុលប្រូតេអ៊ីន ? បើអង្កត់ ADN នោះមាននុយក្លេអូទីត ប្រភេទ <span class="math-font">A = 360</span> ។
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">២៦</span>
          <div>
            ម៉ូលេគុល ADN មួយមានចំនួននុយក្លេអូទីតប្រភេទ <span class="math-font">T = 16%</span> នៃចំនួននុយក្លេអូទីតទាំងអស់ក្នុងម៉ូលេគុល ADN នោះ ។ ចំនួននុយក្លេអូទីតប្រភេទ <span class="math-font">C</span> ច្រើនជាង <span class="math-font">T</span> ចំនួន <span class="math-font">36,000</span> ។<br />
            ក. គណនាចំនួននុយក្លេអូទីតប្រភេទនីមួយៗរបស់ម៉ូលេគុល ADN នោះ ?<br />
            ខ. គណនាប្រវែងរបស់ ADN នោះ ?<br />
            គ. គណនាចំនួនសម្ព័ន្ធអ៊ីដ្រូសែនសរុបក្នុងម៉ូលេគុល ADN នោះ ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">២៧</span>
          <div>
            ច្រវ៉ាក់ម្ខាងរបស់អង្កត់ ADN មួយមាននុយក្លេអូទីតប្រភេទទីមីនចំនួន <span class="math-font">1100</span> និងប្រភេទស៊ីតូស៊ីនចំនួន <span class="math-font">2800</span> ឯច្រវ៉ាក់ម្ខាងទៀតរបស់វាមាននុយក្លេអូទីតប្រភេទទីមីន <span class="math-font">3500</span> និងប្រភេទស៊ីតូស៊ីនចំនួន <span class="math-font">1000</span> ។<br />
            ក. ចូររកប្រវែងអង្កត់ ADN នេះ ?<br />
            ខ. នៅពេលស្វ័យដំឡើងទ្វេ 3 លើក តើអង្កត់ ADN នេះត្រូវការនុយក្លេអូទីតសេរីចំនួនប៉ុន្មាន ?<br />
            គ. តើអង្កត់ ADN នេះកំណត់សំយោគប្រូតេអ៊ីនមួយដែលមានអាស៊ីតអាមីណេចំនួនប៉ុន្មាន ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៣០</span>
          <div>
            សែនមួយមាននុយក្លេអូទីតប្រភេទអាដេនីន <span class="math-font">20%</span> នៃចំនួននុយក្លេអូទីតទាំងអស់ ។ សែននេះកំណត់សំយោគប្រូតេអ៊ីនមួយដែលមានអាស៊ីតអាមីណេចំនួន <span class="math-font">198</span> ។ ម៉ូលេគុល ARNm ដែលសំយោគចេញពីសែនខាងលើមានរីបូនុយក្លេអូទីតទាំង 4 ប្រភេទគឺ <span class="math-font">A, U, C, G</span> ដែលក្នុងនោះរីបូនុយក្លេអូទីតប្រភេទ <span class="math-font">A = 150</span> និង <span class="math-font">G = 120</span> ។ ចូររក :<br />
            ក. ចំនួននុយក្លេអូទីតប្រភេទនីមួយៗរបស់សែន ?<br />
            ខ. ចំនួនរីបូនុយក្លេអូទីតប្រភេទនីមួយៗរបស់ ARNm ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៣១</span>
          <div>
            ម៉ូលេគុលប្រូតេអ៊ីនមួយមានអាស៊ីតអាមីណេចំនួន <span class="math-font">249</span> ត្រូវបានសំយោគចេញពី ARNm មួយ ដែលមានរីបូសូមបម្លាស់ទីឆ្លងកាត់ចំនួន <span class="math-font">50</span> វិនាទី ។ ក្នុងការតាមដានដំណាលការខាងលើនេះ គេសង្កេតឃើញមាន ARNt ចំនួន <span class="math-font">10%</span> ចូលរួមបកប្រែក្រម <span class="math-font">3</span> លើក, <span class="math-font">5%</span> ចូលរួមបកប្រែក្រម <span class="math-font">2</span> លើក និងភាគរយដែលនៅសល់ចូលរួមបកប្រែក្រម <span class="math-font">1</span> លើក ។<br />
            ក. ចូររកល្បឿនបម្លាស់ទីរបស់រីបូសូមលើ ARNm ?<br />
            ខ. តើ ARNt ដែលចូលរួមបកប្រែក្រម <span class="math-font">3</span> លើកមានចំនួនប៉ុន្មាន ? តើ ARNt ដែលចូលរួមបកប្រែក្រម <span class="math-font">2</span> លើកមានចំនួនប៉ុន្មាន ? តើ ARNt ដែលចូលរួមបកប្រែក្រម <span class="math-font">1</span> លើកមានចំនួនប៉ុន្មាន ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៣២</span>
          <div>
            ARNt ចូលទៅក្នុងរីបូសូម <span class="math-font">489</span> ដង ដើម្បីចូលរួមសំយោគប្រូតេអ៊ីនមួយ ។<br />
            ក. គណនាចំនួននុយក្លេអូទីតសរុបក្នុងសែនដែលដឹកនាំសំយោគប្រូតេអ៊ីន ?<br />
            ខ. គណនាសមាមាត្រជាភាគរយនៃនុយក្លេអូទីតនីមួយៗរបស់សែន ? បើនុយក្លេអូទីត <span class="math-font">A = 441</span> ។<br />
            គ. គណនាចំនួនសម្ព័ន្ធគីមីក្នុងសែន ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៣៣</span>
          <div>
            ច្រវ៉ាក់ម្ខាងនៃម៉ូលេគុល ADN មួយមាន <span class="math-font">15.10⁴</span> នុយក្លេអូទីត ។<br />
            ក. ម៉ូលេគុល ADN នេះអាចប្រើជាគំរូពុម្ពតើវាត្រូវការម៉ូលេគុល ARNm ប៉ុន្មាន បើម៉ូលេគុល ARNm នីមួយៗមានជាមធ្យម <span class="math-font">5000</span> នុយក្លេអូទីត ?<br />
            ខ. ម៉ូលេគុល ADN នេះមាននុយក្លេអូទីតប្រភេទ <span class="math-font">C = 16%</span> នៃចំនួននុយក្លេអូទីតទាំងអស់ ។ គណនាចំនួននុយក្លេអូទីតនៃប្រភេទនីមួយៗរបស់ម៉ូលេគុល ADN នេះ ។
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៣៤</span>
          <div>
            ម៉ូលេគុលប្រូតេអ៊ីនមួយ មានអាស៊ីតអាមីណេ <span class="math-font">478</span> ។<br />
            ក. គណនាម៉ាស់ម៉ូលេគុលនៃសែនដែលកំណត់សំយោគប្រូតេអ៊ីននេះដោយដឹងថា នុយក្លេអូទីតមួយមានម៉ាស់ម៉ូលេគុល <span class="math-font">300</span> ខ្នាតកាបូន ។<br />
            ខ. តើសែនដែលកំណត់សំយោគប្រូតេអ៊ីននេះមានប្រវែងប៉ុន្មាន (គិតជា <span class="math-font">mm</span>) ?<br />
            គ. បើសិនជាម៉ូលេគុល ADN 1 មាន <span class="math-font">25</span> សែន នោះតើនៅពេលដែលធ្វើស្វ័យដំឡើងទ្វេវាត្រូវការនុយក្លេអូទីតសេរីប៉ុន្មាន ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៣៥</span>
          <div>
            ម៉ូលេគុល ADN មួយបានកំណត់សំយោគប្រូតេអ៊ីន <span class="math-font">18</span> ប្រភេទហើយប្រូតេអ៊ីននីមួយៗ មានអាស៊ីតអាមីណេជាមធ្យម <span class="math-font">298</span> ។ ក្នុងម៉ូលេគុល ADN នេះមានចំនួននុយក្លេអូទីតប្រភេទ <span class="math-font">T = 5000</span> ។<br />
            ក. តើម៉ូលេគុល ADN នេះមានប្រវែងប៉ុន្មាន ?<br />
            ខ. កាលណាម៉ូលេគុល ADN ស្វ័យដំឡើងទ្វេ <span class="math-font">៣</span> ដង តើវាត្រូវការនុយក្លេអូទីតសេរីចំនួនប៉ុន្មាន ?<br />
            គ. ចូររកចំនួននុយក្លេអូទីតប្រភេទផ្សេងទៀតដែលមាននៅក្នុងម៉ូលេគុល ADN នេះ ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៣៦</span>
          <div>
            ក្នុងចលនាការសំយោគប្រូតេអ៊ីន 1 រវាងសែនដែលផ្ទុកព័ត៌មានសេនេទិច និងម៉ូលេគុលប្រូតេអ៊ីនដែលសែននោះសំយោគបាន តើណាមួយធ្ងន់ជាង ? ហើយប៉ុន្មានដង ?<br />
            គេដឹងថា ម៉ាស់មធ្យមរបស់នុយក្លេអូទីតមួយមាន <span class="math-font">300</span> ខ្នាតកាបូន និងម៉ាស់ជាមធ្យមរបស់អាស៊ីតអាមីណេ មួយមាន <span class="math-font">110</span> ខ្នាតកាបូន ។
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៣៧</span>
          <div>
            ម៉ូលេគុល ARNm មួយមាន <span class="math-font">U = 2000</span> ដែលត្រូវជា <span class="math-font">20%</span> នៃចំនួននុយក្លេអូទីត ទាំងអស់ របស់ ARNm ។<br />
            ក. គណនាប្រវែងសែនដែលបានសំយោគម៉ូលេគុល ARNm នេះ ?<br />
            ខ. តើគេអាចគណនាប្រភេទនុយក្លេអូទីតរបស់ ARNm ដែលនៅសល់បានដែរឬទេ ? ព្រោះអ្វី ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៣៨</span>
          <div>
            សែនមួយមាននុយក្លេអូទីតប្រភេទ <span class="math-font">G</span> ច្រើនជាងនុយក្លេអូទីតប្រភេទ <span class="math-font">A</span> ចំនួន <span class="math-font">360</span> ។ ម៉ូលេគុល ARNm ដែលសំយោគចេញពីសែននោះមានសមាសភាពរីបូនុយក្លេអូទីត <span class="math-font">A, U, C, G</span> តាមសមាមាត្រលំដាប់លំដោយ : <span class="math-font">A = 1/10, U = 2/10, C = 3/10</span> និង <span class="math-font">G = 4/10</span> នៃចំនួនរីបូនុយក្លេអូទីតសរុបទាំងអស់ ។<br />
            ក. ចំនួនរីបូនុយក្លេអូទីតប្រភេទនីមួយៗរបស់ ARNm ដែលសំយោគចេញពីសែន ?<br />
            ខ. ចំនួននុយក្លេអូទីតប្រភេទនីមួយៗរបស់សែន ?<br />
            គ. ម៉ាស់ម៉ូលេគុលរបស់ប្រូតេអ៊ីនមួយ បើអាស៊ីតអាមីណេមួយមានម៉ាស់ជាមធ្យម <span class="math-font">110</span> ។
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៣៩</span>
          <div>
            ម៉ូលេគុលប្រូតេអ៊ីនមានចំណងប៉ិបទីត <span class="math-font">267</span> កំណត់សំយោគដោយសែនមួយដែលដែលមាននុយក្លេអូទីតប្រភេទ <span class="math-font">A = 15%</span> ក្នុងចំនួននុយក្លេអូទីតទាំងអស់ ។ ចូររក :<br />
            ក. ប្រវែងសែន ?<br />
            ខ. ចំនួននុយក្លេអូទីតនៃរាល់ប្រភេទរបស់សែន ?<br />
            គ. ចំនួនសម្ព័ន្ធអ៊ីដ្រូសែនរបស់សែន ?
          </div>
        </div>

        <div class="practice-card">
          <span class="prob-num">៤០</span>
          <div>
            សែនមួយមានសមាមាត្រ <span class="math-font">C/A = 7/3</span> និងមាននុយក្លេអូទីតប្រភេទ <span class="math-font">T = 450</span> ។ ច្រវ៉ាក់ទី១ របស់ សែននោះមាននុយក្លេអូទីត <span class="math-font">A = 1/10, T = 2/10, G = 3/10</span> និង <span class="math-font">C = 4/10</span> នៃចំនួននុយក្លេអូទីតទាំងអស់ក្នុងច្រវ៉ាក់ទី១នោះ ។ ច្រវ៉ាក់ទី២ នៃ សែននោះសំយោគ ARNm ជាច្រើនលើក ត្រូវការរីបូនុយក្លេអូទីតសេរី <span class="math-font">G = 2250</span> ។ ARNm មួយចំនួនដែលសំយោគចេញពីសែននោះកំណត់សំយោគ ម៉ូលេគុលប្រូតេអ៊ីន មួយចំនួន ដែលមានរីបូសូមចំនួន <span class="math-font">6</span> បម្លាស់ទីលើវាដោយគ្មានត្រឡប់មកវិញម្តងទៀតទេ ។<br />
            ក. ចូររកប្រវែងរបស់សែន ?<br />
            ខ. ចូររកចំនួន និងសមាមាត្រជាភាគរយនៃរាល់ប្រភេទរីបូនុយក្លេអូទីតក្នុងម៉ូលេគុល ARNm ដែលកំណត់សំយោគដោយសែនខាងលើ ?<br />
            គ. ចូររកចំនួនអាស៊ីតអាមីណេសរុបក្នុងម៉ូលេគុលប្រូតេអ៊ីនមួយចំនួនដែល ARNm ទាំងអស់ខាងលើសំយោគចេញ ?
          </div>
        </div>
      </div>

      <!-- Difficult Exercises Section -->
      <div
        class="section-title-alt"
        style="margin: 45px 0 15px; font-weight: 700; color: #991b1b; border-top: 2px solid #fca5a5; padding-top: 25px;"
      >
        លំហាត់អនុវត្តន៍ (កម្រិតលំបាក)
      </div>
      <div class="practice-set">
        <div class="practice-card" style="border-left: 5px solid #991b1b;">
          <span class="prob-num" style="background: #991b1b;">១</span>
          <div>
            ក្រោយពេលសំយោគប្រូតេអ៊ីនមួយរួច គេឃើញថាអាស៊ីតអាមីណេដែលត្រូវគ្នា
            នឹងកូដុងរបស់ ARNm មានដូចតទៅ: អាឡានីន = GCA, ប្រូលីន = CCU,
            សេរីន = UCU ត្រេអូនីន = ACG ។ ម៉ូលេគុលប្រូតេអ៊ីន១ មានអាស៊ីតអាមីណេ
            4 ប្រភេទ គឺអាឡានីន = <span class="math-font">15%</span> ប្រូលីន = <span class="math-font">32%</span> សេរីន = <span class="math-font">40%</span> និង
            ត្រេអូនីន = <span class="math-font">13%</span> ។ គណនាប្រវែងសែន បើគេដឹងថា សែនកំណត់សំយោគ
            ម៉ូលេគុលប្រូតេអ៊ីននោះមាននុយក្លេអូទីត <span class="math-font">A = 420</span> ត្រូវគ្នានឹងអាស៊ីតអាមីណេ
            ទាំង 4 ខាងលើនេះ ។
          </div>
        </div>

        <div class="practice-card" style="border-left: 5px solid #991b1b;">
          <span class="prob-num" style="background: #991b1b;">២</span>
          <div>
            ក្នុងពេលសំយោគប្រូតេអ៊ីនមួយ គេឃើញថាអាស៊ីតអាមីណេដែលត្រូវគ្នានឹង
            កូដុងរបស់ ARNm មាន ដូចតទៅ : ត្រេអូនីន = ACU, អាឡានីន = GCU,
            សេរីន = AGC អ៊ីសូលឺស៊ីន = AUA ។ ម៉ូលេគុលប្រូតេអ៊ីននោះមាន
            អាស៊ីតអាមីណេ 4 ប្រភេទគឺសេរីន ស្មើ <span class="math-font">2</span> ដង អាឡានីន, ត្រេអូនីន ស្មើ <span class="math-font">4</span> ដង
            អាឡានីន និងអ៊ីសូលឺស៊ីន ស្មើ <span class="math-font">3</span> ដង អាឡានីន ។ គណនាប្រវែងសែនដែល
            កំណត់សំយោគ ម៉ូលេគុលប្រូតេអ៊ីននោះ បើក្នុងសែននោះមាននុយក្លេអូទីត
            ស៊ីតូស៊ីន <span class="math-font">C = 500</span> ។
          </div>
        </div>

        <div class="practice-card" style="border-left: 5px solid #991b1b;">
          <span class="prob-num" style="background: #991b1b;">៣</span>
          <div>
            មានរីបូសូម <span class="math-font">5</span> បានចូលរួមបកប្រែក្រមជាបន្តបន្ទាប់លើម៉ូលេគុល
            ARNm មួយ ។ រាល់ រីបូសូមនីមួយៗគឺបម្លាស់ទីលើម៉ូលេគុល ARNm
            តែ 1 ដងទេ ។ រីបូសូមនីមួយៗបម្លាស់ទីបន្តបន្ទាប់គ្នាលើ ARNm ដោយ
            ឃ្លាតពីគ្នាដម្ងាយ <span class="math-font">105 A°</span> ។ សរុបដំណាលការបម្លាស់ទីនៃរីបូសូមទាំង 5
            នោះ គឺអស់រយៈពេល <span class="math-font">57s</span> ហើយសំយោគប្រូតេអ៊ីនដែលសរុបអាស៊ីតអាមីណេ
            ទាំងអស់មាន <span class="math-font">1740</span> ។<br />
            ក. គណនាចំនួននុយក្លេអូទីតសរុបរបស់សែន ? បើសែននោះមាន
            នុយក្លេអូទីត <span class="math-font">A = 20%</span> តើនុយក្លេអូទីតផ្សេងៗទៀតស្មើប៉ុន្មាន ?<br />
            ខ. រកល្បឿនបម្លាស់ទីរីបូសូមលើម៉ូលេគុល ARNm ?
          </div>
        </div>

        <div class="practice-card" style="border-left: 5px solid #991b1b;">
          <span class="prob-num" style="background: #991b1b;">៤</span>
          <div>
            សែនមួយសំយោគ ARNm 3 លើក ហើយត្រូវការរីបូនុយក្លេអូទីតសេរីចំនួន
            <span class="math-font">2250</span> ។ នៅលើច្រវ៉ាក់ទី 1 របស់សែនដែលជាពុម្ពសម្រាប់កំណត់សំយោគ
            ម៉ូលេគុលប្រូតេអ៊ីនមួយមាននុយក្លេអូទីតប្រភេទ <span class="math-font">A = 59, T = 77, C = 100, G = 64</span> ។ ក្រោយពីសំយោគម៉ូលេគុលប្រូតេអ៊ីននោះរួច គេឃើញមានតែ
            អាស៊ីតអាមីណេ ៣ ប្រភេទ គឺអាឡានីន វ៉ាលីន និង គ្លុយតាមីន ដែលត្រូវគ្នា
            នឹងនុយក្លេអូទីត ក្នុងច្រវ៉ាក់ទី១ របស់សែនគេដឹងថាកូដុងរបស់ ARNm ដែល
            ត្រូវនឹងអាស៊ីតអាមីណេទាំងបីគឺ <span class="math-font">GCU = អាឡានីន, GUA = វ៉ាលីន, CAG = គ្លុយតាមីន</span> ។<br />
            ក. គណនាចំនួនអាស៊ីតអាមីណេប្រភេទនីមួយៗក្នុងម៉ូលេគុលប្រូតេអ៊ីនមួយនោះ ?<br />
            ខ. តើមាន ARNt ចូលក្នុងរីបូសូមប៉ុន្មានដង ដើម្បីចូលរួមបកប្រែក្រម ?
          </div>
        </div>

        <div class="practice-card" style="border-left: 5px solid #991b1b;">
          <span class="prob-num" style="background: #991b1b;">៥</span>
          <div>
            ម៉ូលេគុលប្រូតេអ៊ីនមួយមានចំនួនសម្ព័ន្ធប៉ិបទីត <span class="math-font">298</span> ។<br />
            ក. គណនាចំនួនអាស៊ីតអាមីណេក្នុងម៉ូលេគុលប្រូតេអ៊ីនដែលបានសំយោគរួចនោះ ?<br />
            ខ. គណនាចំនួនសម្ព័ន្ធគីមីរវាងអាស៊ីតផូស្វរិច និងស្ករដេអុកស៊ីរីបូនុយក្លេអ៊ិច
            ដែលភ្ជាប់ពីនុយក្លេអូទីតមួយទៅនុយក្លេអូទីត ?<br />
            គ. គណនាចំនួន ARNt ប្រភេទនីមួយៗ ដែលចូលរួមសំយោគប្រូតេអ៊ីនមួយនោះ ? បើគេដឹងថា :<br />
            <span class="math-font">ARNt 40%</span> ទៅកាន់ រីបូសូម 1 លើក, <span class="math-font">ARNt 30%</span> ទៅកាន់ រីបូសូម 2 លើក,
            <span class="math-font">ARNt 20%</span> ទៅកាន់រីបូសូម 3 លើក និង <span class="math-font">ARNt 10%</span> ទៅកាន់រីបូសូម 4 លើក ។
          </div>
        </div>

        <div class="practice-card" style="border-left: 5px solid #991b1b;">
          <span class="prob-num" style="background: #991b1b;">៦</span>
          <div>
            ម៉ូលេគុល ARNm ២ បានសំយោគចេញពីសែនមួយ ក្នុងពេលសំយោគប្រូតេអ៊ីន
            មានរីបូសូម មួយបម្លាស់ទីលើ ARNm ទាំង ២ ដែលឃ្លាតពីគ្នាជាចម្ងាយ <span class="math-font">៥</span>
            ណាណូម៉ែត្រ ដោយគ្មានត្រឡប់មកវិញ ម្តងទៀតឡើយ ។ រីបូសូមបម្លាស់ទីលើ ARNm ទាំង ២ អស់រយៈពេល <span class="math-font">២ នាទី ៣០ វិនាទី</span> ។ សែនដែលកំណត់សំយោគ ARNm ទាំង ២ ខាងលើមានចំនួននុយក្លេអូទីតសរុបចំនួន <span class="math-font">១៨០០</span> ។<br />
            ក. គណនាល្បឿនបម្លាស់ទីលើម៉ូលេគុល ARNm ទាំង ២ ?<br />
            ខ. គណនាចំនួនសម្ព័ន្ធអ៊ីដ្រូសែនសរុបសែននោះ បើគេដឹងថា <span class="math-font">A = 20%</span> នៃចំនួននុយក្លេអូទីតសរុប ។
          </div>
        </div>

        <div class="practice-card" style="border-left: 5px solid #991b1b;">
          <span class="prob-num" style="background: #991b1b;">៧</span>
          <div>
            សែនមួយមាននុយក្លេអូទីតប្រភេទ <span class="math-font">A = 350</span> ។ ពេលសែននោះសំយោគ ARNm
            3 លើក វាត្រូវការរីបូនុយក្លេអូទីតសេរី <span class="math-font">G = 900</span> និង <span class="math-font">C = 750</span> ។ រីបូសូមដែលបម្លាស់ទីលើម៉ូលេគុល ARNm ទាំង 3 នោះ ដើម្បីបកប្រែក្រមគឺប្រើរយៈពេលអស់ <span class="math-font">3 នាទី</span> និង <span class="math-font">4 វិនាទី</span> ។<br />
            ក. ចូររកចំនួននុយក្លេអូទីតប្រភេទនីមួយៗរបស់សែន ?<br />
            ខ. ចូររកល្បឿនបម្លាស់ទីរបស់រីបូសូមលើ ARNm បើគេដឹងថា ARNm ទាំង 3 សុទ្ធតែដូចៗគ្នា ហើយក្នុងពេលដែលរីបូសូមនោះឆ្លងកាត់ពី ARNm មួយទៅ ARNm មួយទៀត វាត្រូវចំណាយពេលអស់ <span class="math-font">2 វិនាទី</span> ។<br />
            គ. ចូររកចំនួនអាស៊ីតអាមីណេសរុបដែលត្រូវការក្នុងពេលសំយោគប្រូតេអ៊ីនចេញពី ARNm ទាំង 3 ខាងលើ ?
          </div>
        </div>

        <div class="practice-card" style="border-left: 5px solid #991b1b;">
          <span class="prob-num" style="background: #991b1b;">៨</span>
          <div>
            សែនមួយមានចំនួននុយក្លេអូទីតគ្រប់ប្រភេទ បើប្រៀបធៀបគឺលើសចំនួន
            អាស៊ីតអាមីណេរបស់ម៉ូលេគុលប្រូតេអ៊ីនដែលវាកំណត់សំយោគ <span class="math-font">1062</span> ។ ក្នុង
            ដំណាលការសំយោគប្រូតេអ៊ីននោះ គេឃើញ ជាមធ្យមក្នុងរយៈពេល <span class="math-font">0,2 វិនាទី</span> អាស៊ីតអាមីណេមួយត្រូវបានភ្ជាប់នឹងច្រវ៉ាក់ប៉ូលីប៉ិបទីត ។<br />
            ក. ចូររកចំនួននុយក្លេអូទីតសរុបរបស់សែន ។ បើសិនជាសែននោះមានសម្ព័ន្ធ
            អ៊ីដ្រូសែនសរុបទាំងអស់ <span class="math-font">1660</span> នោះតើចំនួននុយក្លេអូទីតនៃរាល់ប្រភេទ
            ផ្សេងៗទៀតមានប៉ុន្មាន ?<br />
            ខ. ចូររកប្រវែងម៉ូលេគុល ARNm ?<br />
            គ. ចូររករយៈពេលសំយោគរួច ប្រូតេអ៊ីនមួយ ម៉ូលេគុលខាងលើ ?
          </div>
        </div>

        <div class="practice-card" style="border-left: 5px solid #991b1b;">
          <span class="prob-num" style="background: #991b1b;">៩</span>
          <div>
            ចំពោះផ្កាសែន កំណត់លក្ខណៈពណ៌ខ្មៅ លុប សែនកំណត់លក្ខណៈពណ៌សអន់ ។
            សែនទាំង ពីរមានប្រវែងស្មើគ្នា ។ សែនមានសម្ព័ន្ធអ៊ីដ្រូសែន <span class="math-font">4680</span> និងមាន
            នុយក្លេអូទីតអាដេនីន <span class="math-font">20%</span> នៃចំនួននុយក្លេអូទីតទាំងអស់ ។ សែនមាន
            ផលដករវាងនុយក្លេអូទីតប្រភេទ <span class="math-font">G</span> និង <span class="math-font">T</span> ស្មើនឹង <span class="math-font">30%</span> នៃចំនួន
            នុយក្លេអូទីតទាំងអស់ ។<br />
            ក. រកចំនួននុយក្លេអូទីតប្រភេទនីមួយៗរបស់សែននីមួយៗ ?<br />
            ខ. តើគេត្រូវចិញ្ចឹមជ្រូកមេបាមានសេណូទីបយ៉ាងណា ដើម្បីអោយកូនជ្រូក
            មានរោមខ្មៅ និង រោម ស ស្ថិតក្នុងសមាមាត្រ <span class="math-font">3:1</span> ?<br />
            គ. តើគេត្រូវធ្វើដូចម្តេច ដើម្បីអោយដឹងថា ជ្រូករោមខ្មៅ ជាពូជសុទ្ធ ឬពូជមិនសុទ្ធ ?
          </div>
        </div>

        <div class="practice-card" style="border-left: 5px solid #991b1b;">
          <span class="prob-num" style="background: #991b1b;">១០</span>
          <div>
            ចំពោះប្រភេទស្រូវសែន A កំណត់លក្ខណៈទុំឆាប់ (លុប) សែន កំណត់លក្ខណៈ
            ទុំយឺត (អន់) ។ សែននីមួយៗមានប្រវែងស្មើគ្នាគឺ <span class="math-font">4080 A°</span> ។ សែន A មាន
            សម្ព័ន្ធអ៊ីដ្រូសែន <span class="math-font">3240</span> និងសែន a មានសម្ព័ន្ធអ៊ីដ្រូសែន <span class="math-font">3120</span> ។<br />
            ក. គណនាចំនួននុយក្លេអូទីតរាល់ប្រភេទនីមួយៗរបស់សែននីមួយៗ ?<br />
            ខ. បើស្រែមានស្រូវសុទ្ធតែស្រូវទុំឆាប់ តែដល់ពេលប្រមូលផល គាត់ទទួលបាន
            ស្រូវទុំឆាប់លាយ ជាមួយស្រូវទុំយឺត ។ ចូរពន្យល់បាតុភូតនេះ ហើយកំណត់
            សេណូទីបស្រូវទុំឆាប់ជាមេបា ?
          </div>
        </div>

        <div class="practice-card" style="border-left: 5px solid #991b1b;">
          <span class="prob-num" style="background: #991b1b;">១១</span>
          <div>
            ម៉ូលេគុល ARNt ចំនួន 3 ប្រភេទ បានចូលរួមសំយោគម៉ូលេគុល
            ប្រូតេអ៊ីនមួយ ហើយចំនួន អាស៊ីតអាមីណេដែលដឹកដោយ ARNt ទាំង 3 មាន
            ម៉ាស់ <span class="math-font">176.10³</span> ខ្នាតកាបូន ។ គេដឹងថាលទៀតថា ចំនួនអាស៊ីតអាមីណេដឹក
            ដោយ ARNt ដែលទៅកាន់រីបូសូម 1 លើក គឺស្មើចំនួនអាស៊ីតអាមីណេដឹក
            ដោយ ARNt ដែលទៅកាន់រីបូសូម 3 លើក ហើយលើស ចំនួនអាស៊ីតអាមីណេ
            ដឹកនាំដោយ ARNt ដែលទៅកាន់រីបូសូម 2 លើក ចំនួន <span class="math-font">20</span> ។<br />
            ក. គណនាចំនួន ARNt ប្រភេទនីមួយៗ ដែលចូលរួមសំយោគប្រូតេអ៊ីនមួយនេះ ?<br />
            ខ. គណនាប្រវែងសែនដែលកំណត់សំយោគម៉ូលេគុលប្រូតេអ៊ីននេះ ? បើគេដឹងថា អាស៊ីតអាមីណេនីមួយៗមានម៉ាស់ម៉ូលេគុលជាមធ្យម <span class="math-font">110</span> ខ្នាតកាបូន ។
          </div>
        </div>

        <div class="practice-card" style="border-left: 5px solid #991b1b;">
          <span class="prob-num" style="background: #991b1b;">១២</span>
          <div>
            សែនមួយមានប្រវែង <span class="math-font">512,04 nm</span> ។<br />
            ក. រកចំនួននុយក្លេអូទីតទាំងអស់ក្នុងសែននោះ ?<br />
            ខ. សែននេះបញ្ជាសំយោគប្រូតេអ៊ីន ។ តើម៉ូលេគុលប្រូតេអ៊ីននោះ មានអាស៊ីតអាមីណេចំនួនប៉ុន្មាន ?<br />
            គ. គេដឹងថារាល់ប្រភេទអាស៊ីតអាមីណេត្រូវបានដឹក នាំដោយ ARNt ដែលមានអង់ទីកូដុងដូចតទៅ : <span class="math-font">CAG = វ៉ាលីន, CCG = គ្លីស៊ីន, CGG = អាឡានីន, GUA = ស៊ីស្ដេអ៊ីន, UGA = ត្រេអូនីន, AAC = លឺស៊ីន</span> ។ ក្នុងម៉ូលេគុលប្រូតេអ៊ីនខាងលើមានប្រភេទអាស៊ីតអាមីណេ ប្រភេទ <span class="math-font">វ៉ាលីន = 13%, ស៊ីស្ដេអ៊ីន = 18%, គ្លីស៊ីន = 24%, ត្រេអូនីន = 15%, អាឡានីន = 22%, លឺស៊ីន = 8%</span> ។ គណនាចំនួននៃរាល់ប្រភេទនុយក្លេអូទីតលើច្រវ៉ាក់ម្ខាងៗរបស់ សែនខាងលើដែលជាពុម្ពនៃអាស៊ីតអាមីណេទាំង ៦ នោះ ?
          </div>
        </div>

        <div class="practice-card" style="border-left: 5px solid #991b1b;">
          <span class="prob-num" style="background: #991b1b;">១៣</span>
          <div>
            ម៉ូលេគុល ARNt ចំនួន <span class="math-font">325</span> បានចូលរួមក្នុងចលនាការសំយោគម៉ូលេគុល
            ប្រូតេអ៊ីនមួយ ។<br />
            ក. តើសែនដែលសំយោគប្រូតេអ៊ីនខាងលើមានប្រវែងប៉ុន្មានមីលីម៉ែត្រ ? បើគេដឹងថា <span class="math-font">1/5</span> នៃ ARNt ត្រូវបានដឹកអាស៊ីតអាមីណេចូលទៅក្នុងរីបូសូមចំនួន <span class="math-font">2</span> លើក ហើយ <span class="math-font">4/5</span> នៃ ARNt ត្រូវបានដឹកអាស៊ីតអាមីណេចូលទៅក្នុងរីបូសូមចំនួន <span class="math-font">3</span> លើក ហើយ ARNt ដឹកមេត្យូនីនមិនបាន រាប់ក្នុង ARNt <span class="math-font">325</span> ទេ ។<br />
            ខ. តើប្រូតេអ៊ីនមានម៉ាស់ម៉ូលេគុលប៉ុន្មាន ? បើអាស៊ីតអាមីណេនីមួយៗ មានម៉ាស់ម៉ូលេគុលជា មធ្យម <span class="math-font">110</span> ខ្នាតកាបូន ។
          </div>
        </div>

        <div class="practice-card" style="border-left: 5px solid #991b1b;">
          <span class="prob-num" style="background: #991b1b;">១៤</span>
          <div>
            ម៉ូលេគុលប្រូតេអ៊ីនមួយមានចំណងប៉ិបទីត <span class="math-font">267</span> កំណត់សំយោគដោយសារ
            សែនមួយ ដែលមាននុយក្លេអូទីតប្រភេទ <span class="math-font">A = 15%</span> នៃចំនួននុយក្លេអូទីតទាំងអស់របស់សែននោះ ។ ចូររក :<br />
            ក. ប្រវែងរបស់សែន ?<br />
            ខ. ចំនួននុយក្លេអូទីតនៃរាល់ប្រភេទរបស់សែន ?<br />
            គ. ចំនួនសម្ព័ន្ធអ៊ីដ្រូសែនរបស់សែន ?
          </div>
        </div>

        <div class="practice-card" style="border-left: 5px solid #991b1b;">
          <span class="prob-num" style="background: #991b1b;">១៥</span>
          <div>
            ដោយវិភាគសមាសភាពគីមីរបស់អង្កត់ ADN គេបានលទ្ធផលដូចតទៅ :<br />
            ច្រវ៉ាក់ទី១ : ចំនួននុយក្លេអូទីតអាដេនីន <span class="math-font">A = 300</span> និង កានីន <span class="math-font">G = 100</span><br />
            ច្រវ៉ាក់ទី២ : ចំនួននុយក្លេអូទីតអាដេនីន <span class="math-font">A = 500</span> និង កានីន <span class="math-font">G = 300</span><br />
            ក. កំណត់ប្រវែងម៉ូលេគុល ADN នោះជា <span class="math-font">A°</span> ?<br />
            ខ. ពេលធ្វើស្វ័យដំឡើងទ្វេ 3 លើក តើអង្កត់ ADN នេះត្រូវការនុយក្លេអូទីតសេរីប៉ុន្មាន ?<br />
            គ. តើអង្កត់ ADN នេះបានចម្លងក្រមទៅជាអាស៊ីតអាមីណេចំនួនប៉ុន្មាន ?
          </div>
        </div>
      </div>
      <a href="biology_home" class="back-btn">
        <i class="fas fa-arrow-left"></i> ត្រឡប់ក្រោយ
      </a>
    </div>

    <script src="{{ asset('assets/main.js') }}"></script>
    <script>
      StudyNest.checkAccess(3);
    </script>
    <script>
      if (typeof StudyNest !== 'undefined') {
        StudyNest.initBackground();
      }
    </script>
  </body>
</html>
