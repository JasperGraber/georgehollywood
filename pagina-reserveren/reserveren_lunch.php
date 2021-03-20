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
            <form action="./scripts/reserveren-l-script.php">
                <label class="label" for="datum kiezen">Reserverings-datum:</label>
                <br>
                <input class="date" type="date" id="start" name="reservering date"value="2021-01-01"
                min="2021-01-01" max="2025-12-31">
                <div class="col-3">
                    <label for="tijdsloten">kies een tijdslot</label>
                        <select id="tijdslot" name="tijdsloten">
                            <option value="12:00">12:00</option>
                            <option value="12:15">12:15</option>
                            <option value="12:30">12:30</option>
                            <option value="12:45">12:45</option>
                            <option value="13:00">13:00</option>
                            <option value="13:15">13:15</option>
                            <option value="13:30">13:30</option>
                            <option value="13:45">13:45</option>
                        </select>
                </div>
                <div class="col-3">
                <label for="tijdsloten">Met hoeveel personen</label>
                        <select id="personen" name="personen">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                
                </div>
                <!-- <INPUT TYPE="file" NAME="upload"> -->
                <br>
                <button type="submit" class="menukaart">bevestig en volgende</a>
            </form>
        </div>
    </div>
</div>