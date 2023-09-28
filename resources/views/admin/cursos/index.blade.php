@extends('admin.layouts.app')

@section('content')
    
<h1> Gerenciamento do Cursos </h1>

<a href="{{ route('cursos.novo') }}">Adicionar novo Curso</a>

<table border='1'>
    <thead>
        <th>id</th>
        <th>Nome:</th>
        <th>Descrição: </th>
        <th>Status: </th>
        <th>Editar: </th>
        <th>Detalhar: </th>
    </thead>
    <tbody>
        @foreach ($cursos->items() as $curso)
            <tr>
                <td>{{ $curso->id }}</td>
                <td>{{ $curso->nome }}</td>
                <td>{{ $curso->body }}</td>
                <td>{{ getStatusCurso($curso->status) }}</td>
                <td>
                    <a href="{{ route('cursos.edit', $curso->id) }}"> editar -> </a>
                </td>
                <td>
                    <a href="{{ route('cursos.show', $curso->id) }}"> detalhar -> </a>
                </td>
            </tr>
        @endforeach
    </tbody>

</table>

<x-pagination 
    :paginator="$cursos"
    :appends="$filters"
/>

@endsection


