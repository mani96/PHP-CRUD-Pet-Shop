<?php
    include "header.php";
    include "customerform.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h4>Add a new customer:</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <form method=post action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <table>
                        <tr>
                            <td>
                                <h6>Customer details:</h6></td>
                        </tr>
                        <tr>
                            <td>Username:</td>
                            <td><input type="text" name="username" value="<?php echo $customerusername ?>" /></td>
                        </tr>
                        <tr>
                            <td>First name:</td>
                            <td>
                                <input type="text" name="firstname" value="<?php echo $firstname ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>Last name:</td>
                            <td>
                                <input type="text" name="lastname" value="<?php echo $lastname ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>
                                <input type="email" name="email" value="<?php echo $email ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name="btnInsert" value="Save" class="knap" />
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

    </body>

    </html>