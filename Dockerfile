FROM php:alpine
COPY . /app 
WORKDIR /app
CMD ["php", "index.php"]