<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home', [
            'questions' => Question::query()->latest()->get(),
        ]);
    }
}
