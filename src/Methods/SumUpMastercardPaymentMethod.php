<?php


namespace SumUp\Methods;


use SumUp\Helper\SumUpHelper;

class SumUpMastercardPaymentMethod extends SumUpPaymentMethod
{
    public function getName(): string
    {
        return SumUpHelper::$paymentMethods['MASTERCARD'];
    }
}
