<?php

return \StubsGenerator\Finder::create()
    ->in('source/vendor/wp-cli/wp-cli/php')
    ->notPath('ComposerIO.php')
    ->notPath('PackageManagerEventSubscriber.php')
    ->notPath('utils-wp.php')
    ->notPath('compat.php')
    ->sortByName()
;
