<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmissionsController extends Controller
{
    public function index()
    {
        // TODO return tables of submissions from the database
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
        // TODO validate and store the submission
    }
}
