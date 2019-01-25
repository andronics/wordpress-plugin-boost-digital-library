<?php

abstract class DigitalLibraryPost {

    protected $post_filter;
    protected $updated_message_filter;
    
    protected $type = 'abstract';

    protected $singular;
    protected $plural;

    protected $hierarchical = true;
    protected $icon = "dashicons-groups";
    protected $menu = "library";
    protected $position = 60;

    protected $meta = array();

    protected $support= array();
    protected $unsupport = array();

    protected $taxonomy = array();

    public function __construct() {
    
        $this->apply_post_hooks();
        $this->apply_post_filter();

        $this->register();

    }

    private function apply_post_filter() {

        $defaults = array( "title", "thumbnail","custom-fields");
        $supports = array_diff(
            array_merge(
                $defaults, $this->support
            ),
            $this->unsupport
        );


        $this->post_filter = apply_filters(
            "andronics_" . $this->plural . "_posts",
            array(
                "labels"                     => $this->labels(),
                "has_archive"				 => true,
                "public"                     => true,
                "publicly_queryable"         => true,
                "show_in_menu"               => $this->menu,
                "show_in_nav_menus"          => true,
                "show_in_rest"               => true,
                "show_tag_cloud"			 => true,
                "show_ui"                    => true,
                "query_var"                  => true,
                "register_meta_box_cb"       => array($this, "register_meta_boxes"),
                "rewrite"                    => array('slug' => $this->plural),
                "capability_type"            => "post",
                "hierarchical"               => $this->hierarchical,
                "menu_position"              => $this->position,
                "menu_icon"                  => $this->icon,
                "supports"                   => $supports,
                "taxonomies"				 => array(  )
            )
        );

    }

    private function apply_post_hooks() {
        add_filter( 'post_updated_messages', array( $this, 'apply_updated_messages_filter' ) );
    }

    public function apply_updated_messages_filter($messages) {

        $messages[$this->type] = $this->messages();
        $this->updated_message_filter = apply_filters("andronics_" . $this->type . "_update_messages", $messages);
    
    }

    private function labels() {

        return array(
			"name"                          => ucfirst($this->plural),
			"post_singular_name"            => ucfirst($this->singular),
			"add_new"                       => "Add New",
			"add_new_item"                  => "Add New " . ucfirst($this->singular),
			"edit_item"                     => "Edit " . ucfirst($this->singular),
			"new_item"                      => "New " . ucfirst($this->singular),
			"view_item"                     => "View " . ucfirst($this->singular),
			"search_items"                  => "Search " . ucfirst($this->plural),
			"not_found"                     => "No " . $this->singular . " found",
			"not_found_in_trash"            => "No " . $this->singular . " found in Trash",
			"all_items"                     => ucfirst($this->plural),
			"menu_name"                     => ucfirst($this->plural)
		);

    }


    private function messages() {

        global $post;

        return array(
			0  => "", 
			1  => sprintf(ucfirst($this->singular)." updated. <a href='%s'>View " . ucfirst($this->singular) . "</a>", esc_url( get_permalink( $post->ID ) ) ),
			2  => "Custom field updated.",
			3  => "Custom field deleted.",
			4  => ucfirst($this->singular) . " updated.",
			5  => isset( $_GET['revision'] ) ? sprintf( ucfirst($this->singular) . " restored to revision from %s", wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
			6  => sprintf(ucfirst($this->singular) . " published. <a href='%s'>View " . ucfirst($this->singular) . "</a>", esc_url( get_permalink( $post->ID ) ) ),
			7  => ucfirst($this->singular) . " saved.",
			8  => sprintf(ucfirst($this->singular) . " submitted. <a target='_blank' href='%s'>Preview " . ucfirst($this->singular) . "</a>", esc_url( add_query_arg( 'preview', 'true', get_permalink( $post->ID ) ) ) ),
			9  => sprintf(ucfirst($this->singular) . " scheduled for: <strong>%1$s</strong>. <a target='_blank' href='%2$s'>Preview " . ucfirst($this->singular) . "</a>",  strtotime( $post->post_date ), esc_url( get_permalink( $post->ID ) ) ),
			10 => sprintf(ucfirst($this->singular) . " draft updated. <a target='_blank' href='%s'>Preview " . ucfirst($this->singular) . "</a>", esc_url( add_query_arg( 'preview', 'true', get_permalink( $post->ID ) ) ) ),
		);

    }

    public function register() {
        register_post_type($this->type, $this->post_filter);
    }

    public function register_meta_boxes() {

    }

}

?>