<div >
    <x-slot name="header">Contact Entery</x-slot>
    <x-forms.m-panel>
        <section class="xl:grid grid-cols-3 gap-12">
        <x-input.model-text wire:model="uniqueno" :label="'Sales No'"/>
        <x-input.model-text wire:model="acyear" :label="'Acyear'"/>
        <div class="flex flex-row py-3 gap-3">
            <div class="xl:flex w-full gap-2">
                <label for="city_name" class="w-[10rem] text-zinc-500 tracking-wide py-2 ">Company Name</label>
                <div x-data="{isTyped: @entangle('companyTyped')}" @click.away="isTyped = false" class="w-full">
                    <div>
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
                            class="block w-full purple-textbox "
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
                                                        {{ $highlightCompany === $i ? 'bg-yellow-100' : '' }}"
                                                    wire:click.prevent="setCompany('{{$company->vname}}','{{$company->id}}')"
                                                    x-on:click="isTyped = false">
                                                    {{ $company->vname }}
                                                </li>

                                            @empty
{{--                                                <a href="{{route('companies.upsert')}}}"/>--}}
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
        <div class="flex flex-col gap-2">
            <div class="xl:flex w-full gap-2">
                <label for="state_name" class="w-[10rem] text-zinc-500 tracking-wide py-2">Contact</label>
                <div x-data="{isTyped: @entangle('contactTyped')}" @click.away="isTyped = false" class="w-full">
                    <div>
                        <input
                            id="contact_name"
                            type="search"
                            wire:model.live="contact_name"
                            autocomplete="off"
                            placeholder="Contact.."
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
                                        @if($companyCollection)
                                            @forelse ($companyCollection as $i => $contact)

                                                <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        {{ $highlightContact === $i ? 'bg-yellow-100' : '' }}"
                                                    wire:click.prevent="setContact('{{$contact->vname}}','{{$contact->id}}')"
                                                    x-on:click="isTyped = false">
                                                    {{ $contact->vname }}
                                                </li>

                                            @empty
                                                @livewire('master.contact.upsert',[$contact_name])
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
        <x-input.model-text wire:model="invoice_no" :label="'Invoice No'"/>
        <div class="xl:flex flex-row gap-3 py-3">
            <label class="w-[10rem] text-zinc-500 tracking-wide py-2">Invoice Date</label>
            <input type="date" wire:model="invoice_date" class="w-full purple-textbox"/>
        </div>
        <div class="flex flex-col gap-2">
            <div class="xl:flex w-full gap-2">
                <label for="order_name" class="w-[10rem] text-zinc-500 tracking-wide py-2">Order NO</label>
                <div x-data="{isTyped: @entangle('orderTyped')}" @click.away="isTyped = false" class="w-full">
                    <div>
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
        <div class="flex flex-col gap-2">
            <div class="xl:flex w-full gap-2">
                <label for="pincode_name" class="w-[10rem] text-zinc-500 tracking-wide py-2">Transport</label>
                <div x-data="{isTyped: @entangle('transportTyped')}" @click.away="isTyped = false" class="w-full">
                    <div>
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
        <x-input.model-text wire:model="destination" :label="'Destination'"/>
        <x-input.model-text wire:model="bundle" :label="'Bundle'"/>
        <x-input.model-text wire:model="total_qty" :label="'Total Qty'"/>
        <x-input.model-text wire:model="total_taxable" :label="'Total Taxable'"/>
        <x-input.model-text wire:model="total_gst" :label="'Total Gst'"/>
        <div class="flex flex-col gap-2">
            <div class="xl:flex w-full gap-2">
                <label for="pincode_name" class="w-[10rem] text-zinc-500 tracking-wide py-2">Ledger</label>
                <div x-data="{isTyped: @entangle('ledgerTyped')}" @click.away="isTyped = false" class='w-full' >
                    <div>
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
        <x-input.model-text wire:model="grand_total" :label="'Grand Total'"/>
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

