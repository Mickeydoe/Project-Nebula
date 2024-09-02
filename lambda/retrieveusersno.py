import json
import boto3

def lambda_handler(event, context):
    # Initialize a DynamoDB resource object for the specified region
    dynamodb = boto3.resource('dynamodb', region_name='us-east-1')

    # Select the DynamoDB table named 'Nebula'
    table = dynamodb.Table('Nebula')

    # Scan the table to retrieve all items (only count, not data)
    response = table.scan(ProjectionExpression='user_id')  # Assuming 'user_id' is a unique key for each user
    user_count = response['Count']

    # If there are more items to scan, continue scanning and counting until all items are retrieved
    while 'LastEvaluatedKey' in response:
        response = table.scan(ExclusiveStartKey=response['LastEvaluatedKey'], ProjectionExpression='user_id')
        user_count += response['Count']

    # Return the user count
    return {
        'statusCode': 200,
        'body': json.dumps({'user_count': user_count})
    }
