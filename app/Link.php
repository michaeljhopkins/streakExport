<?php

namespace Sexport;

/**
 * Sexport\Link
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
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Link whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Link whereCompanyId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Link whereCreatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Link whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Link whereDeletedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Link whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Link whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Link whereUpdatedAt($value)
 * @property integer $box_id
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Link whereBoxId($value)
 */
class Link extends BaseModel
{
    //
}
