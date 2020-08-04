<?php

return \StubsGenerator\Finder::create()
    ->in('source/wp-cli/vendor/wp-cli/wp-cli/php')
    ->notPath('compat.php')
    // These two need composer/composer
    ->notPath('WP_CLI/ComposerIO.php')
    ->notPath('WP_CLI/PackageManagerEventSubscriber.php')
    ->sortByName()
;
