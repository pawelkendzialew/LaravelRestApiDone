<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Human;
use App\Http\Requests\StoreHumanRequest;
use App\Http\Requests\UpdateHumanRequest;
use App\Http\Resources\HumanResource;
use Illuminate\Http\Request;
use App\Http\Resources\HumanCollection;
use Illuminate\Support\Facades\DB;

class HumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$human = Human::all();
        //return HumanResource::collection($human);
        return new HumanCollection(Human::all());
    }

    public function create(StoreHumanRequest $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $human = Human::create($request->all());
        return response()->json([$human, 200]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Human $human)
    {
        return response()->json($human, 200);    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Human $human)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHumanRequest $request, Human $human)
    {

      $human->update(['firstName'=> $request['firstName']]);
      $human->update(['lastName'=> $request['lastName']]);
      $human->update(['country'=> $request['country']]);
      $human->update(['city'=> $request['city']]);
      $human->update(['street'=> $request['street']]);
      $human->update(['phoneNumber'=> $request['phoneNumber']]);
      return response()->json(null, 200);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Human $human)
    {
        $human->delete();
        return response(null, 200);
    }
}
