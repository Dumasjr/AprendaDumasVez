<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        @yield('content')
    </body>
</html>

@extends('layout.app')
@section('title', 'Listando todos os registros')

@section('content')
<h1>Listagem de Clientes</h1>
<hr>
<div class="table-responsive-xl">
    <table class="table table-bordered table-sm table table-hover">
        <thead class="thead-dark">
      <tr>

          <th>Nome</th>
          <th >RG</th>
          <th >CPF</th>
          <th >Telefone</th>
          <th >Celular</th>
          <th >Email</th>
          <th >DataNasc</th>
          <th>Sexo</th>
          <th >Descrição</th>
          <th >Renda</th>


          <th colspan="2" >
        <a  href="{{ route('clients.create') }}" class="btn btn-info btn-sm" >Novo</a>
          </th>
      </tr>
        </thead>
        <tbody>
      @forelse($clients as $client)
      <tr>
          <td>{{ $client->name }}</td>
          <td>{{ $client->rg }}</td>
          <td>{{ $client->cpf }}</td>
          <td>{{ $client->phone }}</td>
          <td>{{ $client->cel }}</td>
          <td>{{ $client->email }}</td>
          <td>{{ $client->birth }}</td>
          <td>{{ $client->gender }}</td>
          <td>{{ $client->description }}</td>
          <td>{{ $client->income }}</td>
          <td>
        <a href="{{ route('clients.edit', ['id' => $client->id]) }}" class="btn btn-warning btn-sm">Editar</a>

          </td>
          <td><form method="POST" action="{{ route('clients.destroy', ['id' => $client->id]) }}" style="display: inline" onsubmit="return confirm('Deseja excluir este registro?');" >
            @csrf
            <input type="hidden" name="_method" value="delete" >
            <button class="btn btn-danger btn-sm">Excluir</button>
        </form>
          </td>
      </tr>
      @empty
      <tr>
          <td colspan="6">Nenhum registro encontrado para listar</td>
      </tr>
      @endforelse
        </tbody>
    </table>
</div>
@endsection
