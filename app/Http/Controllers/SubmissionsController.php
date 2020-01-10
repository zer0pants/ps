<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmissionsController extends Controller
{
    public function index()
    {
        $submissions = [];

        return view('submissions.index', [
            'submissions' => $submissions,
        ]);
    }

    public function show()
    {
        // TODO - Not implemented
    }

    public function create()
    {
        return view('submissions.create');
    }

    public function store(Request $request)
    {
        dd($request->all());

        $this->validate($request, [
            'name'              => '',
            'email'             => '',
            'phone'             => '',
            'mobile'            => '',
            'address'           => '',
            'description_short' => '',
            'description_long'  => '',
        ]);

        return view('submissions.response');
    }
}
