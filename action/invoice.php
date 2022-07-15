<?php
include '../includes/constant.php';
include '../includes/config.php';
require '../includes/invoicr-master/invlib/invoicr.php';
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM user_service_master WHERE is_deleted = '0' AND user_service_id = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    $user_id = $row['_user_id'];
    $service_id = $row['_service_id'];
    $year_id = $row['_year_id'];
    $price = $row['price'];
    $payment = $row['payment'];

    $sql = "SELECT * FROM user_details WHERE is_deleted = '0' AND _user_id = '$user_id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    $name = $row['first_name'] . ' ' .  $row['middle_name'] . ' ' .  $row['last_name'];
    $street = $row['street'];
    $email = $row['email'];
    $mobile = $row['mobile'];

    $gst = 0.18 * $price;
    $total = $price + $gst;

    $service1 = "SELECT service_name FROM services_master WHERE is_deleted='0' AND service_id = '$service_id'";
    $service = mysqli_fetch_column(mysqli_query($connect, $service1));

    $year1 = "SELECT year_name FROM financial_year_master WHERE is_deleted='0' AND year_id = '$year_id'";
    $year = mysqli_fetch_column(mysqli_query($connect, $year1));

    // (B) SET INVOICE DATA // (B1) COMPANY INFORMATION // RECOMMENDED TO JUST PERMANENTLY CODE INTO INVLIB/INVOICR.PHP> (C1)
    $invoicr->set("company", [
        "http://$sitename/services_app/images/logo-dark-text.png",
    ]);

    // (B2) INVOICE HEADER
    $invoicr->set("head", [
        ["Invoice #", "$id"],
        ["Name", "$name"],
        ["Address", "$street"],
        ["Mobile", "$mobile"],
        ["Email", "$email"],
        ["Payment", "$payment"]
    ]);


    // (B5) ITEMS - ADD ONE-BY-ONE
    $items = [
        ["$service", "$year", "$price"]

    ];
    // foreach ($items as $i) { $invoicr->add("items", $i); }

    // (B6) ITEMS - OR SET ALL AT ONCE
    $invoicr->set("items", $items);

    // (B7) TOTALS
    $invoicr->set("totals", [
        ["SUB-TOTAL", "$price"],
        ["GST %", "18%"],
        ["Total GST", "$gst"],
        ["GRAND TOTAL", "$total"]
    ]);

    // (B8) NOTES, IF ANY
    $invoicr->set("notes", [
        "1. This is invoice for ur IT service",

    ]);
    // (C) OUTPUT
    // (C1) CHOOSE A TEMPLATE
    // $invoicr->template("apple");
    // $invoicr->template("banana");
    // $invoicr->template("blueberry");
    // $invoicr->template("lime");
    $invoicr->template("simple");
    // $invoicr->template("strawberry");

    // (C2) OUTPUT IN HTML
    // DEFAULT : DISPLAY IN BROWSER
    // 1 : DISPLAY IN BROWSER
    // 2 : FORCE DOWNLOAD
    // 3 : SAVE ON SERVER
    // $invoicr->outputHTML();
    // $invoicr->outputHTML(1);
    // $invoicr->outputHTML(1, "invoice.html");
    // $invoicr->outputHTML(3, __DIR__ . DIRECTORY_SEPARATOR . "invoice.html");

    // (C3) OUTPUT IN PDF
    // DEFAULT : DISPLAY IN BROWSER
    // 1 : DISPLAY IN BROWSER
    // 2 : FORCE DOWNLOAD
    // 3 : SAVE ON SERVER
    // $invoicr->outputPDF();
    // $invoicr->outputPDF(1);
    // $invoicr->outputPDF(2, "$p_name.pdf");
    $filename = getFileName($name);
    $invoicr->outputPDF(3, "../invoices" . '/' . "$filename.pdf");
    $file_path = "http://$sitename/services_app/invoices/" . $filename . '.pdf';
    $sql = "UPDATE user_service_master SET invoice_file='$filename' WHERE user_service_id ='$id'";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo $file_path;
    } else {
        echo (mysqli_error($connect));
    }
    $invoicr->reset();

    // (C4) OUTPUT IN DOCX
    // DEFAULT : FORCE DOWNLOAD
    // 1 : FORCE DOWNLOAD
    // 2 : SAVE ON SERVER
    // $invoicr->outputDOCX(1, "invoice.docx");
    // $invoicr->outputDOCX(1, "invoice.docx");
    // $invoicr->outputDOCX(2, __DIR__ . DIRECTORY_SEPARATOR . "invoice.docx");
}
