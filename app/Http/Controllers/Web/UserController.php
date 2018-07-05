<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index($organizationId)
    {
        return view('site.users.index');
    }

    public function create($organizationId)
    {

    }

    public function store($organizationId)
    {

    }

    public function edit($organizationId, $userId)
    {

    }

    public function update($organizationId, $userId)
    {

    }

    public function delete($organizationId, $userId)
    {

    }
}
