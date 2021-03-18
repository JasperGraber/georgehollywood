<div class="header parkeergelegenheid">
    <h1> Lunch reserveren</h1>
</div>
<div class="login">   
    <div class="row">
        <div class="col-6">
            <img src="./img/logo.svg" width="80%" alt="">
        </div>
        <div class="col-6">
            <form action="./scripts/reserveren-l-script.php">
                <label for="datum kiezen">Reserverings-datum:</label>
                <br>
                <input type="date" id="start" name="reservering date"value="2021-01-01"
                min="2021-01-01" max="2025-12-31">
                <div class="col-3">
                    <label for="tijdsloten">kies een tijdslot</label>
                        <select id="tijdslot" name="tijdsloten">
                            <option value="12:00">12:00</option>
                            <option value="12:15">12:15</option>
                            <option value="fiat">12:30</option>
                            <option value="audi">13:00</option>
                            <option value="volvo">13:15</option>
                            <option value="saab">13:30</option>
                            <option value="fiat">13:45</option>
                        </select>
                </div>
                <!-- <INPUT TYPE="file" NAME="upload"> -->
                <br>
                <button type="submit" class="menukaart">bevestig en volgende</a>
            </form>
        </div>
    </div>
</div>