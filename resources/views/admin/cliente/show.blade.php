@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Cliente {{ $cliente->id }}# {{$cliente->nome}}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/cliente') }}" title="Voltar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="{{ url('/admin/cliente/' . $cliente->id . '/edit') }}" title="Editar Cliente"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('admin/cliente' . '/' . $cliente->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Excluir Cliente" onclick="return confirm(&quot;Deseja realmente excluir o cliente;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $cliente->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Nome </th><td> {{ $cliente->nome }} </td>
                                    </tr>
                                    <tr>
                                        <th> Documento </th><td> {{ $cliente->documento }} </td>
                                    </tr>
                                    <tr>
                                        <th> Email </th><td> {{ $cliente->email }} </td>
                                    </tr>
                                    <tr>
                                        <th> Telefone </th><td> {{ $cliente->telefone }} </td>
                                    </tr>
                                    <tr>
                                        <th> Endereço </th><td> {{ $cliente->endereco }} </td>
                                    </tr>
                                    <tr>
                                        <th> Cadastrado em </th><td> {{ $cliente->created_at }} </td>
                                    </tr>
                                    <tr>
                                        <th> Atualizado em </th><td> {{ $cliente->updated_at }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
