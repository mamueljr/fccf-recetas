<?php

//include "connect.php";
require "/vendor/dompdf/dompdf_config.inc.php";

$dompdf = new DOMPDF();

//$sql = "SELECT posts.title, users.name, posts.description from posts, users 
//			WHERE posts.id_user = users.id_user
//			order by posts.id_blog";

//$data_db = mysqli_query($conn, $sql);

//$str_html = '<table border = "1">';

//$str_html .= '<tr>
//						<td>Judul</td>
//						<td>Penulis</td>
//						<td>Deskripsi</td>
//					</tr>
//					';

//while ($row = mysqli_fetch_array($data_db)) {
//    $str_html .= '<tr>
//							<td>' . $row['title'] . '</td>
//							<td>' . $row['name'] . '</td>
//							<td>' . $row['description'] . '</td>
//						</tr>
//						';
//}

//$str_html .= '</table>';

//$dompdf->load_html($str_html);

// (Optional) Setup the paper size and orientation
// Render the HTML as PDF
$dompdf->render();
// Output the generated PDF to Browser

$dompdf->stream('testing.pdf');

?>