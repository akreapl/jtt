<div class="col-md-5 col-sm-12 d-flex flex-column justify-content-center align-content-center pb-4">
    <form enctype="multipart/form-data" action="<?php echo esc_url(home_url('/')); ?>formularze/formularz-kredytowy-potwierdzenie/" method="post">
        <div class="mb-4">
            <label for="bank" class="form-label">Bank, który udzielał kredytu</label>
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
                <input type="number" pattern="\{d}" class="form-control" id="credit-amount" name="credit-amount" aria-label="Kwota kredytu" aria-describedby="Kwota kredytu">
                <span class="input-group-text" id="credit-amount">CHF</span>
                <input type="text" class="d-none" name="currency" id="currency" value="CHF">
            </div>
        </div>

        <div class="mb-4">
            <label for="credit-installment" class="form-label">Ilość rat kredytu</label>
            <div class="input-group">
                <input type="number" pattern="\{d}" class="form-control" name="credit-installment" id="credit-installment" aria-label="Ilość rat kredytu" aria-describedby="Ilość rat kredytu">
                <span class="input-group-text">RAT</span>
            </div>
        </div>

        <div class="mb-4">
            <label for="credit-margin-yes-no" class="form-label">Czy znasz wysokość marży kredytu</label>
            <div class="input-group">
                <input type="radio" class="btn-check" name="credit-margin-yes" id="credit-margin-yes" autocomplete="off">
                <label class="btn btn-outline-primary mx-2" for="credit-margin-yes">TAK</label>

                <input type="radio" class="btn-check" name="credit-margin-no" id="credit-margin-no" autocomplete="off">
                <label class="btn btn-outline-primary mx-2" for="credit-margin-no">NIE</label>
            </div>
        </div>

        <div class="mb-4">
            <label for="credit-margin-value" class="form-label">Wysokość marży (w %)</label>
            <div class="input-group">
                <input type="number" pattern="^[0-9]*\.[0-9]{2}$" class="form-control" name="credit-margin-value" id="credit-margin-value" aria-label="Wysokość marży" aria-describedby="Wysokość marży">
                <span class="input-group-text">%</span>
            </div>
        </div>

        <div class="mb-4">
            <label for="reference-type" class="form-label">Rodzaj LIBOR</label>
            <input class="form-control" list="libor-list" name="reference-type" id="reference-type" placeholder="Podaj rodzaj LIBOR">
            <datalist id="libor-list">
                <option value="LIBOR 1M">LIBOR 1M</option>
                <option value="LIBOR 3M">LIBOR 3M</option>
                <option value="LIBOR 6M">LIBOR 6M</option>
                <option value="LIBOR 12M">LIBOR 12M</option>
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
            <p class="small text-muted py-2">* Pola wyamgane</p>
        </div>

        <button type="submit" class="btn btn-primary">
            WYŚLIJ
        </button>
    </form>
</div>

<?php include_once('inc-forms-script.php'); ?>