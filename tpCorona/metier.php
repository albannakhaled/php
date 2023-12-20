<?php
 class City{
	public $name ;
				
	public function __construct($name)
	{
		$this->name = $name ;
			
	}
}
class CityCorona{
	public $listCity;
	public $coronaNB;
	
	
	public function getIndexForCity($city)
	{
        
		foreach($this->listCity as $key=>$val){
			if($val->name == $city)
			{
				return $key;
			}
		}
		
			
	}
	public function getCoronaByCity($city)
	{	
		$index = $this->getIndexForCity($city);
		foreach ($this->coronaNB as $key=>$value) {
			if ($key == $index){
				foreach ($value as $j=>$val)
					$coronaNB1[] = $val;
			}
		}
		return $coronaNB1;
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