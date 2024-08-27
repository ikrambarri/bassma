<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require("../../pdf/fpdf186/fpdf.php");
require("../../php/cnx.php");
 $pdf = new FPDF('L','mm','A4'); 
 $pdf->AddPage(); 

 $pdf ->SetFont('Arial','B',15);
 $pdf->SetFillColor(120,140,150);
 $pdf->Image('../../img/LOGO BASSMA (1) (1).png',110,-7,60,40);


 $pdf->Ln();
 $pdf->Ln();

 $pdf->SetXY(100,30);
 $pdf->Cell(90,20,'Liste des etudiants',0,1,'C');
 //l'entéte du table  
 $pdf->SetFillColor(193,195,201);
 $pdf->SetX(3);
 $pdf->Cell(20,10,'id',1,0,'C',true);
 $pdf->Cell(30,10,'Nom',1,0,'C',true);
 $pdf->Cell(30,10,'prenom',1,0,'C',true);
 $pdf->Cell(40,10,'date Naissance',1,0,'C',true);
 $pdf->Cell(30,10,'telephone',1,0,'C',true);
 $pdf->Cell(70,10,'email',1,0,'C',true);
 //$pdf->Cell(30,10,'adresse',1,0,'C',true);
 $pdf->Cell(40,10,'Niveau Scolaire ',1,0,'C',true);
 $pdf->Cell(30,10,'matiere ',1,1,'C',true);


 $req="SELECT * FROM Etudiant_C";
 $result=mysqli_query($cnx,$req);
 while($rows=mysqli_fetch_assoc($result)){
    $pdf->SetX(3);
    $pdf->Cell(20,10,$rows['id_E'],1,0,'C');
    $pdf->Cell(30,10,$rows['nom'],1,0,'C');
    $pdf->Cell(30,10,$rows['prenom'],1,0,'C');
    $pdf->Cell(40,10,$rows['dateNaiss'],1,0,'C');
    $pdf->Cell(30,10,$rows['telephone'],1,0,'C');
    $pdf->Cell(70,10,$rows['email'],1,0,'L');
    //$pdf->Cell(30,10,$rows['adresse'],1,0,'C');
    $pdf->Cell(40,10,$rows['NiveauScolaire'],1,0,'C');
    $pdf->Cell(30,10,$rows['matiere'],1,1,'C');
 }

    
    $pdf->Ln();
    $pdf->SetX(120);
    $date=date('d/m/Y');
    $pdf->Cell(310,20,$date,0,1,'C');

 //$pdf->Output("F","Listevoiture.pdf"); // f:ecrasée
 $pdf->Output();

?>