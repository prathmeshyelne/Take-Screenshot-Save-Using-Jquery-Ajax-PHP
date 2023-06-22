<?php
if(isset($_POST['img'])){
	$source=fopen($_POST['img'],"r");
	$image_name=time().'.png';
	$destination=fopen('images/'.$image_name,"w");
	stream_copy_to_stream($source,$destination);
	fclose($source);
	fclose($destination);
}
//echo '<pre>';
//print_r($_POST);

?>