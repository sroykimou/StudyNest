# Docker Cloud Automated Builds Setup Guide

## Overview

This guide shows how to set up automated Docker Cloud builds for your StudyNest project. Every time you push to GitHub, Docker Cloud will automatically build and push your image.

## Prerequisites

1. Docker Hub account (free at https://hub.docker.com)
2. GitHub repository linked to Docker Hub
3. Docker CLI installed locally (for manual builds/pushes)

## Step 1: Link GitHub to Docker Hub

1. Go to [Docker Hub](https://hub.docker.com) and sign in
2. Navigate to **Account Settings** → **Linked Accounts**
3. Click **Link GitHub**
4. Authorize Docker to access your GitHub repositories
5. Select the repository: `sroykimou/StudyNest`

## Step 2: Create a New Repository on Docker Hub

1. Click **Create Repository**
2. **Name**: `studynest_linux-amd64`
3. **Description**: "StudyNest - Cambodian Educational Platform"
4. **Visibility**: Public or Private (your choice)
5. Click **Create**

## Step 3: Set Up Automated Builds

1. In your Docker Hub repository, go to **Builds** tab
2. Click **Configure Automated Builds**
3. **Select Source**: Choose GitHub
4. **Repository**: Select `sroykimou/StudyNest`
5. Click **Save and Build**

## Step 4: Configure Build Rules

1. Go to **Build Settings** in your Docker Hub repository
2. Click **Edit** next to the build rule
3. Configure:
   - **Source Type**: Branch
   - **Source**: main (or your default branch)
   - **Dockerfile location**: `Dockerfile.prod`
   - **Build Context**: `/` (root)
   - **Docker Tag**: `latest` or `{sourceref}`
4. Click **Save**

## Step 5: Build Hooks (Optional)

For additional build triggers, configure webhook hooks in your GitHub repository:

1. Go to GitHub repo **Settings** → **Webhooks**
2. Add webhook:
   - **Payload URL**: `https://build-cloud.docker.com/v2/webhooks/trigger/WEBHOOK_ID/`
   - **Event**: Push events
   - Get `WEBHOOK_ID` from Docker Hub Build Settings

## Step 6: Manual Build with Docker CLI

To build locally and push to Docker Hub:

```bash
# Login to Docker Hub
docker login

# Build image
docker build -f Dockerfile.prod -t yuhaii15/studynest_linux-amd64:latest .

# Push to Docker Hub
docker push yuhaii15/studynest_linux-amd64:latest

# Build specific version
docker build -f Dockerfile.prod \
  --build-arg VERSION=1.0.0 \
  --build-arg BUILD_DATE=$(date -u +'%Y-%m-%dT%H:%M:%SZ') \
  --build-arg VCS_REF=$(git rev-parse --short HEAD) \
  -t yuhaii15/studynest_linux-amd64:1.0.0 .

docker push yuhaii15/studynest_linux-amd64:1.0.0
```

## Step 7: Pull and Run from Docker Hub

```bash
# Pull the image from Docker Hub
docker pull yuhaii15/studynest_linux-amd64:latest

# Run using docker-compose
docker-compose -f docker-compose.prod.yml up -d
```

## Environment Variables in Docker Hub

Store sensitive data as Docker Hub build secrets:

1. Go to **Build Settings** → **Build Variables**
2. Add variables:
   - `DB_PASSWORD`: Your secure password
   - `APP_KEY`: Your Laravel app key
   - `MAIL_PASSWORD`: Mail service password

These won't be exposed in build logs or image layers.

## Build Args vs Secrets

**Build Args** (in Dockerfile):

- Used during build time only
- Not included in final image
- Example: `VERSION`, `BUILD_DATE`

**Environment Variables** (in docker-compose):

- Runtime configuration
- Available to running container
- Set via `environment:` section or `--env-file`

**Secrets** (Docker Hub):

- Sensitive data not in version control
- Injected during build
- Never stored in image history

## Image Tags and Versioning

Docker Hub supports multiple tags for one image:

```bash
# Latest version
docker tag yuhaii15/studynest_linux-amd64:1.0.0 yuhaii15/studynest_linux-amd64:latest
docker push yuhaii15/studynest_linux-amd64:latest

# Semantic versioning
docker tag myimage:1.0.0 yuhaii15/studynest_linux-amd64:1.0
docker push yuhaii15/studynest_linux-amd64:1.0
```

## Monitoring Builds

1. Go to **Builds** tab in Docker Hub repository
2. View build history, logs, and status
3. Click on any build to see detailed build output

## Automated Deployment Webhooks

After successful build, trigger deployment:

1. Configure **Post-Build Webhook** in Docker Hub:
   - Go to **Build Settings**
   - Add webhook URL for your deployment service
   - Examples: AWS CodeDeploy, Azure Container Instances, DigitalOcean

2. Example webhook to trigger deployment:

```bash
POST https://your-deployment-api.com/deploy
{
  "image": "yuhaii15/studynest_linux-amd64:latest",
  "tag": "latest",
  "build_id": "WEBHOOK_ID"
}
```

## Registry Mirrors (Optional)

For faster pulls in different regions:

1. Docker Hub (default): `yuhaii15/studynest_linux-amd64`
2. GitHub Container Registry: `ghcr.io/sroykimou/studynest`
3. Quay.io: `quay.io/sroykimou/studynest`

Configure in `docker-compose.yml`:

```yaml
image: yuhaii15/studynest_linux-amd64:latest
# or
image: ghcr.io/sroykimou/studynest:latest
```

## Troubleshooting

### Build Fails in Docker Hub but Works Locally

- Check build arguments match
- Verify Dockerfile path is correct
- Check build context includes all dependencies
- Review build logs in Docker Hub for errors

### Webhook Not Triggering

- Verify GitHub token is still valid
- Check webhook payload URL format
- Ensure repository has push permissions
- Test webhook manually from Docker Hub settings

### Image Size Too Large

- Use multi-stage builds (already in Dockerfile.prod)
- Remove unnecessary dependencies from RUN commands
- Use `.dockerignore` to exclude files

### Permission Denied on Docker Hub Push

```bash
docker login  # Re-authenticate
docker logout  # Clear cached credentials if needed
```

## Best Practices

1. **Use multi-stage builds** for smaller final images
2. **Tag images semantically**: `v1.0.0`, `latest`, `beta`
3. **Add build metadata** with LABEL instructions
4. **Use `.dockerignore`** to reduce build context
5. **Keep Dockerfile efficient** to speed up builds
6. **Document build args and secrets** in README
7. **Test images locally** before pushing to registry
8. **Use private repositories** for sensitive code

## Security Considerations

- Never commit secrets (API keys, passwords) in Dockerfile or .env files
- Use Docker Hub build variables for secrets
- Regularly scan images for vulnerabilities:
  ```bash
  docker scan yuhaii15/studynest_linux-amd64:latest
  ```
- Keep base images (php:8.2-apache) updated
- Use `.dockerignore` to avoid including sensitive files

## Files Reference

- `Dockerfile.prod` - Production-optimized multi-stage Dockerfile
- `docker-compose.prod.yml` - Production docker-compose configuration
- `docker-cloud.yml` - Docker Cloud build configuration
- `.dockerignore` - Excludes unnecessary files from build

## Next Steps

1. Push these changes to GitHub
2. Log in to Docker Hub
3. Connect your GitHub repository
4. Set up automated build rules
5. Trigger first build and monitor
6. Configure webhooks for post-build actions
7. Test pulling image from Docker Hub
