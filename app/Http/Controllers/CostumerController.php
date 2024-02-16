<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use App\Http\Requests\StoreCostumerRequest;

class CostumerController extends Controller
{
    protected int $costumer_people_id;
    protected string $birthday;
    protected string $email;
    protected int $cpf;


    public function store(StoreCostumerRequest $request)
    {
        $validated = $request->validated();
        if($validated->fails())
        {
            return $validated->erros();
        }
        Costumer::created([
            'cotumer_people_id' => $this->costumer_people_id,
            'birthday' => $this->birthday,
            'email' => $this->email,
            'cpf' => $this->cpf,
        ]);
    }
}
