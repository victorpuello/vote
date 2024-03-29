<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Voter as Votantes;
/**
 * App\Point
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Point newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Point newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Point query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Point whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Point whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Point whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Point whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Point whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read mixed $count_voters
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Voter[] $voters
 */
class Point extends Model
{
    protected $fillable = [
        'name','address'
    ];

    public function voters(){
        return $this->hasMany(Votantes::class);
    }
    public function tables(){
        return $this->hasMany(Table::class);
    }
    public function getCountVotersAttribute(){
        return count($this->voters);
    }
    public function setNameAttribute($name){
        $this->attributes['name'] = strtoupper($name);
    }
    public function setAddressAttribute($address){
        $this->attributes['address'] = strtoupper($address);
    }
}
