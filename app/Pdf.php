<?php

namespace Sexport;

/**
 * Sexport\Pdf
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
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Pdf whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Pdf whereCompanyId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Pdf whereCreatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Pdf whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Pdf whereDeletedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Pdf whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Pdf whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Pdf whereUpdatedAt($value)
 * @property integer $box_id
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Pdf whereBoxId($value)
 */
class Pdf extends BaseModel
{
    //
}
