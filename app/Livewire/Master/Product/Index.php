<?php

namespace App\Livewire\Master\Product;

use Aaran\Master\Models\Product;
use App\Livewire\Trait\CommonTrait;
use Livewire\Component;

class Index extends Component
{
    use CommonTrait;
    public function create(): void
    {
        $this->redirect(route('products.upsert', ['0']));
    }
    public function getList(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return Product::search($this->searches)
            ->where('active_id', '=', $this->activeRecord)
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate($this->perPage);
    }
    public function render()
    {
        return view('livewire.master.product.index')->with([
            'list' => $this->getList()
        ]);
    }
}
