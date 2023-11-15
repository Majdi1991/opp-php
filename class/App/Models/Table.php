<?php
namespace App\Models;

 abstract class Table {
    protected ?int $id = null;

    public function __construct(?int $id = null)
    {
          $this->id =$id;
    }
    
       public function getid(): ?int
       {
          return $this->id;
       } 

        public function setid(?int $id): void
        {
            $this->id = $id;
        }
    
 }