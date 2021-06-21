<?php

namespace App\Http\Resources\Collection;

use App\Http\Resources\GameResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class GameCollection extends ResourceCollection
{

    public $collects = GameResource::class;

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "data" => $this->collection
        ];
    }

    public function withResponse($request, $response)
    {
        $data = $response->getData();
        $current_page = (int)$data->meta->current_page;
        $from = (int)$data->meta->from;
        $last_page = (int)$data->meta->last_page;
        $per_page = (int)$data->meta->per_page;
        $to = (int)$data->meta->to;
        $total = (int)$data->meta->total;
        $data->meta = compact("current_page", "from", "last_page", "per_page", "to", "total");
    }
}
