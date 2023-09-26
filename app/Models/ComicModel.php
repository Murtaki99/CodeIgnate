<?php

namespace App\Models;

use CodeIgniter\Model;

class ComicModel extends Model
{
  protected $table = 'comics';
  protected $useTimestamps = true;

  protected $allowedFields = ['title','slug','penulis','penerbit','cover'];
 
  public function getComic( $slug = false){
    if($slug == false){
        return $this->findAll();
    }
    return $this->where(['slug' =>$slug])->first();
  }
  
}
