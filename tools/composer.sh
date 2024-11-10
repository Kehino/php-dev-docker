#!/bin/bash

docker compose run --rm --interactive --tty --user $(id -u):$(id -g) -e COMPOSER_CACHE_DIR=/project-root/.composer-cache -v $(pwd):/project-root --workdir /project-root php composer $*
