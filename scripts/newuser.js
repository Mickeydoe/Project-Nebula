function createUser() {
    const form = document.getElementById('createUserForm');
    const formData = new FormData(form);

    const data = {
        firstName: formData.get('firstName'),
        lastName: formData.get('lastName'),
        email: formData.get('email'),
        nationality: formData.get('nationality'),
        age: formData.get('age'),
        maritalStatus: formData.get('maritalStatus'),
        occupation: formData.get('occupation')
    };

    fetch('https://your-api-gateway-endpoint.amazonaws.com/Prod/createUser', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        alert('User created successfully!');
    })
    .catch((error) => {
        console.error('Error:', error);
        alert('There was an error creating the user.');
    });
}
