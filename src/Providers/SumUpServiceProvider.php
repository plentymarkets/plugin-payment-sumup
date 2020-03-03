<?php
/**
 * author: stefankirchner
 */
namespace SumUp\Providers;


use SumUp\Helper\SumUpHelper;
use SumUp\Methods\SumUpPaymentMethod;
use Plenty\Modules\Payment\Method\Contracts\PaymentMethodContainer;
use Plenty\Plugin\ServiceProvider;

class SumUpServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->getApplication()->register(SumUpRouteServiceProvider::class);
	}
	
	public function boot(SumUpHelper $helper, PaymentMethodContainer $container)
	{
		//Create new payment methods
		$helper->createMopIfNotExist();
		
		//Register new PaymentMethods
		foreach (SumUpHelper::$paymentMethods as $paymentKey => $paymentName)
		{
		    if(isset(SumUpHelper::$paymentMethodsClasses[$paymentKey])){
                $container->register(SumUpHelper::PLUGIN_KEY.'::'.$paymentKey,
                    SumUpHelper::$paymentMethodsClasses[$paymentKey],
                    []
                );
            }
		}
	}
}
