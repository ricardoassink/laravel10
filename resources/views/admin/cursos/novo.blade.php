<h1> Novo Curso </h1>

@if($errors->any())

    @foreach ( $errors->all() as $error )
        {{ $error }}
    @endforeach

@endif

<form action="{{ route('cursos.gravar')}}" method="POST">

    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
    @csrf()

    <input type="text" placeholder="Nome" name="nome" value="{{ old('nome') }}">
    <textarea name="body" id="" cols="30" rows="10" placeholder="Descrição">{{ old('body') }}</textarea>
    <button type="submit">Enviar</button>
</form>
