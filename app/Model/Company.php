<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';
    public $timestamps = false;
    protected $fillable=['code_id','name','category','main_business','corporation','corporation_contact',
        'corporation_id','household','graduated_school','graduated_time','graduated_degree','graduated_time','graduated_degree','company_admin_name','company_admin_contact'];
}
