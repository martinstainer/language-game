<?php

namespace MartinStainer;


class LanguageGame
{

	/** @var ILanguageGameStrategyInterface $game */
	private $game;



	/**
	 * LanguageGame constructor.
	 *
	 * @param ILanguageGameStrategyInterface $gameStrategy
	 */
	public function __construct(ILanguageGameStrategyInterface $gameStrategy)
	{
		$this->game = $gameStrategy;
	}



	/**
	 * @param string $input
	 * @return string
	 */
	public function play(string $input): string
	{
		return $this->game->translate($input);
	}

}