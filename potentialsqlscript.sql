CREATE TABLE  customer_table (
    customer_id INT(10) NOT NULL AUTO_INCREMENT; -- CUS_***(CUSTOMER COUNTRY CODE GOES HERE) _000_RANDOM NUMBER(4 DIGIT NUMBER)
    customer_affiliate_id INT(10) NOT NULL AUTO_INCREMENT; -- AFF_***(CUSTOMER COUNTRY CODE GOES HERE) _000_RANDOM NUMBER(4 DIGIT NUMBER)
    customer_first_name VARCHAR(75) NOT NULL;
    customer_last_name VARCHAR(75) NOT NULL;
    customer_other_names VARCHAR(75) NOT NULL;
    customer_DOB NOT NULL;
    customer_address ;
    customer_username VARCHAR(75) NOT NULL;
    customer_email VARCHAR(100) NOT NULL;
    customer_id_card VARCHAR(100) NOT NULL;
    customer_created_at DATETIME NOT NULL DEFAULT CURRENT_TIME;
    PRIMARY KEY(customer_id)
);

CREATE TABLE vendor_table(
    vendor_id INT(10) NOT NULL AUTO_INCREMENT; -- VEN_***(VENDOR COUNTRY CODE GOES HERE) _000_RANDOM NUMBER(4 DIGIT NUMBER)
    vendor_first_name VARCHAR(75) NOT NULL;
    vendor_last_name VARCHAR(75) NOT NULL;
    vendor_other_names VARCHAR(75) NOT NULL;
    vendor_DOB NOT NULL;
    vendor_address ;
    vendor_username VARCHAR(75) NOT NULL;
    vendor_store_name VARCHAR(300) NOT NULL;
    vendor_email VARCHAR(100) NOT NULL;
    vendor_created_at DATETIME NOT NULL DEFAULT CURRENT_TIME;
    PRIMARY KEY(vendor_id)
);

CREATE TABLE users_table(
    user_id BIGINT(10) NOT NULL AUTO_INCREMENT; -- USR_***(USER COUNTRY CODE GOES HERE) _000_RANDOM NUMBER(4 DIGIT NUMBER)
    user_first_name VARCHAR(150) NOT NULL;
    user_last_name VARCHAR(150) NOT NULL;
    user_other_names VARCHAR(150) NOT NULL;
    user_email VARCHAR(150) NOT NULL UNIQUE;
    user_password VARCHAR(255) NOT NULL;
    user_phonenumber VARCHAR(30) NOT NULL;
    role ENUM('customer', 'vendor', 'admin') NOT NULL DEFAULT 'customer';
    status ENUM('active', 'suspended') NOT NULL DEFAULT 'active';
    user_created_at DATETIME NOT NULL DEFAULT CURRENT_TIME;
    PRIMARY KEY(user_id)
);
 
CREATE TABLE iphone_table(
    iphone_id INT(5) NOT NULL AUTO_INCREMENT; -- APPLE_IPHONE_0_(RANDOM 4 DIGIT NUMBER)
    iphone_name VARCHAR(100) NOT NULL;
    iphone_model_number NOT NULL;
    iphone_specs TEXT NOT NULL;
    iphone_picture NOT NULL;
    PRIMARY KEY (iphone_id);
);

CREATE TABLE ipad_table(
    ipad_id INT(5) NOT NULL AUTO_INCREMENT; -- APPLE_IPAD_0_(RANDOM 4 DIGIT NUMBER)
    ipad_name VARCHAR(100) NOT NULL;
    ipad_model NOT NULL;
    ipad_specs TEXT NOT NULL;
    ipad_picture NOT NULL;
    PRIMARY KEY (ipad_id);
);

CREATE TABLE imac_table(
    imac_id INT(5) NOT NULL AUTO_INCREMENT; -- APPLE_IMAC_0_(RANDOM 4 DIGIT NUMBER)
    imac_name VARCHAR(100) NOT NULL;
    imac_model NOT NULL;
    imac_specs TEXT NOT NULL;
    imac_picture NOT NULL;
    PRIMARY KEY (imac_id);
);

CREATE TABLE macbook_table(
    macbook_id INT(5) NOT NULL AUTO_INCREMENT; -- APPLE_MACBOOK_0_(RANDOM 4 DIGIT NUMBER)
    macbook_name VARCHAR(100) NOT NULL;
    macbook_model NOT NULL;
    macbook_specs TEXT NOT NULL;
    macbook_picture NOT NULL;
    PRIMARY KEY (macbook_id);
);

CREATE TABLE WINDOWS_COMPUTER_TABLE(
    windows_computer_id INT(5) NOT NULL AUTO_INCREMENT; --WINDOWS_PC_0_(RANDOM 4 DIGIT NUMBER)
    windows_computer_name TEXT NOT NULL;
    windows_computer _model
);


