<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('title_list', 'عنوان فعالیت') !!}
            <?php
                $selected = (isset($job))?$job->titles()->lists('title')->toArray():null;
            ?>
            {!! Form::select('title_list[]', $title_list, $selected,
             ['class' => 'form-control select2', 'multiple' => true, 'id' => 'title_list']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('job_day', 'روز فعالیت') !!}
            {!! Form::text('job_day', jDate::forge()->format('%Y/%m/%d'), ['class' => 'form-control datepicker text-center']) !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('job_start', 'شروع فعالیت') !!}
            {!! Form::text('job_start', null, ['class' => 'form-control timepicker text-center']) !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('job_end', 'پایان فعالیت') !!}
            {!! Form::text('job_end', null, ['class' => 'form-control timepicker text-center']) !!}
        </div>
    </div>
</div>