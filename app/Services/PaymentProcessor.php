<?php

namespace App\Services;

use App\Contracts\PaymentMethodInterface;

class PaymentProcessor
{
    public function __construct(
        private PaymentMethodInterface $method
    ) {
    }

    /**
     * Ejecuta el pago delegando en el método concreto.
     */
    public function process(float $amount): array
    {
        return $this->method->pay($amount);
    }
}

