<?php
    session_start();
    require_once("../public/TCPDF-main/tcpdf.php");

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

    $html = <<<EOD
        <p>Write Receipt Details here</p>
    EOD;

    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

    ob_end_clean();

    $pdf->Output('bistecca-receipt.pdf', 'I');

?>