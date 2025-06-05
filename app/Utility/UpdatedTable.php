<?php


namespace App\Utility;


use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UpdatedTable
{

    public $table;


    public function __construct()
    {
        // correspond all id of modals loaded in admin panel to
        // the specific tables; it is done through searching the
        // key words of id and matching to names of tables
        $this->table = [
            'Home' => 'homepage',
            'About' => 'me', 'mission' => 'me',
            'Education' => 'education',
            'Professor' => 'education',
            'Occupation' => 'occupation',
            'Project' => 'projects',
            'Blog' => 'posts', 'Post' => 'posts',
            'Message' => 'questions'
        ];
    }

    // load the requested table
    public function getTable($modal)
    {
        foreach ($this->table as $key => $value) {
            if (strpos($modal, $key) !== false)
                return $value;
        }
    }

    // show the last item of table
    public function getLastItem($modal)
    {
        return DB::table($this->getTable($modal))->latest()->first();
    }

    // get the column of the table relative to time of update
    public function getTime($modal)
    {
        return $this->getLastItem($modal)->updated_at;
    }

    // convert time according to region
    public function showTime($modal): string
    {
        return Carbon::parse($this->getTime($modal))
            ->setTimezone('Asia/Tehran')->format("Y/m/d H:i:s");
    }
}
