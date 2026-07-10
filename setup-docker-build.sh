#!/bin/bash

# GitHub Actions Docker Build Setup Script
# This script helps you set up the credentials needed for automated builds

echo "================================================"
echo "  StudyNest GitHub Actions Docker Setup"
echo "================================================"
echo ""

# Check if required tools are installed
check_requirements() {
    echo "Checking requirements..."
    
    if ! command -v gh &> /dev/null; then
        echo "⚠️  GitHub CLI (gh) not found. Install from: https://cli.github.com"
        return 1
    fi
    
    echo "✅ GitHub CLI found"
    return 0
}

# Set up secrets
setup_secrets() {
    echo ""
    echo "================================================"
    echo "  Setting up GitHub Secrets for Docker Hub"
    echo "================================================"
    echo ""
    
    # Prompt for Docker credentials
    echo "You'll need your Docker Hub credentials."
    echo "Get a Personal Access Token from: https://hub.docker.com/settings/security"
    echo ""
    
    read -p "Enter your Docker Hub username: " DOCKER_USERNAME
    read -sp "Enter your Docker Hub Personal Access Token: " DOCKER_PASSWORD
    echo ""
    
    # Set secrets via GitHub CLI
    echo ""
    echo "Setting secrets in GitHub..."
    
    gh secret set DOCKER_USERNAME --body "$DOCKER_USERNAME" || {
        echo "⚠️  Failed to set DOCKER_USERNAME"
        echo "Set it manually at: https://github.com/sroykimou/StudyNest/settings/secrets/actions"
        return 1
    }
    
    gh secret set DOCKER_PASSWORD --body "$DOCKER_PASSWORD" || {
        echo "⚠️  Failed to set DOCKER_PASSWORD"
        echo "Set it manually at: https://github.com/sroykimou/StudyNest/settings/secrets/actions"
        return 1
    }
    
    echo "✅ Secrets set successfully!"
    return 0
}

# Display next steps
display_next_steps() {
    echo ""
    echo "================================================"
    echo "  Setup Complete! Next Steps:"
    echo "================================================"
    echo ""
    echo "1. Push changes to GitHub:"
    echo "   git add ."
    echo "   git commit -m 'Add GitHub Actions Docker build workflow'"
    echo "   git push origin main"
    echo ""
    echo "2. Go to GitHub Actions:"
    echo "   https://github.com/sroykimou/StudyNest/actions"
    echo ""
    echo "3. Watch the build start automatically!"
    echo ""
    echo "4. After successful build, pull from Docker Hub:"
    echo "   docker pull yuhaii15/studynest_linux-amd64:latest"
    echo ""
    echo "5. Run with Docker Compose:"
    echo "   docker-compose -f docker-compose.prod.yml up -d"
    echo ""
}

# Main execution
main() {
    if check_requirements; then
        setup_secrets && display_next_steps
    else
        echo ""
        echo "Please install GitHub CLI first: https://cli.github.com"
        echo "Then run this script again."
        exit 1
    fi
}

main
