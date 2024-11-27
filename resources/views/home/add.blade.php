@extends('_templates.base')

@section('title') Add Lanchonete @endsection

@section('content')
<form>
    <!-- Nome -->
    <div class="mb-3">
    <label for="nomeLanchonete" class="form-label">Nome da Lanchonete</label>
    <input type="text" class="form-control" id="nomeLanchonete" placeholder="Digite o nome da lanchonete" required>
    </div>
    
    <!-- Cidade -->
    <div class="mb-3">
    <label for="cidadeLanchonete" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="cidadeLanchonete" placeholder="Digite a cidade" required>
    </div>
    
    <!-- Endereço do site -->
    <div class="mb-3">
    <label for="siteLanchonete" class="form-label">Endereço do Site</label>
    <input type="url" class="form-control" id="siteLanchonete" placeholder="https://exemplo.com" required>
    </div>
    
    <!-- Status -->
    <div class="mb-3">
    <label for="statusLanchonete" class="form-label">Status</label>
    <select class="form-select" id="statusLanchonete" required>
        <option value="" selected disabled>Selecione o status</option>
        <option value="ativa">Ativa</option>
        <option value="inativa">Inativa</option>
    </select>
    </div>
    
    <!-- Próximo vencimento -->
    <div class="mb-3">
    <label for="vencimentoLanchonete" class="form-label">Próximo Vencimento</label>
    <input type="date" class="form-control" id="vencimentoLanchonete" required>
    </div>
    
    <!-- Botões de ação -->
    <div class="d-flex justify-content-end">
    <button type="reset" class="btn btn-secondary me-2">Limpar</button>
    <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>
@endsection