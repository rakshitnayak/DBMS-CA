-- query page 

INSERT INTO hospitals(hospital_name,hospital_address,pincode,contact)
VALUES( 'KLE society' , 'nehru nagar belagavi' ,'590001' ,9999911111);

INSERT INTO hospitals(hospital_name,hospital_address,pincode,contact)
VALUES( 'BHIMS' , 'Club road belagavi' ,'590111' ,9999911111);

INSERT INTO hospitals(hospital_name,hospital_address,pincode,contact)
VALUES( 'Lakeview ' , 'lakeview belagavi' ,'5901001' ,9999911111);

INSERT INTO hospitals(hospital_name,hospital_address,pincode,contact)
VALUES( 'Venugram' , '3rd gate belagavi' ,'59022' ,9999911111);
SELECT * FROM hospitals;

-- bed availability queries 
INSERT INTO bed_availablity(hospital_id,total_beds,available_beds,occupied_beds)
 VALUES(1,2222,222,2000);
 
 INSERT INTO bed_availablity(hospital_id,total_beds,available_beds,occupied_beds)
 VALUES(2,333,33,300);
 
  INSERT INTO bed_availablity(hospital_id,total_beds,available_beds,occupied_beds)
 VALUES(3,4444,444,4000);
 
  INSERT INTO bed_availablity(hospital_id,total_beds,available_beds,occupied_beds)
 VALUES(4,5555,555,5000);
 
 SELECT * FROM bed_availablity;
 
 
-- populating oxygen table 

INSERT INTO oxygen_availablity(hospital_id , total_oxygen , available_oxygen , oxygen_conc) 
VALUES (1 , 1000 , 30 , 15);

INSERT INTO oxygen_availablity(hospital_id , total_oxygen , available_oxygen , oxygen_conc) 
VALUES (2 , 1000 , 300 , 49 );

INSERT INTO oxygen_availablity(hospital_id , total_oxygen , available_oxygen , oxygen_conc) 
VALUES (3 , 1000 , 400 , 69 );

INSERT INTO oxygen_availablity(hospital_id , total_oxygen , available_oxygen , oxygen_conc) 
VALUES (4 , 1000 , 30 , 48 );
SELECT * FROM oxygen_availablity;

-- vaccine query 
INSERT INTO vaccine(hospital_id,available_covisheild_d1_vaccine,
available_covisheild_d2_vaccine,available_covaxin_d1_vaccine,vailable_covaxin_d2_vaccine,Vaccine_wastage) 
VALUES (1,29,21 ,33, 56 , 20 );

INSERT INTO vaccine(hospital_id,available_covisheild_d1_vaccine,
available_covisheild_d2_vaccine,available_covaxin_d1_vaccine,vailable_covaxin_d2_vaccine,Vaccine_wastage) 
VALUES (2,39,22 ,23, 52 , 0 );

INSERT INTO vaccine(hospital_id,available_covisheild_d1_vaccine,
available_covisheild_d2_vaccine,available_covaxin_d1_vaccine,vailable_covaxin_d2_vaccine,Vaccine_wastage) 
VALUES (3,0,221 ,378, 69 , 200 );

INSERT INTO vaccine(hospital_id,available_covisheild_d1_vaccine,
available_covisheild_d2_vaccine,available_covaxin_d1_vaccine,vailable_covaxin_d2_vaccine,Vaccine_wastage) 
VALUES (4,282,211 ,330, 560 , 20 );
SELECT * FROM vaccine ;

-- patient table 

INSERT INTO patient_table(p_name , p_age,p_birthdate , sex , p_phNo , hospital_id)
VALUES('Sagar',32,'1982-02-01','M',99999999,1);

INSERT INTO patient_table(p_name , p_age,p_birthdate , sex , p_phNo , hospital_id)
VALUES('Maya ',28,'1992-06-01','F',99999999,2);

INSERT INTO patient_table(p_name , p_age,p_birthdate , sex , p_phNo , hospital_id)
VALUES('Sneha',32,'1977-08-01','F',1111111,1);

INSERT INTO patient_table(p_name , p_age,p_birthdate , sex , p_phNo , hospital_id)
VALUES('Veena',40,'1980-06-02','F',000999111,4);

INSERT INTO patient_table(p_name , p_age,p_birthdate , sex , p_phNo , hospital_id)
VALUES('Michael',45,'1982-02-01','M',99999999,1);

INSERT INTO patient_table(p_name , p_age,p_birthdate , sex , p_phNo , hospital_id)
VALUES('virat',32,'1982-02-01','M',99999999,2);


INSERT INTO patient_table(p_name , p_age,p_birthdate , sex , p_phNo , hospital_id)
VALUES('vidya',32,'1982-02-01','F',99999999,1);

INSERT INTO patient_table(p_name , p_age,p_birthdate , sex , p_phNo , hospital_id)
VALUES('Satish',32,'1992-02-01','T',99999999,4);

INSERT INTO patient_table(p_name , p_age,p_birthdate , sex , p_phNo , hospital_id)
VALUES('Uttam',30,'1989-02-01','M',99990000,3);


INSERT INTO patient_table(p_name , p_age,p_birthdate , sex , p_phNo , hospital_id)
VALUES('jake',32,'1982-02-01','M',99999999,1);

 SELECT * FROM patient_table ;
 
 
 -- disease table 
 
 INSERT INTO DISEASE(patient_id,Disease_type) VALUES(1,'Depression');
 INSERT INTO DISEASE(patient_id,Disease_type) VALUES(3 , 'Cancer');
 INSERT INTO DISEASE(patient_id,Disease_type) VALUES(6,'piles');
 INSERT INTO DISEASE(patient_id,Disease_type) VALUES(7,'Diabetic');
INSERT INTO DISEASE(patient_id,Disease_type) VALUES(13,'Mouth Cancer');

DELETE FROM disease WHERE patient_id=1;  -- dont delete 
SELECT * FROM disease;

-- Death and recover TABLE 
 INSERT INTO death_recovery(hospital_id,death,recovered) VALUES(1,6999 , 555);
 INSERT INTO death_recovery(hospital_id,death,recovered) VALUES(2,7999 , 55);
 INSERT INTO death_recovery(hospital_id,death,recovered) VALUES(3,999 , 1000);
  INSERT INTO death_recovery(hospital_id,death,recovered) VALUES(4,8999 , 899);
  SELECT * FROM death_recovery;
  
  -- admin table 
  INSERT INTO admin_table(admin_id, admin_name, admin_phno) VALUES(01,"xyz" ,12345678 );
  INSERT INTO admin_table(admin_id, admin_name, admin_phno) VALUES(02,"pop" ,12345678 );
  INSERT INTO admin_table(admin_id, admin_name, admin_phno) VALUES(03,"jkl" ,12345678 );

  SELECT * FROM admin_table;
