<div class="container py-1">
    <div class="row">
        <div class="mt-5 mt-md-0 d-flex justify-content-start">
            <h2 class="text-primary fw-bold underline mt-5" style="font-size:2.0rem;">Zacznij współpracę</h2>
        </div>
        <div class="col-md-6 col-sm-12 mt-5 mt-md-5 pb-5 text-left text-primary d-flex flex-row flex-wrap justify-content-start align-items-start">
            <img src="<?php echo get_template_directory_uri(); ?>/img/img.webp" class="img-fluid rounded" />
        </div>
        <div class="col-md-5 col-sm-12 mt-5 mt-md-5 pb-5 d-flex flex-column flex-md-row justify-content-around text-left text-primary">
            <form style="background-color: rgba(255,255,255,0.05);" class="row p-5 newsimg" enctype="multipart/form-data" method="post" ref="form" action="/dziekujemy-za-kontakt/">
                <p class="fs-3">Wypełnij formularz - skontaktujemy się z Tobą</p>
                <div class="col-md-12 mt-1">
                    <label for="clientname" class="form-label text-muted">Imię i nazwisko*</label>
                    <input name="clientname" type="text" class="form-control form-control-lg text-primary rounded-0" style="background:transparent; border:none; border-bottom:1px solid #002855;" required>
                </div>
                <div class="col-12 mt-1">
                    <label for="email" class="form-label text-muted">Email*</label>
                    <input name="email" type="email" class="form-control form-control-lg text-primary rounded-0" style="background:transparent; border:none; border-bottom:1px solid #002855;" required>
                </div>
                <div class="col-12 mt-1">
                    <label for="phone" class="form-label text-muted">Telefon*</label>
                    <input name="phone" type="text" class="form-control form-control-lg text-primary rounded-0" style="background:transparent; border:none; border-bottom:1px solid #002855;" required>
                </div>
                <div class="col-md-12 mt-1">
                    <label for="message" class="form-label text-muted">Wiadomość</label>
                    <textarea name="message" class="form-control form-control-lg text-primary rounded-0" style="background:transparent; border:none; border-bottom:1px solid #002855;"></textarea>
                </div>
                <div class="col-12">
                    <div class="form-check mt-1">
                        <input name="acceptance" class="form-check-input text-primary" type="checkbox" required style="background:transparent; border:1px solid #002855;">
                        <label class="form-check-label" for="acceptance">
                            Akceptuję <a class="text-primary" href="polityka-prywatnosci">Politykę prywatności</a>
                        </label>
                    </div>
                </div>
                <div class="col-12 mt-2">
                    <button type="submit" class="w-100 btn btn-primary">WYŚLIJ FORMULARZ</button>
                </div>
            </form>
        </div>
    </div>
</div>