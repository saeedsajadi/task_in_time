<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class JobController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Auth::user()->jobs()->paginate(10);
        return view('job.index', compact('jobs'));
    }
    public function create()
    {
        $title_list = Auth::user()->titles()->lists('title', 'title');
        return view('job.create', compact('title_list'));
    }

    public function edit($id)
    {
        $job = Auth::user()->jobs()->findOrFail($id);
        $title_list = Auth::user()->titles()->lists('title', 'title');
        return view('job.edit', compact('job', 'title_list'));
    }

    public function delete($id)
    {
        Auth::user()->jobs()->findOrFail($id);
        return view('layouts.delete', compact('id'));
    }

    public function delete_post($id)
    {
        $job = Auth::user()->jobs()->findOrFail($id);
        $job->delete();
        return redirect('/');
    }

    public function store(Request $request)
    {
        $job = Auth::user()->jobs()->create($request->all());
        $this->syncTitles($job, $request->title_list);
        return redirect('/');
    }

    public function update(Request $request, $id)
    {
        $job = Auth::user()->jobs()->findOrFail($id);
        $job->update($request->all());
        $job->save();
        $this->syncTitles($job, $request->title_list);
        return redirect('/');
    }

    private function syncTitles($job, $titles)
    {
        $fresh = [];
        foreach($titles as $title )
        {
            if( $finded = \App\Title::where('title', $title)->first() )
            {
                $fresh[] = $finded->id;
            }
            else
            {
                $t = Auth::user()->titles()->create(['title' => $title]);
                $fresh[] = $t->id;
            }
        }
        $job->titles()->sync( $fresh );
    }
}
