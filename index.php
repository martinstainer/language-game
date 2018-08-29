<?php

require __DIR__ . '/src/bootstrap.php';

/** @var \MartinStainer\LanguageGame $game */
$game = $container->getByType(\MartinStainer\LanguageGame::class);
echo $game->play('eagle');

