<?php
require_once("db.php");
require_once("component.php");

//creating databse.
$con = Createdb();

//for hospital table create button click
if (isset($_POST['create'])) {
    createHospitalData();
}

if (isset($_POST['update'])) {
    updateData();
}
if (isset($_POST['delete'])) {
    deleteRecord();
}

if (isset($_POST['deleteall'])) {
    deleteAll();
}

function createHospitalData()
{

    //for hospital.php connecting  hospital database
    $hospitalname = textboxValue("hospital_name");
    $hospitaladdress = textboxValue('hospital_address');
    $hospitalpincode = textboxValue('hospital_pincode');
    $hospital_contact = textboxValue('hospital_contact');

    if ($hospitalname && $hospitaladdress && $hospitalpincode && $hospital_contact) {
        $sql1 = "INSERT INTO hospitals(hospital_name,hospital_address,pincode,contact)
        
        VALUES('$hospitalname','$hospitaladdress','$hospitalpincode','$hospital_contact')";
        if (mysqli_query($GLOBALS['con'], $sql1)) {
            TextNode("success", "background-color:lightgreen; padding:1em", "record successfully added to database");
        } else {
            echo "error";
        }
    } else {
        TextNode("error", "background-color:tomato; padding:1em", "Please Provide data in the database");
    }
}

//get data from the database
function getHospitalData()
{
    $sql = "SELECT * FROM hospitals";

    $result = mysqli_query($GLOBALS['con'], $sql);

    if (mysqli_num_rows($result) > 0) {
        return $result;
    }
}

//update values
function updateData()
{
    $hospitalid = textboxValue(value: 'hospital_id');
    $hospitalname = textboxValue(value: 'hospital_name');
    $hospitaladdress = textboxValue(value: 'hospital_address');
    $hospitalpincode = textboxValue(value: 'hospital_pincode');
    $hospitalcontact = textboxValue(value: 'hospital_contact');


    if ($hospitalname && $hospitaladdress && $hospitalpincode && $hospitalcontact) {
        $sql = "
       UPDATE hospitals SET hospital_name='$hospitalname', hospital_address='$hospitaladdress', pincode='$hospitalpincode',contact='$hospitalcontact' WHERE id='$hospitalid';
       
       ";
        if (mysqli_query($GLOBALS['con'], $sql)) {
            TextNode("success", "background-color:lightgreen; padding:1em", "record successfully updated to database");
        } else {
            TextNode("error", "background-color:tomato; padding:1em", "unable to update data");
        }
    } else {
        TextNode("error", "background-color:tomato; padding:1em", "select data using edit icon");
    }
}

//delete reord

function deleteRecord()
{

    $hospitalid = (int)textboxValue('hospital_id');

    $sql = "DELETE FROM hospitals WHERE id=$hospitalid";

    if (mysqli_query($GLOBALS['con'], $sql)) {
        TextNode("success", "background-color:lightgreen; padding:1em", "Record deleted successfully.....");
    } else {
        TextNode("error", "background-color:tomato; padding:1em", "Unable to delete record");
    }
}

function deletebtn()
{
    $result = getHospitalData();
    $i = 0;

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $i++;
            if ($i > 3) {
                buttonElement("btn-deleteall", "btn btn-danger", "<i class='fas fa-trash'></i> Delete All", "deleteall", "");
                return;
            }
        }
    }
}


function deleteAll()
{
    $sql = "DROP TABLE hospitals";

    if (mysqli_query($GLOBALS['con'], $sql)) {
        TextNode("success", "background-color:lightgreen; padding:1em", "All Record deleted successfully.....");
        Createdb();
    } else {
        TextNode("error", "background-color:tomato ; padding:1em", "something went wrong record cannot delete");
    }
}

//for textbox value
function textboxValue($value)
{
    $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
    if (empty($textbox)) {
        return false;
    } else {
        return $textbox;
    }
}

//messages
function TextNode($classname, $stylecss, $msg)
{
    $element = "<h6 class='$classname' style='$stylecss'>$msg</h6> ";
    echo $element;
}



////////////////////////////////////////////////////////*BELOW CODE IS FOR BED PAGE OPERATION *////////////////////////////////////////////





//for bed database table create button click
if (isset($_POST['bedcreate'])) {
    createBedData();
}


//for bedavailable.php connecting bedavailable databse
function createBedData()
{

    $hospitalid = textboxValue("hospital_id");
    $totalbeds = textboxValue("total_beds");
    $availablebeds = textboxValue("available_beds");
    $occupiedbeds = textboxValue("occupied_beds");

    if ($hospitalid && $totalbeds && $availablebeds && $occupiedbeds) {
        $sql2 = "INSERT INTO bed_availablity (hospital_id,total_beds,available_beds,occupied_beds) 
        VALUES ('$hospitalid',$totalbeds,$availablebeds,$occupiedbeds)";

        if (mysqli_query($GLOBALS['con'], $sql2)) {
            TextNode("success", "background-color:lightgreen; padding:1em", "record successfully added to database");
        } else {
            echo "error";
        }
    } else {
        TextNode("error", "background-color:tomato; padding:1em", "Please Provide data in the database");
    }
}

function getBedData()
{
    $sql3 = "SELECT * FROM bed_availablity";

    $result = mysqli_query($GLOBALS['con'], $sql3);

    if (mysqli_num_rows($result) > 0) {
        return $result;
    }
}
