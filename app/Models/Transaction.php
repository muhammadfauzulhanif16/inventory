<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transaction extends Model {
    use HasFactory, HasUlids;

    protected $guarded = [];
    protected $table = "transactions";

  public function product(): HasOne {
    return $this->hasOne(OutgoingProduct::class);
  }
}
