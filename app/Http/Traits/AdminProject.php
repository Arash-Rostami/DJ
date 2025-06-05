<?php


namespace App\Http\Traits;


use App\Project;
use Illuminate\Support\Facades\File;

trait AdminProject
{

    use AdminAudio, AdminProjectUpdate;

    public function loadProject()
    {
        return ($this->piece['edit'] == 0)
            ? null
            : $this->showProject = true &&
                $this->projects = Project::find($this->piece['edit'])->toArray();
    }

    public function changeProjectTitle()
    {
        Project::updateTitle($this->proj_title['title_project'], $this->proj_title['title_project_f']);

        return showSuccessReturn();
    }

    public function editPiece()
    {
        $this->updateEnglishText();

        $this->updateEnglishDescription();

        $this->updateFarsiText();

        $this->updateFarsiDescription();

        $this->updateEnglishDate();

        $this->updateFarsiDate();

        $this->reset('projects', 'piece');

        return showSuccessReturn();
    }

    public function deleteProject()
    {
        File::delete(Project::find($this->piece['edit'])->audio_address);

        Project::destroy($this->piece['edit']);

        $this->reset('piece');

        return showDeleteReturn();
    }
}
