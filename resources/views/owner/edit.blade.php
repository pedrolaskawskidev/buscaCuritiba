@extends('layouts.app')


@section('owner.edit')
<div class="card">
    <div class="card-body">
        @include('owner._form', ['owner' => $owner])
    </div>
</div>

@endsection