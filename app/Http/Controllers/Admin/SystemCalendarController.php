<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SystemCalendarController extends Controller
{
    public $sources = [
        [
            'model'      => '\\App\\Models\\Client',
            'date_field' => 'created_at',
            'field'      => 'first_name',
            'prefix'     => 'Client',
            'suffix'     => 'joined',
            'route'      => 'admin.clients.edit',
        ],
        [
            'model'      => '\\App\\Models\\User',
            'date_field' => 'created_at',
            'field'      => 'name',
            'prefix'     => 'User',
            'suffix'     => 'joined',
            'route'      => 'admin.users.edit',
        ],
        [
            'model'      => '\\App\\Models\\ContentPage',
            'date_field' => 'created_at',
            'field'      => 'title',
            'prefix'     => 'Page',
            'suffix'     => 'created',
            'route'      => 'admin.content-pages.edit',
        ],
        [
            'model'      => '\\App\\Models\\Task',
            'date_field' => 'created_at',
            'field'      => 'name',
            'prefix'     => 'Task',
            'suffix'     => 'created',
            'route'      => 'admin.tasks.edit',
        ],
        [
            'model'      => '\\App\\Models\\Project',
            'date_field' => 'created_at',
            'field'      => 'name',
            'prefix'     => 'Project',
            'suffix'     => 'created',
            'route'      => 'admin.projects.edit',
        ],
        [
            'model'      => '\\App\\Models\\Income',
            'date_field' => 'entry_date',
            'field'      => 'description',
            'prefix'     => 'Income',
            'suffix'     => 'entered',
            'route'      => 'admin.incomes.edit',
        ],
        [
            'model'      => '\\App\\Models\\Expense',
            'date_field' => 'entry_date',
            'field'      => 'description',
            'prefix'     => 'Expense',
            'suffix'     => 'entered',
            'route'      => 'admin.expenses.edit',
        ],
    ];

    public function index()
    {
        $events = [];

        foreach ($this->sources as $source) {
            foreach ($source['model']::all() as $model) {
                $crudFieldValue = $model->getAttributes()[$source['date_field']];

                if (!$crudFieldValue) {
                    continue;
                }

                $events[] = [
                    'title' => trim($source['prefix'] . " " . $model->{$source['field']}
                        . " " . $source['suffix']),
                    'start' => $crudFieldValue,
                    'url'   => route($source['route'], $model->id),
                ];
            }
        }

        return view('admin.calendar.calendar', compact('events'));
    }
}
