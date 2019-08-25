<?php
function custom_form_script() { ?>
    <script>
        window.onload = function (){
            function EditLabel (element, placeholder) {
                const oUserPass = document.querySelector(`#${element}`).cloneNode();
                document.querySelector(`label[for="${element}"]`).innerHTML = "";
                document.querySelector(`label[for="${element}"]`).appendChild(oUserPass);
                document.querySelector(`#${element}`).placeholder = placeholder;
            }
            EditLabel("user_pass", "Password");
            EditLabel("user_login", "Login");

            Velocity(document.querySelector("#loginform").querySelectorAll("p"), "transition.slideUpBigIn", { stagger: 200 });
        };

    </script>
<?php }