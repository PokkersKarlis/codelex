<?php

class Dog
{
    private string $name;
    private string $sex;
    private $mother;
    private $father;

    public function __construct(string $name, string $sex, $mother = null, $father = null)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function fathersName(): string
    {
        if ($this->father !== null) {
            return $this->father;
        }
        return 'Unknown';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSex(): string
    {
        return $this->sex;
    }

    /**
     * @return mixed|null
     */
    public function getMother()
    {
        return $this->mother;
    }

    public function HasSameMotherAs(Dog $dog): bool
    {
        if ($this->mother === $dog->mother) {
            return true;
        } else {
            return false;
        }
    }
}
