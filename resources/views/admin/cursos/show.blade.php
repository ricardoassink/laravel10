<h1>Detalhes do Curso {{ $curso->id }}</h1>

<ul>
    <li> Nome: {{ $curso->nome}} </li>
    <li> Status: {{ $curso->status}} </li>
    <li> Descrição: {{$curso->body}}</li>
</ul>

<form action="{{ route('cursos.delete',$curso->id) }}" method="POST"> 
    @csrf()
    @method('DELETE')
    <button type="submit">Deletar</button>
</form>