<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function index()
    {
        $model = Schedule::all();
        $users = $model->where('create_by', '1');
        $days = $users->where('day_id', '1');

        $days = json_decode($days);

        $days = json_decode($days[0]->subject);

        $user = ['signin' => 'Boss', 'signin_role' => 'นักเรียน'];
        return view('home', compact('user', 'days'));
    }
}
