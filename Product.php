<?php class Product {
    public $id;
    public $volume;

    function __construct($id, $volume)
    {
        $this->setId($id);
        $this->setVolume($volume);
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getVolume()
    {
        return $this->volume;
    }


    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

} // end of Product class
?>