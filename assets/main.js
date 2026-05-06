/**
 * StudyNest Framework - Core Logic
 * បង្កើតដោយ: Sroy Kimou
 */

const StudyNest = {
  // 0. ជំនួយការស្វែងរក Path ទៅកាន់ Root Folder (ដើម្បីឱ្យ Link ដើរគ្រប់ទីកន្លែង)
  getRoot: function () {
    const script = document.querySelector('script[src*="assets/main.js"]');
    if (script) {
      const src = script.getAttribute("src");
      return src.replace("assets/main.js", "");
    }
    return ""; // បើរកមិនឃើញ ប្រើ Path បច្ចុប្បន្ន
  },

  // 1. ទាញយកឈ្មោះអ្នកប្រើប្រាស់ដែលកំពុង Login
  getUser: function () {
    return localStorage.getItem("currentUserName");
  },

  // 2. ទាញយកកម្រិតសិក្សា (Level) របស់ User (Default = 0)
  getLevel: function () {
    const user = this.getUser();
    if (!user) return -1; // មិនទាន់ Login

    const currentLevel = parseInt(localStorage.getItem("userLevel_" + user)) || 0;
    const expiryTimestamp = localStorage.getItem("userLevelExpiry_" + user);

    // ប្រសិនបើជា User Free មិនបាច់ឆែក Expiry ទេ
    if (currentLevel === 0) return 0;

    // ប្រសិនបើអត់មាន Timestamp ទេ (ករណីចាស់) ឱ្យ Expire តែម្តងដើម្បីសុវត្ថិភាព
    if (!expiryTimestamp) {
      localStorage.setItem("userLevel_" + user, 0);
      return 0;
    }

    // ឆែកមើលពេលវេលាបច្ចុប្បន្ន ប្រៀបធៀបជាមួយពេលវេលាផុតកំណត់
    const now = Date.now();
    if (now > parseInt(expiryTimestamp)) {
      // បើលើសពេលវេលាហើយ គឺផុតកំណត់ (Expire)
      localStorage.setItem("userLevel_" + user, 0);
      return 0;
    }

    return currentLevel;
  },

  // 3. មុខងារចាកចេញពីគណនី (Logout)
  logout: function () {
    // លុប Session ទិន្នន័យបច្ចុប្បន្ន
    localStorage.removeItem("currentUserName");
    localStorage.removeItem("userGrade");

    // បញ្ជូនត្រឡប់ទៅទំព័រដើម
    window.location.href = this.getRoot() + "index.html";
  },

  // 4. មុខងារការពារទំព័រ (Auth Guard)
  // ប្រសិនបើមិនទាន់ Login ទេ វានឹងដេញទៅទំព័រ Login វិញ
  authGuard: function () {
    if (!this.getUser()) {
      window.location.href = this.getRoot() + "auth/login.html";
    }
  },

  // 5. មុខងារឆែកសិទ្ធិចូលមើលមាតិកា (Subscription Guard)
  // ប្រើក្នុងទំព័រលំហាត់ ($3) ឬ AI ($6)
  checkAccess: function (requiredLevel) {
    const currentLevel = this.getLevel();

    // កម្រិត -1 មានន័យថាអត់ទាន់ Login
    if (currentLevel === -1) {
      window.location.href = this.getRoot() + "auth/login.html";
      return false;
    }

    // បើ Level បច្ចុប្បន្ន ទាបជាង Level ដែលគេតម្រូវ
    if (currentLevel < requiredLevel) {
      // បញ្ជូនទៅទំព័រ Pay ជាមួយតម្លៃ p (p=3 ឬ p=6)
      window.location.href = this.getRoot() + "grade12/pay.html?p=" + requiredLevel;
      return false;
    }
    return true;
  },

  // 6. មុខងារបង្កើត Background Animations
  initBackground: function () {
    const dropsContainer = document.getElementById("drops");
    const particlesContainer = document.getElementById("particles");

    if (dropsContainer) {
      for (let i = 0; i < 20; i++) {
        const drop = document.createElement("div");
        drop.className = "drop";
        drop.style.left = Math.random() * 100 + "vw";
        drop.style.width = Math.random() * 3 + 1 + "px";
        drop.style.height = Math.random() * 20 + 10 + "px";
        drop.style.animationDuration = Math.random() * 2 + 2 + "s";
        drop.style.animationDelay = Math.random() * 5 + "s";
        dropsContainer.appendChild(drop);
      }
    }

    if (particlesContainer) {
      for (let i = 0; i < 30; i++) {
        const particle = document.createElement("div");
        particle.className = "particle";
        particle.style.left = Math.random() * 100 + "vw";
        const size = Math.random() * 4 + 2;
        particle.style.width = size + "px";
        particle.style.height = size + "px";
        particle.style.background =
          i % 2 === 0 ? "var(--primary-light)" : "var(--accent)";
        particle.style.animationDuration = Math.random() * 5 + 5 + "s";
        particle.style.animationDelay = Math.random() * 10 + "s";
        particlesContainer.appendChild(particle);
      }
    }
  },
};

// បើអ្នកចង់ឱ្យវាឆែក Auth ដោយស្វ័យប្រវត្តិរាល់ពេលភ្ជាប់ File នេះ
// StudyNest.authGuard();
