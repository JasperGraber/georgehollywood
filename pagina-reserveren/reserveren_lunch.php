<div class="hoofd-reserveren-lunch">
    <div class="container-fluid">
        <img src="../img/reserveren-lunch-banner.jpg" class="banner-reserveren-lunch" alt="">
    </div>
    <h1 class="header-reserveren-lunch"> Lunch reserveren</h1>
    <div class="container-fluid">
        <img src="../img/streep.svg" alt="underline" class="header-streep-reserveren">
    </div>
</div>

<div class="content-reserveren-lunch">
    <div class="row">
        <div class="col-reserveren-6">
            <div class="container-fluid">
                <img src="../img/reserveren-lunch-foto.jpeg" class="" width="80%" alt="">
            </div>
        </div>
        <div class="col-reserveren-6">
            <form class="omlijning-form-reserveren-1" action=" ./index.php?content=reserveren-l-script" method="post">
                <div class="reservation-uitlijing-hoogte">
                    <label class="label-reservation" for="datum kiezen">Reserverings-datum:</label>
                    <input class="date-reservation" id="start" type="date" name="reservation-date" value="2021-01-01"
                        min="2021-01-01" max="2025-12-31">
                </div>
                <div class="reservation-uitlijing-hoogte">
                    <label class="label" for="tijdsloten">kies een tijdslot</label>
                    <div class="time-slot1">
                        <select id="time-slot" class="date" name="time-slot">
                            <option value="1">12:00</option>
                            <option value="2">12:15</option>
                            <option value="3">12:30</option>
                            <option value="4">12:45</option>
                            <option value="5">13:00</option>
                            <option value="6">13:15</option>
                            <option value="7">13:30</option>
                            <option value="8">13:45</option>
                        </select>
                    </div>
                </div>
                <div class="reservation-uitlijing-hoogte">
                    <label class="label" for="tijdsloten">aantal personen</label>
                    <div class="persons1">
                        <select id="personen" class="date" name="persons">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
                <div class="reservation-uitlijing-hoogte">
                    <button type="submit" class="button-form1">bevestig en volgende+</button>
                    <!-- </div> -->
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>