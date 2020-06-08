<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Setting
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $footer
 * @property string $aboutus
 * @property string $facebook
 * @property string $twitter
 * @property string $linkedin
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereAboutus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereFooter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Setting extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'footer',
        'aboutus',
        'facebook',
        'twitter',
        'linkedin',
    ];
}
