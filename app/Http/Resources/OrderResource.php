<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            [
                "order_id"=>$this->order_id,
                "user_id"=>$this->user_id,
                "phone_id"=>$this->phone_id,
                "tax"=>$this->tax,
                "quantity"=>$this->quantity,
                "price"=>$this->price,
                "subtotal"=>$this->subtotal,
                "user_name"=>$this->user->name,
                "user_email"=>$this->user->email,
                "phone_title"=>$this->phone->title,
                "phone_price"=>$this->phone->price,
                "phone_category" => $this->phone->Category->name
            ]
        ];
    }
}
