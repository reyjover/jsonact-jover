
<?php
$json = file_get_contents("https://jsonact-jover.herokuapp.com/json.php");

$data = json_decode($json,true);
$list = $data['Horses'];


?>

<h1>Red Dead Redemption 2 | Horses </h1>

<table border="1px">
    <tr>
        <td>Horses</td>
        <td>Coat</td>
        <td>Category</td>
        <td>Handling</td>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><?php echo $value['Horse'];?></td>
        <td><?php echo $value['Coat'];?></td>
        <td><?php echo $value['Category'];?></td>
        <td><?php echo $value['Handling'];?></td>
    </tr>
<?php
}
?>
</table>
