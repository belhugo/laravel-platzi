<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center justify-between">
            {{ __('Posts') }}

            <a href="{{ route('posts.create') }}" 
                class="text-xs border border-gray-600 dark:border-gray-200 text-gray-600 dark:text-gray-200
                        hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-500 rounded px-2 py-1">
                Crear
            </a>
		</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <table class="mb-4">
                        @foreach($posts as $post)
                        <tr class="border-b border-gray-200 text-sm">
                            <td class="px-6 py-4">{{ $post->title }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('posts.edit', $post) }}" class="text-indigo-600">Editar</a>
                            </td>
                            <td class="px-6 py-4">
                            	<form action="{{ route('posts.destroy', $post) }}" method="POST">
								    @csrf 
								    @method('DELETE')

								    <input 
								    	type="submit" 
								    	value="Eliminar" 
								    	class=" border border-red-700 text-red-700 rounded hover:text-red-500 hover:border-red-500 px-4 py-2" 
								    	onclick="return confirm('¿Desea Eliminar?')"
								    >
								</form>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    {{ $posts->links() }}
                    
                </div>
            </div>
        </div>
    </div>
    <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 dark:text-gray-400
     hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300
      focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out" href="http://localhost:8000/dashboard">
    Dashboard
</a>
</x-app-layout>