@extends('layouts.app')

@section('domain.index')
    <div class="text-end m-3">
        <a title="Adicionar" class="btn btn-success" href="{{ route('domain.create') }}"><i
                class="bi bi-cloud-plus-fill"></i></a>
    </div>
    <div class="text-center m-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Domínio</th>
                    <th scope="col">Extensão</th>
                    <th scope="col">Proprietário</th>
                    <th scope="col">Status</th>
                    <th scope="col">Hospedagem</th>
                    <th scope="col">Ip</th>
                    <th scope="col">Criado</th>
                    <th scope="col">Expiração</th>
                    <th scope="col">Atualizado</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($domain as $domain)
                    @php
                       
                        $expirationDate = Carbon\Carbon::parse($domain->expiration);
                        $today = Carbon\Carbon::today();
                        $countDay = $today->diffInDays($expirationDate);
                        $rowClass = '';

                        if ($expirationDate->isPast()) {
                            $rowClass = 'table-danger';
                        } elseif ($countDay < 10) {
                            $rowClass = 'table-warning';
                        }
                    @endphp
                    <tr class="align-middle {{ $rowClass }}">
                        <th scope="row">{{ $domain->id }}</th>
                        <td>{{ $domain->name }}</td>
                        <td>{{ $domain->extension }}</td>
                        <td>{{ $domain->owner->name }}</td>
                        <td>{{ $domain->status == 'valid' ? 'Ativo' : 'Expirado' }}</td>
                        <td>{{ $domain->host }}</td>
                        <td>{{ $domain->ip_address }}</td>
                        <td>{{ Carbon\Carbon::parse($domain->created)->format('d/m/Y') }}</td>
                        <td>{{ Carbon\Carbon::parse($domain->expiration)->format('d/m/Y') }}</td>
                        <td>{{ Carbon\Carbon::parse($domain->updated)->format('d/m/Y') }}</td>
                        <td>
                            <a type="button" title="Editar" class="btn btn-warning"
                                href="{{ route('domain.edit', ['id' => $domain->id]) }}"><i
                                    class="bi bi-pencil-square"></i></a>
                            &nbsp
                            <a type="button" title="Excluir"class="btn btn-danger"
                                href="{{ route('domain.destroy', ['id' => $domain->id]) }}"><i
                                    class="bi bi-trash3-fill"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
