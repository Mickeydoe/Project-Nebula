### Description
This project is a web application that features user authentication and data management, leveraging AWS services for backend functionality. The main components of the project include a login form, data storage and retrieval using DynamoDB, and serverless compute with AWS Lambda. Custom CSS is used to ensure a clean and user-friendly interface.

### Features
- **User Authentication**: Secure login form with proper validation and data handling.
- **Data Management**: Ability to save and retrieve student data using AWS DynamoDB.
- **Serverless Backend**: AWS Lambda functions handle backend logic, enabling a scalable and cost-effective serverless architecture.
- **Custom CSS**: Enhanced UI/UX with custom styles for HTML elements.

### Technologies Used
- **Frontend**: HTML, CSS
- **Backend**: AWS Lambda, AWS DynamoDB, Python (boto3)
- **Other**: AWS SDK, JavaScript (if applicable)

### Prerequisites

#### AWS IAM Permissions and Roles
Before running the application, ensure that the necessary IAM roles and permissions are configured:

- **DynamoDB Access**: The Lambda function should have the necessary IAM role with permissions to read and write to DynamoDB.
- **Lambda Execution Role**: Ensure that your Lambda function has an execution role with the appropriate permissions for accessing DynamoDB and other AWS services.
- **AWS CLI**: Set up AWS CLI on your local machine and configure it with your AWS credentials:
  ```bash
  aws configure
