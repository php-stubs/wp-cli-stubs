<?php

return \StubsGenerator\Finder::create()
    ->in('source/vendor/wp-cli/wp-cli/php')
    ->notPath('ComposerIO.php')
    ->notPath('PackageManagerEventSubscriber.php')
    ->notPath('utils.php')
    ->sortByName()
;
