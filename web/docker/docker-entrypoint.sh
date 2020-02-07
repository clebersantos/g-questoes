#!/bin/bash
set -e

#if  ! [ -e "/home/node/app/.env" ] ; then
    echo "[ ****************** ] Copiando '.env.example' para '.env'"
    cp /home/node/app/.env.example /home/node/app/.env

    # sed -i "s/@@VUE_APP_API_HOST@@/$VUE_APP_API_HOST/g" /home/node/app/.env
    # sed -i "s/@@VUE_APP_API_PORT@@/$VUE_APP_API_PORT/g" /home/node/app/.env
#fi

exec "$@"
