@extends('layouts.app')

@section('dashboard')
    <div class="container-fluid text-center mt-3">
        @foreach ($domain as $domain)
            <ul class="list-group mb-3">
                <li>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapse-{{ $domain->id }}"
                        role="button" aria-expanded="false" aria-controls="collapse-{{ $domain->id }}">
                        {{ $domain->name }}
                    </a>
                </li>
                <div class="collapse" id="collapse-{{ $domain->id }}">
                    <div class="card card-body mt-2">
                        <li class="list-group">
                            Proprietário
                        <li class="list-group-item">{{ $domain->owner->name }}</li>
                        </li>
                        <li class="list-group">
                            Nome
                        <li class="list-group-item">{{ $domain->name }}</li>
                        </li>
                        <li class="list-group">
                            Extensão
                        <li class="list-group-item">{{ $domain->extension }}</li>
                        </li>
                        <li class="list-group">
                            Estado
                        <li class="list-group-item">{{ $domain->status == 'valid' ? 'Ativo' : 'Expirado' }}</li>
                        </li>
                        <li class="list-group">
                            Hospedagem
                        <li class="list-group-item">{{ $domain->host }}</li>
                        </li>
                        <li class="list-group">
                            IP
                        <li class="list-group-item">{{ $domain->ip_adress }}</li>
                        </li>
                        <li class="list-group">
                            Criado em
                        <li class="list-group-item">{{ Carbon\Carbon::parse($domain->cretaed)->format('d/m/Y') }}
                        </li>
                        </li>
                        <li class="list-group">
                            Expira em
                        <li class="list-group-item">
                            {{ Carbon\Carbon::parse($domain->expiration)->format('d/m/Y') }}</li>
                        </li>
                        <li class="list-group">
                            Atualizado em
                        <li class="list-group-item mb-2">
                            {{ Carbon\Carbon::parse($domain->expiration)->format('d/m/Y') }}</li>
                        </li>
                        <li class="list-group">
                            <button type="button" class="btn btn-warning mb-1">Atualizar</button>
                            <button type="button" class="btn btn-danger mb-1">Excluir</button>
                        </li>
                    </div>
                </div>
            </ul>
        @endforeach
    </div>
    <a href="{{ route('generatepdf') }}" target="_blank" class="btn btn-warning btn-sm">Gerar PDF</a>
@endsection
