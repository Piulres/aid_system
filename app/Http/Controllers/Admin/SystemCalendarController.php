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
            'route'      => 'admin.clients.show',
        ],
        [
            'model'      => '\\App\\Models\\User',
            'date_field' => 'created_at',
            'field'      => 'name',
            'prefix'     => 'User',
            'suffix'     => 'joined',
            'route'      => 'admin.users.show',
        ],
        [
            'model'      => '\\App\\Models\\ContentPage',
            'date_field' => 'created_at',
            'field'      => 'title',
            'prefix'     => 'Page',
            'suffix'     => 'created',
            'route'      => 'admin.content-pages.show',
        ],
        [
            'model'      => '\\App\\Models\\Task',
            'date_field' => 'created_at',
            'field'      => 'name',
            'prefix'     => 'Task',
            'suffix'     => 'created',
            'route'      => 'admin.tasks.show',
        ],
        [
            'model'      => '\\App\\Models\\Project',
            'date_field' => 'created_at',
            'field'      => 'name',
            'prefix'     => 'Project',
            'suffix'     => 'created',
            'route'      => 'admin.projects.show',
        ],
        [
            'model'      => '\\App\\Models\\Income',
            'date_field' => 'entry_date',
            'field'      => 'description',
            'prefix'     => 'Income',
            'suffix'     => 'entered',
            'route'      => 'admin.incomes.show',
        ],
        [
            'model'      => '\\App\\Models\\Expense',
            'date_field' => 'entry_date',
            'field'      => 'description',
            'prefix'     => 'Expense',
            'suffix'     => 'entered',
            'route'      => 'admin.expenses.show',
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
