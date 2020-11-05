<form action="" method="post">
    <p>
        <input type="checkbox" name="fruit[]" value="Mango">
        <input type="checkbox" name="fruit[]" value="Apple">
    </p>
    <p>
        <input type="radio" name="gender" value="Male">
        <input type="radio" name="gender" value="Female">
    </p>
    <p>
        <select name="color[]" multiple>
            <option>RED</option>
            <option>GREEN</option>
            <option>BLUE</option>
        </select>
    </p>
    <p>
        <input type="submit">
    </p>
</form>

<?php
if(isset($_POST['color'])) {
    print_r($_POST['color']);
}