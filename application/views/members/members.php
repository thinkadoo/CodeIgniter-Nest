<?php if($members): ?>
<ul>
    <?php foreach($members as $member): ?>
    <li>
        <h3><?= $member['username'] ?> </h3>
        <h5><?= $member['description'] ?></h5>
        <br>
        <p><img src="profileimages/<?= $member['username'] ?>.jpg" alt=""></p>
        <p><?= $member['firstname'] ?> <?= $member['lastname'] ?></p>
        <hr>
    </li>
    <?php endforeach ?>
</ul>
<?php else: ?>

<?php endif ?>