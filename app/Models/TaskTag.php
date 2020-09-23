<?php

namespace App\Models;

use App\Traits\Auditable;
use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class TaskTag extends Model
{
    use SoftDeletes, MultiTenantModelTrait, Auditable;

    public $table = 'task_tags';

    public static $searchable = [
        'name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
        'team_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function tagTasks()
    {
        return $this->belongsToMany(Task::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
