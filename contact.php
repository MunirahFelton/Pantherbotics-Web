<?php
$PAGE_TITLE = 'Contact';
include_once 'header.inc';
?>
<div class="main">
    <h2 id="contactheader">Contact Form</h2>
    <div id="contactcontainer">
        <form action="mailto:cseabury@pacbell.net" method="post" enctype="text/plain"> <!-- Change after testing!!!! -->
            <label for="firstname"><b>First Name:</b></label>
            <input type="text" name="firstname" placeholder="Your name...">

            <label for="lastname"><b>Last Name:</b></label>
            <input type="text" name="lastname" placeholder="Your last name...">

            <label for="email"><b>Email:</b></label>
            <input type="text" name="email" placeholder="Your email address...">

            <label for="message"><b>Message:</b></label>
            <textarea name="message" placeholder="Any questions, concerns, comments..." style="height:100px"></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>
    <br>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="footer-icons" style="text-align: center; color:black; font-size:35pt;">
                    <a href="https://twitter.com/pantherbotics">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.facebook.com/Pantherbotics">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.instagram.com/pantherbotics">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="https://github.com/Pantherbotics">
                        <i class="fa fa-github" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.youtube.com/user/3863Pantherbotics">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.thebluealliance.com/team/3863">
                        <img src="assets/images/footer-icons/thebluealliance.svg" alt="The Blue Alliance"
                             style="width: 24pt;height: 36pt; filter: brightness(100);">
                    </a>
                    <!--<a href="https://frc-events.firstinspires.org/2019/team/3863">-->
                    <!--<img src="images/footer-icons/FIRST.svg" alt="FIRST"-->
                    <!--style="width: 47pt;height: 47pt; filter: brightness(100);">-->
                    <!--</a>-->
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
