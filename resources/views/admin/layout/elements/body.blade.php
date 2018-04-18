@component('admin.layout.default')

    <h3>{{ $title }}
        <smal>{{ $description }}</smal>
    </h3>

    <div class="panel panel-default">
        <div class="panel-body">
            {{ $slot }}
        </div>
    </div>

@endcomponent