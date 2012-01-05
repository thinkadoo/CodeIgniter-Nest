<html>
<head><title>RedBean CMS | Example</title></head>
<body color='black'>
<h1>CMS Example</h1>
<?php $self = $_SERVER["PHP_SELF"] . "?";
require("RedBean/redbean.inc.php");
$toolbox = RedBean_Setup::kickstartDev("mysql:host=localhost;dbname=tutorial");
$r = $toolbox->getRedBean();
if (!$r->load("page", 1)->id) {
    $page = $r->dispense("page");
    $page->title = "root";
    $r->store($page);
}?>
<?php if (isset($_GET["type"]) && $_GET["type"] == "editpage") {
    $page = $r->load("page", $_GET["id"]);?>
<form action="<?=$self?>type=savepage&id=<?=$_GET["id"]; ?>
  &pid=<?=$_GET["pid"]; ?>" method="post">
    <input type="text" name="title" value="<?= $page->title; ?>"/>
    <br/><textarea name="intro"><?= $page->intro; ?></textarea>
    <br/><textarea name="body"><?= $page->body; ?></textarea>
    <br/><input type="submit" name="save" value="save"/>
</form>
    <?php
} else {
    if (isset($_GET["type"]) && $_GET["type"] == "savepage") {
        $parent = $r->load("page", max($_GET["pid"], 1));
        $page = $r->load("page", $_GET["id"]);
        $page->import($_POST, "title,intro,body");
        $r->store($page);
        $tree = new RedBean_TreeManager($toolbox);
        $tree->attach($parent, $page);
    }
    @$currentparent = $r->load("page", (max($_GET["pid"], 1)));
    $tree = new RedBean_TreeManager($toolbox);
    $pages = $tree->children($currentparent);
    foreach ($pages as $page): ?>
    <br/><a href="<?=$self?>type=editpage&id=<?= $page->id; ?>
    &pid=<?= $_GET["pid"]; ?>">edit</a>
    <a href="<?=$self?>type=overview&pid=<?=$page->id;?>">beneath</a>
    <span><?=$page->title?></span>
    <br/>
        <?php endforeach; ?>
<br/>
    <?php if (isset($_GET["pid"]) && $_GET["pid"] > 1): ?>
    <a href="<?=$self?>type=overview&pid=<?=
        $currentparent->parent_id?>">page up</a>
        <?php endif; ?>
<a href="<?=$self?>type=editpage&pid=<?=
    $currentparent->id?>&id=0">add new page</a>
    <?php } ?>
</body>
</html>