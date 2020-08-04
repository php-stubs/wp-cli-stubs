<?php

return \StubsGenerator\Finder::create()
    ->in('source/vendor/wp-cli')
    ->append(\StubsGenerator\Finder::create()->files()->depth('< 5')->in(['source/vendor/wp-cli/*-command']))
    ->notPath('tests')
    ->sortByName()
;
