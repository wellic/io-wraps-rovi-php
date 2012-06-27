<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Do-nothing authentication implementation, use this if you want to make un-authenticated calls
 * @author Chris Chabot <chabotc@google.com>
 * @author Chirag Shah <chirags@google.com>
 */
class apiAuthNone extends apiAuth {
  public $key = null;

  public function __construct() {
    global $apiConfig;
    if (!empty($apiConfig['developer_key'])) {
      $this->setDeveloperKey($apiConfig['developer_key']);
    }
	if (!empty($apiConfig['developer_secret'])) {
		$this->setDeveloperSecret($apiConfig['developer_secret']);
	}
  }

  public function setDeveloperKey($key) {$this->key = $key;}
  public function setDeveloperSecret($secret) {$this->secret = $secret;}
  public function authenticate($service) {/*noop*/}
  public function setAccessToken($accessToken) {/* noop*/}
  public function getAccessToken() {return null;}
  public function createAuthUrl($scope) {return null;}
  public function refreshToken($refreshToken) {/* noop*/}
  public function revokeToken() {/* noop*/}

   
  public function sign(apiHttpRequest $request) {
  	global $apiConfig;
      /**
      * The md5 signature function is for Mashery-powered APIs that utilize
      * the md5 (key + secret + time) signature 
      */
	if ($this->secret) {
		$sig = md5($this->key . $this->secret . (string)time());
	}
    if ($this->key) {
      $request->setUrl($request->getUrl() . ((strpos($request->getUrl(), '?') === false) ? '?' : '&')
          . $apiConfig['key_name'].'='.urlencode($this->key) . '&' . $apiConfig['signature_name'].'='.urlencode($sig));
    }
	/*
	echo("<pre>");
	var_dump($request);
	echo("</pre>");
	 * 
	 */
    return $request;
  }
}
