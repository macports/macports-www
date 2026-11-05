all: lint

SHELL = bash
PHP ?= php
DESTDIR ?= output/

lint:
	@error=0; trap "error=$$((error|1))" ERR;\
	for file in $$(find . -type f -name '*.php' -or -name '*.inc'); do\
		file=$${file#./};\
		echo "==> $$file:";\
		$(PHP) -l $$file;\
		echo;\
	done;\
	exit $$error

build:
	for file in $$(find *.php -type f -name '*.php'); do \
		file=$${file#./}; \
		install -m 0755 -d "$(DESTDIR)/$$(dirname "$$file")"; \
		echo "==> $$file"; \
		$(PHP) -f "$$file" >"$(DESTDIR)/$$file"; \
		chmod 644 "$(DESTDIR)/$$file"; \
	done
	find *.ico *.css img/ -type f -exec \
		sh -c 'install -m 0755 -d "$$1/$$(dirname "$$2")" && install -m 0644 "$$2" "$$1/$$2"' -- "$(DESTDIR)" {} \;
