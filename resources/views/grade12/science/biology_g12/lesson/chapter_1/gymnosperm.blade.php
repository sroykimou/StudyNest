<!doctype html>
<html lang="km">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>មេរៀនទី១ - ស៊ីមណូស្ពែម</title>

    <link
      href="https://fonts.googleapis.com/css2?family=Siemreap&display=swap"
      rel="stylesheet"
    />

    <style>
      :root {
        --primary-color: #0c4a6e;
        --accent-color: #0d9488;
        --bg-color: #f1f5f9;
      }

      body {
        margin: 0;
        font-family: "Siemreap", "Khmer OS Siemreap", Arial, sans-serif;
        background: var(--bg-color);
        color: #1e293b;
        line-height: 1.6;
      }

      header {
        background: linear-gradient(135deg, #083344, var(--primary-color));
        color: white;
        text-align: center;
        padding: 50px 20px;
        border-bottom: 5px solid var(--accent-color);
      }

      header h1 {
        margin: 0;
        font-size: 2.2rem;
      }
      header h2 {
        margin: 10px 0 0;
        font-weight: normal;
        opacity: 0.9;
      }

      .container {
        max-width: 850px;
        margin: -30px auto 60px;
        padding: 0 20px;
      }

      .card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        margin-bottom: 20px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
      }

      .question {
        font-weight: bold;
        color: var(--primary-color);
        margin-bottom: 15px;
        font-size: 1.1rem;
        display: flex;
        align-items: center;
        gap: 10px;
        border-bottom: 1px solid #e2e8f0;
        padding-bottom: 10px;
      }

      .answer-text {
        padding-left: 10px;
        color: #334155;
      }

      ul {
        padding-left: 25px;
        margin: 10px 0;
      }

      li {
        margin-bottom: 8px;
      }

      table {
        width: 100%;
        border-collapse: collapse;
        margin: 15px 0;
      }

      th,
      td {
        border: 1px solid #cbd5e1;
        padding: 12px;
        text-align: left;
      }

      th {
        background: #f8fafc;
        color: var(--primary-color);
      }

      .badge {
        background: #e0f2fe;
        color: var(--primary-color);
        padding: 2px 10px;
        border-radius: 4px;
        font-size: 0.9rem;
      }

      footer {
        text-align: center;
        padding: 40px;
        color: #64748b;
        font-size: 0.9rem;
      }

      .back-link {
        display: inline-block;
        margin-bottom: 20px;
        color: white;
        text-decoration: none;
        font-size: 0.9rem;
      }

      @media (max-width: 600px) {
        header {
          padding: 30px 15px;
        }
        h1 {
          font-size: 1.6rem;
        }
      }
    </style>
      <link rel="stylesheet" href="{{ asset('assets/professional.css') }}">
    <!-- Main JS & Auth Guard -->
    <script src="{{ asset('assets/main.js') }}"></script>
    <script>
      StudyNest.authGuard();
    </script>
  </head>

  <body>
    <header>
      <a href="../../biology_g12" class="back-link"
        ><i class="fas fa-arrow-left"></i> ត្រឡប់ក្រោយ</a
      >
      <h1>ជំពូកទី ១</h1>
      <h2>ស៊ីមណូស្ពែម (Gymnosperms)</h2>
    </header>

    <div class="container">
      <div class="card">
        <div class="question">
          ១. តើរុក្ខជាតិមានគ្រាប់មានប៉ុន្មានក្រុម? អ្វីខ្លះ?
        </div>
        <div class="answer-text">
          រុក្ខជាតិមានគ្រាប់មានពីរក្រុមគឺ ៖
          <ul>
            <li>ស៊ីមណូស្ពែម (Gymnosperm)</li>
            <li>អង់ស្យូស្ពែម (Angiosperm)</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="question">២. តើស៊ីមណូស្ពែមជាអ្វី?</div>
        <div class="answer-text">
          ស៊ីមណូស្ពែម ជារុក្ខជាតិមានគ្រាប់ តែគ្មានសំបកការពារពីខាងក្រៅទេ។
          វាមានគ្រាប់ននល។
        </div>
      </div>

      <div class="card">
        <div class="question">៣. តើស៊ីមណូស្ពែមមានប៉ុន្មានក្រុម? អ្វីខ្លះ</div>
        <div class="answer-text">
          ស៊ីមណូស្ពែមមាន ៤ ក្រុម ៖ ប្រង់ (Cycads) កូនីភែ (Conifers) គីងកូ
          (Ginkgoes) និង ស៊ីណេតូភីត (Cynetophytes)។
        </div>
      </div>

      <div class="card">
        <div class="question">៤. ចូរពណ៍នាស៊ីមណូស្ពែមទាំង៤ក្រុម។</div>
        <div class="answer-text">
          ស៊ីមណូស្ពែមមាន ៤ ក្រុម ៖
          <ul>
            <li>
              <strong>ប្រង់ (Cycads):</strong>
              ច្រើនដុះនៅតំបន់ត្រូពិច និងតំបន់ក្បែរត្រូពិច។
              វាមានស្លឹកដែលប្រមូលផ្តុំនៅខាងចុងដូច ស្លឹកត្នោត។
            </li>
            <li>
              <strong>កូនីភែ (Conifers):</strong> មានស្លឹករាងដូចម្ជុល
              និងមានច្រើនក្រុមជាងគេ។​
              វាមានស្លឹដែលប្រមូលផ្តុំនៅចុងដើមដូចស្លឹកត្នោត។ ​​​​​​​​​​​​​​​​​
              កូនីភែមានស្លឹករាងដូចម្ជុលនិងមានច្រើនក្រុមជាងគេ។​
              គ្រាប់វាជាអាហាររបស់សត្វបក្សីមួយចំនួន និងសត្វកកេរ។
            </li>

            <li>
              <strong>គីងកូ (Ginkgoes):</strong> មាននៅប្រទេសជប៉ុន ចិន និងកូរ៉េ។
              គេចូលចិត្តដាំវានៅតាមដងផ្លូវ ឬក្នងសួនច្បារ ឬក្នុងទីក្រុង​
              ព្រោះវាធន់នឹងបរិយាកាសកខ្វក់ ដោយសារ វាជួយសម្អាតខ្យល់ឱ្យបរិសុទ្ធ។
            </li>
            <li>
              <strong>ស៊ីណេតូភីត (Gnetophytes):</strong
              >ជារុក្ខជាតិដែលដុះនៅតំបន់វាលខ្សាច់មានអាកាសធាតុក្ដៅ
              និងដុះនៅតំបន់ត្រូពិចមានភ្លៀង។ សុីណេតូភីតមួយចំនួនជាដើមឈើ
              ខ្លះជាវល៍ិ្ល​​
              ខ្លះជាចុល្លព្រឹក្សសម្រាប់ដាំលំអ។សុីណេតូភីតមួយចំនួនជាដើមឈើ
              ខ្លះជាវល៍ិ្ល​​ ខ្លះជាចុល្លព្រឹក្សសម្រាប់ដាំលំអ។
              ស៊ីណេតូភីតអាចរស់បានយូររហូតដល់ពាន់ឆ្នាំ។
            </li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="question">
          ៥. តើដើមរបស់ស៊ីមណូស្ពែមមានលក្ខណៈដូចម្តេចខ្លះ?
        </div>
        <div class="answer-text">
          ដើមរបស់ស៊ីមណូស្ពែមមានលក្ខណៈដូចជា ៖
          <ul>
            <li>ជាដើមឈើធំៗឬតូចៗ មិនមែនជារុក្ខជាតិស្មៅទេ ។</li>
            <li>ដើមទោល ត្រង់ និងបញ្ចប់ដោយកូនស្លឹកឬកន្សោមមែកនៅកំពូលដើម ។</li>
            <li>មានទិដ្ឋភាពដូចដើមដូង (ប្រង់) ឬបែកមែកច្រើន (ស្រល់) ។</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="question">
          ៦. តើរុក្ខជាតិសុីមណូស្ពែមច្រើនដុះនៅកន្លែងណាខ្លះ?
        </div>
        <div class="answer-text">
          រុក្ខជាតិសុីមណូស្ពែមច្រើនដុះនៅកន្លែងដូចជា ៖
          <ul>
            <li>
              រុក្ខជាតិសុីមណូស្ពែមច្រើនដុះនៅតំបន់ត្រូពិត តំបន់ត្រជាក់លើភ្នំ ។
            </li>
            <li>
              តំបន់វាលខ្សាច់ មានអាកាសធាតុក្ដៅ និងតំបន់ព្រៃត្រូពិតមានភ្លៀង ។
            </li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="question">៧. តើស្លឹកសុីមណូស្ពែមមានរាងដូចម្ដេចខ្លះ?</div>
        <div class="answer-text">
          ស្លឹកសុីមណូស្ពែមមានរាងដូចជា ៖
          <ul>
            <li>ស្លឹករបស់សុីមណូស្ពែមមានរាង​ ដូចម្ជុល ជាស្រកាឬឬាងជាផ្លិត​ ។</li>
            <li>
              ស្លឹកខ្លះមានទ្រនុងស្លឹក និងសភាពដូចស្លឹកដូង(ប្រង់) ខ្លះមានរាងផ្លិត
              ដែលមានទ្រនុងស្លឹក រាងកង្ហារ(គីងកូ) ខ្លះមានរាងម្ជុល
              ដែលមានទ្រនុងស្លឹកតែមួយដោយស្លឹកផ្តុំនៅលើចុងមែកខ្ចី (ស្រល់) ។
              ស្លឹកខ្លះរាងស្រកា តម្រៀបគ្របដណ្ដប់ផ្ទៃមែកទាំងអស់។
            </li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="question">
          ៨. តើសរីរាង្គបន្តពូជរបស់ស៊ីមណូស្ពែមមានលក្ខណៈដូចម្តេច?
        </div>
        <div class="answer-text">
          សរីរាង្គបន្តពូជរបស់ស៊ីមណូស្ពែមមានលក្ខណៈដូចជា ៖
          <ul>
            <li>
              សរីរាង្គបន្តពូជរបស់ស៊ីមណូស្ពែមភាគច្រើនជាកោន ដែលគ្របដណ្ដប់ដោយស្រកា
              តែខ្លះក៏គ្មាន កោនដែរ។
            </li>
            <li>
              កោនញី និងកោនឈ្មោល ត្រូវបានផលិតដោយរុក្ខជាតិមួយដើម
              ឬដោយរុក្ខជាតិពីរដើម ផ្សេងគ្នា។
            </li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="question">
          ៩. តើគ្រាប់លំអងរបស់ស៊ីមណូស្ពែមផ្ទុកអ្វី? តើវាត្រូវបានផលិតឡើងនៅឯណា?
        </div>
        <div class="answer-text">
          <ul>
            <li>
              គ្រាប់លំអងរបស់ស៊ីមណូស្ពែមផ្ទុកកោសិកាបន្តពូជ និងកោសិកាលូតលាស់។ ។
            </li>
            <li>គ្រាប់លំអងត្រូវបានផលិតឡើងនៅក្នុងមីក្រូស្ប៉រ៉ង់។</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="question">
          ១០. តើកោនជាអ្វី? ក្នុងការបន្តពូជរបស់ស៊ីមណូស្ពែម តើកោនមាននាទីអ្វី?
        </div>
        <div class="answer-text">
          <ul>
            <li>កោនជាសរីរាង្គបន្តពូជរបស់ស៊ីមណូស្ពែម។</li>
            <li>
              នៅក្នុងការបន្តពូជរបស់ស៊ីមណូស្ពែម កោនមាននាទីផលិតកាម៉ែតញី
              និងកាម៉ែតឈ្មោល។ ឯ កោនញី ជាកន្លែងបង្កកំណើតរវាងកាម៉ែតញី
              និងកាម៉ែតឈ្មោលហើយលូតលាស់ទៅជាអំប្រ៊ីយ៉ុងដែលជាផ្នែកមួយនៃគ្រាប់។
            </li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="question">
          ១១.តើលក្ខណៈស្លឹករាងដូចម្ជុលរបស់កូនីភែ(ស្រល់)មានសារៈសំខាន់ដូចម្តេចចំពោះរុក្ខជាតិប្រភេទនេះ?
        </div>
        <div class="answer-text">
          លក្ខណៈរាងម្ជុលរបស់ស្លឹកកូនីភែ អាចបង្ការការបាត់បង់ទឹក
          និងជួយឱ្យរុក្ខជាតិនេះបន្សំជីវិត ទៅនឹងអាកាសធាតុស្ងួត។
        </div>
      </div>

      <div class="card">
        <div class="question">
          ១២.ហេតុអ្វីបានជាស្លឹករបស់កូនីភែមានពណ៌បៃតងពេញ១ឆ្នាំ?
        </div>
        <div class="answer-text">
          បានជាស្លឹករបស់កូនីភែមានពណ៌បៃតងពេញ១ឆ្នាំ ព្រោះនៅពេលស្លឹកជ្រុះ
          វាត្រូវបានជំនួស ដោយស្លឹកថ្មីផ្សេងទៀតភ្លាម។
        </div>
      </div>

      <div class="card">
        <div class="question">១៣. ចូរពណ៌នាអំពីសារៈប្រយោជន៍របស់ស្រល់។</div>
        <div class="answer-text">
          សារៈប្រយោជន៍របស់ស្រល់ឮមាន ៖
          <ul>
            <li>ធ្វើជាសំណង់</li>
            <li>ធ្វើជាគ្រឿងសង្ហារឹម</li>
            <li>ចម្រាញ់ធ្វើប្រេង សម្រាប់លាបផ្ទះ</li>
            <li>គ្រាប់របស់វាជាអាហារសម្រាប់សត្វកកេរ និងបក្សីមួយចំនួន។</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="question">
          ១៤.តាមរយៈខ្នាត់បណ្តោយរបស់កោន តើកោននីមួយៗរបស់ស្រល់មានទម្រង់ដូចម្តេច?
        </div>
        <div class="answer-text">
          កោនស្រល់បង្កឡើងដោយអ័ក្សមួយដែលភ្ជាប់ដោយស្រកាតូចឭជាច្រើន។ ចំពោះកោនញី នៅ
          លើផ្ទៃស្រកានីមួយៗមានផ្ទុកអូវុលយ៉ាងតិចមួយហៅថាមេហ្កាស្ប៉រ៉ង់។
          រីឯកោនឈ្មោលវិញ នៅក្រោមសកានីមួយៗមានថង់ពីរគឺ មីក្រូស្ប៉រ៉ង់ដែលមាននាទី
          ផលិតគ្រាប់លំអង។
        </div>
      </div>

      <div class="card">
        <div class="question">
          ១៥. តើគេសម្គាល់រុក្ខជាតិម៉ូណូកូទីលេដូនដោយសារអ្វីខ្លះ?ចូររៀបរាប់ឈ្មោះ
          រុក្ខជាតិម៉ូណូកូទីលេដូនអោយបាន ៥ ។
        </div>
        <div class="answer-text">
          គេសម្គាល់រុក្ខជាតិម៉ូណូកូទីលេដូនដោយសារ​ ៖
          <ul>
            <li>ឬសជាឬសស្ញែ</li>
            <li>ដើមមានបាច់សរសៃនាំស្ថិតនៅរាយប៉ាយ</li>
            <li>ស្លឹកវែងមានទ្រនុងស្រប</li>
            <li>ផ្កាមានបីស្រទាប់ឬពហុគុណនៃបី</li>
            <li>គ្រាប់មានកូទីលេដូន​១</li>
          </ul>
          ឈ្មោះរុក្ខជាតិម៉ូណូកូទីលេដូន ៥ ឈ្មោះ ៖
          <ul>
            <li>ដូង</li>
            <li>ពោត</li>
            <li>ត្នោត</li>
            <li>ស្រូវ</li>
            <li>ស្រូវសាលី។ល។</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="question">១៦. តើពោតរុក្ខជាតិម៉ូណូកូទីលេដូន រឺ ឌីកូទីលេដូន? ពីព្រោះអ្វី?</div>
        <div class="answer-text">
          ពោតរុក្ខជាតិម៉ូណូកូទីលេដូនពីព្រោះ ៖
          <ul>
            <li>ឬសជាឬសស្ញែ</li>
            <li>ដើមមានបាច់សរសៃនាំស្ថិតនៅរាយប៉ាយ</li>
            <li>ស្លឹកវែងមានទ្រនុងស្រប</li>
            <li>ផ្កាមានបីស្រទាប់ឬពហុគុណនៃបី</li>
            <li>គ្រាប់មានកូទីលេដូន​១</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="question">១៧. ប្រៀបធៀបកោនញី និងកោនឈ្មោលរបស់ស្រល់</div>
        <div class="answer-text">
          <strong>លក្ខណៈដូចគ្នា៖</strong> គ្របដណ្តប់ដោយស្រកា
          និងមានជាតិស្អិតការពារគ្រាប់លំអង ។
          <table>
            <thead>
              <tr>
                <th>លក្ខណៈខុសគ្នា</th>
                <th>កោនញី</th>
                <th>កោនឈ្មោល</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>ទំហំ</td>
                <td>មានទំហំធំ</td>
                <td>មានទំហំតូច</td>
              </tr>
              <tr>
                <td>ការផលិត</td>
                <td>ផលិតបានអូវុល (យ៉ាងតិច១)</td>
                <td>ផលិតបានគ្រាប់លំអងច្រើន</td>
              </tr>
              <tr>
                <td>វត្តមានលើដើម</td>
                <td>នៅលើដើមរហូតគ្រាប់ជ្រុះ</td>
                <td>ជ្រុះក្រោយពេលជ្រុះលំអង</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    <footer>
      ចេះគឺជាប់
    </footer>
  </body>
</html>
