#!/bin/bash
#
# Generate WP-CLI stubs.
#

GENERATE_STUBS_COMMAND="vendor/bin/generate-stubs"

# Check plugin
if [ ! -r ./php/wp-cli/php/wp-cli.php ]; then
    cd ./php
    echo "WP CLI downloading in progress..." 1>&2
    git clone git://github.com/wp-cli/wp-cli.git
    rm -v ./wp-cli/php/WP_CLI/ComposerIO.php
    rm -v ./wp-cli/php/WP_CLI/PackageManagerEventSubscriber.php
    git clone git://github.com/wp-cli/admin-command.git
    git clone git://github.com/wp-cli/cache-command.git
    git clone git://github.com/wp-cli/checksum-command.git
    git clone git://github.com/wp-cli/config-command.git
    git clone git://github.com/wp-cli/core-command.git
    git clone git://github.com/wp-cli/cron-command.git
    git clone git://github.com/wp-cli/db-command.git
    git clone git://github.com/wp-cli/dist-archive-command.git
    git clone git://github.com/wp-cli/doctor-command.git
    git clone git://github.com/wp-cli/embed-command.git
    git clone git://github.com/wp-cli/entity-command.git
    git clone git://github.com/wp-cli/eval-command.git
    git clone git://github.com/wp-cli/export-command.git
    git clone git://github.com/wp-cli/extension-command.git
    git clone git://github.com/wp-cli/find-command.git
    git clone git://github.com/wp-cli/i18n-command.git
    git clone git://github.com/wp-cli/import-command.git
    git clone git://github.com/wp-cli/language-command.git
    git clone git://github.com/wp-cli/maintenance-mode-command.git
    git clone git://github.com/wp-cli/media-command.git
    git clone git://github.com/wp-cli/package-command.git
    git clone git://github.com/wp-cli/php-cli-tools.git
    git clone git://github.com/wp-cli/profile-command.git
    git clone git://github.com/wp-cli/rewrite-command.git
    git clone git://github.com/wp-cli/role-command.git
    git clone git://github.com/wp-cli/scaffold-command.git
    git clone git://github.com/wp-cli/scaffold-package-command.git
    git clone git://github.com/wp-cli/search-replace-command.git
    git clone git://github.com/wp-cli/server-command.git
    git clone git://github.com/wp-cli/shell-command.git
    git clone git://github.com/wp-cli/super-admin-command.git
    git clone git://github.com/wp-cli/widget-command.git
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
"$GENERATE_STUBS_COMMAND" --functions --classes --interfaces --traits --out=wp-cli-stubs.php ./php
