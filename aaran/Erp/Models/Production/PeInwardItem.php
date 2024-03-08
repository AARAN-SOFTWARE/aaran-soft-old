<?php

namespace Aaran\Erp\Models\Production;

use Database\Factories\Erp\Production\PeInwardItemFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeInwardItem extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    public static function search(string $searches)
    {
        return empty($searches) ? static::query()
           : static::where('vname', 'like', '%' . $searches . '%');
    }

    protected static function newFactory(): PeInwardItemFactory
    {
        return new PeInwardItemFactory();
    }
}
