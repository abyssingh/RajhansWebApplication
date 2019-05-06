function ValidateContactUs() {


    let Name = document.getElementById("Name").value;
    let PhoneNo = document.getElementById("Phoneno").value;
    let Email = document.getElementById("Email").value;
    let Message = document.getElementById("Message").value;

    //Name Validation only Charcaters
    if (!isNaN(Name)) {
        alert('Kindly Name Properly');
        document.getElementById("Name1").innerHTML = "**Please Enter Character Value Only **";
        return false; //so server wapas aaye nahi // action.php chala jaayega with wrong values
    }

    // let charc = /^[a-zA-Z]+$/;
    if (Name.length < 6 && Name.length > 16) {
        alert('Inside Name');
        document.getElementById("Name1").innerHTML = "**Please Enter Character between a -z or A-Z Value Only **";
        return false;
    }

    //Problem:Refresh,BackButton

    //PhoneNo Validation
    let IndNum = /^[7-9]{1}[0-9]{9}$/;
    if (IndNum.test(PhoneNo) == false && isNaN(IndNum)) {
        alert('Kindly Enter the Mobile No Properly');
        document.getElementById("PhoneNo1").innerHTML = "**Please Enter  Mobile No Properly  **"; //Once You Entered Correct It should go off
        return false;
    }

    //email Validation

    let emailVal = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (emailVal.test(Email) == false) {
        alert('Kindly Enter the Email Properly');
        document.getElementById("Email1").innerHTML = "**Please Enter  Email Properly **"; //Once You Entered Correct It should go off
        return false;
    }

    if (Message.length > 256) {
        alert('Inside Message');
        document.getElementById("Message1").innerHTML = "**Message character limit is only 255 Charcaters **";
        return false;
    }
    return true;
}