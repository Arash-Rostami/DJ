<?php


function getAudio($row): bool
{
    return $row->audio_address !== NULL;
}

function switchLanguages($x, $y)
{
    $language = App('App\Utility\Language');
    return $language->localizeLanguage($x, $y);
}

function switchDirection($locale)
{
    $direction = App('App\Utility\Direction');
    return $direction->changeToRtl($locale);
}

function switchFont($locale)
{
    $font = App('App\Utility\Font');
    return $font->changeToYekan($locale);
}

function switchGeo()
{
    $location = App('App\Utility\Geo');
    return $location->findGeo();
}

function showErrorReturn(): \Illuminate\Http\RedirectResponse
{
    session()->flash('error');

    return back();
}

function showSuccessReturn()
{
    session()->flash('modify');

    return redirect(request()->header('Referer'));
}

function showAddReturn(): \Illuminate\Http\RedirectResponse
{
    session()->flash('add');

    return back();
}

function showDeleteReturn()
{
    session()->flash('delete');

    return redirect(request()->header('Referer'));
}

function showMessageReturn()
{
    session()->flash('message');

    return redirect(request()->header('Referer'));
}

function paginate()
{
    return App\Question::orderBy('id', 'desc')->paginate(1);
}

function isLastPost($id)
{
    return App\Post::latest()->first()->id == $id;
}





