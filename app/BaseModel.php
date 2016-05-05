<?php

namespace Sexport;

use Illuminate\Database\Eloquent\Model;

/**
 * Sexport\BaseModel
 *
 * @property-read \Sexport\Company $company
 * @property-read \Sexport\User $createdBy
 * @property-read \Sexport\User $updatedBy
 * @mixin \Eloquent
 */
class BaseModel extends Model
{
    protected $guarded = [
        'id',
    ];

    protected $hidden = [
    	'company_id',
    	'updated_by',
    	'updated_at',
    	'created_at',
    	'created_by',
    	'deleted_at',
    	'deleted_by',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    
    public function createdBy()
    {
        return $this->belongsTo(User::class,'created_by');
    }
    
    public function updatedBy()
    {
        return $this->belongsTo(User::class,'updated_by');
    }
}
