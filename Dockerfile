FROM php:8.3-apache

RUN a2enmod rewrite headers expires \
    && sed -ri 's!/var/www/html!/var/www/html/public!g' \
        /etc/apache2/sites-available/000-default.conf \
        /etc/apache2/apache2.conf \
        /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html
COPY . .

RUN cp .env.example .env \
    && mkdir -p storage/leads storage/logs \
    && chown -R www-data:www-data storage \
    && chmod -R 775 storage

EXPOSE 80

HEALTHCHECK --interval=30s --timeout=5s --start-period=10s --retries=3 \
  CMD php -r "exit(@file_get_contents('http://127.0.0.1/health') === false ? 1 : 0);"
