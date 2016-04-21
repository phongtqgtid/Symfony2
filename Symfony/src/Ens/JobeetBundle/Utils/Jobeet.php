<?php
/**
 * Created by PhpStorm.
 * User: quatt_000
 * Date: 4/5/16
 * Time: 1:59 PM
 */

namespace Ens\JobeetBundle\Utils;


class Jobeet {

    static public function slugify($text)
    {
        // replace all non letters or digits by -
        $text = preg_replace('/\W+/', '-', $text);

        // trim and lowercase
        $text = strtolower(trim($text, '-'));

        return $text;
    }

} 