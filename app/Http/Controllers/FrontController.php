<?php

namespace App\Http\Controllers;

use App\{Education, Homepage, Me, Occupation, Post, Project, Question, Slider};
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{

    public function indexLingo($locale)
    {
        Session::put('locale', $locale);

        return redirect()->back();
    }

    public function index()
    {
        return view('homepage', ['homepage' => Homepage::all()]);
    }

    public function indexMe()
    {
        return view('aboutme', ['me' => Me::all(), 'slider' => Slider::all()]);
    }

    public function indexMission()
    {
        return view('mission', ['me' => Me::all()]);
    }

    public function indexEducation()
    {
        return view('education', ['education' => Education::all()]);
    }

    public function indexOccupation()
    {
        return view('occupation', ['occupation' => Occupation::all()]);
    }

    public function indexProject()
    {
        return view('projects',
            ['project' => Project::find(1), 'projects' => Project::simplepaginate(7)]);
    }

    public function indexBlog()
    {
        return view('blog',
            ['blog' => Post::find(1), 'posts' => Post::orderBy('id', 'desc')->paginate(3),]);
    }

    public function create()
    {
        return view('contact');
    }

    public function store(ContactRequest $request)
    {
        Question::makeQuestion($request);

        return back();
    }
}
