<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Property
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property float $price
 * @property int $featured
 * @property string $purpose
 * @property string $type
 * @property string|null $image
 * @property int $bedroom
 * @property int $bathroom
 * @property string $city
 * @property string $city_slug
 * @property string $address
 * @property int $area
 * @property int $agent_id
 * @property string $description
 * @property string|null $video
 * @property string|null $floor_plan
 * @property string $location_latitude
 * @property string $location_longitude
 * @property string|null $nearby
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Feature[] $features
 * @property-read int|null $features_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\PropertyImageGallery[] $gallery
 * @property-read int|null $gallery_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Rating[] $rating
 * @property-read int|null $rating_count
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereAgentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereBathroom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereBedroom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereCitySlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereFloorPlan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereLocationLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereLocationLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereNearby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property wherePurpose($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereVideo($value)
 * @mixin \Eloquent
 */
class Property extends Model
{
    protected $fillable = [
        'title', 'price', 'featured', 'purpose', 'type', 'image',
        'slug', 'bedroom', 'bathroom', 'city', 'city_slug', 'address',
        'area', 'agent_id', 'description', 'video', 'floor_plan',
        'location_latitude', 'location_longitude', 'nearby',

    ];

    public function features()
    {
        return $this->belongsToMany(Feature::class)->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'agent_id');
    }

    public function gallery()
    {
        return $this->hasMany(PropertyImageGallery::class);
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function rating()
    {
        return $this->hasMany(Rating::class, 'property_id');
    }

}
