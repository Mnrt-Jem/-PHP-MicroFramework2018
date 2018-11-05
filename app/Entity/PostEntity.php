<?php
namespace App\Entity;

use Core\Entity\Entity;

class PostEntity extends Entity{

    public function getUrl(){
        return $this->id .'-'. $this->slug;
    }

    public function getExtrait(){
        $html = '<p>' . substr($this->contenu, 0, 300) . '</p>';
        return $html;
    }

    public function getSlug()
    {
        return $this->slug;
    }

}