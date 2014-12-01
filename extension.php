<?php

namespace ReplaceString;

class Extension extends \Bolt\BaseExtension
{
    function info()
    {

        $data = array(
            'name' => "Replace String",
            'description' => "A filter to replace strings within other strings using <code>str_replace</code>. See the README for usage examples.",
            'author' => "Max Glenister",
            'link' => "http://omgmog.net",
            'version' => "0.1",
            'required_bolt_version' => "",
            'highest_bolt_version' => "",
            'type' => "Twig Filter",
            'first_releasedate' => "",
            'latest_releasedate' => "",
            'dependencies' => "",
            'priority' => 10,
        );

        return $data;

    }
    function initialize()
    {
        $this->addTwigFilter('replacestring', 'replaceString');

    }

    function replaceString($string, $var1, $var2)
    {
        $string = str_replace($var1, $var2, $string);
        return new \Twig_Markup($string, 'UTF-8');
    }
}
