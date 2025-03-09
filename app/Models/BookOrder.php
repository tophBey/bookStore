<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookOrder extends Model
{
    use HasFactory, SoftDeletes;


    protected $guarded = ['id'];


    public function book(){
        return $this->belongsTo(Book::class, 'book_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function bank(){
        return $this->belongsTo(PackageBank::class, 'package_bank_id');
    }
}
