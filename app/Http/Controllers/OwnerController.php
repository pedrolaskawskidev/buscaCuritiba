<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Bissolli\ValidadorCpfCnpj\CNPJ;
use Bissolli\ValidadorCpfCnpj\CPF;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $owners = Owner::get();

        foreach ($owners as $owner) {
            if ($owner->document == 'CPF') {
                $owner->document_number = (new CPF($owner->document_number))->format();  // Modifique o atributo do owner
            } else {
                $owner->document_number = (new CNPJ($owner->document_number))->format();  // Modifique o atributo do owner
            }
        }
   
        return view('owner.index', ['owner' => $owners]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Owner $owner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Owner $owner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Owner $owner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Owner $owner)
    {
        //
    }
}
