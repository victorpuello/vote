<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Voter
 *
 * @property int $id
 * @property string $cedula
 * @property string $name
 * @property string $lastname
 * @property string $phone
 * @property int $sector_id
 * @property int $leader_id
 * @property int $point_id
 * @property int|null $table_number
 * @property int $sufrago
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter whereCedula($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter whereLeaderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter wherePointId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter whereSectorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter whereSufrago($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter whereTableNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read mixed $full_name
 * @property-read \App\Leader $leader
 * @property-read \App\Point $point
 * @property-read \App\Sector $sector
 */
class Voter extends Model
{
    protected $fillable = [
        'cedula','name','lastname', 'phone', 'sector_id','leader_id','point_id','table_number','sufrago'
    ];

    public function sector(){
        return $this->belongsTo(Sector::class);
    }

    public function point(){
        return $this->belongsTo(Point::class);
    }

    public function leader(){
        return $this->belongsTo(Leader::class);
    }

    public function getFullNameAttribute(){
        return $this->name .' '.$this->lastname;
    }
    public function setNameAttribute($name){
        $this->attributes['name'] = strtoupper($name);
    }
    public function setLastnameAttribute($lastname){
        $this->attributes['lastname'] = strtoupper($lastname);
    }
}
