<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VacLink extends Model
{
    protected $connection = "mysql";
    
    protected $table = "vac_links";
}
