<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];


    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }


    public function scopeFilters($query, array $filters){

        $query->when($filters['name'] ?? false, function($query, $search){
            return  $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('description', 'like' , '%' . $search .'%');
        });
    }
}
