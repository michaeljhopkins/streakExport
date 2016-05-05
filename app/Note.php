<?php

namespace Sexport;

/**
 * Sexport\Note
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
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Note whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Note whereCompanyId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Note whereCreatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Note whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Note whereDeletedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Note whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Note whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Note whereUpdatedAt($value)
 * @property integer $box_id
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Note whereBoxId($value)
 */
class Note extends BaseModel
{
    //
}
