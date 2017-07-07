CREATE DATABASE Cimis;
USE CIMIS;	

CREATE TABLE tbl_address
(
	add_ID INT NOT NULL IDENTITY(1,1),
	add_blcknum varchar(10),
	add_street varchar(20),
	add_subdivision varchar(20),
	add_brngy varchar(20),
	add_district varchar(20),
	add_city varchar(20),
	add_province varchar(20),
	add_region varchar(11),
	add_zipcode varchar(4),
	PRIMARY KEY (add_ID)
);

CREATE TABLE tbl_personal_info
(
	pinfo_ID INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	pinfo_first_name varchar(30) NOT NULL,
	pinfo_middle_name varchar(20),
	pinfo_last_name varchar(20) NOT NULL,
	pinfo_gender INT NOT NULL,
	pinfo_cpnum_1 varchar(13) NOT NULL,
	pinfo_cpnum_2 varchar(13),
	pinfo_tpnum varchar(11),
	pinfo_mail varchar(30) NOT NULL,
	pinfo_age DATE NOT NULL,
	pinfo_picture varchar(50),
);

CREATE TABLE tbl_client_type
(	
	clientType_ID INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	clientType_type varchar(20) NOT NULL UNIQUE,
	clientType_desc varchar(50),
	del_flag int NOT NULL,
	created_at datetime NOT NULL,
	updated_at datetime NOT NULL
);

CREATE TABLE tbl_contact_person
(
	cPerson_ID INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	personal_info_ID INT NOT NULL,
	FOREIGN KEY (personal_info_ID) REFERENCES tbl_personal_info (pinfo_ID)
);

CREATE TABLE tbl_sender
(
	sender_ID INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	personal_info_ID INT NOT NULL,
	del_flag int NOT NULL,
	created_at datetime NOT NULL,
	updated_at datetime NOT NULL,
	FOREIGN KEY (personal_info_ID) REFERENCES tbl_personal_info (pinfo_ID)
);

CREATE TABLE tbl_courier
(
	courier_ID INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	personal_info_ID INT NOT NULL,
	courier_add_ID INT NOT NULL,
	del_flag int NOT NULL,
	created_at datetime NOT NULL,
	updated_at datetime NOT NULL,
	FOREIGN KEY	(courier_add_ID) REFERENCES tbl_address(add_ID),
	FOREIGN KEY (personal_info_ID) REFERENCES tbl_personal_info (pinfo_ID)
);

CREATE TABLE tbl_salesagent
(
	agent_ID INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	personal_info_ID INT NOT NULL,
	agent_add_ID int NOT NULL,
	del_flag int NOT NULL,
	created_at datetime NOT NULL,
	updated_at datetime NOT NULL,
	FOREIGN KEY (personal_info_ID) REFERENCES tbl_personal_info (pinfo_ID),
	FOREIGN KEY	(agent_add_ID) REFERENCES tbl_address(add_ID),
);

CREATE TABLE tbl_employee_role
(
	emp_role_ID INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	emp_role_Name varchar(20) NOT NULL,
	emp_role_desc varchar(50) NOT NULL,
	created_at datetime NOT NULL,
	updated_at datetime NOT NULL,
	del_flag int NOT NULL,
);

CREATE TABLE tbl_employee
(
	emp_ID INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	emp_role_ID INT NOT NULL,
	personal_info_ID INT NOT NULL,
	emp_add_ID int NOT NULL,
	emp_sales INT NOT NULL,
	del_flag int NOT NULL,
	created_at datetime NOT NULL,
	updated_at datetime NOT NULL,
	FOREIGN KEY (emp_role_ID) REFERENCES tbl_employee_role(emp_role_ID),
	FOREIGN KEY (personal_info_ID) REFERENCES tbl_personal_info (pinfo_ID),
	FOREIGN KEY	(emp_add_ID) REFERENCES tbl_address(add_ID),
);

CREATE TABLE tbl_client
(
	client_ID INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	personal_info_ID INT NOT NULL,
	client_add_ID int NOT NULL,
	del_flag int NOT NULL,
	client_sales_ID INT NOT NULL,
	created_at datetime NOT NULL,
	updated_at datetime NOT NULL,
	FOREIGN KEY	(client_add_ID) REFERENCES tbl_address(add_ID),
	FOREIGN KEY	(client_sales_ID) REFERENCES tbl_salesagent(agent_ID),
	FOREIGN KEY (personal_info_ID) REFERENCES tbl_personal_info (pinfo_ID)
);

CREATE TABLE tbl_user_accounts
(
	user_ID INT NOT NULL PRIMARY KEY,
	user_name varchar(20) NOT NULL UNIQUE,
	user_password varchar(20) NOT NULL,
	del_flag int NOT NULL,
	created_at datetime NOT NULL,
	updated_at datetime NOT NULL,
	FOREIGN KEY (user_ID) REFERENCES tbl_employee (emp_ID)
);

CREATE TABLE tbl_company_info
(
	comp_ID INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	comp_name varchar(30) NOT NULL,
	comp_telnum varchar(11) NOT NULL,
	comp_faxnum varchar(30),
	comp_email varchar(30) NOT NULL,
	comp_add_ID int NOT NULL,
	comp_cperson_ID int NOT NULL,
	comp_type INT NOT NULL,
	comp_sales_agent INT,
	del_flag int NOT NULL,
	created_at datetime NOT NULL,
	updated_at datetime NOT NULL,
	FOREIGN KEY (comp_sales_agent) REFERENCES tbl_salesagent(agent_ID),
	FOREIGN KEY (comp_cperson_ID) REFERENCES tbl_contact_person(cPerson_ID),
	FOREIGN KEY	(comp_add_ID) REFERENCES tbl_address(add_ID),
);

CREATE TABLE tbl_bank_info
(
	bank_ID INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	bank_name varchar(50) NOT NULL,
	bank_name_alt varchar(50) NOT NULL,
	bank_mail varchar(20) NOT NULL,
	bank_telnum varchar(11) NOT NULL,
	bank_faxnum varchar(11),
	bank_cperson_ID int NOT NULL,
	bank_add_ID int NOT NULL,
	del_flag int NOT NULL,
	created_at datetime NOT NULL,
	updated_at datetime NOT NULL,
	FOREIGN KEY	(bank_add_ID) REFERENCES tbl_address(add_ID),
	FOREIGN KEY (bank_cperson_ID) REFERENCES tbl_contact_person(cPerson_ID)
);

CREATE TABLE tbl_policynumber
(
	policy_number varchar(20) NOT NULL PRIMARY KEY,
	insurance_compID INT NOT NULL,
	policyStatus_ID INT NOT NULL,
	del_flag int NOT NULL,
	created_at datetime NOT NULL,
	updated_at datetime NOT NULL,
	FOREIGN KEY (insurance_compID) REFERENCES tbl_company_info(comp_ID)
);

CREATE TABLE tbl_installment_type
(
	installment_ID INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	installment_type varchar(50) NOT NULL UNIQUE,
	installment_desc varchar(50),
	del_flag int NOT NULL,
	created_at datetime NOT NULL,
	updated_at datetime NOT NULL
);

CREATE TABLE tbl_vehicle_make
(
	vehicle_make_ID INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	vehicle_make_name varchar(20) NOT NULL UNIQUE,
	vehicle_make_desc varchar(200) NOT NULL UNIQUE,
	del_flag int NOT NULL,
	created_at datetime NOT NULL,
	updated_at datetime NOT NULL
);

CREATE TABLE tbl_vehicle_type
(
	vehicle_type_ID INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	vehicle_type_name varchar(20) NOT NULL UNIQUE,
	vehicle_type_desc varchar(50),
	del_flag int NOT NULL,
	created_at datetime NOT NULL,
	updated_at datetime NOT NULL
);

CREATE TABLE tbl_vehicle_model
(
	vehicle_model_ID INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	vehicle_model_name varchar(20) NOT NULL,
	vehicle_make_ID INT NOT NULL,
	vehicle_year varchar(4) NOT NULL,
	vehicle_type INT NOT NULL,
	vehicle_value FLOAT NOT NULL,
	vehicle_picture varchar(50),
	del_flag int NOT NULL,
	created_at datetime NOT NULL,
	updated_at datetime NOT NULL,
	FOREIGN KEY (vehicle_type) REFERENCES tbl_vehicle_type(vehicle_type_ID),
	FOREIGN KEY (vehicle_make_ID) REFERENCES tbl_vehicle_make(vehicle_make_ID)
);

CREATE TABLE tbl_vehicle_list
(
	vehicle_list_ID INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	vehicle_model_ID INT NOT NULL,
	vehicle_list_price INT NOT NULL,
	del_flag int NOT NULL,
	created_at datetime NOT NULL,
	updated_at datetime NOT NULL,
	FOREIGN KEY (vehicle_model_ID) REFERENCES tbl_vehicle_model(vehicle_model_ID),
);

CREATE TABLE tbl_complaint_type
(
	complaintType_ID INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	complaintType_name varchar(20) NOT NULL UNIQUE,
	complaintType_desc varchar(50),
	del_flag int NOT NULL,
	created_at datetime NOT NULL,
	updated_at datetime NOT NULL
);

CREATE TABLE tbl_client_insurance
(
	client_ID INT NOT NULL,
	client_pno varchar(20) NOT NULL,
	client_sales_agent INT NOT NULL,
	FOREIGN KEY (client_pno) REFERENCES tbl_policynumber(policy_number),
	FOREIGN KEY (client_sales_agent) REFERENCES tbl_salesagent(agent_ID),
	FOREIGN KEY (client_ID) REFERENCES tbl_client(client_ID)
);

CREATE TABLE tbl_premium_pa
(
	premiumPA_ID INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	insurance_compID INT NOT NULL,
	insuranceLimit FLOAT NOT NULL,
	passengerNum INT NOT NULL,
	insuranceCover FLOAT NOT NULL,
	passengerCover FLOAT NOT NULL,
	mrCover FLOAT NOT NULL,
	del_flag int NOT NULL,
	created_at datetime NOT NULL,
	updated_at datetime NOT NULL
	FOREIGN KEY (insurance_compID) REFERENCES tbl_company_info(comp_ID)
);

CREATE TABLE tbl_premium_damage
(
	premiumDG_ID INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	damage_type INT NOT NULL,
	insurance_compID INT NOT NULL,
	insuranceLimit FLOAT NOT NULL,
	privateCar FLOAT NOT NULL,
	cv_Light FLOAT NOT NULL,
	cv_Heavy FLOAT NOT NULL,
	mcys FLOAT,
	del_flag int NOT NULL,
	created_at datetime NOT NULL,
	updated_at datetime NOT NULL	
	FOREIGN KEY (insurance_compID) REFERENCES tbl_company_info(comp_ID)
);