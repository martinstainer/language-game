<?php

namespace MartinStainer;


interface ILanguageGameStrategyInterface
{

	public function translate(string $word): string;

}