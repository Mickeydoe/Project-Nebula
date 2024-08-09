# Use the official PHP image with Apache
FROM php:8.1-apache

# Copy the HTML, PHP, and CSS files into the web server directory
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Expose port 80 to be able to access the web server
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]