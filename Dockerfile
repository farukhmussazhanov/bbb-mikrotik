# Указываем базовый образ
FROM php:7.4-apache
# Копируем ваш php.ini внутрь контейнера
#COPY php.ini /usr/local/etc/php/php.ini
# Включаем модуль mod_rewrite
RUN a2enmod rewrite
# Устанавливаем необходимые зависимости для GD и sockets
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libsocket++-dev \
    unzip \
    git
# Устанавливаем и активируем расширение GD
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

# Устанавливаем и активируем расширение sockets pdo pdo_mysql
RUN docker-php-ext-install sockets pdo pdo_mysql
# Устанавливаем Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Копируем файл composer.json и composer.lock
#COPY composer.json composer.lock /var/www/html/

# Устанавливаем зависимости composer
#RUN composer install --no-interaction --no-plugins --no-scripts
# Копируем содержимое проекта в контейнер
COPY . /var/www/html
# Указываем рабочую директорию
WORKDIR /var/www/html
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
#COPY php.ini /usr/local/etc/php/php.ini
#RUN service apache2 restart

EXPOSE 80