DROP TABLE IF EXISTS admission_table;

CREATE TABLE `admission_table` (
  `admission_id` int(11) NOT NULL AUTO_INCREMENT,
  `visit_id` int(11) NOT NULL,
  `reason_for_admission` varchar(150) NOT NULL,
  `admission_date` date NOT NULL,
  `facility` varchar(25) NOT NULL,
  `location` varchar(45) NOT NULL,
  `is_admitted` int(1) NOT NULL DEFAULT '0',
  `admitted_by` varchar(45) NOT NULL,
  `is_discharged` int(1) NOT NULL DEFAULT '0',
  `discharge_date` date NOT NULL,
  `discharged_by` varchar(25) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `reason_for_discharge` varchar(150) NOT NULL,
  PRIMARY KEY (`admission_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO admission_table VALUES("1","12","","2019-08-21","Amenity Admission","Amenity Room 4","1","yahya yunus","1","2019-08-21","sad iq","0","");
INSERT INTO admission_table VALUES("2","13","","2019-08-21","Amenity Admission","Amenity Room 4","1","yahya yunus","0","2019-08-21","sad iq","0","Sound health");
INSERT INTO admission_table VALUES("3","14","need rest","2019-09-04","Amenity Admission","Amenity Room 4","1","yahya yunus","0","0000-00-00","","0","");



DROP TABLE IF EXISTS anesthesia_table;

CREATE TABLE `anesthesia_table` (
  `anesthesia_id` int(11) NOT NULL AUTO_INCREMENT,
  `procedure_id` int(11) NOT NULL,
  `present_medical_history` varchar(45) NOT NULL,
  `past_medical_history` varchar(45) NOT NULL,
  `anesthetic_medical_history` varchar(45) NOT NULL,
  `current_medication` varchar(45) NOT NULL,
  `allergy_reaction` varchar(45) NOT NULL,
  `dental_history` varchar(45) NOT NULL,
  `family_social_gynea_history` varchar(45) NOT NULL,
  `physical_systemic` varchar(45) NOT NULL,
  `examination` varchar(120) NOT NULL,
  `airway_assessment` varchar(45) NOT NULL,
  `mouth` varchar(45) NOT NULL,
  `neck` varchar(45) NOT NULL,
  `thyroid_mental_distance` varchar(45) NOT NULL,
  `mallamphati_score` varchar(180) NOT NULL,
  `plan` varchar(200) NOT NULL,
  `theater` varchar(45) NOT NULL,
  `position` varchar(45) NOT NULL,
  `pre_op_assessment` varchar(45) NOT NULL,
  `HR_PR` varchar(45) NOT NULL,
  `urinalysis` varchar(45) NOT NULL,
  `HB_PVC` varchar(45) NOT NULL,
  `allergies` varchar(45) NOT NULL,
  `weight` varchar(45) NOT NULL,
  `asa` varchar(45) NOT NULL,
  `temperature` varchar(45) NOT NULL,
  `time_given` varchar(45) NOT NULL,
  `time_of_last_food` varchar(45) NOT NULL,
  `iv_line_site` varchar(45) NOT NULL,
  `canula_size` varchar(45) NOT NULL,
  `other_result` varchar(45) NOT NULL,
  `techniques` varchar(200) NOT NULL,
  `fluid_and_blood` varchar(72) NOT NULL,
  `total_input` varchar(25) NOT NULL,
  `urine_input` varchar(25) NOT NULL,
  `blood_loss` varchar(25) NOT NULL,
  `post_operative_instruction` varchar(120) NOT NULL,
  `anesthetist` varchar(45) NOT NULL,
  `anesthesia` varchar(45) NOT NULL,
  PRIMARY KEY (`anesthesia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS clinical_task_table;

CREATE TABLE `clinical_task_table` (
  `clinical_id` int(11) NOT NULL AUTO_INCREMENT,
  `admission_id` int(11) NOT NULL,
  `task_name` varchar(45) NOT NULL,
  `every` int(3) NOT NULL,
  `task_interval` varchar(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `time_track` datetime NOT NULL,
  `last_attended` datetime DEFAULT NULL,
  `reading` varchar(45) NOT NULL,
  `set_by` varchar(35) NOT NULL,
  PRIMARY KEY (`clinical_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO clinical_task_table VALUES("1","0","PCV","24","Minute","2019-08-21 19:30:00","0000-00-00 00:00:00","","15","sad iq");
INSERT INTO clinical_task_table VALUES("2","2","Glucose","24","Minutes","2019-08-21 19:33:00","0000-00-00 00:00:00","2019-08-23 11:08:32","25","sad iq");
INSERT INTO clinical_task_table VALUES("3","2","Blood Pressure","8","Minutes","2019-08-22 12:05:00","2019-08-20 02:11:00","2019-08-22 12:05:00","120/80","sad iq");
INSERT INTO clinical_task_table VALUES("4","2","PCV","24","Hours","2019-08-23 11:00:00","0000-00-00 00:00:00","","","sad iq");



DROP TABLE IF EXISTS diagnosis_table;

CREATE TABLE `diagnosis_table` (
  `diagnosis_id` int(11) NOT NULL AUTO_INCREMENT,
  `visit_id` int(11) NOT NULL,
  `details` varchar(200) NOT NULL,
  `diagnosis_date` date NOT NULL,
  `diagnosed_by` varchar(45) NOT NULL,
  PRIMARY KEY (`diagnosis_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO diagnosis_table VALUES("1","2","jjhj","2019-08-17","yahya yunus");



DROP TABLE IF EXISTS hospital_table;

CREATE TABLE `hospital_table` (
  `hospital_name` varchar(60) NOT NULL,
  `address` varchar(120) NOT NULL,
  `phone_number` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO hospital_table VALUES("HOSPITAL NAME","ADDRESS","08000000000");



DROP TABLE IF EXISTS in_patient_note_table;

CREATE TABLE `in_patient_note_table` (
  `note_id` int(11) NOT NULL AUTO_INCREMENT,
  `admission_id` int(11) NOT NULL,
  `visit_id` int(11) NOT NULL,
  `note` varchar(150) NOT NULL,
  `noted_by` varchar(45) NOT NULL,
  `date_taken` datetime NOT NULL,
  PRIMARY KEY (`note_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO in_patient_note_table VALUES("1","2","0","the patient is feeling better","sad iq","2019-08-23 12:08:52");



DROP TABLE IF EXISTS lab_investigation_table;

CREATE TABLE `lab_investigation_table` (
  `lab_id` int(11) NOT NULL AUTO_INCREMENT,
  `visit_id` int(11) NOT NULL,
  `request_date` date NOT NULL,
  `requested_test` varchar(25) NOT NULL,
  `requested_by` varchar(45) NOT NULL,
  `result` varchar(120) NOT NULL,
  `conducted_by` varchar(45) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  PRIMARY KEY (`lab_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO lab_investigation_table VALUES("1","2","2019-08-17","Urinalysis","yahya yunus","","","0");
INSERT INTO lab_investigation_table VALUES("2","13","2019-08-23","MPS","yahya yunus","","","0");



DROP TABLE IF EXISTS patient_table;

CREATE TABLE `patient_table` (
  `emr_id` varchar(11) NOT NULL,
  `phone_number` varchar(14) NOT NULL,
  `occupation` varchar(15) NOT NULL,
  `full_name` varchar(45) NOT NULL,
  `date_registered` date NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `age` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `genotype` varchar(3) NOT NULL,
  `address` varchar(60) NOT NULL,
  `NOK_name` varchar(45) NOT NULL,
  `NOK_address` varchar(65) NOT NULL,
  `NOK_phone_number` varchar(15) NOT NULL,
  `created_by` varchar(45) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  PRIMARY KEY (`emr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO patient_table VALUES("00000000001","07063490700","Software Engine","Yusuf Abubakar Sadiq","2019-08-17","O+","1994-11-18","male","SS","No1 dutsi Crescent, kofar kaura layout","KHADIJAT","No1 dutsi Crescent, kofar kaura layout","08025253636","sad iq","0");
INSERT INTO patient_table VALUES("00000000002","0900000000000","Jhj","Ghgh","2019-08-17","A","2019-11-01","female","AA","ghg","ghg","gh","02014145656","sad iq","0");
INSERT INTO patient_table VALUES("00000000003","7063490700","MEDICAL DOCTOR","Yusuf Abubakar Sadiq","2019-08-21","A","2019-12-30","male","AA","No1 dutsi Crescent, kofar kaura layout","KHADIJAT","4","02014145656","sad iq","14");
INSERT INTO patient_table VALUES("00000000004","7063490700","MEDICAL DOCTOR","Yusuf Abubakar Sadiq","2019-08-21","AB","2019-12-31","male","AA","No1 dutsi Crescent, kofar kaura layout","KHADIJAT","5","02014145656","sad iq","20");
INSERT INTO patient_table VALUES("00000000005","7063490700","MEDICAL DOCTOR","Yusuf Abubakar Sadiq","2019-08-21","A","2019-12-31","male","AA","No1 dutsi Crescent, kofar kaura layout","KHADIJAT","44","02014145656","sad iq","22");
INSERT INTO patient_table VALUES("00000000006","7063490700","MEDICAL DOCTOR","Yusuf Abubakar Sadiq","2019-08-21","A","2019-12-31","male","AA","No1 dutsi Crescent, kofar kaura layout","KHADIJAT","4","02014145656","sad iq","23");



DROP TABLE IF EXISTS prescription_table;

CREATE TABLE `prescription_table` (
  `prescription_id` int(11) NOT NULL AUTO_INCREMENT,
  `visit_id` int(11) NOT NULL,
  `prescription_date` date NOT NULL,
  `drug_name` varchar(25) NOT NULL,
  `duration` int(3) NOT NULL,
  `dose` varchar(45) NOT NULL,
  `prescribed_by` varchar(45) NOT NULL,
  `is_acknowledge` int(1) NOT NULL DEFAULT '0',
  `transaction_id` int(11) NOT NULL,
  PRIMARY KEY (`prescription_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO prescription_table VALUES("1","2","2019-08-17","Lumaten","2","5","yahya yunus","0","0");
INSERT INTO prescription_table VALUES("2","2","2019-08-17","Lumaten","2","1","yahya yunus","0","0");
INSERT INTO prescription_table VALUES("3","13","2019-08-23","Lumaten","7","1","yahya yunus","0","0");



DROP TABLE IF EXISTS procedure_table;

CREATE TABLE `procedure_table` (
  `procedure_id` int(11) NOT NULL AUTO_INCREMENT,
  `visit_id` int(11) NOT NULL,
  `procedure_name` varchar(25) NOT NULL,
  `primary_diagnoses` varchar(200) NOT NULL,
  `schedule_date` date NOT NULL,
  `ordered_by` varchar(45) NOT NULL,
  `operative_diagnosis` varchar(120) NOT NULL,
  `surgeon` varchar(45) NOT NULL,
  `assistant` varchar(180) NOT NULL,
  `post_operative_treatment` varchar(255) NOT NULL,
  `operation_date` date NOT NULL,
  `is_conclude` int(1) NOT NULL DEFAULT '0',
  `transaction_id` int(11) NOT NULL,
  PRIMARY KEY (`procedure_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO procedure_table VALUES("1","14","","jbjhbjhbh","2019-08-23","yahya yunus","","","","","0000-00-00","0","0");



DROP TABLE IF EXISTS service_table;

CREATE TABLE `service_table` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(25) NOT NULL,
  `location` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` int(11) NOT NULL,
  `no_of_template` int(1) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO service_table VALUES("1","Admission","Doctor","Amenity Admission","5000","0");
INSERT INTO service_table VALUES("2","Record","Record","Account_Creation","2000","0");
INSERT INTO service_table VALUES("3","Record","Record","Card_Reprint","1000","0");
INSERT INTO service_table VALUES("4","Lab","Lab","MPS","500","0");
INSERT INTO service_table VALUES("5","Admission","Doctor","Ward Admission","2500","0");
INSERT INTO service_table VALUES("6","Procedure","Doctor","Circumcission","6000","0");
INSERT INTO service_table VALUES("7","Procedure","Doctor","CS","20000","0");
INSERT INTO service_table VALUES("8","Doctor","Doctor","Consultation","2000","0");
INSERT INTO service_table VALUES("9","Lab","Lab","Urinalysis","400","0");
INSERT INTO service_table VALUES("10","Lab","Lab","PCV","1000","0");
INSERT INTO service_table VALUES("11","Lab","Lab","HB","1000","2");
INSERT INTO service_table VALUES("12","Lab","Lab","wh","200","2");
INSERT INTO service_table VALUES("13","Lab","Lab","gvhgv","55","2");
INSERT INTO service_table VALUES("14","Lab","Lab","gvhgvnk","55","2");
INSERT INTO service_table VALUES("15","Lab","Lab","gvhgvnkjh","55","2");
INSERT INTO service_table VALUES("16","Lab","Lab","cfcfcgcfg","444","2");



DROP TABLE IF EXISTS stock_table;

CREATE TABLE `stock_table` (
  `stock_id` int(11) NOT NULL AUTO_INCREMENT,
  `drug_name` varchar(45) NOT NULL,
  `unit_of_measure` varchar(25) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO stock_table VALUES("2","Paracetamol","Tablet","721","102");
INSERT INTO stock_table VALUES("4","palodrine","pill","594","50");
INSERT INTO stock_table VALUES("5","Lumaten","Capsule","500","520");



DROP TABLE IF EXISTS template_table;

CREATE TABLE `template_table` (
  `template_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `template` mediumtext NOT NULL,
  PRIMARY KEY (`template_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO template_table VALUES("1","0","","");
INSERT INTO template_table VALUES("2","0","","");
INSERT INTO template_table VALUES("3","0","","");
INSERT INTO template_table VALUES("4","0","","");
INSERT INTO template_table VALUES("5","0","","");
INSERT INTO template_table VALUES("6","0","","");
INSERT INTO template_table VALUES("7","0","","");
INSERT INTO template_table VALUES("8","0","","");
INSERT INTO template_table VALUES("9","0","","");
INSERT INTO template_table VALUES("10","0","","");
INSERT INTO template_table VALUES("11","0","","");
INSERT INTO template_table VALUES("12","0","","");
INSERT INTO template_table VALUES("13","15","","");
INSERT INTO template_table VALUES("14","15","","");
INSERT INTO template_table VALUES("15","15","","");



DROP TABLE IF EXISTS transaction_table;

CREATE TABLE `transaction_table` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `is_reversible` int(1) NOT NULL DEFAULT '1',
  `emr_id` varchar(11) NOT NULL,
  `item_name` varchar(45) NOT NULL,
  `location` varchar(25) NOT NULL,
  `quantity` int(6) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `transaction_date` date NOT NULL,
  `is_settled` int(1) NOT NULL DEFAULT '0',
  `settled_date` date NOT NULL,
  `signed_by` varchar(45) NOT NULL,
  `is_reverse` int(1) NOT NULL DEFAULT '0',
  `provider` varchar(45) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=latin1;

INSERT INTO transaction_table VALUES("1","1","00000000001","Account_Creation","record","1","2000","2019-08-17","1","2019-08-17","sad iq","0","");
INSERT INTO transaction_table VALUES("2","1","00000000002","Account_Creation","record","1","2000","2019-08-17","1","2019-08-17","sad iq","0","");
INSERT INTO transaction_table VALUES("4","1","00000000001","Consultation","Doctor","1","2000","2019-08-17","1","2019-08-17","sad iq","0","");
INSERT INTO transaction_table VALUES("5","1","00000000001","Urinalysis","Lab","1","400","2019-08-17","1","2019-08-20","sad iq","0","");
INSERT INTO transaction_table VALUES("6","0","00000000001","Card_Reprint","record","1","1000","2019-08-20","1","2019-08-20","sad iq","0","");
INSERT INTO transaction_table VALUES("7","1","00000000001","Consultation","Doctor","1","2000","2019-08-20","1","2019-08-20","sad iq","0","");
INSERT INTO transaction_table VALUES("8","1","00000000001","Consultation","Doctor","1","2000","2019-08-20","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("20","1","00000000004","Account_Creation","record","1","2000","2019-08-21","0","0000-00-00","","0","patient_table");
INSERT INTO transaction_table VALUES("21","1","00000000004","Consultation","Doctor","1","2000","2019-08-21","0","0000-00-00","","0","visit_table");
INSERT INTO transaction_table VALUES("22","1","00000000005","Account_Creation","record","1","2000","2019-08-21","0","0000-00-00","","0","patient_table");
INSERT INTO transaction_table VALUES("23","1","00000000006","Account_Creation","record","1","2000","2019-08-21","0","0000-00-00","","0","patient_table");
INSERT INTO transaction_table VALUES("24","0","00000000005","Card_Reprint","record","1","1000","2019-08-21","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("25","1","00000000005","Consultation","Doctor","1","2000","2019-08-21","0","0000-00-00","","0","visit_table");
INSERT INTO transaction_table VALUES("26","1","00000000001","Amenity Admission for 2019-08-21","Doctor","1","5000","2019-08-21","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("27","1","00000000002","Amenity Admission for 2019-08-21","Doctor","1","5000","2019-08-21","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("28","1","00000000001","Amenity Admission for 2019-08-23","Doctor","1","5000","2019-08-23","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("29","1","00000000001","Amenity Admission for 2019-08-23","Doctor","1","5000","2019-08-23","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("30","1","00000000002","MPS","Lab","1","500","2019-08-23","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("31","1","00000000001","","Doctor","1","20000","2019-08-23","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("32","1","00000000002","Amenity Admission for 2019-08-21","Doctor","1","5000","2019-08-21","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("33","1","00000000002","Amenity Admission for 2019-08-22","Doctor","1","5000","2019-08-22","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("34","1","00000000002","Amenity Admission for 2019-08-23","Doctor","1","5000","2019-08-23","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("35","1","00000000002","Amenity Admission for 2019-08-24","Doctor","1","5000","2019-08-24","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("36","1","00000000002","Amenity Admission for 2019-08-25","Doctor","1","5000","2019-08-25","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("37","1","00000000002","Amenity Admission for 2019-08-26","Doctor","1","5000","2019-08-26","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("38","1","00000000002","Amenity Admission for 2019-08-27","Doctor","1","5000","2019-08-27","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("39","1","00000000002","Amenity Admission for 2019-08-28","Doctor","1","5000","2019-08-28","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("40","1","00000000002","Amenity Admission for 2019-08-29","Doctor","1","5000","2019-08-29","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("41","1","00000000002","Amenity Admission for 2019-08-30","Doctor","1","5000","2019-08-30","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("42","1","00000000002","Amenity Admission for 2019-08-31","Doctor","1","5000","2019-08-31","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("43","1","00000000002","Amenity Admission for 2019-09-01","Doctor","1","5000","2019-09-01","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("44","1","00000000002","Amenity Admission for 2019-09-02","Doctor","1","5000","2019-09-02","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("45","1","00000000002","Amenity Admission for 2019-09-03","Doctor","1","5000","2019-09-03","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("46","1","00000000002","Amenity Admission for 2019-09-04","Doctor","1","5000","2019-09-04","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("47","0","00000000002","Card_Reprint","record","1","1000","2019-09-04","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("48","1","00000000002","Amenity Admission for 2019-08-21","Doctor","1","5000","2019-08-21","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("49","1","00000000002","Amenity Admission for 2019-08-22","Doctor","1","5000","2019-08-22","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("50","1","00000000002","Amenity Admission for 2019-08-23","Doctor","1","5000","2019-08-23","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("51","1","00000000002","Amenity Admission for 2019-08-24","Doctor","1","5000","2019-08-24","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("52","1","00000000002","Amenity Admission for 2019-08-25","Doctor","1","5000","2019-08-25","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("53","1","00000000002","Amenity Admission for 2019-08-26","Doctor","1","5000","2019-08-26","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("54","1","00000000002","Amenity Admission for 2019-08-27","Doctor","1","5000","2019-08-27","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("55","1","00000000002","Amenity Admission for 2019-08-28","Doctor","1","5000","2019-08-28","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("56","1","00000000002","Amenity Admission for 2019-08-29","Doctor","1","5000","2019-08-29","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("57","1","00000000002","Amenity Admission for 2019-08-30","Doctor","1","5000","2019-08-30","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("58","1","00000000002","Amenity Admission for 2019-08-31","Doctor","1","5000","2019-08-31","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("59","1","00000000002","Amenity Admission for 2019-09-01","Doctor","1","5000","2019-09-01","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("60","1","00000000002","Amenity Admission for 2019-09-02","Doctor","1","5000","2019-09-02","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("61","1","00000000002","Amenity Admission for 2019-09-03","Doctor","1","5000","2019-09-03","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("62","1","00000000002","Amenity Admission for 2019-09-04","Doctor","1","5000","2019-09-04","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("63","0","00000000002","Card_Reprint","record","1","1000","2019-09-04","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("64","1","00000000002","Consultation","Doctor","1","2000","2019-09-04","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("65","1","00000000002","Amenity Admission for 2019-08-21","Doctor","1","5000","2019-08-21","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("66","1","00000000002","Amenity Admission for 2019-08-22","Doctor","1","5000","2019-08-22","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("67","1","00000000002","Amenity Admission for 2019-08-23","Doctor","1","5000","2019-08-23","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("68","1","00000000002","Amenity Admission for 2019-08-24","Doctor","1","5000","2019-08-24","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("69","1","00000000002","Amenity Admission for 2019-08-25","Doctor","1","5000","2019-08-25","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("70","1","00000000002","Amenity Admission for 2019-08-26","Doctor","1","5000","2019-08-26","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("71","1","00000000002","Amenity Admission for 2019-08-27","Doctor","1","5000","2019-08-27","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("72","1","00000000002","Amenity Admission for 2019-08-28","Doctor","1","5000","2019-08-28","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("73","1","00000000002","Amenity Admission for 2019-08-29","Doctor","1","5000","2019-08-29","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("74","1","00000000002","Amenity Admission for 2019-08-30","Doctor","1","5000","2019-08-30","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("75","1","00000000002","Amenity Admission for 2019-08-31","Doctor","1","5000","2019-08-31","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("76","1","00000000002","Amenity Admission for 2019-09-01","Doctor","1","5000","2019-09-01","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("77","1","00000000002","Amenity Admission for 2019-09-02","Doctor","1","5000","2019-09-02","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("78","1","00000000002","Amenity Admission for 2019-09-03","Doctor","1","5000","2019-09-03","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("79","1","00000000002","Amenity Admission for 2019-09-04","Doctor","1","5000","2019-09-04","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("80","1","00000000001","Amenity Admission for 2019-09-04","Doctor","1","5000","2019-09-04","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("81","1","00000000002","Amenity Admission for 2019-08-21","Doctor","1","5000","2019-08-21","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("82","1","00000000002","Amenity Admission for 2019-08-22","Doctor","1","5000","2019-08-22","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("83","1","00000000002","Amenity Admission for 2019-08-23","Doctor","1","5000","2019-08-23","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("84","1","00000000002","Amenity Admission for 2019-08-24","Doctor","1","5000","2019-08-24","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("85","1","00000000002","Amenity Admission for 2019-08-25","Doctor","1","5000","2019-08-25","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("86","1","00000000002","Amenity Admission for 2019-08-26","Doctor","1","5000","2019-08-26","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("87","1","00000000002","Amenity Admission for 2019-08-27","Doctor","1","5000","2019-08-27","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("88","1","00000000002","Amenity Admission for 2019-08-28","Doctor","1","5000","2019-08-28","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("89","1","00000000002","Amenity Admission for 2019-08-29","Doctor","1","5000","2019-08-29","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("90","1","00000000002","Amenity Admission for 2019-08-30","Doctor","1","5000","2019-08-30","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("91","1","00000000002","Amenity Admission for 2019-08-31","Doctor","1","5000","2019-08-31","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("92","1","00000000002","Amenity Admission for 2019-09-01","Doctor","1","5000","2019-09-01","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("93","1","00000000002","Amenity Admission for 2019-09-02","Doctor","1","5000","2019-09-02","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("94","1","00000000002","Amenity Admission for 2019-09-03","Doctor","1","5000","2019-09-03","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("95","1","00000000002","Amenity Admission for 2019-09-04","Doctor","1","5000","2019-09-04","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("96","1","00000000002","Amenity Admission for 2019-09-05","Doctor","1","5000","2019-09-05","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("97","1","00000000002","Amenity Admission for 2019-09-06","Doctor","1","5000","2019-09-06","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("98","1","00000000002","Amenity Admission for 2019-09-07","Doctor","1","5000","2019-09-07","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("99","1","00000000002","Amenity Admission for 2019-09-08","Doctor","1","5000","2019-09-08","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("100","1","00000000002","Amenity Admission for 2019-09-09","Doctor","1","5000","2019-09-09","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("101","1","00000000002","Amenity Admission for 2019-09-10","Doctor","1","5000","2019-09-10","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("102","1","00000000002","Amenity Admission for 2019-09-11","Doctor","1","5000","2019-09-11","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("103","1","00000000002","Amenity Admission for 2019-09-12","Doctor","1","5000","2019-09-12","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("104","1","00000000002","Amenity Admission for 2019-09-13","Doctor","1","5000","2019-09-13","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("105","1","00000000002","Amenity Admission for 2019-09-14","Doctor","1","5000","2019-09-14","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("106","1","00000000002","Amenity Admission for 2019-09-15","Doctor","1","5000","2019-09-15","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("107","1","00000000002","Amenity Admission for 2019-09-16","Doctor","1","5000","2019-09-16","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("108","1","00000000002","Amenity Admission for 2019-09-17","Doctor","1","5000","2019-09-17","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("109","1","00000000002","Amenity Admission for 2019-09-18","Doctor","1","5000","2019-09-18","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("110","1","00000000002","Amenity Admission for 2019-09-19","Doctor","1","5000","2019-09-19","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("111","1","00000000002","Amenity Admission for 2019-09-20","Doctor","1","5000","2019-09-20","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("112","1","00000000002","Amenity Admission for 2019-09-21","Doctor","1","5000","2019-09-21","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("113","1","00000000002","Amenity Admission for 2019-09-22","Doctor","1","5000","2019-09-22","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("114","1","00000000002","Amenity Admission for 2019-09-23","Doctor","1","5000","2019-09-23","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("115","1","00000000002","Amenity Admission for 2019-09-24","Doctor","1","5000","2019-09-24","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("116","1","00000000002","Amenity Admission for 2019-09-25","Doctor","1","5000","2019-09-25","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("117","1","00000000002","Amenity Admission for 2019-09-26","Doctor","1","5000","2019-09-26","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("118","1","00000000002","Amenity Admission for 2019-09-27","Doctor","1","5000","2019-09-27","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("119","1","00000000002","Amenity Admission for 2019-09-28","Doctor","1","5000","2019-09-28","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("120","1","00000000002","Amenity Admission for 2019-09-29","Doctor","1","5000","2019-09-29","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("121","1","00000000002","Amenity Admission for 2019-09-30","Doctor","1","5000","2019-09-30","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("122","1","00000000002","Amenity Admission for 2019-10-01","Doctor","1","5000","2019-10-01","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("123","1","00000000002","Amenity Admission for 2019-10-02","Doctor","1","5000","2019-10-02","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("124","1","00000000002","Amenity Admission for 2019-10-03","Doctor","1","5000","2019-10-03","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("125","1","00000000002","Amenity Admission for 2019-10-04","Doctor","1","5000","2019-10-04","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("126","1","00000000002","Amenity Admission for 2019-10-05","Doctor","1","5000","2019-10-05","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("127","1","00000000002","Amenity Admission for 2019-10-06","Doctor","1","5000","2019-10-06","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("128","1","00000000002","Amenity Admission for 2019-10-07","Doctor","1","5000","2019-10-07","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("129","1","00000000002","Amenity Admission for 2019-10-08","Doctor","1","5000","2019-10-08","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("130","1","00000000002","Amenity Admission for 2019-10-09","Doctor","1","5000","2019-10-09","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("131","1","00000000002","Amenity Admission for 2019-10-10","Doctor","1","5000","2019-10-10","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("132","1","00000000002","Amenity Admission for 2019-10-11","Doctor","1","5000","2019-10-11","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("133","1","00000000002","Amenity Admission for 2019-10-12","Doctor","1","5000","2019-10-12","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("134","1","00000000002","Amenity Admission for 2019-10-13","Doctor","1","5000","2019-10-13","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("135","1","00000000002","Amenity Admission for 2019-10-14","Doctor","1","5000","2019-10-14","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("136","1","00000000002","Amenity Admission for 2019-10-15","Doctor","1","5000","2019-10-15","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("137","1","00000000002","Amenity Admission for 2019-10-16","Doctor","1","5000","2019-10-16","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("138","1","00000000001","Amenity Admission for 2019-09-04","Doctor","1","5000","2019-09-04","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("139","1","00000000001","Amenity Admission for 2019-09-05","Doctor","1","5000","2019-09-05","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("140","1","00000000001","Amenity Admission for 2019-09-06","Doctor","1","5000","2019-09-06","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("141","1","00000000001","Amenity Admission for 2019-09-07","Doctor","1","5000","2019-09-07","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("142","1","00000000001","Amenity Admission for 2019-09-08","Doctor","1","5000","2019-09-08","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("143","1","00000000001","Amenity Admission for 2019-09-09","Doctor","1","5000","2019-09-09","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("144","1","00000000001","Amenity Admission for 2019-09-10","Doctor","1","5000","2019-09-10","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("145","1","00000000001","Amenity Admission for 2019-09-11","Doctor","1","5000","2019-09-11","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("146","1","00000000001","Amenity Admission for 2019-09-12","Doctor","1","5000","2019-09-12","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("147","1","00000000001","Amenity Admission for 2019-09-13","Doctor","1","5000","2019-09-13","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("148","1","00000000001","Amenity Admission for 2019-09-14","Doctor","1","5000","2019-09-14","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("149","1","00000000001","Amenity Admission for 2019-09-15","Doctor","1","5000","2019-09-15","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("150","1","00000000001","Amenity Admission for 2019-09-16","Doctor","1","5000","2019-09-16","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("151","1","00000000001","Amenity Admission for 2019-09-17","Doctor","1","5000","2019-09-17","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("152","1","00000000001","Amenity Admission for 2019-09-18","Doctor","1","5000","2019-09-18","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("153","1","00000000001","Amenity Admission for 2019-09-19","Doctor","1","5000","2019-09-19","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("154","1","00000000001","Amenity Admission for 2019-09-20","Doctor","1","5000","2019-09-20","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("155","1","00000000001","Amenity Admission for 2019-09-21","Doctor","1","5000","2019-09-21","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("156","1","00000000001","Amenity Admission for 2019-09-22","Doctor","1","5000","2019-09-22","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("157","1","00000000001","Amenity Admission for 2019-09-23","Doctor","1","5000","2019-09-23","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("158","1","00000000001","Amenity Admission for 2019-09-24","Doctor","1","5000","2019-09-24","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("159","1","00000000001","Amenity Admission for 2019-09-25","Doctor","1","5000","2019-09-25","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("160","1","00000000001","Amenity Admission for 2019-09-26","Doctor","1","5000","2019-09-26","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("161","1","00000000001","Amenity Admission for 2019-09-27","Doctor","1","5000","2019-09-27","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("162","1","00000000001","Amenity Admission for 2019-09-28","Doctor","1","5000","2019-09-28","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("163","1","00000000001","Amenity Admission for 2019-09-29","Doctor","1","5000","2019-09-29","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("164","1","00000000001","Amenity Admission for 2019-09-30","Doctor","1","5000","2019-09-30","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("165","1","00000000001","Amenity Admission for 2019-10-01","Doctor","1","5000","2019-10-01","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("166","1","00000000001","Amenity Admission for 2019-10-02","Doctor","1","5000","2019-10-02","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("167","1","00000000001","Amenity Admission for 2019-10-03","Doctor","1","5000","2019-10-03","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("168","1","00000000001","Amenity Admission for 2019-10-04","Doctor","1","5000","2019-10-04","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("169","1","00000000001","Amenity Admission for 2019-10-05","Doctor","1","5000","2019-10-05","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("170","1","00000000001","Amenity Admission for 2019-10-06","Doctor","1","5000","2019-10-06","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("171","1","00000000001","Amenity Admission for 2019-10-07","Doctor","1","5000","2019-10-07","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("172","1","00000000001","Amenity Admission for 2019-10-08","Doctor","1","5000","2019-10-08","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("173","1","00000000001","Amenity Admission for 2019-10-09","Doctor","1","5000","2019-10-09","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("174","1","00000000001","Amenity Admission for 2019-10-10","Doctor","1","5000","2019-10-10","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("175","1","00000000001","Amenity Admission for 2019-10-11","Doctor","1","5000","2019-10-11","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("176","1","00000000001","Amenity Admission for 2019-10-12","Doctor","1","5000","2019-10-12","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("177","1","00000000001","Amenity Admission for 2019-10-13","Doctor","1","5000","2019-10-13","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("178","1","00000000001","Amenity Admission for 2019-10-14","Doctor","1","5000","2019-10-14","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("179","1","00000000001","Amenity Admission for 2019-10-15","Doctor","1","5000","2019-10-15","0","0000-00-00","","0","");
INSERT INTO transaction_table VALUES("180","1","00000000001","Amenity Admission for 2019-10-16","Doctor","1","5000","2019-10-16","0","0000-00-00","","0","");



DROP TABLE IF EXISTS users;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(45) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `role` varchar(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES("1","nurse","1234","sad","iq","07063490700","Nurse");
INSERT INTO users VALUES("2","doctor","1234","yahya","yunus","09099614141","doctor");
INSERT INTO users VALUES("3","lab","1234","abba","lawal","08022065050","lab");
INSERT INTO users VALUES("4","pharmacy","1234","ayuba","isiya","08022060550","pharmacy");
INSERT INTO users VALUES("5","admin","1234","lawal","baba","08065654578","Admin");



DROP TABLE IF EXISTS visit_table;

CREATE TABLE `visit_table` (
  `visit_id` int(11) NOT NULL AUTO_INCREMENT,
  `emr_id` varchar(11) NOT NULL,
  `visit_date` date NOT NULL,
  `clinical_notes` varchar(200) NOT NULL,
  `seen_by` varchar(45) NOT NULL,
  `booked_by` varchar(45) NOT NULL,
  `is_signed` int(1) NOT NULL DEFAULT '0',
  `transaction_id` int(11) NOT NULL,
  PRIMARY KEY (`visit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO visit_table VALUES("2","00000000001","2019-08-17","hghjhjj","yahya yunus","sad iq","1","4");
INSERT INTO visit_table VALUES("4","00000000001","2019-08-20","","","sad iq","0","8");
INSERT INTO visit_table VALUES("6","00000000003","2019-08-21","","","sad iq","0","15");
INSERT INTO visit_table VALUES("10","00000000004","2019-08-21","","","sad iq","0","21");
INSERT INTO visit_table VALUES("11","00000000005","2019-08-21","","","sad iq","0","25");
INSERT INTO visit_table VALUES("12","00000000001","2019-08-21","","yahya yunus","yahya yunus","1","0");
INSERT INTO visit_table VALUES("13","00000000002","2019-08-21","","yahya yunus","yahya yunus","1","0");
INSERT INTO visit_table VALUES("14","00000000001","2019-08-23","","yahya yunus","yahya yunus","1","0");
INSERT INTO visit_table VALUES("15","00000000002","2019-09-04","","","sad iq","0","64");



DROP TABLE IF EXISTS vital_sign_table;

CREATE TABLE `vital_sign_table` (
  `emr_id` varchar(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `reading` varchar(45) NOT NULL,
  `checked_by` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO vital_sign_table VALUES("00000000001","Blood Pressure (mmHg)","","");
INSERT INTO vital_sign_table VALUES("00000000001","Glucose (mg/dl)","","");
INSERT INTO vital_sign_table VALUES("00000000001","Pulse (beats/min)","","");
INSERT INTO vital_sign_table VALUES("00000000001","Respiration (beats/min)","","");
INSERT INTO vital_sign_table VALUES("00000000001","Tempreture (oC)","","");
INSERT INTO vital_sign_table VALUES("00000000002","Blood Pressure (mmHg)","120/80","sad iq");
INSERT INTO vital_sign_table VALUES("00000000002","Glucose (mg/dl)","120/80","sad iq");
INSERT INTO vital_sign_table VALUES("00000000002","Pulse (beats/min)","120/80","sad iq");
INSERT INTO vital_sign_table VALUES("00000000002","Respiration (beats/min)","","");
INSERT INTO vital_sign_table VALUES("00000000002","Tempreture (oC)","","");
INSERT INTO vital_sign_table VALUES("00000000003","Blood Pressure (mmHg)","","");
INSERT INTO vital_sign_table VALUES("00000000003","Glucose (mg/dl)","","");
INSERT INTO vital_sign_table VALUES("00000000003","Pulse (beats/min)","","");
INSERT INTO vital_sign_table VALUES("00000000003","Respiration (beats/min)","","");
INSERT INTO vital_sign_table VALUES("00000000003","Tempreture (oC)","","");
INSERT INTO vital_sign_table VALUES("00000000004","Blood Pressure (mmHg)","","");
INSERT INTO vital_sign_table VALUES("00000000004","Glucose (mg/dl)","","");
INSERT INTO vital_sign_table VALUES("00000000004","Pulse (beats/min)","","");
INSERT INTO vital_sign_table VALUES("00000000004","Respiration (beats/min)","","");
INSERT INTO vital_sign_table VALUES("00000000004","Tempreture (oC)","","");
INSERT INTO vital_sign_table VALUES("00000000004","Blood Pressure (mmHg)","","");
INSERT INTO vital_sign_table VALUES("00000000004","Glucose (mg/dl)","","");
INSERT INTO vital_sign_table VALUES("00000000004","Pulse (beats/min)","","");
INSERT INTO vital_sign_table VALUES("00000000004","Respiration (beats/min)","","");
INSERT INTO vital_sign_table VALUES("00000000004","Tempreture (oC)","","");
INSERT INTO vital_sign_table VALUES("00000000003","Blood Pressure (mmHg)","","");
INSERT INTO vital_sign_table VALUES("00000000003","Glucose (mg/dl)","","");
INSERT INTO vital_sign_table VALUES("00000000003","Pulse (beats/min)","","");
INSERT INTO vital_sign_table VALUES("00000000003","Respiration (beats/min)","","");
INSERT INTO vital_sign_table VALUES("00000000003","Tempreture (oC)","","");
INSERT INTO vital_sign_table VALUES("00000000004","Blood Pressure (mmHg)","","");
INSERT INTO vital_sign_table VALUES("00000000004","Glucose (mg/dl)","","");
INSERT INTO vital_sign_table VALUES("00000000004","Pulse (beats/min)","","");
INSERT INTO vital_sign_table VALUES("00000000004","Respiration (beats/min)","","");
INSERT INTO vital_sign_table VALUES("00000000004","Tempreture (oC)","","");
INSERT INTO vital_sign_table VALUES("00000000004","Blood Pressure (mmHg)","","");
INSERT INTO vital_sign_table VALUES("00000000004","Glucose (mg/dl)","","");
INSERT INTO vital_sign_table VALUES("00000000004","Pulse (beats/min)","","");
INSERT INTO vital_sign_table VALUES("00000000004","Respiration (beats/min)","","");
INSERT INTO vital_sign_table VALUES("00000000004","Tempreture (oC)","","");
INSERT INTO vital_sign_table VALUES("00000000005","Blood Pressure (mmHg)","","");
INSERT INTO vital_sign_table VALUES("00000000005","Glucose (mg/dl)","","");
INSERT INTO vital_sign_table VALUES("00000000005","Pulse (beats/min)","","");
INSERT INTO vital_sign_table VALUES("00000000005","Respiration (beats/min)","","");
INSERT INTO vital_sign_table VALUES("00000000005","Tempreture (oC)","","");
INSERT INTO vital_sign_table VALUES("00000000006","Blood Pressure (mmHg)","","");
INSERT INTO vital_sign_table VALUES("00000000006","Glucose (mg/dl)","","");
INSERT INTO vital_sign_table VALUES("00000000006","Pulse (beats/min)","","");
INSERT INTO vital_sign_table VALUES("00000000006","Respiration (beats/min)","","");
INSERT INTO vital_sign_table VALUES("00000000006","Tempreture (oC)","","");



