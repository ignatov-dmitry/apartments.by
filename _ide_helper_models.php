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
 * App\Apartment
 *
 * @property int $id
 * @property string $name
 * @property string|null $annotation
 * @property string|null $description
 * @property string $city
 * @property string $address
 * @property string|null $image
 * @property int $rooms
 * @property float $price
 * @property int $user_id
 * @property int $type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $options
 * @property int $city_id
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereAnnotation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereRooms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\ApartmentType $type
 * @property int $country_id
 * @property int $moderated
 * @property int $lock
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereLock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereModerated($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ApartmentAttribute[] $attributes
 * @property-read int|null $attributes_count
 * @property float $area
 * @property-read \App\Country $country
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereArea($value)
 * @property int $region_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereRegionId($value)
 */
	class Apartment extends \Eloquent {}
}

namespace App{
/**
 * App\ApartmentAttribute
 *
 * @property int $id
 * @property int $apartment_id
 * @property int $attribute_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentAttribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentAttribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentAttribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentAttribute whereApartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentAttribute whereAttributeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentAttribute whereId($value)
 * @mixin \Eloquent
 * @property string|null $value
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentAttribute whereValue($value)
 * @property-read \App\Attribute $attribute
 */
	class ApartmentAttribute extends \Eloquent {}
}

namespace App{
/**
 * App\ApartmentType
 *
 * @property int $id
 * @property string $type_text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentType whereTypeText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentType whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Apartment[] $apartments
 * @property-read int|null $apartments_count
 */
	class ApartmentType extends \Eloquent {}
}

namespace App{
/**
 * App\Attribute
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Attribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Attribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Attribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Attribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Attribute whereName($value)
 * @mixin \Eloquent
 * @property int $is_dynamic
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Attribute whereIsDynamic($value)
 */
	class Attribute extends \Eloquent {}
}

namespace App{
/**
 * App\City
 *
 * @property int $id
 * @property int $country_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Country $country
 * @method static \Illuminate\Database\Eloquent\Builder|\App\City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\City query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\City whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\City whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\City whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Apartment[] $apartments
 * @property-read int|null $apartments_count
 * @property int $region_id
 * @property-read \App\Region $region
 * @method static \Illuminate\Database\Eloquent\Builder|\App\City whereRegionId($value)
 */
	class City extends \Eloquent {}
}

namespace App{
/**
 * App\Country
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\City[] $Cities
 * @property-read int|null $cities_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Country whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Apartment[] $apartments
 * @property-read int|null $apartments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\City[] $cities
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Region[] $regions
 * @property-read int|null $regions_count
 */
	class Country extends \Eloquent {}
}

namespace App{
/**
 * App\Favorite
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Favorite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Favorite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Favorite query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $apartment_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Favorite whereApartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Favorite whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Favorite whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Favorite whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Favorite whereUserId($value)
 */
	class Favorite extends \Eloquent {}
}

namespace App{
/**
 * App\History
 *
 * @property int $id
 * @property int $apartment_id
 * @property float $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\History newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\History newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\History query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\History whereApartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\History whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\History whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\History wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\History whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Apartment $apartment
 */
	class History extends \Eloquent {}
}

namespace App{
/**
 * App\Region
 *
 * @property int $id
 * @property int $country_id
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\City[] $cities
 * @property-read int|null $cities_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Region query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Region whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Region whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Region whereName($value)
 */
	class Region extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property int $status
 * @property int $role
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Apartment[] $apartments
 * @property-read int|null $apartments_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

