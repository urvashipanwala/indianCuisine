<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Recipes</title>
    <!-- Header of the page-->
    <?php
    include("header.php");
    ?>

    <!-- Content of the body -->
    <div class="container">

        <table>
            <thead>
            <!-- Title -->
            <tr>
                <td colspan="3" style="text-align: center;font-size: 30px;color: #828282;" class="column_title">
                    <h1>All Recipes</h1>
                </td>
            </tr>
            <!-- Tag Line for this page -->
            <tr>
                <td colspan="3" class="hero_header"><h5>"One cannot think well, love well, sleep well, if one has not dined well." </h5>
                </td>
            </tr>
            </thead>

            <tbody>
            <!-- sql query to select all data -->
            <?php
            $sql = "SELECT * FROM project.recipe_entries";
            $result = queryDatabase($sql);

            // Getting the number of records
            $number = mysqli_num_rows($result);

            // Iteration to create number of rows required
            for($r = 1; $r < (($number /3)+1); $r++) { ?>
                <tr class="row" >
                    <?php // Iteration to print data in separate columns
                    for($c =1; $c <4; $c++) {?>
                        <td class="columns" >
                            <?php // Variable to fetch individual data
                            $row = mysqli_fetch_array($result); ?>
                            <a href="<?php echo $row['recipe_link']; ?>"><p style="text-align: center"><img src="<?php echo $row['recipe_image']; ?>" alt="" style="width: 300px; height: 200px;"/></p></a>
                            <a href="<?php echo $row['recipe_link']; ?>"><h4 style="text-align: center"><?php echo $row['recipe_name']; ?></h4></a>
                            <p><?php echo $row['recipe_description']; ?></p>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

<!-- Footer -->
<?php
include("footer.php");
?>