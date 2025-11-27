<?php

namespace App\Http\Controllers;

use App\Factories\PaymentMethodFactory;
use App\Http\Requests\PaymentRequest;
use App\Services\PaymentProcessor;
use Illuminate\Http\JsonResponse;

class PaymentController extends Controller
{
    public function pay(PaymentRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $method = PaymentMethodFactory::make($validated['method']);
        $processor = new PaymentProcessor($method);

        return response()->json($processor->process($validated['amount']));
    }
}

