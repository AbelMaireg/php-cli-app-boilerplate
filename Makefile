
.PHONY: run test lint format clean install

run:
	@composer start

test:
	@composer test

lint:
	@composer lint

format:
	@composer format

clean:
	@rm -rf vendor
	@rm -rf composer.lock
	@rm -rf tests/_output

install:
	@composer install
	@composer dump-autoload
