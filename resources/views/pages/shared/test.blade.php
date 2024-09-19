<x-layouts.app title="Page name">
    {{--
    <x-slot:title>
        Custom Title
    </x-slot>
    --}}

    <div>
        <div>Hola mundo</div>
        <div class="card-header--new">
            <div>card-header--new__div1</div>
            <div>card-header--new__div2</div>
            <div>card-header--new__div3</div>
        </div>
        <div class="my-test">my-test</div>

        <button type="button" class="btn btn-secondary"
                data-bs-toggle="tooltip" data-bs-placement="top"
                data-bs-custom-class="custom-tooltip"
                data-bs-title="This top tooltip is themed via CSS variables.">
            Custom tooltip
        </button>
    </div>
</x-layouts.app>
