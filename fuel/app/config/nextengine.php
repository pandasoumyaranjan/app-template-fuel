<?php

return array(
	'client_id' => '2zG7d5MjXPh4m8',
	'client_secret' => 'FTNubmlpyAgE5e3BnqWt6IHJ18voxVkMS9Yh4Zjc',
	'redirect_uri' => 'https://localhost:8443/ne-base/auth/callback',

	'debug' => array(
		// デバッグや通知メールを送るべき開発者
		'developer'		=> array(
			'inoue.shingo@hamee.co.jp',
		),

		// デバッグや通知メールを送るべき営業
		'sales'	=> array(
			'inoue.shingo@hamee.co.jp',
		),

		'mail_subject' => "[NE-API] NextengineApiException"
	)
);
