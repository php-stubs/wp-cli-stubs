<?php

return \StubsGenerator\Finder::create()
    ->in('source/vendor/wp-cli')
    ->append(\StubsGenerator\Finder::create()->files()->depth('< 4')->in(['source/vendor/wp-cli']))
    ->sortByName()
;
