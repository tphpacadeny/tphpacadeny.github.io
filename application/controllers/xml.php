<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Xml extends Controller_Base {

    public $__load_default = true;

    public function index() {

        $xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?>
<movies>
    <movie>
        <title>PHP: Behind the Parser</title>
        <characters>
            <character>
                <name>Ms. Coder</name>
                <actor>Onlivia Actora</actor>
            </character>
            <character>
                <name>Mr. Coder</name>
                <actor>El Act&#211;r</actor>
            </character>
        </characters>
        <plot>
            So, this language. It's like, a programming language. Or is it a
            scripting language? All is revealed in this thrilling horror spoof
            of a documentary.
        </plot>
        <great-lines>
            <line>PHP solves all my web problems</line>
        </great-lines>
        <rating type="thumbs">7</rating>
        <rating type="stars">5</rating>
    </movie>
    <movie>
        <title>Matrix</title>
        <characters>
            <character>
                <name>Ms. Coder</name>
                <actor>Onlivia Actora</actor>
            </character>
            <character>
                <name>Mr. Coder</name>
                <actor>El Act&#211;r</actor>
            </character>
        </characters>
        <plot>
            So, this language. It's like, a programming language. Or is it a
            scripting language? All is revealed in this thrilling horror spoof
            of a documentary.
        </plot>
        <great-lines>
            <line>PHP solves all my web problems</line>
        </great-lines>
        <rating type="thumbs">7</rating>
        <rating type="stars">5</rating>
    </movie>
</movies>
XML;

        $movies = new SimpleXMLElement($xmlstr);

        echo $movies->movie[1]->title;

    }
}