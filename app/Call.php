<?php

namespace Sexport;

/**
 * Sexport\Call
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
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Call whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Call whereCompanyId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Call whereCreatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Call whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Call whereDeletedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Call whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Call whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Call whereUpdatedAt($value)
 * @property integer $box_id
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Call whereBoxId($value)
 */
class Call extends BaseModel
{
    //
}
