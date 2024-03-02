<?php

namespace App\Livewire\Entries\Sales;

use Aaran\Common\Models\Ledger;
use Aaran\Common\Models\Transport;
use Aaran\Entries\Models\Sale;
use Aaran\Master\Models\Company;
use Aaran\Master\Models\Contact;
use Aaran\Orders\Models\Order;
use App\Livewire\Trait\CommonTrait;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

class Upsert extends Component
{
    use CommonTrait;

    public string $uniqueno='';
    public string $acyear='';
    public string $invoice_no='';
    public string $invoice_date='';
    public string $sales_type='';
    public string $destination='';
    public string $bundle='';
    public string $total_qty='';
    public string $total_taxable='';
    public string $total_gst='';
    public string $additional='';
    public string $round_off='';
    public string $grand_total='';
    public string $qty='';
    public string $price='';
    public string $gst_percent='';

    public string $company;
    public string $contact;
    public string $order;
    public string $transport;
    public string $ledger;
    public string $sale;
    public string $product;
    public string $colour;
    public string $size;


    public $company_id = '';
    public $company_name = '';
    public Collection $companyCollection;
    public $highlightCompany = 0;
    public $companyTyped = false;

    public function decrementCompany(): void
    {
        if ($this->highlightCompany === 0) {
            $this->highlightCompany = count($this->companyCollection) - 1;
            return;
        }
        $this->highlightCompany--;
    }

    public function incrementCompany(): void
    {
        if ($this->highlightCompany === count($this->companyCollection) - 1) {
            $this->highlightCompany = 0;
            return;
        }
        $this->highlightCompany++;
    }
    public function setCompany($name, $id): void
    {
        $this->company_name = $name;
        $this->company_id = $id;
        $this->getCompanyList();
    }

    public function enterCompany(): void
    {
        $obj = $this->companyCollection[$this->highlightCompany] ?? null;

        $this->company_name = '';
        $this->companyCollection = Collection::empty();
        $this->highlightCompany = 0;

        $this->company_name = $obj['vname'] ?? '';;
        $this->company_id = $obj['id'] ?? '';;
    }

    #[On('refresh-company')]
    public function refreshCompany($v): void
    {
        $this->company_id = $v['id'];
        $this->company_name = $v['name'];
        $this->companyTyped = false;

    }

    public function getCompanyList(): void
    {


        $this->companyCollection = $this->company_name ? Company::search(trim($this->company_name ))->get():Company::all();

    }

    public $contact_id= '';
    public $contact_name = '';
    public Collection $contactCollection;
    public $highlightContact = 0;
    public $contactTyped = false;

    public function decrementContact(): void
    {
        if ($this->highlightContact === 0) {
            $this->highlightContact = count($this->contactCollection) - 1;
            return;
        }
        $this->highlightContact--;
    }

    public function incrementContact(): void
    {
        if ($this->highlightContact === count($this->contactCollection) - 1) {
            $this->highlightContact = 0;
            return;
        }
        $this->highlightContact++;
    }
    public function setContact($name, $id): void
    {
        $this->contact_name = $name;
        $this->contact_id = $id;
        $this->getContactList();
    }

    public function enterContact(): void
    {
        $obj = $this->contactCollection[$this->highlightContact] ?? null;

        $this->contact_name = '';
        $this->contactCollection = Collection::empty();
        $this->highlightContact = 0;

        $this->contact_name = $obj['vname'] ?? '';;
        $this->contact_id = $obj['id'] ?? '';;
    }

    #[On('refresh-contact')]
    public function refreshContact($v): void
    {
        $this->contact_id = $v['id'];
        $this->contact_name = $v['name'];
        $this->contactTyped = false;

    }

    public function getContactList(): void
    {

        $this->contactCollection = $this->contact_name ? Contact::search(trim($this->contact_name ))->get():Contact::all();

    }


    public $order_id = '';
    public $order_name = '';
    public Collection $orderCollection;
    public $highlightOrder = 0;
    public $orderTyped = false;

    public function decrementOrder(): void
    {
        if ($this->highlightOrder === 0) {
            $this->highlightOrder = count($this->orderCollection) - 1;
            return;
        }
        $this->highlightOrder--;
    }

    public function incrementOrder(): void
    {
        if ($this->highlightOrder === count($this->orderCollection) - 1) {
            $this->highlightOrder = 0;
            return;
        }
        $this->highlightOrder++;
    }
    public function setOrder($name, $id): void
    {
        $this->order_name = $name;
        $this->order_id = $id;
        $this->getOrderList();
    }

    public function enterOrder(): void
    {
        $obj = $this->orderCollection[$this->highlightOrder] ?? null;

        $this->order_name = '';
        $this->orderCollection = Collection::empty();
        $this->highlightOrder = 0;

        $this->order_name = $obj['vname'] ?? '';;
        $this->order_id = $obj['id'] ?? '';;
    }

    #[On('refresh-order')]
    public function refreshOrder($v): void
    {
        $this->order_id = $v['id'];
        $this->order_name = $v['name'];
        $this->orderTyped = false;

    }

    public function getOrderList(): void
    {
        $this->orderCollection = $this->order_name ? Order::search(trim($this->order_name ))
            ->get():Order::all();
    }

    public $transport_id = '';
    public $transport_name = '';
    public Collection $transportCollection;
    public $highlightTransport = 0;
    public $transportTyped = false;

    public function decrementTransport(): void
    {
        if ($this->highlightTransport === 0) {
            $this->highlightTransport = count($this->transportCollection) - 1;
            return;
        }
        $this->highlightTransport--;
    }

    public function incrementTransport(): void
    {
        if ($this->highlightTransport === count($this->transportCollection) - 1) {
            $this->highlightTransport = 0;
            return;
        }
        $this->highlightTransport++;
    }
    public function setTransport($name, $id): void
    {
        $this->transport_name = $name;
        $this->transport_id = $id;
        $this->getTransportList();
    }

    public function enterTransport(): void
    {
        $obj = $this->transportCollection[$this->highlightTransport] ?? null;

        $this->transport_name = '';
        $this->transportCollection = Collection::empty();
        $this->highlightTransport = 0;

        $this->transport_name = $obj['vname'] ?? '';;
        $this->transport_id = $obj['id'] ?? '';;
    }

    #[On('refresh-transport')]
    public function refreshTransport($v): void
    {
        $this->transport_id = $v['id'];
        $this->transport_name = $v['name'];
        $this->transportTyped = false;

    }

    public function getTransportList(): void
    {
        $this->transportCollection = $this->transport_name ? Transport::search(trim($this->transport_name ))
            ->get():Transport::all();
    }

    public $ledger_id = '';
    public $ledger_name = '';
    public Collection $ledgerCollection;
    public $highlightLedger = 0;
    public $ledgerTyped = false;

    public function decrementLedger(): void
    {
        if ($this->highlightLedger === 0) {
            $this->highlightLedger = count($this->ledgerCollection) - 1;
            return;
        }
        $this->highlightLedger--;
    }

    public function incrementLedger(): void
    {
        if ($this->highlightLedger === count($this->ledgerCollection) - 1) {
            $this->highlightLedger = 0;
            return;
        }
        $this->highlightLedger++;
    }
    public function setLedger($name, $id): void
    {
        $this->ledger_name = $name;
        $this->ledger_id = $id;
        $this->getLedgerList();
    }

    public function enterLedger(): void
    {
        $obj = $this->ledgerCollection[$this->highlightLedger] ?? null;

        $this->ledger_name = '';
        $this->ledgerCollection = Collection::empty();
        $this->highlightLedger = 0;

        $this->ledger_name = $obj['vname'] ?? '';;
        $this->ledger_id = $obj['id'] ?? '';;
    }

    #[On('refresh-ledger')]
    public function refreshLedger($v): void
    {
        $this->ledger_id = $v['id'];
        $this->ledger_name = $v['name'];
        $this->ledgerTyped = false;

    }

    public function getLedgerList(): void
    {
        $this->ledgerCollection = $this->ledger_name ? Ledger::search(trim($this->ledger_name ))
            ->get():Ledger::all();
    }


    public function save(): string
    {
        if ($this-> uniqueno!= '') {
            if ($this->vid == "") {
                Sale::create([
                    'uniqueno' => $this->uniqueno,
                    'acyear'=>$this->acyear,
                    'company_id' => $this->company_id,
                    'contact_id' => $this->contact_id,
                    'invoice_no' => $this->invoice_no,
                    'invoice_date' => $this->invoice_date,
                    'order_id' => $this->order_id,
                    'sales_type' => $this->sales_type,
                    'transport_id' => $this->transport_id,
                    'destination' => $this->destination,
                    'bundle' => $this->bundle,
                    'total_qty' => $this->total_qty,
                    'total_taxable' => $this->total_taxable,
                    'total_gst' => $this->total_gst,
                    'ledger_id' => $this->ledger_id,
                    'additional' => $this->additional,
                    'round_off' => $this->round_off,
                    'grand_total' => $this->grand_total,
                    'active_id' => $this->active_id,
                ]);
                $message = "Saved";
                $this->getRoute();

            } else {
                $obj = Sale::find($this->vid);
                $obj->uniqueno = $this->uniqueno;
                $obj->acyear = $this->acyear;
                $obj->company_id = $this->company_id;
                $obj->contact_id = $this->contact_id;
                $obj->invoice_no = $this->invoice_no;
                $obj->invoice_date = $this->invoice_date;
                $obj->order_id = $this->order_id;
                $obj->sales_type = $this->sales_type;
                $obj->transport_id = $this->transport_id;
                $obj->destination = $this->destination;
                $obj->bundle = $this->bundle;
                $obj->total_qty = $this->total_qty;
                $obj->total_taxable = $this->total_taxable;
                $obj->total_gst = $this->total_gst;
                $obj->ledger_id = $this->ledger_id;
                $obj->additional = $this->additional;
                $obj->round_off = $this->round_off;
                $obj->grand_total = $this->grand_total;
                $obj->active_id = $this->active_id;
                $obj->save();
                $message = "Updated";
            }
            $this->getRoute();
            return $message;
        }
        return '';
    }

    public function mount($id): void
    {
        if ($id !=0){
            $obj=Sale::find($id);
            $this->vid = $obj->id;
            $this->uniqueno = $obj->uniqueno;
            $this->acyear = $obj->acyear;
            $this->company_id = $obj->company_id;
            $this->company_name = $obj->company->vname;
            $this->contact_id = $obj->contact_id;
            $this->contact_name = $obj->contact->vname;
            $this->invoice_no = $obj->invoice_no;
            $this->invoice_date = $obj->invoice_date;
            $this->order_id = $obj->order_id;
            $this->order_name = $obj->order->vname;
            $this->sales_type = $obj->sales_type;
            $this->transport_id = $obj->transport_id;
            $this->transport_name = $obj->transport->vname;
            $this->destination = $obj->destination;
            $this->bundle = $obj->bundle;
            $this->total_qty = $obj->total_qty;
            $this->total_taxable= $obj->total_taxable;
            $this->total_gst=$obj->total_gst;
            $this->ledger_id = $obj->ledger_id;
            $this->ledger_name = $obj->ledger->vname;
            $this->additional = $obj->additional;
            $this->round_off = $obj->round_off;
            $this->grand_total = $obj->grand_total;
            $this->active_id = $obj->active_id;
        }else{
            $this->active_id=true;
            $this->invoice_date=Carbon::now()->format('Y-m-d');
        }
    }

    public function getObj($id)
    {
        if ($id) {
            $obj = Sale::find($id);
            $this->vid = $obj->id;
            $this->uniqueno = $obj->uniqueno;
            $this->acyear = $obj->acyear;
            $this->company_id = $obj->company_id;
            $this->company_name = $obj->company->vname;
            $this->contact_id = $obj->contact_id;
            $this->contact_name = $obj->contact->vname;
            $this->invoice_no = $obj->invoice_no;
            $this->invoice_date = $obj->invoice_date;
            $this->order_id = $obj->order_id;
            $this->order_name = $obj->order->vname;
            $this->sales_type = $obj->sales_type;
            $this->transport_id = $obj->transport_id;
            $this->transport_name = $obj->transport->vname;
            $this->destination = $obj->destination;
            $this->bundle = $obj->bundle;
            $this->total_qty = $obj->total_qty;
            $this->total_taxable= $obj->total_taxable;
            $this->total_gst=$obj->total_gst;
            $this->ledger_id = $obj->ledger_id;
            $this->ledger_name = $obj->ledger->vname;
            $this->additional = $obj->additional;
            $this->round_off = $obj->round_off;
            $this->grand_total = $obj->grand_total;
            $this->active_id = $obj->active_id;

            return $obj;
        }
        return null;
    }

    public function getRoute(): void
    {
        $this->redirect(route('sales'));
    }


    public function render()
    {

        $this->getCompanyList();
        $this->getContactList();
        $this->getOrderList();
        $this->getTransportList();
        $this->getLedgerList();
        return view('livewire.entries.sales.upsert');
    }
}
