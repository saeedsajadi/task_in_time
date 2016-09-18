@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {!! Form::open() !!}
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title">عنوان فعالیت</label>
                                    <select name="title" id="title" class="form-control select2" multiple>
                                        <option value="1">test</option>
                                        <option value="2">boob</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="gozaresh_day">روز فعالیت</label>
                                        <input name="gozaresh_day" id="gozaresh_day" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="gozaresh_start">شروع فعالیت</label>
                                        <input name="gozaresh_start" id="gozaresh_start" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="gozaresh_end">پایان فعالیت</label>
                                        <input name="gozaresh_end" id="gozaresh_end" class="form-control">
                                    </div>
                                </div>
                            </div>
                            </div>

                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-primary" type="submit">ثبت گزارش</button>
                    </div>
                </div>
                {!! Form::open() !!}
            </div>
        </div>
    </div>
@endsection
