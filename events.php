<?php
header("Access-Control-Allow-Origin: *");
$PAGE_TITLE = 'Events';
include_once 'header.inc';
?>
<div class="container">
    <iframe id="event-calendar" src="/gen-color-cal.php" frameborder="0" scrolling="no"></iframe>
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
<script>
    // console.log($("iframe").contents());
    // const $head = $("iframe").contents().find("head");
    // console.log($head);
    // $head.append($("<link/>",
    //     {rel: "stylesheet", href: "/assets/stylesheets/cal.css", type: "text/css"}));
    const cssLink = document.createElement("link");
    cssLink.href = "/assets/stylesheets/cal.css";
    cssLink.rel = "stylesheet";
    cssLink.type = "text/css";
    console.log(document.getElementsByTagName('iframe')[0]);
    document.getElementsByTagName('iframe')[0].document.body.appendChild(cssLink);

</script>
</body>
</html>