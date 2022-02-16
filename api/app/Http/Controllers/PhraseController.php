<?php

namespace App\Http\Controllers;

use App\Http\Traits\ApiResponse;
use App\Models\Phrase;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class PhraseController extends Controller
{
    use ApiResponse;

    public function index(): JsonResponse
    {
        try {
            log::info('Prueba');
        } catch (\Exception $exception) {
            return $this->errorResponse($exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        try {
            return $this->successResponse(Phrase::all());
        } catch (QueryException $exception) {
            return $this->errorResponse($exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function show(string $id)
    {
        try {
            return $this->successResponse(Phrase::findOrFail($id));
        } catch (ModelNotFoundException $exception) {
            return $this->errorResponse($exception->getMessage(), Response::HTTP_NOT_FOUND);
        } catch (QueryException $exception) {
            return $this->errorResponse($exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function random(): JsonResponse
    {
        try {
            $id = random_int(1, 30);
        } catch (\Exception $exception) {
            return $this->errorResponse($exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        try {
            return $this->successResponse(Phrase::findOrFail($id));
        } catch (ModelNotFoundException $exception) {
            return $this->errorResponse($exception->getMessage(), Response::HTTP_NOT_FOUND);
        } catch (QueryException $exception) {
            return $this->errorResponse($exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
