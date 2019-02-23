# e-certificates-generator
A simple PDF e-certificates generator made with PHP where people can generate and download their e-certificates.

## Installation and configuration
The installation is super easy. You just need to checkout all files to your webserver directory. 

### PDF template
Replace dummy 'certificate.pdf' with the PDF file of your certificate design. Make sure that the design does not have name of the participant, which will be written while generating the e-certificate. 

### PDF file orientation and dimension
Configure the dimension of PDF file in points; width and height in 'template.php' file.
```
$pdf->addPage('L', [792, 612]);
```

### Set font family and font size
Configure the font family and the font size. 
```
$pdf->AddFont('Roboto-Regular');
$pdf->SetFont('Roboto-Regular', '', 48);
```

The following fonts are already included in the package: Courier, Droid Serif, Helvetica, Roboto Bold, Roboto Regular, Symbol, Times Roman, Zapfdingbats. More fonts can be added as per this [tutorial](http://www.fpdf.org/en/tutorial/tuto7.htm).

### Set font color
Configure the font color in RGB.
```
$pdf->SetTextColor(97, 101, 107);
```

### Name position
Move the pointer to the correct position where we need to write the name.
// Move to 500 points from the top
```
$pdf->ln(500);
```

### Name alignment
Change the text alignment (6th parameter) as per your requirement. Check the [mannual](http://www.fpdf.org/en/doc/cell.htm) for more info.
```
$pdf->Cell(0, 0, $name, 0, 1, 'C');
```

### Array of names for verification
To make sure that only people who have attended the event can receive the e-certificate, we will have an array of names (in lowercase letters) which will be used verify the name of the participant while generating the e-certificate.

In 'data.php' add all the names in lowercase letters to the constant array `NAMES`.

### Home page
The home page can be customized as per your need by changing HTML (index.php) and CSS (custom.css).

## Thank you
I have used the awesome [FPDF](http://www.fpdf.org) with [FPDI](https://www.setasign.com/products/fpdi/about) for this application.
