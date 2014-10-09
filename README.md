FPDF Bundle
==========

Easy wrapper Bundle for http://www.fpdf.org version 1.7 (2011-06-18) library.

## Step 1

Install the bundle using composer

    "mayeco/fpdf-bundle": "1.0.*@dev"

## Step 2

Enable the Bundle in your Kernel

    new Mayeco\fPDFBundle\fPDFBundle()

## Step 3

Use the FPDF library in your controller

    $pdf = $this->get("fpdf");
    // $pdf is a \FPDF v1.7 (2011-06-18) object
