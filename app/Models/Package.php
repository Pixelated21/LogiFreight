<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Package
 *
 * @property int $id
 * @property int $package_type_id
 * @property int $member_id
 * @property int $courier_id
 * @property string $courier_tracking_number
 * @property float $weight
 * @property string $internal_tracking_nbr
 * @property float $estimated_cost
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Courier $courier
 * @property-read \App\Models\Member $member
 * @property-read \App\Models\MemberInvoice|null $memberInvoice
 * @property-read \App\Models\PackageType $packageType
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TransitDetails[] $transitDetails
 * @property-read int|null $transit_details_count
 * @method static \Database\Factories\PackageFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Package newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Package newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Package query()
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereCourierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereCourierTrackingNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereEstimatedCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereInternalTrackingNbr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package wherePackageTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereWeight($value)
 * @mixin \Eloquent
 */
class Package extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'package_type_id',
        'member_id',
        'courier_id',
        'courier_tracking_number',
        'weight',
        'internal_tracking_nbr',
        'estimated_cost',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'package_type_id' => 'integer',
        'member_id' => 'integer',
        'courier_id' => 'integer',
        'weight' => 'float:8,2',
        'estimated_cost' => 'float',
    ];


    public function transitDetails()
    {
        return $this->hasMany(\App\Models\TransitDetails::class);
    }

    public function memberInvoice()
    {
        return $this->hasOne(\App\Models\MemberInvoice::class);
    }

    public function packageType()
    {
        return $this->belongsTo(\App\Models\PackageType::class);
    }

    public function member()
    {
        return $this->belongsTo(\App\Models\Member::class);
    }

    public function courier()
    {
        return $this->belongsTo(\App\Models\Courier::class);
    }
}
