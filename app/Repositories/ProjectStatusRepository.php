<?php namespace App\Repositories;

use App\ProjectStatus;

class ProjectStatusRepository extends BaseRepository
{
    private $projectStatus;

    public function __construct(){
        $this->projectStatus = new ProjectStatus();
    }
}