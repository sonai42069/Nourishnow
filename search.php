<?php
	 include_once "nav.php"; 
    include_once "php/config.php";
    $search = mysqli_real_escape_string($con, $_POST['search']);
    if(!empty($search)){
      //  $LIST ="SELECT * FROM product WHERE name LIKE '{$search}%' ";
        $sql = mysqli_query($con, "SELECT * FROM product WHERE name LIKE '%{$search}%' ");
		$sql1=mysqli_query($con, "SELECT * FROM categories WHERE categories LIKE '%{$search}%' ");
        if(mysqli_num_rows($sql) > 0){?>
			<div class="search-box">
			
				<div class="pname">Product Name</div>
				<div class="mrp">MRP</div>
				<div class="price">Price</div>
				
				<div class="image">Image</div>
			
			</div>
		<?php
        while($row = mysqli_fetch_assoc($sql)){
			?>
       <div class="search-box1">
			<div class="pname"><?php echo $row['name'] ?></div>
			<div class="mrp"><?php echo $row['mrp'] ?></div>
			<div class="price"><?php echo $row['price'] ?></div>
			   
       		 <div class="image">
				<div class="image-img">
       			 <img src="../college-admin/admin/images/picture/<?php echo $row['image']?>">
        		</div>
			</div>
		</div>
       <?php }
	   ?>
	   <?php }else if(mysqli_num_rows($sql1) > 0){?>  
		<div class="search-box">
			
			<div class="pname">Product Name</div>
			<div class="mrp">MRP</div>
			<div class="price">Price</div>
			
			<div class="image">Image</div>
		
		</div>
		<?php
		$sql3 = mysqli_fetch_assoc($sql1);
		$id = $sql3['id'];
		$sql2 = mysqli_query($con, "SELECT * FROM product WHERE categories_id = '$id' ");

		while($row = mysqli_fetch_assoc($sql2)){
	   ?>
	  <div class="search-box1">
		<div class="pname"><?php echo $row['name'] ?></div>
		<div class="mrp"><?php echo $row['mrp'] ?></div>
		<div class="price"><?php echo $row['price'] ?></div>
		   
		<div class="image">
			<div class="image-img">
			 <img src="../college-admin/admin/images/picture/<?php echo $row['image']?>">
			</div>
		</div>
	  </div>
			
 	<?php }
		}else{ ?>

          <div class="no-data"> <?php echo "No Data Found Related to Your Search Term " ;?> </div>
		 <?php }
    }else{
		header('location:main.php');
	}
	
    ?>