<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Forma</title>
        <link rel="stylesheet" href="view/css/style.css">
    </head>
    <body>
    <?php
        if(isset($_POST[send])){
            foreach($_POST as $label => $item) {
                $item = htmlspecialchars($item);
                if ($label != "send"){
                    echo "<li>$label:$item</li>";
                }
            }
        }
    ?>
        <h1>Registracijos forma</h1>
        <form name="regforma" action="#" method="post" id="regforma">
            <table alig="center" borde="0" >
                <tr>
                    <td>
                        <h3>Duomenu informacija</h3>
                    </td>
                </tr>
                <tr>
                    <td><lable for="email">El. pasto adresas:<span class="zv">*<span></lable></td>
                    <td><input type="email" name="email" id="email" size="30" required></td>
                </tr>
                <tr>
                    <td><lable for="password">Slaptažodis:<span class="zv">*<span></lable></td>
                    <td><input type="password" name="password" id="password" size="30" required >
                    </td>
                </tr>
                <tr>
                    <td><lable for="repassword">Patvirtinti Slaptažodis:<span class="zv">*<span></lable></td>
                    <td><input type="password" name="repassword" id="repassword" size="30" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" name="rules" id="rules" >Sutinku su taisyklėmis<br></td>
                </tr>
                <tr>
                    <td>
                        <h3>Patikrinkite saskaitos adresas</h3>
                    </td>
                </tr>
                <tr>
                    <td>Lytis:<span class="zv">*<span></td>
                    <td>
                        <select name="lytis" id="lytis" size="1" required>
                            <option value="default" selected>
                                --- Pasirinkti lytį ---
                            </option>
                            <option value="Moteris">
                                Moteris
                            </option>
                            <option value="Vyras">
                                Vyras
                            </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><lable for="username">Vardas:<span class="zv">*<span></lable></td>
                    <td><input type="text" name="username" id="username" size="30" required></td>
                </tr>
                <tr>
                    <td><lable for="usersurname">Pavarde:<span class="zv">*<span></lable></td>
                    <td><input type="text" name="usersurname" id="usersurname" size="30" required>
                    </td>
                </tr>
                <tr>
                    <td><lable for="street">Gatve, namo(buto nr.):<span class="zv">*<span></lable></td>
                    <td><input type="text" name="street" id="street" size="15" required><input type="text" name="houseno" id="houseno" size="10">
                    </td>
                </tr>
                <tr>
                    <td><lable for="postcode">Pasto kodas:<span class="zv">*<span></lable></td>
                    <td><input type="text" name="postcode" id="postcode" size="15" required><a href="https://www.post.lt/pasto-kodu-ir-adresu-paieska" target="_blank">Pašto kodo paieška </a>
                    </td>
                </tr>
                <tr>
                    <td><lable for="city">Miestas:<span class="zv">*<span></lable></td>
                    <td><input type="text" name="city" id="city" size="15" required>
                    </td>
                </tr>
                <tr>
                    <td><lable for="country">Salis:<span class="zv">*<span></lable></td>
                    <td>
                        <select name="country" id="country" size="1" required>
                            <option value="default" selected>
                                --- Pasirinkti sali ---
                            </option>
                            <option value="LT">
                                Lietuva
                            </option>
                            <option value="IT">
                                Italija
                            </option>
                            <option value="EE">
                                Estija
                            </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><lable for="phone">Telefonas:<span class="zv">*<span></lable></td>
                    <td><input type="tel" name="phone" id="phone" size="30" required>
                    </td>
                </tr>
                <tr>
                    <td  class="lygl" height="25" valign="top">
                      <label for="message">Papildoma informacija:<br>(Vartelių/durų kodas):</label>
                      <label for="message">Palikite atsiliepima:<br>(Jusu komentaras):</label>
                    </td>
                    <td><textarea id="message" name="message" rows="5" cols="36"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><p class="lygl tx">Uzpildyti visus important laukus</p> </td>
                </tr>
                <tr>
                    <td colspan="2" class="myg">
                        <input value="Registruotis" type="submit" form="regforma" name="send" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>