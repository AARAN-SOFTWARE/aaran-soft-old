<div>
    <x-slot name="header">Cutting Note</x-slot>

    <x-forms.m-panel>
        <x-forms.top-controls :show-filters="$showFilters"/>

        <x-forms.table>
            <x-slot name="table_header">
                <x-table.ths wire:click.prevent="sortBy('vname')">Order No</x-table.ths>
                <x-table.ths wire:click.prevent="sortBy('vname')">Job No</x-table.ths>
                <x-table.ths wire:click.prevent="sortBy('vname')">Date</x-table.ths>
                <x-table.ths wire:click.prevent="sortBy('vname')">Cutting Master</x-table.ths>
                <x-table.ths-center wire:click.prevent="sortBy('vname')">Cutting Qty</x-table.ths-center>
            </x-slot>
            <x-slot name="table_body">
                @forelse ($list as $index =>  $row)
                    <x-table.row>

                        <x-table.cell>
                            <a href="{{route('cuttings.upsert',[$row->id])}}"
                               class="flex flex-col px-3">
                                <div class="text-gray-600 truncate text-xl text-left">
                                    {{ $row->order->vname }}
                                </div>
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                            <a href="{{route('cuttings.upsert',[$row->id])}}"
                               class="flex px-3 text-gray-600 truncate text-xl text-left">
                                {{ $row->vno }}
                            </a>
                        </x-table.cell>



                        <x-table.cell>
                            <a href="{{route('cuttings.upsert',[$row->id])}}"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-left">
                                {{date('d-m-Y', strtotime($row->vdate))}}
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                            <a href="{{route('cuttings.upsert',[$row->id])}}"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-left">
                                {{ $row->cutting_master }}
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                            <a href="{{route('cuttings.upsert',[$row->id])}}"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                                {{ $row->total_qty + 0 }}
                            </a>
                        </x-table.cell>
                    </x-table.row>
                @empty
                    <x-table.empty/>
                @endforelse
            </x-slot>
            <x-slot name="table_pagination">
                {{ $list->links() }}
            </x-slot>
        </x-forms.table>

        <x-modal.delete/>
    </x-forms.m-panel>
</div>
