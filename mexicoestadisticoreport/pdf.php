<?php
require('php/phplot.php');
require('php/mem_image.php');




$poblacionFemenina=$_GET["pobFem"];
$poblacionMasculina=$_GET["pobMas"];
$estado=$_GET["estado"];

$poblacion=$_GET["poblacion"];
$vivienda=$_GET["vivienda"];


$data = array(
    array('mujeres',$poblacionFemenina),
    array('hombres',$poblacionMasculina),
);

$plot = new PHPlot(800,600);
$plot->SetImageBorderType('plain');

$plot->SetPlotType('pie');
$plot->SetDataType('text-data-single');
$plot->SetDataValues($data);

$plot->SetDataColors(array('pink','blue'));

$titulo=utf8_decode("Estado: ".$estado."\nPoblacion total: ".$poblacion.
    "\nViviendas habitadas: ".$vivienda);


$plot->SetTitle($titulo);



foreach ($data as $row)
    $plot->SetLegend(implode(': ', $row));
    # Place the legend in the upper left corner:
    $plot->SetLegendPixels(5, 5);
    
    $plot->DrawGraph();
    
    $pdf = new PDF_MemImage();
    $pdf->AddPage();
    $pdf->GDImage($plot->img,30,20,140);
    $pdf->Output();
    
 

    ?>
    
    




