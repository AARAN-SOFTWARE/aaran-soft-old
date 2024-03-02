<?php

namespace App\Livewire\Erp\Production\SectionInward;

use App\Livewire\Trait\EntriesIndexAbstract;
use App\Models\Erp\Production\SectionInward;

class Index extends EntriesIndexAbstract
{
    public function create(): void
    {
        $this->redirect(route('sectioninwards.upsert', ['0']));
    }

    public function getList()
    {
        return SectionInward::search($this->searches)
            ->select('orders.vname as order_name',
                'styles.vname as style_name',
                'jobcards.vno as jobcard_no',
                'contacts.vname as contact_name',
                'section_inwards.*'
            )
            ->join('contacts', 'contacts.id', '=', 'section_inwards.contact_id')
            ->join('jobcards', 'jobcards.id', '=', 'section_inwards.jobcard_id')
            ->join('orders', 'orders.id', '=', 'jobcards.order_id')
            ->join('styles', 'styles.id', '=', 'jobcards.style_id')
            ->where('section_inwards.active_id', '=', $this->activeRecord)
            ->where('section_inwards.tenant_id', '=', session()->get('tenant_id'))
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate($this->perPage);
    }

    public function render()
    {
        return view('livewire.erp.production.section-inward.index')->with([
            'list' => $this->getList()
        ]);
    }
}
