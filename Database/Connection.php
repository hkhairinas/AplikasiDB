<?php
// Connect to MongoDB
use MongoDB\Operation\InsertOne;
use MongoDB\Driver\BulkWrite;

require '../vendor/autoload.php'; // include Composer's autoloader

$client = new MongoDB\Client("mongodb://localhost:27017");

if(isset($_POST['addmhs'])){
    $nm = $_POST['nama'];
    $nim = $_POST['nim'];
    $tgl = $_POST['tgl'];
    addDataMhs($client, $nm, $nim, $tgl);
}

function addDataMhs($client, $nm, $nim, $tgl)
{
    $dbm = $client->universitas->mahasiswa;
    $doc = array (
        'nama' => $nm,
        'nim' => $nim,
        'tanggal_lahir' => $tgl
    );
    $result = $dbm->InsertOne($doc);
    $isi = $result->getInsertedId();
    if(isset($isi)){
        echo "ok";
    }
    else { 
        echo "fail";
    }
}

function editDataMhs()
{
    // $dbm = $client->universitas->mahasiswa;
}

if(isset($_GET['del_data'])){
    $id = $_GET['del_data'];
    delData($client, $id);
}
function delData($client, $id)
{
    $dbm = $client->uploads->scrap;
    $doc = array (
        '_id' => $id
    );
    $dbm->deleteOne($doc);
    header('Location: ../View/data_scrap');
}

if(isset($_POST['upload'])){
    $file = $_FILES['file'];
    uploadData($client, $file);
}

function uploadData($client, $file)
{
    $db = $client->uploads->scrap;
    $db->drop();
    $fileName = $file['name'];
    $filename = '../Uploads/'.$fileName;
    $lines = file($filename, FILE_IGNORE_NEW_LINES);

    $bulk = new MongoDB\Driver\BulkWrite;

    foreach ($lines as $line) {
        $bson = MongoDB\BSON\fromJSON($line);
        $document = MongoDB\BSON\toPHP($bson);
        $bulk->insert($document);
    }
    $manager = new MongoDB\Driver\Manager('mongodb://127.0.0.1/');

    $result = $manager->executeBulkWrite('uploads.scrap', $bulk);
    // $res = printf("Inserted %d documents\n", $result->getInsertedCount());
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Upload Data Sukses!');
    window.location.href='../View/data_scrap';
    </script>");
}

?>