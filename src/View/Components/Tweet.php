<?php

namespace Larabelles\TweetComponent\View\Components;

use DG\Twitter\Twitter;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tweet extends Component
{
	protected string $id;
	protected Twitter $twitter;

	public function __construct(string $id, Twitter $twitter)
	{
		$this->id = $id;
		$this->twitter = $twitter;
	}

	public function render() : View
	{
		return view('tweet-component::components.tweet', $this->retrieveData());
	}

	protected function retrieveData() : array
	{
		return collect($this->twitter->request("statuses/show/{$this->id}", 'GET'))->toArray();
	}
}