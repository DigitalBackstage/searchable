PHPSPEC=vendor/bin/phpspec

test: $(PHPSPEC)
	$(PHPSPEC) run

.PHONY: test

$(PHPSPEC): vendor/autoload.php

vendor/autoload.php:
	composer install
