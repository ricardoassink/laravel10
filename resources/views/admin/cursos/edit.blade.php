<h1> Editar Curso {{$curso->id}} </h1>

@if($errors->any())

    @foreach ( $errors->all() as $error )
        {{ $error }}
    @endforeach

@endif

<form action="{{ route('cursos.update',$curso->id)}}" method="POST">

    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
    @csrf()

    {{-- <input type="hidden" value="PUT" name="_method"> --}}
    @method('PUT')

    <input type="text" placeholder="Nome" name="nome" value="{{ $curso->nome }}">
    <textarea name="body" id="" cols="30" rows="10" placeholder="Descrição">{{ $curso->body}}</textarea>
    <button type="submit">Enviar</button>
</form>