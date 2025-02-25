@extends('pdf.base')

@section('domain')
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
                <th scope="col">#</th>
                <th scope="col">Domínio</th>
                <th scope="col">Extensão</th>
                <th scope="col">Status</th>
                <th scope="col">Hospedagem</th>
                <th scope="col">Endereço IP</th>
                <th scope="col">Criação</th>
                <th scope="col">Expiração</th>
                <th scope="col">Atualização</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($domain as $domain)
                @php

                    $expirationDate = Carbon\Carbon::parse($domain->expiration);
                    $today = Carbon\Carbon::today();
                    $countDay = $today->diffInDays($expirationDate);
                    $rowColor = '';

                    if ($expirationDate->isPast()) {
                        $rowColor = 'background-color:#c6acae';
                    } elseif ($countDay < 10) {
                        $rowColor = 'background-color:#fff3cd';
                    }
                @endphp
                <tr style="{{ $rowColor }}">
                    <th scope="row">{{ $domain->id }}</th>
                    <td>{{ $domain->name }}</td>
                    <td>{{ $domain->extension }}</td>
                    <td>{{ $domain->status == 'valid' ? 'Ativo' : 'Expirado' }}</td>
                    <td>{{ $domain->host }}</td>
                    <td>{{ $domain->ip_address }}</td>
                    <td>{{ Carbon\Carbon::parse($domain->created)->format('d/m/Y') }}</td>
                    <td>{{ Carbon\Carbon::parse($domain->expiration)->format('d/m/Y') }}</td>
                    <td>{{ Carbon\Carbon::parse($domain->expiration)->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
