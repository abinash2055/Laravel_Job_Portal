<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    public function index ()
    {
        $jobs = Job::with('employer')->simplePaginate(3);

        return view('pages.jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function create ()
    {
        return view('pages.jobs.create');
    }

    public function show (Job $job)
    {
        return view('pages.jobs.show', ['job' => $job]);
    }

    public function store ()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);
    
        Job::create([
            'title'=>request('title'),
            'salary'=>request('salary'),
            'employer_id'=> 25,
        ]);
        return redirect("/jobs"); 
    }

    public function edit (Job $job)
    {

        Gate::authorize("edit-job", $job);

        return view('pages.jobs.edit', ['job' => $job]);
    }

    public function update (Job $job)
    {
        // Gate::authorize("edit-job", $job);

         // Validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);
    
    // Update the job
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    // redirect to job page
    return redirect('/jobs/'. $job->id);
    }

    public function destroy (Job $job)
    {
        Gate::authorize("edit-job", $job);

        // delete the job
        $job->delete();

        // redirect
        return redirect('/jobs');
    }
}
