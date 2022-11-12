<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = 'products';
    //mapping ke kolom/field
    protected $fillable = ['title','price','list_price','brand','categories','image',
                            'description','featured','myquant','deleted','threshold',
                            'brand_id','categories_id','cart_id'];
    
    public function brand()
    {
        return $this->belongsTo(brand::class);
    }

    public function categories()
    {
        return $this->belongsTo(categories::class);
    }

    public function cart()
    {
        return $this->belongsTo(cart::class);
    }

}
