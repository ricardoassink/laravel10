@extends('admin.layouts.app')


@section('title', 'Cursos')





    @section('header')
   

        <div class="flex items-center gap-x-3 ml-4">
            <h2 class="text-lg font-medium text-gray-800 dark:text-white">Gerenciamento de Cursos</h2>

            <span
                class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">{{ $cursos->total() }}
                cursos</span>
        </div>

      
            <a href="{{ route('cursos.novo') }}"
                class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                  </svg>
                  

                <span>
                    Adicionar novo Curso
                </span>
            </a>
      
    
    @endsection


    @section('content')

    


        <div class="flex flex-col mt-6 ml-8 mr-8">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-800">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <div class="flex items-center gap-x-3">
                                            <span>Nome</span>
                                        </div>
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <span>Descrição</span>
                                    </th>

                                    <th scope="col"
                                        class="px-12 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500 dark:text-gray-400">

                                        <span>Status</span>


                                        <th scope="col"
                                        class="px-12 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500 dark:text-gray-400">

                                        <span>Ações</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">

                                @foreach ($cursos->items() as $curso)
                                    <tr>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            <div class="inline-flex items-center gap-x-3">
                                                <div class="flex items-center gap-x-2">
                                                    <div>
                                                        <h2 class="font-medium text-gray-800 dark:text-white ">
                                                            {{ $curso->id }} - {{ $curso->nome }}</h2>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            {{ $curso->body }}</td>
                                        <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap text-center">
                                            <div
                                                class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-emerald-100/60 dark:bg-gray-800">
                                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>

                                                <h2 class="text-sm font-normal text-emerald-500">
                                                    {{ getStatusCurso($curso->status) }}</h2>
                                            </div>


                                        <td class="px-4 py-4 text-sm whitespace-nowrap">
                                            <div class="flex items-center gap-x-6 justify-center">
                                                <a href="{{ route('cursos.edit', $curso->id) }}">
                                                    <button
                                                        class="text-gray-500 transition-colors duration-200 dark:hover:text-yellow-500 dark:text-gray-300 hover:text-yellow-500 focus:outline-none">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                        </svg>
                                                    </button>
                                                </a>
                                                <a href="{{ route('cursos.show', $curso->id) }}">
                                                    <button
                                                        class="text-gray-500 transition-colors duration-200 dark:hover:text-green-500 dark:text-gray-300 hover:text-green-500 focus:outline-none">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                            class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                                                        </svg>
                                                    </button>
                                                </a>
                                                <button
                                                    class="text-gray-500 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-300 hover:text-red-500 focus:outline-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                    </svg>
                                                </button>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- <table border='1'>
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

</table> --}}

        <x-pagination :paginator="$cursos" :appends="$filters" />
    @endsection



</section>
