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
                    
                    <table class="mb-4 w-full">  {{-- 👈 w-auto para ajustar ancho al contenido --}}
                        @foreach($posts as $post)
                        <tr class="border-b border-gray-200">
                            <td class="px-6 py-4">{{ $post->title }}</td>
                            
                            <td class="px-6 py-4 text-right whitespace-nowrap">  {{-- 👈 whitespace-nowrap evita salto de línea --}}
                                <a href="{{ route('posts.edit', $post) }}" 
                                    class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-md px-4 py-2 transition-colors mr-2">
                                    Editar
                                </a>
                                
                                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline">
                                    @csrf 
                                    @method('DELETE')
                                    <button 
                                        type="submit"
                                        class="bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md px-4 py-2 transition-colors" 
                                        onclick="return confirm('¿Desea Eliminar?')"
                                    >
                                        Eliminar
                                    </button>
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
</x-app-layout>