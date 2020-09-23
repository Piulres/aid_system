<?php

namespace App\Models;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Team extends Model
{
    use SoftDeletes, Auditable;

    public $table = 'teams';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'name',
        'owner_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function teamTaskStatuses()
    {
        return $this->hasMany(TaskStatus::class, 'team_id', 'id');
    }

    public function teamTaskTags()
    {
        return $this->hasMany(TaskTag::class, 'team_id', 'id');
    }

    public function teamTasks()
    {
        return $this->hasMany(Task::class, 'team_id', 'id');
    }

    public function teamExpenses()
    {
        return $this->hasMany(Expense::class, 'team_id', 'id');
    }

    public function teamIncomes()
    {
        return $this->hasMany(Income::class, 'team_id', 'id');
    }

    public function teamClientStatuses()
    {
        return $this->hasMany(ClientStatus::class, 'team_id', 'id');
    }

    public function teamProjectStatuses()
    {
        return $this->hasMany(ProjectStatus::class, 'team_id', 'id');
    }

    public function teamClients()
    {
        return $this->hasMany(Client::class, 'team_id', 'id');
    }

    public function teamProjects()
    {
        return $this->hasMany(Project::class, 'team_id', 'id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
