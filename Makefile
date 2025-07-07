
run:
	@php bin/cli.php

test:
	@vendor/bin/phpunit tests

lint:
	@vendor/bin/phpcs src

format:
	@vendor/bin/phpcbf src

clean:
	@rm -rf vendor
	@rm -rf composer.lock
	@rm -rf tests/_output

install:
	@composer install
	@composer dump-autoload
