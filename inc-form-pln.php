<div class="col-md-5 col-sm-12 d-flex flex-column justify-content-center align-content-center pb-4">
    <form enctype="multipart/form-data" action="<?php echo esc_url(home_url('/')); ?>formularz-kredytowy-potwierdzenie/" method="post">
        <div class="mb-4">
            <label for="bank" class="form-label">Bank, który udzielał kredytu</label>
            <input type="text" class="form-control d-none" name="formtype" id="formtype" value="wibor">
            <input class="form-control" list="bank-list" name="bank" id="bank" placeholder="Wpisz nazwę banku">
            <datalist id="bank-list">
                <?php include_once('inc-forms-bank-list.php'); ?>
            </datalist>
        </div>

        <div class="mb-4">
            <label for="credit-year" class="form-label">Rok udzielenia kredytu</label>
            <input class="form-control" list="year-list" name="credit-year" id="credit-year" placeholder="Wpisz rok">
            <datalist id="year-list">
                <?php
                generate_years(2000);
                ?>
            </datalist>
        </div>

        <div class="mb-4">
            <label for="month" class="form-label">Miesiąc udzielenia kredytu</label>
            <input class="form-control" list="month-list" name="month" id="month" placeholder="Wpisz miesiąc">
            <datalist id="month-list">
                <?php
                generate_months();
                ?>
            </datalist>
        </div>

        <div class="mb-4">
            <label for="credit-amount" class="form-label">Kwota kredytu</label>
            <div class="input-group">
                <input type="number" pattern="\{d}" min="1000" class="form-control" id="credit-amount" name="credit-amount" aria-label="Kwota kredytu" aria-describedby="Kwota kredytu">
                <span class="input-group-text" id="credit-amount">PLN</span>
                <input type="text" class="d-none" name="currency" id="currency" value="PLN">
            </div>
        </div>

        <div class="mb-4">
            <label for="credit-installment" class="form-label">Okres kredytowania</label>
            <div class="input-group">
                <input type="number" pattern="\{d}" min="1" class="form-control" name="credit-installment" id="credit-installment" aria-label="Ilość rat kredytu" aria-describedby="Ilość rat kredytu">
                <span class="input-group-text">MIES.</span>
            </div>
        </div>

        <div class="mb-4">
            <label for="credit-margin-yes-no" class="form-label">Czy znasz wysokość marży kredytu</label>
            <input type="text" class="form-control d-none" name="credit-margin-yes-no" id="credit-margin-yes-no" value="TAK">
            <div class="btn-group btn-group-lg w-100" role="group" aria-label="Large button group">
                <button type="button" class="btn btn-outline-primary button-choser active">TAK</button>
                <button type="button" class="btn btn-outline-primary button-choser">NIE</button>
            </div>
        </div>

        <div class="mb-4">
            <label for="credit-margin-value" class="form-label">Wysokość marży (w %), np. 1.25</label>
            <div class="input-group">
                <input type="number" pattern="^[0-9]*\.[0-9]{2}$" min="0.01" step="0.01" class="form-control" name="credit-margin-value" id="credit-margin-value" aria-label="Wysokość marży" aria-describedby="Wysokość marży">
                <span class="input-group-text">%</span>
            </div>
        </div>

        <div class="mb-4">
            <label for="reference-type" class="form-label">Rodzaj WIBOR, np. WIBOR 3M</label>
            <input class="form-control" list="wibor-list" name="reference-type" id="reference-type" placeholder="Podaj rodzaj WIBOR">
            <datalist id="wibor-list">
                <option value="WIBOR 1M">WIBOR 1M</option>
                <option value="WIBOR 3M">WIBOR 3M</option>
                <option value="WIBOR 6M">WIBOR 6M</option>
                <option value="WIBOR 12M">WIBOR 12M</option>
            </datalist>
        </div>

        <div class="mb-4">
            <label for="clientname" class="form-label">Imię i nazwisko</label>
            <input type="text" class="form-control" name="clientname" id="clientname" aria-describedby="Imię i nazwisko" placeholder="" required />
        </div>

        <div class="mb-4">
            <label for="email" class="form-label">Adres Email</label>
            <input type="email" class="form-control" name="email" id="email" oninput="delayedValidateEmail()" aria-describedby="Adres Email" required>
            <p id="result" class="text-danger"></p>
        </div>

        <div class="mb-4">
            <label for="phone" class="form-label">Numer telefonu</label>
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