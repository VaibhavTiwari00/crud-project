function seterror(id, error) {

    element = document.getElementById(id)
    element.innerHTML = error;
}

function formvalidation() {

    var ret = false;
    var name = document.forms['form']["fname"].value
    var email = document.forms['form']["email"].value
    var number = document.forms['form']["number"].value
    var address = document.forms['form']["address"].value

    if (name.length == 0) {

        seterror("name", "please fill properly")
        console.log("hey")


    } else {
        seterror("name", "");
    }
    if (email.length == 0) {

        seterror("email", "please fill properly ");

    } else {
        seterror("email", "");
    }
    if (number.length == 0) {

        seterror("number", "please fill properly ");

    } else {
        seterror("number", "");
    }
    if (text.length == 0) {

        seterror("text", "please fill properly");

    } else {
        seterror("text", "");

    }
    if (name.length == 0 || email.length == 0 || number.length == 0 || text.length == 0) {
        ret = false;
    } else {
        ret = true;
    }

    return ret;

}