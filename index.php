
<?php
// Declare variable
$first_name = $_REQUEST['firstName'];
$last_name = $_REQUEST['lastName'];
$email= $_REQUEST['emailAddress'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Indian Cuisine</title>
    <!-- Header of the page-->
    <?php
    include("header.php");
    ?>

    <!-- Tag line of the page -->
    <div>
        <section class="hero" style="background-image: url(images/img02Blur01.jpg);" id="hero">
            <h1 class="hero_header">“Cooking is like love. <br/>It should be entered into with abandon or not at all.” </h1>
            <p class="tagline"><br/>-Harriet van Horne</p>
        </section>
    </div>

    <!-- Page Content -->
    <div class="container">

        <!-- Three Popular recipes from all recipes-->
        <section>
            <div class="blocktitle">
                <div class="column_half left_half">
                    <h3 class="column_title">&nbsp;&nbsp;Popular Recipes</h3>
                </div>
                <div class="column_half right_half">
                    <h3 class="column_title"><a href="AllRecipes.php">Show More</a>&nbsp;&nbsp;</h3>
                </div>
            </div>

            <!-- sql query to select all data -->
            <?php $sql = "Select * from project.recipe_entries order by rand()";
            $result = queryDatabase($sql);
            //$number = mysqli_num_rows($result);
            ?>
            <div class="row">
                <?php // Iteration to print data in separate columns
                for($c =1; $c <4; $c++) {?>
                    <div class="columns" >
                        <?php // Variable to fetch data individual data
                        $row = mysqli_fetch_array($result); ?>
                        <a href="<?php echo $row['recipe_link']; ?>"><p class="thumbnail_align"><img src="<?php echo $row['recipe_image']; ?>" alt="" class="thumbnail" /></p></a>
                        <a href="<?php echo $row['recipe_link']; ?>"><h4 style="text-align: center"><?php echo $row['recipe_name']; ?></h4></a>
                        <p><?php echo $row['recipe_description']; ?></p>
                    </div>
                <?php } ?>
            </div>
        </section>

        <!-- Three Popular spices from all spices -->
        <section>
            <div class="blocktitle">
                <div class="column_half left_half">
                    <h3 class="column_title">&nbsp;&nbsp;Popular Spices</h3>
                </div>
                <div class="column_half right_half">
                    <h3 class="column_title"><a href="SpicePantry.php">Show More</a>&nbsp;&nbsp;</h3>
                </div>
            </div>

            <!-- sql query to select all data -->
            <?php $sql = "Select * from project.spice_entries order by rand()";
            $result = queryDatabase($sql);
            //$number = mysqli_num_rows($result);
            ?>
            <div class="row">
                <?php // Iteration to print data in separate columns
                for($c = 1; $c < 4; $c++) {?>
                    <div class="columns" >
                        <?php // Variable to fetch data individual data
                        $row = mysqli_fetch_array($result); ?>
                        <p class="thumbnail_align"><img src="<?php echo $row['spice_image']; ?>" alt="" class="thumbnail" /></p>
                        <h4 style="text-align: center"><?php echo $row['spice_name']; ?><br/><?php echo $row['spice_suffix']; ?></h4>
                        <p><?php echo $row['spice_description']; ?></p>
                    </div>
                <?php } ?>
            </div>
        </section>

        <!-- Popular blog -->
        <section>
            <!-- Block title -->
            <div class="blocktitle" >
                <div class="column_half left_half">
                    <h3 class="column_title">&nbsp;&nbsp;Popular Blog</h3>
                </div>
                <div class="column_half right_half">
                    <h3 class="column_title"><a href="Blogs.php" >Show More</a>&nbsp;&nbsp;</h3>
                </div>
            </div>
            <!-- Block content -->
            <div class="row">
                <div class="columns">
                    <a href="indianFestivChaitraNavratri.php"><p class="thumbnail_align"><img src="images/tag-chaitra-navratri.jpg" alt="" class="thumbnail" /></p></a>
                    <a href="indianFestivChaitraNavratri.php"><h4 style="text-align: center">CHAITRA NAVRATRI</h4></a>
                    <p>Festival of Devotion for Goddess Shakti...</p>
                </div>
                <div class="columns">
                    <p class="thumbnail_align"><img src="images/notavailable.jpg" alt="" class="thumbnail"/></p>
                    <h4 style="text-align: center">Coming Soon</h4>
                    <p>Will be available soon...</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Subscription Form-->
    <hr>
    <section class="subscribe-footer" id = "subscribe">
    <!-- If form not submit show form -->
        <?php
        if (!isset($_POST['submit']))
        {?>

            <div class="row">
                <div class="column_title"><h1 style="text-align: center; color: #828282; font-size: 40px;">Subscribe</h1></div>

                <p class="detail">Enter your details below to keep up to date with all my latest news and recipes.</p>
                <p class="small">Fields marked with an <span class="red small">*</span>asterisk are mandatory.</p>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="subscribe-form">
                    <!-- Textbox for first name -->
                    <input type="text" name="firstName" id="firstName" placeholder="Your First Name" class = "first-name" value="<?php echo $first_name; ?>" required/>
                    <?php if (empty($_POST['firstName'])) { echo '<span class="required" >*</span >'; } ?>
                    &nbsp;<!-- Textbox for last name -->
                    <input type="text" name="lastName" id="lastName" placeholder="Your Last Name"  value="<?php echo $last_name; ?>" class = "last-name" required/>
                    <?php if (empty($_POST['lastName'])) { echo '<span class="required" >*</span >'; } ?>

                    <br />
                    <!-- Input type email for email address -->
                    <input type="email" id="emailAddress" name="emailAddress" size="40" maxlength="60" placeholder="Email address" value="<?php echo $email; ?>" class = "email"/>
                    <?php if (empty($_POST['emailAddress'])) { echo '<span class="required" >*</span >'; } ?><br />

                    <!-- Submit Button -->
                    <input type="submit" name="submit" value="Subscribe" class="button"/>

                </form>
            </div>
            <?php
        }
        // else submit data to the database and check if email already exists
        else
        {
            $sql = "SELECT * FROM project.subscribe_details where e_mail = '$email'";
            $numberOfData = mysqli_num_rows(queryDatabase($sql));

            if($numberOfData == 1)
            {?>
                <div class="column_title"><h1 style=" text-align: center; color: #828282; font-size: 40px;">You already have subcribed!</h1></div>
            <?php }
            else
            {
                $sql = "INSERT INTO project.subscribe_details (first_name, last_name, e_mail) VALUES ('$first_name', '$last_name', '$email')";
                queryDatabase($sql);
                ?>
                <div class="column_title"><h1 style="text-align: center; color: #828282; font-size: 40px;">Thank You for Subscribing!</h1></div>
            <?php }}
        ?>

    </section>
    <hr>

<!-- Footer -->
<?php
include("footer.php");
?>