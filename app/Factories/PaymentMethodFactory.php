<?php

namespace App\Factories;

use App\Contracts\PaymentMethodInterface;
use Illuminate\Support\Facades\Config;
use InvalidArgumentException;

class PaymentMethodFactory
{
    /**
     * Resuelve una clase a partir de la clave del método.
     */
    public static function make(string $methodKey): PaymentMethodInterface
    {
        $methods = Config::get('payment.methods', []);
        $class = $methods[$methodKey] ?? null;

        if (!is_string($class) || !class_exists($class)) {
            throw new InvalidArgumentException("Método {$methodKey} no registrado.");
        }

        return app($class);
    }
}

