<form data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600" id="footer-form" class="contrive-newsletter" action="{{ route('contact_send') }}" method="post">
    <input id="footer-form-name" type="text" placeholder="IMIĘ I NAZWISKO / FIRMA" required>
    <input id="footer-form-email" type="email" placeholder="EMAIL" required>
    <textarea id="footer-form-description" cols="2" rows="2" placeholder="WIADOMOŚĆ ..." required></textarea>
    <input id="footer-form-submit" type="submit" value="Wyślij">
</form>
