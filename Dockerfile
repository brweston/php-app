FROM php:7.4-cli

COPY . .

WORKDIR .
CMD ["php", "./index.php"]
