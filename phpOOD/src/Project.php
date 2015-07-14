<?php

// class ArchivedProject extends Project 
// {
//     public function setName($name) { return false; }
//     public function addCollaborator($collab) { return false; }
//     public function isArchived() { return true; }
// }

// class OpenProject extends Project
// {
//     public function isArchived() { return false; }
// }

class Project 
// abstract class Project 
{
    protected $id;    
    protected $name;
    protected $archivedAt;
    protected $collaborators = array();

    public function __construct($options)
    {
        isset($options['id']) && $this->id = $options['id'];   
        isset($options['name']) && $this->name = $options['name'];
        isset($options['collaborators']) && $this->addCollaborators = $options['collaborators'];
        // isset($options['collaborators']) && $this->collaborators = $options['collaborators'];
        isset($options['archivedAt']) && $this->archivedAt == DateTime::createFromFormat('Y-m-d H:i:s', $options['archivedAt']);
    }

    public function setName($name)
    {
        if (! $this->isArchived()) {
            $this->name = $name;
        }

        // $this->name = $name;
    }

    public function addCollaborators($collabs)
    {
        foreach ($collabs as $collab) {
            $this->addCollaborator($collab);
        }
    }

    public function addCollaborator($collab)
    {
        if (! $this->isArchived()) {
            $this->collaborators[] = $collab;
        }
        
        // $this->collaborators[] = $collab;
    }

    public function isOpen()
    {
        return ! $this->isArchived();
    }

    public function isArchived()
    {
        if ($this->archivedAt) {
            return $this->archivedAt <= new DateTime('now');
        }
        return false;
    }

    public function archive(DateTime $date = null) 
    {
        $this->archivedAt = $date ?: new DateTime('now');
    }

    public function reopen()
    {
        $this->archivedAt = null;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getStatus()
    {
        return $this->isOpen() ? 'Open' : 'Archived';
    }

    public function getCollaborators()
    {
        return join(', ', $this->collaborators);
    }
}