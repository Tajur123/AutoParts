<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
        //mapping ke table
        protected $table = 'categories';
        //mapping ke kolom/field
        protected $fillable = ['categories'];
        //relasi one to many ke tabel product
        public function product()
    {
        return $this->hasMany(product::class);
    }
}
