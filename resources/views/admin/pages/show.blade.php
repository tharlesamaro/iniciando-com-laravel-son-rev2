@component('admin.layout.elements.body')
    @slot('title') Páginas @endslot
    @slot('description') @endslot

    <a href="{{ route('pages.index') }}" class="btn btn-sm btn-primary">Voltar</a>
    <a href="{{ route('pages.edit', 1) }}" class="btn btn-sm btn-primary">Editar</a>
    <a href="{{ route('pages.destroy', 1) }}" class="btn btn-sm btn-primary">Remover</a>

@endcomponent