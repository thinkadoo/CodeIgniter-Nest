<div class="doc-section clearfix" id="forms">
    <h3>Sign up</h3>
    <p>Please enter at least a Username and Password!</p>
    <div class="four columns alpha">
        <form method='post' action='index.php/signup/signupFunction' enctype='multipart/form-data'>
            <label for="image">Profile Image</label>
            <input type='file' id="image" name='image' maxlength='32' />
            <label for="username">Username</label>
            <input type="text" id="username" maxlength='16' name='username' value='' />
            <label for="password">Password</label>
            <input type="text" id="password" maxlength='16' name='password' value='' />
            <label for="firstname">Firstname</label>
            <input type="text" id="firstname" maxlength='16' name='firstname' value='' />
            <label for="lastname">Lastname</label>
            <input type="text" id="lastname" maxlength='16' name='lastname' value='' />
            <label for="email">Email</label>
            <input type="text" id="email" maxlength='32' name='email' value='' />
            <label for="age">Age</label>
            <input type="text" id="age" maxlength='32' name='age' value='' />
            <label for="description">Profile Description</label>
            <textarea id="description" maxlength='128' name='description' value='' ></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>