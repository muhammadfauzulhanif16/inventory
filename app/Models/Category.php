<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model {
  use HasFactory, HasUlids;

  protected $guarded = [];

  public function products(): HasMany {
    return $this->hasMany(IncomingProduct::class);
  }

//  public function getRouteKeyName(): string {
//    return "slug";
//  }
}
