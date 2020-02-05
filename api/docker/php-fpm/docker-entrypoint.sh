#!/bin/bash
set -e

echo "[ ****************** ] Starting Endpoint of Application"

if [ "$UPDATE_COMPOSER_DEPENDENCIES" == "true" ]; then
	echo "[ ****************** ] Updating composer dependencies."
    composer update --prefer-source --no-interaction --no-dev
fi

#if  ! [ -e "/application/.env" ] ; then
    echo "[ ****************** ] Copying sample application configuration to real one"
    cp /application/.env.example /application/.env

    sed -i "s/@@APP_ENV@@/$APP_ENV/g" /application/.env
    sed -i "s/@@APP_DEBUG@@/$APP_DEBUG/g" /application/.env
    sed -i "s/@@APP_KEY@@/$APP_KEY/g" /application/.env
    sed -i "s/@@DB_HOST@@/$DB_HOST/g" /application/.env
    sed -i "s/@@DB_PORT@@/$DB_PORT/g" /application/.env
    sed -i "s/@@DB_DATABASE@@/$DB_DATABASE/g" /application/.env
    sed -i "s/@@DB_USERNAME@@/$DB_USERNAME/g" /application/.env
    sed -i "s/@@DB_PASSWORD@@/$DB_PASSWORD/g" /application/.env
#fi

echo "[ ****************** ] Ending Endpoint of Application"

php artisan migrate && php artisan db:seed

if [ "$USE_PHP_FPM" == "true" ]; then
    set -- php-fpm
fi

exec "$@"
