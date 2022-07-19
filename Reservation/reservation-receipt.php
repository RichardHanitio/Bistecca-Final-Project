<?php
    require_once("../db.php");
    require_once("../public/TCPDF-main/tcpdf.php");
    
    function fetchDataById() {
        global $conn;
        $id = $_GET["reservationid"];
        $query = mysqli_query($conn, "SELECT * FROM reservation WHERE id_reservation='".$id."'");
        $row = mysqli_fetch_assoc($query);

        $output = '
            <tr><td>Reservation ID</td><td width="20">:</td><td>'.$row["id_reservation"].'</td></tr>
            <tr><td>Date</td><td>:</td><td>'.$row["date"].'</td></tr>
            <tr><td>Time</td><td>:</td><td>'.$row["time"].'</td></tr>
            <tr><td>Location</td><td>:</td><td>'.$row["location"].'</td></tr>
            <tr><td>Guest</td><td>:</td><td>'.$row["guest"].'</td></tr>
        ';

        return $output;
    }

    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, "UTF-8", false);

    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetTitle(PDF_HEADER_TITLE);
    $pdf->SetHeaderData("../images/bistecca1.jpg", 40 , "Bistecca Reservation Receipt", PDF_HEADER_STRING , array(0,0,0), array(0,0,0));

    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    $pdf->setMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->setHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->setFooterMargin(PDF_MARGIN_FOOTER);

    $pdf->setPrintHeader(true);
    $pdf->setPrintFooter(true);
    $pdf->SetAutoPageBreak(true, 10);

    $pdf->AddPage(); 

    $html = '';

    $html .= "<h1>Summary</h1>";
    $html .= '<table>';
    $html .= fetchDataById();
    $html .= "</table>";


    // $html = <<<EOD
    //     <p>Write Receipt Details here</p>
    // EOD;

    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

    ob_end_clean();

    $pdf->Output('bistecca-receipt.pdf', 'I');

?>