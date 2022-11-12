<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;
    //mapping ke table
    protected $table = 'brand';
    //mapping ke kolom/field
    protected $fillable = ['brand'];
    //relasi one to many ke tabel product
    public function products()
    {
        return $this->hasMany(products::class);
    }

}
