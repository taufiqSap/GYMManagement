<?php

namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\Trainers;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
        $members = Members::paginate();
        return view('members.index',compact('members'));
    }
}
