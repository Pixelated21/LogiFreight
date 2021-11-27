<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Alert
 *
 * @property int $id
 * @property int $member_id
 * @property int $courier_id
 * @property string $tracking_nbr
 * @property int $package_value
 * @property string $desc
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Courier $courier
 * @property-read \App\Models\Member $member
 * @method static \Database\Factories\AlertFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Alert newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Alert newQuery()
 * @method static \Illuminate\Database\Query\Builder|Alert onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Alert query()
 * @method static \Illuminate\Database\Eloquent\Builder|Alert whereCourierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alert whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alert whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alert whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alert whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alert whereMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alert wherePackageValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alert whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alert whereTrackingNbr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alert whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Alert withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Alert withoutTrashed()
 * @mixin \Eloquent
 */
class Alert extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'member_id',
        'courier_id',
        'tracking_nbr',
        'package_value',
        'desc',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'member_id' => 'integer',
        'courier_id' => 'integer',
    ];


    public function member()
    {
        return $this->belongsTo(\App\Models\Member::class);
    }

    public function courier()
    {
        return $this->belongsTo(\App\Models\Courier::class);
    }
}
