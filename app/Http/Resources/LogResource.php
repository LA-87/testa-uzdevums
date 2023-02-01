<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $causerName = $this->causer->name ?? 'System';
        $action = $this->description;
        $productName = $this->event === 'deleted' ? $this->properties->get('old')['name'] : $this->subject->name;

        return [
            'log' => "User '$causerName' $action product '$productName'",
            'date' => $this->created_at,
        ];
    }
}
