<?php


namespace App\Http\Traits;


use App\Project;

trait AdminProjectUpdate
{

    public function updateEnglishText()
    {
        Project::updateProject($this->piece['edit'], 'title_project',
            $this->projects['title_project']);
    }

    public function updateEnglishDescription()
    {
        Project::updateProject($this->piece['edit'], 'text_project',
            $this->projects['text_project'] ?? Null);
    }

    public function updateFarsiText()
    {
        Project::updateProject($this->piece['edit'], 'title_project_f',
            $this->projects['title_project_f']);
    }

    public function updateFarsiDescription()
    {
        Project::updateProject($this->piece['edit'], 'text_project_f',
            $this->projects['text_project_f'] ?? Null);
    }

    public function updateEnglishDate()
    {
        Project::updateProject($this->piece['edit'], 'date_project',
            $this->projects['date_project']);
    }

    public function updateFarsiDate()
    {
        Project::updateProject($this->piece['edit'], 'date_project_f',
            $this->projects['date_project']);
    }
}
