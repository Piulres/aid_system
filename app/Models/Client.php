<?php

namespace App\Models;

use App\Traits\Auditable;
use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Client extends Model
{
    use SoftDeletes, MultiTenantModelTrait, Auditable;

    public $table = 'clients';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public static $searchable = [
        'first_name',
        'last_name',
        'company',
        'email',
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'company',
        'email',
        'phone',
        'website',
        'skype',
        'country',
        'status_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'team_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function clientProjects()
    {
        return $this->hasMany(Project::class, 'client_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(ClientStatus::class, 'status_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
