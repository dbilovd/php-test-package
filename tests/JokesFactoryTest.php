<?php

namespace Dbilovd\PHPTestPackage\Tests;

use Dbilovd\PHPTestPackage\JokeFactory;
use Dbilovd\PHPTestPackage\Jokes\JokeContract;
use PHPUnit\Framework\TestCase;

class JokesFactoryTest extends TestCase
{
	/** @test */
	public function it_returns_an_instance_of_a_joke_class()
	{
		$joke = (new JokeFactory())->makeJoke();
		$this->assertTrue($joke instanceof JokeContract);
	}

	/** @test */
	public function it_returns_a_random_joke()
	{
		$joke = (new JokeFactory())->makeJoke();
		$this->assertTrue(is_string($joke->joke()));
	}
}
