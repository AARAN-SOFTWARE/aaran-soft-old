<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\DefaultCompany
 *
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\DefaultCompanyFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|DefaultCompany newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DefaultCompany newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DefaultCompany query()
 */
	class DefaultCompany extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace Aaran\Common\Models{
/**
 * Aaran\Common\Models\Bank
 *
 * @property int $id
 * @property string $vname
 * @property int|null $active_id
 * @method static \Aaran\Common\Database\Factories\BankFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Bank newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bank newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bank query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereVname($value)
 */
	class Bank extends \Eloquent {}
}

namespace Aaran\Common\Models{
/**
 * Aaran\Common\Models\Category
 *
 * @property int $id
 * @property string $vname
 * @property int|null $active_id
 * @method static \Aaran\Common\Database\Factories\CategoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereVname($value)
 */
	class Category extends \Eloquent {}
}

namespace Aaran\Common\Models{
/**
 * Aaran\Common\Models\City
 *
 * @property int $id
 * @property string $vname
 * @property int|null $active_id
 * @method static \Aaran\Common\Database\Factories\CityFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City query()
 * @method static \Illuminate\Database\Eloquent\Builder|City whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereVname($value)
 */
	class City extends \Eloquent {}
}

namespace Aaran\Common\Models{
/**
 * Aaran\Common\Models\Colour
 *
 * @property int $id
 * @property string $vname
 * @property int|null $active_id
 * @method static \Aaran\Common\Database\Factories\ColourFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Colour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Colour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Colour query()
 * @method static \Illuminate\Database\Eloquent\Builder|Colour whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Colour whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Colour whereVname($value)
 */
	class Colour extends \Eloquent {}
}

namespace Aaran\Common\Models{
/**
 * Aaran\Common\Models\Country
 *
 * @property int $id
 * @property string $vname
 * @property int|null $active_id
 * @method static \Aaran\Common\Database\Factories\CountryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereVname($value)
 */
	class Country extends \Eloquent {}
}

namespace Aaran\Common\Models{
/**
 * Aaran\Common\Models\Department
 *
 * @property int $id
 * @property string $vname
 * @property int|null $active_id
 * @method static \Illuminate\Database\Eloquent\Builder|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department query()
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereVname($value)
 */
	class Department extends \Eloquent {}
}

namespace Aaran\Common\Models{
/**
 * Aaran\Common\Models\Hsncode
 *
 * @property int $id
 * @property string $vname
 * @property int|null $active_id
 * @method static \Aaran\Common\Database\Factories\HsncodeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Hsncode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hsncode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hsncode query()
 * @method static \Illuminate\Database\Eloquent\Builder|Hsncode whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hsncode whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hsncode whereVname($value)
 */
	class Hsncode extends \Eloquent {}
}

namespace Aaran\Common\Models{
/**
 * Aaran\Common\Models\Ledger
 *
 * @property int $id
 * @property string $vname
 * @property int|null $active_id
 * @method static \Illuminate\Database\Eloquent\Builder|Ledger newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ledger newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ledger query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ledger whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ledger whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ledger whereVname($value)
 */
	class Ledger extends \Eloquent {}
}

namespace Aaran\Common\Models{
/**
 * Aaran\Common\Models\Pincode
 *
 * @property int $id
 * @property string $vname
 * @property int|null $active_id
 * @method static \Aaran\Common\Database\Factories\PincodeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Pincode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pincode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pincode query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pincode whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pincode whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pincode whereVname($value)
 */
	class Pincode extends \Eloquent {}
}

namespace Aaran\Common\Models{
/**
 * Aaran\Common\Models\Size
 *
 * @property int $id
 * @property string $vname
 * @property int|null $active_id
 * @method static \Aaran\Common\Database\Factories\SizeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Size newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Size newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Size query()
 * @method static \Illuminate\Database\Eloquent\Builder|Size whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Size whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Size whereVname($value)
 */
	class Size extends \Eloquent {}
}

namespace Aaran\Common\Models{
/**
 * Aaran\Common\Models\State
 *
 * @property int $id
 * @property string $vname
 * @property string $state_code
 * @property int|null $active_id
 * @method static \Aaran\Common\Database\Factories\StateFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State query()
 * @method static \Illuminate\Database\Eloquent\Builder|State whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereStateCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereVname($value)
 */
	class State extends \Eloquent {}
}

namespace Aaran\Common\Models{
/**
 * Aaran\Common\Models\Transport
 *
 * @property int $id
 * @property string $vname
 * @property string|null $vehicle_no
 * @property int|null $active_id
 * @method static \Aaran\Common\Database\Factories\TransportFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Transport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transport query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereVehicleNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereVname($value)
 */
	class Transport extends \Eloquent {}
}

namespace Aaran\Entries\Models{
/**
 * Aaran\Entries\Models\Sale
 *
 * @property-read \Aaran\Master\Models\Contact|null $contact
 * @method static \Illuminate\Database\Eloquent\Builder|Sale newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sale newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sale query()
 */
	class Sale extends \Eloquent {}
}

namespace Aaran\Entries\Models{
/**
 * Aaran\Entries\Models\Saleitem
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Saleitem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Saleitem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Saleitem query()
 */
	class Saleitem extends \Eloquent {}
}

namespace Aaran\Master\Models{
/**
 * Aaran\Master\Models\Company
 *
 * @property-read \Aaran\Common\Models\City|null $city
 * @property-read \Aaran\Common\Models\Pincode|null $pincode
 * @property-read \Aaran\Common\Models\State|null $state
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 */
	class Company extends \Eloquent {}
}

namespace Aaran\Master\Models{
/**
 * Aaran\Master\Models\Contact
 *
 * @property int $id
 * @property string $vname
 * @property string|null $contact_person
 * @property string|null $mobile
 * @property string|null $whatsapp
 * @property string|null $landline
 * @property string|null $gstin
 * @property string|null $pan
 * @property string|null $email
 * @property string|null $website
 * @property string|null $address_1
 * @property string|null $address_2
 * @property int $city_id
 * @property int $state_id
 * @property int $pincode_id
 * @property string|null $active_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Aaran\Common\Models\City $city
 * @property-read \Aaran\Common\Models\Pincode $pincode
 * @property-read \Aaran\Common\Models\State $state
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereContactPerson($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereGstin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereLandline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact wherePan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact wherePincodeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereVname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereWhatsapp($value)
 */
	class Contact extends \Eloquent {}
}

namespace Aaran\Master\Models{
/**
 * Aaran\Master\Models\Product
 *
 * @property int $id
 * @property string $vname
 * @property string|null $product_type
 * @property int $hsncode_id
 * @property string|null $units
 * @property string|null $gst_percent
 * @property string|null $active_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Aaran\Common\Models\Hsncode $hsncode
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereGstPercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereHsncodeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUnits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereVname($value)
 */
	class Product extends \Eloquent {}
}

namespace Aaran\Orders\Models{
/**
 * Aaran\Orders\Models\Order
 *
 * @method static \Aaran\Orders\Database\Factories\OrderFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 */
	class Order extends \Eloquent {}
}

