<?php include "header.php"; ?>
    <main>
        <div id="contact-hero"></div>
        <h2>Contact Amanda Welch:</h2>
        <p class="contact-p">Required fields are marked with an asterisk *</p>
        <form id="contact-form" action="mailto:amanda.welch8998@mail.davistech.edu" method="post">
            <label for="myName">* Name: </label>
            <input type="text" name="myName" id="myName" placeholder="your name here" required>
            <label for="myEmail">* E-mail</label>
            <input type="email" name="myEmail" id="myEmail" placeholder="your email here" required>
            <label for="myReferral">How did you hear about us? </label>
            <input type="text" name="myReferral" id="myReferral" list="myReferrals">
                <datalist id="myReferrals">
                    <option>Google</option>
                    <option>Facebook</option>
                    <option>Bing</option>
                    <option>Friend</option>
                    <option>Radio Ad</option>
                </datalist>
            <label for="myComments">* Comments: </label>
            <textarea name="myComments" id="myComments" cols="20" rows="2" placeholder="your comment here"></textarea>
            <input id="submit" type="submit" value="Send Now">
        </form> <br>
        <p class="contact-p">Or email me at amanda@welch.com</p>
    </main>
<?php include "footer.php"; ?>
    