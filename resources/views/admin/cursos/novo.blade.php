@extends('admin.layouts.app')

@section('title', 'Cursos')

@section('header')
<section class="container px-4 mx-auto flex justify-between items-center">

    <div class="flex items-center gap-x-3 ml-4">
        <h2 class="text-lg font-medium text-gray-800 dark:text-white text-center">Cadastro de Cursos</h2>

   </div>




    <a href="{{ route('cursos.novo') }}"
        class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 mr-4 text-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>


        <span>
            Novo Curso
        </span>
    </a>

</section>
@endsection

@section('content')
    {{-- <x-alert></x-alert> --}}
    <x-alert />


        <div class="flex flex-col mt-6 ml-8 mr-8">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-800">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 px-4 text-sm font-normal text-center rtl:text-right text-gray-500 dark:text-gray-400">
                                        <div class="flex items-center gap-x-3 text-center">
                                            <span>Informe corretamente os dados solicitados abaixo:</span>
                                        </div>
                                    </th>


                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">


                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center">
                                            <div class="flex items-center">
                                                <div>
                                                 
                                                    <form action="{{ route('cursos.gravar') }}" method="POST">

                                                        @include('admin.cursos.partials.form')

                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        







    @endsection
