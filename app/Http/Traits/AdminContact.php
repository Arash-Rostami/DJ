<?php


namespace App\Http\Traits;


use App\Contact;
use App\Question;
use Livewire\WithFileUploads;


trait AdminContact
{
    use AdminMessage, WithFileUploads;

    public function loadContact()
    {
        return ($this->person['id'] == 0)
            ? null
            : $this->showContact = true &&
                $this->message = Contact::find($this->person['id'])->toArray();
    }

    public function fireEmail()
    {
        $this->sendEmailMessage($this->saveMessage());

        $this->deleteAttachment();

        return showMessageReturn();
    }

    public function deleteMessage()
    {
        Question::find($this->message['delete'])->delete();

        return showDeleteReturn();
    }
}
