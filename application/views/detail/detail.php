<div class="doc-section" id="whatAndWhy">
    <h3>Details for <strong><?php echo $member['username'] ?></strong>!</h3>
    <p><img src="profileimages/<?php echo $member['username'] ?>.jpg" alt=""></p>
    <p>Profile Description: <strong><?php echo $member['description'] ?></strong></p>
    <p>First Name: <strong><?php echo $member['firstname'] ?></strong></p>
    <p>Last Name: <strong><?php echo $member['lastname'] ?></strong></p>
    <p>Age: <strong><?php echo $member['email'] ?></strong></p>
    <p>Email: <strong><?php echo $member['username'] ?></strong></p>
    <p><a href="index.php/members">Back</a> | <a href="index.php/friends/index/<?php echo $member['id']; ?>">Follow</a> | <a href="index.php/members">Drop</a></p>
    <h5><?php if($status): ?><p><?= $status ?></p><?php endif ?></h5>
</div>