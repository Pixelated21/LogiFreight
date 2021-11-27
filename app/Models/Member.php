<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Member
 *
 * @property int $id
 * @property int $user_id
 * @property int $address_id
 * @property string $name
 * @property string $trn
 * @property string $phone_nbr
 * @property string $pickup_location
 * @property string $account_number
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Address $address
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Alert[] $alerts
 * @property-read int|null $alerts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MemberInvoice[] $memberInvoices
 * @property-read int|null $member_invoices_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Package[] $packages
 * @property-read int|null $packages_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\MemberFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Member newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Member newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Member query()
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereAccountNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member wherePhoneNbr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member wherePickupLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereTrn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereUserId($value)
 * @mixin \Eloquent
 */
class Member extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'address_id',
        'name',
        'trn',
        'phone_nbr',
        'pickup_location',
        'account_number',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'address_id' => 'integer',
    ];


    public function packages()
    {
        return $this->hasMany(\App\Models\Package::class);
    }

    public function alerts()
    {
        return $this->hasMany(\App\Models\Alert::class);
    }

    public function memberInvoices()
    {
        return $this->hasMany(\App\Models\MemberInvoice::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function address()
    {
        return $this->belongsTo(\App\Models\Address::class);
    }
}
