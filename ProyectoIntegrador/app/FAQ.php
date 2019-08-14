<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    public $table = "faq";
    public $primaryKey = "idFAQ";
    public $timestamps = false;
    public $guarded = [];

    public function getQuestion(){
      return $this->Questions;
    }

    public function getAnswer(){
      return $this->Answers;
    }
}
