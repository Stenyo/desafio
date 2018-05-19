@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Anagrama</div>
                    <div class="card-body">
                        <br />

                        <form method="POST" action="{{ route('anagram.index') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="col-md-4 control-label">Insira uma palavra</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="anagrama" type="text" id="anagrama"  >
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-offset-4 col-md-4">
                                    <input class="btn btn-primary" type="submit" value="Rodar algoritimo">
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-md-12">
                                <p>{!! nl2br($result) !!}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
