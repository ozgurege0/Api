<?php
include 'class.php';
$id = $_GET['id'];
$url = "https://vknsorgula.net/$id.html";

$html = str_get_html(file_get_contents($url));

$data = $html->find('.card-body');
?>

<?php
foreach($data as $datacek){
?>

Firma Ünvanı: <?php echo $datacek->find(".text-secondary",0)->plaintext; ?><br>

Firma Uzun Ünvanı: <?php echo $datacek->find(".text-secondary",1)->plaintext; ?><br>

Vergi Numarası: <?php echo $datacek->find(".text-secondary",2)->plaintext; ?><br>

Vergi Dairesi: <?php echo $datacek->find(".text-secondary",3)->plaintext; ?><br>

<?php
}
?>