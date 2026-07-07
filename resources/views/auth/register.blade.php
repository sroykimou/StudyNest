<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | StudyNest</title>
    <meta name="description" content="បង្កើតគណនីសិស្ស StudyNest — កៀច្ចូលសិក្សាថ្នាក់ទី១២">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@300;400;600;700&family=Poppins:wght@300;400;600;700&family=Rajdhani:wght@600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <style>
        /* Specific overrides for register card if needed */
        .card {
            width: 100%;
            max-width: 400px;
            padding: 40px;
        }
    </style>
</head>
<body>

    <!-- Animated Background -->
    <div class="drops" id="drops"></div>
    <div class="particles" id="particles"></div>

    <main class="card anim">
        <div class="logo-wrap anim-1">
            <div class="logo-icon">
                <i class="fas fa-graduation-cap"></i>
            </div>
        </div>

        <h1 class="brand anim-2">StudyNest</h1>
        <p class="tagline anim-3">បង្កើតគណនីសម្រាប់សិស្សថ្នាក់ទី ១២</p>
        <p class="promo-badge anim-3" style="color: var(--accent); font-size: 13px; font-weight: 700; background: rgba(245, 158, 11, 0.1); padding: 5px 12px; border-radius: 20px; display: inline-block; margin-bottom: 20px;">🎁 កាដូពិសេស៖ ចុះឈ្មោះឥឡូវនេះ ទទួលបានគម្រោងទាំងអស់ដោយឥតគិតថ្លៃ!</p>

        <form id="registerForm">
            <div class="input-group anim-4">
                <label for="username">ឈ្មោះអ្នកប្រើប្រាស់</label>
                <div class="input-wrap">
                    <i class="fas fa-user icon"></i>
                    <input type="text" id="username" placeholder="ឈ្មោះរបស់អ្នក..." required autocomplete="username">
                </div>
            </div>

            <div class="input-group anim-5">
                <label for="email">អ៊ីមែល (Email)</label>
                <div class="input-wrap">
                    <i class="fas fa-envelope icon"></i>
                    <input type="email" id="email" placeholder="example@gmail.com" required autocomplete="email">
                </div>
            </div>

            <div class="input-group anim-5">
                <label for="phone">លេខទូរស័ព្ទ (Phone Number)</label>
                <div class="input-wrap">
                    <i class="fas fa-phone icon"></i>
                    <input type="tel" id="phone" placeholder="012345678" required autocomplete="tel">
                </div>
            </div>

            <div class="input-group anim-6">
                <label for="branchSelect">ថ្នាក់ទី ១២ (ជំនាញ)</label>
                <div class="input-wrap">
                    <i class="fas fa-microscope icon"></i>
                    <select id="branchSelect" required>
                        <option value="" disabled selected>សូមជ្រើសរើស...</option>
                        <option value="science">វិទ្យាសាស្ត្រ (Science)</option>
                        <option value="social">វិទ្យាសាស្ត្រសង្គម (Social)</option>
                    </select>
                    <i class="fas fa-chevron-down select-arrow"></i>
                </div>
            </div>

            <div class="input-group anim-7">
                <label for="password">លេខសម្ងាត់</label>
                <div class="input-wrap">
                    <i class="fas fa-lock icon"></i>
                    <input type="password" id="password" placeholder="••••••••" required autocomplete="new-password">
                </div>
            </div>

            <div class="input-group anim-8">
                <label for="confirmPassword">បញ្ជាក់លេខសម្ងាត់</label>
                <div class="input-wrap">
                    <i class="fas fa-check-circle icon"></i>
                    <input type="password" id="confirmPassword" placeholder="••••••••" required autocomplete="new-password">
                </div>
            </div>

            <button type="submit" class="sn-btn anim-9" id="regBtn">
                <span class="btn-text">ចុះឈ្មោះឥឡូវនេះ</span>
                <div class="btn-spinner"><i class="fas fa-circle-notch fa-spin"></i></div>
            </button>
        </form>

        <div class="footer-links anim-9">
            មានគណនីរួចហើយ? <a href="/login">ចូលប្រើប្រាស់</a>
        </div>
    </main>

    <div id="toast" class="toast"></div>

    <script src="{{ asset('assets/main.js') }}"></script>
    <script>
        // Initialize background
        StudyNest.initBackground();

        const form = document.getElementById("registerForm");
        const toast = document.getElementById("toast");

        function showToast(msg, type) {
            toast.textContent = msg;
            toast.className = `toast show ${type}`;
            setTimeout(() => (toast.className = "toast"), 3000);
        }

        form.addEventListener("submit", (e) => {
            e.preventDefault();

            const user = document.getElementById("username").value.trim();
            const email = document.getElementById("email").value.trim().toLowerCase();
            const phone = document.getElementById("phone").value.trim();
            const pass = document.getElementById("password").value;
            const conf = document.getElementById("confirmPassword").value;
            const branch = document.getElementById("branchSelect").value;
            const grade = "12"; // Default for now
            const btn = document.getElementById("regBtn");

            if (localStorage.getItem("user_" + user)) {
                showToast("ឈ្មោះនេះមានគេប្រើរួចហើយ!", "error");
                return;
            }

            // Check for duplicate email or phone number
            let duplicateFound = false;
            for (let i = 0; i < localStorage.length; i++) {
                const key = localStorage.key(i);
                if (key.startsWith("user_")) {
                    try {
                        const existingUserData = JSON.parse(localStorage.getItem(key));
                        if (existingUserData.email && existingUserData.email.toLowerCase() === email) {
                            showToast("អ៊ីមែលនេះមានគេប្រើរួចហើយ! (Email already in use)", "error");
                            duplicateFound = true;
                            break;
                        }
                        if (existingUserData.phone && existingUserData.phone === phone) {
                            showToast("លេខទូរស័ព្ទនេះមានគេប្រើរួចហើយ! (Phone number already in use)", "error");
                            duplicateFound = true;
                            break;
                        }
                    } catch (err) {
                        console.error("Error reading stored user:", err);
                    }
                }
            }
            if (duplicateFound) return;

            if (pass.length < 6) {
                showToast("លេខសម្ងាត់យ៉ាងហោច ៦ ខ្ទង់", "error");
                return;
            }
            if (pass !== conf) {
                showToast("លេខសម្ងាត់មិនត្រូវគ្នា", "error");
                return;
            }

            btn.classList.add("loading");

            async function hashPassword(password) {
                const encoder = new TextEncoder();
                const data = encoder.encode(password);
                const hashBuffer = await crypto.subtle.digest("SHA-256", data);
                const hashArray = Array.from(new Uint8Array(hashBuffer));
                return hashArray.map(b => b.toString(16).padStart(2, "0")).join("");
            }

            setTimeout(async () => {
                const hashedPassword = await hashPassword(pass);
                const userData = { 
                    username: user, 
                    email: email, 
                    phone: phone, 
                    password: hashedPassword, 
                    grade: grade, 
                    branch: branch 
                };
                localStorage.setItem("user_" + user, JSON.stringify(userData));

                localStorage.setItem("currentUserName", user);
                localStorage.setItem("userGrade", grade);
                
                // Promo: Give full access (Level 6) for free with 10 years expiry
                const tenYears = 10 * 365 * 24 * 60 * 60 * 1000;
                localStorage.setItem("userLevel_" + user, "6");
                localStorage.setItem("userLevelExpiry_" + user, (Date.now() + tenYears).toString());

                showToast("ចុះឈ្មោះជោគជ័យ! 🎉", "success");

                setTimeout(() => {
                    window.location.href = `../grade${grade}/${branch}/${branch}_home.php`;
                }, 1200);
            }, 1500);
        });
    </script>
</body>
</html>
