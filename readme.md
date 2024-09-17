# PROJECT NEBULA


# **Cloud-Based Application Using AWS Lambda, API Gateway, DynamoDB, ECS & ECR**

## **Project Overview**
This project demonstrates a cloud-based architecture using AWS services to handle backend logic, API management, serverless computing, and secure data storage. The system is designed to handle user interactions, API requests, server-side processing, and cloud monitoring, ensuring scalability, security, and efficient deployment.

## **Architecture**

![AZUBI FINAL PROJECT (1)](https://github.com/user-attachments/assets/72b4fcc5-b40e-455e-b9a7-c06ac3e29c94)

The architecture of this application integrates multiple AWS services:
- **AWS Lambda**: Handles the server-side processing and logic in a serverless environment.
- **Amazon API Gateway**: Facilitates communication between the client and the Lambda functions through HTTP requests.
- **Amazon DynamoDB**: Provides fast and flexible NoSQL database services, used for storing user data.
- **Amazon ECS (Elastic Container Service)**: Manages Docker containers for scalable, distributed applications.
- **Amazon ECR (Elastic Container Registry)**: Stores Docker container images for deployment in ECS.
- **AWS IAM (Identity and Access Management)**: Ensures only authorized users can invoke APIs and access resources.
- **Amazon CloudWatch**: Monitors the application and logs, providing insights for system performance.

## **Features**
- **Serverless architecture**: Using AWS Lambda for scalable, efficient computing without managing servers.
- **API Management**: API Gateway integrates the frontend with backend Lambda functions.
- **Data Management**: DynamoDB provides low-latency, highly scalable data storage.
- **Dockerized Deployment**: ECS and ECR are used to handle containerized applications, ensuring scalable deployment.

## **Technologies Used**
- **AWS Lambda**
- **Amazon API Gateway**
- **Amazon DynamoDB**
- **Amazon ECS and ECR**
- **AWS IAM and CloudWatch**
- **Docker**

## **Frontend & Backend Stack**
- **Frontend**: HTML, CSS for the user interface and presentation layer.
- **Backend**: PHP is used for handling dynamic content rendering, form submissions, session management, and database interactions.

## **Getting Started**

### **1. Clone the Repository**
```bash
git clone https://github.com/yourusername/yourproject.git
cd yourproject
```

### **2. Prerequisites**
Ensure you have the following:
- AWS Account
- Docker installed on your local machine
- AWS CLI configured

### **3. Deploying the Application**
- **Step 1**: Push the container to ECR.
- **Step 2**: Deploy the application using ECS.
- **Step 3**: Set up API Gateway to connect the frontend with backend Lambda functions.

### **4. Monitoring and Logging**
- Use **AWS CloudWatch** to monitor the performance of your Lambda functions, ECS containers, and overall system health.

## **Contributing**
Feel free to submit a pull request or open an issue if you have any suggestions for improving the project.



