<?php if($members): ?>
<ul>
    <?php foreach($members as $member): ?>
    <li>
        <h3><?= $member['username'] ?> </h3>
        <h5><?php if($member['description']): ?><p><?= $member['description'] ?></p><?php endif ?></h5>
        <p>
        <a href="index.php/detail/index/<?php echo $member['id']; ?>" >
            <img src="profileimages/<?= $member['username'] ?>.jpg" alt="">
        </a>
        </p>
        <p><?= $member['firstname'] ?> <?= $member['lastname'] ?></p>
        <p><?= $member['username'] ?>'s <a href="index.php/detail/index/<?php echo $member['id']; ?>">Details</a>" &larr; you are following"</p>
        <hr>
    </li>
    <?php endforeach ?>
</ul>
<?php else: ?>
    echo "There are no members :-(";
<?php endif ?>