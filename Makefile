.DEFAULT_GOAL := help
.PHONY: help

include .env

help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

up:
	./vendor/bin/sail up -d --remove-orphans

stop:
	./vendor/bin/sail stop

kill:
	./vendor/bin/sail kill

build:
	./vendor/bin/sail build

install:
	make kill
	make up
	./vendor/bin/sail composer install
	./vendor/bin/sail npm install
	./vendor/bin/sail npm run build
	make migrate
	make db-seed

db-seed:
	./vendor/bin/sail artisan db:seed

migrate:
	./vendor/bin/sail artisan migrate
	