<?php
/**
 * Users: Simão Henriques da Silva / Diego Pinto Tomaz / Marcos Valente da Silva
 * File : contact.php
 */
// tampon de flux stocké en mémoire
ob_start();
$title="DMS - Contact";
?>
<!-- contact section start -->
<div class="contact_section layout_padding">
    <div class="container-fluid">
        <h1 class="contact_taital">Contact Us</h1>
        <div class="contact_section_2">
            <div class="row">
                <div class="col-md-6">
                    <div class="image_7"><img src="view/images/img-7.png"></div>
                </div>
                <div class="col-md-6">
                    <div class="mail_section_1">
                        <input type="text" class="mail_text" placeholder="Your Name" name="Your Name">
                        <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number">
                        <input type="text" class="mail_text" placeholder="Email" name="Email">
                        <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                        <div class="send_bt"><a href="#">SEND</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact section end -->
<?php
//tampon de flux vidé de la mémoire
$content = ob_get_clean();
//appelle le fichier gabarit.php
require "gabarit.php";