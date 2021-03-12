<?php

namespace Larabelles\TweetComponent\Tests;

class TweetComponentTest extends TestCase
{
	/** @test */
	public function it_renders() : void
	{
		$html = $this->blade('<x-tweet />');

		file_put_contents(__DIR__.'/tweet.html', $html);
	}
}
