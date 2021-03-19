<?php

namespace Larabelles\TweetComponent\Tests;

class TweetComponentTest extends TestCase
{
	/** @test */
	public function it_renders() : void
	{
		$html = $this->blade('<x-tweet id="1372946230783934465" />');

		file_put_contents(__DIR__.'/tweet.html', $html);
	}
}
