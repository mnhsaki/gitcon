<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



$route['dashbord'] = 'welcome';

//settings
$route['profile'] = 'settings/profile';

//sales
$route['add_new_sale'] = 'sales/add_new_sale';
$route['today_sale'] = 'sales/today_sale';
$route['list_of_today_sale'] = 'sales/list_of_today_sale';
$route['return_product'] = 'sales/return_product';
$route['list_of_due'] = 'sales/list_of_due';

//Invoice
$route['add_new_invoice'] = 'invoice/add_new_invoice';
$route['list_of_invoice'] = 'invoice/list_of_invoice';

//Logistics
// $route['create_delivery_voucher'] = 'logistics/create_delivery_voucher';
// $route['today_delivery_list'] = 'logistics/today_delivery_list';
// $route['delivery_voucher_list'] = 'logistics/delivery_voucher_list';
// $route['today_receive_list'] = 'logistics/today_receive_list';
// $route['today_voucher_list'] = 'logistics/today_voucher_list';


//settings
//div
$route['add_new_div'] = 'Settings/add_new_div';
$route['list_of_div'] = 'settings/list_of_div';
//zone
$route['add_new_zone'] = 'settings/add_new_zone';
$route['list_of_zone'] = 'settings/list_of_zone';
//Area
$route['add_new_area'] = 'settings/add_new_area';
$route['list_of_area'] = 'settings/list_of_area';
//Sales Manager
$route['add_new_sales_manager'] = 'settings/add_new_sales_manager';
$route['list_of_sales_manager'] = 'settings/list_of_sales_manager';
//team leader
$route['add_new_team_leader'] = 'settings/add_new_team_leader';
$route['list_of_team_leader'] = 'settings/list_of_team_leader';
//team member
$route['add_new_team_member'] = 'settings/add_new_team_member';
$route['list_of_team_member'] = 'settings/list_of_team_member';
//User Groups
$route['Add_New_User_Groups'] = 'User_Groups/add_new_user_groups';
$route['Manage_User_Groups'] = 'User_Groups/manage_user_groups';
//Usears
$route['add_new_user'] = 'usears/add_new_user';
$route['manage_user'] = 'usears/manage_user';


//Product
    $route['add_new_product'] = 'product/add_new_product';
    $route['list_of_product'] = 'product/list_of_product';
    $route['print_barcode_label'] = 'product/print_barcode_label';

    //Category
    $route['add_new_category'] = 'category/add_new_category';
    $route['list_of_category'] = 'category/list_of_category';

    //Attribute
    $route['add_new_attribute'] = 'attribute/add_new_attribute';
    $route['list_of_attribute'] = 'attribute/list_of_attribute';

    //Brand
    $route['add_new_brand'] = 'brand/add_new_brand';
    $route['list_of_brand'] = 'brand/list_of_brand';

    //Product Group
    $route['Add_New_Product_Group'] = 'Product_Group/add_new_Product_group';
    $route['List_of_Product_Group'] = 'Product_Group/list_of_Product_group';

    //UOM
    $route['Add_New_UOM'] = 'uom/add_new_uom';
    $route['List_of_UOM'] = 'uom/list_of_uom';

    //Product View
    $route['Product_View'] = 'product/product_view';
    $route['Product_Edit'] = 'product/product_edit';

//inventory
$route['inventory'] = 'inventory/all_inventory';
$route['inventory_adjustment'] = 'inventory/inventory_adjustment';
$route['inventory_adjustment_list'] = 'inventory/inventory_adjustment_list';


//Purchases
$route['add_new_purchases'] = 'purchases/add_new_purchases';
$route['list_of_purchases'] = 'purchases/list_of_purchases';
$route['purchases_return'] = 'purchases/purchases_return';

//Transfer
$route['add_new_transfer'] = 'transfer/add_new_transfer';
$route['list_of_transfer'] = 'transfer/list_of_transfer';

//Delivery
$route['create_delivery'] = 'delivery/create_delivery';
$route['list_of_delivery'] = 'delivery/list_of_delivery';
$route['create_delivery_warehouses'] = 'delivery/create_delivery_warehouses';
$route['list_of_warehouses'] = 'delivery/list_of_warehouses';

//Client
$route['add_new_client'] = 'client/add_new_client';
$route['list_of_client'] = 'client/list_of_client';
$route['client_details'] = 'client/client_details';


//Suppliers
$route['add_new_suppliers'] = 'suppliers/add_new_suppliers';
$route['list_of_suppliers'] = 'suppliers/list_of_suppliers';
$route['suppliers_payment'] = 'suppliers/suppliers_payment';
$route['payment_report'] = 'suppliers/payment_report';

//Expenses
$route['add_new_expenses'] = 'expenses/add_new_expenses';
$route['list_of_expences'] = 'expenses/list_of_expences';


