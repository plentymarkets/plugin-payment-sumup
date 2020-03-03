<?php


namespace SumUp\Methods;


use SumUp\Helper\SumUpHelper;

class SumUpVisaPaymentMethod extends SumUpPaymentMethod
{
    public function getName(): string
    {
        return SumUpHelper::$paymentMethods['VISA'];
    }
}
