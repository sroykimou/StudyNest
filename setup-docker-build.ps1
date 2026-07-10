# GitHub Actions Docker Build Setup Script (PowerShell)
# This script helps you set up the credentials needed for automated builds

Write-Host "================================================" -ForegroundColor Cyan
Write-Host "  StudyNest GitHub Actions Docker Setup" -ForegroundColor Cyan
Write-Host "================================================" -ForegroundColor Cyan
Write-Host ""

# Check if GitHub CLI is installed
function Check-Requirements {
    Write-Host "Checking requirements..." -ForegroundColor Yellow
    
    $ghInstalled = Get-Command gh -ErrorAction SilentlyContinue
    
    if (-not $ghInstalled) {
        Write-Host "⚠️  GitHub CLI (gh) not found." -ForegroundColor Red
        Write-Host "Install from: https://cli.github.com" -ForegroundColor Yellow
        return $false
    }
    
    Write-Host "✅ GitHub CLI found" -ForegroundColor Green
    return $true
}

# Set up secrets
function Setup-Secrets {
    Write-Host ""
    Write-Host "================================================" -ForegroundColor Cyan
    Write-Host "  Setting up GitHub Secrets for Docker Hub" -ForegroundColor Cyan
    Write-Host "================================================" -ForegroundColor Cyan
    Write-Host ""
    
    Write-Host "You'll need your Docker Hub credentials." -ForegroundColor Yellow
    Write-Host "Get a Personal Access Token from: https://hub.docker.com/settings/security" -ForegroundColor Yellow
    Write-Host ""
    
    $dockerUsername = Read-Host "Enter your Docker Hub username"
    $dockerPassword = Read-Host "Enter your Docker Hub Personal Access Token" -AsSecureString
    $dockerPasswordPlain = [System.Runtime.InteropServices.Marshal]::PtrToStringAuto([System.Runtime.InteropServices.Marshal]::SecureStringToCoTaskMemUnicode($dockerPassword))
    
    Write-Host ""
    Write-Host "Setting secrets in GitHub..." -ForegroundColor Yellow
    
    try {
        $dockerUsername | gh secret set DOCKER_USERNAME
        Write-Host "✅ DOCKER_USERNAME set" -ForegroundColor Green
    }
    catch {
        Write-Host "⚠️  Failed to set DOCKER_USERNAME" -ForegroundColor Red
        Write-Host "Set it manually at: https://github.com/sroykimou/StudyNest/settings/secrets/actions" -ForegroundColor Yellow
        return $false
    }
    
    try {
        $dockerPasswordPlain | gh secret set DOCKER_PASSWORD
        Write-Host "✅ DOCKER_PASSWORD set" -ForegroundColor Green
    }
    catch {
        Write-Host "⚠️  Failed to set DOCKER_PASSWORD" -ForegroundColor Red
        Write-Host "Set it manually at: https://github.com/sroykimou/StudyNest/settings/secrets/actions" -ForegroundColor Yellow
        return $false
    }
    
    Write-Host "✅ Secrets set successfully!" -ForegroundColor Green
    return $true
}

# Display next steps
function Display-NextSteps {
    Write-Host ""
    Write-Host "================================================" -ForegroundColor Cyan
    Write-Host "  Setup Complete! Next Steps:" -ForegroundColor Cyan
    Write-Host "================================================" -ForegroundColor Cyan
    Write-Host ""
    
    Write-Host "1. Push changes to GitHub:" -ForegroundColor White
    Write-Host "   git add ." -ForegroundColor Gray
    Write-Host "   git commit -m 'Add GitHub Actions Docker build workflow'" -ForegroundColor Gray
    Write-Host "   git push origin main" -ForegroundColor Gray
    Write-Host ""
    
    Write-Host "2. Go to GitHub Actions:" -ForegroundColor White
    Write-Host "   https://github.com/sroykimou/StudyNest/actions" -ForegroundColor Cyan
    Write-Host ""
    
    Write-Host "3. Watch the build start automatically!" -ForegroundColor Green
    Write-Host ""
    
    Write-Host "4. After successful build, pull from Docker Hub:" -ForegroundColor White
    Write-Host "   docker pull yuhaii15/studynest_linux-amd64:latest" -ForegroundColor Gray
    Write-Host ""
    
    Write-Host "5. Run with Docker Compose:" -ForegroundColor White
    Write-Host "   docker-compose -f docker-compose.prod.yml up -d" -ForegroundColor Gray
    Write-Host ""
}

# Main execution
if (Check-Requirements) {
    if (Setup-Secrets) {
        Display-NextSteps
        Write-Host "✅ All done! Ready to build!" -ForegroundColor Green
    }
}
else {
    Write-Host ""
    Write-Host "Please install GitHub CLI first: https://cli.github.com" -ForegroundColor Yellow
    Write-Host "Then run this script again." -ForegroundColor Yellow
    exit 1
}
