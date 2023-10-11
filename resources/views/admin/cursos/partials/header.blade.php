<section class="container px-4 mx-auto flex justify-between items-center">

    <div class="flex items-center gap-x-3 ml-4">
        <h2 class="text-lg font-medium text-gray-800 dark:text-white text-center">Gerenciamento de Cursos</h2>

        <span
            class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400 text-center">{{ $cursos->total() }}
            cursos</span>
    </div>

    <div class="mt-6 md:flex md:items-center md:justify-between mr-4 ml-4">

        <div class="relative flex items-center mt-4 md:mt-0 text-sm">
            <span class="absolute">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </span>
    
            <form action="{{ route('cursos.index') }}" method="get">
                <input name="filter" type="text" placeholder="Pesquisar" class="block w-full px-5 py-2 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-60 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" value="{{ $filters['filter'] ?? '' }}">
            </form>
        </div>
    </div>


    <a href="{{ route('cursos.novo') }}"
        class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 mr-4 text-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>


        <span>
            Adicionar novo Curso
        </span>
    </a>

</section>
