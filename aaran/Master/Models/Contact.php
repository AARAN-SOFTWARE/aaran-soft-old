<?php

namespace Aaran\Master\Models;

use Aaran\Common\Models\{City, Pincode, State};
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Collection;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function search(string $searches)
    {
        return empty($searches) ? static::query()
            : static::where('vname', 'like', '%' . $searches . '%');
    }

    public static function printDetails($ids): Collection
    {
        $obj = self::find($ids);

        return collect([
            'contact_name' => $obj->vname,
            'address_1' => $obj->address_1 . ', ' . $obj->address_area,
            'address_2' => $obj->address_2,
            'address_3' => $obj->city->vname . ' - ' . $obj->pincode->vname . '.  ' . $obj->state->vname . ' - ' . $obj->state->state_code,
            'gstCell' =>  'GSTin - '.$obj->gstin. ', Mobile - ' . $obj->mobile
        ]);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function pincode(): BelongsTo
    {
        return $this->belongsTo(Pincode::class);
    }

}
