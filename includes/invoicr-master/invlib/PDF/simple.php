<?php
// (A) HTML HEADER & STYLES
$this->data = "<!DOCTYPE html><html><head><style>" .
	"html,body{font-family:DejaVuSans}#bigi{margin-bottom:20px;font-size:28px;font-weight:bold;color:#ad132f;padding:10px}#company,#billship{margin-bottom:30px}#company img{max-width:180px;height:auto}#billship,#company,#items{width:100%;border-collapse:collapse}#billship td{width:33%}#billship td,#items td,#items th{padding:10px; width=100%}#items th{text-align:left;border-top:2px solid #000;border-bottom:2px solid #000}#items td{border-bottom:1px solid #ccc}.idesc{color:#999}.ttl{background:#fafafa;font-weight:700}.right{text-align:right}#notes{background:#efefef;padding:10px;margin-top:30px}" .
	"</style></head><body><div id='invoice'>";

// (B) COMPANY
$this->data .= "<table id='company'><tr><td><img src='" . $this->company[0] . "'/></td><td class='right'>";
for ($i = 2; $i < count($this->company); $i++) {
	$this->data .= "<div>" . $this->company[$i] . "</div>";
}
$this->data .= "</td></tr></table>";
$this->data .= "<div id='bigi'>Income Tax Service - INVOICE</div>";

// (C) BILL TO
$this->data .= "<table id='billship'>";


// (E) INVOICE INFO
$this->data .= "<tr><td>";
foreach ($this->head as $i) {
	$this->data .= "<strong>$i[0]:</strong> $i[1]<br>";
}
$this->data .= "</td></tr></table>";


// (F) ITEMS
$this->data .= "<table id='items' ><tr><th colspan='2'>Item</th><th colspan='1'>Amount</th></tr>";
foreach ($this->items as $i) {
	$this->data .= "<tr><td colspan='2'><div>" . $i[0] . "</div>" . ($i[1] == "" ? "" : "<small class='idesc'>$i[1]</small>") . "</td><td colspan='1'>" . $i[2] . "</td><td></tr>";
}

// (G) TOTALS
if (count($this->totals) > 0) {
	foreach ($this->totals as $t) {
		$this->data .= "<tr class='ttl'><td class='right' colspan='2'>$t[0]</td><td>$t[1]</td></tr>";
	}
}
$this->data .= "</table>";

// (H) NOTES
if (count($this->notes) > 0) {
	$this->data .= "<div id='notes'>";
	foreach ($this->notes as $n) {
		$this->data .= $n . "<br>";
	}
	$this->data .= "</div>";
}

// (I) CLOSE
$this->data .= "</div></body></html>";
$mpdf->WriteHTML($this->data);
