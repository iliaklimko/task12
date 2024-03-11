FROM php:8.1-fpm

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/html/
# Set working directory
WORKDIR /var/www/html
# Install dependencies
RUN apt-get update \
    && apt-get upgrade -y \
    && apt-get install -y --no-install-recommends \
        ca-certificates \
        curl \
        sqlite3 \
        memcached \
        libzip-dev \
        libpng-dev \
        libmcrypt-dev \
        zip \
        libcurl4-openssl-dev \
        libedit-dev \
        libssl-dev \
        libonig-dev \
        libpq-dev \
        libxml2-dev \
        xz-utils \
        libsqlite3-dev \
        git \
        vim \
        nano \
        net-tools \
        pkg-config \
        iputils-ping
# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www
# Copy existing application directory contents
COPY . /var/www/html
# Copy existing application directory permissions
COPY --chown=www:www . /var/www/html
# Change current user to www
USER www
# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
