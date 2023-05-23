function addUser(){
    let name = $("#name").val()
    let email = $("#email").val()
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
    console.log(payload)
    $.post('/index.php/manage/addNewUser',payload, (data)=>{
        location.reload()
    })
}

function removeUser(userId){
    $.post('/index.php/manage/removeUser',{"user_id": userId},(data) => {
        if(!data.status){
            alert(data.msg)
        } else {
            if (window.confirm("Are you sure you want to delete this user?")) {
                location.reload()
            }
        }
    })
}

function changeUserStatus(currUser, status){
    $.post("/index.php/manage/changeUserStatus",{"user_id":currUser, "status":status},(data)=>{
        if(!data.status){
            alert(data.msg)
            return
        } else {
            location.reload()
        }
    })
}
