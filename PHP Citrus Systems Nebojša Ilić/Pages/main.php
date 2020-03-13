<?php require '../Components/header.php';?>

<div class="card-deck">
<?php 
$num_cell = 4;
     $count_cell = 0;
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if($count_cell==0) {
                echo '<div class="row">';
            }
            echo '<div class="col-4 card_style">
                    <div class="card">
                        <img class="card-img-top" src="../Img/img.jpg" alt="image">
                    <div class="card-body">
                        <h5 class="card-title"> '. $row["TITLE"] .'</h5>
                         <p class="card-text"> '. $row["DESCR"] .'</p>
                     </div>
                </div>
                </div>'; 
                if($count_cell == 3 && $count_cell == 6){
                    echo '</div> <div class="row">';
                }
                $count_cell++;
                if($count_cell == 9) {
                    echo '</div>';
                }
            }
        }   
        else {
            echo "0 results";
        }
        $conn->close();
        ?>
</div>

<div class='comments'>
    <div class="row">
		<h2>Comments</h2>
	</div>
    <?php while($row = $result1->fetch_assoc()) {
        if($row['STATUS_com']==1) {
        ?>
	<hr>
	<div class="row comment">
	    <div class="col-12">
	        <small><strong class='user'><?php echo $row['USER'];?></strong></small>
	    </div>    
	    <p><?php echo $row['COMMENT'];?> </p>
    </div>
    <?php } }?>
    </div>

<?php require '../Components/add_comment.php';?>

<?php require '../Components/footer.php';?>

<!-- <img class="card-img-top" src="../Img/img.jpg" alt="Card image cap"> -->