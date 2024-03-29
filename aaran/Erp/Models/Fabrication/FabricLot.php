<?php

namespace Aaran\Erp\Models\Fabrication;

use Aaran\Erp\Database\Factories\Erp\Fabrication\FabricLotFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FabricLot extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public static function search(string $searches)
    {
        return empty($searches) ? static::query()
           : static::where('vname', 'like', '%' . $searches . '%');
    }

    protected static function newFactory(): FabricLotFactory
    {
        return new FabricLotFactory();
    }
}
