<?php
// src/Acme/TaskBundle/Entity/Task.php
namespace Acme\AuthBundle\Entity;

class Task
{
	protected $id;
	
    protected $name;

    protected $pwd;

    

  
    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    public function getPwd()
    {
        return $this->pwd;
    }
}
