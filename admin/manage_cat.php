<?php
	include "header1.php";
?>
	<div id="page-wrapper">
		<div class="graphs">
			<h3 class="blank1">MANAGE WORKOUT CATEGORY</h3>
			<div class="xs tabls">
				<div class="bs-example4" data-example-id="contextual-table">
					<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
						<tr>
							<th><center>Sr No</center></th>
							<th><center>Name</center></th>
							<th><center>Edit</center></th> 
							<th><center>Delete</center></th>
						</tr>
						</thead>
					<tbody>
					<?php
                        $seq=1;
                        $qry1="SELECT * FROM tbl_cat WHERE cat_status='1'";
                        $run1=mysqli_query($con,$qry1);
                        while($result1=mysqli_fetch_array($run1))
                        {
					?>
                    <tr>
                        <td><?php echo $seq; ?></td>
                        <td><?php echo $result1['cat_name']; ?></td>
						<td><a href="edit_cat.php?id=<?php echo $result1['cat_id'];?>" class="btn btn-success btn-circle btn"><i class="fa fa-edit"></i></a></td>
                        <td><a href="?del=<?php echo $result1['cat_id'];?>" onclick="return confirm(' Sure to Delete..?');" class="btn btn-danger btn-circle btn"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <?php
                        $seq++;
                        }
                        if(isset($_GET['del']))
                        {
                            // $sql="DELETE FROM tbl_news WHERE news_id=".$_GET['del']."";
                            $sql="UPDATE tbl_cat SET cat_status='0' WHERE cat_id=".$_GET['del']."";
                            $resultt=mysqli_query($con,$sql);
                            if($resultt)
                            {
                                echo ("<script>location.href='manage_cat.php'</script>");
                            }
                        }
                    ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php
	include "footer1.php";
?>