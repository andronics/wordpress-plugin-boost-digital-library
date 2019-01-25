<?php

class BoostDigitalLibraryGenre extends BoostPost {

    public const NAME = "Boost Digital Library Genre";
    
    public $post_singular = "genre";
    public $post_plural = "genres";
    public $post_type = 'genre';

}

new BoostDigitalLibraryGenre();

?>