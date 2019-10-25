<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

/**
 * App\E14
 *
 * @property int $id
 * @property string $path
 * @property int $table_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Table $table
 * @method static \Illuminate\Database\Eloquent\Builder|\App\E14 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\E14 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\E14 query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\E14 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\E14 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\E14 wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\E14 whereTableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\E14 whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class E14 extends Model
{
    protected $table = 'e14_s';
    protected $fillable = [
        'table_id','path'
    ];
    public function table(){
        return $this->belongsTo(Table::class);
    }
    public function setPathAttribute($path)
    {
        if (!empty($path)) {
            $image = \Image::make(Input::file('path'))->orientate()->encode('jpg',100);
            $image->resize(350,null,function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $name = Carbon::now()->second.$path->getClientOriginalName();
            $this->attributes['path'] = $name;
            \Storage::disk('local')->put($name,$image);
        }
    }

}
