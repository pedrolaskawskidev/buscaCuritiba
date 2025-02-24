@extends('layouts.app')

@section('title', 'Domínios')

@section('domain.create')
<div class="card">
    <div class="card-body">
        @include('domain._form', ['domain' => null, 'owner' => $owner])
    </div>
</div>

@endsection