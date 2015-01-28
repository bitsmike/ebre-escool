<?php
//require('fpdf.php');
define('EURO', chr(128));

$pdf = new FPDF();
$pdf->AddPage();
//Capçalera
$pdf->SetFont('Arial','B',12);
$pdf->Cell(100,8,utf8_decode('Associació d\'usuaris de Guifi.net i'),0,0,'L');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(90,6,utf8_decode('Plaça Alfons XII nº5 2º 3 B'),0,0,'R');
$pdf->ln();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(100,8,utf8_decode('Linux de les Terres de l\'Ebre'),0,0,'L');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(90,6,utf8_decode('43500 - Tortosa'),0,0,'R');
$pdf->ln();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(100,8,utf8_decode('http://www.augute.org'),0,0,'L');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(90,6,utf8_decode('Tel.: 636111384 - E-mail: info@augute.org'),0,0,'R');
//Títol
$pdf->ln();
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,12,utf8_decode('SOLICITUD D\'ALTA DE SOCI'),0,0,'C');
$pdf->ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(100,8,utf8_decode('DNI/NIE/Passaport:'),1,0,'L');
$pdf->Cell(90,8,utf8_decode('Data:'),1,0,'L');
$pdf->Cell(0,6,'',0,1);
$pdf->ln();
$pdf->Cell(100,8,utf8_decode('Nom:'),1,0,'L');
$pdf->Cell(90,8,utf8_decode('1r Cognom:'),1,0,'L');
$pdf->ln();
$pdf->Cell(100,8,utf8_decode('2n Cognom:'),1,0,'L');
$pdf->Cell(90,8,utf8_decode('Email:'),1,0,'L');
$pdf->Cell(0,6,'',0,1);
$pdf->ln();
$pdf->Cell(150,8,utf8_decode('Adreça:'),1,0,'L');
$pdf->Cell(40,8, "Home [   ]  -  Dona [   ]" ,1,0,'C');
$pdf->Cell(0,6,'',0,1);
$pdf->ln();
$pdf->Cell(150,8,utf8_decode('Població:'),1,0,'L');
$pdf->Cell(40,8,utf8_decode('C.P.:'),1,0,'L');
$pdf->Cell(0,6,'',0,1);
$pdf->ln();
$pdf->Cell(95,8,utf8_decode('Telèfon:'),1,0,'L');
$pdf->Cell(95,8,utf8_decode('Mòbil:'),1,0,'L');
$pdf->Cell(0,6,'',0,1);
$pdf->ln();
$pdf->Cell(120,8,utf8_decode('Tipus Soci:  [   ]  Normal   -   [   ]  Premium'),1,0,'L');
$pdf->Cell(70,8,utf8_decode('Data naixement:   ___ / ___ / ______'),1,0,'L');
$pdf->ln();
$pdf->SetFont('Arial','B',8);
$pdf->Cell(100,6,('Quota soci Normal: 18'.EURO.' trimestre'),'TLR',0,'L');
$pdf->Cell(90,6,utf8_decode(''),'TLR',1,'L');
$pdf->Cell(100,6,('Quota soci Premium: 15'.EURO.utf8_decode(' al més')),'BLR',0,'L');
$pdf->Cell(90,6,utf8_decode(''),'BLR',0,'L');
$pdf->Cell(0,10,'',0,1);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,utf8_decode('Dades Bancàries'),0,0,'C');
$pdf->ln();
$pdf->SetFont('Arial','B',8);
$pdf->Cell(38,6,utf8_decode('Codi entitat'),'R',0,'C');
$pdf->Cell(38,6,utf8_decode('Codi oficina'),0,0,'C');
$pdf->Cell(19,6,utf8_decode('DC'),'R',0,'C');
$pdf->Cell(95,6,utf8_decode('Número de Compte'),0,0,'C');
$pdf->ln();
for($i=0;$i<20;$i++){
	$pdf->Cell(9.5,7,utf8_decode(''),1,0,'C');
}
$pdf->Cell(0,6,'',0,1);
$pdf->ln();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,utf8_decode('Informació a omplir per l\'instal·lador'),1,0,'C');
$pdf->ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(110,8,utf8_decode('Instal·lador:'),1,0,'L');
$pdf->Cell(80,8,utf8_decode('Zona:'),1,0,'L');
$pdf->ln();
$pdf->Cell(110,8,utf8_decode('URL Node:'),1,0,'L');
$pdf->Cell(80,8,utf8_decode('Supernode:'),1,0,'L');
$pdf->ln();
$pdf->Cell(110,8,utf8_decode('Nom node:'),1,0,'L');
$pdf->Cell(80,8,utf8_decode('IP:'),1,0,'L');
$pdf->ln();
$pdf->Cell(110,8,utf8_decode('Dispositiu/s (model/s):'),1,0,'L');
$pdf->Cell(80,8,utf8_decode('Distància:'),1,0,'L');
$pdf->ln();
$pdf->Cell(110,8,utf8_decode('Cable i altres materials:'),1,0,'L');
$pdf->Cell(80,8,utf8_decode('Hores treball:'),1,0,'L');
$pdf->ln();
$pdf->Cell(0,8,utf8_decode('Altres comentaris:'),'LTR',0,'T');
$pdf->ln();
$pdf->Cell(0,8,utf8_decode(''),'BLR',0,'T');
$pdf->ln();
$pdf->SetFont('Arial','B',7);
$pdf->Cell(20,7,utf8_decode(''),0,0,'L');
$pdf->Cell(170,7,utf8_decode('Accepto els estatuts i el reglament de l\'associació*'),0,0,'L');
$pdf->Cell(0,6,'',0,1);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,7,utf8_decode(''),0,0,'L');
$pdf->Cell(170,7,utf8_decode('Signatura del soci'),0,0,'L');
$pdf->Cell(0,8,'',0,1);
$pdf->ln();
$pdf->SetFont('Arial','B',6);
$pdf->SetX(10);
$estatuts = "* Podeu obtenir una còpia dels estatuts demanant-la a info@augute.org i consultar el reglament de l'associació a la web http://www.augute.org";
$pdf->Cell(0,6,utf8_decode($estatuts),0,1);
$estatuts = "En compliment de la Llei Orgánica 15/1999, de 13 de diciembre, de Protecció ded Dades de Caràcter Personal (LOPD), s'informa als socis que la cessió de les seves dades, suposa el consentiment inequívoc per la seva part perquè l'Associació d'Usuaris Guifi.net i Linux de les Terres de l'Ebre (AUGUTE) tracti de forma automatitzada les seves dades personals, i les incorpori al fitxer de dades personals amb la finalitat de complir amb els objectius indicats als estatuts de l'associació. Les seves dades no podran ser cedides a altres empreses amb finalitats promocionals i publicitàries. Així mateix, s'informa de la possibilitat que podeu exercir, segons estableix la LOPD, els drets d'accés, rectificació, cancel·lació i oposició de les vostres dades personals, editant-les o eliminant-les vosaltres mateixos quan estigueu identificats a la web de l'associació o dirigint-vos a l'associació per carta certificada, on consti com a referència DADES PERSONALS i el dret que voleu exercitar. L'associació es compromet a mantenir i guardar les vostres dades personals de forma confidencial, aplicant a tal efecte el que estableix la normativa vigent sobre Protecció de dades personals.";
$pdf->MultiCell(190,3,utf8_decode($estatuts));
$pdf->Output();

?>