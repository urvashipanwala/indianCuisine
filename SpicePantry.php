<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Spice Pantry</title>
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
                    <h1>Spice Pantry</h1>
                </td>
            </tr>
            <!-- Tag Line for this page -->
            <tr>
                <td colspan="3" class="hero_header"><h5>"The secret of happiness is variety, but the secret of variety, like the secret of all spices, is knowing when to use it." </h5>
                </td>
            </tr>
            </thead>

            <tbody>
            <!-- sql query to select all data -->
            <?php
            $sql = "Select * from project.spice_entries";
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
                            <p style="text-align: center"><img src="<?php echo $row['spice_image']; ?>" alt="" style="width: 300px; height: 300px;"/></p>
                            <h4 style="text-align: center"><?php echo $row['spice_name']; ?><br/><?php echo $row['spice_suffix']; ?></h4>
                            <p><?php echo $row['spice_description']; ?></p>
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