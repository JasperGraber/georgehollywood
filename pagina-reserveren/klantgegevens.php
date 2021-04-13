<?php
if(!(isset($_GET["reservationid"]) ))
{
    header("Location: ./index.php?content=message&alert=hacker-alert");
}
?>


<div class="hoofd-klantgegevens-reserveren">
    <div class="container-fluid">
        <img src="../img/reserveren-klantgegevens-banner.jpg" class="banner-reserveren-klantgegevens">
    </div>
    <div class="header-reserveren-klantgegevens">
        <h1>Gegevens invullen</h1>
    </div>
    <img src="../img/streep.svg" alt="underline" class="header-streep-reserveren">
</div>


<div class="content-klantgegevens">
    <div class="row">
        <div class="col-reserveren-6">
            <div class="container-fluid">
                <img src="../img/reserveren-klantgegevens-foto.jpg" class="reserveren-klantgegevens-foto" alt="">
            </div>
        </div>
        <div class="col-reserveren-6">
            <div class="plaatsing-form-reservation2">
                <form action="./index.php?content=customer-r-script" class="omlijning-form-reserveren-2" method="post">
                    <div class="uitlijning-klantgegevens">
                        <label class="label-klantgegevens" for="exampleInputfirstname">voornaam</label>
                        <input name="firstname" type="text" class="input-klantgegevens" id="InputEmail1"
                            aria-describedby="emailHelp" autofocus required>
                    </div>
                    <div class="uitlijning-klantgegevens">
                        <label class="" for="exampleInputfirstname">tusssenvoegsel</label>
                        <input name="infix" type="text" class="input-klantgegevens" id="InputEmail1" aria-describedby="emailHelp"
                            autofocus>
                    </div>
                    <div class="uitlijning-klantgegevens">
                        <label class="label-klantgegevens" for="exampleInputfirstname">achternaam</label>
                        <input name="lastname" type="text" class="input-klantgegevens" id="InputEmail1"
                            aria-describedby="emailHelp" autofocus required>
                    </div>
                    <div class="uitlijning-klantgegevens">
                        <label class="label-klantgegevens" for="exampleInputfirstname">email</label>
                        <input name="email-c" type="email" class="input-klantgegevens" id="InputEmail1" aria-describedby="emailHelp"
                            autofocus required>
                    </div>
                    <div class="uitlijning-klantgegevens">
                        <label class="label-klantgegevens" for="exampleInputfirstname">telefoonnummer</label>
                        <input name="phone-number" type="tel" class="input-klantgegevens" placeholder="06-00000000" id="InputEmail1"
                            aria-describedby="emailHelp" autofocus required>
                    </div>
                    <div class="button-uitlijning-klantgegevens">      
                    <input type="hidden" name="reservationid" value="<?php echo $_GET["reservationid"]; ?>">                  
                    <button type="submit" class="button-klantgegevens">Bevestig reservering </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>