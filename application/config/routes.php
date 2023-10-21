<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

//////////////////////Home Controller//////
$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about'] = 'HomeController/about';
$route['privacy-policy'] = 'HomeController/privacy_policy';
$route['disclamer'] = 'HomeController/disclamer';
$route['why-only-we'] = 'HomeController/why_only_we';
$route['why-digital-marketing'] = 'HomeController/why_digital_marketing';
$route['contact'] = 'HomeController/contact';
$route['blog'] = 'HomeController/blog';
$route['faq'] = 'HomeController/faq';
$route['services/(:num)'] = 'HomeController/services/$1';
$route['(:num)/(:any)'] = 'HomeController/service_detail/$1/$2';

$route['training'] = 'HomeController/training';
$route['training-enquiry'] = 'HomeController/training_enquiry';
$route['contact-enquiry'] = 'HomeController/contact_enquiry';
$route['training-detail/(:num)'] = 'HomeController/training_detail/$1';
$route['blogs'] = 'HomeController/blogs';
$route['blog-detail/(:num)'] = 'HomeController/blog_detail/$1';

$route['careers'] = 'HomeController/careers';
$route['seo'] = 'HomeController/seo';

//////////Home Controller//////

///////admin////////
$route['admin/login'] = 'Admin/Login/index';
$route['admin/do_login'] = 'Admin/Login/do_login';
$route['admin/logout'] = 'Admin/Login/logout';

$route['admin/dashboard'] = 'Admin/dashboard/index';


$route['admin/banner'] = 'Admin/banner/index';
$route['admin/banner/add'] = 'Admin/banner/add';
$route['admin/banner/create'] = 'Admin/banner/create';
$route['admin/banner/edit/(:num)'] = 'Admin/banner/edit/$1';
$route['admin/banner/update/(:num)'] = 'Admin/banner/update/$1';
$route['admin/banner/delete/(:num)'] = 'Admin/banner/delete/$1';

$route['admin/blog'] = 'Admin/Blog/index'; // List all blog posts
$route['admin/blog/create'] = 'Admin/Blog/create'; // Create a new blog post
$route['admin/blog/edit/(:num)'] = 'Admin/Blog/edit/$1'; // Edit a blog post
$route['admin/blog/update/(:num)'] = 'Admin/Blog/update/$1'; // Update a blog post
$route['admin/blog/delete/(:num)'] = 'Admin/Blog/delete/$1'; // Delete a blog post
$route['admin/blog/(:num)'] = 'Admin/Blog/view/$1'; // View a single blog post


$route['admin/faq'] = 'Admin/FAQ/index';
$route['admin/faq/add'] = 'Admin/FAQ/add';
$route['admin/faq/create'] = 'Admin/FAQ/create';
$route['admin/faq/edit/(:num)'] = 'Admin/faq/edit/$1'; // General FAQ edit
$route['admin/faq/edit/(:num)/(:num)'] = 'Admin/faq/edit/$1/$2'; // Service FAQ edit
$route['admin/faq/update/(:num)'] = 'Admin/FAQ/update/$1';
$route['admin/faq/delete/(:num)'] = 'Admin/FAQ/delete/$1';
$route['admin/faq/delete/(:num)/(:num)'] = 'Admin/FAQ/delete/$1/$2';


$route['admin/gallery'] = 'Admin/Gallery/index';
$route['admin/gallery/add'] = 'Admin/Gallery/add';
$route['admin/gallery/create'] = 'Admin/Gallery/create';
$route['admin/gallery/edit/(:num)'] = 'Admin/Gallery/edit/$1';
$route['admin/gallery/update/(:num)'] = 'Admin/Gallery/update/$1';
$route['admin/gallery/delete/(:num)'] = 'Admin/Gallery/delete/$1';


$route['admin/key_highlights/(:num)'] = 'Admin/KeyHighlights/index/$1';
$route['admin/key_highlights/add/(:num)'] = 'Admin/KeyHighlights/add/$1';
$route['admin/key_highlights/create/(:num)'] = 'Admin/KeyHighlights/create/$1';
$route['admin/key_highlights/edit/(:num)'] = 'Admin/KeyHighlights/edit/$1';
$route['admin/key_highlights/update/(:num)'] = 'Admin/KeyHighlights/update/$1';
$route['admin/key_highlights/delete/(:num)'] = 'Admin/KeyHighlights/delete/$1';

$route['admin/testimonials'] = 'Admin/Testimonials/index';
$route['admin/testimonials/add'] = 'Admin/Testimonials/add';
$route['admin/testimonials/create'] = 'Admin/Testimonials/create';
$route['admin/testimonials/edit/(:num)'] = 'Admin/Testimonials/edit/$1';
$route['admin/testimonials/update/(:num)'] = 'Admin/Testimonials/update/$1';
$route['admin/testimonials/delete/(:num)'] = 'Admin/Testimonials/delete/$1';


// Routes for Services
$route['admin/services'] = 'Admin/services/index'; // Display the list of services
$route['admin/services/add'] = 'Admin/services/add'; // Display the form to add a new service
$route['admin/services/create'] = 'Admin/services/create'; // Process the form submission to create a new service
$route['admin/services/edit/(:any)'] = 'Admin/services/edit/$1'; // Display the form to edit an existing service
$route['admin/services/update/(:any)'] = 'Admin/services/update/$1'; // Process the form submission to update a service
$route['admin/services/delete/(:any)'] = 'Admin/services/delete/$1'; // Delete a service


// Routes for Services Cards
$route['admin/services_cards/(:num)'] = 'Admin/services_cards/index/$1'; // Display the list of services cards
//$route['admin/services_cards/(:num)'] = 'admin/services/add_cards/$1';
$route['admin/services_cards/add/(:num)'] = 'Admin/services_cards/add/$1'; // Display the form to add a new service card
$route['admin/services_cards/create/(:num)'] = 'Admin/services_cards/create/$1'; // Process the form submission to create a new service card
$route['admin/services_cards/edit/(:any)/(:num)'] = 'Admin/services_cards/edit/$1/$1'; // Display the form to edit an existing service card
$route['admin/services_cards/update/(:any)'] = 'Admin/services_cards/update/$1'; // Process the form submission to update a service card
$route['admin/services_cards/delete/(:any)/(:any)'] = 'Admin/services_cards/delete/$1/$2'; // Delete a service card


// Training Routes
$route['admin/training'] = 'Admin/training/index';
$route['admin/training/add'] = 'Admin/training/add';
$route['admin/training/create'] = 'Admin/training/create';
$route['admin/training/edit/(:num)'] = 'Admin/training/edit/$1';
$route['admin/training/update/(:num)'] = 'Admin/training/update/$1';
$route['admin/training/delete/(:num)'] = 'Admin/training/delete/$1';


$route['admin/contact'] = 'Admin/Contact';
$route['admin/contact/add'] = 'Admin/Contact/add';
$route['admin/contact/create'] = 'Admin/Contact/create';
$route['admin/contact/edit/(:num)'] = 'Admin/Contact/edit/$1';
$route['admin/contact/update/(:num)'] = 'Admin/Contact/update/$1';
$route['admin/contact/delete/(:num)'] = 'Admin/Contact/delete/$1';

$route['admin/address'] = 'Admin/address/index';
$route['admin/address/add'] = 'Admin/address/add';
$route['admin/address/create'] = 'Admin/address/create';
$route['admin/address/edit/(:num)'] = 'Admin/address/edit/$1';
$route['admin/address/update/(:num)'] = 'Admin/address/update/$1';
$route['admin/address/delete/(:num)'] = 'Admin/address/delete/$1';

$route['admin/social_media'] = 'Admin/social_media/index'; // List all social media data
$route['admin/social_media/add'] = 'Admin/social_media/add'; // Add social media data
$route['admin/social_media/create'] = 'Admin/social_media/create'; // Handle social media data creation
$route['admin/social_media/edit/(:num)'] = 'Admin/social_media/edit/$1'; // Edit social media data by ID
$route['admin/social_media/update/(:num)'] = 'Admin/social_media/update/$1'; // Handle social media data update by ID
$route['admin/social_media/delete/(:num)'] = 'Admin/social_media/delete/$1'; // Delete social media data by ID
$route['admin/social_media/create_or_update'] = 'admin/social_media/create_or_update_social_media'; 


// Routes for Certification Courses
$route['admin/certification_courses'] = 'Admin/CertificationCourses/index';
$route['admin/certification_courses/add'] = 'Admin/CertificationCourses/add';
$route['admin/certification_courses/create'] = 'Admin/CertificationCourses/create';
$route['admin/certification_courses/edit/(:any)'] = 'Admin/CertificationCourses/edit/$1';
$route['admin/certification_courses/update/(:any)'] = 'Admin/CertificationCourses/update/$1';
$route['admin/certification_courses/delete/(:any)'] = 'Admin/CertificationCourses/delete/$1';

$route['admin/training_curriculum/(:num)'] = 'Admin/TrainingCurriculum/index/$1';
$route['admin/training_curriculum/add/(:num)'] = 'Admin/TrainingCurriculum/add/$1';
$route['admin/training_curriculum/create/(:num)'] = 'Admin/TrainingCurriculum/create/$1';
$route['admin/training_curriculum/edit/(:num)'] = 'Admin/TrainingCurriculum/edit/$1';
$route['admin/training_curriculum/update/(:num)'] = 'Admin/TrainingCurriculum/update/$1';
$route['admin/training_curriculum/delete/(:num)'] = 'Admin/TrainingCurriculum/delete/$1';


$route['admin/static_pages_seo'] = 'Admin/StaticPagesSeo/index';  // List all SEO records
$route['admin/static_pages_seo/add'] = 'Admin/StaticPagesSeo/add';  // Create a new SEO record
$route['admin/static_pages_seo/create'] = 'Admin/StaticPagesSeo/create';  // Create a new SEO record
$route['admin/static_pages_seo/edit/(:num)'] = 'Admin/StaticPagesSeo/edit/$1';  // Edit an SEO record
$route['admin/static_pages_seo/update/(:num)'] = 'Admin/StaticPagesSeo/update/$1';

$route['admin/static_pages_seo/delete/(:num)'] = 'Admin/StaticPagesSeo/delete/$1';  // Delete an SEO record

///////admin////////
