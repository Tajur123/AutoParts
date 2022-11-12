<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    //mapping ke kolom/field
    protected $fillable = ['items','expire_date','paid','shipped','users_id'];

        //relasi one to many ke tabel product
        public function products()
    {
        return $this->hasMany(products::class);
    }
        //relasi one to many ke tabel product
        public function transaction()
    {
        return $this->hasMany(transaction::class);
    }
}
