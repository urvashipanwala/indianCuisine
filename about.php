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
    <title>About</title>
    <!-- Header of the page -->
    <?php
    include("header.php");
    ?>

    <!-- Content of the body -->
    <div class="container">
        <section class="blocktitle">
            <div class="aboutRow" >
                <div class="column" style="width: 30%; float: left; margin-top: 75px;">
                    <!-- Profile photo -->
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="images/IC_logo.jpg" alt="" class="profilePhoto">
                            </div>
                            <div class="flip-box-back">
                                <img src="images/profile_1.jpg" alt="" class="profilePhoto">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns" style="width: 65%; float: right; margin-top: 75px;">
                    <!-- Identity details -->
                    <section>
                        <h1 class="sectionTitle">Urvi Panwala</h1>
                        <h3>WEB DESIGNER</h3>
                        <hr class="sectionTitleRule2">
                        <p>I am not a professional web designer. Currently I am a student at Gateway Community College with major in Computer Science. This is my Second Year in this college studying different types of coding languages like C++, JAVA, PHP, Database, JavaScript, Html, and many more. This is my first website of my life which I created using some of the coding languages listed above. As web designing says designing website with some creative ideas, I usually like to keep the design very simple and attarctive. Using my creativity and this website as a starting point I would like to create many more website in my future life. </p>
                    </section>
                </div>
            </div>

            <!-- content -->
            <section class="mainContent">
                <!-- Contact details -->
                <section class="section1">
                    <h2 class="sectionTitle" id="contact" name="contact">Contact</h2>
                    <hr class="sectionTitleRule">
                    <hr class="sectionTitleRule2">
                    <div class="section1Content">
                        <p><span>Email :</span> urvipanwala@email.com</p>
                        <p><span>Website :</span> indiancuisine.com</p>
                        <p><span>Phone :</span> (123)456 - 789000</p>
                        <p><span>Address :</span> Stratford, Connecticut</p>
                    </div>
                </section>
                <!-- Website details -->
                <section class="section2" style="padding-bottom: 50px">
                    <h2 class="sectionTitle">About </h2>
                    <hr class="sectionTitleRule">
                    <hr class="sectionTitleRule2">
                    <article class="section2Content">
                        <h2 class="sectionContentTitle">Indian Cuisine</h2>
                        <h3 class="sectionContentSubTitle">Recipe website / March - 2019</h3>
                        <p class="sectionContent"> As Grandmother's and Mom's are inspiration to every girl, the web designer was inspired by her grandmother's food. this inspiration was the reason of creating this website. The web designer wanted to share that inspiration to everyone and she wants to eat those yummy food not alone but with the whole world. So using this website, everyone who really want to have tasty food which has that old times fragrance and taste can find the recipes and enjoy it at ther own comfort. </p>
                        <p class="sectionContent"> This website includes different pages with different type of content. Like, the all recipes page includes variety of indian dishes with a small description and later connected to the page having details recipe of each individual dishes. It also has a spice pantry page which contains a shorthand explanation of spices used in different parts of india.</p>
                        <p class="sectionContent"> As we can see this website is all about India, there is a special blog page which includes the blogs, made on the top special picked by the website owner, which talks about either the culture, dresses, festivals, beliefs, food, or anything about India. Blog page is made to let users the ability to get some more knowledge about India without going  all the way to India.</p>
                        <p class="sectionContent"> This website is a combined package of description about indian recipes, indian spices, and all about indian culture and religion. In addition to all this pages, it also has a feature of subscription. Using this form a user can subscribe to this website and can get notification update if a new entry is made anywhere in this entire website.</p>
                    </article>
                </section>
            </section>
        </section>
    </div>

    <!-- Instagram update -->
    <Section class="niw-instagram">
        <ul class="niw-instagram-wrapper">
            <li>
                <a href="indianFestivChaitraNavratri.php" target="_self"><img src="https://im.newsheads.in/media/thumbs/2018/03/17/974812642-durga-puja_1200x675.jpg" alt="" style="width: 300px; height: 200px;"/></a>
            </li>
            <li>
                <a href="GobiManchurian.php" target="_self"><img src="images/INCREDIBLE-Red-Curry-Cauliflower-with-Green-Chutney-Spicy-savory-SO-satisfying-easy-to-make-vegan-glutenfree-curry-indian-recipe-cauliflower.jpg" alt="" style="width: 301px; height: 200px;"/></a>
            </li>
            <li>
                <a href="SpicePantry.php" target="_self"><img src="images/Green-Chilli_0037.jpg" alt="" style="width: 301px; height: 200px;"/></a>
            </li>
            <li>
                <a href="SpicePantry.php" target="_self"><img src="images/Turmeric_Powder_Bowl-1296x728-Body1.jpg" alt="" style="width: 301px; height: 200px;"/></a>
            </li>
            <li>
                <a href="TandooriFishTikka.php" target="_self"><img src="images/Tandoori-Fish-Tikka-1-1024x683.jpg" alt="" style="width: 301px; height: 200px;"/></a>
            </li>
        </ul>
    </Section>

    <!-- Subscription Form-->
    <hr>
    <section class="subscribe-footer" id = "subscribe">
        <!--If form not submit show form-->
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