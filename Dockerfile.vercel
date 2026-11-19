
# ==========================================
# STAGE 1: BUILD FRONTEND ASSETS WITH VITE
# ==========================================
FROM node:24-bookworm-slim AS frontend-build

WORKDIR /app

# Install frontend dependencies
COPY package.json package-lock.json ./
RUN npm ci

# Copy source files required by Tailwind and Vite
COPY resources ./resources
COPY public ./public
COPY tailwind.config.js postcss.config.js vite.config.js ./

# Generate production CSS, JS, and manifest
RUN npm run build && test -f public/build/manifest.json


# ==========================================
# STAGE 2: LARAVEL PHP APACHE APPLICATION
# ==========================================
FROM php:8.2-apache

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

# Install PHP extensions and system dependencies
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy Laravel application
COPY . .

# Copy Vite production assets from frontend build stage
COPY --from=frontend-build /app/public/build /var/www/html/public/build

# Install Laravel dependencies and configure Apache
RUN composer install --no-dev --optimize-autoloader \
    && sed -ri -e "s!/var/www/html!${APACHE_DOCUMENT_ROOT}!g" \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf \
    && chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["apache2-foreground"]
