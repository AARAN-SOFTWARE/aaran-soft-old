<div >
    <x-slot name="header">Sales Entry</x-slot>
    <x-forms.m-panel>
        <section class="grid grid-cols-2 gap-2 ">
            <div class="w-1/2">
                <x-input.model-text wire:model="uniqueno" :label="'Sales No'"/>
                <div class="flex flex-row py-3 gap-3">
                    <div class="xl:flex w-full gap-2">
                        <label for="city_name" class="w-[10rem] text-zinc-500 tracking-wide py-2 ">Company Name</label>
                        <div x-data="{isTyped: @entangle('companyTyped')}" @click.away="isTyped = false" class="w-full">
                            <div class="relative">
                                <input
                                    id="company_name"
                                    type="search"
                                    wire:model.live="company_name"
                                    autocomplete="off"
                                    placeholder="Company Name.."
                                    @focus="isTyped = true"
                                    @keydown.escape.window="isTyped = false"
                                    @keydown.tab.window="isTyped = false"
                                    @keydown.enter.prevent="isTyped = false"
                                    wire:keydown.arrow-up="decrementCompany"
                                    wire:keydown.arrow-down="incrementCompany"
                                    wire:keydown.enter="enterCompany"
                                    class="block w-full purple-textbox"
                                />

                                <div x-show="isTyped"
                                     x-transition:leave="transition ease-in duration-100"
                                     x-transition:leave-start="opacity-100"
                                     x-transition:leave-end="opacity-0"
                                     x-cloak
                                >
                                    <div class="absolute z-20 w-full mt-2">
                                        <div class="block py-1 shadow-md w-full
                rounded-lg border-transparent flex-1 appearance-none border
                                 bg-white text-gray-800 ring-1 ring-purple-600">
                                            <ul class="overflow-y-scroll h-96">
                                                @if($companyCollection)
                                                    @forelse ($companyCollection as $i => $company)

                                                        <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        {{ $highlightCompany=== $i ? 'bg-yellow-100' : '' }}"
                                                            wire:click.prevent="setCompany('{{$company->vname}}','{{$company->id}}')"
                                                            x-on:click="isTyped = false">
                                                            {{ $company->vname }}
                                                        </li>

                                                    @empty
                                                        @livewire('controls.model.master.company-model',[$company_name])
                                                    @endforelse
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <x-input.model-text wire:model="acyear" :label="'Acyear'"/>
            </div>

            <div class="w-1/2">
                <x-input.model-text wire:model="invoice_no" :label="'Invoice No'"/>
                <div class="xl:flex flex-row gap-3 py-3">
                    <label class="w-[10rem] text-zinc-500 tracking-wide py-2">Invoice Date</label>
                    <input type="date" wire:model="invoice_date" class="w-full purple-textbox"/>
                </div>
                <div class="w-full">
                    <label for="size_name">Contact</label>
                    <div x-data="{isTyped: @entangle('contactTyped')}" @click.away="isTyped = false">
                        <div class="relative">
                            <input
                                id="contact_name"
                                type="search"
                                wire:model.live="contact_name"
                                autocomplete="off"
                                placeholder="contact.."
                                @focus="isTyped = true"
                                @keydown.escape.window="isTyped = false"
                                @keydown.tab.window="isTyped = false"
                                @keydown.enter.prevent="isTyped = false"
                                wire:keydown.arrow-up="decrementContact"
                                wire:keydown.arrow-down="incrementContact"
                                wire:keydown.enter="enterContact"
                                class="block w-full purple-textbox"
                            />

                            <div x-show="isTyped"
                                 x-transition:leave="transition ease-in duration-100"
                                 x-transition:leave-start="opacity-100"
                                 x-transition:leave-end="opacity-0"
                                 x-cloak
                            >
                                <div class="absolute z-20 w-full mt-2">
                                    <div class="block py-1 shadow-md w-full
                rounded-lg border-transparent flex-1 appearance-none border
                                 bg-white text-gray-800 ring-1 ring-purple-600">
                                        <ul class="overflow-y-scroll h-96">
                                            @if($contactCollection)
                                                @forelse ($contactCollection as $i => $contact)

                                                    <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        {{ $highlightSize === $i ? 'bg-yellow-100' : '' }}"
                                                        wire:click.prevent="setContact('{{$contact->vname}}','{{$contact->id}}')"
                                                        x-on:click="isTyped = false">
                                                        {{ $contact->vname }}
                                                    </li>

                                                @empty
                                                    @livewire('controls.model.master.contact-model',[$contact_name])
                                                @endforelse
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="text-2xl font-bold">
            Sales Item
        </section>
        <section class="flex flex-row w-full gap-0.5">
            <div class="w-full">
                <label for="product_name"></label>
                <div x-data="{isTyped: @entangle('productTyped')}" @click.away="isTyped = false">
                    <div class="relative">
                        <input
                            id="product_name"
                            type="search"
                            wire:model.live="product_name"
                            autocomplete="off"
                            placeholder="Product Name.."
                            @focus="isTyped = true"
                            @keydown.escape.window="isTyped = false"
                            @keydown.tab.window="isTyped = false"
                            @keydown.enter.prevent="isTyped = false"
                            wire:keydown.arrow-up="decrementProduct"
                            wire:keydown.arrow-down="incrementProduct"
                            wire:keydown.enter="enterProduct"
                            class="block w-full purple-textbox-no-rounded"
                        />

                        <div x-show="isTyped"
                             x-transition:leave="transition ease-in duration-100"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             x-cloak
                        >
                            <div class="absolute z-20 w-full mt-2">
                                <div class="block py-1 shadow-md w-full
                rounded-lg border-transparent flex-1 appearance-none border
                                 bg-white text-gray-800 ring-1 ring-purple-600">
                                    <ul class="overflow-y-scroll h-96">
                                        @if($productCollection)
                                            @forelse ($productCollection as $i => $product)

                                                <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        {{ $highlightProduct === $i ? 'bg-yellow-100' : '' }}"
                                                    wire:click.prevent="setProduct('{{$product->vname}}','{{$product->id}}')"
                                                    x-on:click="isTyped = false">
                                                    {{ $product->vname }}
                                                </li>

                                            @empty
                                                @livewire('controls.model.master.product-model',[$product_name])
                                            @endforelse
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <label for="colour_name"></label>
                <div x-data="{isTyped: @entangle('colourTyped')}" @click.away="isTyped = false">
                    <div class="relative">
                        <input
                            id="colour_name"
                            type="search"
                            wire:model.live="colour_name"
                            autocomplete="off"
                            placeholder="Colour Name.."
                            @focus="isTyped = true"
                            @keydown.escape.window="isTyped = false"
                            @keydown.tab.window="isTyped = false"
                            @keydown.enter.prevent="isTyped = false"
                            wire:keydown.arrow-up="decrementColour"
                            wire:keydown.arrow-down="incrementColour"
                            wire:keydown.enter="enterColour"
                            class="block w-full purple-textbox-no-rounded"
                        />

                        <div x-show="isTyped"
                             x-transition:leave="transition ease-in duration-100"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             x-cloak
                        >
                            <div class="absolute z-20 w-full mt-2">
                                <div class="block py-1 shadow-md w-full
                rounded-lg border-transparent flex-1 appearance-none border
                                 bg-white text-gray-800 ring-1 ring-purple-600">
                                    <ul class="overflow-y-scroll h-96">
                                        @if($colourCollection)
                                            @forelse ($colourCollection as $i => $colour)

                                                <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        {{ $highlightColour === $i ? 'bg-yellow-100' : '' }}"
                                                    wire:click.prevent="setColour('{{$colour->vname}}','{{$colour->id}}')"
                                                    x-on:click="isTyped = false">
                                                    {{ $colour->vname }}
                                                </li>

                                            @empty
                                                @livewire('controls.model.common.colour-model',[$colour_name])
                                            @endforelse
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <label for="size_name"></label>
                <div x-data="{isTyped: @entangle('sizeTyped')}" @click.away="isTyped = false">
                    <div class="relative">
                        <input
                            id="size_name"
                            type="search"
                            wire:model.live="size_name"
                            autocomplete="off"
                            placeholder="Size.."
                            @focus="isTyped = true"
                            @keydown.escape.window="isTyped = false"
                            @keydown.tab.window="isTyped = false"
                            @keydown.enter.prevent="isTyped = false"
                            wire:keydown.arrow-up="decrementSize"
                            wire:keydown.arrow-down="incrementSize"
                            wire:keydown.enter="enterSize"
                            class="block w-full purple-textbox-no-rounded"
                        />

                        <div x-show="isTyped"
                             x-transition:leave="transition ease-in duration-100"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             x-cloak
                        >
                            <div class="absolute z-20 w-full mt-2">
                                <div class="block py-1 shadow-md w-full
                rounded-lg border-transparent flex-1 appearance-none border
                                 bg-white text-gray-800 ring-1 ring-purple-600">
                                    <ul class="overflow-y-scroll h-96">
                                        @if($sizeCollection)
                                            @forelse ($sizeCollection as $i => $size)

                                                <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        {{ $highlightSize === $i ? 'bg-yellow-100' : '' }}"
                                                    wire:click.prevent="setSize('{{$size->vname}}','{{$size->id}}')"
                                                    x-on:click="isTyped = false">
                                                    {{ $size->vname }}
                                                </li>

                                            @empty
                                                @livewire('controls.model.common.size-model',[$size_name])
                                            @endforelse
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <label for="qty"></label>
                <input id="qty" wire:model="qty" class="block w-full purple-textbox-no-rounded" autocomplete="false" placeholder="Qty">
            </div>
            <div class="w-full">
                <label for="price"></label>
                <input id="price" wire:model="price" class="block w-full purple-textbox-no-rounded" autocomplete="false" placeholder="price">
            </div>
            <div class="w-full">
                <label for="price"></label>
                <select id="price" wire:model="gst_percent" class="block w-full purple-textbox-no-rounded" autocomplete="false" placeholder="price">
                    <option class="text-gray-400"> choose ..</option>
                    @foreach(\App\Enums\GstPercent::cases() as $gst_percent)
                        <option value="{{$gst_percent->value}}">{{$gst_percent->getName()}}</option>
                    @endforeach</select>
            </div>
            <button wire:click="addItems" class="px-3 bg-green-500 text-white font-semibold tracking-wider ">Add
            </button>
        </section>
        <section>

            <div class="py-2 mt-5">

                <table class="w-full">
                    <thead>
                    <tr class="h-8 text-xs bg-gray-100 border border-gray-300">
                        <th class="w-12 px-2 text-center border border-gray-300">#</th>
                        <th class="px-2 text-center border border-gray-300">Product</th>
                        <th class="px-2 text-center border border-gray-300">COLOUR</th>
                        <th class="px-2 text-center border border-gray-300">SIZE</th>
                        <th class="px-2 text-center border border-gray-300">price</th>
                        <th class="px-2 text-center border border-gray-300">Gst Percent</th>
                        <th class="px-2 text-center border border-gray-300">QTY</th>
                        <th class="w-12 px-1 text-center border border-gray-300">ACTION</th>
                    </tr>

                    </thead>

                    <tbody>
                    @php
                        $totalQty = 0;
                        $round_off=0;
                    @endphp

                    @foreach($itemList as $index => $row)
                        <tr class="border border-gray-400">
                            <td class="text-center border border-gray-300 bg-gray-100">
                                <button class="w-full h-full cursor-pointer"
                                        wire:click.prevent="changeItems({{$index}})">
                                    {{$index+1}}
                                </button>
                            </td>
                            <td class="px-2 text-left border border-gray-300" wire:click.prevent="changeItems({{$index}})">{{$row['product_name']}}</td>
                            <td class="px-2 text-center border border-gray-300" wire:click.prevent="changeItems({{$index}})">{{$row['colour_name']}}</td>
                            <td class="px-2 text-center border border-gray-300" wire:click.prevent="changeItems({{$index}})">{{$row['size_name']}}</td>
                            <td class="px-2 text-center border border-gray-300" wire:click.prevent="changeItems({{$index}})">{{floatval($row['price'])}}</td>
                            <td class="px-2 text-center border border-gray-300" wire:click.prevent="changeItems({{$index}})">{{\App\Enums\GstPercent::tryFrom(floatval($row['gst_percent']))->getName()}}</td>
                            <td class="px-2 text-center border border-gray-300" wire:click.prevent="changeItems({{$index}})">{{floatval($row['qty'])}}</td>
                            <td class="text-center border border-gray-300">
                                <button wire:click.prevent="removeItems({{$index}})"
                                        class="py-1.5 w-full text-red-500 items-center ">
                                    <x-icons.icon icon="trash" class="block w-auto h-6"/>
                                </button>
                            </td>
                        </tr>
                        @php
                            $totalQty += $row['qty']+0;
                            $round_off += $row['price']+0
                        @endphp

                    @endforeach


                    </tbody>
                    <tfoot class="mt-2">
                    <tr class="h-8 text-sm border border-gray-400 bg-gray-50">
                        <td colspan="6" class="px-2 text-xs text-right border border-gray-300">&nbsp;TOTALS&nbsp;&nbsp;&nbsp;</td>
                        <td class="px-2 text-center border border-gray-300">{{$totalQty}}</td>
                    </tr>
                    </tfoot>

                </table>

            </div>

        </section>
        <section class="grid grid-cols-3 gap-2 ">
            <section class="w-full">
                <div class="w-1/2">
                    <div class="flex flex-col gap-2">
                        <div class="xl:flex w-full gap-2">
                            <label for="pincode_name" class="w-[10rem] text-zinc-500 tracking-wide py-2">Transport</label>
                            <div x-data="{isTyped: @entangle('transportTyped')}" @click.away="isTyped = false" class="w-full">
                                <div class="relative">
                                    <input
                                        id="transport_name"
                                        type="search"
                                        wire:model.live="transport_name"
                                        autocomplete="off"
                                        placeholder="Transport.."
                                        @focus="isTyped = true"
                                        @keydown.escape.window="isTyped = false"
                                        @keydown.tab.window="isTyped = false"
                                        @keydown.enter.prevent="isTyped = false"
                                        wire:keydown.arrow-up="decrementTransport"
                                        wire:keydown.arrow-down="incrementTransport"
                                        wire:keydown.enter="enterTransport"
                                        class="block w-full purple-textbox"
                                    />

                                    <div x-show="isTyped"
                                         x-transition:leave="transition ease-in duration-100"
                                         x-transition:leave-start="opacity-100"
                                         x-transition:leave-end="opacity-0"
                                         x-cloak
                                    >
                                        <div class="absolute z-20 w-full mt-2">
                                            <div class="block py-1 shadow-md w-full
                rounded-lg border-transparent flex-1 appearance-none border
                                 bg-white text-gray-800 ring-1 ring-purple-600">
                                                <ul class="overflow-y-scroll h-96">
                                                    @if($transportCollection)
                                                        @forelse ($transportCollection as $i => $transport)
                                                            <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        {{ $highlightTransport === $i ? 'bg-yellow-100' : '' }}"
                                                                wire:click.prevent="setTransport('{{$transport->vname}}','{{$transport->id}}')"
                                                                x-on:click="isTyped = false">
                                                                {{ $transport->vname }}
                                                            </li>
                                                        @empty
                                                            @livewire('controls.model.common.transport-mode',[$transport_name])
                                                        @endforelse
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <x-input.model-text wire:model="total_qty" :label="'Total Qty'"/>
                    <x-input.model-text wire:model="destination" :label="'Destination'"/>
                    <x-input.model-text wire:model="bundle" :label="'Bundle'"/>
                </div>
            </section>
            <section class="w-full">
                <div class="w-1/2">
                    <div class="flex flex-col gap-2">
                        <div class="xl:flex w-full gap-2">
                            <label for="order_name" class="w-[10rem] text-zinc-500 tracking-wide py-2">Order NO</label>
                            <div x-data="{isTyped: @entangle('orderTyped')}" @click.away="isTyped = false" class="w-full">
                                <div class="relative">
                                    <input
                                        id="order_name"
                                        type="search"
                                        wire:model.live="order_name"
                                        autocomplete="off"
                                        placeholder="Order.."
                                        @focus="isTyped = true"
                                        @keydown.escape.window="isTyped = false"
                                        @keydown.tab.window="isTyped = false"
                                        @keydown.enter.prevent="isTyped = false"
                                        wire:keydown.arrow-up="decrementOrder"
                                        wire:keydown.arrow-down="incrementOrder"
                                        wire:keydown.enter="enterOrder"
                                        class="block w-full purple-textbox"
                                    />

                                    <div x-show="isTyped"
                                         x-transition:leave="transition ease-in duration-100"
                                         x-transition:leave-start="opacity-100"
                                         x-transition:leave-end="opacity-0"
                                         x-cloak
                                    >
                                        <div class="absolute z-20 w-full mt-2">
                                            <div class="block py-1 shadow-md w-full
                rounded-lg border-transparent flex-1 appearance-none border
                                 bg-white text-gray-800 ring-1 ring-purple-600">
                                                <ul class="overflow-y-scroll h-96">
                                                    @if($orderCollection)
                                                        @forelse ($orderCollection as $i => $order)
                                                            <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        {{ $highlightOrder === $i ? 'bg-yellow-100' : '' }}"
                                                                wire:click.prevent="setOrder('{{$order->vname}}','{{$order->id}}')"
                                                                x-on:click="isTyped = false">
                                                                {{ $order->vname }}
                                                            </li>
                                                        @empty
                                                            @livewire('controls.model.order.order-model',[$order_name])
                                                        @endforelse
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <x-input.model-select wire:model="sales_type" :label="'Sales Type'">
                        <option class="text-gray-400"> choose ..</option>
                        @foreach(\App\Enums\GST::cases() as $sales_type)
                            <option value="{{$sales_type->value}}">{{$sales_type->getName()}}</option>
                        @endforeach
                    </x-input.model-select>
                    <x-input.model-text wire:model="total_taxable" :label="'Total Taxable'"/>
                    <x-input.model-text wire:model="total_gst" :label="'Total Gst'"/>
                </div>
            </section>
            <section class="w-full">
                <div class="w-1/2">
                    <div class="flex flex-col gap-2">
                        <div class="xl:flex w-full gap-2">
                            <label for="pincode_name" class="w-[10rem] text-zinc-500 tracking-wide py-2">Ledger</label>
                            <div x-data="{isTyped: @entangle('ledgerTyped')}" @click.away="isTyped = false" class='w-full' >
                                <div class="relative">
                                    <input
                                        id="ledger_name"
                                        type="search"
                                        wire:model.live="ledger_name"
                                        autocomplete="off"
                                        placeholder="Ledger.."
                                        @focus="isTyped = true"
                                        @keydown.escape.window="isTyped = false"
                                        @keydown.tab.window="isTyped = false"
                                        @keydown.enter.prevent="isTyped = false"
                                        wire:keydown.arrow-up="decrementLedger"
                                        wire:keydown.arrow-down="incrementLedger"
                                        wire:keydown.enter="enterLedger"
                                        class="block w-full purple-textbox"
                                    />

                                    <div x-show="isTyped"
                                         x-transition:leave="transition ease-in duration-100"
                                         x-transition:leave-start="opacity-100"
                                         x-transition:leave-end="opacity-0"
                                         x-cloak
                                    >
                                        <div class="absolute z-20 w-full mt-2">
                                            <div class="block py-1 shadow-md w-full
                rounded-lg border-transparent flex-1 appearance-none border
                                 bg-white text-gray-800 ring-1 ring-purple-600">
                                                <ul class="overflow-y-scroll h-96">
                                                    @if($ledgerCollection)
                                                        @forelse ($ledgerCollection as $i => $ledger)
                                                            <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        {{ $highlightLedger === $i ? 'bg-yellow-100' : '' }}"
                                                                wire:click.prevent="setLedger('{{$ledger->vname}}','{{$ledger->id}}')"
                                                                x-on:click="isTyped = false">
                                                                {{ $ledger->vname }}
                                                            </li>
                                                        @empty
                                                            @livewire('controls.model.common.ledger-model',[$ledger_name])
                                                        @endforelse
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <x-input.model-text wire:model="additional" :label="'Extra-Charges'"/>
                    <x-input.model-text wire:model="round_off" :label="'Round Off'"/>
                    <x-input.model-text wire:model="grand_total" :label="'Grand Total'"/></div>
            </section>

        </section>
    </x-forms.m-panel>
    <div class="px-8 py-6 gap-4 bg-gray-100 rounded-b-md shadow-lg w-full ">

        <div class="flex flex-col md:flex-row justify-between gap-3 mt-5 mb-0">
            <div class="flex gap-3">
                <x-button.save/>
                <x-button.back/>
                <div class="my-2">
                    <label for="active_id" class="inline-flex relative items-center cursor-pointer">
                        <input type="checkbox" id="active_id" class="sr-only peer"
                               wire:model="active_id">
                        <div
                            class="w-10 h-5 bg-gray-200 rounded-full peer peer-focus:ring-2
                                        peer-focus:ring-blue-300
                                         peer-checked:after:translate-x-full peer-checked:after:border-white
                                         after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300
                                         after:border after:rounded-full after:h-4 after:w-4 after:transition-all
                                         peer-checked:bg-blue-600"></div>
                        <span class="ml-3 text-sm font-medium text-gray-900">Active</span>
                    </label>
                </div>
            </div>
        </div>
    </div>


</div>

