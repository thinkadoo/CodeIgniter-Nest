<?php if($members): ?>
<ul>
    <?php foreach($members as $member): ?>
    <li>
        <h3><?= $member['username'] ?> </h3>
        <h5><?php if($member['description']): ?><p><?= $member['description'] ?></p><?php endif ?></h5>
        <p><img src="profileimages/<?= $member['username'] ?>.jpg" alt=""></p>
        <p><?= $member['firstname'] ?> <?= $member['lastname'] ?></p>
        <p><a href="index.php/detail/index/<?php echo $member['id']; ?>">Detail</a></p>
        <hr>
    </li>
    <?php endforeach ?>
</ul>
<?php else: ?>

<?php endif ?>