<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContractDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'airline_code'=>$this->airline_code,
            'name'=>$this->name,
            'order'=>$this->order,
            'ticketing_start'=>$this->ticketing_start,
            'ticketing_end'=>$this->ticketing_end,
            'terms_conditiaons'=>$this->terms_conditiaons
        ];
    }
}
