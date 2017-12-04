<?php
include ("includes/includedFiles.php");



?>
<div class="userDetails">
        <div class="container borderBottom">
            <h2>Email</h2>
            <input type="text" class="email" name="email" placeholder="email adress" value="<?php echo $userLoggedIn->getEmail(); ?>">
            <span class="message"></span>
            <button class="button" onclick="updateEmail('email')">SAVE</button>
        </div>
    <div class="container">
        <h2>Password</h2>
        <input type="text" class="oldPassword" name="oldPassword" placeholder="current Password">
        <input type="text" class="newPassword1" name="newPassword1" placeholder="New Password">
        <input type="text" class="newPassword2" name="newPassword2" placeholder="Confirm Password">
        <span class="message"></span>
        <button class="button" onclick="updatePassword('oldPassword', 'newPassword1', 'newPassword2')">SAVE</button>
</div>
</div>
