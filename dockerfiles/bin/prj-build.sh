#!/bin/bash

# Install dependencies
composer install --prefer-dist --no-interaction

# Generate application key
php artisan view:clear
php artisan config:clear
php artisan key:generate

# Verify environment config
cat .env

# Install dependencies
npm install
npm run dev

# Install cron
apt-get update
apt-get install -y cron


# Add crontab file in the cron directory
cp schedule/crontab /etc/cron.d/cron

# Give execution rights on the cron job
chmod 0644 /etc/cron.d/cron

# Create the log file to be able to run tail
touch /var/log/cron.log

# Run the command on container startup
cron -f

# Create database tables and populate seed data
php artisan migrate --seed --no-interaction

# Execute PHPUnit tests
vendor/bin/phpunit
