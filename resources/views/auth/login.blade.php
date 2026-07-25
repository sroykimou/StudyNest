<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | StudyNest</title>
    <meta name="description" content="ចូលប្រើប្រាស់គណនី StudyNest — វេទិកាសិក្សាសម្រាប់សិស្សានុសិស្សថ្នាក់ទី១២">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@300;400;600;700&family=Poppins:wght@300;400;600;700&family=Rajdhani:wght@600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <!-- Google Identity Services -->
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <style>
        /* Specific overrides for login card if needed */
        .card {
            width: 100%;
            max-width: 520px;
            padding: 64px 70px;
        }
        
        /* Tab switcher styling */
        .login-tabs {
            display: flex;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-input);
            padding: 4px;
            margin-bottom: 24px;
            gap: 4px;
        }
        .login-tab {
            flex: 1;
            padding: 10px;
            border: none;
            background: transparent;
            color: var(--text-muted);
            font-family: var(--font-main);
            font-size: 13px;
            font-weight: 600;
            border-radius: calc(var(--radius-input) - 2px);
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        .login-tab.active {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: #fff;
            box-shadow: 0 4px 12px var(--primary-glow);
        }
        .login-tab:hover:not(.active) {
            color: var(--text-primary);
            background: rgba(255, 255, 255, 0.05);
        }

        .social-login {
            display: grid;
            gap: 10px;
            margin-bottom: 22px;
        }

        .social-btn {
            width: 100%;
            min-height: 46px;
            border: 1px solid rgba(255, 255, 255, 0.14);
            border-radius: var(--radius-btn);
            background: rgba(255, 255, 255, 0.08);
            color: var(--text-primary);
            font-family: var(--font-main);
            font-size: 13px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .social-btn:hover {
            transform: translateY(-1px);
            background: rgba(255, 255, 255, 0.13);
            border-color: rgba(255, 255, 255, 0.24);
        }

        .social-btn.google i {
            color: #fbbc05;
        }

        .social-btn.facebook i {
            color: #1877f2;
        }

        .divider {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 0 0 20px;
            color: var(--text-muted);
            font-size: 12px;
            font-weight: 600;
        }

        .divider::before,
        .divider::after {
            content: "";
            height: 1px;
            flex: 1;
            background: rgba(255, 255, 255, 0.13);
        }

        .social-code-panel {
            display: none;
            margin: -8px 0 20px;
            padding: 14px;
            border: 1px solid rgba(116, 235, 213, 0.2);
            border-radius: var(--radius-input);
            background: rgba(116, 235, 213, 0.06);
        }

        .social-code-panel.show {
            display: block;
        }

        .social-code-panel label {
            display: block;
            margin-bottom: 10px;
            color: var(--text-label);
            font-size: 11.5px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .social-code-row {
            display: flex;
            gap: 10px;
        }

        .social-code-row input {
            flex: 1;
            background: var(--input-bg);
            border: 1.5px solid var(--input-border);
            border-radius: 10px;
            color: white;
            font-family: "Rajdhani", sans-serif;
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 3px;
            padding: 10px 12px;
            text-align: center;
            outline: none;
        }

        .social-code-row input:focus {
            border-color: var(--accent);
            box-shadow: 0 0 12px var(--accent-glow);
        }

        .social-code-row button {
            width: 48px;
            border: none;
            border-radius: 10px;
            background: var(--accent);
            color: #0f172a;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.25s ease;
        }

        .social-code-row button:hover {
            background: var(--accent-dark);
            transform: translateY(-1px);
        }

        /* OTP input group button styling */
        .otp-input-wrap input {
            padding-right: 110px !important;
        }
        .get-code-btn {
            position: absolute;
            right: 6px;
            top: 50%;
            transform: translateY(-50%);
            background: linear-gradient(135deg, var(--accent), var(--accent-dark));
            color: #0f172a;
            border: none;
            padding: 8px 12px;
            border-radius: 8px;
            font-size: 11px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.25s ease;
            box-shadow: 0 2px 8px var(--accent-glow);
        }
        .get-code-btn:hover {
            transform: translateY(-50%) scale(1.03);
            box-shadow: 0 4px 12px var(--accent-glow);
        }
        .get-code-btn:disabled {
            background: rgba(255, 255, 255, 0.1);
            color: var(--text-muted);
            cursor: not-allowed;
            transform: translateY(-50%);
            box-shadow: none;
        }
        .countdown-text {
            font-size: 11.5px;
            color: var(--accent);
            margin-top: 6px;
            text-align: right;
            font-weight: 600;
        }

        /* Simulated notification popup */
        .otp-notif {
            position: fixed;
            top: 24px;
            right: 24px;
            width: 360px;
            background: rgba(15, 23, 42, 0.85);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 16px;
            padding: 16px;
            color: #fff;
            box-shadow: 0 20px 40px rgba(0,0,0,0.5), 0 0 30px var(--accent-glow);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            z-index: 1000;
            transform: translateX(400px);
            opacity: 0;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            font-size: 13px;
            line-height: 1.5;
        }
        .otp-notif.show {
            transform: translateX(0);
            opacity: 1;
        }
        .otp-notif-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 8px;
            font-size: 11.5px;
            font-weight: 700;
            color: var(--accent);
        }
        .otp-notif-app {
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .otp-notif-time {
            color: var(--text-muted);
            font-weight: 400;
        }
        .otp-notif-body {
            color: var(--text-primary);
        }
        .otp-notif-body strong {
            color: var(--accent);
            font-family: monospace;
            font-size: 15px;
            letter-spacing: 1px;
            background: rgba(116, 235, 213, 0.15);
            padding: 2px 6px;
            border-radius: 4px;
        }
        .otp-notif-progress {
            height: 3px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 2px;
            margin-top: 12px;
            overflow: hidden;
        }
        .otp-notif-progress-bar {
            height: 100%;
            width: 100%;
            background: var(--accent);
            transition: width linear;
        }

        @media (max-width: 480px) {
            .card {
                max-width: calc(100vw - 28px);
                padding: 38px 24px;
            }

            .otp-notif {
                width: calc(100vw - 32px);
                right: 16px;
                top: 16px;
            }
        }

        .social-login {
            display: flex;
            justify-content: center;
            margin-bottom: 44px;
        }

        .social-btn {
            min-height: 62px;
            width: 100%;
            max-width: 320px;
            background: #f8f8f8;
            border: 0;
            border-radius: 4px;
            color: #111827;
            font-size: 24px;
            box-shadow: none;
        }

        .social-btn span {
            display: inline-block;
            font-size: 15px;
            font-weight: 600;
            margin-left: 10px;
            font-family: "Poppins", sans-serif;
        }

        .social-btn.google i {
            color: #4285f4;
        }

        .social-btn.facebook i {
            color: #0078ff;
        }

        .social-btn.apple i {
            color: #000;
        }

        .social-btn:hover {
            background: #f1f5f9;
            border-color: transparent;
            transform: translateY(-1px);
        }

        .social-code-panel {
            margin: -22px 0 28px;
            border-color: #bfdbfe;
            background: #eff6ff;
        }

        .social-code-panel label {
            color: #1d4ed8;
            font-family: "Poppins", sans-serif;
        }

        .social-code-row input {
            background: #fff;
            border-color: #dbeafe;
            color: #111827;
        }

        .social-code-row button {
            background: #0d6efd;
            color: #fff;
        }

        .sn-btn {
            height: 62px;
            width: 72%;
            margin: 0 auto;
            background: #0d6efd;
            border-radius: 6px;
            color: #fff;
            font-family: "Kantumruy Pro", "Poppins", sans-serif;
            font-size: 15px;
            font-weight: 600;
            box-shadow: none;
        }

        .sn-btn:hover {
            background: #0b5ed7;
            box-shadow: none;
            transform: translateY(-1px);
        }

        .footer-links {
            color: #6b7280;
            margin-top: 26px;
        }

        .footer-links a {
            color: #0d6efd;
        }

        @media (max-width: 480px) {
            .brand {
                font-size: 24px;
            }

            .tagline {
                font-size: 14px;
            }

            .social-login {
                gap: 10px;
            }

            .sn-btn {
                width: 100%;
            }
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
                <i class="fas fa-rocket"></i>
            </div>
        </div>

        <h1 class="brand anim-2">Back to your digital life</h1>
        <p class="tagline anim-3">Choose one of the option to go</p>

        <form id="loginForm">
            <!-- Password Login Fields -->
            <div id="passwordLoginFields">
                <div class="input-group anim-4">
                    <label for="username">Email or username</label>
                    <div class="input-wrap">
                        <i class="fas fa-user icon"></i>
                        <input type="text" id="username" name="username" placeholder="Email or username" required autocomplete="username">
                    </div>
                </div>

                <div class="input-group anim-5">
                    <label for="password">Password</label>
                    <div class="input-wrap">
                        <i class="fas fa-lock icon"></i>
                        <input type="password" id="password" name="password" placeholder="Password" required autocomplete="current-password">
                        <i class="far fa-eye eye-toggle" id="togglePassword"></i>
                    </div>
                </div>

                <div class="forgot anim-6">
                    <a href="#">ភ្លេចលេខសម្ងាត់?</a>
                </div>
            </div>

            <div class="divider anim-4">Or continue with</div>

            <div class="social-login anim-4">
                <button type="button" class="social-btn google" data-provider="google" aria-label="Continue with Google">
                    <i class="fab fa-google"></i>
                    <span>Sign in with Google</span>
                </button>
            </div>

            <button type="submit" class="sn-btn anim-7" id="loginBtn">
                <span class="btn-text" id="loginBtnText">Log in</span>
                <div class="btn-spinner"><i class="fas fa-circle-notch fa-spin"></i></div>
            </button>
        </form>

        <div class="footer-links anim-8">
            មិនទាន់មានគណនី? <a href="/register">បង្កើតគណនីថ្មី</a>
        </div>
    </main>

    <div id="toast" class="toast"></div>

    <script src="{{ asset('assets/main.js') }}"></script>
    <script>
        // Initialize background animations
        StudyNest.initBackground();

        // Toggle Password Visibility
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        if (togglePassword && passwordInput) {
            togglePassword.addEventListener('click', () => {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                togglePassword.classList.toggle('fa-eye');
                togglePassword.classList.toggle('fa-eye-slash');
            });
        }

        // Form Submit Handler
        const loginForm = document.getElementById("loginForm");
        const toast = document.getElementById("toast");

        function showToast(msg, type) {
            toast.textContent = msg;
            toast.className = `toast show ${type}`;
            setTimeout(() => {
                toast.className = "toast";
            }, 3000);
        }

        function normalizeSocialProvider(provider) {
            if (provider === "facebook") return "Meta";
            if (provider === "apple") return "Apple";
            return "Google";
        }

        function getOrCreateSocialUser(provider) {
            const providerName = normalizeSocialProvider(provider);
            const username = provider === "facebook" ? "meta_student" : provider + "_student";
            const storageKey = "user_" + username;
            const existingData = localStorage.getItem(storageKey);

            if (existingData) {
                return JSON.parse(existingData);
            }

            const userData = {
                username: username,
                email: username + "@studynest.local",
                phone: "",
                password: "",
                grade: "12",
                branch: "science",
                authProvider: providerName
            };

            localStorage.setItem(storageKey, JSON.stringify(userData));
            localStorage.setItem("userLevel_" + username, "6");
            return userData;
        }

        const socialCodePanel = document.getElementById("socialCodePanel");
        const socialCodeInput = document.getElementById("socialCode");
        const verifySocialCodeBtn = document.getElementById("verifySocialCodeBtn");
        let pendingSocialUser = null;
        let pendingSocialProvider = null;
        let socialVerificationCode = null;

        // --- Google OAuth Integration ---
        const GOOGLE_CLIENT_ID = "YOUR_GOOGLE_CLIENT_ID_HERE.apps.googleusercontent.com";

        function handleGoogleResponse(response) {
            try {
                // Decode the JWT token (Base64 decode)
                const base64Url = response.credential.split('.')[1];
                const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
                const jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
                    return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
                }).join(''));

                const googleUser = JSON.parse(jsonPayload);
                console.log("Google User Data:", googleUser);

                // Create or update local user
                const username = googleUser.email.split('@')[0] + "_google";
                const storageKey = "user_" + username;
                
                const userData = {
                    username: username,
                    email: googleUser.email,
                    fullName: googleUser.name,
                    picture: googleUser.picture,
                    grade: "12",
                    branch: "science",
                    authProvider: "Google"
                };

                localStorage.setItem(storageKey, JSON.stringify(userData));
                localStorage.setItem("currentUserName", username);
                localStorage.setItem("userLevel_" + username, "6"); // Default access level
                localStorage.setItem("userGrade", "12");

                showToast(`ស្វាគមន៍ ${googleUser.name}! ចូលប្រើប្រាស់ជោគជ័យ។`, "success");

                setTimeout(() => {
                    window.location.href = '/grade12/science';
                }, 1000);

            } catch (error) {
                console.error("Google Login Error:", error);
                showToast("ការចូលប្រើប្រាស់តាម Google បានបរាជ័យ!", "error");
            }
        }

        window.onload = function () {
            if (typeof google !== 'undefined') {
                google.accounts.id.initialize({
                    client_id: GOOGLE_CLIENT_ID,
                    callback: handleGoogleResponse
                });
            }
        };

        if (socialCodePanel && socialCodeInput) {
            document.querySelectorAll(".social-btn").forEach((button) => {
                button.addEventListener("click", () => {
                    const provider = button.dataset.provider;
                    
                    if (provider === "google") {
                        if (typeof google !== 'undefined' && google.accounts && google.accounts.id) {
                            google.accounts.id.prompt();
                        }
                        return;
                    }

                    const providerName = normalizeSocialProvider(provider);
                    pendingSocialUser = getOrCreateSocialUser(provider);
                    pendingSocialProvider = providerName;
                    socialVerificationCode = Math.floor(100000 + Math.random() * 900000).toString();

                    socialCodePanel.classList.add("show");
                    socialCodeInput.value = "";
                    socialCodeInput.focus();
                    showVerificationNotification(socialVerificationCode);
                    showToast(`សូមបញ្ចូលលេខកូដ ${providerName}`, "success");
                });
            });
        }

        if (verifySocialCodeBtn && socialCodeInput) {
            verifySocialCodeBtn.addEventListener("click", () => {
                const enteredCode = socialCodeInput.value.trim();

                if (!pendingSocialUser || !socialVerificationCode) {
                    showToast("សូមជ្រើសរើស Google ឬ Facebook ជាមុសិន", "error");
                    return;
                }

                if (enteredCode !== socialVerificationCode) {
                    showToast("លេខកូដមិនត្រឹមត្រូវ!", "error");
                    return;
                }

                showToast(`${pendingSocialProvider} ចូលប្រើប្រាស់ជោគជ័យ!`, "success");
                localStorage.setItem("currentUserName", pendingSocialUser.username);
                localStorage.setItem("userGrade", pendingSocialUser.grade || "12");

                setTimeout(() => {
                    const branch = pendingSocialUser.branch || "science";
                    const grade = pendingSocialUser.grade || "12";
                    window.location.href = `/grade${grade}/${branch}`;
                }, 800);
            });

            socialCodeInput.addEventListener("keydown", (e) => {
                if (e.key === "Enter") {
                    e.preventDefault();
                    verifySocialCodeBtn.click();
                }
            });
        }

        loginForm.addEventListener("submit", (e) => {
            e.preventDefault();
            const btn = document.getElementById("loginBtn");
            btn.classList.add("loading");

            const user = document.getElementById("username").value.trim();
            const pass = document.getElementById("password").value;

            setTimeout(async () => {
                try {
                    const response = await fetch('/login', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({
                            username: user,
                            password: pass
                        })
                    });

                    if (response.ok) {
                        const result = await response.json();
                        
                        showToast("ចូលប្រើប្រាស់ជោគជ័យ!", "success");
                        
                        // Set localStorage variables
                        localStorage.setItem("currentUserName", user);
                        if (!localStorage.getItem("userLevel_" + user)) {
                            localStorage.setItem("userLevel_" + user, "6");
                        }
                        
                        if (result.user && result.user.is_admin) {
                            localStorage.setItem("isAdmin", "true");
                            setTimeout(() => {
                                window.location.href = '/grade12/admin';
                            }, 1000);
                        } else {
                            const branch = (result.user && result.user.branch) ? result.user.branch : "science";
                            const grade = (result.user && result.user.grade) ? result.user.grade : "12";
                            setTimeout(() => {
                                window.location.href = `/grade${grade}/${branch}`;
                            }, 1000);
                        }
                    } else {
                        const errData = await response.json();
                        const errMsg = errData.message || "ឈ្មោះអ្នកប្រើប្រាស់ ឬលេខសម្ងាត់មិនត្រឹមត្រូវ។";
                        showToast(errMsg, "error");
                        btn.classList.remove("loading");
                    }
                } catch (err) {
                    console.error("Login Fetch Error:", err);
                    showToast("មានបញ្ហាក្នុងការភ្ជាប់ទៅកាន់ម៉ាស៊ីនបម្រើ!", "error");
                    btn.classList.remove("loading");
                }
            }, 800);
        });
    </script>
</body>
</html>
