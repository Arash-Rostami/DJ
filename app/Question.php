<?php

namespace App;

use App\Http\Requests\ContactRequest;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $fillable = [
        'name', 'email', 'phone', 'message', 'type'
    ];

    public static function makeQuestion(ContactRequest $request): void
    {
        Question::create($request->all());

        session()->flash('done');
    }
}
