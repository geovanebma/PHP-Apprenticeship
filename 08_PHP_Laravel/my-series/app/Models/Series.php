<?php
  namespace App\Models;

  use Illuminate\Database\Eloquent\Model;

  class Series extends Model
  {
    protected $table = "series";
    protected $fillable = ['name', 'watched'];

    public function seasons(){
      return $this->hasMany(Season::class);
    }
  }
?>