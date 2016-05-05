<?php

namespace Sexport;

/**
 * Sexport\Thread
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\Sexport\Attachment[] $attachments
 * @property-read \Illuminate\Database\Eloquent\Collection|\Sexport\Pdf[] $pdfs
 * @property-read \Sexport\Box $box
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
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Thread whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Thread whereCompanyId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Thread whereCreatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Thread whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Thread whereDeletedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Thread whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Thread whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Thread whereUpdatedAt($value)
 * @property integer $box_id
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Thread whereBoxId($value)
 */
class Thread extends BaseModel
{
    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }
    
    public function pdfs()
    {
        return $this->hasMany(Pdf::class);
    }
    
    public function box()
    {
        return $this->belongsTo(Box::class);
    }
}
