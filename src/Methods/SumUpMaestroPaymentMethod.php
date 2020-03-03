<?php


namespace SumUp\Methods;


use SumUp\Helper\SumUpHelper;

class SumUpMaestroPaymentMethod extends SumUpPaymentMethod
{
    public function getName(): string
    {
        return SumUpHelper::$paymentMethods['MAESTRO'];
    }
}
