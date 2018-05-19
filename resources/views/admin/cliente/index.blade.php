@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Cliente</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/cliente/create') }}" class="btn btn-success btn-sm" title="Cadastrar Cliente">
                            <i class="fa fa-plus" aria-hidden="true"></i> Cadastrar Cliente
                        </a>

                        <form method="GET" action="{{ url('/admin/cliente') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Procurar..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nome</th><th>Documento</th><th>Email</th><th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cliente as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->nome }}</td><td>{{ $item->documento }}</td><td>{{ $item->email }}</td>
                                        <td>
                                            <a href="{{ url('/admin/cliente/' . $item->id) }}" title="Ver Cliente"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/admin/cliente/' . $item->id . '/edit') }}" title="Editar Cliente"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/admin/cliente' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Excluir Cliente" onclick="return confirm(&quot;Deseja realmente excluir o cliente?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $cliente->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
