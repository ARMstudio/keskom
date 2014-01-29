<?
$approve = array();
    for($i=1;$i<=5;$i++){
	if(isset($_POST['group'.$i]))
       $approve[] = $_POST['group'.$i];
	else
		$approve[] = "X";
	}
	$poin=0;
	$jawaban=array("A","B","C","A","C");
	/*foreach ($approve as $approve){
	print $approve;	
	}
	*/
	
	for($i=0;$i<=4;$i++){
	if($approve[$i] == $jawaban[$i])
	$poin+=3;
	elseif($approve[$i]=="X")
	$poin+=0;
	else
	$poin-=1;
	}
	print $poin;
?>