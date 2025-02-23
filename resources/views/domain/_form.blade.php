<form method="post" action="{{ $domain ? route('domain.update', $domain) : route('domain.store') }}"
    enctype="multipart/form-data">
    @csrf
    @if ($domain)
        @method('PUT')
        <input type="hidden" name="id" value="{{ $domain->id }}">
    @endif
    <div class="p-3">
        <div class="row mb-3">
            <div class="col-6">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" id="name" class="form-control"
                    value="{{ $domain ? $domain->name : old('name', $domain->name ?? '') }}">
            </div>
            <div class="col-4">
                <label for="owner" class="form-label">Proprietátio</label>
                <select class="form-select" name="owner_id" id="owner_id" aria-label="Selecione">
                    <option selected>Selecione</option>
                    @foreach ($owner as $owner)
                    <option value="{{ $owner->id }}"  @selected(old('owner', $domain->owner->id ?? '') == $owner->id)>
                        {{$owner->name}}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-auto">
                <label for="extension" class="form-label">Extensão</label>
                <input type="text" name="extension" id="extension" class="form-control"
                    value="{{ $domain ? $domain->extension : old('extension', $domain->extension ?? '') }}">
            </div>
            <div class="col-auto">
                <label for="name" class="form-label">Status</label>
                <select class="form-select" name="status" id="status" aria-label="Selecione">
                    <option value="valid">Ativo</option>
                    <option value="expired">Expirado</option>
                </select>
            </div>
            <div class="col-auto">
                <label for="host" class="form-label">Hospedagem</label>
                <input type="text" name="host" id="host" class="form-control"
                    value="{{ $domain ? $domain->host : old('host', $domain->host ?? '') }}">
            </div>
            <div class="col-auto">
                <label for="ip_adress" class="form-label">Endereço IP</label>
                <input type="text" name="ip_adress" id="ip_adress" class="form-control"
                    value="{{ $domain ? $domain->ip_adress : old('ip_adress', $domain->ip_adress ?? '') }}">
            </div>
        </div>
        <div class="mb-3 w-25">
            <label for="expiration" class="form-label">Expiração</label>
            <input type="date" name="expiration" id="expiration" class="form-control"  min="{{ \Carbon\Carbon::today()->toDateString() }}"
                value="{{ $domain ? $domain->expiration : old('expiration', $domain->expiration ?? '') }}">
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-success button-save-form ladda-button">Salvar</button>
        </div>
    </div>


</form>
