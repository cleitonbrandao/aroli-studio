<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use App\Http\Requests\StoreCostumerRequest;

class CostumerController extends Controller
{
    public function store(StoreCostumerRequest $request)
    {
        $validated = $request->validated();
        if($validated->fails())
        {
            return $validated->erros();
        }
        Costumer::created($request);
    }
}
