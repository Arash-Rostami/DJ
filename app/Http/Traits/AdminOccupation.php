<?php


namespace App\Http\Traits;


use App\Occupation;

trait AdminOccupation
{

    use AdminOccupationUpdate;

    public function loadExperience()
    {
        return ($this->experience['edit'] == 0)
            ? null
            : $this->showOccupation = true &&
                $this->occupation = Occupation::find($this->experience['edit'])->toArray();
    }

    public function changeOccupationTitle()
    {
        Occupation::updateTitle($this->ocu_title['title_ocu'], $this->ocu_title['title_ocu_f']);

        return showSuccessReturn();
    }

    public function addOccupationText()
    {
        Occupation::create([
            'text_date' => $this->experience['time'], 'text_date_f' => $this->experience['time_f'],
            'text_place' => $this->experience['place'], 'text_place_f' => $this->experience['place_f'],
            'text_job' => $this->experience['text'], 'text_job_f' => $this->experience['text_f'],
        ]);
        return showSuccessReturn();
    }

    public function editOccupationText()
    {
        $this->updateExperienceDate();

        $this->updateExperienceDateFarsi();

        $this->updateExperiencePlace();

        $this->updateExperiencePlaceFarsi();

        $this->updateExperience();

        $this->updateExperienceFarsi();

        $this->reset('occupation', 'experience');

        return showSuccessReturn();

    }

    public function deleteExperience()
    {
        Occupation::destroy($this->experience['edit']);

        $this->reset('experience');

        return showDeleteReturn();
    }
}
