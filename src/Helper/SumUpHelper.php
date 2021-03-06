<?php
/**
 * author: stefankirchner
 */
namespace SumUp\Helper;


use Plenty\Modules\Payment\Method\Contracts\PaymentMethodRepositoryContract;
use SumUp\Methods\SumUpAmericanExpress;
use SumUp\Methods\SumUpApplePayPaymentMethod;
use SumUp\Methods\SumUpMaestroPaymentMethod;
use SumUp\Methods\SumUpMastercardPaymentMethod;
use SumUp\Methods\SumUpUnknownPaymentMethod;
use SumUp\Methods\SumUpVisaElectronPaymentMethod;
use SumUp\Methods\SumUpVisaPaymentMethod;
use SumUp\Methods\SumUpVpayPaymentMethod;

class SumUpHelper
{
	const PLUGIN_NAME = 'SumUp';
	const PLUGIN_KEY = 'plenty_sumup';
	
	const NO_PAYMENTMETHOD_FOUND = 'no_paymentmethod_found';
	
	private $paymentMethodRepository;

	public static $paymentMethods = [
		'UNKNOWN'			=> 'SumUp Unknown',
		'AMEX'				=> 'SumUp American Express',
		'APPLE_PAY'			=> 'SumUp Apple Pay',
		'MAESTRO'			=> 'SumUp Maestro',
		'MASTERCARD'		=> 'SumUp Mastercard',
		'VISA'				=> 'SumUp Visa',
		'VISA_ELECTRON'		=> 'SumUp Visa Electron',
		'VPAY'				=> 'SumUp V PAY'
		];

    public static $paymentMethodsClasses = [
        'UNKNOWN'			=> SumUpUnknownPaymentMethod::class,
        'AMEX'				=> SumUpAmericanExpress::class,
        'APPLE_PAY'			=> SumUpApplePayPaymentMethod::class,
        'MAESTRO'			=> SumUpMaestroPaymentMethod::class,
        'MASTERCARD'		=> SumUpMastercardPaymentMethod::class,
        'VISA'				=> SumUpVisaPaymentMethod::class,
        'VISA_ELECTRON'		=> SumUpVisaElectronPaymentMethod::class,
        'VPAY'				=> SumUpVpayPaymentMethod::class
    ];
	
	public function __construct(PaymentMethodRepositoryContract $paymentMethodRepositoryContract)
	{
		$this->paymentMethodRepository = $paymentMethodRepositoryContract;
	}
	
	public function createMopIfNotExist()
	{
		foreach (self::$paymentMethods as $paymentKey => $paymentName)
		{
			if ($this->getPaymentMethod($paymentKey) == self::NO_PAYMENTMETHOD_FOUND)
			{
				$paymentMethodData = array(
					'pluginKey' => self::PLUGIN_KEY,
					'paymentKey' => $paymentKey,
					'name' => $paymentName
				);
				
				$this->paymentMethodRepository->createPaymentMethod($paymentMethodData);
			}
		}
	}
	
	private function getPaymentMethod($method)
	{
		$paymentMethods = $this->paymentMethodRepository->allForPlugin(self::PLUGIN_KEY);
		
		if(!is_null($paymentMethods))
		{
			foreach ($paymentMethods as $paymentMethod)
			{
				if ($paymentMethod->paymentKey == $method)
				{
					return $paymentMethod->id;
				}
			}
		}
		
		return self::NO_PAYMENTMETHOD_FOUND;
	}
}
