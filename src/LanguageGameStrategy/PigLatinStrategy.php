<?php

namespace MartinStainer;


use Nette\InvalidArgumentException;



class PigLatinStrategy implements ILanguageGameStrategyInterface
{

	CONST SUFFIX = 'ay';

	/**
	 * @var array
	 */
	private static $vovels = [
		'a', 'e', 'i', 'o', 'u'
	];

	/**
	 * @var array
	 */
	private static $consonants = [
		'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'x', 'y'
	];

	/**
	 * @var array
	 */
	private static $consonantSounds = [
		'qu' // more to be filled
	];



	/**
	 * Translate english word to pig latin
	 *
	 * @param string $word
	 * @throws InvalidArgumentException
	 * @return string
	 */
	public function translate(string $word): string
	{
		if (strlen($word) < 2) {
			throw new InvalidArgumentException('Argument has to be a word.');
		}
		/** @var string $firstLetter */
		$firstLetter = $word[0];

		if (in_array($firstLetter, self::$vovels, TRUE)) {
			return $word . '-' . self::SUFFIX;
		} else if (in_array($firstLetter, self::$consonants, TRUE)) {
			/** @var string $preSuffix */
			$preSuffix = '';
			/** @var int $charPosition */
			$charPosition = 0;
			while ( // get consonant sounds or consonant cluster
				in_array($word[$charPosition], self::$consonants, TRUE) ||
				in_array($preSuffix . $word[$charPosition], self::$consonantSounds, TRUE)
			) {
				$preSuffix .= $word[$charPosition++];
			}

			return substr($word, $charPosition) . '-' . $preSuffix . self::SUFFIX;
		}

		return '';
	}

}