@extends('layout.app')

@section('content')
    <div class="card border-primary mb-12">
        <div class="card-header bg-primary border-primary">
            <strong>Usuários</strong>
        </div>
        <div class="card-body">
            <table class="table table-sm table-striped">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center" scope="col">Nome</th>
                        <th class="text-center" scope="col">E-mail</th>
                        <th class="text-center" scope="col">Login</th>
                        <th class="text-center" scope="col">Status</th>
                        <th class="text-center" scope="col">Data de Cadastro</th>
                        <th class="text-center" scope="col"></th>
                    </tr>
                </thead>
                <tbody id="users-list">
                    <tr>
                        <td colspan="6" class="text-center">
                            <img src="{{ URL::asset('img/loading.gif') }}" title="Carregando usuários">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer bg-primary border-primary text-dark">Footer</div>
    </div>
@endsection

@section('scripts')
    <script src="{{ URL::asset('js/web/admin/user/user.js') }}"></script>
    <script src="{{ URL::asset('js/web/admin/user/user-list.js') }}"></script>
@endsection