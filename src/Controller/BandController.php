<?php
namespace src\Controller;

use src\Model\BandModel;

class BandController
{
    public $bandModel;

    public function __construct()
    {
        $this->bandModel = new BandModel();
    }

    public function showBands()
    {
        $bandList = $this->bandModel->showList();
        include "src/View/bands/list.php";
    }

    public function showDetailBand($id)
    {
        $band = $this->bandModel->showById($id);
        include "src/View/bands/read.php";
    }

    public function addNewBand()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            include "src/View/bands/create.php";
        } else {
            $band = [
                "name" => $_POST['name'],
                "totalMember" => $_POST['totalMember'],
                "bestRecord" => $_POST['bestRecord'],
                "bestAlbum" => $_POST['bestAlbum'],
                "rank" => $_POST['rank'],
            ];
            $this->bandModel->addNew($band);
            header("location:index.php?page=band-list");
        }
    }

    public function deleteBand($id)
    {
        $this->bandModel->deleteById($id);
        header("location:index.php?page=band-list");
    }

    public function updateBand($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include "src/View/bands/update.php";
        } else {
            $band = [
                "name"=>$_POST['name'],
                "totalMember"=>$_POST['totalMember'],
                "bestRecord"=>$_POST['bestRecord'],
                "bestAlbum"=>$_POST['bestAlbum'],
                "rank"=>$_POST['rank']
            ];
            $this->bandModel->updateById($id, $band);
            header("location:index.php?page=band-list");
        }
    }
}