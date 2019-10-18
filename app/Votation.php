<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Votation
 *
 * @property int $id
 * @property int $table_id
 * @property int $candidate_id
 * @property int $votes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Candidate $candidate
 * @property-read \App\Table $table
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Votation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Votation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Votation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Votation whereCandidateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Votation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Votation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Votation whereTableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Votation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Votation whereVotes($value)
 * @mixin \Eloquent
 */
class Votation extends Model
{
    protected $fillable = [
        'table_id','candidate_id','votes'
    ];
    public function candidate()
    {
        return $this->BelongsTo(Candidate::class);
    }
    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}
