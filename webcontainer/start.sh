#!/bin/bash

PHPIP=$(grep "php" /etc/hosts | head -1 | awk '{print $1}')

sed -i "s/{{php}}/${PHPIP}/g" /etc/nginx/sites-enabled/site.conf

supervisord -n -c /etc/supervisor/supervisord.conf
