<form class="contrive-contact-form" method="post" action="{{ route('contact_send') }}">
    @csrf
    <div class="contrive-contact-form-result"></div>
    <div class="contrive-form-process"></div>
    <div class="contrive-row">
        <div class="contrive-col-4">
            <input type="text" value="" name="name" id="name" class="contrive-form-control required" placeholder="IMIĘ I NAZWISKO / FIRMA">
        </div>
        <div class="contrive-col-4">
            <input type="email" value="" name="email" id="email" placeholder="EMAIL" class="contrive-form-control required email">
        </div>
        <div class="contrive-col-4">
            <input type="url" value="" name="url" id="url" placeholder="TEL." class="contrive-form-control required">
        </div>
    </div>
    <textarea rows="7" cols="2" name="description" id="description" placeholder="WIADOMOŚĆ ..." class="contrive-form-control required"></textarea>
    <input type="submit" value="Send Now" class="submit" id="submit" name="submit">
</form>
