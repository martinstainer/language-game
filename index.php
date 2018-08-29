<?php

require __DIR__ . '/src/bootstrap.php';

/** @var \MartinStainer\LanguageGame $game */
$game = $container->getByType(\MartinStainer\LanguageGame::class);

echo 'eagle -> ';
echo $game->play('eagle');
echo '<br/>';
echo 'star -> ';
echo $game->play('star');
echo '<br/>';
echo 'three -> ';
echo $game->play('three');
echo '<br/>';
echo 'question -> ';
echo $game->play('question');
echo '<br/>';
echo 'dough -> ';
echo $game->play('dough');
echo '<br/>';
echo 'beast -> ';
echo $game->play('beast');
echo '<br/>';