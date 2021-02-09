<?php 

class Shows extends Database {

    private $id;
    private $title;
    private $performer;
    private $date;
    private $showTypesId;
    private $firstGenreId;
    private $secondGenreId;
    private $duration;
    private $startTime;
    

    public function __construct()
    {
        parent::__construct();
    } 

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of performer
     */ 
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Set the value of performer
     *
     * @return  self
     */ 
    public function setPerformer($performer)
    {
        $this->performer = $performer;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of showTypeqId
     */ 
    public function getShowTypeqId()
    {
        return $this->showTypeqId;
    }

    /**
     * Set the value of showTypeqId
     *
     * @return  self
     */ 
    public function setShowTypeqId($showTypeqId)
    {
        $this->showTypeqId = $showTypeqId;

        return $this;
    }

    /**
     * Get the value of firstGenreId
     */ 
    public function getFirstGenreId()
    {
        return $this->firstGenreId;
    }

    /**
     * Set the value of firstGenreId
     *
     * @return  self
     */ 
    public function setFirstGenreId($firstGenreId)
    {
        $this->firstGenreId = $firstGenreId;

        return $this;
    }

    /**
     * Get the value of secondGenreId
     */ 
    public function getSecondGenreId()
    {
        return $this->secondGenreId;
    }

    /**
     * Set the value of secondGenreId
     *
     * @return  self
     */ 
    public function setSecondGenreId($secondGenreId)
    {
        $this->secondGenreId = $secondGenreId;

        return $this;
    }

    /**
     * Get the value of duration
     */ 
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set the value of duration
     *
     * @return  self
     */ 
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get the value of startTime
     */ 
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set the value of startTime
     *
     * @return  self
     */ 
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    public function getShows() {
        $shows = "SELECT `shows`.`id`, `shows`.`title`, `shows`.`performer`, `shows`.`date`, `shows`.`startTime`
        FROM shows 
        ORDER BY `title`";
         $getShows = parent::getDb()->prepare($shows);
         $getShows->execute();
         $resultsgetShows = $getShows->fetchAll(PDO::FETCH_ASSOC);
         if(!empty($resultsgetShows)) {
             return $resultsgetShows;
         } else {
             return false;
    }
}
}