<?php require_once("assets/header.php"); ?>


    <section class="login-section">
        <div class="login-form">
            <form action="login_core.php" method="POST"> 
                <table>
                    <a href="index.php" class="login-btn">Back</a>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="email" name="email" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input class="login-btn login-btn1" type="submit" name="submit-btn" value="login">
                            <input class="login-btn login-btn1" type="reset" name="reset-btn" value="clear">
                        </td>
                    </tr>
                    <tr>
                        <?php 
                            if(isset($_REQUEST['data_not_match'])) {
                                echo "<font color='red'>Please write correct password or email !</font>";
                            }
                        ?>
                    </tr>
                </table>
            </form>
        </div>
    </section>



<?php require_once("assets/footer.php"); ?>