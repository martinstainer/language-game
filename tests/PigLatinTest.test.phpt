<?php

require __DIR__ . '/bootstrap.php';

Tester\Environment::setup();

use Tester\Assert;
use Nette\InvalidArgumentException;

/** @var \MartinStainer\LanguageGame $game */
$game = $container->getByType(\MartinStainer\LanguageGame::class);

Assert::same('east-bay', $game->play('beast'));
Assert::same('ough-day', $game->play('dough'));
Assert::same('appy-hay', $game->play('happy'));
Assert::same('estion-quay', $game->play('question'));
Assert::same('ar-stay', $game->play('star'));
Assert::same('ee-thray', $game->play('three'));
Assert::same('eagle-ay', $game->play('eagle'));

