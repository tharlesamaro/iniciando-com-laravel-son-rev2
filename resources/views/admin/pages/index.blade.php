@component('admin.layout.elements.body')
    @slot('title') Páginas @endslot
    @slot('description') Administração de Páginas @endslot

    <a href="{{ route('pages.create') }}" class="btn btn-sm btn-primary">Nova</a>

    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pages as $page)
            <tr>
                <td>{{ $page->id }}</td>
                <td>{{ $page->title }}</td>
                <td>
                    <a href="{{ route('pages.show', $page->id) }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $pages->links() }}

@endcomponent