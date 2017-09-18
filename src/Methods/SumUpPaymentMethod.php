<?php
/**
 * author: ninoplettenberg
 */
namespace SumUp\Methods;


use SumUp\Helper\SumUpHelper;
use SumUp\Helper\StringHelper;
use Plenty\Modules\Payment\Method\Contracts\PaymentMethodService;
use Plenty\Plugin\ConfigRepository;

class SumUpPaymentMethod extends PaymentMethodService
{
	private $configRepository;

	public function __construct(ConfigRepository $configRepository)
	{
		$this->configRepository = $configRepository;
	}

	public function isActive():bool
	{
		return true;
	}

	public function getName():string
	{
		return SumUpHelper::PLUGIN_NAME;
	}
}