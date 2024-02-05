<?php
namespace Grav\Plugin;
use Grav\Common\Plugin;
use Grav\Common\Grav;
use Grav\Common\Page\Page;
use Grav\Common\Utils;
use Grav\Common\Inflector;
use Grav\Common\Page\File\PageFile;
use RocketTheme\Toolbox\File\File;
use RocketTheme\Toolbox\Event\Event;
use Grav\Plugin\api_blog\OpenAi;

include(__DIR__ .'/classes/OpenAi.php');
class ApiBlogPlugin extends Plugin
{
	/**
     * @var array
     */
    protected $query;
	
	/**
     * @var array
     */
    protected $searchedpages;
	
	/**
     * @var array
     */
    protected $all_categories;
	
	/**
     * @var array
     */
    protected $all_tags;
	
	/**
     * @var array
     */
    protected $ind_and_tags;
	
	
    public static function getSubscribedEvents()
    {
       /*  return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
        ]; */
		
		return [
			'onPluginsInitialized' => ['onPluginsInitialized', 0],
            'onAdminSave' => ['onAdminSave', 0],
        ];
    }

    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
			
            return;
        }
        $this->enable([
            'onPagesInitialized' => ['onPagesInitialized', 0],
			'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
			'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
        ]);
    }
	
	
    /**
	* Add current directory to twig lookup paths.
	*/
    public function onTwigTemplatePaths()
    {
        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }
	
    public function onTwigSiteVariables()
    {
        
		$twig = $this->grav['twig'];
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $twig->twig_vars['apisocialbtn_domain'] = $protocol . $_SERVER["HTTP_HOST"];
        $twig->twig_vars['apisocialbtn_buttons'] = $this->config->get('plugins.api_blog.buttons');
		
		$twig->twig_vars['all_categories'] = $this->all_categories;
		$twig->twig_vars['all_tags'] = $this->all_tags;
		$twig->twig_vars['ind_and_tags'] = $this->ind_and_tags;
		if ($this->query) {
            $twig->twig_vars['query'] = $this->query;
            $twig->twig_vars['search_results'] = $this->searchedpages;
        }
		
		//$grav = Grav::instance();
		// Include the Twig filter for "days ago"
		//$daysAgoExtension = new DaysAgoExtension();
		//$grav = Grav::instance();
		//$grav['twig']->twig->addExtension($daysAgoExtension);
		//$this->grav['twig']->twig->addExtension(new DaysAgoExtension());
    }
	public function onAdminSave($event)
    {
        // Save button configuration logic goes here
    }
	protected function searchPages($searchString)
    {
        $matchingPages = [];
		$search_route = $this->config->get('plugins.api_blog.search_route');
        // Iterate through all pages and check if the search string is present in the title
		$parentPage = $this->grav['pages']->find($search_route);
		$childPages = $parentPage->children();
        foreach ($childPages as $page) {
            if (stripos($page->title(), $searchString) !== false) {
                $matchingPages[] = $page;
            }
        }

        return $matchingPages;
    }
	
	public function onPagesInitialized()
    {
		//intialize the  chatGpt Object
		
		//$openai = new OpenAi();
		//$openai->simplequestion ="Generate the  optimized  description";
		
		//$openai->question  ='Optimize  this<p>';
		
		//$response = $openai->getAnswer();
		//print_r($response); 
		//die;
		
		$uri = $this->grav['uri'];
        $route = $this->config->get('plugins.api_blog.route');
		$search_route = $this->config->get('plugins.api_blog.search_route');
		$match_route = $this->config->get('plugins.api_blog.match_route');
	
		if ($route && $route == $uri->path()) {
			$this->createBlogPostsFromApi();
		}
		if ($match_route && $match_route == $uri->path()) {
			//$this->getMatchesFromApi();
		}
		if ($search_route && $search_route == $uri->path()) {
			
			/*code to get all categories*/
			$pages = $this->grav['pages']->all();
			$allCategories = [];
			$allTags = [];
			$ind_and_tags = [];
			// Loop through each page
			foreach ($pages as $page) {
				
				$categories = $page->taxonomy()['category'] ?? [];
				$tags = $page->taxonomy()['tag'] ?? [];
				
				//print_r($tags);
				
				foreach($categories as $category){
					if(($category!=='jobs') && ($category!=='')){
						$tag = $tags[0];
						$ind_and_tags[$tag][]= $category;
						
						/* echo "<pre>";
						print_r($ind_and_tags[$tag]);
						echo "</pre>";
						 */
						/* if (in_array($category, $ind_and_tags[$tag], TRUE))
							
						}else{
							
							$ind_and_tags[$tag][]= $category;
						} */

						//$alreadyarray = $ind_and_tags[$tag];
						
						//if (($key = array_search($category, $ind_and_tags[$tag]))) == false) {
							
						//}
					}
				}
				
				
				
				
				//if (!empty($categories) && !in_array('jobs', $categories)) {
					$allCategories = array_merge($allCategories, $categories);
					$allTags = array_merge($allTags, $tags);
				//}
				//$ind_and_tags[$categories] = $tags;
				
			}
			/* echo "<pre>";
			print_r($ind_and_tags);
			  $ind_and_tags = array_unique($ind_and_tags);
			  
			  print_r($ind_and_tags);
			echo "</pre>"; */
			
			
			$allCategories = array_unique($allCategories);
			if (($key = array_search('jobs', $allCategories)) !== false) {
				unset($allCategories[$key]);
			}
			if (($key = array_search(' ', $allCategories)) !== false) {
				unset($allCategories[$key]);
			}
			
			
			$allTags = array_unique($allTags);
			
			$this->all_categories = $allCategories;
			
			$this->all_tags = $allTags;
			
			$newIndust = [];
			foreach($ind_and_tags as $key =>$values){
				//print_r($values);
				
				$values = array_unique($values);
				$newIndust[$key]= $values;
			} 
			
			
			/* echo "<pre>";
			print_r($newIndust);
			echo "</pre>"; */
			
			//$this->ind_and_tags = $ind_and_tags;
			$this->ind_and_tags = $newIndust;
			
			
			
			/*close of  code to get all the categories*/
			
			$this->query = (string)($uri->param('search', null) ?: $uri->query('search') ?: '');
			if($this->query ){
				$this->searchedpages = $this->searchPages($this->query);
			}
			 
			 
	    }else if((string)($uri->param('category', null) ?: $uri->query('category') ?: '')){
			$this->query = (string)($uri->param('category', null) ?: $uri->query('category') ?: '');
			
		}else{
			$this->query = (string)($uri->param('apply', null) ?: $uri->query('apply') ?: '');

		}
    }
	
	private function createBlogPostsFromApi()
    {
		$pagination = true;
		//$apiUrl = 'https://api.manatal.com/open/v3/jobs/';
		$apiUrl = 'https://api.manatal.com/open/v3/jobs/?status=active';
		$page =1;
		
		while($pagination){
			$results = $this->SendCalltoGetJobs($apiUrl);
			$jobData = json_decode($results, true);
			
			/* echo "<pre>"; 
			print_r($jobData['results']['industry']);
			echo"<pre>"; */
			
			if ($jobData !== null) {
				foreach ($jobData['results'] as $job) {
					echo  "<br>";
					echo  "<br>Title : ". $job['position_name'];
					//echo  "<br>Id  : ". $job['id'];
					$this->createGravPage($job);
					
					/* $jobmatches = $this->matchesbyjob($job['id']);
					echo "<pre>";
					print_r($jobmatches);
					echo "</pre>"; */
					
				}
				
				if($jobData['next'] !== null){
					$next = $jobData['next']; 
					$apiUrl = $next;
				}else{
					$pagination = false;
				}
				
			}else{
				$this->grav['debugger']->addMessage('Error decoding JSON response');
			}
			if($page==10){
				$pagination = false;
			}
		    $page++;
		}
    }
	
	function getMatchesFromApi(){
		$pagination = true;
		//$apiUrl = 'https://api.manatal.com/open/v3/matches/';
		$apiUrl = 'https://api.manatal.com/open/v3/matches/?status=active';
		$page =1;
		$Newmatcharray =[];
		while($pagination){
			//echo "<br> page : ".$page;
			$results = $this->SendCalltoGetmatches($apiUrl);
			$matchData = json_decode($results, true);
			if ($matchData !== null) {
				foreach ($matchData['results'] as $match) {
					$Newmatcharray[$match['job']][] = array(
						"mamtchId"=>$match['id'],
						"candidateID"=>$match['candidate'],
						"jobId"=>$match['job'],
						"hired_at"=>$match['hired_at'],
						"submitted_at"=>$match['submitted_at'],
						"interview_at"=>$match['interview_at'],
						"dropped_at"=>$match['dropped_at']
					);	
				}
				if($matchData['next'] !== null){
					$next = $matchData['next']; 
					$apiUrl = $next;
				}else{
					$pagination = false;
				}
			}
			if($page==3){
				$pagination = false;
			}  
			$page++;
		}
	    $jsonData = json_encode($Newmatcharray, JSON_PRETTY_PRINT);
		file_put_contents('output.json', $jsonData);
		//file_put_contents(__DIR__ . '/output.json', $jsonData);
	}
	
	private function SendCalltoGetmatches($apiUrl){
		$apiToken = 'Token 6e0c91dd98ceec20b45d0993604333f6b7801540';
		$headers = [
			'Authorization: ' . $apiToken,
			'Accept: application/json',
		];
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $apiUrl);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			//$this->grav['debugger']->addMessage('cURL error: ' . curl_error($ch));
		}
		curl_close($ch);
		return $result;
	}
	private function SendCalltoGetJobs($apiUrl){
		$apiToken = 'Token 6e0c91dd98ceec20b45d0993604333f6b7801540';
        $headers = [
            'Authorization: ' . $apiToken,
            'Accept: application/json',
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            $this->grav['debugger']->addMessage('cURL error: ' . curl_error($ch));
        }
        curl_close($ch);
		return $result;
	}
	
	private function matchesbyjob($jobId){
		$apiUrl = "https://api.manatal.com/open/v3/jobs/".$jobId."/matches/?page_size=100";
		$results = $this->SendCalltoGetmatches($apiUrl);
		$matchData = json_decode($results, true);
		
		$countHired_at = 0;
		$countSubmitted_at = 0;
		$countInterview_at = 0;
		//if(!empty($matchData))
		foreach ($matchData['results'] as $match) {
			if (!is_null($match['hired_at'])) {
				//Increment count
				$countHired_at++;
			}
			//if (!is_null($match['submitted_at'])) {
				//Increment count
				$countSubmitted_at++;
			//}
			if (!is_null($match['interview_at'])) {
				 //Increment count
				$countInterview_at++;
			}
		}
		
		return $candiatearr[$jobId] = [
			'hired_at' => $countHired_at,
			'submitted_at' =>  $countSubmitted_at,
			'interview_at' =>$countInterview_at
		]; 
	}
    private function createGravPage($job){
		
		$inflector = new Inflector();
		$pageName = $inflector->hyphenize($job['position_name'].'_'.$job['hash']);
		$parentFolder = $this->config->get('plugins.api_blog.parentfolder');
		//$parentFolderPath = GRAV_ROOT.'/user/pages/04.jobs';
		$parentFolderPath = GRAV_ROOT.'/user/pages/'.$parentFolder;
		
		$jobtemplate = $this->config->get('plugins.api_blog.jobtemplate');
		
		//$filePath = $parentFolderPath.'/'.$pageName . '/job.md';
		$filePath = $parentFolderPath.'/'.$pageName . '/'.$jobtemplate;
		
        $jobTitle = $job['position_name'];
		//$filePath = $parentFolderPath.'/'.$pageName . '/job.md';
		$filePath = $parentFolderPath.'/'.$pageName . '/'.$jobtemplate;
        $jobTitle = $job['position_name'];
		
		$archtype = '';
		if(!empty($job['custom_fields'])){ 
			if (array_key_exists("archetype",$job['custom_fields'])){
				$archtype = $job['custom_fields']['archetype'];
			}
		}
		
	    $industry = '';
		if(!empty($job['industry'])){ 
			if (array_key_exists("name",$job['industry'])){
				$industry = $job['industry']['name'];
			}
		}
		
		
		if($job['salary_max']){
			$min_no_of_digits = $max_no_of_digits = 0;
		// Sample number
			$salary_min = floatval($job['salary_min']);
			$salary_max = floatval($job['salary_max']);
			$avg_sal = ($salary_max+$salary_min)/2;
			
			$avg_sal = number_format($avg_sal, 2, '.', ',');
			
			$salary_minString = strval($salary_min);
			$salary_maxString = strval($salary_max);
			
			$min_no_of_digits = strlen(preg_replace('/\D/', '', $salary_minString));
			$max_no_of_digits = strlen(preg_replace('/\D/', '', $salary_maxString));
			
			
			if($min_no_of_digits < 4){
				$minSalary = '$'.number_format($job['salary_min'], 2, '.', ',').'/hr';
			}else{
				$minSalary = '$'.number_format($job['salary_min'], 2, '.', ',').'/yr';
			}
			
			
			if($max_no_of_digits < 4){
				$maxSalary = '$'.number_format($job['salary_max'], 2, '.', ',').'/hr';
			}else{
				$maxSalary = '$'.number_format($job['salary_max'], 2, '.', ',').'/yr';
			}
			
			$maxSalary = '$'.number_format($job['salary_max'], 2, '.', ',').'/yr';
			
			$compensation =  $maxSalary;
			
		}else{
			$compensation = "Negotiable";
			$minSalary ='';
			$maxSalary ='';
			$avg_sal ='';
		}
		
		
		$jobmatches = $this->matchesbyjob($job['id']);
		
		// Create a new page
		$newPage = new Page();
		//$newPage->name($pageName);
		$newPage->name($pageName); // Set the page name
		//$newPage->name($pageName === 'default' ? $pageName : $pageName . '-default'); // Set the page name
		$newPage->title($jobTitle);
		$newPage->folder($parentFolderPath . '/' . $pageName);
		$newPage->filePath($filePath);
		$newPage->routable(true);
		$headernew = [
			'title' => $jobTitle,
			'date' => $job['created_at'],
			'modified' => $job['updated_at'],
			'jobid' => $job['id'],
			'currency' => $job['currency'],
			'address' =>$job['address'],
			'status' => $job['status'],
			'career_page_url' =>$job['career_page_url'],       
			'hash' =>$job['hash'],
			'organization' =>$job['organization'],
			'salary_min' =>$minSalary,
			'salary_max' =>$maxSalary,
			'avg_sal' =>$avg_sal,
			'is_published' =>$job['is_published'],
			'is_remote' =>$job['is_remote'],
			'created_at' =>$job['created_at'],
			'updated_at' =>$job['updated_at'],
			'owner' =>$job['owner'],
			'contract_details' =>$job['contract_details'],
			'headcount' =>$job['headcount'],
			'compensation' =>$compensation,
			'hired_at' =>$jobmatches['hired_at'],
			'submitted_at' =>$jobmatches['submitted_at'],
			'interview_at' =>$jobmatches['interview_at'],
			'custom_fields' =>$job['custom_fields']
		]; 
		
		
		
		$newPage->header($headernew);
		$date = $job['created_at'];
		$newPage->header()->taxonomy['category'] = ['jobs',$archtype]; 
		$newPage->header()->taxonomy['tag'] = [$industry];
		$newPage->content($job['description']);
		$newPage->extension('.md');
		$newPage->template('job'); // Set the template as needed 
		
		if($job['description']==""){
			$newPage->header()->published = false;
		}
		
		
		// Set the parent page if available
		/* if ($parentPage instanceof Page) {
			$newPage->parent($parentPage);
		} */
	
		// Add other properties and content as needed
		$this->grav['pages']->addPage($newPage);
		// Save the new page
	    $newPage->save();
	}	
}

