@if( session()->has('modify') )
    {{-- successful modification--}}
    <x-modal message="Thank you. Your data has been modified."></x-modal>
@elseif( session()->has('delete'))
    {{-- successful deletion--}}
    <x-modal message="Thank you. Your data has been deleted."></x-modal>
@elseif( session()->has('add'))
    {{-- successful deletion--}}
    <x-modal message="Thank you. Your data has been added."></x-modal>
@elseif( session()->has('error'))
    {{-- successful deletion--}}
    <x-modal message="Oops! Check again, and if it is not still working, contact Mr. Rostami."></x-modal>
@elseif( session()->has('message'))
    {{-- successful email delivery--}}
    <x-modal message="Your message has been successfully delivered."></x-modal>
@endif
