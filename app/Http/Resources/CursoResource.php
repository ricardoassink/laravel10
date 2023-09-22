<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CursoResource extends JsonResource
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
            'nome' => strtoupper($this->nome),
            'body' => $this->body,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'created_at_formated' => Carbon::make($this->created_at)->format('Y-m-d H:i:s'),

        ];
    }
}
