<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Leader
 *
 * @property int $id
 * @property string $cedula
 * @property string $name
 * @property string $lastname
 * @property string $phone
 * @property int $sector_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Sector $sector
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Voter[] $voters
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Leader newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Leader newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Leader query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Leader whereCedula($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Leader whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Leader whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Leader whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Leader whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Leader wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Leader whereSectorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Leader whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Leader extends Model
{
    protected $fillable = [
        'cedula', 'name', 'lastname', 'phone', 'sector_id'
    ];

    public function sector(){
        return $this->belongsTo(Sector::class);
    }

    public function voters(){
        return $this->hasMany(Voter::class);
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
