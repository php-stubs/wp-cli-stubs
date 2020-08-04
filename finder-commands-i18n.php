<?php

return \StubsGenerator\Finder::create()
    ->in('source/vendor/wp-cli/i18n-command/src')
    ->notPath('tests')
    ->notPath('CommandNamespace')
    ->in('source/vendor/gettext/gettext')
    ->sortByName()
;
