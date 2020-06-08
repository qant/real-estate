<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Testimonial
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property string $testimonial
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Testimonial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Testimonial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Testimonial query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Testimonial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Testimonial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Testimonial whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Testimonial whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Testimonial whereTestimonial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Testimonial whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Testimonial extends Model
{
    protected $fillable = ['name','image','testimonial'];
}
