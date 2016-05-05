<?php

namespace Sexport;

/**
 * Sexport\Company
 *
 * @property-read \Sexport\User $updatedBy
 * @mixin \Eloquent
 * @property-read \Sexport\Company $company
 * @property-read \Sexport\User $createdBy
 * @property integer $id
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted_by
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Company whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Company whereCreatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Company whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Company whereDeletedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Company whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Company whereUpdatedAt($value)
 */
class Company extends BaseModel
{
    //
}
