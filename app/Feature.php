<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Feature
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Property[] $properties
 * @property-read int|null $properties_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feature whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feature whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feature whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Feature extends Model
{
    protected $fillable = ['name','slug'];

    
    public function properties()
    {
        return $this->belongsToMany(Property::class)->withTimestamps();
    }
}
