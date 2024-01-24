<form style="background-color: rgba(255,255,255,0.05);" class="row px-md-5" enctype="multipart/form-data" method="post" action="/dziekujemy-za-kontakt/">
    <p class="fs-3 text-left text-black">Formularz kontaktowy</p>
    <div class="col-md-12 mt-1">
        <label for="clientname" class="form-label text-muted">Imię i nazwisko*</label>
        <input name="clientname" id="clientname" type="text" class="form-control form-control-lg text-primary rounded-0" style="background:transparent; border:none; border-bottom:1px solid #002855;" required>
    </div>
    <div class="col-12 mt-1">
        <label for="email" class="form-label text-muted">Email*</label>
        <input name="email" id="email" type=" email" class="form-control form-control-lg text-primary rounded-0" style="background:transparent; border:none; border-bottom:1px solid #002855;" required>
    </div>
    <div class="col-12 mt-1">
        <label for="phone" class="form-label text-muted">Telefon*</label>
        <input name="phone" id="phone" type="text" class="form-control form-control-lg text-primary rounded-0" style="background:transparent; border:none; border-bottom:1px solid #002855;" required>
    </div>
    <div class="col-md-12 mt-1">
        <label for="info" class="form-label text-muted">Wiadomość</label>
        <textarea name="info" id="info" class="form-control form-control-lg text-primary rounded-0" style="background:transparent; border:none; border-bottom:1px solid #002855;"></textarea>
    </div>
    <div class="col-12">
        <div class="form-check my-3">
            <input class="form-check-input" type="checkbox" name="consent" id="consent" required style="border-color: rgba(0,0,0, 0.45);">
            <label class="form-check-label" for="consent">
                *Akceptuję <a class="text-primary" href="<?php echo esc_url(home_url('/')); ?>polityka-prywatnosci">Politykę prywatności</a>
            </label>
            <p class="small text-muted py-2">* Pola wymagane</p>
        </div>
    </div>
    <div class="col-12 mt-2">
        <button type="submit" class="w-100 btn btn-primary">WYŚLIJ FORMULARZ</button>
    </div>
</form>