<?php

namespace App\Http\Resources\views\blog\admin\category;

use Illuminate\Http\Resources\Json\JsonResource;

class index.blade.php extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
