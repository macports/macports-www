all: lint

lint:
	@error=0; trap "error=$$((error|1))" ERR;\
	for file in $$(find . -name '*.php' -or -name '*.inc'); do\
		file=$${file#./};\
		echo "==> $$file:";\
		php -l $$file;\
		echo;\
	done;\
	exit $$error
