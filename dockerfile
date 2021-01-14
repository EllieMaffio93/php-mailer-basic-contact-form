FROM php:7.4-cli
COPY . /usr/src/php-mailer-contact-form
WORKDIR /usr/src/php-mailer-contact-form
CMD [ "php", "./index.php.php" ]