<?php

namespace Larabelles\TweetComponent;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use Larabelles\TweetComponent\View\Components\Tweet;

class TweetComponentServiceProvider extends ServiceProvider
{
	public function register() : void
	{

	}

	public function boot() : void
	{
		$this->loadViewsFrom(__DIR__.'/../resources/views', 'tweet-component');

		if( $this->app->runningInConsole() ) {
			$this->publishes([
				__DIR__.'/../resources/views' => resource_path('views/vendor/tweet-component')
			], 'views');
		}

		// @todo load ViewComponentsAs

		$this->callAfterResolving(BladeCompiler::class, static function (BladeCompiler $blade): void {
			$blade->component(Tweet::class, 'tweet');
		});
	}
}