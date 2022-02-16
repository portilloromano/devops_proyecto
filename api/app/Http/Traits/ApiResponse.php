<?php

namespace App\Http\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

trait ApiResponse
{
    public function successResponse($data, int $code = Response::HTTP_OK): JsonResponse
    {
        log::info('Success -> ' . json_encode($data) . ' - ' . $code);
        return response()->json(['data' => $data], $code);
    }

    public function errorResponse(string $message, int $code): JsonResponse
    {
        log::error('Error -> ' . $message . ' - ' . $code);
        return response()->json(['error' => $message, 'code' => $code], $code);
    }
}
