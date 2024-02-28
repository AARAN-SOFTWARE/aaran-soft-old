<div>
    <x-slot name="header">Contacts</x-slot>

    <x-forms.m-panel>
        <x-forms.top-controls :show-filters="$showFilters"/>

        <x-forms.table>
            <x-slot name="table_header">
                <x-table.ths-slno wire:click.prevent="sortBy('vname')">Sl.no</x-table.ths-slno>
                <x-table.ths-center wire:click.prevent="sortBy('vname')">Contact Name</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('vname')">Mobile</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('vname')">Whatsapp</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('vname')">Email</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('vname')">Gst</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('vname')">City</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('vname')">State</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('vname')">Pin-Code</x-table.ths-center>
            </x-slot>

            <x-slot name="table_body">
                @forelse ($list as $index =>  $row)
                    <x-table.row>

                        <x-table.cell>
                             <a href="{{route('contacts.upsert',[$row->id])}}"
                             class="flex px-3 text-gray-600 truncate text-xl text-center">
                                {{ $index + 1 }}
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                            <a href="{{route('contacts.upsert',[$row->id])}}"
                             class="flex px-3 text-gray-600 truncate text-xl text-left">
                                {{ $row->vname}}
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                            <a href="{{route('contacts.upsert',[$row->id])}}"
                             class="flex px-3 text-gray-600 truncate text-xl text-center">
                                {{ $row->mobile}}
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                            <a href="{{route('contacts.upsert',[$row->id])}}"
                             class="flex px-3 text-gray-600 truncate text-xl text-center">
                                {{ $row->whatsapp}}
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                             <a href="{{route('contacts.upsert',[$row->id])}}"
                                class="flex px-3 text-gray-600 truncate text-xl text-left">
                                {{ $row->email}}
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                            <a href="{{route('contacts.upsert',[$row->id])}}"
                             class="flex px-3 text-gray-600 truncate text-xl text-left">
                                {{ $row->gstin}}
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                            <a href="{{route('contacts.upsert',[$row->id])}}"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                                {{ $row->city->vname }}
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                            <a href="{{route('contacts.upsert',[$row->id])}}"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                               {{ $row->state->vname }}
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                            <a href="{{route('contacts.upsert',[$row->id])}}"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                                {{ $row->pincode->vname }}
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
    </x-forms.m-panel>
</div>
