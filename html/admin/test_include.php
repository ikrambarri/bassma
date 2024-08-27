<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
include '../../pdf/fpdf186/fpdf.php';


//require("../../php/cnx.php");
 $pdf = new FPDF('P','mm','A4'); // insctenciasion de l'objet  // P: portrait 
 $pdf->AddPage(); // ajouter un page

 $pdf ->SetFont('Arial','B',15);
 $pdf->SetFillColor(120,140,150);
 $pdf->Cell(40,15,'Catalogue',1,0,'C',true);
 //$pdf->Image('img/logo.jpg',81,-7,50,50);
 $pdf->Cell(120,15,'');
 $pdf->Cell(30,15,'Hiver 2024',1,1,'C',true);
 $pdf->Ln();
 $pdf->Cell(190,20,'Liste des voiture',0,1,'C');
 //l'entéte du table  
 $pdf->SetFillColor(240,0,150);
 $pdf->SetX(20);
 $pdf->Cell(40,10,'Nom',1,0,'C',true);
 $pdf->Cell(40,10,'Marque',1,0,'C',true);
 $pdf->Cell(40,10,'Prix',1,0,'C',true);
 $pdf->Cell(60,10,'Image',1,1,'C',true);
/*
 $req="SELECT * FROM cars";
 $result=mysqli_query($cnx,$req);
 while($rows=mysqli_fetch_assoc($result)){
    $pdf->SetX(20);
    $pdf->Cell(40,10,$rows['name'],1,0,'C');
    $pdf->Cell(40,10,$rows['marque'],1,0,'C');
    $pdf->Cell(40,10,$rows['prix'],1,0,'C');
    $pdf->Cell(60,10,$rows['image'],1,1,'L');
 }*/
    /*$imagePath = 'img/'.$rows['image'];
    $pdf->Image($imagePath,153  ,null, 45, 17); */
    
    $pdf->Ln();
    $date=date('d/m/Y');
    $pdf->Cell(310,20,$date,0,1,'C');

 //$pdf->Output("F","Listevoiture.pdf"); // f:ecrasée
 $pdf->Output();
?>
