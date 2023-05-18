function addUser(){
    let name = $("#name")
    let email = $("#email")
    let status = 1
    let password = ""
    let role = $("input[name='role']:checked").val()
    let postal_addr = ""
    let profile_photo_path = ""
    let payload = {
        "name":name,
        "role_id":role,
        "status":status,
        "email":email,
        "password":password,
        "postal_addr":postal_addr,
        "profile_photo_path":profile_photo_path
    }
    $.post('/manage/addNewUser',payload)
}

function removeUser(userId){
    alert("Are you sure you want to delete this user?")
    $.post('/index.php/manage/removeUser',{"user_id": userId},(data) => {
        if(!data.status){
            alert(data.msg)
        }
    })
}


function remove_user_success(userId){
    alert("User Id: user")
}

function changeUserStatus(currUser, status){
    $.post("/manage/changeUserStatus",{"user_id":currUser, "status":status},(data)=>{
        if(!data.status){
            alert(data.msg)
        }
    })
}



// $(document).ready(function() {
//     $('.dropdown-toggle').dropdown();
// });
