<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $fillable = [
        'testigo_id','table_id'
    ];
    public function testigo(){
        return $this->belongsTo(Testigo::class);
    }
    public function table(){
        return $this->belongsTo(Table::class);
    }

}
