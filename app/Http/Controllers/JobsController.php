<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobRequest;
use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     *  Display a lists of all available jobs
     */
    public function index(Request $request)
    {
        //dd(request('tag'));
        return view('jobs.index', [
            'jobs' => Job::latest()->filter(request(['tags', 'search']))->paginate(3)
        ]);
    }

    /**
     *  Display a sigle job list 
     */
    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    /**
     *  Display the create form 
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * This saves a new job created
     */
    public function store(CreateJobRequest $request)
    {
        //dd($request->all());
        if($request->hasFile('logo')){
            $logo = $request->file('logo')->store('logos', 'public');
        } else {
            $logo = '';
        }

        $created = Job::create([
            'user_id'         => auth()->user()->id, 
            'title'           => $request['jobTitle'],
            'logo'            => $logo,
            'location'        => $request['jobLocation'],
            'tags'            => $request['tagline'],
            'job_type'        => $request['jobType'],
            'job_description' => $request['jobDescription'],
            'company_name'    => $request['companyName'],
            'company_description' => $request['companyDescription'],
            'email'           => $request['email'],
            'website'         => $request['website'],
            'facebook'        => $request['facebookhandle'],
            'twitter'         => $request['twitterhandle'],
            'linkedin'        => $request['linkedinhandle']
        ]);

        return $created 
        ?  redirect('/')->with('success', 'Job created successfully')
        : redirect()->route('create')->with('error', 'Error Occured while adding this job, Please Retry!!');
    }

    /**
     *  this display the edit form
     */
    public function edit(Job $job)
    {
        return view('jobs.edit', [
            'job' => $job
        ]);
    }

     /**
     *  this Update the Job
     */
    public function update(CreateJobRequest $request, Job $job)
    {
        // make sure logged in user is owner
        if($job->user_id != auth()->user()->id)
        {
            abort(403, 'Unauthorized Action');
        }

        $filePath = '/logos/' . $job->logo;
        if(file_exists($job->logo)){
            unlink($filePath);
        } else {
            $logo = $request->file('logo')->store('logos', 'public');
        }

        $updated = $job->update([
            'user_id'         => auth()->user()->id, 
            'title'           => $request['jobTitle'],
            'logo'            => $logo,
            'location'        => $request['jobLocation'],
            'tags'            => $request['tagline'],
            'job_type'        => $request['jobType'],
            'job_description' => $request['jobDescription'],
            'company_name'    => $request['companyName'],
            'company_description' => $request['companyDescription'],
            'email'           => $request['email'],
            'website'         => $request['website'],
            'facebook'        => $request['facebookhandle'],
            'twitter'         => $request['twitterhandle'],
            'linkedin'        => $request['linkedinhandle']
        ]);

        return $updated 
        ?  redirect('/')->with('success', 'Job updated successfully')
        : redirect()->route('edit')->with('error', 'Error Occured while updating this job details, Please Retry again!!');
    }

    /**
     * This delete a job from the job listings
     */
    public function destroy(Job $job)
    {
        // make sure logged in user is owner
        if($job->user_id != auth()->user()->id)
        {
            abort(403, 'Unauthorized Action');
        }
        
        $job->delete();

        return redirect('/')->with('success', 'Job deleted successfully');
    }

    /**
     * Display the manage jobs page
     */
    public function manage()
    {
        $jobs = Job::orderBy('created_at', 'desc')->with('user')->get() ;
        return view('jobs.manage', [
            'jobs' => $jobs
        ]);
    }
}
