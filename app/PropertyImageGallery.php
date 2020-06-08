<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\PropertyImageGallery
 *
 * @property int $id
 * @property int $property_id
 * @property string $name
 * @property string|null $size
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Property $property
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PropertyImageGallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PropertyImageGallery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PropertyImageGallery query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PropertyImageGallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PropertyImageGallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PropertyImageGallery whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PropertyImageGallery wherePropertyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PropertyImageGallery whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PropertyImageGallery whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PropertyImageGallery extends Model
{
    protected $fillable = ['property_id', 'name', 'size'];

    public function property()
    {
        return $this->belongsTo('App\Property');
    }
}


