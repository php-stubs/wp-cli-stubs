<?php

return \StubsGenerator\Finder::create()
    ->in('source/vendor/wp-cli/wp-cli/php')
    // Compatiblility code
    ->notPath('compat.php')
    ->notPath('wp-settings-cli.php')
    // FeedbackMethodTrait is used from ->notPath('WP_CLI/Compat')
    // These two need composer/composer
    ->notPath('WP_CLI/ComposerIO.php')
    ->notPath('WP_CLI/PackageManagerEventSubscriber.php')
    ->sortByName()
;
