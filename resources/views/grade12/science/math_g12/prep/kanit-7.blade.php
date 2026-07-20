<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>វិញ្ញាសា គណិតវិទ្យា ០៧ | StudyNest</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@300;400;600;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- MathJax -->
    <script>
        window.MathJax = {
            tex: {
                inlineMath: [['$', '$'], ['\\(', '\\)']],
                displayMath: [['$$', '$$'], ['\\[', '\\]']],
                processEscapes: true
            },
            options: {
                skipHtmlTags: ['script', 'noscript', 'style', 'textarea', 'pre']
            }
        };
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/3.2.2/es5/tex-chtml.min.js" async></script>

    <style>
        :root {
            --primary: #4f46e5;
            --accent: #74ebd5;
            --bg-dark: #0f172a;
            --card-bg: rgba(255, 255, 255, 0.95);
            --text-dark: #1e293b;
            --text-muted: #64748b;
            --orange: #f97316;
            --blue: #2563eb;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Kantumruy Pro", sans-serif;
            background: radial-gradient(circle at top right, #1e1b4b, #0f172a);
            color: var(--text-dark);
            line-height: 1.8;
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            max-width: 210mm;
            min-height: 297mm;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 8px;
            padding: 20mm;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            position: relative;
            overflow: hidden;
            box-sizing: border-box;
        }

        .container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 8px;
            background: linear-gradient(90deg, var(--primary), var(--accent));
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 30px;
        }

        .header h1 {
            font-size: 2rem;
            color: var(--bg-dark);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .header p {
            color: var(--text-muted);
            font-size: 1.1rem;
        }

        .exam-meta {
            display: flex;
            justify-content: space-between;
            background: #f8fafc;
            padding: 15px 25px;
            border-radius: 12px;
            margin-bottom: 40px;
            font-weight: 600;
            color: var(--primary);
            border: 1px solid #e2e8f0;
        }

        .question-section {
            margin-bottom: 40px;
            animation: fadeIn 0.5s ease-out both;
            border-bottom: 1px dashed #e2e8f0;
            padding-bottom: 30px;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            display: inline-block;
            background: var(--bg-dark);
            color: white;
            padding: 4px 16px;
            border-radius: 8px;
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .question-content {
            padding-left: 10px;
        }

        .sub-question {
            margin-top: 10px;
            padding-left: 20px;
        }

        .formula-box {
            background: #f1f5f9;
            padding: 15px;
            border-radius: 12px;
            margin: 15px 0;
            border-left: 4px solid var(--primary);
            font-size: 1.1rem;
            overflow-x: auto;
        }

        .toggle-btn {
            background: rgba(79, 70, 229, 0.1);
            color: var(--primary);
            border: 1px solid var(--primary);
            padding: 8px 16px;
            border-radius: 8px;
            cursor: pointer;
            font-family: inherit;
            font-weight: 600;
            margin-top: 15px;
            margin-left: 10px;
            transition: all 0.2s;
            font-size: 0.95rem;
        }
        .toggle-btn:hover {
            background: var(--primary);
            color: white;
        }

        .solution-content {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            padding: 20px;
            margin-top: 15px;
            border-left: 4px solid #10b981;
        }
        
        .solution-title {
            color: #059669;
            font-size: 1.1rem;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 700;
        }

        .solution-body {
            font-size: 1.05rem;
            line-height: 2;
        }

        .solution-body p {
            margin-bottom: 8px;
        }

        .nav-footer {
            margin-top: 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
        }

        .back-btn {
            text-decoration: none;
            color: var(--primary);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s;
        }

        .back-btn:hover {
            transform: translateX(-5px);
        }

        @media print {
            body {
                background: white !important;
                color: black !important;
                padding: 0;
            }
            * {
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }
            .container {
                box-shadow: none;
                max-width: 100%;
                padding: 10mm;
                border: none;
            }
            .container::before {
                display: none;
            }
            .nav-footer, .print-btn, .toggle-btn {
                display: none !important;
            }
            .solution-content {
                display: block !important;
                border: 1px solid #cbd5e1 !important;
                background: #f8fafc !important;
                page-break-inside: avoid;
                break-inside: avoid;
            }
            .question-section {
                border-bottom: 1px solid #ccc !important;
                page-break-inside: avoid;
                break-inside: avoid;
            }
        }

        @media (max-width: 640px) {
            .container {
                padding: 25px;
            }
            .exam-meta {
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <header class="header">
            <h1>វិញ្ញាសា គណិតវិទ្យា (វិទ្យាសាស្ត្រពិត) ០៧</h1>
            <p>សម្រាប់ការត្រៀមប្រឡងសញ្ញាបត្រមធ្យមសិក្សាទុតិយភូមិ</p>
        </header>

        <div class="exam-meta">
            <span><i class="far fa-clock"></i> រយៈពេល៖ ១៥០ នាទី</span>
            <span><i class="fas fa-star"></i> ពិន្ទុសរុប៖ ១២៥ ពិន្ទុ</span>
        </div>

        <!-- Section I -->
        <section class="question-section" style="animation-delay: 0.1s;">
            <h2>លំហាត់ I</h2>
            <div class="question-content">
                <p>គេឱ្យចំនួនកុំផ្លិច $a = 1 + \frac{\sqrt{3}+1}{2}i$ និង $b = \frac{\sqrt{3}-1}{2}i$ ។</p>
                <div class="sub-question">
                    <p>ក. គណនា $z = a + b ; w = a - b$ និង $\frac{z}{w}$ ជាទម្រង់ពីជគណិត។</p>
                    <p>ខ. សរសេរ $z ; w$ និង $\frac{z}{w}$ ជាទម្រង់ត្រីកោណមាត្រ។</p>
                    <p>គ. រកតម្លៃប្រាកដនៃ $\cos\frac{\pi}{12}$ និង $\sin\frac{\pi}{12}$ ។</p>
                </div>
            </div>

            <button class="toggle-btn" onclick="toggleSolution(this)"><i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ</button>
            <div class="solution-content" style="display: none;">
                <h3 class="solution-title"><i class="fas fa-check-circle"></i> ដំណោះស្រាយ</h3>
                <div class="solution-body">
                    <p><strong>ក. គណនា $z, w$ និង $\frac{z}{w}$ ជាទម្រង់ពីជគណិត៖</strong></p>
                    <p>$z = a + b = 1 + \frac{\sqrt{3}+1}{2}i + \frac{\sqrt{3}-1}{2}i = 1 + \frac{2\sqrt{3}}{2}i = 1 + i\sqrt{3}$</p>
                    <p>$w = a - b = 1 + \frac{\sqrt{3}+1}{2}i - \frac{\sqrt{3}-1}{2}i = 1 + \frac{2}{2}i = 1 + i$</p>
                    <p>$\frac{z}{w} = \frac{1+i\sqrt{3}}{1+i} = \frac{(1+i\sqrt{3})(1-i)}{2} = \frac{1-i+i\sqrt{3}+\sqrt{3}}{2} = \frac{1+\sqrt{3}}{2} + i\frac{\sqrt{3}-1}{2}$</p>
                    <div class="formula-box">
                        ដូចនេះ $z = 1 + i\sqrt{3}, w = 1 + i$ និង $\frac{z}{w} = \frac{\sqrt{3}+1}{2} + i\frac{\sqrt{3}-1}{2}$
                    </div>

                    <p><strong>ខ. សរសេរជាទម្រង់ត្រីកោណមាត្រ៖</strong></p>
                    <p>$z = 1 + i\sqrt{3} = 2\left(\frac{1}{2} + i\frac{\sqrt{3}}{2}\right) = 2\left(\cos\frac{\pi}{3} + i\sin\frac{\pi}{3}\right)$</p>
                    <p>$w = 1 + i = \sqrt{2}\left(\frac{\sqrt{2}}{2} + i\frac{\sqrt{2}}{2}\right) = \sqrt{2}\left(\cos\frac{\pi}{4} + i\sin\frac{\pi}{4}\right)$</p>
                    <p>$\frac{z}{w} = \frac{2}{\sqrt{2}}\left[\cos\left(\frac{\pi}{3}-\frac{\pi}{4}\right) + i\sin\left(\frac{\pi}{3}-\frac{\pi}{4}\right)\right] = \sqrt{2}\left(\cos\frac{\pi}{12} + i\sin\frac{\pi}{12}\right)$</p>
                    <div class="formula-box">
                        ដូចនេះ $z = 2\left(\cos\frac{\pi}{3} + i\sin\frac{\pi}{3}\right), w = \sqrt{2}\left(\cos\frac{\pi}{4} + i\sin\frac{\pi}{4}\right)$ និង $\frac{z}{w} = \sqrt{2}\left(\cos\frac{\pi}{12} + i\sin\frac{\pi}{12}\right)$
                    </div>

                    <p><strong>គ. រកតម្លៃប្រាកដនៃ $\cos\frac{\pi}{12}$ និង $\sin\frac{\pi}{12}$៖</strong></p>
                    <p>តាមសម្រាយខាងលើ យើងមានទម្រង់ទាំងពីរនៃ $\frac{z}{w}$ ៖</p>
                    <p>$\sqrt{2}\cos\frac{\pi}{12} = \frac{\sqrt{3}+1}{2} \Rightarrow \cos\frac{\pi}{12} = \frac{\sqrt{6}+\sqrt{2}}{4}$</p>
                    <p>$\sqrt{2}\sin\frac{\pi}{12} = \frac{\sqrt{3}-1}{2} \Rightarrow \sin\frac{\pi}{12} = \frac{\sqrt{6}-\sqrt{2}}{4}$</p>
                </div>
            </div>
        </section>

        <!-- Section II -->
        <section class="question-section" style="animation-delay: 0.2s;">
            <h2>លំហាត់ II</h2>
            <div class="question-content">
                <p>គណនាលីមីតខាងក្រោម៖</p>
                <div class="formula-box">
                    <p>ក. $\lim_{x \to 0} \left(\frac{1+x}{1-x}\right)^{\frac{1}{x}}$</p>
                    <p>ខ. $\lim_{x \to +\infty} \frac{3^x + 4^x}{2^x + 4^x}$</p>
                    <p>គ. $\lim_{x \to \frac{\pi}{2}} \frac{1 - \sin x}{\sqrt{2} - \sqrt{2 - \cos^2 x}}$</p>
                </div>
            </div>

            <button class="toggle-btn" onclick="toggleSolution(this)"><i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ</button>
            <div class="solution-content" style="display: none;">
                <h3 class="solution-title"><i class="fas fa-check-circle"></i> ដំណោះស្រាយ</h3>
                <div class="solution-body">
                    <p><strong>ក. $\lim_{x \to 0} \left(\frac{1+x}{1-x}\right)^{\frac{1}{x}}$</strong> (រាងមិនកំណត់ $1^\infty$)</p>
                    <p>$= \lim_{x \to 0} \left(1 + \frac{1+x}{1-x} - 1\right)^{\frac{1}{x}} = \lim_{x \to 0} \left(1 + \frac{2x}{1-x}\right)^{\frac{1}{x}}$</p>
                    <p>$= \lim_{x \to 0} \left[\left(1 + \frac{2x}{1-x}\right)^{\frac{1-x}{2x}}\right]^{\frac{2x}{1-x} \cdot \frac{1}{x}} = \lim_{x \to 0} e^{\frac{2}{1-x}} = e^2$</p>
                    
                    <p><strong>ខ. $\lim_{x \to +\infty} \frac{3^x + 4^x}{2^x + 4^x}$</strong></p>
                    <p>$= \lim_{x \to +\infty} \frac{4^x\left( (3/4)^x + 1 \right)}{4^x\left( (2/4)^x + 1 \right)} = \frac{0 + 1}{0 + 1} = 1$</p>

                    <p><strong>គ. $\lim_{x \to \frac{\pi}{2}} \frac{1 - \sin x}{\sqrt{2} - \sqrt{2 - \cos^2 x}}$</strong> (រាងមិនកំណត់ $0/0$)</p>
                    <p>$= \lim_{x \to \frac{\pi}{2}} \frac{(1 - \sin x)(\sqrt{2} + \sqrt{2 - \cos^2 x})}{2 - (2 - \cos^2 x)}$</p>
                    <p>$= \lim_{x \to \frac{\pi}{2}} \frac{(1 - \sin x)(\sqrt{2} + \sqrt{2 - \cos^2 x})}{\cos^2 x}$</p>
                    <p>$= \lim_{x \to \frac{\pi}{2}} \frac{(1 - \sin x)(\sqrt{2} + \sqrt{2 - \cos^2 x})}{1 - \sin^2 x}$</p>
                    <p>$= \lim_{x \to \frac{\pi}{2}} \frac{(1 - \sin x)(\sqrt{2} + \sqrt{2 - \cos^2 x})}{(1 - \sin x)(1 + \sin x)} = \lim_{x \to \frac{\pi}{2}} \frac{\sqrt{2} + \sqrt{2 - \cos^2 x}}{1 + \sin x}$</p>
                    <p>$= \frac{\sqrt{2} + \sqrt{2 - 0}}{1 + 1} = \frac{2\sqrt{2}}{2} = \sqrt{2}$</p>
                </div>
            </div>
        </section>

        <!-- Section III -->
        <section class="question-section" style="animation-delay: 0.3s;">
            <h2>លំហាត់ III</h2>
            <div class="question-content">
                <p>ក្នុងប្រអប់មួយមានប៊ិចខៀវ ៣ ដើម ក្រហម ៤ ដើម និងខ្មៅ ៥ ដើម។ គេចាប់យកប៊ិច ៤ ដើមដោយចៃដន្យ។ រកប្រូបាបនៃព្រឹត្តិការណ៍៖</p>
                <div class="sub-question">
                    <p>$A$: ចាប់បានប៊ិចខ្មៅទាំង ៤ ដើម។</p>
                    <p>$B$: ចាប់បានប៊ិចទាំង ៤ ដើមមានពណ៌ខុសៗគ្នា។</p>
                    <p>$C$: ចាប់បានប៊ិចពណ៌ខៀវនិងក្រហម។</p>
                </div>
            </div>

            <button class="toggle-btn" onclick="toggleSolution(this)"><i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ</button>
            <div class="solution-content" style="display: none;">
                <h3 class="solution-title"><i class="fas fa-check-circle"></i> ដំណោះស្រាយ</h3>
                <div class="solution-body">
                    <p>សរុបប៊ិចមាន $3 + 4 + 5 = 12$ ដើម។ ចាប់យកម្តង ៤ ដើម។</p>
                    <p>ចំនួនករណីអាច $n(S) = C(12, 4) = \frac{12 \times 11 \times 10 \times 9}{24} = 495$</p>

                    <p><strong>$A$: ចាប់បានប៊ិចខ្មៅទាំង ៤ ដើម</strong></p>
                    <p>$n(A) = C(5, 4) = 5$</p>
                    <p>$P(A) = \frac{n(A)}{n(S)} = \frac{5}{495} = \frac{1}{99}$</p>

                    <p><strong>$B$: ចាប់បានប៊ិចទាំង ៤ ដើមមានពណ៌ខុសៗគ្នា</strong></p>
                    <p>ដោយយើងមានប៊ិចតែ ៣ ពណ៌ ដូច្នេះមិនអាចចាប់បានប៊ិច ៤ ដែលមានពណ៌ខុសគ្នាទាំងអស់ទេ។</p>
                    <p>$P(B) = 0$</p>

                    <p><strong>$C$: ចាប់បានប៊ិចពណ៌ខៀវនិងក្រហម</strong></p>
                    <p>មានន័យថាចាប់បានតែប៊ិចខៀវនិងក្រហម ហើយត្រូវមានទាំងពីរពណ៌ (គ្មានពណ៌ខ្មៅ)។</p>
                    <p>ចំនួនប៊ិចខៀវនិងក្រហមសរុបមាន $3 + 4 = 7$ ដើម។</p>
                    <p>ចាប់បាន ៤ ដើមពីប៊ិច ៧ ដើមនេះគឺមាន $C(7, 4) = 35$ ករណី។</p>
                    <p>ប៉ុន្តែត្រូវដកចេញករណីដែលបានតែមួយពណ៌គឺ៖ បានក្រហមទាំង ៤ ដើម $C(4, 4) = 1$ ករណី (ករណីខៀវទាំង ៤ មិនអាចកើតមានទេ ព្រោះខៀវមានតែ ៣)។</p>
                    <p>នាំឱ្យ $n(C) = C(7, 4) - C(4, 4) = 35 - 1 = 34$</p>
                    <p>$P(C) = \frac{34}{495}$</p>
                </div>
            </div>
        </section>

        <!-- Section IV -->
        <section class="question-section" style="animation-delay: 0.4s;">
            <h2>លំហាត់ IV</h2>
            <div class="question-content">
                <p><strong>១.</strong> គេឱ្យ $I(t) = \int_0^t \frac{3}{4x^2+5x+1} dx$ ដែល $t > 0$ ។</p>
                <div class="sub-question">
                    <p>ក. កំណត់ $a$ និង $b$ ដើម្បីឱ្យ $\frac{3}{4x^2+5x+1} = \frac{a}{x+1} + \frac{b}{4x+1}$ ។</p>
                    <p>ខ. គណនា $I(t)$ ជាអនុគមន៍នៃ $t$ ។ រួចទាញរក $\lim_{t \to +\infty} I(t)$ ។</p>
                </div>
                <p><strong>២.</strong> ដោះស្រាយសមីការឌីផេរ៉ង់ស្យែល $(E): y'' - 2y' + 5y = 0$ បើគេដឹងថា $y(0) = 1$ និង $y'(0) = 5$ ។</p>
            </div>

            <button class="toggle-btn" onclick="toggleSolution(this)"><i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ</button>
            <div class="solution-content" style="display: none;">
                <h3 class="solution-title"><i class="fas fa-check-circle"></i> ដំណោះស្រាយ</h3>
                <div class="solution-body">
                    <p><strong>១. កំណត់ $a$ និង $b$៖</strong></p>
                    <p>$\frac{a}{x+1} + \frac{b}{4x+1} = \frac{a(4x+1)+b(x+1)}{(x+1)(4x+1)} = \frac{(4a+b)x + (a+b)}{4x^2+5x+1}$</p>
                    <p>ផ្ទឹមប្រភាគ យើងបានប្រព័ន្ធ៖</p>
                    <p>$\begin{cases} 4a+b = 0 \\ a+b = 3 \end{cases} \Rightarrow \begin{cases} b = -4a \\ a-4a = 3 \end{cases} \Rightarrow -3a = 3 \Rightarrow a = -1$</p>
                    <p>នាំឱ្យ $b = -4(-1) = 4$ ។ ដូចនេះ $a = -1, b = 4$</p>
                    
                    <p><strong>ខ. គណនា $I(t)$៖</strong></p>
                    <p>$I(t) = \int_0^t \left( \frac{-1}{x+1} + \frac{4}{4x+1} \right) dx = \left[ -\ln|x+1| + \ln|4x+1| \right]_0^t$</p>
                    <p>$I(t) = \left[ \ln\left|\frac{4x+1}{x+1}\right| \right]_0^t = \ln\left(\frac{4t+1}{t+1}\right) - \ln(1) = \ln\left(\frac{4t+1}{t+1}\right)$</p>
                    <p>$\lim_{t \to +\infty} I(t) = \lim_{t \to +\infty} \ln\left(\frac{4t+1}{t+1}\right) = \ln 4 = 2\ln 2$</p>

                    <p><strong>២. ដោះស្រាយសមីការឌីផេរ៉ង់ស្យែល៖</strong></p>
                    <p>$(E): y'' - 2y' + 5y = 0$ សមីការសម្គាល់ $r^2 - 2r + 5 = 0$</p>
                    <p>$\Delta' = 1 - 5 = -4 = (2i)^2 \Rightarrow r = 1 \pm 2i$</p>
                    <p>ចម្លើយទូទៅគឺ $y = e^x(A \cos 2x + B \sin 2x)$</p>
                    <p>ដោយ $y(0) = 1 \Rightarrow A = 1$</p>
                    <p>ដេរីវេ $y' = e^x(A \cos 2x + B \sin 2x) + e^x(-2A \sin 2x + 2B \cos 2x)$</p>
                    <p>$y'(0) = A + 2B = 5 \Rightarrow 1 + 2B = 5 \Rightarrow B = 2$</p>
                    <div class="formula-box">ដូចនេះ ចម្លើយគឺ $y = e^x(\cos 2x + 2\sin 2x)$</div>
                </div>
            </div>
        </section>

        <!-- Section V -->
        <section class="question-section" style="animation-delay: 0.5s;">
            <h2>លំហាត់ V</h2>
            <div class="question-content">
                <p>ក្នុងតម្រុយអរតូណរម៉ាល់មានទិសដៅវិជ្ជមាន $(O, \vec{i}, \vec{j}, \vec{k})$ គេឱ្យចំណុច $A(0, -1, 6) ; B(2, 0, 4) ; C(8, 1, 0)$ និង $D(0, -4, 0)$ ។</p>
                <div class="sub-question">
                    <p>ក. គណនា $\vec{BA} \times \vec{BC}$ រួចទាញថាបីចំណុច $A, B, C$ មិនស្ថិតលើបន្ទាត់តែមួយ។</p>
                    <p>ខ. ផ្ទៀងផ្ទាត់ថា $\vec{DB} = \vec{BA} \times \vec{BC}$ ។ សរសេរសមីការប្លង់ $(ABC)$ ។ ទាញរកក្រឡាផ្ទៃត្រីកោណ $ABC$ ។</p>
                    <p>គ. យក $E$ ជាចំណុចឆ្លុះនៃ $D$ ធៀបនឹងប្លង់ $(ABC)$ ។ គណនាកូអរដោនេចំណុច $E$ ។</p>
                    <p>ឃ. រកសមីការប៉ារ៉ាម៉ែត្របន្ទាត់ $(AC)$ ។</p>
                    <p>ង. ស្រាយបំភ្លឺថាគ្រប់ចំណុច $F$ នៅលើ $(AC)$ គេបាន $DEF$ ជាត្រីកោណសមបាតកំពូល $F$ ។</p>
                </div>
            </div>

            <button class="toggle-btn" onclick="toggleSolution(this)"><i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ</button>
            <div class="solution-content" style="display: none;">
                <h3 class="solution-title"><i class="fas fa-check-circle"></i> ដំណោះស្រាយ</h3>
                <div class="solution-body">
                    <p><strong>ក. គណនា $\vec{BA} \times \vec{BC}$៖</strong></p>
                    <p>$\vec{BA} = (0-2, -1-0, 6-4) = (-2, -1, 2)$</p>
                    <p>$\vec{BC} = (8-2, 1-0, 0-4) = (6, 1, -4)$</p>
                    <p>$\vec{BA} \times \vec{BC} = \begin{vmatrix} \vec{i} & \vec{j} & \vec{k} \\ -2 & -1 & 2 \\ 6 & 1 & -4 \end{vmatrix} = (4-2)\vec{i} - (8-12)\vec{j} + (-2+6)\vec{k} = 2\vec{i} + 4\vec{j} + 4\vec{k}$</p>
                    <p>ដោយ $\vec{BA} \times \vec{BC} = (2, 4, 4) \neq \vec{0}$ នាំឱ្យ $A, B, C$ មិនស្ថិតនៅលើបន្ទាត់តែមួយ។</p>

                    <p><strong>ខ. ផ្ទៀងផ្ទាត់ និងសរសេរសមីការប្លង់៖</strong></p>
                    <p>$\vec{DB} = (2-0, 0-(-4), 4-0) = (2, 4, 4)$</p>
                    <p>យើងឃើញថា $\vec{DB} = \vec{BA} \times \vec{BC}$ ពិតប្រាកដមែន។</p>
                    <p>ប្លង់ $(ABC)$ មានវ៉ិចទ័រណរម៉ាល់ $\vec{n} = \vec{DB} = (2, 4, 4)$ ឬអាចយក $\vec{n'} = (1, 2, 2)$ និងកាត់តាម $B(2, 0, 4)$ ៖</p>
                    <p>$1(x-2) + 2(y-0) + 2(z-4) = 0 \Rightarrow x + 2y + 2z - 10 = 0$</p>
                    <p>ក្រឡាផ្ទៃ $S_{ABC} = \frac{1}{2}|\vec{BA} \times \vec{BC}| = \frac{1}{2}\sqrt{2^2 + 4^2 + 4^2} = \frac{1}{2}\sqrt{36} = \frac{6}{2} = 3$ ឯកតាផ្ទៃ។</p>

                    <p><strong>គ. គណនាកូអរដោនេចំណុច $E$៖</strong></p>
                    <p>ដោយ $\vec{DB} = \vec{BA} \times \vec{BC}$ នាំឱ្យវ៉ិចទ័រ $\vec{DB}$ កែងនឹងប្លង់ $(ABC)$ ។</p>
                    <p>ហើយចំណុច $B$ ក៏ស្ថិតនៅក្នុងប្លង់ $(ABC)$ ស្រាប់ នាំឱ្យ $B$ ជាចំណុចចំណោលកែងនៃ $D$ លើប្លង់ $(ABC)$ ។</p>
                    <p>ដោយ $E$ ឆ្លុះ $D$ ធៀបប្លង់ នោះ $B$ ជាចំណុចកណ្តាលនៃអង្កត់ $[DE]$ ។</p>
                    <p>$x_B = \frac{x_D + x_E}{2} \Rightarrow x_E = 2x_B - x_D = 2(2) - 0 = 4$</p>
                    <p>$y_E = 2y_B - y_D = 2(0) - (-4) = 4$</p>
                    <p>$z_E = 2z_B - z_D = 2(4) - 0 = 8$</p>
                    <p>ដូចនេះ $E(4, 4, 8)$ ។</p>

                    <p><strong>ឃ. សមីការប៉ារ៉ាម៉ែត្របន្ទាត់ $(AC)$៖</strong></p>
                    <p>វ៉ិចទ័រប្រាប់ទិស $\vec{AC} = (8-0, 1-(-1), 0-6) = (8, 2, -6)$ ឬយក $(4, 1, -3)$ ។ កាត់តាម $A(0, -1, 6)$ ៖</p>
                    <p>$(AC): \begin{cases} x = 4t \\ y = -1 + t \\ z = 6 - 3t \end{cases} \quad (t \in \mathbb{R})$</p>

                    <p><strong>ង. ស្រាយបំភ្លឺ $DEF$ ជាត្រីកោណសមបាត៖</strong></p>
                    <p>ដោយ $D$ និង $E$ ជាចំណុចឆ្លុះគ្នាធៀបនឹងប្លង់ $(ABC)$ នោះប្លង់ $(ABC)$ ជាប្លង់មេដ្យាទ័រនៃអង្កត់ $[DE]$ ។</p>
                    <p>គ្រប់ចំណុចដែលស្ថិតនៅលើប្លង់មេដ្យាទ័រ តែងមានចម្ងាយស្មើគ្នាពីចុងសងខាងនៃអង្កត់។</p>
                    <p>ដោយ $F$ ស្ថិតនៅលើបន្ទាត់ $(AC)$ ដែលបន្ទាត់នេះស្ថិតនៅក្នុងប្លង់ $(ABC)$ នាំឱ្យ $F$ ក៏ស្ថិតក្នុងប្លង់ $(ABC)$ ដែរ។</p>
                    <p>ដូចនេះ $FD = FE$ មានន័យថា $DEF$ ជាត្រីកោណសមបាតកំពូល $F$ ជានិច្ច។</p>
                </div>
            </div>
        </section>

        <!-- Section VI -->
        <section class="question-section" style="animation-delay: 0.6s;">
            <h2>លំហាត់ VI</h2>
            <div class="question-content">
                <p><strong>ផ្នែក A:</strong> គេឱ្យអនុគមន៍ $g(x) = -x^2 + 1 - \ln x$ ចំពោះគ្រប់ $x > 0$ ។</p>
                <div class="sub-question">
                    <p>ក. សិក្សាទិសដៅអថេរភាពនៃ $g$ ។</p>
                    <p>ខ. គណនា $g(1)$ រួចទាញរកសញ្ញានៃ $g(x)$ ។</p>
                </div>
                
                <p style="margin-top: 20px;"><strong>ផ្នែក B:</strong> គេឱ្យអនុគមន៍ $f(x) = -\frac{1}{2}x + 1 + \frac{\ln x}{2x}$ មានក្រាប $(C)$ ។</p>
                <div class="sub-question">
                    <p>ក. គណនា $\lim_{x \to 0^+} f(x)$ និង $\lim_{x \to +\infty} f(x)$ ។ គូសតារាងអថេរភាព $f$ ។</p>
                    <p>ខ. ស្រាយបញ្ជាក់ $(d): y = -\frac{1}{2}x + 1$ ជាអាស៊ីមតូតទ្រេតនៃក្រាប $(C)$ ខាង $+\infty$ ។ សិក្សាទីតាំង $(C)$ និង $(d)$ ។</p>
                    <p>គ. សង់ $(C)$ និង $(d)$ ។</p>
                    <p>ឃ. គណនាផ្ទៃក្រឡាខណ្ឌដោយក្រាប $(C)$ និង $(d)$ នៅចន្លោះ $[1, 2]$ ។</p>
                </div>
            </div>

            <button class="toggle-btn" onclick="toggleSolution(this)"><i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ</button>
            <div class="solution-content" style="display: none;">
                <h3 class="solution-title"><i class="fas fa-check-circle"></i> ដំណោះស្រាយ</h3>
                <div class="solution-body">
                    <p><strong>ផ្នែក A:</strong></p>
                    <p>ក. $g'(x) = -2x - \frac{1}{x} = \frac{-2x^2-1}{x} < 0$ ចំពោះគ្រប់ $x > 0$ ។ ដូចនេះ $g$ ជាអនុគមន៍ចុះជានិច្ច។</p>
                    <p>ខ. $g(1) = -1 + 1 - \ln 1 = 0$ ។ ដោយ $g$ ចុះជានិច្ច នាំឱ្យ៖ $0 < x < 1 \Rightarrow g(x) > 0$ និង $x > 1 \Rightarrow g(x) < 0$ ។</p>

                    <p><strong>ផ្នែក B:</strong></p>
                    <p>ក. $\lim_{x \to 0^+} f(x) = \lim_{x \to 0^+} \left(-\frac{1}{2}x + 1 + \frac{\ln x}{2x}\right) = 0 + 1 + \frac{-\infty}{0^+} = -\infty$</p>
                    <p>$\lim_{x \to +\infty} f(x) = \lim_{x \to +\infty} \left(-\frac{1}{2}x + 1 + \frac{\ln x}{2x}\right) = -\infty + 1 + 0 = -\infty$</p>
                    <p>$f'(x) = -\frac{1}{2} + \frac{\frac{1}{x}(2x) - 2\ln x}{(2x)^2} = -\frac{1}{2} + \frac{2 - 2\ln x}{4x^2} = \frac{-x^2 + 1 - \ln x}{2x^2} = \frac{g(x)}{2x^2}$</p>
                    <p>សញ្ញា $f'$ ដូច $g$៖ កើនលើ $(0, 1)$, ចុះលើ $(1, +\infty)$ និងអតិបរមា $f(1) = \frac{1}{2}$ ។</p>

                    <p>ខ. $\lim_{x \to +\infty} [f(x) - y_d] = \lim_{x \to +\infty} \frac{\ln x}{2x} = 0$ នាំឱ្យ $(d)$ ជាអាស៊ីមតូតទ្រេត។</p>
                    <p>ទីតាំង៖ សញ្ញានៃ $f(x) - y_d = \frac{\ln x}{2x}$ ដូចនឹង $\ln x$ ៖ $0 < x < 1 \Rightarrow (C)$ នៅក្រោម $(d)$, $x > 1 \Rightarrow (C)$ នៅលើ $(d)$ ។</p>

                    <div style="text-align: center; margin: 30px 0;">
                        <svg viewBox="-50 -100 450 300" width="100%" style="max-width: 500px; background: white; font-family: serif;">
                            <defs>
                                <style>
                                    .grid-line { stroke: #ccc; stroke-width: 0.5; stroke-dasharray: 2, 2; }
                                    .axis-line { stroke: black; stroke-width: 1; fill: black; }
                                    .graph-path { stroke: black; stroke-width: 1.5; fill: none; }
                                    .asymptote { stroke: #ef4444; stroke-width: 1.2; stroke-dasharray: 4,4; }
                                    .graph-label { font-size: 12px; }
                                </style>
                            </defs>
                            <line x1="0" y1="-100" x2="0" y2="200" class="axis-line" />
                            <line x1="-20" y1="100" x2="400" y2="100" class="axis-line" />
                            
                            <text x="390" y="95" class="graph-label">x</text>
                            <text x="-15" y="-90" class="graph-label">y</text>
                            <text x="-15" y="115" class="graph-label">0</text>
                            
                            <!-- Origin (0, 100). Scale: 50px = 1 unit -->
                            <!-- Line y = -0.5x + 1. x=0 -> y=1 (50), x=2 -> y=0 (100), x=4 -> y=-1 (150) -->
                            <line x1="0" y1="50" x2="300" y2="200" class="asymptote" />
                            <text x="310" y="190" class="graph-label" style="fill: #ef4444;">(d)</text>
                            
                            <!-- Curve f(x) 
                                 x=1 (50px), y=0.5 (75px) 
                                 x=2 (100px), y=~0.17 (91px)
                                 x=4 (200px), y=-0.82 (141px)
                                 x=0.5, y=-0.04 (102px)
                            -->
                            <path class="graph-path" d="M 5,200 C 10,150 25,80 50,75 S 150,110 300,185" />
                            <text x="310" y="170" class="graph-label">(C)</text>
                        </svg>
                        <p style="font-size: 0.9rem; color: var(--text-muted);">ក្រាប $(C)$ និងអាស៊ីមតូត $(d)$</p>
                    </div>

                    <p>ឃ. ផ្ទៃក្រឡា $S = \int_1^2 [f(x) - y_d] dx = \int_1^2 \frac{\ln x}{2x} dx$ (ព្រោះ $f(x) \geq y_d$ លើ $[1, 2]$)</p>
                    <p>តាង $u = \ln x \Rightarrow du = \frac{1}{x}dx$ ។ $S = \frac{1}{2} \int_0^{\ln 2} u \, du = \frac{1}{2} \left[\frac{u^2}{2}\right]_0^{\ln 2} = \frac{(\ln 2)^2}{4}$ ឯកតាផ្ទៃ។</p>
                </div>
            </div>
        </section>

        <!-- Section VII -->
        <section class="question-section" style="animation-delay: 0.7s; border-bottom: none;">
            <h2>លំហាត់ VII</h2>
            <div class="question-content">
                <p>គេឱ្យអ៊ីពែបូល $\frac{y^2}{25} - \frac{x^2}{9} = 1$ ។ គណនាកូអរដោនេផ្ចិត កំពូល កំណុំ សមីការអាស៊ីមតូត រួចសង់អ៊ីពែបូលនេះ។</p>
            </div>

            <button class="toggle-btn" onclick="toggleSolution(this)"><i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ</button>
            <div class="solution-content" style="display: none;">
                <h3 class="solution-title"><i class="fas fa-check-circle"></i> ដំណោះស្រាយ</h3>
                <div class="solution-body">
                    <p>ទម្រង់ស្តង់ដា $\frac{y^2}{a^2} - \frac{x^2}{b^2} = 1$ នាំឱ្យអ័ក្សទទឹងឈរ (ស្របអ័ក្ស $y'Oy$)។</p>
                    <p>$a^2 = 25 \Rightarrow a = 5$ និង $b^2 = 9 \Rightarrow b = 3$</p>
                    <p>$c^2 = a^2 + b^2 = 25 + 9 = 34 \Rightarrow c = \sqrt{34}$</p>
                    <ul>
                        <li><strong>ផ្ចិត៖</strong> $I(0, 0)$</li>
                        <li><strong>កំពូល៖</strong> $V_1(0, -5)$ និង $V_2(0, 5)$</li>
                        <li><strong>កំណុំ៖</strong> $F_1(0, -\sqrt{34})$ និង $F_2(0, \sqrt{34})$</li>
                        <li><strong>អាស៊ីមតូត៖</strong> $y = \pm\frac{a}{b}x = \pm\frac{5}{3}x$</li>
                    </ul>
                    
                    <div style="text-align: center; margin: 30px 0;">
                        <svg viewBox="-150 -150 300 300" width="100%" style="max-width: 400px; background: white;">
                            <defs>
                                <style>
                                    .grid { stroke: #e2e8f0; stroke-width: 1; }
                                    .axis { stroke: black; stroke-width: 1.5; }
                                    .curve { stroke: #2563eb; stroke-width: 2; fill: none; }
                                    .asymptote { stroke: #ef4444; stroke-width: 1.5; stroke-dasharray: 4; }
                                </style>
                            </defs>
                            <line x1="-150" y1="0" x2="150" y2="0" class="axis" />
                            <line x1="0" y1="-150" x2="0" y2="150" class="axis" />
                            
                            <!-- Asymptotes y = 5/3x and y = -5/3x (scale: 1 unit = 10px -> a=50, b=30) -->
                            <!-- For x=60 (6 units), y=100 (10 units) -->
                            <line x1="-90" y1="150" x2="90" y2="-150" class="asymptote" />
                            <line x1="-90" y1="-150" x2="90" y2="150" class="asymptote" />
                            
                            <!-- Top branch (v2 at y=-50 in SVG coords) -->
                            <path d="M 0,-50 Q 80,-55 90,-150" class="curve" />
                            <path d="M 0,-50 Q -80,-55 -90,-150" class="curve" />
                            <!-- Bottom branch (v1 at y=50 in SVG coords) -->
                            <path d="M 0,50 Q 80,55 90,150" class="curve" />
                            <path d="M 0,50 Q -80,55 -90,150" class="curve" />
                            
                            <circle cx="0" cy="-50" r="3" fill="black" />
                            <circle cx="0" cy="50" r="3" fill="black" />
                        </svg>
                        <p style="font-size: 0.9rem; color: var(--text-muted);">ក្រាបអ៊ីពែបូល $\frac{y^2}{25} - \frac{x^2}{9} = 1$</p>
                    </div>
                </div>
            </div>
        </section>

        <footer class="nav-footer">
            <a href="../../../..//" class="back-btn">
                <i class="fas fa-arrow-left"></i> ត្រឡប់ទៅទំព័រដើម
            </a>
        </footer>
    </div>

    <script>
        function toggleSolution(btn) {
            const content = btn.nextElementSibling;
            if (content.style.display === 'none' || content.style.display === '') {
                content.style.display = 'block';
                btn.innerHTML = '<i class="fas fa-eye-slash"></i> លាក់ដំណោះស្រាយ';
            } else {
                content.style.display = 'none';
                btn.innerHTML = '<i class="fas fa-eye"></i> បង្ហាញដំណោះស្រាយ';
            }
        }
    </script>
<script src="{{ asset('assets/main.js') }}"></script>
<script>StudyNest.authGuard(); StudyNest.checkAccess(6);</script>
</body>
</html>