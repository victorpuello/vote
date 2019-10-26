<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testigo extends Model
{
    protected $fillable = [
        'cedula','name','lastname', 'phone'
    ];

    public function asignacions(){
        return $this->hasMany(Asignacion::class);
    }

    public function getFullNameAttribute(){
        return $this->name .' '.$this->lastname;
    }
    public function setNameAttribute($name){
        $this->attributes['name'] = strtoupper($name);
    }
    public function setLastnameAttribute($lastname)
    {
        $this->attributes['lastname'] = strtoupper($lastname);
    }
}
