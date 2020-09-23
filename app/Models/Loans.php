<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loans extends Model
{
  protected $fillable = [
    'date_start',
    'date_end',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function books()
  {
    return $this->belongsTo(Books::class);
  }
}
