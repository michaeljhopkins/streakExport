<?php

namespace Sexport;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Sexport\User
 *
 * @property-read \Sexport\Company $company
 * @property-read \Illuminate\Database\Eloquent\Collection|\Sexport\Box[] $boxes
 * @mixin \Eloquent
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property integer $company_id
 * @property integer $updated_by
 * @property integer $deleted_by
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Sexport\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\User whereCompanyId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\User whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\User whereDeletedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\User whereUpdatedAt($value)
 * @property string $token
 * @method static \Illuminate\Database\Query\Builder|\Sexport\User whereToken($value)
 * @property string $first_name
 * @property string $last_name
 * @method static \Illuminate\Database\Query\Builder|\Sexport\User whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\User whereLastName($value)
 */
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'company_id',
        'updated_by',
        'updated_at',
        'created_at',
        'created_by',
        'deleted_at',
        'deleted_by',
        'password',
        'remember_token',
    ];
    
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    
    public function boxes()
    {
        return $this->hasMany(Box::class);
    }
}
