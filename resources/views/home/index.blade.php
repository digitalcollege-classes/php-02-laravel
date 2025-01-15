@extends('_templates/base')

@section('title') Listar Lanchonetes @endsection

@section('content')
    <table class="table table-striped table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Cidade</th>
                <th>Endereço do Site</th>
                <th>Status</th>
                <th>Próximo Vencimento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stores as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['city'] }}</td>
                    <td><a href="{{ $item['site'] }}" target="_blank">{{ $item['site'] }}</a></td>
                    <td>
                        @if ($item['status'] === true)
                            <span class="badge bg-success">Ativa</span>
                        @else
                            <span class="badge bg-danger">Inativa</span>
                        @endif
                    </td>
                    <td>{{ $item['expired_date'] }}</td>
                    <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-bs-toggle="dropdown" aria-expanded="false">
                        Ações
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a class="dropdown-item" href="#">Editar</a></li>
                            <li><a class="dropdown-item" href="#">Excluir</a></li>
                            <li><a class="dropdown-item" href="#">Detalhes</a></li>
                            <li><a class="dropdown-item" href="#">Relatórios</a></li>
                            <li><a class="dropdown-item" href="#">Dashboard</a></li>
                        </ul>
                    </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
