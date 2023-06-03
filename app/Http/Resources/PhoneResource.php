<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PhoneResource extends JsonResource
{
    /**
     * 
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        
        //what do want to render back 
        return [
            
                "title"=>$this->title,
                "id"=>$this->id,
                "category_id" =>$this->category_id,
                "price"=>$this->price,
                "image"=>$this->image,
                "description"=>$this->description,
                "category_name"=>$this->Category->name,          
        ];
    }
}
