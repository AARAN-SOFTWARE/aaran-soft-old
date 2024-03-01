<?php

namespace Aaran\Entries\Models;

use App\Models\Common\Colour;
use App\Models\Common\Gstpercent;
use App\Models\Common\Pincode;
use App\Models\Common\Size;
use App\Models\Master\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Saleitem extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public static function search(string $searches): Builder
    {
        return empty($searches) ? static::query()
            : static::where('vname', 'like', '%' . $searches . '%');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function colour(): BelongsTo
    {
        return $this->belongsTo(Colour::class);
    }

    public function size(): BelongsTo
    {
        return $this->belongsTo(Size::class);
    }

    public function gstpercent(): BelongsTo
    {
        return $this->belongsTo(Gstpercent::class);
    }

}
