<?php

namespace Mayeco\fPDFBundle\Factory;


class fPDFFactory
{

    public static function get() {

        return new \FPDF();
    }

    public static function getHtml() {

        return new \FPDFHTML();
    }
    
}
