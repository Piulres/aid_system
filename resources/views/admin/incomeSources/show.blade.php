@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.incomeSource.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.income-sources.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.incomeSource.fields.id') }}
                        </th>
                        <td>
                            {{ $incomeSource->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.incomeSource.fields.name') }}
                        </th>
                        <td>
                            {{ $incomeSource->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.incomeSource.fields.fee_percent') }}
                        </th>
                        <td>
                            {{ $incomeSource->fee_percent }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.income-sources.index') }}">
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
            <a class="nav-link" href="#income_source_transactions" role="tab" data-toggle="tab">
                {{ trans('cruds.transaction.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="income_source_transactions">
            @includeIf('admin.incomeSources.relationships.incomeSourceTransactions', ['transactions' => $incomeSource->incomeSourceTransactions])
        </div>
    </div>
</div>

@endsection