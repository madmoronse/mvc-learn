<?php
Class Telegram
{
	public $token = '1597848789:AAHFO8wmND7Cia6DS9UvcEnFsPd9I_8W9Wo';
	public $chat_id = '-554802612';
	public $headers = [];
	public $message;
	public function send($data)
	{
		foreach ($data as $key => $value) {
    		$txt .= "<b>" . $key . "</b>" . $value . "%0A";
		}

		


		$url = 'https://api.telegram.org/bot' . $this->token . '/setWebhook?url=https://333f6955ec52.ngrok.io/system/telegram.php';
		

		$this->message = "https://api.telegram.org/bot{$this->token}/sendMessage?chat_id={$this->chat_id}&text=123qwe123";
		$send = file_get_contents($this->message);
		$data = json_encode($send);

		echo $data;
		echo $this->message;
		$curl = curl_init();
		curl_setopt_array($curl, [
			CURLOPT_POST => 0,
			CURLOPT_HEADER => 0,
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => $this->message,
			CURLOPT_HTTPHEADER => array_merge(array("Content-Type: application/json"), $this->headers)
		]);

		$result = curl_exec($curl);
		curl_close($curl);
		if ($send == true) {
			return true;
		} else {
			return false;
		}
	}
}