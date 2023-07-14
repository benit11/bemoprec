<?php
include "../connect.php";
// variabel respon
// $response = "";
//proses data
$qbarang =  "SELECT nama_barang FROM barang";
$stmt = $pdo->query($qbarang);
foreach($stmt->fetchAll() as $row)
{                                
// $response .= " <li class='nav-item'>";
// $response .= " <a class='nav-link active' aria-current='page' href='#'>";
// $response .= " <button type='button' class='btn btn-link' data-bs-toggle='modal' data-bs-target='#exampleModal'> " . $row['nama_barang'] . 
// "</button>";
// $response .= " </a>";
$response = $row['nama_barang'];
echo json_encode([$response]);
// echo"masuk?";
}
// return value (berupa HTML)
// echo $response;

    // $sql_before = "SELECT nama_barang FROM barang";
    // $result_before = mysqli_query($conn, $sql_before);
    // if ($result_before) {
    //     $row = mysqli_fetch_assoc($result_before);
    //     $subject_before = $row['subject'];
    //     $categories_before = $row['categories'];
    //     $date_before = $row['date'];
    //     $description_before = $row['description'];
    //     echo json_encode([$subject_before, $categories_before, $date_before, $description_before,$id_edit]);
    // }
?>