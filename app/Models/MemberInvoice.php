<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\MemberInvoice
 *
 * @property int $id
 * @property int $member_id
 * @property int $package_id
 * @property int $total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Member $member
 * @property-read \App\Models\Package $package
 * @method static \Database\Factories\MemberInvoiceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|MemberInvoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MemberInvoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MemberInvoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|MemberInvoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MemberInvoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MemberInvoice whereMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MemberInvoice wherePackageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MemberInvoice whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MemberInvoice whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MemberInvoice extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'member_id',
        'package_id',
        'total',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'member_id' => 'integer',
        'package_id' => 'integer',
    ];


    public function member()
    {
        return $this->belongsTo(\App\Models\Member::class);
    }

    public function package()
    {
        return $this->belongsTo(\App\Models\Package::class);
    }
}
