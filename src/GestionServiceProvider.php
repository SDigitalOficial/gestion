<?php

namespace DigitalsiteSaaS\Gestion;

use Illuminate\Support\ServiceProvider;

/**
* 
*/
class GestionServiceProvider extends ServiceProvider
{
	
	 public function register()
	{
		$this->app->bind('gestion', function($app) {
			return new Gestion;

		});
	}

	public function boot()
	{
		require __DIR__ . '/Http/routes.php';


		$this->loadViewsFrom(__DIR__ . '/../views', 'gestion');

		$this->publishes([

			__DIR__ . '/migrations/2015_07_25_000000_create_usuario_table.php' => base_path('database/migrations/2015_07_25_000000_create_usuario_table.php'),

			]);


	}

}
