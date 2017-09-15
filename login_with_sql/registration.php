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
    <br></br>
	<font face="Bradley Hand ITC" size="5">  
    <h1 style="color:blue;"><CENTER>Create a New Account</CENTER></h1>
	</font>
	<style>
body {
    background-color: #99ff33;
}
    </style>
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    <div class="regisFrm">
        <form action="userAccount.php" method="post">
		<CENTER>
            <input type="text" name="first_name" placeholder="FIRST NAME" required="">
			<br></br>
            <input type="text" name="last_name" placeholder="LAST NAME" required="">
			<br></br>
            <input type="email" name="email" placeholder="EMAIL" required="">
			<br></br>
            <input type="text" name="phone" placeholder="PHONE NUMBER" required="">
			<br></br>
            <input type="password" name="password" placeholder="PASSWORD" required="">
			<br></br>
            <input type="password" name="confirm_password" placeholder="CONFIRM PASSWORD" required="">
			<br></br>
            <div class="send-button">
                <input type="submit" name="signupSubmit" value="CREATE ACCOUNT">
		</CENTER>		
            </div>
        </form>
    </div>
</div>