<script>
    document.addEventListener("DOMContentLoaded", function() {
        var numerInput = document.getElementById("phone");

        numerInput.addEventListener("input", function() {
            var inputValue = numerInput.value.replace(/\D/g, '');
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
        }, 1000);
    }

    function validateEmail() {
        var emailInput = document.getElementById('email').value;
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var resultElement = document.getElementById('result');

        if (emailRegex.test(emailInput)) {
            resultElement.innerText = '';
        } else {
            resultElement.innerText = 'Nieprawidłowy adres email.';
        }
    }


    const buttons = document.querySelectorAll('.button-choser');

    buttons.forEach((button, index) => {
        button.addEventListener('click', function handleClick(event) {
            let chosenValueInput = button.parentNode.previousElementSibling;
            chosenValueInput.value = button.innerHTML;
            button.classList.add('active');
            let allButtons = button.parentElement.getElementsByClassName('button-choser');
            for (var item of allButtons) {
                if (item.innerHTML != button.innerHTML) {
                    item.classList.remove('active');
                }
            }
        });
    });
</script>