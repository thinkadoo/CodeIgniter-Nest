<ul class="tabs">
    <?php foreach ($users as $item):?>
    <li><?php echo "<a href=#".$item['firstname'].">".$item['firstname']."</a>" ?></li>
    <?php endforeach;?>
</ul>
<ul class="tabs-content">
    <?php foreach ($users as $item):?>
    <li <?php echo "id=".$item['firstname'].">"."<em>Firstname:</em> ".$item['firstname']."<br>  <em>Surname:</em> ".$item['lastname']."<br>  <em>Username:</em> ".$item['username']."<br>  <em>Password:</em> ".$item['password']."<br>  <em>Email:</em> ".$item['email']?></li>
    <?php endforeach;?>
</ul>

<ul class="square">
<?php foreach ($users as $item):?>
<li><?php echo $item['firstname'].", ".$item['lastname'];?></li>
<?php endforeach;?>
</ul>


