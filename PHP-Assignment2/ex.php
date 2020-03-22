<?php
$Rockbands = array(
 array('Rockband', 'Song 1', 'Song 2', 'Song 3'),
 array('Beatles','Love Me Do', 'Hey Jude','Helter Skelter'),
 array('Rolling Stones','Waiting on a Friend','Angie','Yesterday\'s Papers'),
 array('Eagles','Life in the Fast Lane','Hotel California','Best of My Love')
);
echo '<pre>';
print_r($Rockbands);
echo '</pre>';
?>
<table border="1">
<?php
foreach($Rockbands as $Rockband)
{
 echo '<tr>';
 foreach($Rockband as $item)
 {
  echo "<td>$item</td>";
 }
 echo '</tr>';
}
?>
</table>
<hr />