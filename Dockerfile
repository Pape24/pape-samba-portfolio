FROM php:8.3-apache

# Extensions PHP nécessaires à Laravel
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libicu-dev \
    && docker-php-ext-install \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    intl \
    zip

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Activer mod_rewrite Apache
RUN a2enmod rewrite

WORKDIR /var/www/html

# Copier le projet
COPY . .

# Installer les dépendances Laravel
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction

# Installer Node.js et npm
RUN apt-get update && apt-get install -y nodejs npm

# Installer les dépendances frontend et compiler Vite
RUN npm install
RUN npm run build

# Permissions Laravel
RUN chown -R www-data:www-data \
    storage \
    bootstrap/cache

RUN chmod -R 775 \
    storage \
    bootstrap/cache

# Configuration Apache
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

RUN sed -i 's|<Directory /var/www/>|<Directory /var/www/html/public>|' /etc/apache2/apache2.conf || true

EXPOSE 80

CMD ["apache2-foreground"]