   <?php
   class Projects{
            var $library;
             function __construct($library){
                $this->library = $library;
             }

           public function getAllProjects(){
					$items = array();
					$item=new stdClass();
					$item->tmpl='item-project';
					$item->topic='Business Directories';
					$item->text=$this->library->textCom('Directories');
					$item->image=$this->library->image('Directories');
					$item->href = 'Products.php?Business-Directories#Business-Directories';
					$items [] =$item;


					$item=new stdClass();
					$item->tmpl='item-project';
					$item->topic='Gallery Timeline';
					$item->text=$this->library->textCom('Gallery');;
					$item->image=$this->library->image('CFL');
					$item->href = 'Portfolio.php?Gallery-Timeline#Gallery-Timeline';
					$items [] =$item;

            return $items;

           }

            public function getService($name){
                   $item=new stdClass();
                   $item->tmpl='item-service1';
                   $item->topic='Mobile Applications';
                   $item->text=$this->library->textCom('Mobile Applications');
                   $item->icon='mobile';
                   $item->href = 'Products.php?Mobile-Applications#Mobile-Applications';
            return $item;
            }


            public function getServices1(){
                   $items = array();
                   $item=new stdClass();
                   $item->tmpl='item-service1';
                   $item->topic='Mobile Applications';
                   $item->text=$this->library->textCom('Mobile Applications');
                   $item->icon='mobile';
                   $item->href = 'Products.php?Mobile-Applications#Mobile-Applications';
                   $items [] =$item;

                   $item=new stdClass();
                   $item->tmpl='item-service1';
                   $item->topic='Kiosk Software';
                   $item->text=$this->library->textCom('Kiosk Software');
                   $item->icon='desktop';
                   $item->href = 'Products.php?Kiosk-Software#Kiosk-Software';
                   $items [] =$item;

                   $item=new stdClass();
                   $item->tmpl='item-service1';
                   $item->topic='CMS';
                   $item->text=$this->library->textCom('CMS');
                   $item->icon='user';
                   $item->href = 'Products.php?CMS#CMS';
                   $items [] =$item;

                   $item=new stdClass();
                   $item->tmpl='item-service1';
                   $item->topic='Web Applications';
                   $item->text=$this->library->textCom('Web Applications');
                   $item->icon='cloud';
                   $item->href = 'Products.php?Web Applications#Web Applications';
                    $items [] = $item;

            return $items;


            }
            public function getAreas(){
                 $items = array();
                       $items = array();
                    $item=new stdClass();
                    $item->tmpl='item-service';
                    $item->topic='Product Selection';
                    $item->text=$this->library->textCom('Product Selection');
                    $item->icon='shopping-cart';
                    $item->href = 'Products.php?Product-Selection#Product-Selection';
                    $items [] =$item;

                    $item=new stdClass();
                    $item->tmpl='item-service';
                    $item->topic='Business Directories';
                    $item->text=$this->library->textCom('Business Directories');
                    $item->icon='sitemap';
                    $item->href = 'Products.php?Business-Directories#Business-Directories';
                    $items [] =$item;

                    $item=new stdClass();
                    $item->tmpl='item-service';
                    $item->topic='Information Delivery';
                    $item->text=$this->library->textCom('Information Delivery');
                    $item->icon='info';
                    $item->href = 'Products.php?Information-Delivery#Information-Delivery';
                    $items [] =$item;

                    $item=new stdClass();
                    $item->tmpl='item-service';
                    $item->topic='Advertisement';
                    $item->text=$this->library->textCom('Advertisement');
                    $item->icon='youtube-play';
                    $item->href = 'Products.php?Advertisement#Advertisement';
                    $items [] = $item;

                    $item=new stdClass();
                    $item->tmpl='item-service';
                    $item->topic='Messaging and Alerts';
                    $item->text=$this->library->textCom('Messaging and Alerts');
                    $item->icon='bolt';
                    $item->href = 'Products.php?Messaging-and-Alerts#Messaging-and-Alerts';
                    $items [] = $item;

                    $item=new stdClass();
                    $item->tmpl='item-service';
                    $item->topic='Booking and Reservation';
                    $item->text=$this->library->textCom('Booking and Reservation');
                    $item->icon='book';
                    $item->href = 'Products.php?Booking-and-Reservation#Booking-and-Reservation';
                    $items [] = $item;

                    $item=new stdClass();
                    $item->tmpl='item-service';
                    $item->topic='Wayfinding';
                    $item->text=$this->library->textCom('Wayfinding');
                    $item->icon='map-marker';
                    $item->href = 'Products.php?Wayfinding#Wayfinding';
                    $items [] = $item;

                    $item=new stdClass();
                    $item->tmpl='item-service';
                    $item->topic='Games and Entertainment';
                    $item->text=$this->library->textCom('Games and Entertainment');
                    $item->icon='smile-o';
                    $item->href = 'Products.php?Games-and-Entertainment#Games-and-Entertainment';
                    $items [] = $item;

                    $item=new stdClass();
                    $item->tmpl='item-service';
                    $item->topic='Architecture';
                    $item->text=$this->library->textCom('Architecture');
                    $item->icon='building';
                    $item->href = 'Products.php?Architecture#Architecture';
                    $items [] = $item;

                   return $items;


                   }
				   
				   public function getPlugins(){
							$items = array();
							$item=new stdClass();
							$item->tmpl='item-service';
							$item->topic='Integration';
							$item->text=$this->library->textCom('Integration');
							$item->icon='wrench';
							$item->href = 'Products.php?Integration#Integration';
							$items [] =$item;

							$item=new stdClass();
							$item->tmpl='item-service';
							$item->topic='Cloud Solution';
							$item->text=$this->library->textCom('Cloud Solution');
							$item->icon='cloud';
							$item->href = 'Products.php?Cloud-Solution#Cloud-Solution';
							$items [] =$item;

							$item=new stdClass();
							$item->tmpl='item-service';
							$item->topic='Statistics';
							$item->text=$this->library->textCom('Statistics');
							$item->icon='database';
							$item->href = 'Products.php?CMS#CMS';
							$items [] =$item;

							$item=new stdClass();
							$item->tmpl='item-service';
							$item->topic='Web Plugin';
							$item->text=$this->library->textCom('Web Plugin');
							$item->icon='cloud';
							$item->href = 'Products.php?Web-Plugin#Web-Plugin';
							$items [] = $item;
				   return $items;
				   }
				   
				    public function getIntro(){
							$items = array();
							$item=new stdClass();
							$item->tmpl='item-service';
							$item->topic='Bring your vision to life';
							$item->text=$this->library->textCom('Bring your vision to life');
							$item->icon='gift';
							$item->href = 'Products.php?Bring-your-vision-to-life';
							$items [] =$item;

							$item=new stdClass();
							$item->tmpl='item-service';
							$item->topic=' Displaying the Big Picture';
							$item->text=$this->library->textCom('Displaying the Big Picture');
							$item->icon='compass';
							$item->href = 'Products.php';
							$items [] =$item;

							$item=new stdClass();
							$item->tmpl='item-service';
							$item->topic='The Order of Things';
							$item->text=$this->library->textCom('The Order of Things');
							$item->icon='check';
							$item->href = 'Products.php';
							$items [] =$item;
				   return $items;
				   }


   }


