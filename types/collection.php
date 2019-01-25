<?php

class BoostDigitalLibraryCollection extends BoostPost {

    public const NAME = "Boost Digital Library Collection";
    
    public $post_singular = "collection";
    public $post_plural = "collections";
    public $post_type = 'collection';

}

new BoostDigitalLibraryCollection();

?>