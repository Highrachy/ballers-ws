<?php

class Page
{

    #-- Pages
    const HOME = 'Home';
    const ABOUT_US = 'About Us';
    const OUR_SERVICES = 'Our Services';
    const FOR_SALE = 'For Sale';
    const GALLERY = 'Gallery';
    const CONTACT_US = 'Contact Us';

    public static function is_active($page_name="home", $word = "active")
    {
        global $title;

        if ($title == static::get_title($page_name)) {
            echo $word;
        }
    }
    /**
     * get_title
     */
    public static function get_title($page_name="home")
    {
        return URL::readable($page_name);
    }
}
