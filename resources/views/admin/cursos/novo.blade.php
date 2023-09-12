<h1> Novo Curso </h1>

<form action="{{ route('cursos.gravar')}}" method="POST">

    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
    @csrf()

    <input type="text" placeholder="Nome" name="nome">
    <textarea name="body" id="" cols="30" rows="10" placeholder="Descrição"></textarea>
    <button type="submit">Enviar</button>
</form>
