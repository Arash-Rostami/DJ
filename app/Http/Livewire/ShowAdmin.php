<?php

namespace App\Http\Livewire;

use App\Http\Traits\AdminAboutMe;
use App\Http\Traits\AdminBlog;
use App\Http\Traits\AdminConstructor;
use App\Http\Traits\AdminContact;
use App\Http\Traits\AdminEducation;
use App\Http\Traits\AdminGallery;
use App\Http\Traits\AdminHome;
use App\Http\Traits\AdminOccupation;
use App\Http\Traits\AdminProject;
use App\Http\Traits\AdminUpdateTime;
use Livewire\Component;

class ShowAdmin extends Component
{
    use AdminConstructor, AdminHome, AdminAboutMe, AdminGallery, AdminEducation,
        AdminOccupation, AdminProject, AdminBlog, AdminContact, AdminUpdateTime;

    protected $listeners =
        [
            'loadCourse' => 'loadCourse', 'loadExperience' => 'loadExperience',
            'loadProject' => 'loadProject', 'fireEmail' => 'fireEmail',
            'deleteImage' => 'deleteImage', 'deleteCourse' => 'deleteCourse',
            'deleteExperience' => 'deleteExperience', 'deleteProject' => 'deleteProject',
            'deletePost' => 'deletePost', 'deleteMessage' => 'deleteMessage',
        ];

    public function render()
    {
        return view('livewire.show-admin');
    }
}
