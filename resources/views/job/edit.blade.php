@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {!! Form::model($job) !!}
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @include('job.form')
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">ویرایش گزارش</button>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::open() !!}
            </div>
        </div>
    </div>
@endsection
