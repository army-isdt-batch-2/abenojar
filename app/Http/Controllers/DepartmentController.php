<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Redirect;

class DepartmentController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return view('departments')->with([
            'data' => Department::all()
        ]);
    }

    public function create()
    {
        return view('create_form.departments');
    }

    public function create_save()
    {
        Department::create(
            $this->request->except('_token')
        );

        return Redirect::route('department');
    }
}
