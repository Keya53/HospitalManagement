<?php
$config=[
	'add_article_rules'=>[
			[
				'field'=>'email',
				'label'=>'Email',
				'rules'=>'required|valid_email|is_unique[user.email]',

			],
			[
				'field'=>'password',
				'label'=>'password',
				'rules'=>'required|max_length[6]',

			],

	],


];


?>
