@extends('layout.app')

@section('content')
    <div class="card mb-12">
        <div class="card-header">

            <div class="row">
                <div class="col-sm-11">
                    <strong>Usuários</strong>
                    <span id="total-usuarios"></span>
                </div>

                <div class="col-sm-1">
                    <button type="button" class="btn btn-primary" id="btn-novo" data-toggle="modal" data-target=".modal">Novo</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-sm">
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
        <div class="card-footer bg-primary border-primary text-dark">LaraUser</div>
    </div>
@endsection

@section('modal-body')
    <div class="error"></div>

    <form>
        <input type="hidden" class="id" name="id">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control nome" id="nome" name="name" value="">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control email" id="email" name="email" value="">
        </div>
        <div class="form-group">
            <label for="login">Login</label>
            <input type="email" class="form-control login" id="login" name="login" value="">
        </div>
        <div class="form-group" id="div-password">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="">
        </div>
        <div class="form-group">
            <label for="ativo">Ativo</label>
            <select class="form-control ativo" id="ativo" name="active">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>
    </form>
@endsection

@section('scripts')
    <script src="{{ URL::asset('js/web/admin/user/user.js') }}"></script>
    <script src="{{ URL::asset('js/web/admin/user/user-list.js') }}"></script>
    <script src="{{ URL::asset('js/web/admin/user/user-error.js') }}"></script>
@endsection