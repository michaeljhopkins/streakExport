<?php

namespace Sexport;

/**
 * Sexport\Box
 *
 * @property-read \Sexport\User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\Sexport\Call[] $calls
 * @property-read \Illuminate\Database\Eloquent\Collection|\Sexport\Link[] $links
 * @property-read \Illuminate\Database\Eloquent\Collection|\Sexport\Meeting[] $meetings
 * @property-read \Illuminate\Database\Eloquent\Collection|\Sexport\Note[] $notes
 * @property-read \Illuminate\Database\Eloquent\Collection|\Sexport\Thread[] $threads
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
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Box whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Box whereCompanyId($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Box whereCreatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Box whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Box whereDeletedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Box whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Box whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Sexport\Box whereUpdatedAt($value)
 */
class Box extends BaseModel
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function calls()
    {
        return $this->hasMany(Call::class);
    }
    
    public function links()
    {
        return $this->hasMany(Link::class);
    }
    
    public function meetings()
    {
        return $this->hasMany(Meeting::class);
    }
    
    public function notes()
    {
        return $this->hasMany(Note::class);
    }
    
    public function threads()
    {
        return $this->hasMany(Thread::class);
    }
}
