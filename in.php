<?$cars = [
    ['name' => 'Такси 1', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 2', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 3', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 4', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 5', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
];

$r=array();
foreach($cars as $i=>$v)
{
	$r[$i]=$passenger-($v['position']);
	if($r[$i]<0)
	{
		$r[$i]=$r[$i]*(-1);
	}
}
echo '<br>';
for($i=0;$i<count($r);$i++)
{
	if(isset($r[$i+1])&&isset($r[$i+2])&&isset($r[$i+3])&&isset($r[$i+4]))
	{
		$rast=min($r[$i],$r[$i+1],$r[$i+2],$r[$i+3],$r[$i+4]);
	}
	if($rast==$r[$i])
	{
		$t=$i;
	}
}
echo $cars[$t]['name'].'. Растояние - '.$rast;
