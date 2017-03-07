<?php

class FileUpload{

    protected $path;

    public function save($callback)
    {
        //Fer codi per guardar fitxer
        $this->path = 'temp/ewnijf3urih29p8ripiwernqw';

        //I ara que?
        $callback($this->path);


    }

}

class Profile{

    public function updateProfile()
    {
        $f = new FileUpload();

        $f->save(function (){
            echo "El fitxer s'ha guardat de puta mare\n";
        });

    }

}

$profile = new Profile();
$profile->updateProfile();