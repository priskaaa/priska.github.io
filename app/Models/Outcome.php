<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outcome extends Model
{
    use HasFactory;
    protected $fillable = ['tanggal','nama','nomor','quantity','income_id','bidang','keterangan'];

    public function income(){
        return $this->belongsTo(Income::class);
    }

}
