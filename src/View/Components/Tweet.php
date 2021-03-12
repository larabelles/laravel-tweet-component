<?php

namespace Larabelles\TweetComponent\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tweet extends Component
{
	public function render() : View
	{
		return view('tweet-component::components.tweet');
	}
}