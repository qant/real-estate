<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
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
	class Album extends \Eloquent {}
}

namespace App{
/**
 * App\Category
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Post[] $posts
 * @property-read int|null $posts_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Category extends \Eloquent {}
}

namespace App{
/**
 * App\Comment
 *
 * @property int $id
 * @property string $body
 * @property int $commentable_id
 * @property string $commentable_type
 * @property int $user_id
 * @property int $parent
 * @property int|null $parent_id
 * @property int $approved
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comment[] $children
 * @property-read int|null $children_count
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $commentable
 * @property-read \App\User $users
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereCommentableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereCommentableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereParent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereUserId($value)
 * @mixin \Eloquent
 */
	class Comment extends \Eloquent {}
}

namespace App{
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
	class Feature extends \Eloquent {}
}

namespace App{
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
	class Gallery extends \Eloquent {}
}

namespace App{
/**
 * App\Message
 *
 * @property int $id
 * @property int $agent_id
 * @property int|null $user_id
 * @property int|null $property_id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $message
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereAgentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message wherePropertyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereUserId($value)
 * @mixin \Eloquent
 */
	class Message extends \Eloquent {}
}

namespace App{
/**
 * App\Post
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $slug
 * @property string $image
 * @property string $body
 * @property int $view_count
 * @property int $status
 * @property int $is_approved
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Category[] $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Tag[] $tags
 * @property-read int|null $tags_count
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereIsApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereViewCount($value)
 * @mixin \Eloquent
 */
	class Post extends \Eloquent {}
}

namespace App{
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
	class Property extends \Eloquent {}
}

namespace App{
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
	class PropertyImageGallery extends \Eloquent {}
}

namespace App{
/**
 * App\Rating
 *
 * @property int $id
 * @property int $user_id
 * @property int $property_id
 * @property float $rating
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating wherePropertyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereUserId($value)
 * @mixin \Eloquent
 */
	class Rating extends \Eloquent {}
}

namespace App{
/**
 * App\Role
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Role extends \Eloquent {}
}

namespace App{
/**
 * App\Service
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $icon
 * @property int $service_order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereServiceOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Service extends \Eloquent {}
}

namespace App{
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
	class Setting extends \Eloquent {}
}

namespace App{
/**
 * App\Slider
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Slider extends \Eloquent {}
}

namespace App{
/**
 * App\Tag
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Post[] $posts
 * @property-read int|null $posts_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Tag extends \Eloquent {}
}

namespace App{
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
	class Testimonial extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property int $role_id
 * @property string $name
 * @property string $username
 * @property string $email
 * @property string $image
 * @property string|null $about
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Post[] $posts
 * @property-read int|null $posts_count
 * @property-read \App\Role $role
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUsername($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

