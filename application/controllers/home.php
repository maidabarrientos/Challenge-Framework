<?php

class Home extends Controller {
	
	function indexbackup()
	{
		$notfeatured = array();
		$counter = 0;
		 $api = $this->loadModel('ApiModel');
		 $helper = $this->loadHelper('Url_helper');
		$info = $api->getdomaininfo();
		 $test = 0;
		$domain_id = $info['domainid'];
		$info_attributes = $api->getdomainattributes();
		$related_challenges = $api->getrelatedchallenges();
		$getnotfeatured = $api->getnotfeatured();
		$getrelateddomains = $api->getrelateddomains();
		$getfunding = $api->getfunding();
		$feed = $api->rollingblog();
		
		
		
		
		
		$getfeaturedchallenge = $api->getfeaturedchallenge();
		$template = $this->loadView('index');
		$template->set('follow_count',$api->getleadscount());
		$template->set('info', $info);
		$template->set('test', $test);
		$template->set('feed',$feed);
		$template->set('notfeatured',$notfeatured);
		$template->set('getfeaturedchallenge',$getfeaturedchallenge);
		$template->set('getrelateddomains',$getrelateddomains);
		$template->set('getnotfeatured',$getnotfeatured);
		$template->set('getfunding',$getfunding);
		$template->set('info_attributes',$info_attributes);
		$template->set('related_challenges',$related_challenges);
    $template->set('footer_banner', $api->getbanner());
		$template->render();
	}
	
function index()
	{
		$notfeatured = array();
		$counter = 0;
		 $api = $this->loadModel('ApiModel');
		 $helper = $this->loadHelper('Url_helper');
		$info = $api->getdomaininfo();
		 $test = 0;
		$domain_id = $info['domainid'];
		$info_attributes = $api->getdomainattributes();
		$related_challenges = $api->getrelatedchallenges();
		$getnotfeatured = $api->getnotfeatured();
		$getrelateddomains = $api->getrelateddomains();
		$getfunding = $api->getfunding();
		//$feed = $api->rollingblog();
	  $featured_id = $api->getfeaturedid();	
		$getfeaturedchallenge = $api->getfeaturedchallenge();
		
		// echo '<pre>';
		// print_r($getfeaturedchallenge);
		// echo '</pre>';
		// die();
		
		$template = $this->loadView('index');
    $template->set('featured_id',$featured_id);
		$template->set('follow_count',$api->getleadscount());
		$template->set('info', $info);
		$template->set('test', $test);
		//$template->set('feed',$feed);
		$template->set('notfeatured',$notfeatured);
		$template->set('getfeaturedchallenge',$getfeaturedchallenge);
		$template->set('getrelateddomains',$getrelateddomains);
		$template->set('getnotfeatured',$getnotfeatured);
		$template->set('getfunding',$getfunding);
		$template->set('info_attributes',$info_attributes);
		$template->set('related_challenges',$related_challenges);
    $template->set('footer_banner', $api->getbanner());
    $template->set('cdiscussions', $api->getchallengediscussions());
		$template->render();
	}
	
	function fund(){
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$info = $api->getdomaininfo();
		$info_attributes = $api->getdomainattributes();
		$getrelateddomains = $api->getrelateddomains();
		$getfunding = $api->getfunding();
		
		$template = $this->loadView('fund');
		$template->set('getfunding',$getfunding);
		$template->set('getrelateddomains',$getrelateddomains);
		$template->set('info',$info);
		$template->set('info_attributes',$info_attributes);
		$template->render();
	
	}
	
	function developers()
	{
	
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$info = $api->getdomaininfo();
		$info_attributes = $api->getdomainattributes();
		$getrelateddomains = $api->getrelateddomains();
		$getfunding = $api->getfunding();
		
		$template = $this->loadView('developers');
		$template->set('getfunding',$getfunding);
		$template->set('getrelateddomains',$getrelateddomains);
		$template->set('info',$info);
		$template->set('info_attributes',$info_attributes);
		$template->render();
	
	
	
	}
	
	function howtosponsor(){
	
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$info_attributes = $api->getdomainattributes();
		$info = $api->getdomaininfo();
		$template = $this->loadView('howtosponsor');
		$template->set('info',$info);
		$template->set('info_attributes',$info_attributes);
		$template->render();
	
	
	}
	
	function about(){
		
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$info = $api->getdomaininfo();
		$info_attributes = $api->getdomainattributes();
		$template = $this->loadView('about');
		$template->set('info',$info);
		$template->set('info_attributes',$info_attributes);
    $template->set('footer_banner', $api->getbanner());
		$template->render();
	
	
	
	}
	
	function contact(){
	
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$info = $api->getdomaininfo();
		$info_attributes = $api->getdomainattributes();
		$template = $this->loadView('contact');
		$template->set('info',$info);
		$template->set('info_attributes',$info_attributes);
    $template->set('footer_banner', $api->getbanner());
		$template->render();
	
	}
	
	function policy(){
	
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$info = $api->getdomaininfo();
		$info_attributes = $api->getdomainattributes();
		$template = $this->loadView('policy');
		$template->set('info',$info);
		$template->set('info_attributes',$info_attributes);
    $template->set('footer_banner', $api->getbanner());
		$template->render();
	
	
	}
	
	function terms(){
	
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$info = $api->getdomaininfo();
		$info_attributes = $api->getdomainattributes();
		$template = $this->loadView('terms');
		$template->set('info_attributes',$info_attributes);
		$template->set('info',$info);
    $template->set('footer_banner', $api->getbanner());
		$template->render();
	
	}
	
	function staffing(){
	
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$info = $api->getdomaininfo();
		$info_attributes = $api->getdomainattributes();
		$jobs = $api->getjobsperdomain();
		
		$template = $this->loadView('staffing');
		$template->set('info',$info);
		$template->set('info_attributes',$info_attributes);
		$template->set('jobs',$jobs);
    $template->set('footer_banner', $api->getbanner());
		$template->render();
	
	}
	
	function apps(){
	
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$info = $api->getdomaininfo();
		$info_attributes = $api->getdomainattributes();
		$template = $this->loadView('apps');
		$template->set('info_attributes',$info_attributes);
		$template->set('info',$info);
    $template->set('footer_banner', $api->getbanner());
		$template->render();
	
	}
		
	function sitemap(){
	
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$info = $api->getdomaininfo();
		$info_attributes = $api->getdomainattributes();
		$template = $this->loadView('sitemap');
		$template->set('info',$info);
		$template->set('info_attributes',$info_attributes);
    $template->set('footer_banner', $api->getbanner());
		$template->render();
	
	}
	
	function referral(){
	
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$info = $api->getdomaininfo();
		$domain_affiliate_link = $api->getaffiliatelink();
		$info_attributes = $api->getdomainattributes();
		$template = $this->loadView('referral');
		$template->set('info',$info);
		$template->set('info_attributes',$info_attributes);
		$template->set('domain_affiliate_link',$domain_affiliate_link);
    $template->set('footer_banner', $api->getbanner());
		$template->render();
	
	}
	
    function partners(){
		$api = $this->loadModel('ApiModel');
		$info = $api->getdomaininfo();
		$info_attributes = $api->getdomainattributes();
		$partners = $api->getpartners();
		
		$template = $this->loadView('partner');
		$template->set('info',$info);
		$template->set('info_attributes',$info_attributes);
		$template->set('partners',$partners);
    $template->set('footer_banner', $api->getbanner());
		$template->render();
	}
	function success()
	{
	
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$info = $api->getdomaininfo();
		$info_attributes = $api->getdomainattributes();
		$getrelateddomains = $api->getrelateddomains();
		$getfunding = $api->getfunding();
		
		$template = $this->loadView('success');
		$template->set('getfunding',$getfunding);
		$template->set('getrelateddomains',$getrelateddomains);
		$template->set('info',$info);
		$template->set('info_attributes',$info_attributes);
		$template->render();
	
	
	
	}
}

?>