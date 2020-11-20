<h2> Task10 </h2>
<form method="get">
    <p>Email: <input type="text" name="email"/></p>
    <p>Headline : <input type="text" name="headline"/></p>
    <p>Message: </p>
    <textarea name="text"></textarea>
    <p>Category: </p>
    <select name="category">
        <option value="Sport">Sport</option>
        <option value="Politician">Politician</option>
        <option value="Music">Music</option>
        <option value="Films">Films</option>
        <option value="Games">Games</option>
    </select>
    <p><input type="submit" value="save"/></p>
</form>
<textarea style="height: 100px"><?php
    if (!empty($_GET['email'])) {
        $email = $_GET['email'];
        $headline = $_GET['headline'];
        $text = $_GET['text'];
        $category = $_GET['category'];


        $filetask10 = 'task10.txt';
        $announce = $category . ":\n" . $headline . "\n" . $text . "\nBy: " . $email."\n\n";

        file_put_contents($filetask10, $announce);
        echo(file_get_contents($filetask10));

    }
    ?></textarea>

