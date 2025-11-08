FROM php:8.1-apache

# Set working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    curl \
    libcurl4-openssl-dev \
    libssl-dev \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install curl

# Enable Apache modules
RUN a2enmod rewrite

# Copy application files
COPY api.php /var/www/html/
COPY proxy.txt /var/www/html/

# Create cookie file with proper permissions
RUN touch /var/www/html/cookie.txt && \
    chown www-data:www-data /var/www/html/cookie.txt && \
    chmod 666 /var/www/html/cookie.txt

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Create health check
HEALTHCHECK --interval=30s --timeout=3s --start-period=5s --retries=3 \
    CMD curl -f http://localhost/ || exit 1

# Expose port
EXPOSE 80

# Set labels
LABEL maintainer="Your Name <your.email@example.com>"
LABEL description="Credit Card Checker API"
LABEL version="1.0"
