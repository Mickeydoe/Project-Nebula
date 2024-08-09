import json
import boto3

dynamodb = boto3.resource('dynamodb')
table = dynamodb.Table('YourDynamoDBTableName')

def lambda_handler(event, context):
    data = json.loads(event['body'])
    
    response = table.put_item(
        Item={
            'email': data['email'],
            'firstName': data['firstName'],
            'lastName': data['lastName'],
            'nationality': data['nationality'],
            'age': int(data['age']),
            'maritalStatus': data['maritalStatus'],
            'occupation': data['occupation']
        }
    )

    return {
        'statusCode': 200,
        'body': json.dumps('User created successfully!')
    }
