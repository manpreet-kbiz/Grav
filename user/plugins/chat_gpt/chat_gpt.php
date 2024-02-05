<?php

namespace Grav\Plugin\Admin;
namespace Grav\Plugin;
use Grav\Common\Plugin;
use Grav\Common\Grav;
use Grav\Common\Page\Page;
use Grav\Common\Utils;
use Grav\Common\Inflector;
use Grav\Common\Page\File\PageFile;
use RocketTheme\Toolbox\File\File;
use RocketTheme\Toolbox\Event\Event;
/* use Grav\Plugin\chat_gpt\OpenAi;
include(__DIR__ .'/classes/OpenAi.php'); */

class ChatGptPlugin extends Plugin
{
    public static function getSubscribedEvents()
    {
        return [
            'onAssetsInitialized' => ['onAssetsInitialized', 0],
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
        ];
    }

    public function onAssetsInitialized()
    {
        if ($this->isAdmin()) {
			$this->grav['assets']->addJs('user/plugins/' . $this->name . '/js/custom-script-admin.js'); 
        }
    }

    public function onPluginsInitialized()
    {
        // Register a custom route for handling AJAX requests
        $this->enable([
            'onPageInitialized' => ['handleAjaxRequest', 0],
        ]);
    }

   
    public function handleAjaxRequest()
    {
        if ($this->grav['uri']->path() == '/ajax-calls') {
			
			if($_POST['action']=="socialdesc"){
				$prompt ="You are a social media content administrator. I want to give a job description and have you summarize for a twitter post with hash tags limit to 275 to the most relevent auidence designed to output JSON.";
				$this->processAjaxRequest($prompt);
				
			}elseif($_POST['action']=="twitterpost"){
				if($_POST['jobDescription']){
					$jobDescription = $_POST['jobDescription'];
				}else{
					$jobDescription = $_POST['jobTitle'];
				}
				/* $response = ['desc'=>$jobDescription];
				echo json_encode($response);
				exit(); */
				
				$this->processAjaxTwitterPost($jobDescription);
			}else{
				
				$prompt ="You are a content optimizer administrator. I want to give a job description please optimize this and designed to output JSON";
				$this->processAjaxRequest($prompt);
			}
        } 
		
		
    }
	private function OpenApiChat($question, $prompt){
		
		$api_url = "https://api.openai.com/v1/chat/completions";
		$openaiApiKey = "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";
		$model = "gpt-3.5-turbo-1106";
		$data = array(
			"model" => $model,
			"response_format" => array("type" => "json_object"),
			"messages" => array(
				array("role" => "system", "content" =>$prompt ),
				array("role" => "user", "content" => $question)
			),
			"temperature" => 1,
			"max_tokens" => 200,
			"top_p" => 1,
			"frequency_penalty" => 2,
			"presence_penalty" => 2
		);

		$data_string = json_encode($data);
		$ch = curl_init($api_url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'Authorization: Bearer ' . $openaiApiKey,
		));
		$result = curl_exec($ch);
		
		return $result;
	}
	
	 private function processAjaxTwitterPost($param) 
    {
		$response = ['desc'=>$param];
		echo json_encode($response);
		exit(); 
		if($param){
			
			$oauth_consumer_key='usLqjvfq1EUuniiX6ZZB66Pjl';
			$oauth_token='2963104506-yNgCvdAsypeBaRE5erukBCGIUhpiZYRk7unxxvY';
			$timestamp = '1704786817';

			// Limit the string to 280 characters
			$limitedString = substr(strip_tags($param), 0, 280);
			
			$data=[
				'text'=>$limitedString
			];
			
			$jsonString = json_encode($data, JSON_PRETTY_PRINT);

			$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://api.twitter.com/2/tweets',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS =>  $jsonString,
			CURLOPT_HTTPHEADER => array(
			  'Content-Type: application/json',
			  'Authorization: OAuth oauth_consumer_key='.$oauth_consumer_key.',oauth_token='.$oauth_token.',oauth_signature_method="HMAC-SHA1",oauth_timestamp='.$timestamp.',oauth_nonce="riP99Sh40Tz",oauth_version="1.0",oauth_signature="1LMBwM0u3o%2BjtRvvHBRlExrxo2I%3D"',
			  'Cookie: guest_id=v1%3A170443602692605653'
			),
			));

			$response = curl_exec($curl);
			$arrresp = json_decode($response);
            
			if(isset($arrresp->data)){
				$message  = 'Successfully added post '.$arrresp->data->id;
				$error = '';
				$status = 'success';
			}else{
				$message  =  $arrresp->detail;
				$error = '';
				$status = 'failed';
			}
			
			//echo $response;
			//$response = ['status' => 'success', 'message' => 'Ajax request received successfully', 'desc'=>$resp];
			$response = ['status' =>$status ,'error' =>$error ,  'message' => $message, 'desc'=>$response];
		}else{
			$response = ['status' => 'failed', 'message' => 'Description  should not be empty', 'desc'=>'Please add description'];
		} 
		echo json_encode($response);
		exit();
		
	}
    private function processAjaxRequest($prompt)
    {
		
		if($_POST['jobDescription']){
			$string = htmlentities($_POST['jobDescription'], null, 'utf-8');
			$content = str_replace("&nbsp;", "", $string);
			$question = html_entity_decode($content);
			//$question = $_POST['param1'];
		}else{
			//$string = $_POST['jobTitle'];
			$question = $_POST['jobTitle'];
			
		}
		if($question==''){
			$response = ['status' => 'success', 'message' => 'Ajax request received successfully', 'desc'=>$optimized_desc];
		}else{
			$result = $this->OpenApiChat($question, $prompt);
			$data = json_decode($result);
			$assistantMessage = $data->choices[0];
			
			$descobj = json_decode($assistantMessage->message->content);    
			
			$optimized_desc = ''; 
			
			if(!empty($descobj)){
				
				if (array_key_exists("summary",$descobj)){
					$optimized_desc .= $descobj->summary;
				}
				if (array_key_exists("description",$descobj)){
					$optimized_desc .= $descobj->description;
				}
				if (array_key_exists("_description",$descobj)){
					$optimized_desc .= $descobj->_description;
				}
				
				/* if (array_key_exists("#hashtags",$description)){
					if				
					$optimized_desc .= $description->#hashtags;
				}  */
			}
			
				// Add your AJAX handling logic here
		    if($optimized_desc){
				$response = ['status' => 'success', 'message' => 'Ajax request received successfully', 'desc'=>$optimized_desc];
			}else{
				$response = ['status' => 'success', 'message' => 'Ajax request received successfully', 'desc'=>$question];
			} 
			echo json_encode($response);
			exit(); 
			die;
		}
	}
}
