<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    public function scopeFilter($query,array $filters){
        //dd($filters['search']);
        
        // BELOW THE COALISH OPERATOR IF THE FIRST ONE IS TRUE CONTINUE IF NOT FALSE
        if($filters['search'] ?? false ){
            //SQL QUERY TRANSFORMED 
            $query->where('category','like','%'.request('search').'%')
            ->orWhere('name','like','%'.request('search').'%');
    
        }
    }
}