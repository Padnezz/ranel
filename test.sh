for f in $(find ./src -name '*.php')
do
	php -f $f > /dev/null
done
