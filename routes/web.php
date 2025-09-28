<?php

use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;


Route::get('/', function () {
   
    return view('welcome');
  
});


Route::get('/jobs', function() {
    $jobs = Job::with('employer')->paginate(5);
    return view('jobs/index', ['jobs'=> $jobs]);
});

Route::post('jobs', function() {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);
    Job::create([
        'employer_id' => 1,
        'title'=> request('title'),
        'salary'=>request('salary'),
        
       
    ]);
    return redirect('/jobs');
});

Route::get('/job/{id}', function($id){
   
    return view('jobs/show', ['job'=> Job::find($id)]);
});

Route::get('/jobs/create', function() {
    return view('jobs/create');
}); 

Route::get('/jobs/{id}/edit', function($id){
   
    return view('jobs/edit', ['job'=> Job::find($id)]);
});

Route::patch('/jobs/{id}', function($id) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);
    $job = Job::find($id); 
    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);
    return redirect('/job/'.$job->id);
});


//Customer routes
Route::get('/customers', function() {
    return view('customers/index', ['customers' => Customer::with('invoices')->get()]);
});