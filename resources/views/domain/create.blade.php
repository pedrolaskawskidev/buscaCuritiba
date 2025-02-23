@extends('layouts.app')


@section('domain.create')
<div class="card">
    <div class="card-body">
        @include('domain._form', ['domain' => null, 'owner' => $owner])
    </div>
</div>

@endsection