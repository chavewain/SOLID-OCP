<?php

return [
    'default_method' => 'credit_card',

    'methods' => [
        'credit_card' => \App\PaymentMethods\CreditCardPayment::class,
        'paypal' => \App\PaymentMethods\PaypalPayment::class,
        'stripe' => \App\PaymentMethods\StripePayment::class,
    ],
];

