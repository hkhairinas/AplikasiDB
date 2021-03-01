<?php
require '../vendor/simple_html_dom.php';
$html = file_get_html('https://www.indopremier.com/ipotstock/listsaham.php?page=listview&order=toppick');
// initialize empty array to store the data array from each row
$theData = array();

// loop over rows
foreach($html->find('table tbody') as $row) {
    // initialize array to store the cell data from each row
    $rowData = array();
    foreach($row->find('tr td.text') as $cell) {
        $rowData[] = $cell->innertext;
    }

    // push the row's data array to the 'big' array
    $theData[] = $rowData;
}
print_r($theData);

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Fungsi Belum Jalan!');
    window.location.href='../index';
    </script>");
?>