<section class="container px-4 mx-auto flex justify-between items-center">

    <div class="flex items-center gap-x-3 ml-4">
        <h2 class="text-lg font-medium text-gray-800 dark:text-white">Gerenciamento de Cursos</h2>

        <span
            class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">{{ $cursos->total() }}
            cursos</span>
    </div>


    <a href="{{ route('cursos.novo') }}"
        class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 mr-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>


        <span>
            Adicionar novo Curso
        </span>
    </a>

</section>