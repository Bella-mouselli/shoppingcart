<form action="" method="POST">
        <?php
            $category = array("Women" => 1, "Men" => 2, "Smycken" => 3);
            $Women_category = array("Sweater´s" => 1, "Pants" => 2, "Shoes" => 3);
            $Men_category = array("Sweaters´s" => 1, "Pants" => 2, "Shoes" => 3);
            $Smycken_category = array("Earings" => 1, "Rings" => 2, "Necklace" => 3);

            foreach($category as $main_cat => $value) {
                ?>
                    <input type="submit" name="main_category[<?= $value ?>]" value="<?= $main_cat ?>" /><br>
                <?php
            }

            if(isset($_POST["main_category"])) {
                echo "<br>";
                $categ = $_POST["main_category"];

                foreach($categ as $value => $name) {

                    if($value == 1) {
                        foreach($Women_category as $Women => $value) {
                            ?>
                                <input type="submit" name="sub_category[<?= $value ?>]" value="<?= $Women ?>" /><br>
                            <?php
                        }
                    } else if($value == 2) {
                        foreach($Men_category as $Men => $value) {
                            ?>
                                <input type="submit" name="sub_category[<?= $value ?>]" value="<?= $Men ?>" /><br>
                            <?php
                        }
                    } else if($value == 3) {
                        foreach($Smycken_category as $Smycken => $value) {
                            ?>
                                <input type="submit" name="sub_category[<?= $value ?>]" value="<?= $Smycken ?>" /><br>
                            <?php
                        }
                    }
                }
            }
        ?>
        </form> }

        

        