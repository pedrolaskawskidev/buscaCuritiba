<?php

namespace App\Http\Controllers;

use App\Models\Domain;
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
        return view('owner.create');
    }

 
    public function store(Request $request)
    {
        $owner = $request->all();
        $owner['phone'] = preg_replace("/[^0-9]/", "", $owner['phone']);
        $owner['document_number'] = preg_replace("/[^0-9]/", "", $owner['document_number']);
       
        Owner::create($owner);

        return redirect()->route('owner.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $owner = Owner::findOrFail($id);
        return view ('owner.edit', ['owner' => $owner]);
    }

    public function update($request)
    {
        $data = $request->all();
        $owner = Owner::findOrFail($data['id']);
        $owner->update($data);

        return redirect()->route('owner.index');
    }

    
    public function destroy($id)
    {
        $owner = Owner::find($id);
        
        //deletando os dominios ligados ao proprietario
        Domain::where('owner_id', $owner->id)->delete();

        $owner->delete();
        return redirect()->route('owner.index');
    }
}
