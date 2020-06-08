<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Gallery
 *
 * @property int $id
 * @property int $album_id
 * @property string $image
 * @property string $size
 * @property string $type
 * @property string|null $link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Album $album
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereAlbumId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Gallery extends Model
{
    protected $fillable = ['album_id','image','size','type','link'];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
