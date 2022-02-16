<?php
?>
<table border="8">
    <thead>
        <tr>
            <th>Name</th>
            <th>Total Member</th>
            <th>Best Record</th>
            <th>Best Album</th>
            <th>Rank</th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $band->name?></td>
        <td><?php echo $band->totalMember?></td>
        <td><?php echo $band->bestRecord?></td>
        <td><?php echo $band->bestAlbum?></td>
        <td><?php echo $band->rank?></td>
    </tr>
    </tbody>
</table>
