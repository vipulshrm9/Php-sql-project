<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<div class="container">
    <?php
        if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
            include 'user.php';
            $user = new User();
            $conditions['where'] = array(
                'id' => $sessData['userID'],
            );
            $conditions['return_type'] = 'single';
            $userData = $user->getRows($conditions);
    ?>
	<style>
body {
    background-color: #99ff33;
}
    </style>
	<p align="right"><font face="Aharoni" size="3"><a href="userAccount.php?logoutSubmit=1" class="logout">Logout</a></font></p>
	<br></br>
	<br></br>
	<CENTER>
    <h2><font face="Baskerville Old Face FB" size="7">Welcome <?php echo $userData['first_name']; ?> !</font></h2>
    
    <div class="regisFrm">
        <font size="4"> 
		<p><b>Name: </b><?php echo $userData['first_name'].' '.$userData['last_name']; ?></p>
        <p><b>Email: </b><?php echo $userData['email']; ?></p>
        <p><b>Phone: </b><?php echo $userData['phone']; ?></p>
		</font>
		<p><b><font face="Georgia"><a href="file-uploading-with-php-and-mysql">Upload a File</a></font></b></p> 
		<p><b><font face="Georgia"><a href="file-uploading-with-php-and-mysql/view.php?page=1">View Uploaded Files</a></font></b></p> 
    </div>
	</CENTER>
    <?php }else{ ?>
	<font face="Baskerville Old Face" size="5">
	<style>
body {
    background-color: #99ff33;
}
    </style>
    <CENTER><h2 ><br></br>Login to Your Account</h2>
	</font>
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    <div class="regisFrm">
        <form action="userAccount.php" method="post">
            <input type="email" name="email" placeholder="EMAIL" required="">
            <input type="password" name="password" placeholder="PASSWORD" required="">
			<br></br>
            <div class="send-button">
                <input type="submit" name="loginSubmit" value="LOGIN">
            </div>
        </form>
        <p>Don't have an account? <a href="registration.php">Register</a></p>
    </div>
	</CENTER>
    <?php } ?>
</div>