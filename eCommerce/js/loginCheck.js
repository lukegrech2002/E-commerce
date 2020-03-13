//checking if user logged in
function checkLogin(){
    //if user not logged in display modal
    if(sessionStorage.getItem("currentUser")===null) {
        $('#signin-modal').modal('open');
        return false;
    }
    else{
        return true;
    }
}