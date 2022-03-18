<?php

namespace App\Http\Resources\keeper;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HealthResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'weight' => $this->weight,
            'bmi' => $this->bmi,
            'bodyFatRate' => $this->bodyFatRate,
            'bodyAge' => $this->bodyAge,
            'muscle' => $this->muscle,
            'boneMass' => $this->boneMass,
            'water' => $this->water,
            'visceralFat' => $this->visceralFat,
            'bmr' => $this->bmr,
            'protein' => $this->protein,
            'subcutaneousFat' => $this->subcutaneousFat,
            'weightWithoutFat' => $this->weightWithoutFat,
            'skeletalMuscleRate' => $this->skeletalMuscleRate,
            'score' => $this->score,
            'date' => $this->date
        ];
    }
}
