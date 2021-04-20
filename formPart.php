<?php 
include 'header.php' 
?>
<!-- creat a contact form partenaire -->
<div class="containerPart">
    <div class="leftPart">
        <h2 class="titlePart">Get in Touch</h2>
        <p class="description part">Sed ut perspiciatis unde omnis iste natus error sit volupatem accusantium dolorem laudantium totam</p>
        <div calss="formPart">
            <form method = "post">
                <div><input class="inputPartName" type="name" placeholder="Your Name" name="your Name" id="namePart"></div>
                <div><input class="inputPartEmail" type="email" placeholder="Your Email" name="your Email" id="emailPart"></div>
                <div><input class="inputPartSubject" type="text" placeholder="Subject" name="your Subject" id="subjetPart"></div>
                <div><textarea class="inputPartMessage" type="text" placeholder="Your Message" id="messagePart"></textarea></div>
                <div class="buttonPart">Send Message</div>
            </form>
        </div>
    </div>
    <div class="imagePart">
        <img class="imagePart2" src="img/imagetemp.jpeg" alt="troti">
    </div>
</div>
<?php 
include 'footer.php' 
?>