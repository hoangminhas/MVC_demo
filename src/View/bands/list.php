<?php
?>
<table border="7">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Total Number</th>
        <th>Rank</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($bandList as $key=>$eachBand): ?>
    <tr>
        <td><?php echo $key+1?></td>
        <td><?php echo $eachBand->name?></td>
        <td><?php echo $eachBand->totalMember?></td>
        <td><?php echo $eachBand->rank?></td>
        <td><a href="index.php?page=band-read&id=<?php echo $eachBand->id?>">Detail</a></td>
        <td><a href="index.php?page=band-delete&id=<?php echo $eachBand->id?>">Delete</a></td>
        <td><a href="index.php?page=band-update&id=<?php echo $eachBand->id?>">Update</a></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
