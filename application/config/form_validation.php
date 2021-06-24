<?php
$config=[
	'add_article_rules'=>[
			[
				'field'=>'email',
				'label'=>'Email',
				'rules'=>'required|alpha',

			],
			[
				'field'=>'password',
				'label'=>'Password',
				'rules'=>'required|valid_email|is_unique[user.email]',

			],

	],


];


?>
