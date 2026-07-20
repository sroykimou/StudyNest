<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | StudyNest</title>
    <meta name="description" content="ប្រវត្តិរូបសិស្ស StudyNest — មើលវឌ្ឍនភាពសិក្សារបស់អ្នក">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@300;400;600;700&family=Poppins:wght@300;400;600;700&family=Rajdhani:wght@600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <style>
        .profile-card {
            width: 100%;
            max-width: 450px;
            overflow: hidden;
            padding: 0; /* Override standard card padding for header */
        }

        .profile-header {
            position: relative;
            height: 250px;
        }

        #bigAvatar {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .header-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, transparent 0%, rgba(15, 23, 42, 0.9) 100%);
        }

        .back-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            backdrop-filter: blur(8px);
            z-index: 10;
            transition: 0.3s;
            cursor: pointer;
        }

        .back-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(-4px);
        }

        .profile-info-main {
            position: absolute;
            bottom: 24px;
            left: 30px;
            z-index: 10;
        }

        .profile-info-main h2 {
            margin: 0;
            font-size: 26px;
            font-weight: 700;
            color: white;
        }

        .badge {
            display: inline-block;
            padding: 4px 14px;
            background: var(--primary);
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            margin-top: 8px;
            letter-spacing: 0.5px;
        }

        .info-body {
            padding: 30px;
        }

        .info-row {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 24px;
        }

        .info-icon {
            width: 48px;
            height: 48px;
            background: var(--input-bg);
            border: 1px solid var(--input-border);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--accent);
            font-size: 18px;
        }

        .info-content label {
            display: block;
            font-size: 11px;
            color: var(--text-muted);
            text-transform: uppercase;
            margin-bottom: 4px;
            font-weight: 600;
        }

        .info-content div {
            font-size: 15px;
            font-weight: 600;
            color: var(--text-primary);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-top: 12px;
        }

        .stat-item {
            background: rgba(255, 255, 255, 0.04);
            padding: 18px;
            border-radius: 18px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: transform 0.3s;
        }
        .stat-item:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.06);
        }

        .stat-value {
            font-size: 22px;
            font-weight: 700;
            color: var(--accent);
            display: block;
            margin-bottom: 4px;
        }

        .stat-label {
            font-size: 11px;
            color: var(--text-muted);
            text-transform: uppercase;
            font-weight: 600;
        }

        .camera-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            background: var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #0f172a;
            cursor: pointer;
            z-index: 10;
            border: none;
            transition: 0.3s;
            box-shadow: 0 4px 12px var(--accent-glow);
        }

        .camera-btn:hover {
            transform: scale(1.1) rotate(10deg);
            box-shadow: 0 6px 16px var(--accent-glow);
        }

        .logout-btn-full {
            width: 100%;
            margin-top: 32px;
            padding: 16px;
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.2);
            border-radius: 15px;
            color: #ef4444;
            font-family: inherit;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .logout-btn-full:hover {
            background: rgba(239, 68, 68, 0.2);
            border-color: #ef4444;
        }
    </style>
</head>
<body>

    <!-- Animated Background -->
    <div class="drops" id="drops"></div>
    <div class="particles" id="particles"></div>

    <main class="card profile-card anim">
        <div class="profile-header anim-1">
            <div onclick="goBack()" class="back-btn">
                <i class="fas fa-arrow-left"></i>
            </div>
            
            <label for="fileInput" class="camera-btn">
                <i class="fas fa-camera"></i>
            </label>
            <input type="file" id="fileInput" hidden accept="image/*" />

            <img id="bigAvatar" alt="Profile avatar" />
            <div class="header-overlay"></div>

            <div class="profile-info-main">
                <h2 id="pName">Username</h2>
                <span class="badge" id="pLevel">Full Free Plan</span>
            </div>
        </div>

        <div class="info-body">
            <div class="info-row anim-2">
                <div class="info-icon"><i class="fas fa-user"></i></div>
                <div class="info-content">
                    <label>ឈ្មោះអ្នកប្រើប្រាស់</label>
                    <div id="uHandle">@username</div>
                </div>
            </div>

            <div class="info-row anim-2">
                <div class="info-icon"><i class="fas fa-id-badge"></i></div>
                <div class="info-content">
                    <label>លេខសម្គាល់សិស្ស (Student ID)</label>
                    <div id="uStudentId">00000</div>
                </div>
            </div>

            <div class="info-row anim-3">
                <div class="info-icon"><i class="fas fa-graduation-cap"></i></div>
                <div class="info-content">
                    <label>កម្រិតវប្បធម៌</label>
                    <div id="uEducation">សិស្សថ្នាក់ទី ១២</div>
                </div>
            </div>

            <div class="info-row anim-3">
                <div class="info-icon"><i class="fas fa-envelope"></i></div>
                <div class="info-content">
                    <label>អ៊ីមែល (Email)</label>
                    <div id="uEmail">example@gmail.com</div>
                </div>
            </div>

            <div class="info-row anim-3">
                <div class="info-icon"><i class="fas fa-phone"></i></div>
                <div class="info-content">
                    <label>លេខទូរស័ព្ទ (Phone Number)</label>
                    <div id="uPhone">012345678</div>
                </div>
            </div>

            <div class="stats-grid anim-4">
                <div class="stat-item">
                    <span class="stat-value" id="sLessons">0</span>
                    <span class="stat-label">មេរៀនចប់</span>
                </div>
                <div class="stat-item">
                    <span class="stat-value" id="sProgress">0%</span>
                    <span class="stat-label">វឌ្ឍនភាព</span>
                </div>
            </div>

            <button onclick="logout()" class="logout-btn-full anim-5">
                <i class="fas fa-sign-out-alt"></i> ចាកចេញពីគណនី
            </button>
        </div>
    </main>

    <script src="{{ asset('assets/main.js') }}"></script>
    <script>
      StudyNest.authGuard();
    </script>
    <script>
        // Initialize background
        StudyNest.initBackground();

        const user = StudyNest.getUser() || "{{ $user ? $user->username : '' }}";
        if (user && !StudyNest.getUser()) {
            localStorage.setItem("currentUserName", user);
        }

        if (!user) {
            window.location.href = "/login";
        }
        
        const userLevel = StudyNest.getLevel();

        function goBack() {
            const userDataStr = localStorage.getItem("user_" + user);
            let branch = "science";
            if (userDataStr) {
                try {
                    const userData = JSON.parse(userDataStr);
                    branch = userData.branch || "science";
                } catch(e) {}
            }
            window.location.href = `${branch}/${branch}_home.php`;
        }

        window.onload = function () {
            document.getElementById("pName").textContent = user;
            document.getElementById("uHandle").textContent = "@" + user.toLowerCase().replace(/\s/g, "");
            
            // Fetch detailed email & phone
            const userDataStr = localStorage.getItem("user_" + user);
            let emailVal = "មិនទាន់កំណត់ (Not Set)";
            let phoneVal = "មិនទាន់កំណត់ (Not Set)";
            if (userDataStr) {
                try {
                    const userData = JSON.parse(userDataStr);
                    if (userData.email) emailVal = userData.email;
                    if (userData.phone) phoneVal = userData.phone;
                } catch(e) {
                    console.error("Error reading profile user data:", e);
                }
            }
            document.getElementById("uEmail").textContent = emailVal;
            document.getElementById("uPhone").textContent = phoneVal;

            // Student ID
            const studentIdEl = document.getElementById("uStudentId");
            if (studentIdEl) {
                let studentIdVal = "N/A";
                if (userDataStr) {
                    try {
                        const ud = JSON.parse(userDataStr);
                        if (ud.student_id) studentIdVal = ud.student_id;
                    } catch(e) {}
                }
                studentIdEl.textContent = studentIdVal;
            }
            
            // Plan Badge
            const levelBadge = document.getElementById("pLevel");
            if (userLevel >= 6) {
                levelBadge.textContent = "Full Free Plan";
                levelBadge.style.background = "linear-gradient(135deg, #a855f7, #7c3aed)";
            } else if (userLevel >= 3) {
                levelBadge.textContent = "Free Exercise Plan";
                levelBadge.style.background = "linear-gradient(135deg, var(--primary), var(--accent))";
            } else {
                levelBadge.textContent = "Full Free Plan";
                levelBadge.style.background = "rgba(255,255,255,0.15)";
            }

            // Stats
            const completed = JSON.parse(localStorage.getItem("completed_lessons_" + user)) || [];
            document.getElementById("sLessons").textContent = completed.length;
            const percent = Math.min(Math.round((completed.length / 50) * 100), 100);
            document.getElementById("sProgress").textContent = percent + "%";

            // Avatar
            const savedImg = localStorage.getItem("profile_" + user);
            document.getElementById("bigAvatar").src = savedImg || `https://ui-avatars.com/api/?name=${user}&background=4f46e5&color=fff&size=512`;
        };

        document.getElementById("fileInput").onchange = function (e) {
            const reader = new FileReader();
            reader.onload = function () {
                try {
                    localStorage.setItem("profile_" + user, reader.result);
                } catch (err) {
                    if (err.name === "QuotaExceededError" || err.code === 22) {
                        alert("រូបភាពធំពេក មិនអាចរក្សាទុកបានទេ។ សូមជ្រើសរើសរូបភាពតូចជាង។\n(Image is too large to save. Please choose a smaller image.)");
                        return;
                    }
                    throw err;
                }
                document.getElementById("bigAvatar").src = reader.result;
            };
            if (e.target.files[0]) {
                reader.readAsDataURL(e.target.files[0]);
            }
        };

        function logout() {
            StudyNest.logout();
        }
    </script>
</body>
</html>
