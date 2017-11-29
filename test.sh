for f in $(find ./src/include -name '*.php')
do
	php -f $f
done

for ff in $(find ./src -path ./src/include -prune -o -name '*.php')
do
	php -f $ff > /dev/null
done