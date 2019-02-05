#!/bin/bash

THEMEPATH=$1
cd "$THEMEPATH"
[ -f pattern-lab/composer.json ] && echo "Node libraries pulled from cache. Skipping..." || npm install --unsafe-perm
./node_modules/.bin/gulp build
