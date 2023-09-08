<h1> Gerenciamento do Cursos </h1>


<table>
    <thead>
        <th>id</th>
        <th>Nome:</th>
        <th>Descrição: </th>
        <th>Status: </th>
        <th>Ação: </th>
    </thead>
    <tbody>
        @foreach ($cursos as $curso)
            <tr>
                <td>{{$curso->id }}</td>
                <td>{{$curso->nome }}</td>
                <td>{{$curso->body }}</td>
                <td>{{$curso->status }}</td>
                <td> -> </td>
            </tr>
        @endforeach

</table>
