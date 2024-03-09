<?php

namespace App\Livewire\Common;

use Aaran\Common\Models\City;
use App\Livewire\Trait\CommonTrait;
use Illuminate\Support\Str;
use Livewire\Component;

class CityList extends Component
{
    use CommonTrait;

    public function getSave(): string
    {
        if ($this->vname != '') {
            if ($this->vid == "") {
                City::create([
                    'vname' => Str::ucfirst($this->vname),
                    'active_id' => $this->active_id,
                ]);
                $message = "Saved";

            } else {
                $obj = City::find($this->vid);
                $obj->vname = Str::ucfirst($this->vname);
                $obj->active_id = $this->active_id;
                $obj->save();
                $message = "Updated";
            }
            return $message;
        }
        return '';
    }

    public function getObj($id)
    {
        if ($id) {
            $obj = City::find($id);
            $this->vid = $obj->id;
            $this->vname = $obj->vname;
            $this->active_id = $obj->active_id;
            return $obj;
        }
        return null;
    }

    public function getList()
    {
        return City::search($this->searches)
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
        sleep(0.5);
        return view('livewire.common.city-list')->with([
            'list' => $this->getList()
        ]);
    }
}
