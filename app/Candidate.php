<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Candidate
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Votation[] $votation
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate dataTableQuery($column = 'id', $orderBy = 'asc', $searchValue = '')
 */
class Candidate extends Model
{
    protected $fillable = [
        'name'
    ];


    public function votation()
    {
        return $this->hasMany(Votation::class);
    }

    public function leaders(){
        return $this->hasMany(Leader::class);
    }

}
