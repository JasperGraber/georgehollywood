<div class="header-reserveren-d-r">
    <h1> Lunch reserveren</h1>
</div>
<img src="../img/streep.svg" alt="underline" class="header-streep">


<div class="reserveren">
    <div class="row">
        <div class="col-6">
            <img src="./img/logo.svg" width="80%" alt="">
        </div>
        <div class="col-6">
            <div class="spelen">
                <form action="./scripts/reserveren-l-script.php" method="post">
                    <label class="label" for="datum kiezen">Reserverings-datum:</label>
                    <div class="date2">
                        <input class="date" id="start" type="date" name="reservation date" value="2021-01-01"
                            min="2021-01-01" max="2025-12-31">
                    </div>
                    <label class="label1" for="tijdsloten">kies een tijdslot</label>
                    <div class="time-slot1">
                        <select id="time-slot" class="time" name="time-slot">
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
                    <label class="label" for="tijdsloten">aantal personen</label>
                    <div class="persons1">
                        <select id="personen" class="persons" name="persons">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="button-hoogte">
                        <button type="submit" class="button-form1">bevestig en volgende+</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>