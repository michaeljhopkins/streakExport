<?php

namespace Sexport;

/**
 * Sexport\Participant
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
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Participant whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Participant whereCompanyId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Participant whereCreatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Participant whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Participant whereDeletedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Participant whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Participant whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Participant whereUpdatedAt($value)
 * @property integer $box_id
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Participant whereBoxId($value)
 */
class Participant extends BaseModel
{
    //
}
