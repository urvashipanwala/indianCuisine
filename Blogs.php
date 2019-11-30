<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Blogs</title>
    <!-- Header of the page -->
    <?php
    include("header.php");
    ?>

    <!-- Content of the body -->
    <div class="container">
        <section>

            <!-- Blog header-->
            <div style="text-align: center;font-size: 30px;color: #828282;" class="column_title">
                <h1>Blog Cabinet</h1>
            </div>
            <section class="hero" style="background-image: url(images/BeFunky-collage.jpg); height: 200px;">
                <h6 class="hero_header" style="font-size: 30px;">"Preservation of one's own culture does not require <br/>contempt or disrespect for other cultures."</h6>
            </section>

            <!-- Blog title-->
            <div class="blocktitle" id="1">
                <div class="column_half left_half">
                    <h2 class="column_title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chaitra Navratri</h2>
                </div>
                <div class="column_half right_half">
                    <h2 class="column_title">April 14, 2019 12:47 PM</h2>
                </div>
            </div>
            <!-- Short blog description -->
            <div class="row">
                <div class="BlogColumns">
                    <h3 style="text-align: left; color: lightslategray;"><i>Festival of Devotion for Goddess Shakti</i></h3>
                    <p>Navratri in Sanskrit means nine nights. These nine days of "Chaitra Navratri" celebrations are dedicated to nine avatars of Goddess Durga (also referred to as Shakti) who is believed to descend from heaven to stay with her devotees for these few auspicious days. Chaitra Navratri is a spring affair which is celebrated typically in the month of March and April. Many Hindus refrain from eating non-vegetarian food, drinking alcohol and even quit smoking. They consume light, sattvik food cooked without onion and garlic.</p>
                    <p><a href="indianFestivChaitraNavratri.php">More About Chaitra Navratri..</a></p>
                </div>
            </div>

            <!-- Custom code to add new entry-->
            <!-- Blog title -->
            <div class="blocktitle" id="2">
                <div class="column_half left_half">
                    <h2 class="column_title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blog Title</h2>
                </div>
                <div class="column_half right_half">
                    <h2 class="column_title">Date and time</h2>
                </div>
            </div>
            <!-- Short blog description -->
            <div class="row">
                <div class="BlogColumns">
                    <h3 style="text-align: left; color: lightslategray;"><i>Blog tag</i></h3>
                    <p>Blog description: Describe the Blog in 3-4 lines.</p>
                    <p><a href="custompage.php">Links</a></p>
                </div>
            </div>
        </section>
    </div>

<!-- Footer -->
<?php
include("footer.php");
?>