<?php

namespace App\Livewire\Master\Company;

use Aaran\Master\Models\Company;
use App\Livewire\Trait\CommonTrait;
use Livewire\Component;

class Index extends Component
{
    use CommonTrait;
    public function create():void
    {
        $this->redirect(route("companies.upsert", ['0']));
    }

    public function getList(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return Company::search($this->searches)
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
        return view('livewire.master.company.index')->with([
            'list' => $this->getList()
        ]);
    }
}
