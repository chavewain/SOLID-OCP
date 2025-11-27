<?php

namespace App\PaymentMethods;

use App\Contracts\PaymentMethodInterface;

class CreditCardPayment implements PaymentMethodInterface
{
    public function label(): string
    {
        return 'Tarjeta de crédito';
    }

    public function pay(float $amount): array
    {
        // Simulación simple; en producción llamarías a un gateway real.
        return [
            'method' => $this->label(),
            'amount' => $amount,
            'status' => 'approved',
            'transaction_id' => 'cc_' . uniqid(),
        ];
    }
}

