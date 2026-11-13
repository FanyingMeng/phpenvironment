<?php
class Vehicle
{
    public $id;
    public $make;
    public $model;
    public $year;
    public $type;
    public $summary;
    public $msrp;
    public $image;

    public function __construct($id, $make, $model, $year, $type, $summary, $msrp, $image)
    {
        $this->id = $id;
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->type = $type;
        $this->summary = $summary;
        $this->msrp = $msrp;
        $this->image = $image;
    }

    /**
     * 根据 ID 在车辆集合中查找指定车辆
     * @param mixed $vehicles 车辆对象数组或集合
     * @param mixed $id 要查找的车辆 ID
     * @return object|null 返回匹配的车辆对象；若未找到则返回 null
     */
    public static function getVehicles($vehicles, $id){
        foreach ($vehicles as $vehicle) {
            if ($vehicle->id == $id) {
                return $vehicle;
            }
        }
    }
}

?>