<?php

namespace Larabelles\TweetComponent\Tests;

use Spatie\Snapshots\MatchesSnapshots;

class TweetComponentTest extends TestCase
{
	use MatchesSnapshots;

	/** @test */
	public function it_renders() : void
	{
		$html = $this->blade('<x-tweet id="1372946230783934465" />');

		$this->assertMatchesHtmlSnapshot($html);

	}
}
