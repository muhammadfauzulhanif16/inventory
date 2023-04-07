<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OutgoingProduct extends Model {
  use HasFactory, HasUlids;

  protected $guarded = [];
  protected $table = "outgoing_products";

  public function transaction(): BelongsTo {
    return $this->belongsTo(Transaction::class);
  }
}
