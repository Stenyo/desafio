
<div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    <label for="nome" class="col-md-4 control-label">{{ 'Nome' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nome" type="text" id="nome" value="{{ $cliente->nome or ''}}" >
        {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('documento') ? 'has-error' : ''}}">
    <label for="documento" class="col-md-4 control-label">{{ 'Documento' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="documento" type="text" id="documento" value="{{ $cliente->documento or ''}}" >
        {!! $errors->first('documento', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('telefone') ? 'has-error' : ''}}">
    <label for="telefone" class="col-md-4 control-label">{{ 'Telefone' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="telefone" type="text" id="telefone" value="{{ $cliente->telefone or ''}}" >
        {!! $errors->first('telefone', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="col-md-4 control-label">{{ 'Email' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="email" type="text" id="email" value="{{ $cliente->email or ''}}" >
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('endereco') ? 'has-error' : ''}}">
    <label for="endereco" class="col-md-4 control-label">{{ 'Endereço' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="endereco" type="text" id="endereco" value="{{ $cliente->endereco or ''}}" >
        {!! $errors->first('endereco', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Cadastrar' }}">
    </div>
</div>
