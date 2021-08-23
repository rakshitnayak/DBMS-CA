
-- this is hospital table 
CREATE TABLE IF NOT EXISTS hospitals(
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        hospital_name VARCHAR(25) NOT NULL,
        hospital_address VARCHAR (20),
        pincode INT(10) NOT NULL,
        contact VARCHAR(12) NOT NULL
);

-- bed_availablity table 
CREATE TABLE IF NOT EXISTS bed_availablity(
	hospital_id INT ,
    total_beds INT ,
    available_beds INT ,
    occupied_beds INT ,
    FOREIGN KEY(hospital_id) REFERENCES hospitals(id) ON DELETE SET NULL

);

-- oxygen table 
CREATE TABLE IF NOT EXISTS oxygen_availablity(
	hospital_id INT ,
     total_oxygen INT , -- this for the particular hospital only 
     available_oxygen INT , -- how much oxygen is remaining in that hospital 
     oxygen_conc INT ,  -- this is how many oxygen concentrators are present in that hospital 
    FOREIGN KEY(hospital_id) REFERENCES hospitals(id) ON DELETE SET NULL
);

-- vaccine table 
CREATE TABLE IF NOT EXISTS vaccine(
	hospital_id INT ,
	available_covisheild_d1_vaccine INT ,
    available_covisheild_d2_vaccine INT ,
    available_covaxin_d1_vaccine INT ,
    vailable_covaxin_d2_vaccine INT ,
    Vaccine_wastage INT ,  -- change this attribute name to waste_% 
    FOREIGN KEY(hospital_id) REFERENCES hospitals(id) ON DELETE SET NULL
);

-- patient table 
CREATE TABLE IF NOT EXISTS patient_table(
	patient_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    p_name VARCHAR(20),
    p_age INT ,
    p_birthdate DATE,
    sex VARCHAR(1),  -- change this to enum 
    p_phNo INT ,  -- change this to varchar
    hospital_id INT,  
	FOREIGN KEY(hospital_id) REFERENCES hospitals(id) ON DELETE SET NULL
);

DROP TABLE patient_table ;

-- 	disease table 
CREATE TABLE IF NOT EXISTS disease(
	patient_id INT ,
    disease_type VARCHAR(20),
    FOREIGN KEY(patient_id) REFERENCES patient_table(patient_id) ON DELETE SET NULL
    
);
DROP TABLE disease ; 

-- death and recovery table 
CREATE TABLE IF NOT EXISTS death_recovery(
	hospital_id INT,
	death INT ,
    recovered INT ,
     FOREIGN KEY(hospital_id) REFERENCES hospitals(id) ON DELETE SET NULL

);

-- ADMIN table 
CREATE TABLE IF NOT EXISTS admin_table(
	admin_id INT ,
    admin_name VARCHAR(20),

    admin_phno INT 
    
);
DROP TABLE admin_table ;

