#!/bin/bash
set -e

echo "[ ****************** ] Starting Endpoint of Application"

if [ "$UPDATE_COMPOSER_DEPENDENCIES" == "true" ]; then
	echo "[ ****************** ] composer dependencies."
    composer install --ignore-platform-reqs --no-interaction --verbose --no-suggest --no-dev
fi

if  ! [ -e "/application/.env" ] ; then
     echo "[ ****************** ] Copying sample application configuration to real one"
     cp /application/.env.example /application/.env
fi

echo "[ ****************** ] Ending Endpoint of Application"

php artisan migrate:refresh && php artisan db:seed

if [ "$USE_PHP_FPM" == "true" ]; then
    set -- php-fpm
fi

exec "$@"
