<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CharacterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'MODEL' => $this->MODEL,
            'DESCRIPTION' => $this->DESCRIPTION,
            'UNIT' => $this->UNIT,
            'PURPOSE' => $this->PURPOSE,
            'PRODUCTION' => $this->PRODUCTION
        ];
    }

    public function toResponse($request):JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $this->toArray($request),
        ]);
    }
}
