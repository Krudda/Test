<?php 
// id товара
if(!empty($_GET['id']))
{
	$id = (int)$_GET['id'];
	$mysqli = mysqli_connect("localhost", "root", "", "myshop");
//Кодировка подключения
	mysqli_set_charset($mysqli,'utf8');
//Запрос товара по id
	$SQLgoods = "SELECT 
	`goods`.`id`,
	`goods`.`name`,
	`price`,
	`description`,
	`goods`.`image`, 
	`categories`.`name` AS `cname` 
	FROM `goods`,`categories` 
	WHERE `goods`.`cat_id`=`categories`.`id`
	AND `categories`.`id` = $id
	";

	$res = mysqli_query($mysqli, $SQLgoods);
	
	$good = mysqli_fetch_assoc($res);
}

$results = array(
	'title' => 'Категории' , 
	
	'good'=>$good
);

?>