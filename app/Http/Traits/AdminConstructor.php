<?php


namespace App\Http\Traits;


use App\Contact;
use App\Education;
use App\Homepage;
use App\Me;
use App\Occupation;
use App\Post;
use App\Project;
use App\Question;
use App\Slider;


trait AdminConstructor
{

    public $homepage, $me, $images, $image, $education, $edu_title, $course, $showEducation,
        $occupation, $ocu_title, $experience, $showOccupation, $proj_title, $projects, $piece,
        $showProject, $blog_title, $posts, $post, $message, $questions, $contacts, $person,
        $showContact, $attachment;

    protected $rules = [
        // rules related to Education part
        'course.text' => 'string', 'course.text_f' => 'string', 'course.time' => 'string',
        'course.time_f' => 'string', 'course.place' => 'string', 'course.place_f' => 'string',
        'course.edit' => 'integer',
        // rules related to Occupation part
        'experience.text' => 'string', 'experience.text_f' => 'string', 'experience.time' => 'string',
        'experience.time_f' => 'string', 'experience.place' => 'string', 'experience.place_f' => 'string',
        'experience.edit' => 'integer',
        // rules related to Projects part
        'piece.text' => 'string', 'piece.text_f' => 'string', 'piece.description' => 'string',
        'piece.description_f' => 'string', 'piece.time' => 'string', 'piece.time_f' => 'string',
        'piece.edit' => 'integer',
        // rules related to Blog part
        'post.title' => 'string', 'post.text' => 'string', 'post.title_f' => 'string',
        'post.text_f' => 'string', 'post.pic' => 'string', 'post.caption' => 'string',
    ];

    public function __construct()
    {
        $this->homepage = Homepage::find(1)->toArray();
        $this->me = Me::find(1)->toArray();
        $this->images = Slider::all();
        $this->edu_title = Education::find(1)->toArray();
        $this->education = Education::all();
        $this->showEducation = false;
        $this->showOccupation = false;
        $this->ocu_title = Occupation::find(1)->toArray();
        $this->occupation = Occupation::all();
        $this->proj_title = Project::find(1)->toArray();
        $this->projects = Project::all();
        $this->showProject = false;
        $this->posts = Post::all();
        $this->blog_title = Post::find(1)->toArray();
        $this->questions = Question::orderBy('id', 'desc')->get();
        $this->showContact = false;
        $this->contacts = Contact::orderBy('name', 'asc')
            ->get()->unique('email');
    }
}
