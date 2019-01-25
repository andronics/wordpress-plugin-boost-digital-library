<?php

class DigitalLibraryAlbum extends BoostPost {

    public const NAME = "Boost Digital Library Album";
    
    public $post_singular = "album";
    public $post_plural = "albums";
    public $post_type = 'album';

}

new DigitalLibraryAlbum();

?>