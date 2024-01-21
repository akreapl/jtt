<div class="col-md-5 col-sm-12 d-flex flex-column justify-content-center align-content-center pb-4">
    <form enctype="multipart/form-data" action="<?php echo esc_url(home_url('/')); ?>formularz-uszczerbek/" method="post">

        <div class="mb-4">
            <label for="accident-date" class="form-label">Kiedy miał miejsce wypadek</label>
            <div class="input-group">
                <input type="date" class="form-control" name="accident-date" id="accident-date" aria-label="Data wypadku" aria-describedby="Data wypadku" required>
            </div>
        </div>

        <div class="mb-4">
            <label for="age" class="form-label">Ile masz lat?*</label>
            <input type="text" class="form-control" name="age" id="age" required>
        </div>

        <div class="mb-4">
            <label for="hospital" class="form-label">Czy przebywałaś/przebywałeś w szpitalu?*</label>
            <input type="text" class="form-control d-none" name="hospital" id="hospital" value="NIE">
            <div class="btn-group btn-group-lg w-100" role="group" aria-label="Large button group">
                <button type="button" class="btn btn-outline-primary button-choser">TAK</button>
                <button type="button" class="btn btn-outline-primary button-choser active">NIE</button>
            </div>
        </div>

        <div class="mb-4">
            <label for="hospital-time" class="form-label">Jak długo trwał pobyt w szpitalu?*</label>
            <input type="text" class="form-control" name="hospital-time" id="hospital-time">
        </div>

        <div class="mb-4">
            <label for="mental-help" class="form-label">Czy korzystałeś z pomocy psychologa lub psychiatry?*</label>
            <input type="text" class="form-control d-none" name="mental-help" id="mental-help" value="NIE">
            <div class="btn-group btn-group-lg w-100" role="group" aria-label="Large button group">
                <button type="button" class="btn btn-outline-primary button-choser">TAK</button>
                <button type="button" class="btn btn-outline-primary button-choser active">NIE</button>
            </div>
        </div>

        <div class="mb-4">
            <label for="personal-life" class="form-label">Jaki wpływ na twoje życie osobiste miał wypadek?*</label>
            <input type="text" class="form-control d-none" name="personal-life" id="personal-life" value="Brak">
            <div class="btn-group btn-group-lg w-100" role="group" aria-label="Large button group">
                <button type="button" class="btn btn-outline-primary button-choser">Duży</button>
                <button type="button" class="btn btn-outline-primary button-choser">Mały</button>
                <button type="button" class="btn btn-outline-primary button-choser active">Brak</button>
            </div>
        </div>

        <div class="mb-4">
            <label for="professional-life" class="form-label">Jaki wpływ na twoje życie zawodowe miał wypadek?*</label>
            <input type="text" class="form-control d-none" name="professional-life" id="professional-life" value="Brak">
            <div class="btn-group btn-group-lg w-100" role="group" aria-label="Large button group">
                <button type="button" class="btn btn-outline-primary button-choser">Duży</button>
                <button type="button" class="btn btn-outline-primary button-choser">Mały</button>
                <button type="button" class="btn btn-outline-primary button-choser active">Brak</button>
            </div>
        </div>

        <div class="mb-4">
            <label for="injuries" class="form-label">Opisz uszkodzenia ciała, które odniosłaś/odniosłeś w trakcie wypadku</label>
            <textarea class="form-control" name="injuries" id="injuries" rows="3"></textarea>
        </div>

        <div class="mb-4">
            <label for="difficulties" class="form-label">Opisz, jakie trwałe skutki odczuwasz do dziś w związku z wypadkiem</label>
            <textarea class="form-control" name="difficulties" id="difficulties" rows="3"></textarea>
        </div>

        <div class="mb-4">
            <label for="clientname" class="form-label">Imię i nazwisko*</label>
            <input type="text" class="form-control" name="clientname" id="clientname" aria-describedby="Imię i nazwisko" placeholder="" required />
        </div>

        <div class="mb-4">
            <label for="email" class="form-label">Adres Email*</label>
            <input type="email" class="form-control" name="email" id="email" oninput="delayedValidateEmail()" aria-describedby="Adres Email" required>
            <p id="result" class="text-danger"></p>
        </div>

        <div class="mb-4">
            <label for="phone" class="form-label">Numer telefonu*</label>
            <input type="tel" class="form-control phone-mask" name="phone" id="phone" placeholder="___-___-___" minlength="11" maxlength="11" aria-describedby="Numer telefonu" required>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="consent" id="consent" required style="border-color: rgba(0,0,0, 0.45);">
            <label class="form-check-label" for="consent">
                *Akceptuję <a class="text-primary" href="<?php echo esc_url(home_url('/')); ?>polityka-prywatnosci">Politykę prywatności</a>
            </label>
            <p class="small text-muted py-2">* Pola wymagane</p>
        </div>

        <button type="submit" class="btn btn-primary">
            WYŚLIJ
        </button>
    </form>
</div>

<?php include_once('inc-forms-script.php'); ?>