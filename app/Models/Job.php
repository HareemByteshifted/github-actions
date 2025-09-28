<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Job extends Model {
   use HasFactory;
   protected $table = "job_listing_database";

   protected $fillable = ['title', 'salary', 'employer_id'];

   public function employer() {
      return $this -> belongsTo(Employer::class);
   }
}