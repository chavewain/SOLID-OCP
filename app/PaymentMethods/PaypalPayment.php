<?php

namespace App\PaymentMethods;

use App\Contracts\PaymentMethodInterface;

class PaypalPayment implements PaymentMethodInterface
{
    public function label(): string
    {
        return 'PayPal';
    }

    public function pay(float $amount): array
    {
        return [
            'method' => $this->label(),
            'amount' => $amount,
            'status' => 'approved',
            'transaction_id' => 'paypal_' . uniqid(),
        ];
    }
}

