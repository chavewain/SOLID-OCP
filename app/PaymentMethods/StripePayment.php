<?php

namespace App\PaymentMethods;

use App\Contracts\PaymentMethodInterface;

class StripePayment implements PaymentMethodInterface
{
    public function label(): string
    {
        return 'Stripe';
    }

    public function pay(float $amount): array
    {
        return [
            'method' => $this->label(),
            'amount' => $amount,
            'status' => 'approved',
            'transaction_id' => 'stripe_' . uniqid(),
        ];
    }
}

