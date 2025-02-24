<form method="post" action="{{ $owner ? route('owner.update', $owner) : route('owner.store') }}"
    enctype="multipart/form-data">
    @csrf
    @if ($owner)
        @method('PUT')
        <input type="hidden" name="id" value="{{ $owner->id }}">
    @endif
    <div class="p-3">
        <div class="row mb-3">
            <div class="col-6">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" id="name" class="form-control"
                    value="{{ $owner ? $owner->name : old('name', $owner->name ?? '') }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-auto">
                <label for="document" class="form-label">Tipo Documento</label>
                <select class="form-select" name="document" id="document" aria-label="Selecione">
                    <option value="CPF" @selected(old('document', $owner->document ?? '') == ($owner->document ?? 'CPF'))>CPF</option>
                    <option value="CNPJ" @selected(old('document', $owner->document ?? '') == ($owner->document ?? 'CNPJ'))>CNPJ</option>
                </select>
            </div>
            <div class="col-auto">
                <label for="document_number" class="form-label">Número</label>
                <input type="text" name="document_number" id="document_number" class="form-control"
                    value="{{ $owner ? $owner->document_number : old('document', $owner->document_number ?? '') }}">
            </div>
            <div class="col-auto">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control"
                    value="{{ $owner ? $owner->email : old('email', $owner->email ?? '') }}">
            </div>
            <div class="col-auto">
                <label for="phone" class="form-label">Telefone</label>
                <input type="text" name="phone" id="phone" class="form-control"
                    value="{{ $owner ? $owner->phone : old('phone', $owner->phone ?? '') }}">
            </div>
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-success button-save-form ladda-button">Salvar</button>
        </div>
    </div>


</form>

@push('js')
    <script>
        $(document).ready(function() {

            $('#phone').mask('(00) 00000-0000');

            function applyMask() {
                let selectedType = $("#document").val();
                let documentField = $("#document_number");

                documentField.unmask();

                if (selectedType === "CPF") {
                    documentField.mask("000.000.000-00", {
                        reverse: true
                    });
                } else if (selectedType === "CNPJ") {
                    documentField.mask("00.000.000/0000-00", {
                        reverse: true
                    });
                }
            }
            applyMask();

            $("#document").change(function() {
                applyMask();
                $("#document_number").val("");
            });

        });
    </script>
@endpush
