#!/usr/bin/env bash

HEADER=$'/**\n * Generated stub declarations for WP-CLI\n * @see https://wp-cli.org/\n * @see https://github.com/php-stubs/wp-cli-stubs\n */'

FILE="wp-cli-stubs.php"
FILE_PKGS="wp-cli-commands-stubs.php"
FILE_I18N="wp-cli-i18n-stubs.php"

set -e

test -f "$FILE"
test -f "$FILE_PKGS"
test -f "$FILE_I18N"

# Check wp-cli
if [ ! -r ./source/vendor/ ]; then
    cd ./source
    echo "WP CLI downloading in progress..." 1>&2
    composer update
    cd ../
fi

# Download Stubs-generator
if [ ! -r ./vendor/ ]; then
    composer update
fi

# Exclude globals.
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --force \
    --finder=finder.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE"

# Packages.
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --force \
    --finder=finder-commands.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE_PKGS"

# Packages.
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --force \
    --finder=finder-i18n.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE_I18N"
