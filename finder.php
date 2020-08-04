<?php

return \StubsGenerator\Finder::create()
    ->in('source/vendor/wp-cli')
    ->append(\StubsGenerator\Finder::create()->files()->depth('< 4')->in(['source/vendor/wp-cli']))
    ->notPath('ComposerIO.php')
    ->notPath('PackageManagerEventSubscriber.php')
    ->notPath('wp-config-transformer')
    ->notPath('php-cli-tools')
    ->notPath('mustangostang-spyc')
    ->notPath('wp-cli-tests')
    ->notPath('tests')
    ->sortByName()
;
