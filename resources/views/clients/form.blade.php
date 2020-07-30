@extends('layout.app')
@section('title', 'Registro')

@section('content')
<h1>Registro</h1>
<hr>

<div class="container">


    @if(isset($client))

        {!! Form::model($client, ['method' => 'put', 'route' => ['clients.update', $client->id ], 'class' => 'form-horizontal']) !!}

    @else

        {!! Form::open(['method' => 'post','route' => 'clients.store', 'class' => 'form-horizontal']) !!}

    @endif

    <div class="card">
        <div class="card-header">
      <span class="card-title">
          @if (isset($client))
        Editando registro #{{ $client->id }}
          @else
        Criando novo registro
          @endif
      </span>
        </div>
        <div class="card-body">
      <div class="form-row form-group">

          {!! Form::label('name', 'Nome', ['class' => 'col-form-label col-sm-2 text-right']) !!}

          <div class="col-sm-4">

        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Defina o nome']) !!}

          </div>

      </div>
      <div class="form-row form-group">

          {!! Form::label('rg', 'RG', ['class' => 'col-form-label col-sm-2 text-right']) !!}

          <div class="col-sm-4">

        {!! Form::text('rg', null, ['class' => 'form-control', 'placeholder'=>'Defina o rg']) !!}

          </div>

      </div>

      <div class="form-row form-group">

        {!! Form::label('cpf', 'CPF', ['class' => 'col-form-label col-sm-2 text-right']) !!}

        <div class="col-sm-4">

      {!! Form::text('cpf', null, ['class' => 'form-control', 'placeholder'=>'Defina o cpf']) !!}

        </div>

    </div>
    <div class="form-row form-group">

        {!! Form::label('phone', 'Telefone', ['class' => 'col-form-label col-sm-2 text-right']) !!}

        <div class="col-sm-4">

      {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder'=>'Defina o telefone']) !!}

        </div>

    </div>
    <div class="form-row form-group">

        {!! Form::label('cel', 'Celular', ['class' => 'col-form-label col-sm-2 text-right']) !!}

        <div class="col-sm-4">

      {!! Form::text('cel', null, ['class' => 'form-control', 'placeholder'=>'Defina o celular']) !!}

        </div>

    </div>
      <div class="form-row form-group">

          {!! Form::label('email', 'E-mail', ['class' => 'col-form-label col-sm-2 text-right']) !!}

          <div class="col-sm-8">

        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder'=>'Defina o email']) !!}

          </div>

      </div>

    <div class="form-row form-group">

        {!! Form::label('birth', 'Data nascimento', ['class' => 'col-form-label col-sm-2 text-right']) !!}

        <div class="col-sm-4">

      {!! Form::date('birth', null, ['class' => 'form-control', 'placeholder'=>'Defina o sexo']) !!}

        </div>

    </div>
    <div class="form-row form-group">

        {!! Form::label('gender', 'Sexo', ['class' => 'col-form-label col-sm-2 text-right']) !!}

        <div class="col-md-3">
          <div class="form-group">

              <input type="radio" name="gender" value="F"> Feminino
              <input type="radio" name="gender" value="M"> Masculino
          </div>
      </div>
         <div class="col-sm-4">


        </div>


    </div>
      <div class="form-row form-group">

          {!! Form::label('description', 'Descrição', ['class' => 'col-form-label col-sm-2 text-right']) !!}

          <div class="col-sm-10">

        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder'=>'Defina descrição']) !!}

          </div>

      </div>
      <div class="form-row form-group">

        {!! Form::label('income', 'Renda', ['class' => 'col-form-label col-sm-2 text-right']) !!}

        <div class="col-sm-8">

      {!! Form::text('income', null, ['class' => 'form-control', 'placeholder'=>'Defina o Renda']) !!}

        </div>

    </div>
        </div>
        <div class="card-footer">
      {!! Form::button('cancelar', ['class'=>'btn btn-danger btn-sm', 'onclick' =>'windo:history.go(-1);']); !!}
      {!! Form::submit(  isset($client) ? 'atualizar' : 'Criar', ['class'=>'btn btn-success btn-sm']) !!}

        </div>
    </div>

    {!! Form::close() !!}

</div>
@endsection
