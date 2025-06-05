<?php
/**
 * Created by PhpStorm.
 * User: Arash Rostami
 * Date: 2/28/2022
 * Time: 5:49 PM
 */

namespace App\Http\Traits;


use App\Education;

trait AdminEducation
{

    use AdminEducationUpdate;

    public function loadCourse()
    {
        return ($this->course['edit'] == 0)
            ? null
            : $this->showEducation = true &&
                $this->education = Education::find($this->course['edit'])->toArray();
    }

    public function changeEducationTitle()
    {
        Education::updateTitle($this->edu_title['title_edu'], $this->edu_title['title_edu_f']);

        return showSuccessReturn();
    }

    public function addEducationText()
    {
        Education::create([
            'text_date' => $this->course['time'], 'text_date_f' => $this->course['time_f'],
            'text_place' => $this->course['place'], 'text_place_f' => $this->course['place_f'],
            'text_course' => $this->course['text'], 'text_course_f' => $this->course['text_f'],
        ]);
        return showSuccessReturn();
    }

    public function editEducationText()
    {
        $this->updateDate();

        $this->updateDateFarsi();

        $this->updatePlace();

        $this->updatePlaceFarsi();

        $this->updateCourse();

        $this->updateCourseFarsi();

        $this->reset('education', 'course');

        return showSuccessReturn();

    }

    public function deleteCourse()
    {
        Education::destroy($this->course['edit']);

        $this->reset('course');

        return showDeleteReturn();
    }

    public function changeProfessor()
    {
        Education::find(1)->update([
            'title_pro' => $this->edu_title['title_pro'],
            'title_pro_f' => $this->edu_title['title_pro_f'],
            'text_pro' => $this->edu_title['text_pro'],
            'text_pro_f' => $this->edu_title['text_pro_f'],
        ]);

        return showSuccessReturn();
    }
}
