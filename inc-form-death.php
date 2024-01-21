<div class="col-md-5 col-sm-12 d-flex flex-column justify-content-center align-content-center pb-4">
    <form enctype="multipart/form-data" action="<?php echo esc_url(home_url('/')); ?>formularz-zadoscuczynienie/" method="post">

        <div class="mb-4">
            <label for="death-date" class="form-label">Kiedy miał miejsce wypadek</label>
            <div class="input-group">
                <input type="date" class="form-control" name="death-date" id="death-date" aria-label="Data śmierci" aria-describedby="Data śmierci" required>
            </div>
        </div>

        <div class="mb-4">
            <label for="family-type" class="form-label">Stopień pokrewieństwa*</label>
            <input class="form-control" list="family-list" name="family-type" id="family-type" required>
            <datalist id="family-list">
                <option value="Żona / mąż">Żona / mąż</option>
                <option value="Partnerka / partner">Partnerka / partner</option>
                <option value="Córka / syn">Córka / syn</option>
                <option value="Matka / ojciec">Matka / ojciec</option>
                <option value="Siostra / brat">Siostra / brat</option>
                <option value="Babcia / dziadek">Babcia / dziadek</option>
                <option value="Wnuczek / wnuczka">Wnuczek / wnuczka</option>
                <option value="Inny stopień pokrewieństwa">Inny stopień pokrewieństwa</option>
            </datalist>
        </div>

        <div class="mb-4">
            <label for="relation" class="form-label">Jakie miałeś więzi emocjonalne ze zmarłym?*</label>
            <input type="text" class="form-control d-none" name="relation" id="relation" value="Silne" required>
            <div class="btn-group btn-group-lg w-100" role="group" aria-label="Large button group">
                <button type="button" class="btn btn-outline-primary button-choser">Bardzo silne</button>
                <button type="button" class="btn btn-outline-primary button-choser active">Silne</button>
                <button type="button" class="btn btn-outline-primary button-choser">Normalne</button>
            </div>
        </div>

        <div class="mb-4">
            <label for="living-status" class="form-label">Czy mieszkałeś ze zmarłym?*</label>
            <input type="text" class="form-control d-none" name="living-status" id="living-status" value="NIE">
            <div class="btn-group btn-group-lg w-100" role="group" aria-label="Large button group">
                <button type="button" class="btn btn-outline-primary button-choser">TAK</button>
                <button type="button" class="btn btn-outline-primary button-choser active">NIE</button>
            </div>
        </div>

        <div class="mb-4">
            <label for="medic-treatment" class="form-label">Czy po utracie osoby najbliższej przyjmowałeś leki?*</label>
            <input type="text" class="form-control d-none" name="medic-treatment" id="medic-treatment" value="NIE">
            <div class="btn-group btn-group-lg w-100" role="group" aria-label="Large button group">
                <button type="button" class="btn btn-outline-primary button-choser">TAK</button>
                <button type="button" class="btn btn-outline-primary button-choser active">NIE</button>
            </div>
        </div>

        <div class="mb-4">
            <label for="doctor" class="form-label">Czy korzystałeś z pomocy lekarza? Jakiego?*</label>
            <input type="text" class="form-control" name="doctor" id="doctor">
        </div>

        <div class="mb-4">
            <label for="personal-life" class="form-label">Jaki wpływ na twoje życie osobiste miała śmierć osoby najbliższej?*</label>
            <input type="text" class="form-control d-none" name="personal-life" id="personal-life" value="Brak">
            <div class="btn-group btn-group-lg w-100" role="group" aria-label="Large button group">
                <button type="button" class="btn btn-outline-primary button-choser">Duży</button>
                <button type="button" class="btn btn-outline-primary button-choser">Mały</button>
                <button type="button" class="btn btn-outline-primary button-choser active">Brak</button>
            </div>
        </div>

        <div class="mb-4">
            <label for="professional-life" class="form-label">Jaki wpływ na twoje życie zawodowe miała śmierć osoby najbliższej?*</label>
            <input type="text" class="form-control d-none" name="professional-life" id="professional-life" value="Brak">
            <div class="btn-group btn-group-lg w-100" role="group" id="btn-section" aria-label="Large button group">
                <button type="button" class="btn btn-outline-primary button-choser">Duży</button>
                <button type="button" class="btn btn-outline-primary button-choser">Mały</button>
                <button type="button" class="btn btn-outline-primary button-choser active">Brak</button>
            </div>
        </div>

        <div class="mb-4">
            <label for="age" class="form-label">Ile miałeś lat w chwili śmierci osoby najbliższej?*</label>
            <input type="text" class="form-control" name="age" id="age">
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