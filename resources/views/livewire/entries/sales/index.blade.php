<div>
    <x-slot name="header">Sales</x-slot>

    <x-forms.m-panel>
        <x-forms.top-controls :show-filters="$showFilters"/>

        <x-forms.table>
            <x-slot name="table_header">
                <x-table.ths-slno wire:click.prevent="sortBy('invoice_no')">Sl.no</x-table.ths-slno>
                <x-table.ths-center wire:click.prevent="sortBy('invoice_no')">Sales NO</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('invoice_no')">Company Name</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('invoice_no')">Contact</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('invoice_no')">Invoice NO</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('invoice_no')">Invoice Date</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('invoice_no')">Order Id</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('invoice_no')">Sales Type</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('invoice_no')">Transport</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('invoice_no')">Destination</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('invoice_no')">Bundle</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('invoice_no')">Total Qty</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('invoice_no')">Total Taxable</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('invoice_no')">Total Dst</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('invoice_no')">Ledger No</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('invoice_no')">Additional Charges</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('invoice_no')">Round Off</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('invoice_no')">Grand Total</x-table.ths-center>
                <x-table.heading>Action</x-table.heading>
            </x-slot>

            <x-slot name="table_body">
                @forelse ($list as $index =>  $row)
                    <x-table.row>

                        <x-table.cell>
                            <a href=""
                               class="flex px-3 text-gray-600 truncate text-xl text-center">
                                {{ $index + 1 }}
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                            <a href="{{route('sales.upsert',[$row->id])}}"
                               class="flex px-3 text-gray-600 truncate text-xl text-left">
                                {{ $row->uniqueno}}
                            </a>
                        </x-table.cell>
                        <x-table.cell>
                            <a href="{{route('sales.upsert',[$row->id])}}"
                               class="flex px-3 text-gray-600 truncate text-xl text-left">
                                {{ $row->company->vname}}
                            </a>
                        </x-table.cell>
                        <x-table.cell>
                            <a href="{{route('sales.upsert',[$row->id])}}"
                               class="flex px-3 text-gray-600 truncate text-xl text-left">
                                {{ $row->contact->vname}}
                            </a>
                        </x-table.cell>
                        <x-table.cell>
                            <a href="{{route('sales.upsert',[$row->id])}}"
                               class="flex px-3 text-gray-600 truncate text-xl text-center">
                                {{ $row->invoice_no}}
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                            <a href="{{route('sales.upsert',[$row->id])}}"
                               class="flex px-3 text-gray-600 truncate text-xl text-center">
                                {{ $row->invoice_date}}
                            </a>
                        </x-table.cell>
                        <x-table.cell>
                            <a href="{{route('sales.upsert',[$row->id])}}"
                               class="flex px-3 text-gray-600 truncate text-xl text-left">
                                {{ $row->order->vname}}
                            </a>
                        </x-table.cell>
                        <x-table.cell>
                            <a href="{{route('sales.upsert',[$row->id])}}"
                               class="flex px-3 text-gray-600 truncate text-xl text-left">
                                {{\App\Enums\GST::tryFrom($row->sales_type)->getName()}}
                            </a>
                        </x-table.cell>
                        <x-table.cell>
                            <a href="{{route('sales.upsert',[$row->id])}}"
                               class="flex px-3 text-gray-600 truncate text-xl text-left">
                                {{ $row->transport->vname}}
                            </a>
                        </x-table.cell>
                        <x-table.cell>
                            <a href="{{route('sales.upsert',[$row->id])}}"
                               class="flex px-3 text-gray-600 truncate text-xl text-left">
                                {{ $row->destination}}
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                            <a href="{{route('sales.upsert',[$row->id])}}"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                                {{ $row->bundle }}
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                            <a href="{{route('sales.upsert',[$row->id])}}"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                                {{ $row->total_qty}}
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                            <a href="{{route('sales.upsert',[$row->id])}}"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                                {{ $row->total_taxable }}
                            </a>
                        </x-table.cell>
                        <x-table.cell>
                            <a href="{{route('sales.upsert',[$row->id])}}"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                                {{ $row->total_gst }}
                            </a>
                        </x-table.cell>
                        <x-table.cell>
                            <a href="{{route('sales.upsert',[$row->id])}}"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                                {{ $row->ledger->vname }}
                            </a>
                        </x-table.cell>
                        <x-table.cell>
                            <a href="{{route('sales.upsert',[$row->id])}}"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                                {{ $row->additional }}
                            </a>
                        </x-table.cell>
                        <x-table.cell>
                            <a href="{{route('sales.upsert',[$row->id])}}"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                                {{ $row->round_off }}
                            </a>
                        </x-table.cell>
                        <x-table.cell>
                            <a href="{{route('sales.upsert',[$row->id])}}"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                                {{ $row->grand_total }}
                            </a>
                        </x-table.cell>
                        <x-table.cell>
                            <div class="w-full flex justify-center gap-3">
                                <a href="{{route('sales.upsert',[$row->id])}}"
                                   class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                                    <x-button.link >&nbsp;
                                        <x-icons.icon :icon="'pencil'"
                                                      class="text-blue-500 h-5 w-auto block"/>
                                    </x-button.link>
                                </a>
                                <x-button.link wire:click="set_delete({{$row->id}})" wire:confirm="Are you sure you want to delete this ?">&nbsp;
                                    <x-icons.icon :icon="'trash'"
                                                  class="text-red-600 h-5 w-auto block"/>
                                </x-button.link>
                            </div>
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
