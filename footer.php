
<!-- This is the first modal -->
<div class="reveal" id="login_register" data-reveal>
    <h2>Login</h2>
    <form>

        <label>USERNAME
            <input type="text" placeholder="Username" name="usrname">
        </label>
        <label>PASSWORD
            <input type="text" placeholder="password" name="password">
        </label>
        <label>
            <input class="button warning" type="submit" name="submit" value="submit">
        </label>
    </form>
    <a class="button" data-open="register">Not Registered?</a>
    <button class="close-button" data-close aria-label="Close reveal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<!-- This is the nested modal -->
<div class="reveal" id="register" data-reveal>
    <h2>Register</h2>
    <form>
        <label>USERNAME
            <input type="text" placeholder="Username" name="usrname">
        </label>
        <label>EMAIL
            <input type="text" placeholder="email" name="password">
        </label>
        <label>BRANCH
            <select>
                <option value="Boundless">Boundless</option>
                <option value="Memorial">Memorial</option>
                <option value="RonaldN">RonaldN</option>
                <option value="Cianda">Cianda</option>
                <option value="Village">Village</option>
                <option value="Thika">Thika</option>
                <option value="Kitengela">Kitengela</option>
                <option value="Machakos">Machakos</option>
                <option value="MeruTown">MeruTown</option>
                <option value="Makutano">Makutano</option>
                <option value="Kericho">Kericho</option>
                <option value="Embassy">Embassy</option>
            </select>
        </label>
        <label>
            <input class="button warning" type="submit" name="submit" value="submit">
        </label>
    </form>
    <button class="close-button" data-close aria-label="Close reveal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>

