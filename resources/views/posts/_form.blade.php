@csrf

{{-- ✅ Agregar for/id conecta label con input (accesibilidad) --}}
<label for="title" class="block uppercase text-gray-500 dark:text-gray-400 text-xs font-semibold tracking-wide mb-1.5">
    Título
</label>
<input
    id="title" {{-- ✅ Necesario para que el label funcione --}}
    type="text"
    name="title"
    value="{{ old('title', $post->title) }}" {{-- ✅ old() mantiene el valor si hay error de validación --}}
    class="w-full rounded-md border border-gray-200 dark:border-gray-700
           bg-gray-50 dark:bg-gray-800 text-gray-900 dark:text-gray-100
           px-3 py-2 text-sm
           focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent
           transition-colors"
>

{{-- ✅ Envolver en div separa el espaciado del input del label --}}
<div class="mb-4"></div>

<label for="body" class="block uppercase text-gray-500 dark:text-gray-400 text-xs font-semibold tracking-wide mb-1.5">
    Contenido
</label>
<textarea
    id="body"
    name="body"
    rows="10"
    class="w-full rounded-md border border-gray-200 dark:border-gray-700
           bg-gray-50 dark:bg-gray-800 text-gray-900 dark:text-gray-100
           px-3 py-2 text-sm resize-y
           focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent
           transition-colors font-sans"
>{{ trim($post->body) }}</textarea> {{-- ✅ trim() evita el espacio en blanco inicial --}}

<div class="flex justify-between items-center mt-6">
    <a href="{{ route('posts.index') }}" class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline">
        ← Volver
    </a>

    {{-- ✅ Usar <button> en vez de <input type="submit"> es más flexible --}}
    <button type="submit"
        class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium
               rounded-md px-4 py-2 transition-colors focus:outline-none focus:ring-2
               focus:ring-indigo-500 focus:ring-offset-2">
        Guardar cambios
    </button>
</div>