<div>
    <x-slot name="header">Company</x-slot>

    <x-forms.m-panel>
        <x-forms.top-controls :show-filters="$showFilters"/>

        <x-forms.table>
            <x-slot name="table_header">
                <x-table.ths-slno wire:click.prevent="sortBy('vname')">Sl.no</x-table.ths-slno>
                <x-table.ths-center wire:click.prevent="sortBy('vname')">Company Name</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('vname')">Address-1</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('vname')">Address-2</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('vname')">Mobile</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('vname')">Landline</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('vname')">Gst</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('vname')">Pan</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('vname')">Email</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('vname')">Website</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('vname')">City</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('vname')">State</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('vname')">Pin-Code</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('vname')">Logo</x-table.ths-center>
                <x-table.heading>Action</x-table.heading>
            </x-slot>

            <x-slot name="table_body">
                @forelse ($list as $index =>  $row)
                    <x-table.row>

                        <x-table.cell>
                            <a href="{{route('companies.upsert',[$row->id])}}"
                               class="flex px-3 text-gray-600 truncate text-xl text-center">
                                {{ $index + 1 }}
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                            <a href="{{route('companies.upsert',[$row->id])}}"
                               class="flex px-3 text-gray-600 truncate text-xl text-left">
                                {{ $row->display_name}}
                            </a>
                        </x-table.cell>
                        <x-table.cell>
                            <a href="{{route('companies.upsert',[$row->id])}}"
                               class="flex px-3 text-gray-600 truncate text-xl text-left">
                                {{ $row->address_1}}
                            </a>
                        </x-table.cell>
                        <x-table.cell>
                            <a href="{{route('companies.upsert',[$row->id])}}"
                               class="flex px-3 text-gray-600 truncate text-xl text-left">
                                {{ $row->address_2}}
                            </a>
                        </x-table.cell>
                        <x-table.cell>
                            <a href="{{route('companies.upsert',[$row->id])}}"
                               class="flex px-3 text-gray-600 truncate text-xl text-center">
                                {{ $row->mobile}}
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                            <a href="{{route('companies.upsert',[$row->id])}}"
                               class="flex px-3 text-gray-600 truncate text-xl text-center">
                                {{ $row->landline}}
                            </a>
                        </x-table.cell>
                        <x-table.cell>
                            <a href="{{route('companies.upsert',[$row->id])}}"
                               class="flex px-3 text-gray-600 truncate text-xl text-left">
                                {{ $row->gstin}}
                            </a>
                        </x-table.cell>
                        <x-table.cell>
                            <a href="{{route('companies.upsert',[$row->id])}}"
                               class="flex px-3 text-gray-600 truncate text-xl text-left">
                                {{ $row->pan}}
                            </a>
                        </x-table.cell>
                        <x-table.cell>
                            <a href="{{route('companies.upsert',[$row->id])}}"
                               class="flex px-3 text-gray-600 truncate text-xl text-left">
                                {{ $row->email}}
                            </a>
                        </x-table.cell>
                        <x-table.cell>
                            <a href="{{route('companies.upsert',[$row->id])}}"
                               class="flex px-3 text-gray-600 truncate text-xl text-left">
                                {{ $row->website}}
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                            <a href="{{route('companies.upsert',[$row->id])}}"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                                {{ $row->city->vname }}
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                            <a href="{{route('companies.upsert',[$row->id])}}"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                                {{ $row->state->vname }}
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                            <a href="{{route('companies.upsert',[$row->id])}}"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                                {{ $row->pincode->vname }}
                            </a>
                        </x-table.cell>
                        <x-table.cell>
                            <a href="{{route('companies.upsert',[$row->id])}}"
                               class="flex px-3 text-gray-600 truncate text-xl text-left">

                                <div class="flex-shrink-0 h-10 w-10 mr-4">
                                    <img src="{{asset($row->logo)}}"/>
                                </div>

                            </a>
                        </x-table.cell>
                        <x-table.cell>
                            <a href="{{route('companies.upsert',[$row->id])}}"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                                <div class="w-full flex justify-center gap-3">
                                    <x-button.link >&nbsp;
                                        <x-icons.icon :icon="'pencil'"
                                                      class="text-blue-500 h-5 w-auto block"/>
                                    </x-button.link>
                                    <x-button.link >&nbsp;
                                        <x-icons.icon :icon="'trash'"
                                                      class="text-red-600 h-5 w-auto block"/>
                                    </x-button.link>
                                </div>
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
