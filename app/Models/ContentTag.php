<?php

namespace App\Models;

use App\Traits\Auditable;
use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class ContentTag extends Model
{
    use SoftDeletes, MultiTenantModelTrait, Auditable;

    public $table = 'content_tags';

    public static $searchable = [
        'name',
        'slug',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'slug',
        'created_at',
        'updated_at',
        'deleted_at',
        'team_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function tagContentPages()
    {
        return $this->belongsToMany(ContentPage::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
