<?php

class Setting {
	public function getChannelAccessToken(){
		$channelAccessToken = "XCBJd9Dqc1kfB/VLFnVuEWJ/AjkLXgLdLnSbGuqXeMDwvpfV/XF3iHVtZNso7Jq4onCK9fmbHQ8MZsgrU7ZjCS1+tQk+STz2/0gm4Juod3sG7lRtRmv6bRGtGPAZABQqH3593dxp7W+ladz/KDMR0gdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public function getChannelSecret(){
		$channelSecret = "";
		return $channelSecret;
	}
	public function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}
