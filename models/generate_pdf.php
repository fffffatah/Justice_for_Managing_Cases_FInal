<?php
    require '../dependencies/pdfcrowd/pdfcrowd.php';
?>
<?php
    function getPdf($html_string){
        try
        {
            $client = new \Pdfcrowd\HtmlToPdfClient(getenv('PDFCROWD_USER'), getenv('PDFCROWD_API'));
            $pdf=$client->convertString($html_string);
            $string = implode(array_map("chr", $pdf));
            return $string;
        }
        catch(\Pdfcrowd\Error $why)
        {
            //DO NOTHING
        }
    }
    function getReceiptHtml(){
        return "<b>sample</b>";
    }
?>