#!/usr/bin/env bash

HEADER=$'/**\n * Generated stub declarations for WP-CLI\n * @see https://wp-cli.org/\n * @see https://github.com/php-stubs/wp-cli-stubs\n */'

FILE="wp-cli-stubs.php"
FILE_PKGS="wp-cli-commands-stubs.php"
FILE_I18N="wp-cli-i18n-stubs.php"
FILE_TOOLS="wp-cli-tools-stubs.php"

set -e

test -f "$FILE"
test -f "$FILE_PKGS"
test -f "$FILE_I18N"
test -d "source/vendor/wp-cli"

# Download dependencies
if [ ! -d vendor ]; then
    composer update --no-interaction
fi

# Fix invalid docblocks of WP-CLI 2.12.0 that are already fixed in the WP-CLI repositories.
for FILE_META in WP_CLI/CommandWithMeta.php Comment_Meta_Command.php Post_Meta_Command.php Site_Meta_Command.php Term_Meta_Command.php; do
    sed -i -e 's#^\(\s*\* @param\) int$#\1 string|int $object_id#' "source/vendor/wp-cli/entity-command/src/${FILE_META}"
done
sed -i -e 's#^\(\s*\* @param\) array$#\1 array $args#' source/vendor/wp-cli/entity-command/src/User_Meta_Command.php
sed -i -e 's#^\(\s*\* @param\) object$#\1 string $file Plugin file name.#' source/vendor/wp-cli/extension-command/src/Plugin_Command.php
sed -i -e '/^\s*\* @param string \$context$/{n;s#^\(\s*\* @param array\)$#\1 $packages#;n;s#^\(\s*\* @param array\)$#\1 $assoc_args#}' source/vendor/wp-cli/package-command/src/Package_Command.php
sed -i -e 's#^\(\s*\* @param\) mixed$#\1 mixed $value#' source/vendor/wp-cli/widget-command/src/Widget_Command.php
sed -i -e '/^\s*\* @param string \$type$/{n;s#^\(\s*\* @param\) string \$type$#\1 array<array{name: string, value: mixed, type: string}> $values#}' source/vendor/wp-cli/config-command/src/Config_Command.php

# wp-cli/wp-cli
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE"

# Commands
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder-commands.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE_PKGS"

# wp-cli/i18n-command
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder-i18n.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE_I18N"

# wp-cli/php-cli-tools
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder-tools.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE_TOOLS"
