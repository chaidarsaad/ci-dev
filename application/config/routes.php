<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['dashboard/v1'] = 'backend/dashboard/dashboardv1';
$route['dashboard/v2'] = 'backend/dashboard/dashboardv2';
$route['dashboard/v3'] = 'backend/dashboard/dashboardv3';

$route['widget'] = 'backend/widget/index';

$route['layout/topnav'] = 'backend/layout/topnav';
$route['layout/topnavsidebar'] = 'backend/layout/topnavsidebar';
$route['layout/boxed'] = 'backend/layout/boxed';
$route['layout/fixedsidebar'] = 'backend/layout/fixedsidebar';
$route['layout/fixedsidebarcustomarea'] = 'backend/layout/fixedsidebarcustomarea';
$route['layout/fixednavbar'] = 'backend/layout/fixednavbar';
$route['layout/fixedfooter'] = 'backend/layout/fixedfooter';
$route['layout/collapse'] = 'backend/layout/collapse';

$route['charts/chartjs'] = 'backend/charts/chartjs';
$route['charts/flot'] = 'backend/charts/flot';
$route['charts/inline'] = 'backend/charts/inline';
$route['charts/uplot'] = 'backend/charts/uplot';

$route['ui/general'] = 'backend/ui/general';
$route['ui/icons'] = 'backend/ui/icons';
$route['ui/buttons'] = 'backend/ui/buttons';
$route['ui/sliders'] = 'backend/ui/sliders';
$route['ui/modalsalerts'] = 'backend/ui/modalsalerts';
$route['ui/navbartabs'] = 'backend/ui/navbartabs';
$route['ui/timeline'] = 'backend/ui/timeline';
$route['ui/ribbons'] = 'backend/ui/ribbons';

$route['forms/generalelements'] = 'backend/forms/generalelements';

$route['forms/advancedelements'] = 'backend/forms/advancedelements';
$route['forms/editors'] = 'backend/forms/editors';
$route['forms/validation'] = 'backend/forms/validation';

$route['tables/simpletables'] = 'backend/tables/simpletables';
$route['tables/datatables'] = 'backend/tables/datatables';
$route['tables/jsgrid'] = 'backend/tables/jsgrid';

$route['calendar'] = 'backend/calendar';

$route['gallery'] = 'backend/gallery';

$route['kanbanboard'] = 'backend/kanbanboard';

$route['mailbox/inbox'] = 'backend/mailbox/inbox';
$route['mailbox/compose'] = 'backend/mailbox/compose';
$route['mailbox/read'] = 'backend/mailbox/read';

$route['pages/invoice'] = 'backend/pages/invoice';
$route['pages/printinvoice'] = 'backend/pages/printinvoice';
$route['pages/profile'] = 'backend/pages/profile';
$route['pages/ecommerce'] = 'backend/pages/ecommerce';
$route['pages/projects'] = 'backend/pages/projects';
$route['pages/projectadd'] = 'backend/pages/projectadd';
$route['pages/projectedit'] = 'backend/pages/projectedit';
$route['pages/projectdetail'] = 'backend/pages/projectdetail';
$route['pages/contacts'] = 'backend/pages/contacts';
$route['pages/faq'] = 'backend/pages/faq';
$route['pages/contactus'] = 'backend/pages/contactus';

$route['extras/loginv1'] = 'backend/extras/loginv1';
$route['extras/registerv1'] = 'backend/extras/registerv1';
$route['extras/forgotpasswordv1'] = 'backend/extras/forgotpasswordv1';
$route['extras/recoverpasswordv1'] = 'backend/extras/recoverpasswordv1';

$route['extras/loginv2'] = 'backend/extras/loginv2';
$route['extras/registerv2'] = 'backend/extras/registerv2';
$route['extras/forgotpasswordv2'] = 'backend/extras/forgotpasswordv2';
$route['extras/recoverpasswordv2'] = 'backend/extras/recoverpasswordv2';

$route['extras/lockscreen'] = 'backend/extras/lockscreen';
$route['extras/legacymenu'] = 'backend/extras/legacymenu';
$route['extras/languagemenu'] = 'backend/extras/languagemenu';
$route['extras/error404'] = 'backend/extras/error404';
$route['extras/error500'] = 'backend/extras/error500';
$route['extras/pace'] = 'backend/extras/pace';
$route['extras/blankpage'] = 'backend/extras/blankpage';
$route['extras/starterpage'] = 'backend/extras/starterpage';

$route['search/simplesearch'] = 'backend/search/simplesearch';
$route['search/simpleresults'] = 'backend/search/simpleresults';
$route['search/enhanced'] = 'backend/search/enhanced';
$route['search/enhancedresults'] = 'backend/search/enhancedresults';

$route['iframe'] = 'backend/iframe';

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

// original
// $route['default_controller'] = 'welcome';
// $route['404_override'] = '';
// $route['translate_uri_dashes'] = FALSE;
