
<?php

 require"config/config.php";


if(isset($_GET['query'])){
	$query = $_GET['query'];
}else{
	$query = "";
}


if($query !== ""){

	$query = htmlspecialchars_decode($query);
	$query = strip_tags($query);
	$query = trim(preg_replace("/(\s+)+/", " ", $query));

	$names = explode(' ', $query);

	if(is_numeric($query)){
		$query_returned = mysqli_query($connection, "SELECT * FROM login WHERE (index_no LIKE '%$query%') LIMIT 2");
		
	}elseif(count($names) == 2) {
		$query_returned = mysqli_query($connection, "SELECT * FROM login WHERE (firstname LIKE '%$names[0]%' OR lastname LIKE '%$names[1]%') LIMIT 2");
	}else{
		$query_returned = mysqli_query($connection, "SELECT * FROM login WHERE (firstname LIKE '%$names[0]%' OR lastname LIKE '%$names[0]%') LIMIT 2");
	}

	if($query_returned !== ""){

		while($row = mysqli_fetch_array($query_returned)){
			$firstname = $row['firstname'];
			$lastname = $row['lastname'];
			$index_no = $row['index_no'];

			echo "<div class='search-results'>
					<div class='reslut-page-name'>
						<div class='result-line'>" . $firstname ." " . $lastname . " " . $index_no . "  </div> 
					</div>
				</div>";
		}

	}

}
	
	



?>




            <!--  <script>
                    $(document).ready(function(){
                        $('#<?php //echo $index_no ?>').on('click', function() {
                            confirm("Are you sure you want to delete this post?", function() {
                                <?php
                                    $query_del //= mysqli_query($connection, "DELETE FROM login WHERE index_no = 
                                        //$index_no;

                                        ?>
                                 window.reload();
                            });

                        });
                    });
                    
                </script> -->
                
