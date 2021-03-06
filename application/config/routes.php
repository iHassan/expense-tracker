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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller']   = 'website';
$route['404_override']         = '';
$route['translate_uri_dashes'] = FALSE;

/**
 * login/register routes
 */

$route['app/login']                  = '';
$route['app/sign-up']                = 'User_Signup/create_user';
$route['app/login']                  = 'User_Login/login';
$route['login']                      = 'User_Login/login';
$route['sign-up']                    = 'User_Signup/create_user';
$route['app/signup-thankyou']        = 'User_Signup/show_activation_msg';
$route['app/activate']               = 'User_Signup/activate';
$route['app/activate/(:any)/(:any)'] = 'User_Signup/activate/$1/$1';
$route['app/activation-success']     = 'User_Signup/show_activation_success_msg';
$route['app/dashboard']              = 'Dashboard/index';
$route['app/logout']                 = 'User_Login/logout';

$route['app/edit-profile']           = 'Edit_User_Profile/index';
$route['app/add-income']             = 'Expense_controller/add_income';
$route['app/new-expense']            = 'Expense_controller/new_expense';
$route['app/expense-overview']       = 'Expense_controller/expense_overview';
$route['app/edit-expense/(:num)']    = 'Expense_controller/edit_expense/$1';
$route['app/add-budget']             = 'Budget_controller/add_budget';
$route['app/remind-user-budget-email'] = 'Budget_controller/email_reminder';

