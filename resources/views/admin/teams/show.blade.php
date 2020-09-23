@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.team.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.teams.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.team.fields.id') }}
                        </th>
                        <td>
                            {{ $team->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.team.fields.name') }}
                        </th>
                        <td>
                            {{ $team->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.team.fields.owner') }}
                        </th>
                        <td>
                            {{ $team->owner->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.teams.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#team_task_statuses" role="tab" data-toggle="tab">
                {{ trans('cruds.taskStatus.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#team_task_tags" role="tab" data-toggle="tab">
                {{ trans('cruds.taskTag.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#team_tasks" role="tab" data-toggle="tab">
                {{ trans('cruds.task.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#team_expenses" role="tab" data-toggle="tab">
                {{ trans('cruds.expense.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#team_incomes" role="tab" data-toggle="tab">
                {{ trans('cruds.income.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#team_client_statuses" role="tab" data-toggle="tab">
                {{ trans('cruds.clientStatus.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#team_project_statuses" role="tab" data-toggle="tab">
                {{ trans('cruds.projectStatus.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#team_clients" role="tab" data-toggle="tab">
                {{ trans('cruds.client.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#team_projects" role="tab" data-toggle="tab">
                {{ trans('cruds.project.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="team_task_statuses">
            @includeIf('admin.teams.relationships.teamTaskStatuses', ['taskStatuses' => $team->teamTaskStatuses])
        </div>
        <div class="tab-pane" role="tabpanel" id="team_task_tags">
            @includeIf('admin.teams.relationships.teamTaskTags', ['taskTags' => $team->teamTaskTags])
        </div>
        <div class="tab-pane" role="tabpanel" id="team_tasks">
            @includeIf('admin.teams.relationships.teamTasks', ['tasks' => $team->teamTasks])
        </div>
        <div class="tab-pane" role="tabpanel" id="team_expenses">
            @includeIf('admin.teams.relationships.teamExpenses', ['expenses' => $team->teamExpenses])
        </div>
        <div class="tab-pane" role="tabpanel" id="team_incomes">
            @includeIf('admin.teams.relationships.teamIncomes', ['incomes' => $team->teamIncomes])
        </div>
        <div class="tab-pane" role="tabpanel" id="team_client_statuses">
            @includeIf('admin.teams.relationships.teamClientStatuses', ['clientStatuses' => $team->teamClientStatuses])
        </div>
        <div class="tab-pane" role="tabpanel" id="team_project_statuses">
            @includeIf('admin.teams.relationships.teamProjectStatuses', ['projectStatuses' => $team->teamProjectStatuses])
        </div>
        <div class="tab-pane" role="tabpanel" id="team_clients">
            @includeIf('admin.teams.relationships.teamClients', ['clients' => $team->teamClients])
        </div>
        <div class="tab-pane" role="tabpanel" id="team_projects">
            @includeIf('admin.teams.relationships.teamProjects', ['projects' => $team->teamProjects])
        </div>
    </div>
</div>

@endsection