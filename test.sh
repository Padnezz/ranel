

for ff in $(find ./src -path ./src/include -prune -o -name '*.php')
do
	php -f $ff > /dev/null
done