<?php

namespace App\Contracts;

interface PaymentMethodInterface
{
    /**
     * Realiza el pago y devuelve un arreglo con el estado.
     */
    public function pay(float $amount): array;

    /**
     * Devuelve el nombre legible del método.
     */
    public function label(): string;
}

