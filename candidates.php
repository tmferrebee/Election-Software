<html>

<head>
<title> candidates</title>

<body>

<?php


echo $numbers123 . "</br>";

$candidates;
 
 for ($num = 0; $num < $_POST["candidateNumber"]; $num++)
 {

$name = $_POST['Candidate_'.$num];
 echo "Candidate: " ,  $name . "</br>";
$race = $_POST['RaceF'.$num];
 echo "Race: " , $race . "</br>";
$party = $_POST['PartyF'.$num];
 echo "Party:  " , $party . "</br> </br>";
 
 $candidate = array('Name' => $name, 'Race' => $race, 'Party' => $party);
 
 $candidates[$num] = $candidate;
 
 }

?>

<script>

window.alert("PHP");


var raceNum = <?php echo $_POST["candidateNumber"];?>;


var ballots = document.createElement('input');

for(i = 0; i < raceNum; i++)
{
var name = document.createElement('Label');
name.setAttribute("for",'Radio' + i);
name.innerHtml = "<?php echo $candidates[i][Name];?>"


ballot.type = 'radio';

ballot.name = "<?php echo $candidates[i][Race]?>";

ballot.value = "<?php echo $candidates[i][Name]?>";

bal.appendChild(name);
bal.appendChild(ballot);

} /*

ballot.type = 'radio';

ballot.name = <?php echo $candidates[i][Race]?>;

ballot.value = <?php echo $candidates[i][Name]?>;

bal.appendChild(name);
bal.appendChild(ballot);
}*/




</script>

<div id="bal">
	</div>


</body>
</html>