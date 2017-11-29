for f in $(find ./src/include -name '*.php')
do
	php -f $f
done

for ff in $(find ./src -name '*.php -not -path "*src/include"')
do
	php -f $ff > /dev/null
done