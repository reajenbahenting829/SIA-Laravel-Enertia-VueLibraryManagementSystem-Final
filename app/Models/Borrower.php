<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function libraryBook()
    {
        return $this->belongsTo('App\Models\LibraryBook');
    }
}
