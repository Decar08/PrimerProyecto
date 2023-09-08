@csrf

<label class="uppercaase text-white-700 text-xs">Título</label>
<input type="text" name="title" class="rounded border-black-200 w-full mb-4" value="{{ $posts->title }}">

<label class="uppercaase text-white-700 text-xs">Contenido</label>
<textarea name="body" rows="5" class="rounded border-black-200 w-full mb-4">{{ $posts->body }}</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>

    <input type="submit" value="Enviar" class="bg-red-800 text-white rounded px-4 py-2">
</div>