@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">لیست فعالیت های کاربر</div>
            <div class="panel-body">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="text-center">عنوان فعالیت</th>
                        <th class="text-center">روز انجام</th>
                        <th class="text-center">ساعت شروع</th>
                        <th class="text-center">ساعت پایان</th>
                        <th class="text-center">مدت زمان</th>
                        <th class="text-center">عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($jobs as $job)
                    <tr>
                        <td class="text-center">{{ implode(' - ', $job->titles()->lists('title')->toArray()) }}</td>
                        <td class="text-center">{{ $job->job_day }}</td>
                        <td class="text-center">{{ $job->job_start }}</td>
                        <td class="text-center">{{ $job->job_end }}</td>
                        <td class="text-center">{{ gmdate("H:i", (strtotime($job->job_end) - strtotime($job->job_start))) }}</td>
                        <td class="text-center">
                            <a href="{{ url('edit', $job->id) }}" class="btn btn-warning" title="ویرایش"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
                            <a href="{{ url('delete', $job->id) }}" class="btn btn-danger" title="حذف"><i class="glyphicon glyphicon-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $jobs->links() }}
            </div>
        </div>
    </div>
@endsection