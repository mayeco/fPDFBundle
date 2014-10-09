<?php

namespace Mayeco\fPDFBundle\Factory;


class fPDFFactory
{

    public static function get() {

        return new \FPDF();
    }
    
}