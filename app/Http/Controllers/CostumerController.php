<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use App\Http\Requests\StoreCostumerRequest;
use App\Models\People;
use Illuminate\Http\RedirectResponse;

class CostumerController extends Controller
{
    public function store(StoreCostumerRequest $request): RedirectResponse
    {
        $people = People::create($request->safe()->only(['name', 'last_name', 'photo']));
        $request_costumer = $request->safe()->except(['name', 'last_name', 'photo']);
        Costumer::create(
            [
                'person_id' => $people->id,
                'cpf' => $request_costumer['cpf'],
                'birthday' => $request_costumer['birthday'],
                'email' => $request_costumer['email']
            ]);
        return redirect('costumer/index');
    }
}
