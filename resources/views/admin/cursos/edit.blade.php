<h1> Editar Curso {{$curso->id}} </h1>

<form action="{{ route('cursos.gravar')}}" method="POST">

    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
    @csrf()

    <input type="text" placeholder="Nome" name="nome" value="{{ $curso->nome }}">
    <textarea name="body" id="" cols="30" rows="10" placeholder="Descrição">{{ $curso->body}}</textarea>
    <button type="submit">Enviar</button>
</form>