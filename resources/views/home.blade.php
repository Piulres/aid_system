@extends('layouts.admin')
@section('content')
<div class="content">
    
    @if(session('status'))
    <div class="row">
        <div class="col-12">
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        </div>
    </div>
    @endif

    <div class="row">
        
        {{-- Widget - block --}}
        <a href="{{ $settings1['link']}}" class="{{ $settings1['column_class'] }}">
            <div class="card text-white bg-native">
                <div class="card-body pb-0">
                    <div class="text-value">{{ number_format($settings1['total_number']) }}</div>
                    <div>{{ $settings1['chart_title'] }}</div>
                    <br />
                </div>
            </div>
        </a>
        
        <a href="{{ $settings2['link']}}" class="{{ $settings2['column_class'] }}">
            <div class="card text-white bg-native">
                <div class="card-body pb-0">
                    <div class="text-value">{{ number_format($settings2['total_number']) }}</div>
                    <div>{{ $settings2['chart_title'] }}</div>
                    <br />
                </div>
            </div>
        </a>
        
        <a href="{{ $settings3['link']}}" class="{{ $settings3['column_class'] }}">
            <div class="card text-white bg-native">
                <div class="card-body pb-0">
                    <div class="text-value">{{ number_format($settings3['total_number']) }}</div>
                    <div>{{ $settings3['chart_title'] }}</div>
                    <br />
                </div>
            </div>
        </a>
        
        <a href="{{ $settings4['link']}}" class="{{ $settings4['column_class'] }}">
            <div class="card text-white bg-native">
                <div class="card-body pb-0">
                    <div class="text-value">{{ number_format($settings4['total_number']) }}</div>
                    <div>{{ $settings4['chart_title'] }}</div>
                    <br />
                </div>
            </div>
        </a>
        
        <a href="{{ $settings5['link']}}" class="{{ $settings5['column_class'] }}">
            <div class="card text-white bg-native">
                <div class="card-body pb-0">
                    <div class="text-value">{{ number_format($settings5['total_number']) }}</div>
                    <div>{{ $settings5['chart_title'] }}</div>
                    <br />
                </div>
            </div>
        </a>
        
        <a href="{{ $settings6['link']}}" class="{{ $settings6['column_class'] }}">
            <div class="card text-white bg-native">
                <div class="card-body pb-0">
                    <div class="text-value">{{ number_format($settings6['total_number']) }}</div>
                    <div>{{ $settings6['chart_title'] }}</div>
                    <br />
                </div>
            </div>
        </a>
        
        {{-- Widget - latest entries --}}
        <div class="{{ $settings8['column_class'] }}" style="overflow-x: auto;">
            <h3>{{ $settings8['chart_title'] }}</h3>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.task.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.task.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.task.fields.due_date') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($settings8['data'] as $entry)
                        <tr>
                            @foreach($settings8['fields'] as $key => $value)
                                <td>
                                    @if($value === '')
                                        {{ $entry->{$key} }}
                                    @elseif(is_iterable($entry->{$key}))
                                        @foreach($entry->{$key} as $subEentry)
                                            <span class="label label-info">{{ $subEentry->{$value} }}</span>
                                        @endforeach
                                    @else
                                        {{ $entry->{$key}->{$value} }}
                                    @endif
                                </td>
                            @endforeach
                        </tr>
                        @empty
                        <tr>
                            <td colspan="{{ count($settings8['fields']) }}">{{ trans('global.not_found') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="{{ $settings9['column_class'] }}" style="overflow-x: auto;">
            <h3>{{ $settings9['chart_title'] }}</h3>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.contentPage.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.contentPage.fields.category') }}
                        </th>
                        <th>
                            {{ trans('cruds.contentPage.fields.tag') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($settings9['data'] as $entry)
                        <tr>
                            @foreach($settings9['fields'] as $key => $value)
                                <td>
                                    @if($value === '')
                                        {{ $entry->{$key} }}
                                    @elseif(is_iterable($entry->{$key}))
                                        @foreach($entry->{$key} as $subEentry)
                                            <span class="label label-info">{{ $subEentry->{$value} }}</span>
                                        @endforeach
                                    @else
                                        {{ $entry->{$key}->{$value} }}
                                    @endif
                                </td>
                            @endforeach
                        </tr>
                        @empty
                        <tr>
                            <td colspan="{{ count($settings9['fields']) }}">{{ trans('global.not_found') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="{{ $settings10['column_class'] }}" style="overflow-x: auto;">
            <h3>{{ $settings10['chart_title'] }}</h3>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.first_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.client.fields.last_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.client.fields.company') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($settings10['data'] as $entry)
                        <tr>
                            @foreach($settings10['fields'] as $key => $value)
                                <td>
                                    @if($value === '')
                                        {{ $entry->{$key} }}
                                    @elseif(is_iterable($entry->{$key}))
                                        @foreach($entry->{$key} as $subEentry)
                                            <span class="label label-info">{{ $subEentry->{$value} }}</span>
                                        @endforeach
                                    @else
                                        {{ $entry->{$key}->{$value} }}
                                    @endif
                                </td>
                            @endforeach
                        </tr>
                        @empty
                        <tr>
                            <td colspan="{{ count($settings10['fields']) }}">{{ trans('global.not_found') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="{{ $settings11['column_class'] }}" style="overflow-x: auto;">
            <h3>{{ $settings11['chart_title'] }}</h3>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.project.fields.client') }}
                        </th>
                        <th>
                            {{ trans('cruds.project.fields.status') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($settings11['data'] as $entry)
                        <tr>
                            @foreach($settings11['fields'] as $key => $value)
                                <td>
                                    @if($value === '')
                                        {{ $entry->{$key} }}
                                    @elseif(is_iterable($entry->{$key}))
                                        @foreach($entry->{$key} as $subEentry)
                                            <span class="label label-info">{{ $subEentry->{$value} }}</span>
                                        @endforeach
                                    @else
                                        {{ $entry->{$key}->{$value} }}
                                    @endif
                                </td>
                            @endforeach
                        </tr>
                        @empty
                        <tr>
                            <td colspan="{{ count($settings11['fields']) }}">{{ trans('global.not_found') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Widget - analyze --}}
        @can('user_management_access')
            <div class="{{ $chart12->options['column_class'] }}">
                <h3>{!! $chart12->options['chart_title'] !!}</h3>
                {!! $chart12->renderHtml() !!}
            </div>
            <div class="{{ $chart13->options['column_class'] }}">
                <h3>{!! $chart13->options['chart_title'] !!}</h3>
                {!! $chart13->renderHtml() !!}
            </div>
            <div class="{{ $chart14->options['column_class'] }}">
                <h3>{!! $chart14->options['chart_title'] !!}</h3>
                {!! $chart14->renderHtml() !!}
            </div>
        @endcan

    </div>
        
</div>
@endsection
@section('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>{!! $chart12->renderJs() !!}{!! $chart13->renderJs() !!}{!! $chart14->renderJs() !!}
@endsection