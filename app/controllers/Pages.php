<?php
	class Pages extends Controller{
		public function __construct(){
			$this->pageModel = $this->model('Page');
		}

		public function index(){
			
			$data = [
				'title' => 'Welcome to homepage',
				'description' => 'this is our sharepost practice homepage'
			];
			
			$this->view('pages/index', $data);
		}

		public function about(){
			$data = [
				'title' => 'Welcome to about page'
			];

			$this->view('pages/about', $data);
		}

		public function service(){
			$data = [
				'title' => 'Services'
			];

			$this->view('pages/service', $data);
		}

		public function track(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$data = [
					'email' => trim($_POST['email']),
					'track' => trim($_POST['track']),
					'email_err' => '',
					'track_err' => ''
				];

				if (empty($data['email'])) {
					$data['email_err'] = 'email is empty'; 
				}
				if (empty($data['track'])) {
					$data['track_err'] = 'track number must not be empty';
				}

				if (empty($data['email_err']) && empty($data['track_err'])) {
					$shipment = $this->pageModel->getTrack($data['track']);
					if($shipment){
						$data = [
							'shipment' => $shipment
						];
						$this->view('pages/track', $data);
					}else{
						flash('message', 'shipping details not found');
						redirect('pages/track');
					}
				}else{
					$this->view('pages/track', $data);
				}

			}else{
				$data = [
					'email' => '',
					'track' => '',
					'email_err' => '',
					'track_err' => ''
				];
				$this->view('pages/track', $data);
			}				
		}

		
	}