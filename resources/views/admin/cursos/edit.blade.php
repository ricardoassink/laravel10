<h1> Editar Curso {{$curso->id}} </h1>

{{-- <x-alert></x-alert> --}}
<x-alert/>

<form action="{{ route('cursos.update',$curso->id)}}" method="POST">

    {{-- <input type="hidden" value="PUT" name="_method"> --}}
    @method('PUT')

    @include('admin.cursos.partials.form', [
        'curso' => $curso
    ]);

</form>