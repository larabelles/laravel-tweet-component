<?php

namespace Larabelles\TweetComponent;

use DG\Twitter\Twitter;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use Larabelles\TweetComponent\View\Components\Tweet;

class TweetComponentServiceProvider extends ServiceProvider
{
	public function register() : void
	{
		$this->app->singleton(Twitter::class, function (): Twitter {
			return new Twitter(
				config('services.twitter.consumer_key'),
				config('services.twitter.consumer_secret'),
				config('services.twitter.access_token'),
				config('services.twitter.access_token_secret')
			);
		});
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