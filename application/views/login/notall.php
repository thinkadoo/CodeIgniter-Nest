<div class="doc-section clearfix" id="forms">
    <h3>Log in</h3>
    <p>Not All the fields were filled in. Please enter both a Username and Password!</p>
    <div class="four columns alpha">
        <form method='post' action='index.php/login/loginFunction'>
            <label for="username">Username</label>
            <input type="text" id="username" maxlength='16' name='username' value='' />
            <label for="password">Password</label>
            <input type="text" id="password" maxlength='16' name='password' value='' />
            <button type="submit">Login</button>
        </form>
    </div>
</div>