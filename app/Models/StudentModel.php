<?php namespace App\Models;
use CodeIgniter\Model;
class StudentModel extends Model
{
    protected $table = 'signup';
    protected $primaryKey='Id';
    protected $allowedFields = [

           'Name','email','phone','course','cv'



    ];
}