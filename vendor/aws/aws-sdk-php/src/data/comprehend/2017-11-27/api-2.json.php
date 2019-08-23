<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

// This file was auto-generated from sdk-root/src/data/comprehend/2017-11-27/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2017-11-27', 'endpointPrefix' => 'comprehend', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'Amazon Comprehend', 'serviceId' => 'Comprehend', 'signatureVersion' => 'v4', 'signingName' => 'comprehend', 'targetPrefix' => 'Comprehend_20171127', 'uid' => 'comprehend-2017-11-27'], 'operations' => ['BatchDetectDominantLanguage' => ['name' => 'BatchDetectDominantLanguage', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'BatchDetectDominantLanguageRequest'], 'output' => ['shape' => 'BatchDetectDominantLanguageResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'TextSizeLimitExceededException'], ['shape' => 'BatchSizeLimitExceededException'], ['shape' => 'InternalServerException']]], 'BatchDetectEntities' => ['name' => 'BatchDetectEntities', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'BatchDetectEntitiesRequest'], 'output' => ['shape' => 'BatchDetectEntitiesResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'TextSizeLimitExceededException'], ['shape' => 'UnsupportedLanguageException'], ['shape' => 'BatchSizeLimitExceededException'], ['shape' => 'InternalServerException']]], 'BatchDetectKeyPhrases' => ['name' => 'BatchDetectKeyPhrases', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'BatchDetectKeyPhrasesRequest'], 'output' => ['shape' => 'BatchDetectKeyPhrasesResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'TextSizeLimitExceededException'], ['shape' => 'UnsupportedLanguageException'], ['shape' => 'BatchSizeLimitExceededException'], ['shape' => 'InternalServerException']]], 'BatchDetectSentiment' => ['name' => 'BatchDetectSentiment', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'BatchDetectSentimentRequest'], 'output' => ['shape' => 'BatchDetectSentimentResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'TextSizeLimitExceededException'], ['shape' => 'UnsupportedLanguageException'], ['shape' => 'BatchSizeLimitExceededException'], ['shape' => 'InternalServerException']]], 'BatchDetectSyntax' => ['name' => 'BatchDetectSyntax', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'BatchDetectSyntaxRequest'], 'output' => ['shape' => 'BatchDetectSyntaxResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'TextSizeLimitExceededException'], ['shape' => 'UnsupportedLanguageException'], ['shape' => 'BatchSizeLimitExceededException'], ['shape' => 'InternalServerException']]], 'DescribeDominantLanguageDetectionJob' => ['name' => 'DescribeDominantLanguageDetectionJob', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeDominantLanguageDetectionJobRequest'], 'output' => ['shape' => 'DescribeDominantLanguageDetectionJobResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'JobNotFoundException'], ['shape' => 'TooManyRequestsException'], ['shape' => 'InternalServerException']]], 'DescribeEntitiesDetectionJob' => ['name' => 'DescribeEntitiesDetectionJob', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeEntitiesDetectionJobRequest'], 'output' => ['shape' => 'DescribeEntitiesDetectionJobResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'JobNotFoundException'], ['shape' => 'TooManyRequestsException'], ['shape' => 'InternalServerException']]], 'DescribeKeyPhrasesDetectionJob' => ['name' => 'DescribeKeyPhrasesDetectionJob', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeKeyPhrasesDetectionJobRequest'], 'output' => ['shape' => 'DescribeKeyPhrasesDetectionJobResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'JobNotFoundException'], ['shape' => 'TooManyRequestsException'], ['shape' => 'InternalServerException']]], 'DescribeSentimentDetectionJob' => ['name' => 'DescribeSentimentDetectionJob', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeSentimentDetectionJobRequest'], 'output' => ['shape' => 'DescribeSentimentDetectionJobResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'JobNotFoundException'], ['shape' => 'TooManyRequestsException'], ['shape' => 'InternalServerException']]], 'DescribeTopicsDetectionJob' => ['name' => 'DescribeTopicsDetectionJob', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeTopicsDetectionJobRequest'], 'output' => ['shape' => 'DescribeTopicsDetectionJobResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'JobNotFoundException'], ['shape' => 'TooManyRequestsException'], ['shape' => 'InternalServerException']]], 'DetectDominantLanguage' => ['name' => 'DetectDominantLanguage', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DetectDominantLanguageRequest'], 'output' => ['shape' => 'DetectDominantLanguageResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'TextSizeLimitExceededException'], ['shape' => 'InternalServerException']]], 'DetectEntities' => ['name' => 'DetectEntities', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DetectEntitiesRequest'], 'output' => ['shape' => 'DetectEntitiesResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'TextSizeLimitExceededException'], ['shape' => 'UnsupportedLanguageException'], ['shape' => 'InternalServerException']]], 'DetectKeyPhrases' => ['name' => 'DetectKeyPhrases', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DetectKeyPhrasesRequest'], 'output' => ['shape' => 'DetectKeyPhrasesResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'TextSizeLimitExceededException'], ['shape' => 'UnsupportedLanguageException'], ['shape' => 'InternalServerException']]], 'DetectSentiment' => ['name' => 'DetectSentiment', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DetectSentimentRequest'], 'output' => ['shape' => 'DetectSentimentResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'TextSizeLimitExceededException'], ['shape' => 'UnsupportedLanguageException'], ['shape' => 'InternalServerException']]], 'DetectSyntax' => ['name' => 'DetectSyntax', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DetectSyntaxRequest'], 'output' => ['shape' => 'DetectSyntaxResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'TextSizeLimitExceededException'], ['shape' => 'UnsupportedLanguageException'], ['shape' => 'InternalServerException']]], 'ListDominantLanguageDetectionJobs' => ['name' => 'ListDominantLanguageDetectionJobs', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListDominantLanguageDetectionJobsRequest'], 'output' => ['shape' => 'ListDominantLanguageDetectionJobsResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'TooManyRequestsException'], ['shape' => 'InvalidFilterException'], ['shape' => 'InternalServerException']]], 'ListEntitiesDetectionJobs' => ['name' => 'ListEntitiesDetectionJobs', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListEntitiesDetectionJobsRequest'], 'output' => ['shape' => 'ListEntitiesDetectionJobsResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'TooManyRequestsException'], ['shape' => 'InvalidFilterException'], ['shape' => 'InternalServerException']]], 'ListKeyPhrasesDetectionJobs' => ['name' => 'ListKeyPhrasesDetectionJobs', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListKeyPhrasesDetectionJobsRequest'], 'output' => ['shape' => 'ListKeyPhrasesDetectionJobsResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'TooManyRequestsException'], ['shape' => 'InvalidFilterException'], ['shape' => 'InternalServerException']]], 'ListSentimentDetectionJobs' => ['name' => 'ListSentimentDetectionJobs', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListSentimentDetectionJobsRequest'], 'output' => ['shape' => 'ListSentimentDetectionJobsResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'TooManyRequestsException'], ['shape' => 'InvalidFilterException'], ['shape' => 'InternalServerException']]], 'ListTopicsDetectionJobs' => ['name' => 'ListTopicsDetectionJobs', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListTopicsDetectionJobsRequest'], 'output' => ['shape' => 'ListTopicsDetectionJobsResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'TooManyRequestsException'], ['shape' => 'InvalidFilterException'], ['shape' => 'InternalServerException']]], 'StartDominantLanguageDetectionJob' => ['name' => 'StartDominantLanguageDetectionJob', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'StartDominantLanguageDetectionJobRequest'], 'output' => ['shape' => 'StartDominantLanguageDetectionJobResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'TooManyRequestsException'], ['shape' => 'InternalServerException']]], 'StartEntitiesDetectionJob' => ['name' => 'StartEntitiesDetectionJob', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'StartEntitiesDetectionJobRequest'], 'output' => ['shape' => 'StartEntitiesDetectionJobResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'TooManyRequestsException'], ['shape' => 'InternalServerException']]], 'StartKeyPhrasesDetectionJob' => ['name' => 'StartKeyPhrasesDetectionJob', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'StartKeyPhrasesDetectionJobRequest'], 'output' => ['shape' => 'StartKeyPhrasesDetectionJobResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'TooManyRequestsException'], ['shape' => 'InternalServerException']]], 'StartSentimentDetectionJob' => ['name' => 'StartSentimentDetectionJob', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'StartSentimentDetectionJobRequest'], 'output' => ['shape' => 'StartSentimentDetectionJobResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'TooManyRequestsException'], ['shape' => 'InternalServerException']]], 'StartTopicsDetectionJob' => ['name' => 'StartTopicsDetectionJob', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'StartTopicsDetectionJobRequest'], 'output' => ['shape' => 'StartTopicsDetectionJobResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'TooManyRequestsException'], ['shape' => 'InternalServerException']]], 'StopDominantLanguageDetectionJob' => ['name' => 'StopDominantLanguageDetectionJob', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'StopDominantLanguageDetectionJobRequest'], 'output' => ['shape' => 'StopDominantLanguageDetectionJobResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'JobNotFoundException'], ['shape' => 'InternalServerException']]], 'StopEntitiesDetectionJob' => ['name' => 'StopEntitiesDetectionJob', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'StopEntitiesDetectionJobRequest'], 'output' => ['shape' => 'StopEntitiesDetectionJobResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'JobNotFoundException'], ['shape' => 'InternalServerException']]], 'StopKeyPhrasesDetectionJob' => ['name' => 'StopKeyPhrasesDetectionJob', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'StopKeyPhrasesDetectionJobRequest'], 'output' => ['shape' => 'StopKeyPhrasesDetectionJobResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'JobNotFoundException'], ['shape' => 'InternalServerException']]], 'StopSentimentDetectionJob' => ['name' => 'StopSentimentDetectionJob', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'StopSentimentDetectionJobRequest'], 'output' => ['shape' => 'StopSentimentDetectionJobResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'JobNotFoundException'], ['shape' => 'InternalServerException']]]], 'shapes' => ['AnyLengthString' => ['type' => 'string'], 'BatchDetectDominantLanguageItemResult' => ['type' => 'structure', 'members' => ['Index' => ['shape' => 'Integer'], 'Languages' => ['shape' => 'ListOfDominantLanguages']]], 'BatchDetectDominantLanguageRequest' => ['type' => 'structure', 'required' => ['TextList'], 'members' => ['TextList' => ['shape' => 'StringList']]], 'BatchDetectDominantLanguageResponse' => ['type' => 'structure', 'required' => ['ResultList', 'ErrorList'], 'members' => ['ResultList' => ['shape' => 'ListOfDetectDominantLanguageResult'], 'ErrorList' => ['shape' => 'BatchItemErrorList']]], 'BatchDetectEntitiesItemResult' => ['type' => 'structure', 'members' => ['Index' => ['shape' => 'Integer'], 'Entities' => ['shape' => 'ListOfEntities']]], 'BatchDetectEntitiesRequest' => ['type' => 'structure', 'required' => ['TextList', 'LanguageCode'], 'members' => ['TextList' => ['shape' => 'StringList'], 'LanguageCode' => ['shape' => 'LanguageCode']]], 'BatchDetectEntitiesResponse' => ['type' => 'structure', 'required' => ['ResultList', 'ErrorList'], 'members' => ['ResultList' => ['shape' => 'ListOfDetectEntitiesResult'], 'ErrorList' => ['shape' => 'BatchItemErrorList']]], 'BatchDetectKeyPhrasesItemResult' => ['type' => 'structure', 'members' => ['Index' => ['shape' => 'Integer'], 'KeyPhrases' => ['shape' => 'ListOfKeyPhrases']]], 'BatchDetectKeyPhrasesRequest' => ['type' => 'structure', 'required' => ['TextList', 'LanguageCode'], 'members' => ['TextList' => ['shape' => 'StringList'], 'LanguageCode' => ['shape' => 'LanguageCode']]], 'BatchDetectKeyPhrasesResponse' => ['type' => 'structure', 'required' => ['ResultList', 'ErrorList'], 'members' => ['ResultList' => ['shape' => 'ListOfDetectKeyPhrasesResult'], 'ErrorList' => ['shape' => 'BatchItemErrorList']]], 'BatchDetectSentimentItemResult' => ['type' => 'structure', 'members' => ['Index' => ['shape' => 'Integer'], 'Sentiment' => ['shape' => 'SentimentType'], 'SentimentScore' => ['shape' => 'SentimentScore']]], 'BatchDetectSentimentRequest' => ['type' => 'structure', 'required' => ['TextList', 'LanguageCode'], 'members' => ['TextList' => ['shape' => 'StringList'], 'LanguageCode' => ['shape' => 'LanguageCode']]], 'BatchDetectSentimentResponse' => ['type' => 'structure', 'required' => ['ResultList', 'ErrorList'], 'members' => ['ResultList' => ['shape' => 'ListOfDetectSentimentResult'], 'ErrorList' => ['shape' => 'BatchItemErrorList']]], 'BatchDetectSyntaxItemResult' => ['type' => 'structure', 'members' => ['Index' => ['shape' => 'Integer'], 'SyntaxTokens' => ['shape' => 'ListOfSyntaxTokens']]], 'BatchDetectSyntaxRequest' => ['type' => 'structure', 'required' => ['TextList', 'LanguageCode'], 'members' => ['TextList' => ['shape' => 'StringList'], 'LanguageCode' => ['shape' => 'SyntaxLanguageCode']]], 'BatchDetectSyntaxResponse' => ['type' => 'structure', 'required' => ['ResultList', 'ErrorList'], 'members' => ['ResultList' => ['shape' => 'ListOfDetectSyntaxResult'], 'ErrorList' => ['shape' => 'BatchItemErrorList']]], 'BatchItemError' => ['type' => 'structure', 'members' => ['Index' => ['shape' => 'Integer'], 'ErrorCode' => ['shape' => 'String'], 'ErrorMessage' => ['shape' => 'String']]], 'BatchItemErrorList' => ['type' => 'list', 'member' => ['shape' => 'BatchItemError']], 'BatchSizeLimitExceededException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'String']], 'exception' => true], 'ClientRequestTokenString' => ['type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^[a-zA-Z0-9-]+$'], 'DescribeDominantLanguageDetectionJobRequest' => ['type' => 'structure', 'required' => ['JobId'], 'members' => ['JobId' => ['shape' => 'JobId']]], 'DescribeDominantLanguageDetectionJobResponse' => ['type' => 'structure', 'members' => ['DominantLanguageDetectionJobProperties' => ['shape' => 'DominantLanguageDetectionJobProperties']]], 'DescribeEntitiesDetectionJobRequest' => ['type' => 'structure', 'required' => ['JobId'], 'members' => ['JobId' => ['shape' => 'JobId']]], 'DescribeEntitiesDetectionJobResponse' => ['type' => 'structure', 'members' => ['EntitiesDetectionJobProperties' => ['shape' => 'EntitiesDetectionJobProperties']]], 'DescribeKeyPhrasesDetectionJobRequest' => ['type' => 'structure', 'required' => ['JobId'], 'members' => ['JobId' => ['shape' => 'JobId']]], 'DescribeKeyPhrasesDetectionJobResponse' => ['type' => 'structure', 'members' => ['KeyPhrasesDetectionJobProperties' => ['shape' => 'KeyPhrasesDetectionJobProperties']]], 'DescribeSentimentDetectionJobRequest' => ['type' => 'structure', 'required' => ['JobId'], 'members' => ['JobId' => ['shape' => 'JobId']]], 'DescribeSentimentDetectionJobResponse' => ['type' => 'structure', 'members' => ['SentimentDetectionJobProperties' => ['shape' => 'SentimentDetectionJobProperties']]], 'DescribeTopicsDetectionJobRequest' => ['type' => 'structure', 'required' => ['JobId'], 'members' => ['JobId' => ['shape' => 'JobId']]], 'DescribeTopicsDetectionJobResponse' => ['type' => 'structure', 'members' => ['TopicsDetectionJobProperties' => ['shape' => 'TopicsDetectionJobProperties']]], 'DetectDominantLanguageRequest' => ['type' => 'structure', 'required' => ['Text'], 'members' => ['Text' => ['shape' => 'String']]], 'DetectDominantLanguageResponse' => ['type' => 'structure', 'members' => ['Languages' => ['shape' => 'ListOfDominantLanguages']]], 'DetectEntitiesRequest' => ['type' => 'structure', 'required' => ['Text', 'LanguageCode'], 'members' => ['Text' => ['shape' => 'String'], 'LanguageCode' => ['shape' => 'LanguageCode']]], 'DetectEntitiesResponse' => ['type' => 'structure', 'members' => ['Entities' => ['shape' => 'ListOfEntities']]], 'DetectKeyPhrasesRequest' => ['type' => 'structure', 'required' => ['Text', 'LanguageCode'], 'members' => ['Text' => ['shape' => 'String'], 'LanguageCode' => ['shape' => 'LanguageCode']]], 'DetectKeyPhrasesResponse' => ['type' => 'structure', 'members' => ['KeyPhrases' => ['shape' => 'ListOfKeyPhrases']]], 'DetectSentimentRequest' => ['type' => 'structure', 'required' => ['Text', 'LanguageCode'], 'members' => ['Text' => ['shape' => 'String'], 'LanguageCode' => ['shape' => 'LanguageCode']]], 'DetectSentimentResponse' => ['type' => 'structure', 'members' => ['Sentiment' => ['shape' => 'SentimentType'], 'SentimentScore' => ['shape' => 'SentimentScore']]], 'DetectSyntaxRequest' => ['type' => 'structure', 'required' => ['Text', 'LanguageCode'], 'members' => ['Text' => ['shape' => 'String'], 'LanguageCode' => ['shape' => 'SyntaxLanguageCode']]], 'DetectSyntaxResponse' => ['type' => 'structure', 'members' => ['SyntaxTokens' => ['shape' => 'ListOfSyntaxTokens']]], 'DominantLanguage' => ['type' => 'structure', 'members' => ['LanguageCode' => ['shape' => 'String'], 'Score' => ['shape' => 'Float']]], 'DominantLanguageDetectionJobFilter' => ['type' => 'structure', 'members' => ['JobName' => ['shape' => 'JobName'], 'JobStatus' => ['shape' => 'JobStatus'], 'SubmitTimeBefore' => ['shape' => 'Timestamp'], 'SubmitTimeAfter' => ['shape' => 'Timestamp']]], 'DominantLanguageDetectionJobProperties' => ['type' => 'structure', 'members' => ['JobId' => ['shape' => 'JobId'], 'JobName' => ['shape' => 'JobName'], 'JobStatus' => ['shape' => 'JobStatus'], 'Message' => ['shape' => 'AnyLengthString'], 'SubmitTime' => ['shape' => 'Timestamp'], 'EndTime' => ['shape' => 'Timestamp'], 'InputDataConfig' => ['shape' => 'InputDataConfig'], 'OutputDataConfig' => ['shape' => 'OutputDataConfig'], 'DataAccessRoleArn' => ['shape' => 'IamRoleArn']]], 'DominantLanguageDetectionJobPropertiesList' => ['type' => 'list', 'member' => ['shape' => 'DominantLanguageDetectionJobProperties']], 'EntitiesDetectionJobFilter' => ['type' => 'structure', 'members' => ['JobName' => ['shape' => 'JobName'], 'JobStatus' => ['shape' => 'JobStatus'], 'SubmitTimeBefore' => ['shape' => 'Timestamp'], 'SubmitTimeAfter' => ['shape' => 'Timestamp']]], 'EntitiesDetectionJobProperties' => ['type' => 'structure', 'members' => ['JobId' => ['shape' => 'JobId'], 'JobName' => ['shape' => 'JobName'], 'JobStatus' => ['shape' => 'JobStatus'], 'Message' => ['shape' => 'AnyLengthString'], 'SubmitTime' => ['shape' => 'Timestamp'], 'EndTime' => ['shape' => 'Timestamp'], 'InputDataConfig' => ['shape' => 'InputDataConfig'], 'OutputDataConfig' => ['shape' => 'OutputDataConfig'], 'LanguageCode' => ['shape' => 'LanguageCode'], 'DataAccessRoleArn' => ['shape' => 'IamRoleArn']]], 'EntitiesDetectionJobPropertiesList' => ['type' => 'list', 'member' => ['shape' => 'EntitiesDetectionJobProperties']], 'Entity' => ['type' => 'structure', 'members' => ['Score' => ['shape' => 'Float'], 'Type' => ['shape' => 'EntityType'], 'Text' => ['shape' => 'String'], 'BeginOffset' => ['shape' => 'Integer'], 'EndOffset' => ['shape' => 'Integer']]], 'EntityType' => ['type' => 'string', 'enum' => ['PERSON', 'LOCATION', 'ORGANIZATION', 'COMMERCIAL_ITEM', 'EVENT', 'DATE', 'QUANTITY', 'TITLE', 'OTHER']], 'Float' => ['type' => 'float'], 'IamRoleArn' => ['type' => 'string', 'pattern' => 'arn:aws(-[^:]+)?:iam::[0-9]{12}:role/.+'], 'InputDataConfig' => ['type' => 'structure', 'required' => ['S3Uri'], 'members' => ['S3Uri' => ['shape' => 'S3Uri'], 'InputFormat' => ['shape' => 'InputFormat']]], 'InputFormat' => ['type' => 'string', 'enum' => ['ONE_DOC_PER_FILE', 'ONE_DOC_PER_LINE']], 'Integer' => ['type' => 'integer'], 'InternalServerException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'String']], 'exception' => true, 'fault' => true], 'InvalidFilterException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'String']], 'exception' => true], 'InvalidRequestException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'String']], 'exception' => true], 'JobId' => ['type' => 'string', 'max' => 32, 'min' => 1], 'JobName' => ['type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-%@]*)$'], 'JobNotFoundException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'String']], 'exception' => true], 'JobStatus' => ['type' => 'string', 'enum' => ['SUBMITTED', 'IN_PROGRESS', 'COMPLETED', 'FAILED', 'STOP_REQUESTED', 'STOPPED']], 'KeyPhrase' => ['type' => 'structure', 'members' => ['Score' => ['shape' => 'Float'], 'Text' => ['shape' => 'String'], 'BeginOffset' => ['shape' => 'Integer'], 'EndOffset' => ['shape' => 'Integer']]], 'KeyPhrasesDetectionJobFilter' => ['type' => 'structure', 'members' => ['JobName' => ['shape' => 'JobName'], 'JobStatus' => ['shape' => 'JobStatus'], 'SubmitTimeBefore' => ['shape' => 'Timestamp'], 'SubmitTimeAfter' => ['shape' => 'Timestamp']]], 'KeyPhrasesDetectionJobProperties' => ['type' => 'structure', 'members' => ['JobId' => ['shape' => 'JobId'], 'JobName' => ['shape' => 'JobName'], 'JobStatus' => ['shape' => 'JobStatus'], 'Message' => ['shape' => 'AnyLengthString'], 'SubmitTime' => ['shape' => 'Timestamp'], 'EndTime' => ['shape' => 'Timestamp'], 'InputDataConfig' => ['shape' => 'InputDataConfig'], 'OutputDataConfig' => ['shape' => 'OutputDataConfig'], 'LanguageCode' => ['shape' => 'LanguageCode'], 'DataAccessRoleArn' => ['shape' => 'IamRoleArn']]], 'KeyPhrasesDetectionJobPropertiesList' => ['type' => 'list', 'member' => ['shape' => 'KeyPhrasesDetectionJobProperties']], 'LanguageCode' => ['type' => 'string', 'enum' => ['en', 'es']], 'ListDominantLanguageDetectionJobsRequest' => ['type' => 'structure', 'members' => ['Filter' => ['shape' => 'DominantLanguageDetectionJobFilter'], 'NextToken' => ['shape' => 'String'], 'MaxResults' => ['shape' => 'MaxResultsInteger']]], 'ListDominantLanguageDetectionJobsResponse' => ['type' => 'structure', 'members' => ['DominantLanguageDetectionJobPropertiesList' => ['shape' => 'DominantLanguageDetectionJobPropertiesList'], 'NextToken' => ['shape' => 'String']]], 'ListEntitiesDetectionJobsRequest' => ['type' => 'structure', 'members' => ['Filter' => ['shape' => 'EntitiesDetectionJobFilter'], 'NextToken' => ['shape' => 'String'], 'MaxResults' => ['shape' => 'MaxResultsInteger']]], 'ListEntitiesDetectionJobsResponse' => ['type' => 'structure', 'members' => ['EntitiesDetectionJobPropertiesList' => ['shape' => 'EntitiesDetectionJobPropertiesList'], 'NextToken' => ['shape' => 'String']]], 'ListKeyPhrasesDetectionJobsRequest' => ['type' => 'structure', 'members' => ['Filter' => ['shape' => 'KeyPhrasesDetectionJobFilter'], 'NextToken' => ['shape' => 'String'], 'MaxResults' => ['shape' => 'MaxResultsInteger']]], 'ListKeyPhrasesDetectionJobsResponse' => ['type' => 'structure', 'members' => ['KeyPhrasesDetectionJobPropertiesList' => ['shape' => 'KeyPhrasesDetectionJobPropertiesList'], 'NextToken' => ['shape' => 'String']]], 'ListOfDetectDominantLanguageResult' => ['type' => 'list', 'member' => ['shape' => 'BatchDetectDominantLanguageItemResult']], 'ListOfDetectEntitiesResult' => ['type' => 'list', 'member' => ['shape' => 'BatchDetectEntitiesItemResult']], 'ListOfDetectKeyPhrasesResult' => ['type' => 'list', 'member' => ['shape' => 'BatchDetectKeyPhrasesItemResult']], 'ListOfDetectSentimentResult' => ['type' => 'list', 'member' => ['shape' => 'BatchDetectSentimentItemResult']], 'ListOfDetectSyntaxResult' => ['type' => 'list', 'member' => ['shape' => 'BatchDetectSyntaxItemResult']], 'ListOfDominantLanguages' => ['type' => 'list', 'member' => ['shape' => 'DominantLanguage']], 'ListOfEntities' => ['type' => 'list', 'member' => ['shape' => 'Entity']], 'ListOfKeyPhrases' => ['type' => 'list', 'member' => ['shape' => 'KeyPhrase']], 'ListOfSyntaxTokens' => ['type' => 'list', 'member' => ['shape' => 'SyntaxToken']], 'ListSentimentDetectionJobsRequest' => ['type' => 'structure', 'members' => ['Filter' => ['shape' => 'SentimentDetectionJobFilter'], 'NextToken' => ['shape' => 'String'], 'MaxResults' => ['shape' => 'MaxResultsInteger']]], 'ListSentimentDetectionJobsResponse' => ['type' => 'structure', 'members' => ['SentimentDetectionJobPropertiesList' => ['shape' => 'SentimentDetectionJobPropertiesList'], 'NextToken' => ['shape' => 'String']]], 'ListTopicsDetectionJobsRequest' => ['type' => 'structure', 'members' => ['Filter' => ['shape' => 'TopicsDetectionJobFilter'], 'NextToken' => ['shape' => 'String'], 'MaxResults' => ['shape' => 'MaxResultsInteger']]], 'ListTopicsDetectionJobsResponse' => ['type' => 'structure', 'members' => ['TopicsDetectionJobPropertiesList' => ['shape' => 'TopicsDetectionJobPropertiesList'], 'NextToken' => ['shape' => 'String']]], 'MaxResultsInteger' => ['type' => 'integer', 'max' => 500, 'min' => 1], 'NumberOfTopicsInteger' => ['type' => 'integer', 'max' => 100, 'min' => 1], 'OutputDataConfig' => ['type' => 'structure', 'required' => ['S3Uri'], 'members' => ['S3Uri' => ['shape' => 'S3Uri']]], 'PartOfSpeechTag' => ['type' => 'structure', 'members' => ['Tag' => ['shape' => 'PartOfSpeechTagType'], 'Score' => ['shape' => 'Float']]], 'PartOfSpeechTagType' => ['type' => 'string', 'enum' => ['ADJ', 'ADP', 'ADV', 'AUX', 'CONJ', 'DET', 'INTJ', 'NOUN', 'NUM', 'O', 'PART', 'PRON', 'PROPN', 'PUNCT', 'SCONJ', 'SYM', 'VERB']], 'S3Uri' => ['type' => 'string', 'max' => 1024, 'pattern' => 's3://[a-z0-9][\\.\\-a-z0-9]{1,61}[a-z0-9](/.*)?'], 'SentimentDetectionJobFilter' => ['type' => 'structure', 'members' => ['JobName' => ['shape' => 'JobName'], 'JobStatus' => ['shape' => 'JobStatus'], 'SubmitTimeBefore' => ['shape' => 'Timestamp'], 'SubmitTimeAfter' => ['shape' => 'Timestamp']]], 'SentimentDetectionJobProperties' => ['type' => 'structure', 'members' => ['JobId' => ['shape' => 'JobId'], 'JobName' => ['shape' => 'JobName'], 'JobStatus' => ['shape' => 'JobStatus'], 'Message' => ['shape' => 'AnyLengthString'], 'SubmitTime' => ['shape' => 'Timestamp'], 'EndTime' => ['shape' => 'Timestamp'], 'InputDataConfig' => ['shape' => 'InputDataConfig'], 'OutputDataConfig' => ['shape' => 'OutputDataConfig'], 'LanguageCode' => ['shape' => 'LanguageCode'], 'DataAccessRoleArn' => ['shape' => 'IamRoleArn']]], 'SentimentDetectionJobPropertiesList' => ['type' => 'list', 'member' => ['shape' => 'SentimentDetectionJobProperties']], 'SentimentScore' => ['type' => 'structure', 'members' => ['Positive' => ['shape' => 'Float'], 'Negative' => ['shape' => 'Float'], 'Neutral' => ['shape' => 'Float'], 'Mixed' => ['shape' => 'Float']]], 'SentimentType' => ['type' => 'string', 'enum' => ['POSITIVE', 'NEGATIVE', 'NEUTRAL', 'MIXED']], 'StartDominantLanguageDetectionJobRequest' => ['type' => 'structure', 'required' => ['InputDataConfig', 'OutputDataConfig', 'DataAccessRoleArn'], 'members' => ['InputDataConfig' => ['shape' => 'InputDataConfig'], 'OutputDataConfig' => ['shape' => 'OutputDataConfig'], 'DataAccessRoleArn' => ['shape' => 'IamRoleArn'], 'JobName' => ['shape' => 'JobName'], 'ClientRequestToken' => ['shape' => 'ClientRequestTokenString', 'idempotencyToken' => true]]], 'StartDominantLanguageDetectionJobResponse' => ['type' => 'structure', 'members' => ['JobId' => ['shape' => 'JobId'], 'JobStatus' => ['shape' => 'JobStatus']]], 'StartEntitiesDetectionJobRequest' => ['type' => 'structure', 'required' => ['InputDataConfig', 'OutputDataConfig', 'DataAccessRoleArn', 'LanguageCode'], 'members' => ['InputDataConfig' => ['shape' => 'InputDataConfig'], 'OutputDataConfig' => ['shape' => 'OutputDataConfig'], 'DataAccessRoleArn' => ['shape' => 'IamRoleArn'], 'JobName' => ['shape' => 'JobName'], 'LanguageCode' => ['shape' => 'LanguageCode'], 'ClientRequestToken' => ['shape' => 'ClientRequestTokenString', 'idempotencyToken' => true]]], 'StartEntitiesDetectionJobResponse' => ['type' => 'structure', 'members' => ['JobId' => ['shape' => 'JobId'], 'JobStatus' => ['shape' => 'JobStatus']]], 'StartKeyPhrasesDetectionJobRequest' => ['type' => 'structure', 'required' => ['InputDataConfig', 'OutputDataConfig', 'DataAccessRoleArn', 'LanguageCode'], 'members' => ['InputDataConfig' => ['shape' => 'InputDataConfig'], 'OutputDataConfig' => ['shape' => 'OutputDataConfig'], 'DataAccessRoleArn' => ['shape' => 'IamRoleArn'], 'JobName' => ['shape' => 'JobName'], 'LanguageCode' => ['shape' => 'LanguageCode'], 'ClientRequestToken' => ['shape' => 'ClientRequestTokenString', 'idempotencyToken' => true]]], 'StartKeyPhrasesDetectionJobResponse' => ['type' => 'structure', 'members' => ['JobId' => ['shape' => 'JobId'], 'JobStatus' => ['shape' => 'JobStatus']]], 'StartSentimentDetectionJobRequest' => ['type' => 'structure', 'required' => ['InputDataConfig', 'OutputDataConfig', 'DataAccessRoleArn', 'LanguageCode'], 'members' => ['InputDataConfig' => ['shape' => 'InputDataConfig'], 'OutputDataConfig' => ['shape' => 'OutputDataConfig'], 'DataAccessRoleArn' => ['shape' => 'IamRoleArn'], 'JobName' => ['shape' => 'JobName'], 'LanguageCode' => ['shape' => 'LanguageCode'], 'ClientRequestToken' => ['shape' => 'ClientRequestTokenString', 'idempotencyToken' => true]]], 'StartSentimentDetectionJobResponse' => ['type' => 'structure', 'members' => ['JobId' => ['shape' => 'JobId'], 'JobStatus' => ['shape' => 'JobStatus']]], 'StartTopicsDetectionJobRequest' => ['type' => 'structure', 'required' => ['InputDataConfig', 'OutputDataConfig', 'DataAccessRoleArn'], 'members' => ['InputDataConfig' => ['shape' => 'InputDataConfig'], 'OutputDataConfig' => ['shape' => 'OutputDataConfig'], 'DataAccessRoleArn' => ['shape' => 'IamRoleArn'], 'JobName' => ['shape' => 'JobName'], 'NumberOfTopics' => ['shape' => 'NumberOfTopicsInteger'], 'ClientRequestToken' => ['shape' => 'ClientRequestTokenString', 'idempotencyToken' => true]]], 'StartTopicsDetectionJobResponse' => ['type' => 'structure', 'members' => ['JobId' => ['shape' => 'JobId'], 'JobStatus' => ['shape' => 'JobStatus']]], 'StopDominantLanguageDetectionJobRequest' => ['type' => 'structure', 'required' => ['JobId'], 'members' => ['JobId' => ['shape' => 'JobId']]], 'StopDominantLanguageDetectionJobResponse' => ['type' => 'structure', 'members' => ['JobId' => ['shape' => 'JobId'], 'JobStatus' => ['shape' => 'JobStatus']]], 'StopEntitiesDetectionJobRequest' => ['type' => 'structure', 'required' => ['JobId'], 'members' => ['JobId' => ['shape' => 'JobId']]], 'StopEntitiesDetectionJobResponse' => ['type' => 'structure', 'members' => ['JobId' => ['shape' => 'JobId'], 'JobStatus' => ['shape' => 'JobStatus']]], 'StopKeyPhrasesDetectionJobRequest' => ['type' => 'structure', 'required' => ['JobId'], 'members' => ['JobId' => ['shape' => 'JobId']]], 'StopKeyPhrasesDetectionJobResponse' => ['type' => 'structure', 'members' => ['JobId' => ['shape' => 'JobId'], 'JobStatus' => ['shape' => 'JobStatus']]], 'StopSentimentDetectionJobRequest' => ['type' => 'structure', 'required' => ['JobId'], 'members' => ['JobId' => ['shape' => 'JobId']]], 'StopSentimentDetectionJobResponse' => ['type' => 'structure', 'members' => ['JobId' => ['shape' => 'JobId'], 'JobStatus' => ['shape' => 'JobStatus']]], 'String' => ['type' => 'string', 'min' => 1], 'StringList' => ['type' => 'list', 'member' => ['shape' => 'String']], 'SyntaxLanguageCode' => ['type' => 'string', 'enum' => ['en']], 'SyntaxToken' => ['type' => 'structure', 'members' => ['TokenId' => ['shape' => 'Integer'], 'Text' => ['shape' => 'String'], 'BeginOffset' => ['shape' => 'Integer'], 'EndOffset' => ['shape' => 'Integer'], 'PartOfSpeech' => ['shape' => 'PartOfSpeechTag']]], 'TextSizeLimitExceededException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'String']], 'exception' => true], 'Timestamp' => ['type' => 'timestamp'], 'TooManyRequestsException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'String']], 'exception' => true], 'TopicsDetectionJobFilter' => ['type' => 'structure', 'members' => ['JobName' => ['shape' => 'JobName'], 'JobStatus' => ['shape' => 'JobStatus'], 'SubmitTimeBefore' => ['shape' => 'Timestamp'], 'SubmitTimeAfter' => ['shape' => 'Timestamp']]], 'TopicsDetectionJobProperties' => ['type' => 'structure', 'members' => ['JobId' => ['shape' => 'JobId'], 'JobName' => ['shape' => 'JobName'], 'JobStatus' => ['shape' => 'JobStatus'], 'Message' => ['shape' => 'AnyLengthString'], 'SubmitTime' => ['shape' => 'Timestamp'], 'EndTime' => ['shape' => 'Timestamp'], 'InputDataConfig' => ['shape' => 'InputDataConfig'], 'OutputDataConfig' => ['shape' => 'OutputDataConfig'], 'NumberOfTopics' => ['shape' => 'Integer']]], 'TopicsDetectionJobPropertiesList' => ['type' => 'list', 'member' => ['shape' => 'TopicsDetectionJobProperties']], 'UnsupportedLanguageException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'String']], 'exception' => true]]];

?>