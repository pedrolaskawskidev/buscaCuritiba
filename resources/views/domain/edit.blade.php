@extends('layouts.app')

@section('title', 'Domínios')

@section('domain.edit')
<div class="card">
    <div class="card-body">
        @include('domain._form', ['domain' => $domain, 'owner' => $owner])
    </div>
</div>

@endsection