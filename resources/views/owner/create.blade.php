@extends('layouts.app')

@section('title', 'Proprietários')

@section('owner.create')
    <div class="card">
        <div class="card-body">
            @include('owner._form', ['owner' => null])
        </div>
    </div>

@endsection
