<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable =['category_id','sum','total','comments','created_at'];

    public function categories(){
        return $this->belongsTo(Category::class);
    }
    public function getSumAttribute($value){
        return number_format($value, 0, '', ' ');
    }

    public function getTotalAttribute($value){
        return number_format($value, 0, '', ' ');
    }

    public function getCreatedAtAttribute($value){
        return str_replace('-','.',substr_replace((string)$value,'',10));
    }
}
