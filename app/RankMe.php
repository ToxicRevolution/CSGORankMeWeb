<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RankMe extends Model
{
    protected $table;
    
    protected $hidden = ["lastip"];
    
    public function __construct(array $attributes = [])
    {
        $this->table = config("rankme.table");
        parent::__construct($attributes);
    }
}
