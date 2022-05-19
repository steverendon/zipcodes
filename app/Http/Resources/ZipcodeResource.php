<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ZipcodeResource extends JsonResource
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
            'zip_code' => "$this->d_codigo",
            'locality' => $this->d_ciudad,
            'federal_entity' => [
                'key' => $this->c_estado,
                'name' => $this->d_estado,
                'code' => $this->c_cp,
            ],
            'seetlement' => [
                    [
                    'key' => $this->id_asenta_cpcons,
                    'name' => $this->d_asenta,
                    'zone_type' => $this->d_zona,
                    'settlement_type' => [
                        'name' => $this->d_tipo_asenta,
                    ],
                ]
            ],
            'municipality' => [
                'key' => $this->c_mnpio,
                'name' => $this->D_mnpio,
            ]
        ];
    }
}
