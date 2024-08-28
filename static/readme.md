### Description
This project is a web application that features user authentication and data management, leveraging AWS services for backend functionality. The main components of the project include a login form, data storage and retrieval using DynamoDB, and serverless compute with AWS Lambda. Custom CSS is used to ensure a clean and user-friendly interface.

### Features
User Authentication: Secure login form with proper validation and data handling.
Data Management: Ability to save and retrieve student data using AWS DynamoDB.
Serverless Backend: AWS Lambda functions handle backend logic, enabling a scalable and cost-effective serverless architecture.
Custom CSS: Enhanced UI/UX with custom styles for HTML elements.
Technologies Used
Frontend: HTML, CSS
Backend: AWS Lambda, AWS DynamoDB, Python (boto3)
Other: AWS SDK, JavaScript (if applicable)

### Prerequisites
AWS IAM Permissions and Roles
Before running the application, ensure that the necessary IAM roles and permissions are configured:

DynamoDB Access: The Lambda function should have the necessary IAM role with permissions to read and write to DynamoDB.
Lambda Execution Role: Ensure that your Lambda function has an execution role with the appropriate permissions for accessing DynamoDB and other AWS services.
AWS CLI: Set up AWS CLI on your local machine and configure it with your AWS credentials:
bash
Copy code
aws configure
Installation
Clone the Repository:

## Installation

### Clone the Repository
```bash
git clone https://github.com/yourusername/yourproject.git
cd yourproject


```bash
pip install -r requirements.txt

Run the Application: Once everything is set up, you can start the application by running the main script:


### Login Form
The login form is designed with a modest, normal size to ensure the input fields are user-friendly. Custom CSS is used for better alignment and functionality.

### Saving Student Data
The application uses DynamoDB to store student data, including email addresses. Ensure that all required fields are validated and that data types match the schema in DynamoDB.

### AWS Lambda Functions
Lambda functions are used to handle backend logic, such as data processing and storage. Make sure your Lambda functions are correctly deployed and connected to your DynamoDB table.

### Common Issues
ValidationException: If you encounter errors like Type mismatch for key Email expected: S actual: NULL, ensure all required attributes are provided and match the expected types in DynamoDB.
Architecture Diagram
Include an architecture diagram in this section to visually represent the project’s structure. The diagram should illustrate the interaction between the frontend (HTML/CSS), AWS Lambda, DynamoDB, and any other relevant components.


### Contributing
If you wish to contribute to this project, feel free to submit a pull request or open an issue for discussion. Contributions are welcome!

### License
This project is licensed under the MIT License. See the LICENSE file for more details.

### Contact
If you have any questions or need further assistance, feel free to contact the project maintainer at ymichaeldanquah615@gmail.com.
