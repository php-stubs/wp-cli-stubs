<?php

return \StubsGenerator\Finder::create()
    ->in('source/vendor/wp-cli/wp-cli')
    ->append(\StubsGenerator\Finder::create()->files()->depth('< 4')->in(['source/vendor/wp-cli/wp-cli/php']))
    ->notPath('ComposerIO.php')
    ->notPath('PackageManagerEventSubscriber.php')
    ->notPath('tests')
    ->sortByName()
;
