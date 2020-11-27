<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    protected $fillable = ['tanggal','number','name','volume','quantity','price','total_price','jumlah','supplier'];
    
    public function outcome(){
        return $this->hasOne(Outcome::class);
    }
}
