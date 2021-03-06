@extends('layouts.adminlte.master')

@section('title')
    @lang('warehouse.show.title')
@endsection

@section('page_title')
    <span class="fa fa-wrench fa-fw"></span>&nbsp;@lang('warehouse.show.page_title')
@endsection

@section('page_title_desc')
    @lang('warehouse.show.page_title_desc')
@endsection

@section('breadcrumbs')
    {!! Breadcrumbs::render('master_warehouse_show', $warehouse->hId()) !!}
@endsection

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">@lang('warehouse.show.header.title') : {{ $warehouse->name }}</h3>
        </div>
        <div class="box-body">
            <form class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">@lang('warehouse.field.name')</label>
                        <div class="col-sm-10">
                            <label id="name" class="control-label">
                                <span class="control-label-normal">{{ $warehouse->name }}</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress" class="col-sm-2 control-label">@lang('warehouse.field.address')</label>
                        <div class="col-sm-10">
                            <label id="inputAddress" class="control-label">
                                <span class="control-label-normal">{{ $warehouse->address }}</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPhoneNum" class="col-sm-2 control-label">@lang('warehouse.field.phone_num')</label>
                        <div class="col-sm-10">
                            <label id="inputPhoneNum" class="control-label control-label-normal">
                                <span class="control-label-normal">{{ $warehouse->phone_num }}</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSection" class="col-sm-2 control-label">@lang('warehouse.field.section')</label>
                        <div class="col-sm-10">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>@lang('warehouse.show.table.header.name')</th>
                                        <th>@lang('warehouse.show.table.header.position')</th>
                                        <th>@lang('warehouse.show.table.header.capacity')</th>
                                        <th>@lang('warehouse.show.table.header.remarks')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($warehouse->sections as $key => $s)
                                        <tr>
                                            <td>{{ $s->name }}</td>
                                            <td>{{ $s->position }}</td>
                                            <td>{{ $s->capacity }}</td>
                                            <td>{{ $s->remarks }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputStatus" class="col-sm-2 control-label">@lang('warehouse.field.status')</label>
                        <div class="col-sm-10">
                            <label id="status" class="control-label control-label-normal">
                                <span class="control-label-normal">@lang('lookup.'.$warehouse->status)</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputRemarks" class="col-sm-2 control-label">@lang('warehouse.field.remarks')</label>
                        <div class="col-sm-10">
                            <label id="remarks" class="control-label control-label-normal">
                                <span class="control-label-normal">{{ $warehouse->remarks }}</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputButton" class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <a href="{{ route('db.master.warehouse') }}" class="btn btn-default">@lang('buttons.back_button')</a>
                        </div>
                    </div>
                </div>
                <div class="box-footer"></div>
            </form>
        </div>
    </div>
@endsection