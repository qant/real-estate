<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Album
 *
 * @property int $id
 * @property string $name
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Gallery[] $galleryimages
 * @property-read int|null $galleryimages_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Album newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Album newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Album query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Album whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Album whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Album whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Album whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Album whereUserId($value)
 * @mixin \Eloquent
 */
class Album extends Model
{
    protected $table = 'albums';
    protected $fillable = ['name','user_id'];

    public function galleryimages()
    {
        return $this->hasMany(Gallery::class);
    }
}
