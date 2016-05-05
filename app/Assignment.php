<?php

namespace Sexport;

/**
 * Sexport\Assignment
 *
 * @property-read \Sexport\Company $company
 * @property-read \Sexport\User $createdBy
 * @property-read \Sexport\User $updatedBy
 * @mixin \Eloquent
 * @property integer $id
 * @property integer $company_id
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted_by
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Assignment whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Assignment whereCompanyId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Assignment whereCreatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Assignment whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Assignment whereDeletedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Assignment whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Assignment whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Assignment whereUpdatedAt($value)
 * @property integer $box_id
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Assignment whereBoxId($value)
 */
class Assignment extends BaseModel
{
    //
}
