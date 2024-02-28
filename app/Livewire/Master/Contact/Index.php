<?php

namespace App\Livewire\Master\Contact;


use Aaran\Master\Models\Contact;
use App\Livewire\Trait\CommonTrait;
use Livewire\Component;

class Index extends Component
{
    use CommonTrait;
    public function create():void
    {
        $this->redirect(route("contacts.upsert", ['0']));
    }

    public function getList(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return Contact::search($this->searches)
            ->where('active_id', '=', $this->activeRecord)
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate($this->perPage);
    }

    public function reRender(): void
    {
        $this->render()->render();
    }

    public function render()
    {
        return view('livewire.master.contact.index')->with([
            'list' => $this->getList()
        ]);
    }
}
