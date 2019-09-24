<?php

namespace Dbilovd\PHPTestPackage\Jokes;

interface JokeContract
{
	/**
	 * Return a random joke
	 *
	 * @return String A random joke
	 */
	public function joke();
}