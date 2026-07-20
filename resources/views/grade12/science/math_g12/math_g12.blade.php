<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Grade 12 | StudyNest</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@300;400;600;700&family=Poppins:wght@300;400;600;700&family=Rajdhani:wght@600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <style>
        :root {
            /* Override accent for Math */
            --accent: #8b5cf6;
            --accent-glow: rgba(139, 92, 246, 0.35);
        }

        body {
            display: block;
            overflow-y: auto;
            padding: 40px 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        header {
            margin-bottom: 48px;
            text-align: center;
        }

        header h1 {
            font-size: 32px;
            color: white;
            margin-bottom: 8px;
        }

        header p {
            color: var(--text-muted);
            font-size: 16px;
        }

        .back-btn-fixed {
            position: fixed;
            top: 24px;
            left: 24px;
            z-index: 100;
        }

        .back-btn-fixed a {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            backdrop-filter: blur(12px);
            color: white;
            padding: 10px 18px;
            border-radius: 14px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            font-weight: 600;
            transition: 0.3s;
        }

        .back-btn-fixed a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(-4px);
        }

        .lessons-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
            gap: 25px;
            margin-top: 40px;
        }

        .lesson-card {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            backdrop-filter: blur(20px);
            border-radius: 28px;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .lesson-card:hover {
            transform: translateY(-12px);
            border-color: var(--accent);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4), 0 0 30px var(--accent-glow);
            background: rgba(255, 255, 255, 0.12);
        }

        .lesson-info {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 25px;
        }

        .icon-box {
            width: 70px;
            height: 70px;
            min-width: 70px;
            background: var(--input-bg);
            border: 1px solid var(--input-border);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: var(--accent);
            transition: 0.3s;
        }

        .lesson-card:hover .icon-box {
            background: var(--accent);
            color: #0f172a;
            box-shadow: 0 0 20px var(--accent-glow);
        }

        .lesson-text h3 {
            color: white;
            margin-bottom: 8px;
            font-size: 18px;
            line-height: 1.4;
        }

        .lesson-text p {
            font-size: 13.5px;
            color: var(--text-muted);
            line-height: 1.6;
        }

        .start-btn {
            background: var(--accent);
            color: #0f172a;
            padding: 14px 28px;
            border-radius: 16px;
            text-decoration: none;
            font-weight: 800;
            font-size: 15px;
            text-align: center;
            transition: 0.3s;
            box-shadow: 0 8px 15px var(--accent-glow);
        }

        .start-btn:hover {
            transform: scale(1.05);
            background: white;
            box-shadow: 0 6px 20px rgba(255, 255, 255, 0.2);
        }

        @media (max-width: 768px) {
            .lesson-card {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }
            .start-btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <!-- Animated Background -->
    <div class="drops" id="drops"></div>
    <div class="particles" id="particles"></div>

    <div class="back-btn-fixed anim">
        <a href="/grade12/science">
            <i class="fas fa-arrow-left"></i> ត្រឡប់ក្រោយ
        </a>
    </div>

    <div class="container">
        <header class="anim">
            <h1 class="anim-1">គណិតវិទ្យា ថ្នាក់ទី១២</h1>
            <p class="anim-2">គោលដៅនិទ្ទេស A - Advanced Calculus & Algebra</p>
        </header>

        <div class="lessons-grid">
            <div class="lesson-card anim-3">
                <div class="lesson-info">
                    <div class="icon-box"><i class="fas fa-infinity"></i></div>
                    <div class="lesson-text">
                        <h3>មេរៀនទី ១៖ ចំនួនកុំផ្លិច (Complex Numbers)</h3>
                        <p>ទម្រង់ពីជគណិត ទម្រង់ត្រីកោណមាត្រ និងស្វ័យគុណទី n។</p>
                    </div>
                </div>
                <a href="lesson/chapter_1/complex_numbers" class="start-btn">ចូលរៀន</a>
            </div>

            <div class="lesson-card anim-4">
                <div class="lesson-info">
                    <div class="icon-box"><i class="fas fa-arrows-to-dot"></i></div>
                    <div class="lesson-text">
                        <h3>មេរៀនទី ២៖ លីមីតនៃអនុគមន៍ (Limits)</h3>
                        <p>និយមន័យ ប្រមាណវិធីលីមីត រាងមិនកំណត់ និងលីមីតនៅអនន្ត។</p>
                    </div>
                </div>
                <a href="lesson/chapter_2/limits" class="start-btn">ចូលរៀន</a>
            </div>

            <div class="lesson-card anim-5">
                <div class="lesson-info">
                    <div class="icon-box"><i class="fas fa-superscript"></i></div>
                    <div class="lesson-text">
                        <h3>មេរៀនទី ៣៖ ដេរីវេនៃអនុគមន៍ (Derivatives)</h3>
                        <p>និយមន័យដេរីវេ រូបមន្តដេរីវេ និងការប្រើប្រាស់។</p>
                    </div>
                </div>
                <a href="#" aria-disabled="true" onclick="return false;" class="start-btn">មិនទាន់មាន</a>
            </div>

            <div class="lesson-card anim-6">
                <div class="lesson-info">
                    <div class="icon-box"><i class="fas fa-chart-line"></i></div>
                    <div class="lesson-text">
                        <h3>មេរៀនទី ៤៖ ប្លង់សិក្សាអនុគមន៍ (Function Analysis)</h3>
                        <p>ដែនកំណត់ អាសីមតូត ទិសដៅអថេរភាព និងការសង់ក្រាហ្វ។</p>
                    </div>
                </div>
                <a href="#" aria-disabled="true" onclick="return false;" class="start-btn">មិនទាន់មាន</a>
            </div>
        </div>

    </div>

    <script src="{{ asset('assets/main.js') }}"></script>
    <script>
      StudyNest.authGuard();
    </script>
    <script>
        // Initialize background
        StudyNest.initBackground();
    </script>
</body>
</html>
