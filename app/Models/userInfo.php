<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\userInfo
 *
 * @property int $id
 * @property int $user_id
 * @property string $fname
 * @property string $lname
 * @property string $salutation
 * @property string $dob
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|userInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|userInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|userInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|userInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|userInfo whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|userInfo whereDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|userInfo whereFname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|userInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|userInfo whereLname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|userInfo whereSalutation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|userInfo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|userInfo whereUserId($value)
 * @mixin \Eloquent
 */
class userInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'fname',
        'lname',
        'salutation',
        'dob'
    ];

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
