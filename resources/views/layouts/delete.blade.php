@extends('layouts.app')
@section('content')
<div class="container">
    <div class="panel panel-danger">
        <div class="panel-heading">حذف اطلاعات</div>
        <div class="panel-body">
            آیا از حذف آیتم اطمینان دارید؟
        </div>
        <div class="panel-footer">
            {!! Form::open() !!}
            {!! Form::hidden('id', $id) !!}
            {!! Form::submit('بله، حذف شود!!!') !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection