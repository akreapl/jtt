<div class="col-md-5 col-sm-12 d-flex flex-column justify-content-center align-content-center">
    <form enctype="multipart/form-data" action="<?php echo esc_url(home_url('/')); ?>formularze/formularz-kredytowy-potwierdzenie" method="post" ref="form">
        <div class="mb-3">
            <label for="bank" class="form-label">Bank, który udzielał kredytu</label>
            <input class="form-control" list="bank-list" id="bank" placeholder="Wpisz nazwę banku">
            <datalist id="bank-list">
                <option value="mBank S.A. (następca prawny BRE Bank S.A., Multibank S.A.)">mBank S.A. (następca prawny BRE Bank S.A., Multibank S.A.)</option>
                <option value="Bank Millennium S.A. (następca prawny Eurobank S.A.)">Bank Millennium S.A. (następca prawny Eurobank S.A.)</option>
                <option value="Bank BPH S.A. (następca prawny GE Money Bank S.A.)">Bank BPH S.A. (następca prawny GE Money Bank S.A.)</option>
                <option value="Raiffeisen International AG (następca prawny Raiffeisen Bank Polska S.A., EFG Eurobank  Ergasias S.A. występujący także pod marką Polbank)">Raiffeisen International AG (następca prawny Raiffeisen Bank Polska S.A., EFG Eurobank Ergasias S.A. występujący także pod marką Polbank)</option>
                <option value="Getin Noble Bank S.A.(następca prawny Getin Bank S.A., Metrobank S.A., DomBank S.A.)">Getin Noble Bank S.A.(następca prawny Getin Bank S.A., Metrobank S.A., DomBank S.A.)</option>
                <option value="Santander Consumer Bank S.A (następca prawny PTF Bank S.A.)">Santander Consumer Bank S.A (następca prawny PTF Bank S.A.)</option>
                <option value="Santander Bank Polska S.A (następca prawny Kredyt Bank S.A., BZWBK S.A.)">Santander Bank Polska S.A (następca prawny Kredyt Bank S.A., BZWBK S.A.)</option>
                <option value="ING Bank Śląski S.A.">ING Bank Śląski S.A.</option>
                <option value="PKO BP S.A. (następca prawny Nordea Bank Polska S.A.)">PKO BP S.A. (następca prawny Nordea Bank Polska S.A.)</option>
                <option value="Pekao S.A.(następca prawny części kredytów zawartych z Bankiem BPH S.A.)">Pekao S.A.(następca prawny części kredytów zawartych z Bankiem BPH S.A.)</option>
                <option value="Deutsche Bank S.A.">Deutsche Bank S.A.</option>
                <option value="BNP Paribas S.A. (następca prawny BGŻ S.A., Fortis Bank S.A.)">BNP Paribas S.A. (następca prawny BGŻ S.A., Fortis Bank S.A.)</option>
                <option value="Bank Ochrony Środowiska S.A.">Bank Ochrony Środowiska S.A.</option>
                <option value="Svenska Handelsbanken AB S.A.">Svenska Handelsbanken AB S.A.</option>
                <option value="DnB Bank Polska S.A.">DnB Bank Polska S.A.</option>
                <option value="Inny">Inny</option>
            </datalist>
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Rok udzielenia kredytu</label>
            <input class="form-control" list="year-list" id="year" placeholder="Wpisz rok">
            <datalist id="year-list">
                <?php
                generate_years(2000);
                ?>
            </datalist>
        </div>

        <div class="mb-3">
            <label for="month" class="form-label">Miesiąc udzielenia kredytu</label>
            <input class="form-control" list="month-list" id="month" placeholder="Wpisz miesiąc">
            <datalist id="month-list">
                <?php
                generate_months();
                ?>
            </datalist>
        </div>

        <div class="mb-3">
            <label for="credit-amount" class="form-label">Kwota kredytu</label>
            <div class="input-group">
                <input type="number" pattern="\{d}" class="form-control" id="credit-amount" name="credit-amount" aria-label="Kwota kredytu" aria-describedby="Kwota kredytu">
                <span class="input-group-text" id="credit-amount">CHF</span>
                <input type="text" class="d-none" id="currency" name="currency" value="PLN">
            </div>
        </div>

        <div class="mb-3">
            <label for="credit-installment" class="form-label">Ilość rat kredytu</label>
            <div class="input-group">
                <input type="number" pattern="\{d}" class="form-control" id="credit-installment" name="credit-installment" aria-label="Ilość rat kredytu" aria-describedby="Ilość rat kredytu">
                <span class="input-group-text">RAT</span>
            </div>
        </div>

        <div class="mb-3">
            <label for="credit-margin-yes-no" class="form-label">Czy znasz wysokość marży kredytu</label>
            <div class="input-group">
                <input type="radio" class="btn-check" name="options" id="credit-margin-yes" autocomplete="off">
                <label class="btn btn-outline-primary mx-2" for="credit-margin-yes">TAK</label>

                <input type="radio" class="btn-check" name="options" id="credit-margin-no" autocomplete="off">
                <label class="btn btn-outline-primary mx-2" for="credit-margin-no">NIE</label>
            </div>
        </div>

        <div class="mb-3">
            <label for="credit-margin-value" class="form-label">Wysokość marży (w %)</label>
            <div class="input-group">
                <input type="number" pattern="^[0-9]*\.[0-9]{2}$" class="form-control" id="credit-margin-value" name="credit-margin-value" aria-label="Wysokość marży" aria-describedby="Wysokość marży">
                <span class="input-group-text">%</span>
            </div>
        </div>

        <div class="mb-3">
            <label for="reference-type" class="form-label">Rodzaj LIBOR</label>
            <input class="form-control" list="wibor-list" id="reference-type" name="reference-type" placeholder="Podaj rodzaj WIBOR">
            <datalist id="wibor-list">
                <option value="LIBOR 1M">LIBOR 1M</option>
                <option value="LIBOR 3M">LIBOR 3M</option>
                <option value="LIBOR 6M">LIBOR 6M</option>
                <option value="LIBOR 12M">LIBOR 12M</option>
            </datalist>
        </div>

        <div class="mb-3">
            <label for="clientname" class="form-label">Imię i nazwisko</label>
            <input type="text" class="form-control" name="clientname" id="clientname" aria-describedby="Imię i nazwisko" placeholder="" required />
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Adres Email</label>
            <input type="email" class="form-control" id="emailInput" oninput="delayedValidateEmail()" aria-describedby="Adres Email" required>
            <p id="result" class="text-danger"></p>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Numer telefonu</label>
            <input type="tel" class="form-control phone-mask" id="phone" placeholder="___-___-___" minlength="11" maxlength="11" aria-describedby="Numer telefonu" required>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="consent" id="consent" required style="border-color: rgba(0,0,0, 0.45);">
            <label class="form-check-label" for="consent">
                *Akceptuję <a class="text-primary" href="polityka-prywatnosci">Politykę prywatności</a>
            </label>
            <p class="small text-muted py-2">* Pola wyamgane</p>
        </div>

        <button type="submit" class="btn btn-primary">
            WYŚLIJ
        </button>
    </form>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var numerInput = document.getElementById("phone");

        numerInput.addEventListener("input", function() {
            var inputValue = numerInput.value.replace(/\D/g, ''); // Usuwa wszystkie znaki niebędące cyframi
            var formattedValue = formatNumer(inputValue);
            numerInput.value = formattedValue;
        });

        function formatNumer(value) {
            var formattedValue = "";
            for (var i = 0; i < value.length; i++) {
                if (i > 0 && i % 3 === 0) {
                    formattedValue += "-";
                }
                formattedValue += value.charAt(i);
            }
            return formattedValue;
        }
    });

    var delayTimer;

    function delayedValidateEmail() {
        clearTimeout(delayTimer);
        delayTimer = setTimeout(function() {
            validateEmail();
        }, 1000); // 1000 milliseconds (1 second) delay
    }

    function validateEmail() {
        var emailInput = document.getElementById('emailInput').value;
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var resultElement = document.getElementById('result');

        if (emailRegex.test(emailInput)) {
            resultElement.innerText = '';
        } else {
            resultElement.innerText = 'Nieprawidłowy adres email.';
        }
    }
</script>