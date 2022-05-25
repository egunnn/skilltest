<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table = "provinsi";
    protected $PrimaryKey = "id";
    protected $allowedFields = ['key', 'value', 'file'];
}
