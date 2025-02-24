<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Owner;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $domain = Domain::with('owner')->get();
        
        return view('domain.index', ['domain'=> $domain]);
    }

    public function create()
    {
        $owners = Owner::get();
        return view('domain.create', ['owner' => $owners]);
    }

   
    public function store(Request $request)
    {
        $domain = $request->all();

        $domain['created'] = Carbon::now()->format('Y-m-d');
        $domain['updated'] = Carbon::now()->format('Y-m-d');

        Domain::create($domain);

        return redirect()->route('domain.index');


    }


    public function edit($id)
    {
        $domain = Domain::findOrFail($id);
        $owners = Owner::get();
        return view ('domain.edit', ['domain' => $domain, 'owner' => $owners]);
    }

    public function update(Request $request, Domain $domain)
    {
        $data = $request->all();
        $domain = Domain::findOrFail($data['id']);
        $domain['updated'] = Carbon::now()->format('Y-m-d');
        $domain->update($data);

        return redirect()->route('domain.index');
    }

    public function destroy($id)
    {
        $domain = Domain::find($id);
        $domain->delete();

        return redirect()->route('domain.index');

    }
}
