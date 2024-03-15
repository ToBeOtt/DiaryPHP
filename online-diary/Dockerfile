# PHP image
FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www/html

# Dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install zip pdo pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy all the diary-application files
COPY . .

# Install the PHP dependencies
RUN composer install

# Expose port 80
EXPOSE 80

# Command to run the online-diary
CMD ["php", "artisan", "serve", "--host", "0.0.0.0", "--port", "80"]