@extends('pdf.base')

@section('owner')
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
    </style>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Documento</th>
                <th scope="col">Número</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection