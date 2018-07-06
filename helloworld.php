<?php

$latte = (new Latte\Engine)
    ->setTempDirectory($cacheDir)
    ->setAutoRefresh(true);

$latte->render(__DIR__ . '/templates/hello-world.latte');
