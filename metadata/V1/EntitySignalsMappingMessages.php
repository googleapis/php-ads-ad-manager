<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/entity_signals_mapping_messages.proto

namespace GPBMetadata\Google\Ads\Admanager\V1;

class EntitySignalsMappingMessages
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
=google/ads/admanager/v1/entity_signals_mapping_messages.protogoogle.ads.admanager.v1google/api/resource.proto"�
EntitySignalsMapping
audience_segment_id (H 
content_bundle_id (H #
custom_targeting_value_id (H 
name (	B�A+
entity_signals_mapping_id (B�AH�"
taxonomy_category_ids (B�A:��A�
-admanager.googleapis.com/EntitySignalsMappingFnetworks/{network_code}/entitySignalsMappings/{entity_signals_mapping}*entitySignalsMappings2entitySignalsMappingB
entityB
_entity_signals_mapping_idB�
com.google.ads.admanager.v1B!EntitySignalsMappingMessagesProtoPZ@google.golang.org/genproto/googleapis/ads/admanager/v1;admanager�Google.Ads.AdManager.V1�Google\\Ads\\AdManager\\V1�Google::Ads::AdManager::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

