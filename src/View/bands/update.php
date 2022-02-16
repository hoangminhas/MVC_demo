<?php
use src\Model\BandModel;

$bandModel = new BandModel();
$band = $bandModel->showById($id);
?>
<form action="#" method="post">
    <input type="text" name="name" value="<?php echo $band->name?>"><br>
    <input type="text" name="totalMember" value="<?php echo $band->totalMember?>"><br>
    <input type="text" name="bestRecord" value="<?php echo $band->bestRecord?>"><br>
    <input type="text" name="bestAlbum" value="<?php echo $band->bestAlbum?>"><br>
    <input type="text" name="rank" value="<?php echo $band->rank?>"><br>
    <button>Update</button>
</form>
