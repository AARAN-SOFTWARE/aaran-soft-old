<?php

namespace Aaran\Common\Models;

use Aaran\Common\Database\Factories\PincodeFactory;
use Aaran\Master\Models\Contact;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pincode extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public static function search(string $searches)
    {
        return empty($searches) ? static::query()
           : static::where('vname', 'like', '%' . $searches . '%');
    }

    protected static function newFactory():PincodeFactory
    {
        return new PincodeFactory();
    }
}
