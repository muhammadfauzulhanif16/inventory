<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AvailableProduct extends Model {
  use HasFactory, HasUlids;

  protected $guarded = [];

  public function category(): BelongsTo {
    return $this->belongsTo(Category::class);
  }

  public function unit(): BelongsTo {
    return $this->belongsTo(Unit::class);
  }
}
