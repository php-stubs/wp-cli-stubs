#!/bin/bash
#
# Generate WP-CLI stubs.
#

GENERATE_STUBS_COMMAND="vendor/bin/generate-stubs"

# Check plugin
if [ ! -r ./source/vendor/wp-cli/wp-cli/php/wp-cli.php ]; then
    cd ./source
    echo "WP CLI downloading in progress..." 1>&2
    composer update
    cd ../
fi

# Generate stubs
if hash generate-stubs 2>/dev/null; then
    GENERATE_STUBS_COMMAND="generate-stubs"
elif hash generate-stubs.phar 2>/dev/null; then
    GENERATE_STUBS_COMMAND="generate-stubs.phar"
elif [ ! -x vendor/bin/generate-stubs ]; then
    rm composer.json composer.lock
    composer require --no-interaction --update-no-dev --prefer-dist --ignore-platform-reqs \
        giacocorsiglia/stubs-generator
fi
"$GENERATE_STUBS_COMMAND" --finder=finder.php \ --functions --classes --interfaces --traits --out=wp-cli-stubs.php ./source
