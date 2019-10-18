<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Table
 *
 * @property int $id
 * @property int $number
 * @property int $nvoters
 * @property int $point_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Votation $votation
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Table newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Table newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Table query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Table whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Table whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Table whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Table whereNvoters($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Table wherePointId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Table whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Table extends Model
{
    protected $fillable = [
        'point_id','number','nvotes'
    ];

    public function E14()
    {
        return BelongsTo(E14::class);
    }

    public function votation()
    {
        return $this->hasOne(Votation::class);
    }
}
