<?php

namespace Larabelles\TweetComponent\Tests;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Larabelles\TweetComponent\TweetComponentServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
	protected $loadEnvironmentVariables = true;

	protected function resolveApplication()
	{
		$app = parent::resolveApplication();

		$app->useEnvironmentPath(__DIR__.'/..');

		return $app;
	}

	protected function getPackageProviders($app) : array
	{
		return [
			TweetComponentServiceProvider::class
		];
	}

	protected function blade(string $template, array $data = []): string
	{
		$tempDirectory = sys_get_temp_dir();

		if (! in_array($tempDirectory, View::getFinder()->getPaths())) {
			View::addLocation(sys_get_temp_dir());
		}

		$tempFile = tempnam($tempDirectory, 'laravel-blade').'.blade.php';

		file_put_contents($tempFile, $template);

		return view(Str::before(basename($tempFile), '.blade.php'), $data)->render();
	}

	protected function setUp(): void
	{
		parent::setUp();
		config()->set('services.twitter', [
			'consumer_key' => env('TWITTER_CONSUMER_KEY'),
			'consumer_secret' => env('TWITTER_CONSUMER_SECRET'),
			'access_token' => env('TWITTER_ACCESS_TOKEN'),
			'access_token_secret' => env('TWITTER_ACCESS_TOKEN_SECRET'),
		]);
	}
}