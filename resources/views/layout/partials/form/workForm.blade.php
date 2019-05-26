<form class="contrive-contact-form" enctype="multipart/form-data" method="post" action="{{ route('work_send') }}">
    @csrf
    <div class="contrive-contact-form-result"></div>
    <div class="contrive-form-process"></div>
    <div class="contrive-row">
        <div class="contrive-col-4">
            <input type="text" value="" name="name" id="name" class="contrive-form-control required"
                   placeholder="IMIĘ I NAZWISKO">
        </div>
        <div class="contrive-col-4">
            <input type="email" value="" name="email" id="email" placeholder="EMAIL"
                   class="contrive-form-control ignore email">
        </div>
        <div class="contrive-col-4">
            <input type="url" value="" name="url" id="url" placeholder="TEL." class="contrive-form-control required">
        </div>
    </div>
    <textarea rows="7" cols="2" name="description" placeholder="WIADMOMOŚĆ ..." id="description"
              class="contrive-form-control ignore"></textarea>
    <div class="contrive-row">
        <div class="contrive-col-1 cv-label">
            <p>Dodaj CV</p>
        </div>
        <div class="contrive-col-4">
            <input type="file" name="file" id="url" class="contrive-form-control ignore" accept="application/pdf,application/msword,
  application/vnd.openxmlformats-officedocument.wordprocessingml.document">
        </div>
    </div>
    <input type="submit" value="Wyślij" class="submit" id="submit" name="submit">
</form>
