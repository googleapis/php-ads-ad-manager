<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START admanager_v1_generated_EntitySignalsMappingService_CreateEntitySignalsMapping_sync]
use Google\Ads\AdManager\V1\Client\EntitySignalsMappingServiceClient;
use Google\Ads\AdManager\V1\CreateEntitySignalsMappingRequest;
use Google\Ads\AdManager\V1\EntitySignalsMapping;
use Google\ApiCore\ApiException;

/**
 * API to create an `EntitySignalsMapping` object.
 *
 * @param string $formattedParent The parent resource where this EntitySignalsMapping will be
 *                                created. Format: `networks/{network_code}`
 *                                Please see {@see EntitySignalsMappingServiceClient::networkName()} for help formatting this field.
 */
function create_entity_signals_mapping_sample(string $formattedParent): void
{
    // Create a client.
    $entitySignalsMappingServiceClient = new EntitySignalsMappingServiceClient();

    // Prepare the request message.
    $entitySignalsMapping = new EntitySignalsMapping();
    $request = (new CreateEntitySignalsMappingRequest())
        ->setParent($formattedParent)
        ->setEntitySignalsMapping($entitySignalsMapping);

    // Call the API and handle any network failures.
    try {
        /** @var EntitySignalsMapping $response */
        $response = $entitySignalsMappingServiceClient->createEntitySignalsMapping($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = EntitySignalsMappingServiceClient::networkName('[NETWORK_CODE]');

    create_entity_signals_mapping_sample($formattedParent);
}
// [END admanager_v1_generated_EntitySignalsMappingService_CreateEntitySignalsMapping_sync]
