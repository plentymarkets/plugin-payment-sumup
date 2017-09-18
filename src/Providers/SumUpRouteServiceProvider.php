<?php
/**
 * author: stefankirchner
 */
namespace SumUp\Providers;


use Plenty\Plugin\Routing\Router;
use Plenty\Plugin\RouteServiceProvider;

class SumUpRouteServiceProvider extends RouteServiceProvider
{
	/**
	 * @param Router $router
	 */
	public function map(Router $router)
	{
		$router->get('sumup/configuration', [
			'middleware' => 'oauth',
			'uses' => 'SumUp\Controllers\SettingsController@configuration'
		]);
	}
}