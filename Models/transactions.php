<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactions extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    //mapping ke kolom/field
    protected $fillable = ['charge_id','cart_id','full_name','email','street',
                            'street2','city','state','zip_code','country','sub_total',
                            'tax','grand_total','description','txn_type','txn_date','cart_id1'];
    
    public function cart()
    {
        return $this->belongsTo(cart::class);
    }
                                                
}
