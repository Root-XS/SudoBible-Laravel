<?php

namespace RootXS;

use Illuminate\Support\ServiceProvider;

/**
 * SudoBible service provider for Laravel applications
 */
class SudoBibleServiceProvider extends ServiceProvider
{

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Bootstrap the configuration
	 *
	 * @return void
	 */
	public function boot()
	{
		$strSource = realpath(__DIR__ . '/../config/sudobible.php');

		if (class_exists('Illuminate\Foundation\Application', false))
			$this->publishes([$strSource => config_path('sudobible.php')]);

		$this->mergeConfigFrom($strSource, 'sudobible');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('sudobible', function ($app) {
			return new SudoBible($app['config']->get('sudobible'));
		});

		$this->app->alias('sudobible', 'RootXS\SudoBible');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['sudobible', 'RootXS\SudoBible'];
	}

}
