<?php


$frmname = $frmphone = $frmemail = $frmcomment = "";
$frmnamemsg = $frmphonemsg = $frmemailmsg = $frmcommentmsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["frmname"])) {
    $frmnamemsg = "Name is required";
  } else {
    $frmname = test_input($_POST["frmname"]);
  }
  
  if (empty($_POST["frmphone"])) {
    $frmphonemsg = "phone is required";
  }elseif(!is_numeric($_POST['frmphone'])){
    $frmphonemsg = "enter only number";
  } else {
    $frmphone = test_input($_POST["frmphone"]);
  }

  if (empty($_POST["frmemail"])) {
    $frmemailmsg = "Email is required";
  }elseif(!filter_var($_POST['frmemail'], FILTER_VALIDATE_EMAIL)){
    $frmemailmsg = "invalid email";
  } else {
    $frmemail = test_input($_POST["frmemail"]);
  }
    
  

  if (empty($_POST["frmcomment"])) {
    $frmcommentmsg = "comment is required";
  } else {
    $frmcomment = test_input($_POST["frmcomment"]);
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

 
  
}
?>

<div class="contact_section layout_padding">
    <div class="container-fluid">
        <div class="contact_section_2">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="contact_taital">Get In Touch</h1>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id=" contactfrm"
                        name="contactfrm" onsubmit="return validate()">
                        <div class="mail_section_1">
                            <input type="text" class="mail_text" placeholder="Name" name="frmname" id="frmname"
                                onkeypress="return nameonly(event)">
                            <span id="frmnameerror" class="error"><?php echo $frmnamemsg;?></span><br>
                            <input type="text" class="mail_text" placeholder="Phone Number" name="frmphone"
                                id="frmphone" onkeypress="return phonevalidate(event)">
                            <span id="frmphoneerror" class="error"><?php echo $frmphonemsg; ?></span><br>
                            <input type="text" class="mail_text" placeholder="Email" name="frmemail" id="frmemail">
                            <span id="frmemailerror" class="error"><?php echo $frmemailmsg;?></span><br>
                            <textarea class="massage-bt" placeholder="Massage" rows="5" id="frmcomment"
                                name="frmcomment"></textarea>
                            <span id="frmcommenterror" class="error"><?php echo $frmcommentmsg;?></span><br>
                            <div class="elem-group">
                                <label for="captcha">Please Enter the Captcha Text</label>
                                <img src="captcha.php" alt="CAPTCHA" class="captcha-image"><i class="fas fa-redo refresh-captcha" aria-hidden="true"></i>
                                <br>
                                <input type="text" id="captcha" name="captcha_challenge" pattern="[A-Z]{6}">
                            </div>
                            <div class="send_bt"><input type="submit" value="Submit" name="frmsubmit" id="frmsubmit">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 padding_right0">
                    <div class="map_main">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France"
                                width="600" height="470" frameborder="0" style="border:0; width: 100%;"
                                allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>