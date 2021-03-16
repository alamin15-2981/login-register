<?php require_once("assets/header.php"); ?>



<section class="registration-section">
    <div class="registration-form">
        <form action="registration_core.php" method="POST" enctype="multipart/form-data"> 
            <table>
                <a href="login.php" class="login-btn">login</a>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td><input class="input1" type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input class="input1" type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input class="input1" type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td class="input2">
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="Others">Others
                    </td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td>:</td>
                    <td>
                        <select name="country" id="input2"> 
                            <option value="">Select Your Country</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="India">India</option>
                            <option value="America">America</option>
                            <option value="Russia">Russia</option>
                            <option value="England">England</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Photo</td>
                    <td>:</td>
                    <td><input class="input2" type="file" name="photo"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="input2">
                        <input type="submit" class="btn1" name="submit-btn" value="Register">
                        <input type="reset" class="btn1" name="reset-btn" value="Clear">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <?php 
                            if(isset($_REQUEST['empty_data'])){
                                echo "<font color='red'>Please fill up all input fields !</font>";
                            }else if(isset($_REQUEST['same_email'])){
                                echo "<font color='red'>You can't use one email more than one !</font>";
                            }else if(isset($_REQUEST['data_insert'])){
                                echo "<font color='green'>Data insert successfully !</font>";
                            }else if(isset($_REQUEST['data_not_insert'])){
                                echo "<font color='red'>Data not insert please try again !</font>";
                            }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</section>




<?php require_once("assets/footer.php"); ?>
    

   



