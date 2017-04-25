<?php

// inside_top_menu CONFIG

$i = 0;
$table_columns[$i]['name'] = 'city_id';
$table_columns[$i]['text'] = 'ID';
$table_columns[$i]['column_width'] = '30';
$table_columns[$i]['in_crud'] = true;

$i++;
$table_columns[$i]['name'] = 'city_name';
$table_columns[$i]['text'] = 'City Name';
$table_columns[$i]['tab'] = 'main';
$table_columns[$i]['input_type'] = 'text';
$table_columns[$i]['in_crud'] = true;

$i++;
$table_columns[$i]['name'] = 'city_type';
$table_columns[$i]['text'] = 'Type';
$table_columns[$i]['tab'] = 'main';
$variants = array();
  	$variants[0]['id'] = '1';$variants[0]['name']="Районный центр";
	$variants[1]['id'] = '2';$variants[1]['name']="Обласной центр";
$table_columns[$i]['variants'] = $variants;
$table_columns[$i]['input_type'] = 'select';
$table_columns[$i]['in_crud'] = true;

$i++;
$table_columns[$i]['name'] = 'city_population';
$table_columns[$i]['text'] = 'Population';
$table_columns[$i]['tab'] = 'main';
$table_columns[$i]['input_type'] = 'text';
$table_columns[$i]['in_crud'] = true;

$i++;
$table_columns[$i]['name'] = 'city_create_date';
$table_columns[$i]['text'] = 'Create Date';
$table_columns[$i]['tab'] = 'main';
$table_columns[$i]['input_type'] = 'date';
$table_columns[$i]['in_crud'] = true;

$i++;
$table_columns[$i]['name'] = 'city_desc';
$table_columns[$i]['text'] = 'Description';
$table_columns[$i]['tab'] = 'main';
$table_columns[$i]['input_type'] = 'html';
$table_columns[$i]['help'] = 'Short text, for preview.';
$table_columns[$i]['defend_filter'] = 2;

$i++;
$table_columns[$i]['name'] = 'city_html';
$table_columns[$i]['text'] = 'HTML';
$table_columns[$i]['tab'] = 'main';
$table_columns[$i]['input_type'] = 'html';
$table_columns[$i]['defend_filter'] = "A";

$i++;
$table_columns[$i]['name'] = 'city_img';
$table_columns[$i]['text'] = 'Image';
$table_columns[$i]['tab'] = 'main';
$table_columns[$i]['input_type'] = 'image';
$table_columns[$i]['folder'] = 'city_img';
$table_columns[$i]['in_crud'] = true;

$i++;
$table_columns[$i]['name'] = 'city_priority';
$table_columns[$i]['text'] = 'Priority';
$table_columns[$i]['tab'] = 'main';
$table_columns[$i]['input_type'] = 'text';
$table_columns[$i]['in_crud'] = true;

$i++;
$table_columns[$i]['name'] = 'city_invisible';
$table_columns[$i]['text'] = 'Invisible';
$table_columns[$i]['tab'] = 'main';
$table_columns[$i]['input_type'] = 'select-checkbox';
$table_columns[$i]['in_crud'] = true;

$i++;
$table_columns[$i]['name'] = 'city_user_id';
$table_columns[$i]['text'] = 'User Author';
$table_columns[$i]['tab'] = 'main';
$table_columns[$i]['input_type'] = 'select_from_table_chosen';
$table_columns[$i]['select_index'] = 'id';
$table_columns[$i]['select_field'] = 'email';
$table_columns[$i]['select_table'] = 'users';
$table_columns[$i]['filter'] = true;
$table_columns[$i]['in_crud'] = true;
$table_columns[$i]['help'] = 'Help Info...';



$table_config['key'] = 'city_id';

// System names: access = Access System, Chat = Chat communication
$table_config['cell_tabs_arr'] = Array (
	'main' => 'Main',
	'rel' => 'Relations',
	'chat' => 'Chat'
);

$i=0;
$adv_rel_inputs[$i]['name'] = 'rel_cities_countries';
$adv_rel_inputs[$i]['input_type'] = 'many2many';
$adv_rel_inputs[$i]['text'] = 'Countries';
$adv_rel_inputs[$i]['help'] = 'Relations';
$adv_rel_inputs[$i]['table'] = 'it_countries';
$adv_rel_inputs[$i]['rel_table'] = 'it_rel_cities_countries';
$adv_rel_inputs[$i]['this_key'] = 'city_id';
$adv_rel_inputs[$i]['rel_key'] = 'city_id';
$adv_rel_inputs[$i]['rel_join'] = 'country_id';
$adv_rel_inputs[$i]['join_key'] = 'country_id';
$adv_rel_inputs[$i]['join_name'] = 'country_name';
$adv_rel_inputs[$i]['tab'] = 'rel';

?>