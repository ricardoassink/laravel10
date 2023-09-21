<h1> Novo Curso </h1>

{{-- <x-alert></x-alert> --}}
 <x-alert/>

<form action="{{ route('cursos.gravar')}}" method="POST">

    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
    
    @include('admin.cursos.partials.form');

</form>
