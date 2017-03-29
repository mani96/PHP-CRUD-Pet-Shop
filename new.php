<?php
    include "header.php";

include "petform.php";

?>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h4>Add a new pet:</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <form method=post action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <table>
                           <tr>
                                <td><h6>Pet details:</h6></td>
                            </tr>
                            <tr>
                                <td>Pet Name:</td>
                                <td>
                                    <input type="text" name="petname" value="<?php echo $petname ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td>Category:</td>
                                <td>                         
                                    <select name="category">
                                       <option>Choose a breed...</option>
                                        <option <?php if (isset($category) && $category=="Dog") echo "selected";?> value="Dog">Dog</option>
                                        <option <?php if (isset($category) && $category=="Cat") echo "selected";?> value="Cat">Cat</option>
                                        <option <?php if (isset($category) && $category=="Bird") echo "selected";?> value="Bird">Bird</option>
                                        <option <?php if (isset($category) && $category=="Fish") echo "selected";?> value="Fish">Fish</option>
                                    </select>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Breed:</td>
                                <td>
                                    <input type="text" name="breed" value="<?php echo $breed ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td>Age:</td>
                                <td>
                                    <input type="text" name="age" value="<?php echo $age ?>"/>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Price:</td>
                                <td>
                                    <input type="number" name="price" value="<?php echo $price ?>" />
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