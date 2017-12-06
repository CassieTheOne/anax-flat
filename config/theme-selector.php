<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",

    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                "css/base.min.css"
            ]
        ],

        "default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "",
            "stylesheets" => [
                "css/style.min.css"
            ]
        ],

        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Very light theme, white, black and nuances of grey",
            "class"      => "light",
            "stylesheets" => ["css/light.min.css"]
        ],

        "color"     => [
            "title"      => "Enhance the light theme by adding a tiny bit of color",
            "class"      => "color",
            "stylesheets" => ["css/color.min.css"]
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "dark",
            "stylesheets" => ["css/dark.min.css"]
        ],

        "colorful"  => [
            "title"      => "Make a very colorful theme",
            "class"      => "colorful",
            "stylesheets" => ["css/colorful.min.css"]
        ],

        "typography" => [
            "title"      => "A theme where the typography really stands out",
            "class"      => "light",
            "stylesheets" => ["css/typography.min.css"]
        ],

        "separator2" => "------------------------------------------------",

        "skyrim"       => [
            "title"      => "tema med bild som bakgrund",
            "class"      => "design",
            "stylesheets" => ["css/skyrim.min.css"]
        ],

        "texture"       => [
            "title"      => "tema med textur",
            "class"      => "design",
            "stylesheets" => ["css/texture.min.css"]
        ],

        "multicolor"       => [
            "title"      => "tema med färg och borders",
            "class"      => "design",
            "stylesheets" => ["css/multicolor.min.css"]
        ],

        "separator3" => "------------------------------------------------",

        "contrast"       => [
            "title"      => "Ett team med kontraster",
            "class"      => "design",
            "stylesheets" => ["css/contrast.min.css"]
        ],

        "simplicity"       => [
            "title"      => "Ett team med en simpel ton",
            "class"      => "design",
            "stylesheets" => ["css/simplicity.min.css"]
        ],
    ]
];
