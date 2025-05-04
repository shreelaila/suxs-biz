
INSERT INTO `abilities` (`id` ,`name`,`label`,`parent`,`is_module`,`is_gate`,`gate_type`,`created_at`,`updated_at` ) VALUES

(1, 'm_dashboard', 'Dashboard', 0, 'y', 'y', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'add_dashboard', 'Add Dashboard', 1, '', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'edit_dashboard', 'Edit Dashboard', 1, '', '', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'delete_dashboard', 'Delete Dashboard', 1, '', '', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'view_dashboard', 'View Dashboard', 1, '', '', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),


(6,'m_configuration','Configuration',0,'','','','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(7,'sm_branch','Branch',6,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(8,'add_branch','Add Branch',7,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(9,'edit_branch','Edit Branch',7,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(10,'delete_branch','Delete Branch',7,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(11,'view_branch','View Branch',7,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(12,'sm_source_of_enquires','Source Of Enquires',6,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(13,'add_source_of_enquires','Add Source Of Enquires',12,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(14,'edit_source_of_enquires','Edit Source Of Enquires',12,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(15,'delete_source_of_enquires','Delete Source Of Enquires',12,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(16,'view_source_of_enquires','View Source Of Enquires',12,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(17,'sm_manage_product','Manage Product',6,'','','','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(18,'sm_m_category_lists','Category Lists',17,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(19,'add_category_lists','Add Category Lists',18,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(20,'edit_category_lists','Edit Category Lists',18,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(21,'delete_category_lists','Delete Category Lists',18,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(22,'view_category_lists','View Category Lists',18,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(23,'sm_m_brand','Brand',17,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(24,'add_brand','Add Brand',23,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(25,'edit_brand','Edit Brand',23,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(26,'delete_brand','Delete Brand',23,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(27,'view_brand','View Brand',23,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(28,'sm_m_units','Units',17,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(29,'add_units','Add Units',28,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(30,'edit_units','Edit Units',28,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(31,'delete_units','Delete Units',28,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(32,'view_units','View Units',28,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(33,'sm_m_size','Size',17,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(34,'add_size','Add Size',33,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(35,'edit_size','Edit Size',33,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(36,'delete_size','Delete Size',33,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(37,'view_size','View Size',33,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(38,'sm_m_tax_type','Tax Type',17,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(39,'add_tax_type','Add Tax Type',38,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(40,'edit_tax_type','Edit Tax Type',38,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(41,'delete_tax_type','Delete Tax Tye',38,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(42,'view_tax_type','View Tax Type',38,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(43,'sm_m_custom_attributes','Custom Attributes',17,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(44,'add_custom_attributes','Add Custom Attributes',43,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(45,'edit_custom_attributes','Edit Custom Attributes',43,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(46,'delete_custom_attributes','Delete Custom Attributes',43,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(47,'view_custom_attributes','View Custom Attributes',43,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(48,'sm_m_add_product','Add Product',17,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(49,'add_add_product','Add Add Product',48,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(50,'edit_add_product','Edit Add Product',48,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(51,'delete_add_product','Delete Add Product',48,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(52,'view_add_product','View Add Product',48,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(53,'sm_m_print_barcode','Print Barcode',17,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(54,'add_print_barcode','Add Print Barcode',53,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(55,'edit_print_barcode','Edit Print Barcode',53,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(56,'delete_print_barcode','Delete Print Barcode',53,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(57,'view_print_barcode','View Print Barcode',53,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(58,'sm_m_discount','Discount',17,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(59,'add_discount','Add Discount',58,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(60,'edit_discount','Edit Discount',58,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(61,'delete_discount','Delete Discount',58,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(62,'view_discount','View Discount',58,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(63,'sm_m_publish_product','Publish Product',17,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(64,'add_publish_product','Add Publish Product',63,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(65,'edit_publish_product','Edit Publish Product',63,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(66,'delete_publish_product','Delete Publish Product',63,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(67,'view_publish_product','View Publish Product',63,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(68,'m_enquires','Enquires',0,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(69,'add_enquires','Add Enquires',68,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(70,'edit_enquires','Edit Enquires',68,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(71,'delete_enquires','Delete Enquires',68,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(72,'view_enquires','View Enquires',68,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(73,'m_sales','Sales',0,'','','','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(74,'sm_pos_lists','POS Lists',73,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(75,'add_pos','Add POS',74,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(76,'edit_pos','Edit POS',74,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(77,'delete_pos','Delete POS',74,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(78,'view_pos','View POS',74,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(79,'sm_quotation_lists','Quotation Lists',73,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(80,'add_quotation_lists','Add Quotation Lists',79,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(81,'edit_quotation_lists','Edit Quotation Lists',79,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(82,'delete_quotation_lists','Delete Quotation Lists',79,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(83,'view_quotation_lists','View Quotation Lists',79,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(84,'sm_sales_order_lists','Sales Order Lists',73,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(85,'add_sales_order_lists','Sales Order Lists',84,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(86,'edit_sales_order_lists','Sales Order Lists',84,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(87,'delete_sales_order_lists','Sales Order Lists',84,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(88,'view_sales_order_lists','Sales Order Lists',84,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(89,'sm_stock_lists','Stock Lists',73,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(90,'add_stock_lists','Add Stock Lists',89,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(91,'edit_stock_lists','Edit Stock Lists',89,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(92,'delete_stock_lists','Delete Stock Lists',89,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(93,'view_stock_lists','View Stock Lists',89,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(94,'sm_sales_tracking','Sales Tracking',73,'','','','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(95,'m_hrm','Hrm',0,'','','','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(96,'sm_department_lists','Department Lists',95,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(97,'add_department_lists','Add Department Lists',96,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(98,'edit_department_lists','Edit Department Lists',96,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(99,'delete_department_lists','Delete Department Lists',96,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(100,'view_department_lists','View Department Lists',96,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(101,'sm_designation_lists','Designation Lists',95,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(102,'add_designation_lists','Add Designation Lists',101,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(103,'edit_designation_lists','Edit Designation Lists',101,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(104,'delete_designation_lists','Delete Designation Lists',101,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(105,'view_designation_lists','View Designation Lists',101,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(106,'sm_register_employees','Register Employees',95,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(107,'add_register_employees','Add Register Employees',106,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(108,'edit_register_employees','Edit Register Employees',106,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(109,'delete_register_employees','Delete Register Employees',106,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(110,'view_register_employees','View Register Employees',106,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(111,'m_customers','Customers',0,'','','','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(112,'sm_manage_customers','Manage Customers',111,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(113,'add_manage_customers','Add Manage Customers',112,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(114,'edit_manage_customers','Edit Manage Customers',112,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(115,'delete_manage_customers','DeleteManage Customers',112,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(116,'view_manage_customers','View Manage Customers',112,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(117,'sm_order_historys','Order Historys',111,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(118,'add_order_historys','Add Order Historys',117,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(119,'edit_order_historys','Edit Order Historys',117,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(120,'delete_order_historys','Delete Order Historys',117,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(121,'view_order_historys','View Order Historys',117,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(122,'sm_feedback','Feedback',111,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(123,'add_feedback','Add Feedback',122,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(124,'edit_feedback','Edit Feedback',122,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(125,'delete_feedback','Delete Feedback',122,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(126,'view_feedback','View Feedback',122,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(127,'m_services','Services',0,'','','','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(128,'sm_service_category_lists','Service Category Lists',127,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(129,'add_service_category_lists','Add Service Category Lists',128,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(130,'edit_service_category_lists','Edit Service Category Lists',128,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(131,'delete_service_category_lists','Delete Service Category Lists',128,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(132,'view_service_category_lists','View Service Category Lists',128,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(133,'sm_service_catalogue_lists','Service Catalogue Lists',127,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(134,'add_service_catalogue_lists','Add Service Catalogue Lists',133,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(135,'edit_service_catalogue_lists','Edit Service Catalogue Lists',133,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(136,'delete_service_catalogue_lists','Delete Service Catalogue Lists',133,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(137,'view_service_catalogue_lists','View Service Catalogue Lists',133,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(138,'sm_service_request_lists','Service Request Lists',127,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(139,'add_service_request_lists','Add Service Request Lists',138,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(140,'edit_service_request_lists','Edit Service Request Lists',138,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(141,'delete_service_request_lists','Delete Service Request Lists',138,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(142,'view_service_request_lists','View Service Request Lists',138,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(143,'sm_service_schedule_lists','Service Schedule Lists',127,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(144,'add_service_schedule_lists','Add Service Schedule Lists',143,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(145,'edit_service_schedule_lists','Edit Service Schedule Lists',143,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(146,'delete_service_schedule_lists','Delete Service Schedule Lists',143,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(147,'view_service_schedule_lists','View Service Schedule Lists',143,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(148,'m_vendor_lists','Vendor Lists',0,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(149,'add_vendor_lists','Add Vendor Lists',148,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(150,'edit_vendor_lists','Edit Vendor Lists',148,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(151,'delete_vendor_lists','Delete Vendor Lists',148,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(152,'view_vendor_lists','View Vendor Lists',148,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(153,'m_purchase_lists','Purchase Lists',0,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(154,'add_purchase_lists','Add Purchase Lists',153,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(155,'edit_purchase_lists','Edit Purchase Lists',153,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(156,'delete_purchase_lists','Delete Purchase Lists',153,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(157,'view_purchase_lists','View Purchase Lists',153,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(158,'m_goods_inwards_lists','Goods Inwards Lists',0,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(159,'add_goods_inwards_lists','Add Goods Inwards Lists',158,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(160,'edit_goods_inwards_lists','Edit Goods Inwards Lists',158,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(161,'delete_goods_inwards_lists','Delete Goods Inwards Lists',158,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(162,'view_goods_inwards_lists','View Goods Inwards Lists',158,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(163,'m_recived_invoices_lists','Recived Invoices Lists',0,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(164,'add_recived_invoices_lists','Add Recived Invoices Lists',163,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(165,'edit_recived_invoices_lists','Edit Recived Invoices Lists',163,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(166,'delete_recived_invoices_lists','Delete Recived Invoices Lists',163,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(167,'view_recived_invoices_lists','View Recived Invoices Lists',163,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(168,'m_return_lists','Return Lists',0,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(169,'add_return_lists','Add Return Lists',168,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(170,'edit_return_lists','Edit Return Lists',168,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(171,'delete_return_lists','Delete Return Lists',168,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(172,'view_return_lists','View Return Lists',168,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),


(173,'m_settings','Settings',0,'','','','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(174,'sm_roles_permission','Roles and Permission',173,'','','','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(175,'sm_m_roles','Roles',174,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(176,'add_roles','Add Roles',175,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(177,'edit_roles','Edit Roles',175,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(178,'delete_roles','Delete Roles',175,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(179,'view_roles','View Roles',175,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00'),

(180,'sm_m_acm','ACM',174,'y','y','','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(181,'add_acm','Add ACM',180,'','','1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(182,'edit_acm','Edit ACM',180,'','','2','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(183,'delete_acm','Delete ACM',180,'','','3','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(184,'view_acm','View ACM',180,'','','4','0000-00-00 00:00:00','0000-00-00 00:00:00')
