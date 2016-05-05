<?php

namespace Sexport;

/**
 * Sexport\Attachment
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
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Attachment whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Attachment whereCompanyId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Attachment whereCreatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Attachment whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Attachment whereDeletedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Attachment whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Attachment whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Attachment whereUpdatedAt($value)
 * @property integer $box_id
 * @property integer $thread_id
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Attachment whereBoxId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Attachment whereThreadId($value)
 */
class Attachment extends BaseModel
{
    //
}
