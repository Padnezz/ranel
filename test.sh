#!/bin/bash
php_error="false"
for f in $(find ./src -name '*.php')
do
	php -f $f > /dev/null
	if [ $? -eq 255 ]; then
		php_error="true"
	fi
done
if [ "$php_error" = "true" ]; then
	exit 255
fi