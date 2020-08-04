<?php

return \StubsGenerator\Finder::create()
    ->in('source/vendor/wp-cli/*/src')
    ->notPath('tests')
    ->notPath('CommandNamespace')
    ->sortByName()
;
