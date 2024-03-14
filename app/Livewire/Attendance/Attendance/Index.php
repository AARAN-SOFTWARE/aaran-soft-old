<?php

namespace App\Livewire\Attendance\Attendance;

use Aaran\Attendance\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $vid='';
    public $vdate='';
    public $in_time='';
    public $out_time='';
    public $user_name='';

    public function save()
    {

            if ($this->vid == "") {
                Attendance::create([
                    'user_id' => Auth::id(),
                    'vdate' => $this->vdate,
                    'in_time' => $this->in_time,
                    'out_time' => $this->out_time,
                ]);
            } else {
                $obj = Attendance::find($this->vid);
                $obj->user_id = Auth::id();
                $obj->vdate = $this->vdate;
                $obj->in_time = $this->in_time;
                $obj->out_time = Carbon::now()->format('g:i:s');
                $obj->save();
            }

    }

    public function getlist()
    {
       return Attendance::all();
    }

    public function getObj($id)
    {
        if ($id) {
            $obj = Attendance::find($id);
            $this->vid = $obj->id;
            $this->vdate = $obj->vdate;
            $this->in_time = $obj->in_time;
            $this->out_time = $obj->out_time;
            $this->user_id = $obj->user_id;
            $this->user_name = $obj->user->vname;
            return $obj;
        }
        return null;
    }


    public function mark_in()
    {
        $this->vdate = Carbon::parse(Carbon::now())->format('Y-m-d');
        $this->in_time=Carbon::now()->format('g:i:s');
        $this->save();
    }
    public function mark_out($id)
    {
        $this->getObj($id);
        $this->save();

    }



    public function render()
    {
        return view('livewire.attendance.attendance.index')->with([
            'list' => $this->getList()
        ]);

    }
}
