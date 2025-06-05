<?php


namespace App\Http\Traits;


use App\Occupation;

trait AdminOccupationUpdate
{
    public function updateExperienceDate()
    {
        Occupation::updateOccupation($this->experience['edit'], 'text_date',
            $this->occupation['text_date']);
    }

    public function updateExperienceDateFarsi()
    {
        Occupation::updateOccupation($this->experience['edit'], 'text_date_f',
            $this->occupation['text_date_f']);
    }

    public function updateExperiencePlace()
    {
        Occupation::updateOccupation($this->experience['edit'], 'text_place',
            $this->occupation['text_place']);
    }

    public function updateExperiencePlaceFarsi()
    {
        Occupation::updateOccupation($this->experience['edit'], 'text_place_f',
            $this->occupation['text_place_f']);
    }

    public function updateExperience()
    {
        Occupation::updateOccupation($this->experience['edit'], 'text_job',
            $this->occupation['text_job']);
    }

    public function updateExperienceFarsi()
    {
        Occupation::updateOccupation($this->experience['edit'], 'text_job_f',
            $this->occupation['text_job_f']);
    }

}
