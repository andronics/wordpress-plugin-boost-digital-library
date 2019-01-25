<?php

class BoostDigitalLibraryComposer extends BoostPost {

    public const NAME = "Boost Digital Library Composer";
    
    public $post_singular = "composer";
    public $post_plural = "composers";
    public $post_type = 'composer';

}

new BoostDigitalLibraryComposer();

?>