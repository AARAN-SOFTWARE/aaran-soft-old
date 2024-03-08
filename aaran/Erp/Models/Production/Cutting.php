<?php

namespace Aaran\Erp\Models\Production;

use Aaran\Erp\Database\Factories\Erp\Production\CuttingFactory;
use Aaran\Erp\Models\Production\Jobcard;
use Aaran\Orders\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cutting extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;

    public static function search(string $searches)
    {
        return empty($searches) ? static::query()
            : static::where('vname', 'like', '%' . $searches . '%');
    }

    protected static function newFactory(): CuttingFactory
    {
        return new CuttingFactory();
    }

    public static function nextNo()
    {
        return static::max('vno') + 1;
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
    public function jobcard(): BelongsTo
    {
        return $this->belongsTo(Jobcard::class);
    }
}
