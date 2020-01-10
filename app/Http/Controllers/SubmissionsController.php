<?php

namespace App\Http\Controllers;

use App\Submission;
use Illuminate\Http\Request;

class SubmissionsController extends Controller
{
    public function index()
    {
        $submissions = Submission::all();

        return view('submissions.index', [
            'submissions' => $submissions,
        ]);
    }

    public function show(Request $request, Submission $submission)
    {
        return view('submissions.show', [
            'submission' => $submission
        ]);
    }

    public function create()
    {
        return view('submissions.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'              => 'required|string|max:120',
            'email'             => 'required|email|max:120',
            'phone'             => 'required_without:mobile|digits_between:0,10',   // Phone OR Mobile must be submitted
            'mobile'            => 'required_without:phone|digits_between:0,10',    // Only digits (integers) are permitted
            'address'           => 'required|string|max:240',
            'description_short' => 'required|string|max:255',
            'description_long'  => 'required',                                      // It's unclear from the spec if this should be a required field, so marking as such just in case
        ]);

        $submission = new Submission($request->except('_token'));
        $submission->save();
        
        return redirect()
            ->route('submissions.response', ['submission' => $submission]);
    }

    public function response(Request $request, Submission $submission)
    {
        return view('submissions.response', [
            'submission' => $submission
        ]);
    }
}
