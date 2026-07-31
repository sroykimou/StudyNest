# StudyNest

StudyNest is an educational platform designed for Grade 12 students in Cambodia. It provides lessons, exercises, and exam preparations for various subjects including Physics, Mathematics, Biology, and more.

## Features

- **Lesson Modules**: Comprehensive lessons for Science and Social tracks.
- **Practice Exercises**: Interactive exercises with solutions (Physics, Math).
- **Exam Preparation**: Simulated exams for Mathematics.
- **Admin Panel**: Tools for managing user access and activation codes.
- **User Profiles**: Track progress and manage personal settings.

## Technical Stack

- **Frontend**: HTML5, CSS3 (Vanilla), JavaScript (ES6+).
- **Styling**: Modern, responsive design with glassmorphism and animations.
- **Tools**: 
  - `fix_ocr.js`: Script to fix common OCR errors in Khmer text.
  - `generate_exams.js`: Tool to generate math exam pages from templates.
  - `extract_pdf.js`: PDF text extraction utility.

## Development

To run the project locally, simply open `index.html` in a web browser. The project uses `localStorage` for data persistence.

### Scripts

- `npm install`: Install dependencies for utility scripts.
- `node fix_ocr.js`: Fix OCR errors in physics exercises.
- `node grade12/science/math_g12/exams/generate_exams.js`: Generate new exam pages.

## Docker Setup

### Quick Start with Docker

The project includes Docker configuration for easy deployment.

#### Using Docker Compose (Recommended)

```bash
# Start all services (Laravel app + MySQL)
docker-compose up -d

# Run migrations
docker-compose exec app php artisan migrate

# Access at http://localhost:8000
```

#### Using Production Docker Compose

```bash
# Use the production setup with Docker Hub image
docker-compose -f docker-compose.prod.yml up -d
```

For detailed setup instructions, see:
- [DOCKER_SETUP.md](./DOCKER_SETUP.md) - Local Docker setup
- [DOCKER_CLOUD_BUILD.md](./DOCKER_CLOUD_BUILD.md) - Docker Hub integration

### GitHub Actions Auto-Build

This project is configured with GitHub Actions to automatically build and push Docker images to Docker Hub on every commit.

**Setup Instructions:**

1. **Install GitHub CLI** (if not already installed):
   ```bash
   # On macOS/Linux
   curl -fsSLo- https://cli.github.com/install.sh | sudo bash
   
   # On Windows (with Chocolatey)
   choco install gh
   ```

2. **Get Docker Hub Credentials:**
   - Go to https://hub.docker.com/settings/security
   - Create a Personal Access Token (keep it safe!)

3. **Run Setup Script:**
   ```bash
   # On macOS/Linux
   bash setup-docker-build.sh
   
   # On Windows (PowerShell)
   .\setup-docker-build.ps1
   ```

4. **Push to GitHub:**
   ```bash
   git add .
   git commit -m "Add Docker build automation"
   git push origin main
   ```

5. **Watch Build:**
   - Go to https://github.com/sroykimou/StudyNest/actions
   - See your Docker image build automatically!

6. **Pull Image:**
   ```bash
   docker pull yuhaii15/studynest_linux-amd64:latest
   ```

### Manual Docker Build

```bash
# Build image locally
docker build -f Dockerfile.prod -t yuhaii15/studynest_linux-amd64:latest .

# Login to Docker Hub
docker login

# Push to Docker Hub
docker push yuhaii15/studynest_linux-amd64:latest
```

## License

Created by Sroy Kimou.
# StudyNest-kh
