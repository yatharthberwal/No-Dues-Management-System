<?php
include("connection.php");
$check = "select count(`apply_user`) from `no_dues`.`users` where `apply_user`=1 ";
$output = mysqli_query($conn, $check);
$row2 = mysqli_fetch_array($output);
$total1 = $row2[0];
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-spale=1">
	<title>Department</title>
	<!---title logo--->
	<link rel="shortcut icon" type="image/png" href="N.png" style="border-radius: 50%;" />
	<!------end----->
	<link rel="stylesheet" type="text/css" href="Department_main.css">
</head>

<body>
	<div class="sidebar-menu">
		<ul>
			<li>
				<a href=""><span class="las la-clipboard-list"></span>
					<span>Applied Form</span></a>
			</li>
			<div class="card-body">
				<li>
					<a href="logout.php"><span class="las la-user-circle"></span>
						<span>Logout</span></a>
				</li>
		</ul>
	</div>
	</div>
	<div class="main-content">
		<main>
			<div class="cards">
				<div class="card-single">
					<div>
						<h3><?php echo $total1 ?></h3>
						<span>Applied Form</span>
					</div>
					<div>
						<span class="las la-clipboard-list"></span>
					</div>
				</div>
			</div>

			<div class="recent-grid">
				<div class="application">
					<div class="card-body">
						<div class="table-responsive">
							<div class="card-header">
								<h2>Applied Forms</h2>
								<button>See all the applied forms<span class="las la-arrow-right"></span></button>
							</div>

							<table style=" text-align: center">
								<thead style="font-weight: bolder; background-color: #000000; color: #fff;">
									<tr style="color: #fff;">
										<td>S.No.</td>
										<td>Name</td>
										<td>Reg No.</td>
										<td>Course</td>
										<td>Department</td>
										<td>E-mail</td>
										<td>Approve</td>
									</tr>
								</thead>

								<tbody>
									<?php
									$i1 = 0;
									$sql2 = "select * from `no_dues`.`users` where `apply_user` = 1 order by `reg`";
									$result4 = mysqli_query($conn, $sql2);
									while ($rows6 = mysqli_fetch_array($result4)) {
										$i1++;
									?>

										<tr>
											<td><?php echo $i1; ?></td>
											<td><?php echo $rows6['Name']; ?></td>
											<td><?php echo $rows6['reg']; ?></td>
											<td><?php echo $rows6['course']; ?></td>
											<td><?php echo $rows6['Department']; ?></td>
											<td><?php echo $rows6['mail']; ?></td>
											<?php $d = 0;
											$d = $rows6['Approve']; ?>
											<td>
												<form style="text-align: center;" method="post">

													<input type="submit" <?php if ($d) { ?> style="visibility: hidden;" <?php } ?> name="<?php echo $rows6['reg']; ?>" value="Approve" style="background-color: #4cbb17; border: hidden; border-radius: 5px; font-size: 1rem; margin: 3px; padding: 7px; color: white;" />

													<input type="submit" <?php if ($rows6['Approve']) { ?> style="visibility: hidden;" <?php } ?> <?php if ($d) { ?> style="visibility: hidden;" <?php } ?> name="<?php echo $rows6['apply_user']; ?>" value="Disapprove" style="background-color:red; opacity: 90%; border: hidden; border-radius: 5px; font-size: 1rem; margin: 3px; padding: 7px; color: white ;" />

													<?php
													if ($rows6['Approve'] == 1) {
														$statement = "APPROVED";
													}
													if ($rows6['Approve'] == 2) {
														$statement = "DISAPPROVED";
													}

													?>

													<p <?php if (!$rows6['Approve'] == 1) { ?> style="visibility: hidden;" <?php } ?>> <?php echo $statement; ?></p>

												</form>
											</td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
</body>

</html>
<?php
/*==============   Approval ======================*/
$sql6 = "select * from `no_dues`.`users` where `apply_user` = 1 order by `reg`";
$result6 = mysqli_query($conn, $sql6);

while ($rows6 = mysqli_fetch_array($result6)) {
	$reg = $rows6["reg"];
	if (isset($_POST[$reg])) {
		$app = "update `no_dues`.`users` set `Approve` = 1 where `reg` = '$reg'";
		$result7 =  mysqli_query($conn, $app);

		if ($result7) {
			echo "<script> alert('Approved')</script>";
		} else {
			echo "<script> alert('Failed')</script>";
		}
	}
}
?>