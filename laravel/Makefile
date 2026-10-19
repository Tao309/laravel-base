test:
	bin/phpunit
cover:
	XDEBUG_MODE=coverage bin/phpunit  --coverage-html="coverage"
php:
	docker exec -it laravel-php bash
build:
	docker-compose up -d --build
up:
	docker-compose up -d
debug-build:
	docker compose -f docker-compose.debug.yml up -d --build
debug:
	docker compose -f docker-compose.debug.yml up -d
stop:
	docker compose stop
down:
	docker compose down
cs-check:
	vendor/bin/php-cs-fixer check && vendor/bin/phpcs ./src
cs-fix:
	vendor/bin/php-cs-fixer fix && vendor/bin/phpcbf ./src
cache:
	php bin/console doctrine:cache:clear-metadata && php bin/console cache:clear
