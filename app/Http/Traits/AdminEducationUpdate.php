<?php
/**
 * Created by PhpStorm.
 * User: Arash Rostami
 * Date: 2/28/2022
 * Time: 7:45 PM
 */

namespace App\Http\Traits;


use App\Education;

trait AdminEducationUpdate
{

    public function updateDate()
    {
        Education::updateEducation($this->course['edit'], 'text_date',
            $this->education['text_date']);
    }

    public function updateDateFarsi()
    {
        Education::updateEducation($this->course['edit'], 'text_date_f',
            $this->education['text_date_f']);
    }

    public function updatePlace()
    {
        Education::updateEducation($this->course['edit'], 'text_place',
            $this->education['text_place']);
    }

    public function updatePlaceFarsi()
    {
        Education::updateEducation($this->course['edit'], 'text_place_f',
            $this->education['text_place_f']);
    }

    public function updateCourse()
    {
        Education::updateEducation($this->course['edit'], 'text_course',
            $this->education['text_course']);
    }

    public function updateCourseFarsi()
    {
        Education::updateEducation($this->course['edit'], 'text_course_f',
            $this->education['text_course_f']);
    }
}
