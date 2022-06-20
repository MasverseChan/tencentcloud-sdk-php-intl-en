<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace TencentCloud\Cvm\V20170312;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cvm\V20170312\Models as Models;

/**
 * @method Models\AllocateHostsResponse AllocateHosts(Models\AllocateHostsRequest $req) This API is used to create CDH instances with specified configuration.
* When HostChargeType is PREPAID, the HostChargePrepaid parameter must be specified.
 * @method Models\AssociateInstancesKeyPairsResponse AssociateInstancesKeyPairs(Models\AssociateInstancesKeyPairsRequest $req) This API is used to associate key pairs with instances.

* If the public key of a key pair is written to the `SSH` configuration of the instance, users will be able to log in to the instance with the private key of the key pair.
* If the instance is already associated with a key, the old key will become invalid.
If you currently use a password to log in, you will no longer be able to do so after you associate the instance with a key.
* Batch operations are supported. The maximum number of instances in each request is 100. If any instance in the request cannot be associated with a key, you will get an error code.
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) This API is used to associate security groups with specified instances.
 * @method Models\CreateDisasterRecoverGroupResponse CreateDisasterRecoverGroup(Models\CreateDisasterRecoverGroupRequest $req) This API is used to create a [spread placement group](https://intl.cloud.tencent.com/document/product/213/15486?from_cn_redirect=1). After you create one, you can specify it for an instance when you [create the instance](https://intl.cloud.tencent.com/document/api/213/15730?from_cn_redirect=1), 
 * @method Models\CreateImageResponse CreateImage(Models\CreateImageRequest $req) This API is used to create a new image with the system disk of an instance. The image can be used to create new instances.
 * @method Models\CreateKeyPairResponse CreateKeyPair(Models\CreateKeyPairRequest $req) This API is used to create an `OpenSSH RSA` key pair, which you can use to log in to a `Linux` instance.

* You only need to specify a name, and the system will automatically create a key pair and return its `ID` and the public and private keys.
* The name of the key pair must be unique.
* You can save the private key to a file and use it as an authentication method for `SSH`.
* Tencent Cloud does not save users' private keys. Be sure to save it yourself.
 * @method Models\CreateLaunchTemplateVersionResponse CreateLaunchTemplateVersion(Models\CreateLaunchTemplateVersionRequest $req) This API is used to create an instance launch template based on the specified template ID and the corresponding template version number. The default version number will be used when no template version numbers are specified. Each instance launch template can have up to 30 version numbers.
 * @method Models\DeleteDisasterRecoverGroupsResponse DeleteDisasterRecoverGroups(Models\DeleteDisasterRecoverGroupsRequest $req) This API is used to delete a [spread placement group](https://intl.cloud.tencent.com/document/product/213/15486?from_cn_redirect=1). Only empty placement groups can be deleted. To delete a non-empty group, you need to terminate all the CVM instances in it first. Otherwise, the deletion will fail.
 * @method Models\DeleteImagesResponse DeleteImages(Models\DeleteImagesRequest $req) This API is used to delete one or more images.

* If the [ImageState](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#Image) of an image is `CREATING` or `USING`, the image cannot be deleted. Call the [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) API to query the image status.
* Up to 10 custom images are allowed in each region. If you have run out of the quota, delete unused images to create new ones.
* A shared image cannot be deleted.
 * @method Models\DeleteKeyPairsResponse DeleteKeyPairs(Models\DeleteKeyPairsRequest $req) This API is used to delete the key pairs hosted in Tencent Cloud.

* You can delete multiple key pairs at the same time.
* A key pair used by an instance or image cannot be deleted. Therefore, you need to verify whether all the key pairs have been deleted successfully.
 * @method Models\DeleteLaunchTemplateResponse DeleteLaunchTemplate(Models\DeleteLaunchTemplateRequest $req) This API is used to delete an instance launch template.
 * @method Models\DeleteLaunchTemplateVersionsResponse DeleteLaunchTemplateVersions(Models\DeleteLaunchTemplateVersionsRequest $req) This API is used to delete one or more instance launch template versions.
 * @method Models\DescribeDisasterRecoverGroupQuotaResponse DescribeDisasterRecoverGroupQuota(Models\DescribeDisasterRecoverGroupQuotaRequest $req) This API is used to query the quota of [spread placement groups](https://intl.cloud.tencent.com/document/product/213/15486?from_cn_redirect=1).
 * @method Models\DescribeDisasterRecoverGroupsResponse DescribeDisasterRecoverGroups(Models\DescribeDisasterRecoverGroupsRequest $req) This API is used to query the information on [spread placement groups](https://intl.cloud.tencent.com/document/product/213/15486?from_cn_redirect=1).
 * @method Models\DescribeHostsResponse DescribeHosts(Models\DescribeHostsRequest $req) This API is used to query the details of CDH instances.
 * @method Models\DescribeImageQuotaResponse DescribeImageQuota(Models\DescribeImageQuotaRequest $req) This API is used to query the image quota of an user account.
 * @method Models\DescribeImageSharePermissionResponse DescribeImageSharePermission(Models\DescribeImageSharePermissionRequest $req) This API is used to query image sharing information.
 * @method Models\DescribeImagesResponse DescribeImages(Models\DescribeImagesRequest $req) This API is used to view the list of images.

* You specify the image ID or set filters to query the details of certain images.
* You can specify `Offset` and `Limit` to select a certain part of the results. By default, the information on the first 20 matching results is returned.
 * @method Models\DescribeImportImageOsResponse DescribeImportImageOs(Models\DescribeImportImageOsRequest $req) This API is used to query the list of supported operating systems of imported images.
 * @method Models\DescribeInstanceFamilyConfigsResponse DescribeInstanceFamilyConfigs(Models\DescribeInstanceFamilyConfigsRequest $req) This API is used to query a list of model families available to the current user in the current region.
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) This API is used to query the details of instances.

* You can filter the query results with the instance `ID`, name, or billing method. See `Filter` for more information.
* If no parameter is defined, a certain number of instances under the current account will be returned. The number is specified by `Limit` and is 20 by default.
 * @method Models\DescribeInstancesOperationLimitResponse DescribeInstancesOperationLimit(Models\DescribeInstancesOperationLimitRequest $req) This API is used to query limitations on operations on an instance.

* Currently you can use this API to query the maximum number of times you can modify the configuration of an instance.
 * @method Models\DescribeInstancesStatusResponse DescribeInstancesStatus(Models\DescribeInstancesStatusRequest $req) This API is used to query the status of instances.

* You can query the status of an instance with its `ID`.
* If no parameter is defined, the status of a certain number of instances under the current account will be returned. The number is specified by `Limit` and is 20 by default.
 * @method Models\DescribeInternetChargeTypeConfigsResponse DescribeInternetChargeTypeConfigs(Models\DescribeInternetChargeTypeConfigsRequest $req) This API is used to query the network billing methods.
 * @method Models\DescribeKeyPairsResponse DescribeKeyPairs(Models\DescribeKeyPairsRequest $req) This API is used to query key pairs.

* A key pair is a pair of keys generated by an algorithm in which the public key is available to the public and the private key is available only to the user. You can use this API to query the public key but not the private key.
 * @method Models\DescribeLaunchTemplateVersionsResponse DescribeLaunchTemplateVersions(Models\DescribeLaunchTemplateVersionsRequest $req) This API is used to query the information of instance launch template versions.
 * @method Models\DescribeLaunchTemplatesResponse DescribeLaunchTemplates(Models\DescribeLaunchTemplatesRequest $req) This API is used to query one or more instance launch templates.
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) (Suspended) This API is used to query the information of regions. Due to platform policy, the update of this API has been temporarily stopped. Please try the new one as described in https://intl.cloud.tencent.com/document/product/1278/55255?from_cn_redirect=1
 * @method Models\DescribeReservedInstancesConfigInfosResponse DescribeReservedInstancesConfigInfos(Models\DescribeReservedInstancesConfigInfosRequest $req) This API is used to describe reserved instance (RI) offerings. Currently, RIs are only offered to beta users.
 * @method Models\DescribeReservedInstancesOfferingsResponse DescribeReservedInstancesOfferings(Models\DescribeReservedInstancesOfferingsRequest $req) This API is used to describe Reserved Instance offerings that are available for purchase.
 * @method Models\DescribeZoneInstanceConfigInfosResponse DescribeZoneInstanceConfigInfos(Models\DescribeZoneInstanceConfigInfosRequest $req) This API is used to query the configurations of models in an availability zone.
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) This API is used to query availability zones.
 * @method Models\DisassociateInstancesKeyPairsResponse DisassociateInstancesKeyPairs(Models\DisassociateInstancesKeyPairsRequest $req) This API is used to unbind one or more key pairs from one or more instances.

* It only supports [`STOPPED`](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#InstanceStatus) Linux instances.
* After a key pair is disassociated from an instance, you can log in to the instance with password.
* If you did not set a password for the instance, you will not be able to log in via SSH after the unbinding. In this case, you can call [ResetInstancesPassword](https://intl.cloud.tencent.com/document/api/213/15736?from_cn_redirect=1) to set a login password.
* Batch operations are supported. The maximum number of instances in each request is 100. If instances not available for the operation are selected, you will get an error code.
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) This API is used to disassociate security groups from instances.
 * @method Models\ExportImagesResponse ExportImages(Models\ExportImagesRequest $req) This API is used to export custom images to the specified COS bucket.
 * @method Models\ImportImageResponse ImportImage(Models\ImportImageRequest $req) The API is used to import an image. The image imported can be used to create instances. Currently, this API can import images in formats like RAW, VHD, QCOW2, and VMDK.
 * @method Models\ImportKeyPairResponse ImportKeyPair(Models\ImportKeyPairRequest $req) This API is used to import key pairs.

* You can use this API to import key pairs to a user account, but the key pairs will not be automatically associated with any instance. You may use [AssociasteInstancesKeyPair](https://intl.cloud.tencent.com/document/api/213/15698?from_cn_redirect=1) to associate key pairs with instances.
* You need to specify the names of the key pairs and the content of the public keys.
* If you only have private keys, you can convert them to public keys with the `SSL` tool before importing them.
 * @method Models\InquirePricePurchaseReservedInstancesOfferingResponse InquirePricePurchaseReservedInstancesOffering(Models\InquirePricePurchaseReservedInstancesOfferingRequest $req) This API is used to query the price of reserved instances. It only supports querying purchasable reserved instance offerings. Currently, RIs are only offered to beta users.
 * @method Models\InquiryPriceResetInstanceResponse InquiryPriceResetInstance(Models\InquiryPriceResetInstanceRequest $req) This API is used to query the price for reinstalling an instance.

* If you have specified the `ImageId` parameter, the price query is performed with the specified image. Otherwise, the image used by the current instance is used.
* You can only query the price for reinstallation caused by switching between Linux and Windows OS. And the [system disk type](https://intl.cloud.tencent.com/document/api/213/15753?from_cn_redirect=1#SystemDisk) of the instance must be `CLOUD_BASIC`, `CLOUD_PREMIUM`, or `CLOUD_SSD`.
* Currently, this API only supports instances in Mainland China regions.
 * @method Models\InquiryPriceResetInstancesInternetMaxBandwidthResponse InquiryPriceResetInstancesInternetMaxBandwidth(Models\InquiryPriceResetInstancesInternetMaxBandwidthRequest $req) This API is used to query the price for upgrading the public bandwidth cap of an instance.

* The allowed bandwidth cap varies for different models. For details, see [Purchasing Network Bandwidth](https://intl.cloud.tencent.com/document/product/213/509?from_cn_redirect=1).
* For bandwidth billed by the `TRAFFIC_POSTPAID_BY_HOUR` method, changing the bandwidth cap through this API takes effect in real time. You can increase or reduce bandwidth within applicable limits.
 * @method Models\InquiryPriceResetInstancesTypeResponse InquiryPriceResetInstancesType(Models\InquiryPriceResetInstancesTypeRequest $req) This API is used to query the price for adjusting the instance model.

* Currently, you can only use this API to query the prices of instances whose [system disk type](https://intl.cloud.tencent.com/document/api/213/9452?from_cn_redirect=1#block_device) is `CLOUD_BASIC`, `CLOUD_PREMIUM`, or `CLOUD_SSD`.
* Currently, you cannot use this API to query the prices of [CDH](https://intl.cloud.tencent.com/document/product/416?from_cn_redirect=1) instances.
 * @method Models\InquiryPriceResizeInstanceDisksResponse InquiryPriceResizeInstanceDisks(Models\InquiryPriceResizeInstanceDisksRequest $req) This API is used to query the price for expanding data disks of an instance.

* Currently, you can only use this API to query the price of non-elastic data disks whose [disk type](https://intl.cloud.tencent.com/document/api/213/9452?from_cn_redirect=1#block_device) is `CLOUD_BASIC`, `CLOUD_PREMIUM`, or `CLOUD_SSD`. You can use [`DescribeDisks`](https://intl.cloud.tencent.com/document/api/362/16315?from_cn_redirect=1) to check whether a disk is elastic. If the `Portable` field in the response is `false`, it means that the disk is non-elastic.
* Currently, you cannot use this API to query the price for [CDH](https://intl.cloud.tencent.com/document/product/416?from_cn_redirect=1) instances. *Also, you can only query the price of expanding one data disk at a time.
 * @method Models\ModifyDisasterRecoverGroupAttributeResponse ModifyDisasterRecoverGroupAttribute(Models\ModifyDisasterRecoverGroupAttributeRequest $req) This API is used to modify the attributes of [spread placement groups](https://intl.cloud.tencent.com/document/product/213/15486?from_cn_redirect=1).
 * @method Models\ModifyHostsAttributeResponse ModifyHostsAttribute(Models\ModifyHostsAttributeRequest $req) This API is used to modify the attributes of a CDH instance, such as instance name and renewal flag. One of the two parameters, HostName and RenewFlag, must be set, but you cannot set both of them at the same time.
 * @method Models\ModifyImageAttributeResponse ModifyImageAttribute(Models\ModifyImageAttributeRequest $req) This API is used to modify image attributes.

* Attributes of shared images cannot be modified.
 * @method Models\ModifyImageSharePermissionResponse ModifyImageSharePermission(Models\ModifyImageSharePermissionRequest $req) This API is used to modify image sharing information.

* The accounts with which an image is shared can use the shared image to create instances.
* Each custom image can be shared with up to 50 accounts.
* You can use a shared image to create instances, but you cannot change its name and description.
* If an image is shared with another account, the shared image will be in the same region as the original image.

 * @method Models\ModifyInstancesAttributeResponse ModifyInstancesAttribute(Models\ModifyInstancesAttributeRequest $req) The API is used to modify the attributes of an instance. Only the name and the associated security groups can be modified for now.

* An attribute must be specified in the request.
* "Instance name" is a custom name for easier management. Tencent Cloud does not use the name for online support or instance management.
* Batch operations are supported. Each request can modify up to 100 instances.
* When you modify the security groups associated with an instance is modified, the original security groups are disassociated.
* You can use the API [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1#.E7.A4.BA.E4.BE.8B3-.E6.9F.A5.E8.AF.A2.E5.AE.9E.E4.BE.8B.E7.9A.84.E6.9C.80.E6.96.B0.E6.93.8D.E4.BD.9C.E6.83.85.E5.86.B5) to query the instance operation result. If the 'LatestOperationState' in the response is **SUCCESS**, the operation is successful.
 * @method Models\ModifyInstancesProjectResponse ModifyInstancesProject(Models\ModifyInstancesProjectRequest $req) This API is used to change the project to which an instance belongs.

* Project is a virtual concept. You can create multiple projects under one account, manage different resources in each project, and assign different instances to different projects. You may use the [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) API to query instances and use the project ID to filter results.
* You cannot modify the project of an instance that is bound to a load balancer. You need to firstly unbind the load balancer from the instance by using the [`DeregisterInstancesFromLoadBalancer`](https://intl.cloud.tencent.com/document/api/214/1258?from_cn_redirect=1) API.
[^_^]: # (If you modify the project of an instance, security groups associated with the instance will be automatically disassociated. You can use the [`ModifyInstancesAttribute`](https://intl.cloud.tencent.com/document/api/213/15739?from_cn_redirect=1) API to associate the instance with the security groups again.
* Batch operations are supported. You can operate up to 100 instances in each request.
* You can call the [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1#.E7.A4.BA.E4.BE.8B3-.E6.9F.A5.E8.AF.A2.E5.AE.9E.E4.BE.8B.E7.9A.84.E6.9C.80.E6.96.B0.E6.93.8D.E4.BD.9C.E6.83.85.E5.86.B5) API and find the result of the operation in the response parameter `LatestOperationState`. If the value is `SUCCESS`, the operation is successful.
 * @method Models\ModifyInstancesVpcAttributeResponse ModifyInstancesVpcAttribute(Models\ModifyInstancesVpcAttributeRequest $req) This API is used to modify the VPC attributes of an instance, such as the VPC IP address.
* By default, the instances will shut down when you perform this operation and restart upon completion.
* If the specified VPC ID and subnet ID (the subnet must be in the same availability zone as the instance) are different from the VPC where the specified instance resides, the instance will be migrated to a subnet of the specified VPC. Before performing this operation, make sure that the specified instance is not bound with an [ENI](https://intl.cloud.tencent.com/document/product/576?from_cn_redirect=1) or [CLB](https://intl.cloud.tencent.com/document/product/214?from_cn_redirect=1).
 * @method Models\ModifyKeyPairAttributeResponse ModifyKeyPairAttribute(Models\ModifyKeyPairAttributeRequest $req) This API is used to modify the attributes of key pairs.

* This API modifies the name and description of the key pair identified by the key pair ID.
* The name of the key pair must be unique.
* Key pair ID is the unique identifier of a key pair and cannot be modified.
 * @method Models\ModifyLaunchTemplateDefaultVersionResponse ModifyLaunchTemplateDefaultVersion(Models\ModifyLaunchTemplateDefaultVersionRequest $req) This API is used to modify the default version of the instance launch template.
 * @method Models\PurchaseReservedInstancesOfferingResponse PurchaseReservedInstancesOffering(Models\PurchaseReservedInstancesOfferingRequest $req) This API is used to purchase one or more specific Reserved Instances.
 * @method Models\RebootInstancesResponse RebootInstances(Models\RebootInstancesRequest $req) This API is used to restart instances.

* You can only perform this operation on instances whose status is `RUNNING`.
* If the API is called successfully, the instance status will become `REBOOTING`. After the instance is restarted, its status will become `RUNNING` again.
* Forced restart is supported. A forced restart is similar to switching off the power of a physical computer and starting it again. It may cause data loss or file system corruption. Be sure to only force start a CVM when it cannot be restarted normally.
* Batch operations are supported. The maximum number of instances in each request is 100.
 * @method Models\ResetInstanceResponse ResetInstance(Models\ResetInstanceRequest $req) This API is used to reinstall the operating system of the specified instance.

* If you specify an `ImageId`, the specified image is used. Otherwise, the image used by the current instance is used.
* The system disk will be formatted and reset. Therefore, make sure that no important files are stored on the system disk.
* If the operating system switches between `Linux` and `Windows`, the system disk `ID` of the instance will change, and the snapshots that are associated with the system disk can no longer be used to roll back and restore data.
* If no password is specified, you will get a random password via internal message.
* You can only use this API to switch the operating system between `Linux` and `Windows` for instances whose [system disk type](https://intl.cloud.tencent.com/document/api/213/9452?from_cn_redirect=1#SystemDisk) is `CLOUD_BASIC`, `CLOUD_PREMIUM`, or `CLOUD_SSD`.
* Currently, this API only supports instances in Mainland China regions.
 * @method Models\ResetInstancesInternetMaxBandwidthResponse ResetInstancesInternetMaxBandwidth(Models\ResetInstancesInternetMaxBandwidthRequest $req) This API is used to change the public bandwidth cap of an instance.

* The allowed bandwidth cap varies for different models. For details, see [Purchasing Network Bandwidth](https://intl.cloud.tencent.com/document/product/213/509?from_cn_redirect=1).
* For bandwidth billed by the `TRAFFIC_POSTPAID_BY_HOUR` method, changing the bandwidth cap through this API takes effect in real time. Users can increase or reduce bandwidth within applicable limits.
 * @method Models\ResetInstancesPasswordResponse ResetInstancesPassword(Models\ResetInstancesPasswordRequest $req) This API is used to reset the password of the operating system instances to a user-specified password.

* To modify the password of the administrator account: the name of the administrator account varies with the operating system. In Windows, it is `Administrator`; in Ubuntu, it is `ubuntu`; in Linux, it is `root`.
* To reset the password of a running instance, you need to set the parameter `ForceStop` to `True` for a forced shutdown. If not, only passwords of stopped instances can be reset.
* Batch operations are supported. You can reset the passwords of up to 100 instances to the same value once.
* You can call the [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1#.E7.A4.BA.E4.BE.8B3-.E6.9F.A5.E8.AF.A2.E5.AE.9E.E4.BE.8B.E7.9A.84.E6.9C.80.E6.96.B0.E6.93.8D.E4.BD.9C.E6.83.85.E5.86.B5) API and find the result of the operation in the response parameter `LatestOperationState`. If the value is `SUCCESS`, the operation is successful.
 * @method Models\ResetInstancesTypeResponse ResetInstancesType(Models\ResetInstancesTypeRequest $req) This API is used to change the model of an instance.
* You can only use this API to change the models of instances whose [system disk type](https://intl.cloud.tencent.com/document/api/213/9452?from_cn_redirect=1#block_device) is `CLOUD_BASIC`, `CLOUD_PREMIUM`, or `CLOUD_SSD`.
* Currently, you cannot use this API to change the models of [CDH](https://intl.cloud.tencent.com/document/product/416?from_cn_redirect=1) instances.
 * @method Models\ResizeInstanceDisksResponse ResizeInstanceDisks(Models\ResizeInstanceDisksRequest $req) This API (ResizeInstanceDisks) is used to expand the data disks of an instance.

* Currently, you can only use the API to expand non-elastic data disks whose [disk type](https://intl.cloud.tencent.com/document/api/213/9452?from_cn_redirect=1#block_device) is `CLOUD_BASIC`, `CLOUD_PREMIUM`, or `CLOUD_SSD`. You can use [`DescribeDisks`](https://intl.cloud.tencent.com/document/api/362/16315?from_cn_redirect=1) to check whether a disk is elastic. If the `Portable` field in the response is `false`, it means that the disk is non-elastic.
* Currently, this API does not support [CDH](https://intl.cloud.tencent.com/document/product/416?from_cn_redirect=1) instances.
* Currently, only one data disk can be expanded at a time.
 * @method Models\RunInstancesResponse RunInstances(Models\RunInstancesRequest $req) This API is used to create one or more instances with a specified configuration.

* After an instance is created successfully, it will start up automatically, and the [instance status](https://intl.cloud.tencent.com/document/api/213/9452?from_cn_redirect=1#instance_state) will become "Running".
* If you create a pay-as-you-go instance billed on an hourly basis, an amount equivalent to the hourly rate will be frozen. Make sure your account balance is sufficient before calling this API.
* The number of instances you can purchase through this API is subject to the [Quota for CVM Instances](https://intl.cloud.tencent.com/document/product/213/2664?from_cn_redirect=1). Instances created through this API and in the CVM console are counted toward the quota.
* This API is an async API. An instance ID list is returned after the creation request is sent. However, it does not mean the creation has been completed. The status of the instance will be `Creating` during the creation. You can use [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) to query the status of the instance. If the status changes from `Creating` to `Running`, it means that the instance has been created successfully.
 * @method Models\StartInstancesResponse StartInstances(Models\StartInstancesRequest $req) This API is used to start instances.

* You can only perform this operation on instances whose status is `STOPPED`.
* The instance status will become `STARTING` when the API is called successfully and `RUNNING` when the instance is successfully started.
* Batch operations are supported. The maximum number of instances in each request is 100.
 * @method Models\StopInstancesResponse StopInstances(Models\StopInstancesRequest $req) This API is used to shut down instances.

* You can only perform this operation on instances whose status is `RUNNING`.
* The instance status will become `STOPPING` when the API is called successfully and `STOPPED` when the instance is successfully shut down.
* Forced shutdown is supported. A forced shutdown is similar to switching off the power of a physical computer. It may cause data loss or file system corruption. Be sure to only force shut down a CVM when it cannot be sht down normally.
* Batch operations are supported. The maximum number of instances in each request is 100.
 * @method Models\SyncImagesResponse SyncImages(Models\SyncImagesRequest $req) This API is used to sync a custom image to other regions.

* Each API call syncs a single image.
* This API supports syncing an image to multiple regions.
* Each account can have up to 10 custom images in each region. 
 * @method Models\TerminateInstancesResponse TerminateInstances(Models\TerminateInstancesRequest $req) This API is used to return instances.

* Use this API to return instances that are no longer required.
* Pay-as-you-go instances can be returned directly through this API.
* When this API is called for the first time, the instance will be moved to the recycle bin. When this API is called for the second time, the instance will be terminated and cannot be recovered.
* Batch operations are supported. The allowed maximum number of instances in each request is 100.
 */

class CvmClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cvm.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cvm";

    /**
     * @var string
     */
    protected $version = "2017-03-12";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("cvm")."\\"."V20170312\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
