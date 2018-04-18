@component('admin.layout.elements.body')
    @slot('title') Páginas @endslot
    @slot('description') Edição de página @endslot

    <a href="{{ route('pages.index') }}" class="btn btn-sm btn-primary">Voltar</a>

@endcomponent