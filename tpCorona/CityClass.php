<?php
 class City{
	public $name ;
				
	public function __construct($name)
	{
		$this->name = $name ;
			
	}
    
}
class CoronaCity{
    public $listCity;
    public $coronaNB;

    public function getCityIndex($city){
        foreach($this->listCity as $k => $v ){
            if($v->name == $city){
                $index = $k;
            }
        }
        return $index ;
    }

    public function getCoronaNumberByCity($city){
        $index = $this->getCityIndex($city);
        foreach($this -> coronaNB as $k=>$val){
            if($k == $index){
                foreach($val as $i=>$v){
                    $coronaNumber []= $v;
                }
            }
        }
        return $coronaNumber;
    }
    public function getTotalCoronaByCity($index)
	{ 
		$tot = 0;
		foreach ($this->coronaNB as $key=>$value) {
			if ($key == $index){
				foreach ($value as $j=>$val)
				{
					$tot += $val;
				}
			}
		}
		return $tot;
	}
}
?>