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
//use PHPMailer\PHPMailer\Exception;
 
//use Grav\Common\User\DataUser
//use Grav\Common\User\Interfaces\UserCollectionInterface;
//use Grav\Common\User\Interfaces\UserInterface;

//use Symfony\Component\HttpFoundation\JsonResponse;

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
	
	
	protected $sidebarsearch_result;
	
	protected $filterused = 0;
	
	protected $selectedIndustries;
	protected $selectedCategoryparams;
	protected $selectedLocation;
	protected $selectedTimeFrame;
	protected $selectedPayRange;
	
	
	
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
			//$this->ajaxEndpoint();
			//$uri = $this->grav['uri'];
			//echo "$uri";
			//if ($ajaxroute && $uri->path() === $ajaxroute) {
				//$this->grav->fireEvent('onPageNotFound');
				//$this->ajaxEndpoint();
			//} 
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
		$twig->twig_vars['sidebarsearch_result'] = $this->sidebarsearch_result;
		$twig->twig_vars['filterused'] = $this->filterused;
		$twig->twig_vars['selectedIndustries'] = $this->selectedIndustries;
		$twig->twig_vars['selectedCategoryparams'] = $this->selectedCategoryparams;
		$twig->twig_vars['selectedLocation'] = $this->selectedLocation;
		$twig->twig_vars['selectedTimeFrame'] = $this->selectedTimeFrame;
		$twig->twig_vars['selectedPayRange'] = $this->selectedPayRange;
		
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
			$header = $page->header();
			  //echo "<pre>";
			 ////echo "<br>page : ".$page->hash
			// print_r($page);
			// echo "=============";
			 /* print_r($header);
			 echo "Hash : ".$header->hash;
			 echo "</pre>"; */ 
            if (stripos($page->title(), $searchString) !== false) {
                $matchingPages[] = $page;
            }
			if (stripos($header->hash, $searchString) !== false) {
                $matchingPages[] = $page;
            }
			if (stripos($header->contract_details, $searchString) !== false) {
                $matchingPages[] = $page;
            }
			if(isset($header->taxonomy['category'][1])){
				if (stripos($header->taxonomy['category'][1], $searchString) !== false) {
					$matchingPages[] = $page;
				}
            }
			if(isset($header->taxonomy['tag'][0])){
				if (stripos($header->taxonomy['tag'][0], $searchString) !== false) {
					$matchingPages[] = $page;
				}
			}
			
			
			/* if (stripos($page->title(), $searchString) !== false) {
                $matchingPages[] = $page;
            } */
        }

        return $matchingPages;
    }
	public function sidebarsearch($post)
	{

		$industries = $_POST['industry'] ?? [];
		$categoryparams = $_POST['categoryparam'] ?? [];
		$location = $_POST['location'] ?? null;
		$timeFrame = $_POST['timeFrame'] ?? null;
		$payRange = $_POST['payRange'] ?? null;
		
	    $this->selectedIndustries = $industries;
	    $this->selectedCategoryparams = $categoryparams;
	    $this->selectedLocation = $location;
	    $this->selectedTimeFrame = $timeFrame;
	    $this->selectedPayRange = $payRange;
		 
		
		$search_route = $this->config->get('plugins.api_blog.search_route');
		
        // Iterate through all pages and check if the search string is present in the title
		$parentPage = $this->grav['pages']->find($search_route);
		$childPages = $parentPage->children();
		
		$matchingPages = [];
		
		foreach ($childPages as $page) {

			$header = $page->header();
			$title = $page->title();
			
			if(isset($header->taxonomy['category'][1])){
				$Archtype = $header->taxonomy['category'][1];	
            }
			
			if(isset($header->taxonomy['tag'][0])){
				$Industry = $header->taxonomy['tag'][0];
			}
		 	$address = $header->address;
		    $avg_sal = $header->avg_sal;
		    $pageDate = $header->date;
			
			if($payRange){	
				$cleaned_avg_sal = str_replace(',', '', $avg_sal);
				$avg_sal_float = (float) $cleaned_avg_sal;
				list($min, $max) = explode('-', $payRange);
			}
			
			$postDateTime = new \DateTime($pageDate);
			$currentDate = new \DateTime();
			$interval = $currentDate->diff($postDateTime);
			$daysDifference = $interval->format('%a');
			
			/*
			
			$industries, archtype, payrange, job age, location
			*/
			if ($industries && empty($categoryparams) && empty($location) && empty($payRange) && empty($timeFrame)) {
				
					//echo "Only industries are selected.";
					if(in_array($Industry,$industries)){
						$matchingPages[] = $page;
					}
					
				} elseif (empty($industries) && $categoryparams && empty($location) && empty($payRange) && empty($timeFrame)) {
					
					//echo "Only categoryparams are selected.";
					if(in_array($Archtype,$categoryparams)){
					  $matchingPages[] = $page;
					}
					
				} elseif (empty($industries) && empty($categoryparams) && $location && empty($payRange) && empty($timeFrame)) {
					
					//echo "Only location is selected.";
					 if (stripos($address, $location) !== false) {
						 
						// echo "<br>Only location is selected: ".$title;
						$matchingPages[] = $page;
					}
					 
				} elseif (empty($industries) && empty($categoryparams) && empty($location) && $payRange && empty($timeFrame)) {
					
					//echo "Only payRange is selected.";
					
					if ($avg_sal_float >= (float)$min && $avg_sal_float <= (float)$max) {
						$matchingPages[] = $page;
					}
					
				} elseif (empty($industries) && empty($categoryparams) && empty($location) && empty($payRange) && $timeFrame) {
					
					//echo "Only timeFrame is selected.";
					
					if($timeFrame == 'This week'){
						if($daysDifference <= 6){
							$matchingPages[] = $page;
						}
					}

					if($timeFrame == 'This month'){
						if($daysDifference < 30){
						 $matchingPages[] = $page;
					   }
						
					}

					if($timeFrame == 'This Quarter'){
						if($daysDifference < 120){
							$matchingPages[] = $page;
	                    }
					} 
					
				} elseif ($industries && $categoryparams && empty($location) && empty($payRange) && empty($timeFrame)) {
					
					//echo "Industries and categoryparams are selected.";
					if(in_array($Industry,$industries) && in_array($Archtype,$categoryparams)){
					  $matchingPages[] = $page;
					}
					
				} elseif ($industries && empty($categoryparams) && $location && empty($payRange) && empty($timeFrame)) {
					
					if(in_array($Industry,$industries)){
						
						if (stripos($address, $location) !== false) {
							
							$matchingPages[] = $page;
						}
					}
					
				} elseif ($industries && empty($categoryparams) && empty($location) && $payRange && empty($timeFrame)) {
					
					//echo "Industries and payRange are selected.";
					if(in_array($Industry,$industries)){
						
						if ($avg_sal_float >= (float)$min && $avg_sal_float <= (float)$max){
							$matchingPages[] = $page;
						} 
					}
					
				} elseif ($industries && empty($categoryparams) && empty($location) && empty($payRange) && $timeFrame) {
					
					//echo "Industries and timeFrame are selected.";
					 if(in_array($Industry,$industries)){
						
						if($timeFrame == 'This week'){
							if($daysDifference <= 6){
								$matchingPages[] = $page;
							}
						}

						if($timeFrame == 'This month'){
							if($daysDifference < 30){
							 $matchingPages[] = $page;
							}
	                    }

						if($timeFrame == 'This Quarter'){
							if($daysDifference < 120){
								$matchingPages[] = $page;
							}
                        } 
					} 
					
				} 
				
				/*elseif (empty($industries) && $categoryparams && $location && empty($payRange) && empty($timeFrame)) {
					
					//echo "Categoryparams and location are selected.";
					if(in_array($Archtype,$categoryparams) && stripos($address, $location) !== false ){
					  $matchingPages[] = $page;
					}
					
				} elseif (empty($industries) && $categoryparams && empty($location) && $payRange && empty($timeFrame)) {
					
					echo "Categoryparams and payRange are selected.";
					
				} elseif (empty($industries) && $categoryparams && empty($location) && empty($payRange) && $timeFrame) {
					
					echo "Categoryparams and timeFrame are selected.";
					
				}*/ 
				
			 	elseif (empty($industries) && empty($categoryparams) && $location && $payRange && empty($timeFrame)) {
					
					//echo "Location and payRange are selected.";
					if(stripos($address, $location) !== false && $avg_sal_float >= (float)$min && $avg_sal_float <= (float)$max) {
						echo "Location and payRange are selected.";
							$matchingPages[] = $page;
						}
					
				}elseif (empty($industries) && empty($categoryparams) && $location && empty($payRange) && $timeFrame) {
					
					//echo "Location and timeFrame are selected.";
					if(stripos($address, $location) !== false ){
						
						if($timeFrame == 'This week'){
							if($daysDifference <= 6){
								$matchingPages[] = $page;
							}
						}

						if($timeFrame == 'This month'){
							if($daysDifference < 30){
							 $matchingPages[] = $page;
							}

						}

						if($timeFrame == 'This Quarter'){
							if($daysDifference < 120){
								$matchingPages[] = $page;
							
							}
						} 
					}
					
				} elseif (empty($industries) && empty($categoryparams) && empty($location) && $payRange && $timeFrame) {
					
					//echo "PayRange and timeFrame are selected.";
					if($avg_sal_float >= (float)$min && $avg_sal_float <= (float)$max){
						
						if($timeFrame == 'This week'){
							if($daysDifference <= 6){
								$matchingPages[] = $page;
							}
						}

						if($timeFrame == 'This month'){
							if($daysDifference < 30){
							 $matchingPages[] = $page;
							}

						}

						if($timeFrame == 'This Quarter'){
							if($daysDifference < 120){
								$matchingPages[] = $page;
                            }
	                    } 
					}
					
				}elseif ($industries && $categoryparams && $location && empty($payRange) && empty($timeFrame)) {
					
					//echo "Industries, categoryparams, and location are selected.";
					if(in_array($Industry,$industries) && in_array($Archtype,$categoryparams) && stripos($address, $location) !== false){
						//echo "Industries, categoryparams";
					  $matchingPages[] = $page;
					}
					
				}   elseif ($industries && $categoryparams && empty($location) && $payRange && empty($timeFrame)) {
					
					//echo "Industries, categoryparams, and payRange are selected.";
					if(in_array($Industry,$industries) && in_array($Archtype,$categoryparams)){
					    if ($avg_sal_float >= (float)$min && $avg_sal_float <= (float)$max) {
				         $matchingPages[] = $page;
			            } 
					}
					
				} elseif ($industries && $categoryparams && empty($location) && empty($payRange) && $timeFrame) {
					
					//echo "Industries, categoryparams, and timeFrame are selected.";
					if(in_array($Industry,$industries) && in_array($Archtype,$categoryparams)){
						
						if($timeFrame == 'This week'){
							if($daysDifference <= 6){
								$matchingPages[] = $page;
							}
						}

						if($timeFrame == 'This month'){
							if($daysDifference < 30){
							 $matchingPages[] = $page;
							}
                        }

						if($timeFrame == 'This Quarter'){
							if($daysDifference < 120){
								$matchingPages[] = $page;
							}
						} 
					}
					
				} elseif ($industries && empty($categoryparams) && $location && $payRange && empty($timeFrame)) {
					
					//echo "Industries, location, and payRange are selected.";
					if(in_array($Industry,$industries) && stripos($address, $location) !== false){
						if ($avg_sal_float >= (float)$min && $avg_sal_float <= (float)$max){
						  $matchingPages[] = $page;  
						}
					}
						
					
				}elseif ($industries && empty($categoryparams) && $location && empty($payRange) && $timeFrame) {
					
					//echo "Industries, location, and timeFrame are selected.";
					if(in_array($Industry,$industries) && stripos($address, $location) !== false){
						
						echo "Industries and Address selected ";
						if($timeFrame == 'This week'){
							if($daysDifference <= 6){
								$matchingPages[] = $page;
							}
						}

						if($timeFrame == 'This month'){
							if($daysDifference < 30){
							 $matchingPages[] = $page;
						   }
							
						}

						if($timeFrame == 'This Quarter'){
							if($daysDifference < 120){
								$matchingPages[] = $page;	
							}	
						} 
						
					} 
					
					
				}elseif ($industries && empty($categoryparams) && empty($location) && $payRange && $timeFrame) {
					
					//echo "Industries, payRange, and timeFrame are selected.";
					
				
					if(in_array($Industry,$industries)){
				
						if ($avg_sal_float >= (float)$min && $avg_sal_float <= (float)$max) {
							
							if($timeFrame == 'This week'){
								if($daysDifference <= 6){
									$matchingPages[] = $page;
								}
							}

							if($timeFrame == 'This month'){
								if($daysDifference < 30){
								 $matchingPages[] = $page;
							    }
								
							}

							if($timeFrame == 'This Quarter'){
								if($daysDifference < 120){
									$matchingPages[] = $page;
									//echo "the posted 4months ";
                                }
							} 
						}
				    }
				}
				
 			    /* elseif (empty($industries) && $categoryparams && $location && $payRange && empty($timeFrame)) {
					
					echo "Categoryparams, location, and payRange are selected.";
					
				} */ /* elseif (empty($industries) && $categoryparams && $location && empty($payRange) && $timeFrame) {
					
					echo "Categoryparams, location, and timeFrame are selected.";
					
				}  *//* elseif (empty($industries) && $categoryparams && empty($location) && $payRange && $timeFrame) {
					
					echo "Categoryparams, payRange, and timeFrame are selected.";
					
				} */ elseif (empty($industries) && empty($categoryparams) && $location && $payRange && $timeFrame) {
					
					//echo "Location, payRange, and timeFrame are selected.";
					if(in_array($Industry,$industries)){
						if ($avg_sal_float >= (float)$min && $avg_sal_float <= (float)$max) {
							
							if($timeFrame == 'This week'){
								if($daysDifference <= 6){
									$matchingPages[] = $page;
								}
							}
							if($timeFrame == 'This month'){
								if($daysDifference < 30){
								 $matchingPages[] = $page;
							    }
							}
							if($timeFrame == 'This Quarter'){
								if($daysDifference < 120){
									$matchingPages[] = $page;
									//echo "the posted 4months ";
                                }	
							} 
						} 
						
				    }	
				} elseif($industries && $categoryparams && $location && $payRange && empty($timeFrame)) {
					
					//echo "All except timeFrame are selected.";
					if(in_array($Industry,$industries) && in_array($Archtype,$categoryparams) && stripos($address, $location) !== false){
						 if($avg_sal_float >= (float)$min && $avg_sal_float <= (float)$max) {
							$matchingPages[] = $page;
						} 
				    }	
					
					
				} elseif ($industries && $categoryparams && $location && empty($payRange) && $timeFrame) {
					
					//echo "All except payRange are selected.";
					if(in_array($Industry,$industries) && in_array($Archtype,$categoryparams) && stripos($address, $location) !== false){
						
							if($timeFrame == 'This week'){
								if($daysDifference <= 6){
									$matchingPages[] = $page;
								}
							}
							if($timeFrame == 'This month'){
								if($daysDifference < 30){
								 $matchingPages[] = $page;
							    }
							}
							if($timeFrame == 'This Quarter'){
								if($daysDifference < 120){
									$matchingPages[] = $page;
                                }	
							} 
						
				    }
					
					
				} elseif ($industries && $categoryparams && empty($location) && $payRange && $timeFrame) {
					
					//echo "All except location are selected.";
					
					if(in_array($Industry,$industries) && in_array($Archtype,$categoryparams)){
						
						if($avg_sal_float >= (float)$min && $avg_sal_float <= (float)$max) {
							if($timeFrame == 'This week'){
								if($daysDifference <= 6){
									$matchingPages[] = $page;
								}
							}
							if($timeFrame == 'This month'){
								if($daysDifference < 30){
								 $matchingPages[] = $page;
							    }
							}
							if($timeFrame == 'This Quarter'){
								if($daysDifference < 120){
									$matchingPages[] = $page;
                                }	
							} 
						}
				    }
					
					
				} elseif ($industries && empty($categoryparams) && $location && $payRange && $timeFrame) {
					
					//echo "All except categoryparams are selected.";
					if(in_array($Industry,$industries) && stripos($address, $location) !== false){
						
						if($avg_sal_float >= (float)$min && $avg_sal_float <= (float)$max) {
							if($timeFrame == 'This week'){
								if($daysDifference <= 6){
									$matchingPages[] = $page;
								}
							}
							if($timeFrame == 'This month'){
								if($daysDifference < 30){
								 $matchingPages[] = $page;
							    }
							}
							if($timeFrame == 'This Quarter'){
								if($daysDifference < 120){
									$matchingPages[] = $page;
                                }	
							} 
						}
				    }
				} elseif (empty($industries) && $categoryparams && $location && $payRange && $timeFrame) {
					
					//echo "Categoryparams, location, payRange, and timeFrame are selected.";
					if(iin_array($Archtype,$categoryparams)&& stripos($address, $location) !== false){
						
						if($avg_sal_float >= (float)$min && $avg_sal_float <= (float)$max) {
							if($timeFrame == 'This week'){
								if($daysDifference <= 6){
									$matchingPages[] = $page;
								}
							}
							if($timeFrame == 'This month'){
								if($daysDifference < 30){
								 $matchingPages[] = $page;
							    }
							}
							if($timeFrame == 'This Quarter'){
								if($daysDifference < 120){
									$matchingPages[] = $page;
                                }	
							} 
						}
				    }	
				} 
			//die;
			
			
			//filter to check archtype 
			/* if($categoryparams){
				if(in_array($Archtype,$categoryparams)){
					$matchingPages[] = $page;
				}
			} 
			
			//filter to check loction 
		
			if (stripos($address, $location) !== false) {
				$matchingPages[] = $page;
			}
			
			//filter to check  avg_sal
		
			
			$cleaned_avg_sal = str_replace(',', '', $avg_sal);
            $avg_sal_float = (float) $cleaned_avg_sal;
			list($min, $max) = explode('-', $payRange);
            if ($avg_sal_float >= (float)$min && $avg_sal_float <= (float)$max) {
				$matchingPages[] = $page;
			} 
			
		    //filter to check  date 
			
			$postDateTime = new \DateTime($pageDate);
			$currentDate = new \DateTime();
            $interval = $currentDate->diff($postDateTime);
			$daysDifference = $interval->format('%a');
			

			if($timeFrame == 'This week'){
				if($daysDifference <= 6){
					$matchingPages[] = $page;
				}
			}

			if($timeFrame == 'This month'){
				if($daysDifference < 30){
				 $matchingPages[] = $page;
			   }
				
			}

			if($timeFrame == 'This Quarter'){
				if($daysDifference < 120){
					$matchingPages[] = $page;
					echo "the posted 4months ";

				}
				
			} */
			
			
			
 		
			/*if ($payRange) {	
                list($min, $max) = explode('-', $payRange);
                if ($avg_sal_float >= (float)$min && $avg_sal_float <= (float)$max) {
					//$matchingPages[] = $page;
					if (in_array($Archtype,$categoryparams) && $address == $location){
						$matchingPages[] = $page;
						
						 $pageDate = $header->date;
						$postDateTime = new \DateTime($pageDate);
						
						// Get the current date
						$currentDate = new \DateTime();

						// Calculate the difference in days
						$interval = $currentDate->diff($postDateTime);
						$daysDifference = $interval->format('%a');
						
						echo "innn";
						if($daysDifference <= 7){
						  echo "<br> title : ".$title ."diff : ".$daysDifference;
						}
						 
						
					}
				}
			}*/ 
			
			
        }
		//die;
		$this->sidebarsearch_result = $matchingPages;
		
		
	}
	
	public function onPagesInitialized()
    {
		$uri = $this->grav['uri'];
		$ajaxroute = $this->config->get('plugins.api_blog.ajaxroute');
        $route = $this->config->get('plugins.api_blog.route');
		$search_route = $this->config->get('plugins.api_blog.search_route');
		$match_route = $this->config->get('plugins.api_blog.match_route');
		
		// Load Grav
		//$grav = $this->grav;

		// Check if the Admin plugin is available
		//if (isset($grav['admin'])) {
		if ($ajaxroute && $uri->path() === $ajaxroute) {
            $this->grav->fireEvent('onPageNotFound');
			$this->ajaxEndpoint();
        } 
	
		if ($route && $route == $uri->path()) {
			$this->createBlogPostsFromApi();
		}
		if ($match_route && $match_route == $uri->path()) {
			//$this->getMatchesFromApi();
		}
		
		if ($search_route && $search_route == $uri->path()) {
			
			if(isset($_POST['sidebarsearch'])){
				$this->sidebarsearch($_POST);
				$this->filterused = 1;
			}
			
			/*code to get all categories*/
			$pages = $this->grav['pages']->all();
			$allCategories = [];
			$allTags = [];
			$ind_and_tags = [];
			// Loop through each page
			foreach ($pages as $page) {
				$categories = $page->taxonomy()['category'] ?? [];
				$tags = $page->taxonomy()['tag'] ?? [];
				foreach($categories as $category){
					if(($category!=='jobs') && ($category!=='')){
						if(!empty($tags)){
							$tag = $tags[0];
						}
						
						$ind_and_tags[$tag][]= $category;
					}
				}
				
				$allCategories = array_merge($allCategories, $categories);
				if(!empty($tags)){
					$allTags = array_merge($allTags, $tags);
				}
				
			}
			
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
			//$this->ind_and_tags = $ind_and_tags;
			$this->ind_and_tags = $newIndust;
			
			/*close of  code to get all the categories*/
			
			/*code runs when Top search*/
			$this->query = (string)($uri->param('search', null) ?: $uri->query('search') ?: '');
			if($this->query){
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
			if (!is_null($match['submitted_at'])) {
				//Increment count
				$countInterview_at++;
			}
			$countSubmitted_at++;
			if (!is_null($match['interview_at'])) {
				 //Increment count
				//$countInterview_at++;
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
	
	public function ajaxEndpoint()
    {    
	    if($_POST['action']=='jobsubmission'){	
			if($_POST['notify']){
				$this->createUser();
			}
			$this->Applyforjob();
			
		}elseif($_POST['action']=='shareviaemail'){
			$this->ShareViaEmail();
	    }else {
			//$this->createUser();
			$data = ['message' => 'Please use correct function'];
			 echo json_encode($data);
		} 
		//echo "rtttt";
		//$this->ShareViaEmail();
		exit();
    }
	function ManatalPostcall($url, $postData){
		$curl = curl_init();
		curl_setopt_array($curl, [
		  CURLOPT_URL => $url,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => json_encode($postData),
		  CURLOPT_HTTPHEADER => [
			"Authorization: Token 6e0c91dd98ceec20b45d0993604333f6b7801540",
			"accept: application/json",
			"content-type: application/json"
		  ],
		]);

		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);
		
		if($err) {
		  return "cURL Error #:" . $err;
		} else {
		  return $response;
		}
	}
	public function createCandiate($email, $full_name, $phone_number){
		$url = "https://api.manatal.com/open/v3/candidates/";
		$postData = [
			'full_name' => $full_name,
			'source_type' => 'other',
			'consent' => true,
			'email' => $email,
			'phone_number' => $phone_number,
			'gender' => 'male',
			'zipcode' => '160055',
			'current_position' => 'Sr.Web Development and Team Leader at Kbizsoft solutions'
		 ];
		 
		 $response = ManatalPostcall($url, $postData);
		 return $response; 
	}

	public function JobMatches($candidate,$jobid){
		$url = "https://api.manatal.com/open/v3/matches/";
		$postData =[
			'candidate' => $candidate,
			'job' => $jobid,
			'is_active' => true,
			'submitted_at' => '2024-01-16T03:12:04.783870Z'
		  ]; 
		  $response = ManatalPostcall($url, $postData);
		  return $response;
	}
	public function Applyforjob(){
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
			
			$full_name = $_POST['first_name'].' '.$_POST['last_name'];
			$jobid = $_POST['jobid'];
			//1341270
			$email = $_POST['email'];
			$phone_number = $_POST['phone'];
			//$email ='Phpkbiz1@Gmail.Com';
			//$full_name ='Test';
			//$phone_number ='5676545677';

			$candrespjson = $this->createCandiate($email, $full_name, $phone_number);
			$candresp = json_decode($candrespjson);
			
			if(!empty($candresp)){
				if($candresp->id){
					$candiateId = $candresp->id;
					$jobmatchesres = JobMatches($candiateId,$jobid);
				}
			}
			//
			
			
			 // Check if the file was uploaded without errors
			if (isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {

				$tmp_name = $_FILES["file"]["tmp_name"];
				$name = $_FILES["file"]["name"];
			 
				$file_info = pathinfo($name);
				$file_extension = strtolower($file_info['extension']);
				if ($file_extension != 'pdf') {
					echo "Only PDF files are allowed.";
					exit;
				}
				
				// Read the file contents
				$file_content = file_get_contents($tmp_name);
				//$encoded_data = base64_encode($file_content);

				// Display or use the encoded data as needed
				//echo "Encoded Data: " . $encoded_data;
				//$file = new CURLFILE($tmp_name);
				//$file = new \CURLFILE($file_path);
				
				if(isset($_POST['jobid']) && $_POST["jobid"] !=""){
					$full_name = $_POST['first_name'].' '.$_POST['last_name'];
					$jobid = $_POST['jobid'];
					//1341270
					$email = $_POST['email'];
					$curl = curl_init();
					curl_setopt_array($curl, array(
					  CURLOPT_URL => 'https://api.manatal.com/open/v3/career-page/gentis/jobs/'.$jobid.'/apply/',
					  CURLOPT_RETURNTRANSFER => true,
					  CURLOPT_ENCODING => '',
					  CURLOPT_MAXREDIRS => 10,
					  CURLOPT_TIMEOUT => 0,
					  CURLOPT_FOLLOWLOCATION => true,
					  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					  CURLOPT_CUSTOMREQUEST => 'POST',
					  CURLOPT_POSTFIELDS => array(
						'full_name' => $full_name,
						'email' => $email,
						'resume'=> new \CURLFILE($tmp_name)
					  ),
					  CURLOPT_HTTPHEADER => array(
						'Cookie: just_updated=true'
					  ),
					));
					$response = curl_exec($curl);

					curl_close($curl);
					echo $response;
				}else{
					echo "JobId is Required!.";
				}
			} else {
				echo "Error uploading file.";
			}
		} else {
			echo "Invalid request.";
		}
		
	}
	public function ShareViaEmail()
    {
		 $data = $_POST;
		 if (isset($data['email']) && isset($data['shareurl'])) {
			 $toemail = $data['email'];
			$shareurl = $data['shareurl'];
			$subject = "Share URL via Email";
			$name ="imti";
			$messagebody ="Hello, Here is your  Link : ".$shareurl;
			
			$IsMailSend = $this->sendCustomMail($toemail, $name, $subject, $messagebody); 
			
			if($IsMailSend){
				echo json_encode(['success' => true, 'message' => 'Mail send!']);
			}else{
				echo json_encode(['success' => false, 'message' => 'Message could not be sent']); 
			} 
		} else {
			echo json_encode(['success' => false, 'message' => 'Invalid data']);
		}  
		
		
		
		//$data = ['message' => 'Email sent successfully'];
        //echo json_encode($data);
		exit();
	}
	
	
	 public function sendCustomMail($toemail, $name, $subject, $messagebody){
		
		require __DIR__ .'/PHPMailer/src/Exception.php';
		require __DIR__ .'/PHPMailer/src/PHPMailer.php';
		require __DIR__ .'/PHPMailer/src/SMTP.php';
		
		$mail = new \PHPMailer\PHPMailer\PHPMailer(true);
		
		try {
			//Server settings
			$mail->isSMTP();
			$mail->Host ='Smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = "kushal.kbiz001@gmail.com";
			$mail->Password = "dtsvlsebewewvkne";
			//$mail->SMTPSecure = "SSL";
			//$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
			$mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;
			$mail->Port = 465;                 								
			//Recipients
			$mail->setFrom('kushal.kbiz001@gmail.com', 'kushal.kbiz001@gmail.com');
			$mail->addAddress($toemail,$name);
			//Content
			$mail->isHTML(true);                                  
			$mail->Subject = $subject;
			$mail->Body = $messagebody;
			$mail->AltBody = '';
			if($mail->send()){
				///$data = ['message' => "mail send!"];
				//echo json_encode(['success' => true, 'message' => 'mail send!']);
				//echo "mail send!";
				return true;
			}
			// Reset the attachment configuration
			$mail->clearAttachments();
		} catch (Exception $e) {
			return false;
			//echo json_encode(['success' => false, 'message' => 'Message could not be sent. Mailer Error:{$mail->ErrorInfo}']);
		}
	}
	
	public function createUser()
    {	
		$data = $_POST;
        $grav = Grav::instance();
        $userPath = $grav['locator']->findResource('user://');
		if (isset($data['email']) && isset($data['first_name'])) {
			$email = $data['email'];
			$username = $data['first_name'];
			$fullname  = $data['first_name'].' '.$data['last_name'];
			$password = 'user@123_'.$data['first_name'];
			$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
			$userFilePath = $userPath."/accounts/{$username}.yaml";
			$userData = [
				'state' => 'enabled',
				'username' => $username,
				'email' => $email,
				'fullname' => $fullname,
				'title' => $data['archtype'],
				'archtype' => $data['archtype'],
				'language' => 'en',
				'content_editor' => 'default',
				'groups' => [
					0 => 'subscribers',
				 ],
				 'avatar' => [
				 ],
				'hashed_password' => $hashedPassword,
				'access' => [
					'site' => [
					  'login' => true,
					],
				],
				// Add other user details as needed
			];
			$yamlString = $this->arrayToYaml($userData);
			file_put_contents($userFilePath, $yamlString);
			return true;
			//echo "User created successfully!";
		}else{
			return false;
			//echo "Please add the  required information";
		}
		
        
        

		// Hash the password securely
		

		// Create a new user YAML file
		//echo $userFilePath = "user/data/{$username}.yaml";
		
		
		//echo $userFilePath;
		

		
		
    }
	function arrayToYaml(array $array, $indent = 0) {
		$yaml = '';
		foreach ($array as $key => $value) {
			$yaml .= str_repeat(' ', $indent * 2) . $key . ': ';
			if (is_array($value)) {
				$yaml .= PHP_EOL . $this->arrayToYaml($value, $indent + 1);
			} else {
				$yaml .= $value . PHP_EOL;
			}
		}
		return $yaml;
	}
}

