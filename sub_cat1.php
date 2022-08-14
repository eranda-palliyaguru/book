<?php
include("connect.php");
//get the q parameter from URL
$q=$_REQUEST["q"];
//find out which feed was selected
?>
	 
                  <select class="form-control select2"  name="sub_cat_s1" onchange="sub_cat1(this.value)" name="model" style="width: 100%;" autofocus >
                  <option value=""></option>
                  
				  <?php
                $result = $db->prepare("SELECT * FROM sub_cat1 WHERE sub_cat=:userid");
		$result->bindParam(':userid', $q);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option value="<?php echo $row['id'];?>"><?php echo $row['name']; ?>    </option>
	<?php
				}
			?>
			<option value="new">ADD NEW</option>
                </select>