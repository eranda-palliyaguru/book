<?php
include("connect.php");
//get the q parameter from URL
$q=$_REQUEST["q"];
$tabel=$_REQUEST["tabel"];
$type=$_REQUEST["type"];
//find out which feed was selected
$id=0;
if($type==2){
	$result = $db->prepare("SELECT id FROM $tabel WHERE cat_id=:userid");
		$result->bindParam(':userid', $q);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){ $id=$row['id']; }
        }else{ $id=10; }
        if($id >= 1){
        ?>	 
                  <select class="form-control select2" name="<?php echo $tabel; ?>s" onchange="<?php echo $tabel; ?>(this.value)"  style="width: 100%;" autofocus >
                  <option value=""></option>
                  
				  <?php
                $result = $db->prepare("SELECT * FROM $tabel WHERE cat_id=:userid");
		$result->bindParam(':userid', $q);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option value="<?php echo $row['id'];?>"><?php echo $row['name']; ?>    </option>
	<?php
				}
				if($type==1){ echo '<option value="new">ADD NEW</option>'; }
			?>
			
                </select>

				<?php } ?>