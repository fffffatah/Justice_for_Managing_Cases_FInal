<?php
    require_once '../models/db_conn.php';
    require_once '../models/mail_sender.php';
    require_once '../models/generate_pdf.php';
    sendAttachment("1","abcde","surdomakka@yevme.com",getPdf(getReceiptHtml()),"Receipt");
?>