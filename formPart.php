
<?php 
include 'headerClient.php' 
?>
<!-- creat a contact form partenaire -->
<div class="containerPart">
    <div class="leftPart">
        <h2 class="titlePart">Get in Touch</h2>
        <p class="textPart">Sed ut perspiciatis unde omnis iste natus error sit volupatem accusantium dolorem laudantium totam</p>
        <div calss="formPart">
            <form method = "post">
                <div><input class="inputPartName" type="name" placeholder="Your Name" name="your Name" id="namePart" required></div>
                <div><input class="inputPartEmail" type="email" placeholder="Your Email" name="your Email" id="emailPart" required></div>
                <div><input class="inputPartCompany" type="text" placeholder="Your Company" name="your Company" id="yourCompany" required></div>
                <div><input class="inputPartSubject" type="text" placeholder="Subject" name="your Subject" id="subjetPart" required></div>
                <div><textarea class="inputPartMessage" type="text" placeholder="Your Message" id="messagePart" required></textarea></div>
                <div class="buttonPart" type="submit">Send Message</div>
            </form>
        </div>
    </div>
    <div class="imagePart">
        <img class="imagePart2" src="img/contact-us.png" alt="contactez-nous-infinity-agency">
        <img class="imagePart3" src="img/infinity-agency.png" alt="infinity agency">
    </div>
</div>
<?php 
include 'footer.php' 
?>