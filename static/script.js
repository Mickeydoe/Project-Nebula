// Add your API endpoint here
var API_ENDPOINT = "https://3uobwrkbr8.execute-api.us-east-1.amazonaws.com/dev";

// AJAX POST request to save user data
document.getElementById("CreateUser").onclick = function(){
    var inputData = {
        "firstName": $('#firstName').val(),
        "lastName": $('#lastName').val(),
        "email": $('#email').val(),
        "nationality": $('#nationality').val(),
        "age": $('#age').val(),
        "maritalStatus": $('#maritalStatus').val(),
        "occupation": $('#occupation').val()
    };
    $.ajax({
        url: API_ENDPOINT,
        type: 'POST',
        data:  JSON.stringify(inputData),
        contentType: 'application/json; charset=utf-8',
        success: function (response) {
            document.getElementById("userSaved").innerHTML = "User Data Saved!";
        },
        error: function () {
            alert("Error saving user data.");
        }
    });
}

// AJAX GET request to retrieve all users
document.getElementById("getusers").onclick = function(){  
    $.ajax({
        url: API_ENDPOINT,
        type: 'GET',
        contentType: 'application/json; charset=utf-8',
        success: function (response) {
            $('#userTable tr').slice(1).remove();
            jQuery.each(response, function(i, data) {          
                $("#userTable").append("<tr> \
                    <td>" + data['firstName'] + "</td> \
                    <td>" + data['lastName'] + "</td> \
                    <td>" + data['email'] + "</td> \
                    <td>" + data['nationality'] + "</td> \
                    <td>" + data['age'] + "</td> \
                    <td>" + data['maritalStatus'] + "</td> \
                    <td>" + data['occupation'] + "</td> \
                    </tr>");
            });
        },
        error: function () {
            alert("Error retrieving user data.");
        }
    });
}
