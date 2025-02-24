@extends('layouts.app')

@section('owner.index')
    <div class="text-end m-3">
        <a title="Adicionar" class="btn btn-success" href="{{ route('owner.create') }}"><i
                class="bi bi-person-fill-add"></i></a>
    </div>
    <div class="text-center m-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Documento</th>
                    <th scope="col">Número</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($owner as $owner)
                    <tr class="align-middle">
                        <th scope="row">{{ $owner->id }}</th>
                        <td>{{ $owner->name }}</td>
                        <td>{{ $owner->document }}</td>
                        <td>{{ $owner->document_number }}</td>
                        <td>{{ $owner->email }}</td>
                        <td>{{ phone($owner->phone, 'BR')->formatNational() }}</td>
                        <td>
                            <a type="button" title="Editar" class="btn btn-warning"
                                href="{{ route('owner.edit', ['id' => $owner->id]) }}"><i
                                    class="bi bi-pencil-square"></i></a>
                            &nbsp
                            <a type="button" title="Excluir"class="btn btn-danger"
                                href="{{ route('owner.destroy', ['id' => $owner->id]) }}"><i
                                    class="bi bi-trash3-fill"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
