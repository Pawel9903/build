<form class="contrive-newsletter" action="{{ route('contact_send') }}" method="get">
    <input type="text" placeholder="IMIĘ I NAZWISKO / FIRMA">
    <input type="email" placeholder="EMAIL">
    <textarea cols="2" rows="2" placeholder="WIADOMOŚĆ ..."></textarea>
    <input type="submit" value="Wyślij">
</form>