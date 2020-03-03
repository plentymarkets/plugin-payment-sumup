<?php


namespace SumUp\Methods;


use SumUp\Helper\SumUpHelper;

class SumUpUnknownPaymentMethod extends SumUpPaymentMethod
{
    public function getName(): string
    {
        return SumUpHelper::$paymentMethods['UNKNOWN'];
    }
}

