@csrf

<label class="uppercaase text-white-700 text-xs">Título</label>
<span class="text-xs text-red-600">@error('title') {{ $message }} @enderror</span>

<input type="text" name="title" class="rounded border-black-200 w-full mb-4" style= " background-color:#111827" value="{{ old('title', $posts->title) }}">


<label class="uppercaase text-white-700 text-xs">Slug</label>
<span class="text-xs text-red-600">@error('slug') {{ $message }} @enderror</span>

<input type="text" name="slug" class="rounded border-black-200 w-full mb-4" style= " background-color:#111827" value="{{ old('slug', $posts->slug) }}">


<label class="uppercaase text-white-700 text-xs" >Contenido</label>
<span class="text-xs text-red-600">@error('body') {{ $message}} @enderror</span>

<textarea name="body" rows="5" class="rounded border-black-200 w-full mb-4" style= " background-color:#111827">{{ old('body', $posts->body) }}</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>

    <input type="submit" value="Enviar" class="bg-red-800 text-white rounded px-4 py-2">
</div>