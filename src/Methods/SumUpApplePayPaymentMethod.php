<?php


namespace SumUp\Methods;


use SumUp\Helper\SumUpHelper;

class SumUpApplePayPaymentMethod extends SumUpPaymentMethod
{
    public function getName(): string
    {
        return SumUpHelper::$paymentMethods['APPLE_PAY'];
    }
}
