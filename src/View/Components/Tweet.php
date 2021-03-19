<?php

namespace Larabelles\TweetComponent\View\Components;

use DG\Twitter\Twitter;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tweet extends Component
{
	protected string $id;

	public function __construct(string $id)
	{
		$this->id = $id;
	}

	public function render() : View
	{
		return view('tweet-component::components.tweet', $this->retrieveData());
	}

	protected function retrieveData() : array
	{
		$twitter = new Twitter(env('TWITTER_CONSUMER_KEY'), env('TWITTER_CONSUMER_SECRET'), env('TWITTER_ACCESS_TOKEN'), env('TWITTER_ACCESS_TOKEN_SECRET'));

		return collect($twitter->request("statuses/show/{$this->id}", 'GET'))->dump()->toArray();
	}
}