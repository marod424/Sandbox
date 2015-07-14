<?php

class ProjectRepository
{
    protected $projects = array(
        1 => array(
            'id' => 1,
            'name' => 'Screencasts',
            'collaborators' => array('me'),
        ),        
        2 => array(
            'id' => 2,
            'name' => 'Client Y New App',
            'collaborators' => array('me', 'Client Y'),
            'archivedAt' => '2016-01-01 01:00:00',
        ),        
        3 => array(
            'id' => 3,
            'name' => 'Client X Site Overhaul',
            'collaborators' => array('me', 'Client X'),
            'archivedAt' => '2015-01-01 01:00:00'
        )
    );   

    public function all()
    {
        $_this = $this;

        return array_map(function($project) use($_this) {
            return $_this->factory($project);
        }, $this->projects);
    }

    public function saveAll($projects)
    {
        foreach ($projects as $project) {
            // Persist
        }
    }

    public function factory($data)
    {
        // if (isset($data['archivedAt']) && $data['archivedAt']) {
        //     $date = DateTime::createFromFormat('Y-m-d H:i:s', $data['archivedAt']);
        //     if ($date <= new DateTime('now')) {
        //         return new ArchivedProject($data);
        //     }
        // }
        
        // return new OpenProject($data);
        return new Project($data);
    }
}