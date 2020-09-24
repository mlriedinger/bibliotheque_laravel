<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loans extends Model
{
  protected $fillable = [
    'loan_start',
    'loan_end',
    'book_return',
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
