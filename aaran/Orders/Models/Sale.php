<?php

namespace Aaran\Orders\Models;

use Aaran\Master\Models\Contact;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public static function search(string $searches): Builder
    {
        return empty($searches) ? static::query()
            : static::where('invoice_no', 'like', '%' . $searches . '%');
    }

    public static function nextNo()
    {
        return static::max('invoice_no') + 1;
    }

    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }
}
