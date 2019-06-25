<?php
namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;
class MyappResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'app_title' => $this->title,
            'app_desc' => $this->when(true, $this->desc),
        ];
    }
}