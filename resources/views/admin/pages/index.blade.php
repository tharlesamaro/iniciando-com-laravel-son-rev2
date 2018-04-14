@component('admin.layout.elements.body')
    @slot('title') Páginas @endslot
    @slot('description') Administração de Páginas @endslot

    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>title</th>
            <th>ações</th>
        </tr>
        </thead>

        <tbody>
        @foreach($pages as $page)
            <tr>
                <td>{{ $page->id }}</td>
                <td>{{ $page->title }}</td>
                <td>#</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endcomponent