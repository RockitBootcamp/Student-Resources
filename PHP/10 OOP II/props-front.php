<?php 
require_once('property.php');

$properties = [];
$properties[] = new ResidentialProperty(4, false, 6, false);
$properties[] = new ResidentialProperty(2, true, 1);
$properties[] = new ResidentialProperty(3, true, 6);
$properties[] = new ResidentialProperty(4, false, 5);

$properties[] = new CommercialProperty('retail', true, 300);
$properties[] = new CommercialProperty('office', true, 150);
$properties[] = new CommercialProperty('retail', false, 200);
$properties[] = new CommercialProperty('industrial', true, 500);
$properties[] = new CommercialProperty('haz-waste', false, 1000);
$properties[] = new CommercialProperty('office', true, 3000);

$output = '';
foreach($properties as $prop) {
    $output .= '<div>';
    $output .= "<div>Acreage: {$prop->acreage}</div>";
    $output .= "<div>ForSale: {$prop->for_sale}</div>";
    $output .= '</div>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php echo $output; ?>
</body>
</html>