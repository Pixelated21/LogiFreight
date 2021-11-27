<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TransitDetails
 *
 * @property int $id
 * @property int $package_id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Package $package
 * @method static \Database\Factories\TransitDetailsFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TransitDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TransitDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TransitDetails query()
 * @method static \Illuminate\Database\Eloquent\Builder|TransitDetails whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransitDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransitDetails wherePackageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransitDetails whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransitDetails whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TransitDetails extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'package_id',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'package_id' => 'integer',
    ];


    public function package()
    {
        return $this->belongsTo(\App\Models\Package::class);
    }
}
