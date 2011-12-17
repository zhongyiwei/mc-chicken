<?php

require('PDFGenerator/fpdf.php');

class PDF extends FPDF {

    var $B;
    var $I;
    var $U;
    var $HREF;

// Simple table
    function BasicTable($header, $data) {
        // Header
        foreach ($header as $col)
            $this->Cell(40, 7, $col, 1, 0, 'C');
        $this->Ln();
        // Data
        foreach ($data as $row) {
            foreach ($row as $col)
                $this->Cell(40, 6, $col, 1, 0, 'C');
            $this->Ln();
        }
    }

    function BasicTableForAchievement($data, $i) {

//
//        // Header
//        foreach ($header as $col) {
//            $this->SetFont('Arial', 'B', 12);
//            $this->Cell(60, 7, $col, 1);
//        }
//        $this->Ln();
//
//        // Data
//        foreach ($data[$i] as $row) {
//            foreach ($row as $col) {
//                $this->SetFont('Arial', '', 12);
//                $this->Cell(60, 6, $col, 1,'L');
//            }
//            $this->Ln();
//        }
//        
        // Data
        foreach ($data[$i] as $row) {
            foreach ($row as $col) {
                $this->SetFont('Arial', '', 12);
                $this->MultiCell(180, 6, $col, 0, 'L');
            }
            $this->Ln(4);
        }
        $this->Cell(180, 0.1, '', 0.1, 0, 'L', true);
    }

    function WriteHTML($html) {
        // HTML parser
        $html = str_replace("\n", ' ', $html);
        $a = preg_split('/<(.*)>/U', $html, -1, PREG_SPLIT_DELIM_CAPTURE);
        foreach ($a as $i => $e) {
            if ($i % 2 == 0) {
                // Text
                if ($this->HREF)
                    $this->PutLink($this->HREF, $e);
                else
                    $this->Write(5, $e);
            }
            else {
                // Tag
                if ($e[0] == '/')
                    $this->CloseTag(strtoupper(substr($e, 1)));
                else {
                    // Extract attributes
                    $a2 = explode(' ', $e);
                    $tag = strtoupper(array_shift($a2));
                    $attr = array();
                    foreach ($a2 as $v) {
                        if (preg_match('/([^=]*)=["\']?([^"\']*)/', $v, $a3))
                            $attr[strtoupper($a3[1])] = $a3[2];
                    }
                    $this->OpenTag($tag, $attr);
                }
            }
        }
    }

    function OpenTag($tag, $attr) {
        // Opening tag
        if ($tag == 'B' || $tag == 'I' || $tag == 'U')
            $this->SetStyle($tag, true);
        if ($tag == 'A')
            $this->HREF = $attr['HREF'];
        if ($tag == 'BR')
            $this->Ln(5);
    }

    function PutLink($URL, $txt) {
        // Put a hyperlink
        $this->SetTextColor(0, 0, 255);
        $this->SetStyle('U', true);
        $this->Write(5, $txt, $URL);
        $this->SetStyle('U', false);
        $this->SetTextColor(0);
    }

    function SetStyle($tag, $enable) {
        // Modify style and select corresponding font
        $this->$tag += ($enable ? 1 : -1);
        $style = '';
        foreach (array('B', 'I', 'U') as $s) {
            if ($this->$s > 0)
                $style .= $s;
        }
        $this->SetFont('', $style);
    }

    function CloseTag($tag) {
        // Closing tag
        if ($tag == 'B' || $tag == 'I' || $tag == 'U')
            $this->SetStyle($tag, false);
        if ($tag == 'A')
            $this->HREF = '';
    }

    function Footer() {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, '~Page ' . $this->PageNo().'~', 0, 0, 'C');
    }

    // Page header
    function Header() {
        // Logo
        $this->SetTextColor(200);
//        $this->SetFont('Arial', 'I', 50);
//        $this->Cell(14, 20, 'O');
//        // Arial bold 15
        $this->Image('CSS/images/O2_logoPDF.png', 10, 6, 20);
        $this->Cell(20);
        $this->SetFont('Arial', '', 15);
        // Move to the right
        // Title
        $this->Cell(33, 25, 'xygen.com');


        $this->Cell(88);
        $this->SetFont('Arial', 'I', 10);
        $this->Cell(50, 25, 'Guide to a successful life');
        // Line break
        $this->Ln(16);
        $this->SetFillColor(200, 200, 200);
        $this->Cell(200, 1, '', 0.1, 1, 'C', true);
        $this->Ln(1);
        $this->Cell(170);
        $this->Cell(50, 1, '', 0.1, 1, 'R', true);
        $this->Ln(10);
    }

}

$pdf = new PDF();

$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 16);
$missionStatement = 'My Mission Statement';
$pdf->Cell(70, 10, $missionStatement, 0, 1);
$pdf->Ln(2);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(70, 10, $mission_set, 0, 1);
$pdf->Ln(10);


$myValue = 'My Values';
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(70, 10, $myValue, 0, 1);
$pdf->Ln(2);

$pdf->SetFont('Arial', '', 12);
$PDFValueHeader = array('Value 1', 'Value 2', 'Value 3', 'Value 4');
$PDFValueData = array();

$PDFValueData[0][1] = $value1;
$PDFValueData[0][2] = $value2;
$PDFValueData[0][3] = $value3;
$PDFValueData[0][4] = $value4;

//print_r($PDFValueData);
$pdf->BasicTable($PDFValueHeader, $PDFValueData);
$pdf->Ln(10);

$pdf->SetFont('Arial', 'B', 16);
$myAchievement = 'My Achievement';
$pdf->Cell(70, 10, $myAchievement, 0, 1);
$pdf->Ln(2);


//$PDFAchievementHeader = array('Description', 'What I have achieved');

if ($AchievementStatus == '') {
    $pdf->Ln(5);
    $pdf->Cell(180, 0.1, '', 0.1, 0, 'L', true);
    $pdf->Ln(5);
    for ($i = 0; $i < $numberRowsForAchievement; $i++) {
        $pdf->BasicTableForAchievement($AchievementRows, $i);
        $pdf->Ln(5);
    }
//print_r($AchievementRows);
    $pdf->Ln(10);
} else {
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(70, 10, $AchievementStatus, 0, 1);
}

$pdf->SetFont('Arial', 'B', 16);
$myResillienceScale = 'My Resilience Scale';
$pdf->Cell(70, 10, $myResillienceScale, 0, 1);
$pdf->Ln(5);

if ($resillentScaleStatus == '') {
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(40, 8, 'Indicators', 1, 0, 'C');
    $pdf->Cell(140, 8, 'Explanation', 1, 1);
    $pdf->Cell(40, 64, 'Hope', 1, 0, 'C');
    $hopeExplanation = "Your Hope score shows that you are $h_descriptor1. $h_descriptor2.\n\nOptimistic people do have special eyes that can help them look out for chances, they have super arms to gather resources and they have mighty legs that will keep running until they reach their goals. $h_descriptor3!";
    $pdf->MultiCell(140, 8, $hopeExplanation, 1, 1);
    $pdf->Cell(40, 8, 'Optimism', 1, 0, 'C');
    $OptimismExplanation = "Your optimism level indicates that you are $op_descriptor";
    $pdf->MultiCell(140, 8, $OptimismExplanation, 1, 1);
    $pdf->Cell(40, 8, 'Good Events', 1, 0, 'C');
    $GoodEventsExplanation = "The way you think about good events $g_descriptor.";
    $pdf->MultiCell(140, 8, $GoodEventsExplanation, 1, 1);
    $pdf->Cell(40, 8, 'Bad Events', 1, 0, 'C');
    $BadEventsExplanation = "The way you think about good events $b_descriptor.";
    $pdf->MultiCell(140, 8, $BadEventsExplanation, 1, 1);
    $pdf->Ln(10);
} else {
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(40, 8, $resillentScaleStatus, 0, 1, 'L');
    $pdf->Ln(10);
}

$pdf->SetFont('Arial', 'B', 16);
$myCOA = 'My Coat of Arm';
$pdf->Cell(70, 10, $myCOA, 0, 1);
$imageAddress = base_url() . 'index.php/home/portfolio_export_COA';
$pdf->Ln(5);
$pdf->SetFont('Arial', '', 12);
$html = "Click link to download your COA: <a href='$imageAddress'>$imageAddress</a>";
$pdf->WriteHTML($html);


$pdf->SetCreator('Oxygen Team');

$pdf->Output('My Portfolio by Oxygen Team.pdf', 'I');
?>
