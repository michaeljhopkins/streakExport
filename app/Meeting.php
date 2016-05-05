<?php

namespace Sexport;

/**
 * Sexport\Meeting
 *
 * @property-read \Sexport\User $updatedBy
 * @mixin \Eloquent
 * @property-read \Sexport\Company $company
 * @property-read \Sexport\User $createdBy
 * @property integer $id
 * @property integer $company_id
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted_by
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Meeting whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Meeting whereCompanyId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Meeting whereCreatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Meeting whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Meeting whereDeletedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Meeting whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Meeting whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Meeting whereUpdatedAt($value)
 * @property integer $box_id
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Meeting whereBoxId($value)
 */
class Meeting extends BaseModel
{
    //
}
