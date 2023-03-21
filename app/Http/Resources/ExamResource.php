<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExamResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return[
            'Number'=>$this->id,
            'Exam Ename'=>$this->name,
            'Exam Describe'=>$this->describe,
            // 'user_id' =>$this->user_id,
            // 'categry_id' =>$this->categry_id,
        ];
    }
}
