function addUser(){
//     //pass
}

function removeUser(userId){

    $.get('/index.php/getRole',(data)=>{
        alert(data.data)
    })



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

// function(data, status){
//     alert("Data: " + data + "\nStatus: " + status);
// })



// $(document).ready(function() {
//     $('.dropdown-toggle').dropdown();
// });
