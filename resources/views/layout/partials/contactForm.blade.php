<form class="contrive-contact-form" method="post" action="mailer/sendemail.php">
    <div class="contrive-contact-form-result"></div>
    <div class="contrive-form-process"></div>
    <div class="contrive-row">
        <div class="contrive-col-4">
            <input type="text" value="" name="author" id="author" class="contrive-form-control required" placeholder="YOUR NAME">
        </div>
        <div class="contrive-col-4">
            <input type="email" value="" name="email" id="email" placeholder="YOUR EMAIL" class="contrive-form-control required email">
        </div>
        <div class="contrive-col-4">
            <input type="url" value="" name="url" id="url" placeholder="WEBSITE" class="contrive-form-control ignore">
        </div>
    </div>
    <textarea rows="7" cols="2" name="comment" id="comment" class="contrive-form-control required"></textarea>
    <input type="submit" value="Send Now" class="submit" id="submit" name="submit">
</form>
