# Docker Setup Guide for StudyNest

## Files Created
- **Dockerfile** - Builds the Laravel application image
- **docker-compose.yml** - Orchestrates Laravel app + MySQL database
- **.env.docker** - Docker-specific environment configuration
- **.dockerignore** - Excludes unnecessary files from Docker build

## Prerequisites
- [Docker Desktop](https://www.docker.com/products/docker-desktop) installed on your system
- Git installed

## Getting Started

### 1. Start the Docker Containers

```bash
# Build and start containers
docker-compose up --build -d

# View container logs
docker-compose logs -f app
```

### 2. Run Initial Setup Commands

```bash
# Enter the app container
docker-compose exec app bash

# Generate Laravel app key (inside container)
php artisan key:generate

# Run database migrations
php artisan migrate

# Exit container
exit
```

### 3. Access Your Application

- **Application URL**: http://localhost:8000
- **MySQL Connection**: 
  - Host: localhost
  - Port: 3306
  - Database: studynest
  - Username: studynest_user
  - Password: studynest_password

## Common Commands

### View Logs
```bash
# All services
docker-compose logs -f

# Only app
docker-compose logs -f app

# Only database
docker-compose logs -f db
```

### Access Container Shell
```bash
# Laravel app
docker-compose exec app bash

# MySQL database
docker-compose exec db mysql -u studynest_user -p studynest
```

### Run Artisan Commands
```bash
docker-compose exec app php artisan {command}

# Examples:
docker-compose exec app php artisan migrate
docker-compose exec app php artisan seed
docker-compose exec app php artisan tinker
```

### Stop Containers
```bash
# Stop all containers
docker-compose down

# Stop and remove volumes (removes database data)
docker-compose down -v
```

### Rebuild After Code Changes
```bash
# Rebuild the image
docker-compose up --build -d
```

## Troubleshooting

### Permission Denied Errors
If you see permission issues with storage/cache directories:
```bash
docker-compose exec app chmod -R 755 storage bootstrap/cache
docker-compose exec app chown -R www-data:www-data storage bootstrap/cache
```

### Port Already in Use
If port 8000 or 3306 is already in use, modify the port mapping in `docker-compose.yml`:
```yaml
ports:
  - "8001:80"  # Change 8000 to 8001
```

### Database Connection Issues
Ensure the MySQL container is healthy:
```bash
docker-compose ps  # Check if 'db' is running
docker-compose logs db  # View database logs
```

### Container Won't Start
Check for errors:
```bash
docker-compose logs app  # View app logs
docker-compose up --build  # Try rebuilding
```

## Environment Configuration

The project uses `.env.docker` for production Docker settings. When developing locally with Docker:
- Copy `.env.docker` to `.env` to use Docker configuration
- Or set environment variables in `docker-compose.yml`

## Security Notes for Production

Before deploying to production:
1. Change `MYSQL_ROOT_PASSWORD` and `DB_PASSWORD` in `docker-compose.yml`
2. Set `APP_DEBUG=false` in `.env.docker`
3. Generate a new `APP_KEY` using `php artisan key:generate`
4. Use proper secret management (never commit secrets)
5. Enable HTTPS with a reverse proxy (nginx)
6. Use environment variables from your deployment platform

## Next Steps

1. Copy the `.env.docker` settings to your `.env` file
2. Run `docker-compose up --build -d`
3. Run migrations: `docker-compose exec app php artisan migrate`
4. Visit http://localhost:8000
