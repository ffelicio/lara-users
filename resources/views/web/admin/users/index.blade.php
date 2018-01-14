@extends('layout.app')

@section('content')
    <div class="card border-primary mb-12">
        <div class="card-header bg-primary border-primary">
            <strong>Usuários</strong>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center" scope="col">Nome</th>
                        <th class="text-center" scope="col">E-mail</th>
                        <th class="text-center" scope="col">Login</th>
                        <th class="text-center" scope="col">Status</th>
                        <th class="text-center" scope="col">Data de Cadastro</th>
                        <th class="text-center" scope="col">Data de Cadastro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td class="text-center"><a href="#" class="badge badge-pill badge-success">Success</a></td>
                        <td class="text-center">@mdo</td>
                        <td class="text-center">
                            <span class="oi oi-pencil"></span>
                            <span class="oi oi-trash"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td class="text-center"><a href="#" class="badge badge-pill badge-success">Success</a></td>
                        <td class="text-center">@fat</td>
                        <td class="text-center">
                            <span class="oi oi-pencil"></span>
                            <span class="oi oi-trash"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td class="text-center"><a href="#" class="badge badge-pill badge-success">Success</a></td>
                        <td class="text-center">@twitter</td>
                        <td class="text-center">
                            <span class="oi oi-pencil"></span>
                            <span class="oi oi-trash"></span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer bg-primary border-primary text-dark">Footer</div>
    </div>
@endsection

@section('scripts')
    <script src="{{ URL::asset('js/web/admin/users.js') }}"></script>
@endsection