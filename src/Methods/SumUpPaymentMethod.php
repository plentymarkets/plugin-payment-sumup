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

    public function isActive(): bool
    {
        return false;
    }

    public function getName(): string
    {
        return SumUpHelper::PLUGIN_NAME;
    }

    /**
     * Check if this payment method should be searchable in the backend
     * e.g. select in the order filter
     *
     * @return bool
     */
    public function isBackendSearchable(): bool
    {
        return true;
    }

    /**
     * Check if this payment method should be active in the backend
     * e.g select in an order creation
     *
     * @return bool
     */
    public function isBackendActive(): bool
    {
        return true;
    }

    /**
     * Get the name for the backend
     *
     * @param string $lang
     * @return string
     */
    public function getBackendName(string $lang): string
    {
        return $this->getName();
    }

    /**
     * Check if this payment method can handle subscriptions
     *
     * @return bool
     */
    public function canHandleSubscriptions(): bool
    {
        return false;
    }
}
