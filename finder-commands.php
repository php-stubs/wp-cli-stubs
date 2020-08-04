<?php

return \StubsGenerator\Finder::create()
    ->in('source/vendor/wp-cli')
    ->append(\StubsGenerator\Finder::create()->files()->depth('< 2')->in(['source/vendor/wp-cli/*/src']))
    ->notPath('tests')
    ->sortByName()
;
