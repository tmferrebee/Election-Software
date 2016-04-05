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
$race = $_POST['RaceF'.$num];
$party = $_POST['PartyF'.$num];

  
 //echo "<label>Candidate: ".$name."<br>Race: ".$race."<br>Party: ".$party."<input type='radio' name='".$race."' class='userInfo' value='".$name."'/> <br><br><br>";
 
 echo "Candidate: ".$name."<br>Race: ".$race."<br>Party: ".$party."<br><br>";
 
 $candidate = array('Name' => $name, 'Race' => $race, 'Party' => $party);
 
 $candidates[$num] = $candidate;
  
  

 }
 
?>

<script>
function goBack() {
    window.history.back();
}
</script>


<button type="button" onclick = "goBack()" >Back</button>

<button type="button">Confirm</button>

</body>
</html>