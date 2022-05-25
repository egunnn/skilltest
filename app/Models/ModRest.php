<?php

namespace App\Models;

use CodeIgniter\Model;

class ModRest extends Model
{
    protected $table = "provinsi";
    protected $PrimaryKey = "id";
    protected $allowedFields = ['key', 'value', 'file'];

    protected $validationRules = [
        'key' => 'required',
        'value' => 'required',
        'file' => 'required' //Ext_in
    ];
    protected $validationMessages = [
        'key' => [
            'required' => 'key tidak boleh kosong'
        ],
        'value' => [
            'required' => 'value tidak boleh kosong'
        ],
        'file' => [
            'required' => 'file tidak boleh kosong'
        ]
    ];
}
