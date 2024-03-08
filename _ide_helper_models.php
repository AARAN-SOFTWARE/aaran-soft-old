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
 * @property int $id
 * @property int|null $company_id
 * @property int $acyear
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\DefaultCompanyFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|DefaultCompany newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DefaultCompany newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DefaultCompany query()
 * @method static \Illuminate\Database\Eloquent\Builder|DefaultCompany whereAcyear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DefaultCompany whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DefaultCompany whereId($value)
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
 * @method static \Aaran\Common\Database\Factories\DepartmentFactory factory($count = null, $state = [])
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
 * @method static \Aaran\Common\Database\Factories\LedgerFactory factory($count = null, $state = [])
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
 * Aaran\Common\Models\Receipttype
 *
 * @property int $id
 * @property string $vname
 * @property int|null $active_id
 * @method static \Aaran\Common\Database\Factories\ReceipttypeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Receipttype newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Receipttype newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Receipttype query()
 * @method static \Illuminate\Database\Eloquent\Builder|Receipttype whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipttype whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipttype whereVname($value)
 */
	class Receipttype extends \Eloquent {}
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
 * Aaran\Entries\Models\Payment
 *
 * @property int $id
 * @property int $company_id
 * @property string|null $acyear
 * @property string $vdate
 * @property int $contact_id
 * @property int $receipttype_id
 * @property string|null $chq_no
 * @property string|null $chq_date
 * @property int|null $bank_id
 * @property string $payment_amount
 * @property string|null $active_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Aaran\Master\Models\Company $company
 * @property-read \Aaran\Master\Models\Contact $contact
 * @property-read \Aaran\Orders\Models\Order|null $order
 * @property-read \Aaran\Common\Models\Receipttype $receipttype
 * @method static \Aaran\Entries\Database\Factories\PaymentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAcyear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereBankId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereChqDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereChqNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereContactId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereReceipttypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereVdate($value)
 */
	class Payment extends \Eloquent {}
}

namespace Aaran\Entries\Models{
/**
 * Aaran\Entries\Models\Purchase
 *
 * @property int $id
 * @property string $uniqueno
 * @property string|null $acyear
 * @property int $company_id
 * @property int $contact_id
 * @property int $order_id
 * @property string|null $purchase_no
 * @property string $purchase_date
 * @property int|null $Entry_no
 * @property string|null $sales_type
 * @property int $transport_id
 * @property string|null $bundle
 * @property string|null $total_qty
 * @property string|null $total_taxable
 * @property string|null $total_gst
 * @property int|null $ledger_id
 * @property string|null $additional
 * @property string|null $round_off
 * @property string|null $grand_total
 * @property string|null $active_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Aaran\Master\Models\Company $company
 * @property-read \Aaran\Master\Models\Contact $contact
 * @property-read \Aaran\Common\Models\Ledger|null $ledger
 * @property-read \Aaran\Orders\Models\Order $order
 * @property-read \Aaran\Common\Models\Transport $transport
 * @method static \Aaran\Entries\Database\Factories\PurchaseFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase query()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereAcyear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereAdditional($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereBundle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereContactId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereEntryNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereGrandTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereLedgerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase wherePurchaseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase wherePurchaseNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereRoundOff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereSalesType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereTotalGst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereTotalQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereTotalTaxable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereTransportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereUniqueno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereUpdatedAt($value)
 */
	class Purchase extends \Eloquent {}
}

namespace Aaran\Entries\Models{
/**
 * Aaran\Entries\Models\Purchaseitem
 *
 * @property int $id
 * @property int $purchase_id
 * @property int $product_id
 * @property int $colour_id
 * @property int $size_id
 * @property string $qty
 * @property string $price
 * @property string|null $gst_percent
 * @property-read \Aaran\Common\Models\Colour $colour
 * @property-read \Aaran\Master\Models\Product $product
 * @property-read \Aaran\Entries\Models\Sale|null $sale
 * @property-read \Aaran\Common\Models\Size $size
 * @method static \Aaran\Entries\Database\Factories\PurchaseitemFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Purchaseitem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchaseitem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchaseitem query()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchaseitem whereColourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchaseitem whereGstPercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchaseitem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchaseitem wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchaseitem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchaseitem wherePurchaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchaseitem whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchaseitem whereSizeId($value)
 */
	class Purchaseitem extends \Eloquent {}
}

namespace Aaran\Entries\Models{
/**
 * Aaran\Entries\Models\Receipt
 *
 * @property int $id
 * @property int $company_id
 * @property string|null $acyear
 * @property string $vdate
 * @property int $contact_id
 * @property int $receipttype_id
 * @property string|null $chq_no
 * @property string|null $chq_date
 * @property int|null $bank_id
 * @property string $receipt_amount
 * @property string|null $active_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Aaran\Master\Models\Company $company
 * @property-read \Aaran\Master\Models\Contact $contact
 * @property-read \Aaran\Orders\Models\Order|null $order
 * @property-read \Aaran\Common\Models\Receipttype $receipttype
 * @method static \Aaran\Entries\Database\Factories\ReceiptFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt query()
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereAcyear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereBankId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereChqDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereChqNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereContactId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereReceiptAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereReceipttypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereVdate($value)
 */
	class Receipt extends \Eloquent {}
}

namespace Aaran\Entries\Models{
/**
 * Aaran\Entries\Models\Sale
 *
 * @property int $id
 * @property string $uniqueno
 * @property string|null $acyear
 * @property int $company_id
 * @property int $contact_id
 * @property int $order_id
 * @property int $invoice_no
 * @property string $invoice_date
 * @property string|null $sales_type
 * @property int $transport_id
 * @property string|null $destination
 * @property string|null $bundle
 * @property string|null $total_qty
 * @property string|null $total_taxable
 * @property string|null $total_gst
 * @property int|null $ledger_id
 * @property string|null $additional
 * @property string|null $round_off
 * @property string|null $grand_total
 * @property string|null $active_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \Aaran\Master\Models\Company $company
 * @property-read \Aaran\Master\Models\Contact $contact
 * @property-read \Aaran\Common\Models\Ledger|null $ledger
 * @property-read \Aaran\Orders\Models\Order $order
 * @property-read \Aaran\Common\Models\Transport $transport
 * @method static \Aaran\Entries\Database\Factories\SaleFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Sale newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sale newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sale query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereAcyear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereAdditional($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereBundle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereContactId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereDestination($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereGrandTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereInvoiceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereInvoiceNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereLedgerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereRoundOff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereSalesType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereTotalGst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereTotalQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereTotalTaxable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereTransportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereUniqueno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereUpdatedAt($value)
 */
	class Sale extends \Eloquent {}
}

namespace Aaran\Entries\Models{
/**
 * Aaran\Entries\Models\Saleitem
 *
 * @property int $id
 * @property int $sale_id
 * @property int $product_id
 * @property int $colour_id
 * @property int $size_id
 * @property string $qty
 * @property string $price
 * @property string|null $gst_percent
 * @property-read \Aaran\Common\Models\Colour $colour
 * @property-read \Aaran\Master\Models\Product $product
 * @property-read \Aaran\Entries\Models\Sale $sale
 * @property-read \Aaran\Common\Models\Size $size
 * @method static \Aaran\Entries\Database\Factories\SaleitemFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Saleitem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Saleitem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Saleitem query()
 * @method static \Illuminate\Database\Eloquent\Builder|Saleitem whereColourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Saleitem whereGstPercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Saleitem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Saleitem wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Saleitem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Saleitem whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Saleitem whereSaleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Saleitem whereSizeId($value)
 */
	class Saleitem extends \Eloquent {}
}

namespace Aaran\Erp\Models\Fabrication{
/**
 * Aaran\Erp\Models\Fabrication\FabricLot
 *
 * @property int $id
 * @property string $vname
 * @property string $desc
 * @property string|null $active_id
 * @property int $user_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FabricLot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FabricLot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FabricLot query()
 * @method static \Illuminate\Database\Eloquent\Builder|FabricLot whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FabricLot whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FabricLot whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FabricLot whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FabricLot whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FabricLot whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FabricLot whereVname($value)
 */
	class FabricLot extends \Eloquent {}
}

namespace Aaran\Erp\Models\Production{
/**
 * Aaran\Erp\Models\Production\Cutting
 *
 * @property int $id
 * @property int $vno
 * @property string $vdate
 * @property int $jobcard_id
 * @property string $cutting_master
 * @property string $total_qty
 * @property string|null $active_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Aaran\Erp\Models\Production\Jobcard $jobcard
 * @property-read \Aaran\Orders\Models\Order|null $order
 * @method static \Illuminate\Database\Eloquent\Builder|Cutting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cutting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cutting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cutting whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutting whereCuttingMaster($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutting whereJobcardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutting whereTotalQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutting whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutting whereVdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutting whereVno($value)
 */
	class Cutting extends \Eloquent {}
}

namespace Aaran\Erp\Models\Production{
/**
 * Aaran\Erp\Models\Production\CuttingItem
 *
 * @property int $id
 * @property int $cutting_id
 * @property int $jobcard_item_id
 * @property int $fabric_lot_id
 * @property int $colour_id
 * @property int $size_id
 * @property string $qty
 * @property string $pending_qty
 * @property string|null $active_id
 * @property-read \Aaran\Erp\Models\Production\Jobcard $jobcardItem
 * @method static \Illuminate\Database\Eloquent\Builder|CuttingItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CuttingItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CuttingItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|CuttingItem whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuttingItem whereColourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuttingItem whereCuttingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuttingItem whereFabricLotId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuttingItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuttingItem whereJobcardItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuttingItem wherePendingQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuttingItem whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CuttingItem whereSizeId($value)
 */
	class CuttingItem extends \Eloquent {}
}

namespace Aaran\Erp\Models\Production{
/**
 * Aaran\Erp\Models\Production\Ironing
 *
 * @property int $id
 * @property int $vno
 * @property string $vdate
 * @property string $iron_master
 * @property int $style_id
 * @property string $total_qty
 * @property string $receiver_details
 * @property string|null $active_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Aaran\Erp\Models\Production\Jobcard|null $jobcard
 * @property-read \Aaran\Orders\Models\Order|null $order
 * @property-read \Aaran\Orders\Models\Style $style
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Ironing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ironing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ironing query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ironing whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ironing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ironing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ironing whereIronMaster($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ironing whereReceiverDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ironing whereStyleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ironing whereTotalQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ironing whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ironing whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ironing whereVdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ironing whereVno($value)
 */
	class Ironing extends \Eloquent {}
}

namespace Aaran\Erp\Models\Production{
/**
 * Aaran\Erp\Models\Production\IroningItem
 *
 * @property int $id
 * @property int $ironing_id
 * @property int $jobcard_item_id
 * @property int $section_inward_item_id
 * @property int $colour_id
 * @property int $size_id
 * @property string $qty
 * @property string|null $active_id
 * @property-read \Aaran\Erp\Models\Production\Ironing $ironing
 * @method static \Illuminate\Database\Eloquent\Builder|IroningItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IroningItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IroningItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|IroningItem whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IroningItem whereColourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IroningItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IroningItem whereIroningId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IroningItem whereJobcardItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IroningItem whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IroningItem whereSectionInwardItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IroningItem whereSizeId($value)
 */
	class IroningItem extends \Eloquent {}
}

namespace Aaran\Erp\Models\Production{
/**
 * Aaran\Erp\Models\Production\Jobcard
 *
 * @property int $id
 * @property int $vno
 * @property string $vdate
 * @property int $style_id
 * @property string $total_qty
 * @property string|null $active_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Aaran\Orders\Models\Order|null $order
 * @property-read \Aaran\Orders\Models\Style $style
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Jobcard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jobcard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jobcard query()
 * @method static \Illuminate\Database\Eloquent\Builder|Jobcard whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jobcard whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jobcard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jobcard whereStyleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jobcard whereTotalQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jobcard whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jobcard whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jobcard whereVdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jobcard whereVno($value)
 */
	class Jobcard extends \Eloquent {}
}

namespace Aaran\Erp\Models\Production{
/**
 * Aaran\Erp\Models\Production\JobcardItem
 *
 * @property int $id
 * @property int $jobcard_id
 * @property int $fabric_lot_id
 * @property int $colour_id
 * @property int $size_id
 * @property string $qty
 * @property string $cutting_qty
 * @property string $pe_out_qty
 * @property string $pe_in_qty
 * @property string $se_out_qty
 * @property string $se_in_qty
 * @property string|null $active_id
 * @property-read \Aaran\Erp\Models\Production\Jobcard $jobcard
 * @method static \Illuminate\Database\Eloquent\Builder|JobcardItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobcardItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobcardItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobcardItem whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobcardItem whereColourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobcardItem whereCuttingQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobcardItem whereFabricLotId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobcardItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobcardItem whereJobcardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobcardItem wherePeInQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobcardItem wherePeOutQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobcardItem whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobcardItem whereSeInQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobcardItem whereSeOutQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobcardItem whereSizeId($value)
 */
	class JobcardItem extends \Eloquent {}
}

namespace Aaran\Erp\Models\Production{
/**
 * Aaran\Erp\Models\Production\PeInward
 *
 * @property int $id
 * @property int $vno
 * @property string $vdate
 * @property int $contact_id
 * @property int $jobcard_id
 * @property string $contact_dc
 * @property string $dc_date
 * @property string $total_qty
 * @property string $receiver_details
 * @property string|null $active_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Aaran\Master\Models\Contact $contact
 * @property-read \Aaran\Erp\Models\Production\Jobcard $jobcard
 * @method static \Illuminate\Database\Eloquent\Builder|PeInward newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PeInward newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PeInward query()
 * @method static \Illuminate\Database\Eloquent\Builder|PeInward whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeInward whereContactDc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeInward whereContactId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeInward whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeInward whereDcDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeInward whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeInward whereJobcardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeInward whereReceiverDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeInward whereTotalQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeInward whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeInward whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeInward whereVdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeInward whereVno($value)
 */
	class PeInward extends \Eloquent {}
}

namespace Aaran\Erp\Models\Production{
/**
 * Aaran\Erp\Models\Production\PeInwardItem
 *
 * @property int $id
 * @property int $pe_inward_id
 * @property int $jobcard_item_id
 * @property int $pe_outward_item_id
 * @property int $colour_id
 * @property int $size_id
 * @property string $qty
 * @property string $pending_qty
 * @property string|null $active_id
 * @method static \Illuminate\Database\Eloquent\Builder|PeInwardItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PeInwardItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PeInwardItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|PeInwardItem whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeInwardItem whereColourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeInwardItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeInwardItem whereJobcardItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeInwardItem wherePeInwardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeInwardItem wherePeOutwardItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeInwardItem wherePendingQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeInwardItem whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeInwardItem whereSizeId($value)
 */
	class PeInwardItem extends \Eloquent {}
}

namespace Aaran\Erp\Models\Production{
/**
 * Aaran\Erp\Models\Production\PeOutward
 *
 * @property int $id
 * @property int $vno
 * @property string $vdate
 * @property int $contact_id
 * @property int $jobcard_id
 * @property string $total_qty
 * @property string $receiver_details
 * @property string|null $active_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Aaran\Master\Models\Contact $contact
 * @property-read \Aaran\Erp\Models\Production\Jobcard $jobcard
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutward newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutward newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutward query()
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutward whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutward whereContactId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutward whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutward whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutward whereJobcardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutward whereReceiverDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutward whereTotalQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutward whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutward whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutward whereVdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutward whereVno($value)
 */
	class PeOutward extends \Eloquent {}
}

namespace Aaran\Erp\Models\Production{
/**
 * Aaran\Erp\Models\Production\PeOutwardItem
 *
 * @property int $id
 * @property int $pe_outward_id
 * @property int $jobcard_item_id
 * @property int $cutting_item_id
 * @property int $colour_id
 * @property int $size_id
 * @property string $qty
 * @property string $pending_qty
 * @property string|null $active_id
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutwardItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutwardItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutwardItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutwardItem whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutwardItem whereColourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutwardItem whereCuttingItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutwardItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutwardItem whereJobcardItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutwardItem wherePeOutwardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutwardItem wherePendingQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutwardItem whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeOutwardItem whereSizeId($value)
 */
	class PeOutwardItem extends \Eloquent {}
}

namespace Aaran\Erp\Models\Production{
/**
 * Aaran\Erp\Models\Production\SectionInward
 *
 * @property int $id
 * @property int $vno
 * @property string $vdate
 * @property int $contact_id
 * @property int $jobcard_id
 * @property string $contact_dc
 * @property string $dc_date
 * @property string $total_qty
 * @property string $receiver_details
 * @property string|null $active_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Aaran\Master\Models\Contact $contact
 * @property-read \Aaran\Erp\Models\Production\Jobcard $jobcard
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInward newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInward newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInward query()
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInward whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInward whereContactDc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInward whereContactId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInward whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInward whereDcDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInward whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInward whereJobcardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInward whereReceiverDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInward whereTotalQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInward whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInward whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInward whereVdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInward whereVno($value)
 */
	class SectionInward extends \Eloquent {}
}

namespace Aaran\Erp\Models\Production{
/**
 * Aaran\Erp\Models\Production\SectionInwardItem
 *
 * @property int $id
 * @property int $section_inward_id
 * @property int $jobcard_item_id
 * @property int $section_outward_item_id
 * @property int $colour_id
 * @property int $size_id
 * @property string $qty
 * @property string $pending_qty
 * @property string|null $active_id
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInwardItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInwardItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInwardItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInwardItem whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInwardItem whereColourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInwardItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInwardItem whereJobcardItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInwardItem wherePendingQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInwardItem whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInwardItem whereSectionInwardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInwardItem whereSectionOutwardItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionInwardItem whereSizeId($value)
 */
	class SectionInwardItem extends \Eloquent {}
}

namespace Aaran\Erp\Models\Production{
/**
 * Aaran\Erp\Models\Production\SectionOutward
 *
 * @property int $id
 * @property int $vno
 * @property string $vdate
 * @property int $contact_id
 * @property int $jobcard_id
 * @property string $total_qty
 * @property string $receiver_details
 * @property string|null $active_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Aaran\Master\Models\Contact $contact
 * @property-read \Aaran\Erp\Models\Production\Jobcard $jobcard
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutward newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutward newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutward query()
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutward whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutward whereContactId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutward whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutward whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutward whereJobcardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutward whereReceiverDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutward whereTotalQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutward whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutward whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutward whereVdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutward whereVno($value)
 */
	class SectionOutward extends \Eloquent {}
}

namespace Aaran\Erp\Models\Production{
/**
 * Aaran\Erp\Models\Production\SectionOutwardItem
 *
 * @property int $id
 * @property int $section_outward_id
 * @property int $jobcard_item_id
 * @property int $pe_inward_item_id
 * @property int $colour_id
 * @property int $size_id
 * @property string $qty
 * @property string $pending_qty
 * @property string|null $active_id
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutwardItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutwardItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutwardItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutwardItem whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutwardItem whereColourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutwardItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutwardItem whereJobcardItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutwardItem wherePeInwardItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutwardItem wherePendingQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutwardItem whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutwardItem whereSectionOutwardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionOutwardItem whereSizeId($value)
 */
	class SectionOutwardItem extends \Eloquent {}
}

namespace Aaran\Master\Models{
/**
 * Aaran\Master\Models\Company
 *
 * @property int $id
 * @property string $vname
 * @property string|null $display_name
 * @property string|null $address_1
 * @property string|null $address_2
 * @property string|null $mobile
 * @property string|null $landline
 * @property string|null $gstin
 * @property string|null $pan
 * @property string|null $email
 * @property string|null $website
 * @property int $city_id
 * @property int $state_id
 * @property int $pincode_id
 * @property string|null $active_id
 * @property int $user_id
 * @property string|null $logo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Aaran\Common\Models\City $city
 * @property-read \Aaran\Common\Models\Pincode $pincode
 * @property-read \Aaran\Common\Models\State $state
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereGstin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereLandline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePincodeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereVname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereWebsite($value)
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
 * @property int $id
 * @property string $vname
 * @property string $order_name
 * @property int|null $active_id
 * @method static \Aaran\Orders\Database\Factories\OrderFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereVname($value)
 */
	class Order extends \Eloquent {}
}

namespace Aaran\Orders\Models{
/**
 * Aaran\Orders\Models\Style
 *
 * @property int $id
 * @property string $vname
 * @property string|null $desc
 * @property string|null $active_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Style newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Style newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Style query()
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereActiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereVname($value)
 */
	class Style extends \Eloquent {}
}

