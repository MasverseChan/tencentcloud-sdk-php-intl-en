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

namespace TencentCloud\Kms\V20190118;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Kms\V20190118\Models as Models;

/**
 * @method Models\AsymmetricRsaDecryptResponse AsymmetricRsaDecrypt(Models\AsymmetricRsaDecryptRequest $req) This API is used to decrypt data with the specified private key that is encrypted with RSA asymmetric cryptographic algorithm. The ciphertext must be encrypted with the corresponding public key. The asymmetric key must be in `Enabled` state for decryption.
 * @method Models\AsymmetricSm2DecryptResponse AsymmetricSm2Decrypt(Models\AsymmetricSm2DecryptRequest $req) This API is used to decrypt data with the specified private key that is encrypted with SM2 asymmetric cryptographic algorithm. The ciphertext must be encrypted with the corresponding public key. The asymmetric key must be in `Enabled` state for decryption. The length of the ciphertext passed in cannot exceed 256 bytes.
 * @method Models\CancelKeyDeletionResponse CancelKeyDeletion(Models\CancelKeyDeletionRequest $req) Cancel the scheduled deletion of CMK
 * @method Models\CreateKeyResponse CreateKey(Models\CreateKeyRequest $req) Create a master key CMK (Custom Master Key) for user management data keys
 * @method Models\CreateWhiteBoxKeyResponse CreateWhiteBoxKey(Models\CreateWhiteBoxKeyRequest $req) This API is used to create a white-box key. Up to 50 ones can be created.
 * @method Models\DecryptResponse Decrypt(Models\DecryptRequest $req) This API is used to decrypt the ciphertext and obtain the plaintext data.
 * @method Models\DeleteImportedKeyMaterialResponse DeleteImportedKeyMaterial(Models\DeleteImportedKeyMaterialRequest $req) This API is used to delete the imported key material. It is only valid for EXTERNAL CMKs. Specifically, it puts a CMK into `PendingImport` status instead of deleting the CMK, so that the CMK can be used again after key material is reimported. To delete the CMK completely, please call the `ScheduleKeyDeletion` API.
 * @method Models\DeleteWhiteBoxKeyResponse DeleteWhiteBoxKey(Models\DeleteWhiteBoxKeyRequest $req) This API is used to delete a white-box key. Note: only disabled white-box keys can be deleted.
 * @method Models\DescribeKeyResponse DescribeKey(Models\DescribeKeyRequest $req) This API is used to get the attribute details of the CMK with a specified `KeyId`.
 * @method Models\DescribeKeysResponse DescribeKeys(Models\DescribeKeysRequest $req) This API is used to get the attribute information of CMKs in batches.
 * @method Models\DescribeWhiteBoxDecryptKeyResponse DescribeWhiteBoxDecryptKey(Models\DescribeWhiteBoxDecryptKeyRequest $req) This API is used to get a white-box decryption key.
 * @method Models\DescribeWhiteBoxKeyResponse DescribeWhiteBoxKey(Models\DescribeWhiteBoxKeyRequest $req) This API is used to display white-box key information.
 * @method Models\DescribeWhiteBoxKeyDetailsResponse DescribeWhiteBoxKeyDetails(Models\DescribeWhiteBoxKeyDetailsRequest $req) This API is used to get the white-box key list.
 * @method Models\DescribeWhiteBoxServiceStatusResponse DescribeWhiteBoxServiceStatus(Models\DescribeWhiteBoxServiceStatusRequest $req) This API is used to get the white-box key service status.
 * @method Models\DisableKeyResponse DisableKey(Models\DisableKeyRequest $req) This API is used to disable a master key. The disabled key cannot be used for encryption and decryption operations.
 * @method Models\DisableKeyRotationResponse DisableKeyRotation(Models\DisableKeyRotationRequest $req) Disabled key rotation for the specified CMK.
 * @method Models\DisableKeysResponse DisableKeys(Models\DisableKeysRequest $req) This API is used to batch prohibit the use of CMK.
 * @method Models\DisableWhiteBoxKeyResponse DisableWhiteBoxKey(Models\DisableWhiteBoxKeyRequest $req) This API is used to disable a white-box key.
 * @method Models\DisableWhiteBoxKeysResponse DisableWhiteBoxKeys(Models\DisableWhiteBoxKeysRequest $req) This API is used to disable white-box keys in batches.
 * @method Models\EnableKeyResponse EnableKey(Models\EnableKeyRequest $req) Enable a specified CMK.
 * @method Models\EnableKeyRotationResponse EnableKeyRotation(Models\EnableKeyRotationRequest $req) Turn on the key rotation function for the specified CMK.
 * @method Models\EnableKeysResponse EnableKeys(Models\EnableKeysRequest $req) This API is used to enable CMK in batches.
 * @method Models\EnableWhiteBoxKeyResponse EnableWhiteBoxKey(Models\EnableWhiteBoxKeyRequest $req) This API is used to enable a white-box key.
 * @method Models\EnableWhiteBoxKeysResponse EnableWhiteBoxKeys(Models\EnableWhiteBoxKeysRequest $req) This API is used to enable white-box keys in batches.
 * @method Models\EncryptResponse Encrypt(Models\EncryptRequest $req) This API is used to encrypt any data up to 4KB. It can be used to encrypt database passwords, RSA Key, or other small sensitive information. For application data encryption, use the DataKey generated by GenerateDataKey to perform local data encryption and decryption operations
 * @method Models\EncryptByWhiteBoxResponse EncryptByWhiteBox(Models\EncryptByWhiteBoxRequest $req) This API is used to encrypt data with a white-box key.
 * @method Models\GenerateDataKeyResponse GenerateDataKey(Models\GenerateDataKeyRequest $req) This API generates a data key, which you can use to encrypt local data.
 * @method Models\GenerateRandomResponse GenerateRandom(Models\GenerateRandomRequest $req) This API is used to generate a random number.
 * @method Models\GetKeyRotationStatusResponse GetKeyRotationStatus(Models\GetKeyRotationStatusRequest $req) Query whether the specified CMK has the key rotation function.
 * @method Models\GetParametersForImportResponse GetParametersForImport(Models\GetParametersForImportRequest $req) This API is used to obtain the parameters of the material to be imported into a CMK. The returned `Token` is used as one of the parameters to execute `ImportKeyMaterial`, and the returned `PublicKey` is used to encrypt the key material. The `Token` and `PublicKey` are valid for 24 hours. If they are expired, you will need to call the API again to get a new `Token` and `PublicKey`.
 * @method Models\GetPublicKeyResponse GetPublicKey(Models\GetPublicKeyRequest $req) This API is used to get the information of the public key that is encrypted with the asymmetric cryptographic algorithm and of which the `KeyUsage` is `ASYMMETRIC_DECRYPT_RSA_2048` or `ASYMMETRIC_DECRYPT_SM2`. This public key can be used to encrypt data locally, and the data encrypted with it can only be decrypted with the corresponding private key through KMS. The public key can only be obtained from the asymmetric key in `Enabled` state.
 * @method Models\GetServiceStatusResponse GetServiceStatus(Models\GetServiceStatusRequest $req) Used to query whether the user has activated the KMS service.
 * @method Models\ImportKeyMaterialResponse ImportKeyMaterial(Models\ImportKeyMaterialRequest $req) This API is used to import key material into an EXTERNAL CMK. The key obtained through the `GetParametersForImport` API is used to encrypt the key material. You can only reimport the same key material into the specified CMK and set a new expiration time. After the CMK key material is imported, it cannot be replaced. After the key material is expired or deleted, the CMK will remain unavailable until the same key material is reimported. CMKs are independent, which means that the same key material can be imported into different CMKs, but data encrypted by one CMK cannot be decrypted by another one.
Key material can only be imported into CMKs in `Enabled` and `PendingImport` status.
 * @method Models\ListAlgorithmsResponse ListAlgorithms(Models\ListAlgorithmsRequest $req) This API is used to list the encryption methods supported in the current region.
 * @method Models\ListKeyDetailResponse ListKeyDetail(Models\ListKeyDetailRequest $req) Get the master key list details according to the specified Offset and Limit.
 * @method Models\ListKeysResponse ListKeys(Models\ListKeysRequest $req) This API is used to list the KeyIds of CMKs in `Enabled`, `Disabled`, and `PendingImport` status under the account.
 * @method Models\ReEncryptResponse ReEncrypt(Models\ReEncryptRequest $req) Re-encrypt the ciphertext using the specified CMK.
 * @method Models\ScheduleKeyDeletionResponse ScheduleKeyDeletion(Models\ScheduleKeyDeletionRequest $req) CMK planned deletion API, used to specify the time of CMK deletion, the optional time interval is [7,30] days
 * @method Models\UpdateAliasResponse UpdateAlias(Models\UpdateAliasRequest $req) This API is used to modify the alias of a CMK. CMKs in `PendingDelete` status cannot be modified.
 * @method Models\UpdateKeyDescriptionResponse UpdateKeyDescription(Models\UpdateKeyDescriptionRequest $req) This API is used to modify the description of the specified CMK. CMKs in `PendingDelete` status cannot be modified.
 */

class KmsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "kms.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2019-01-18";

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
        $respClass = "TencentCloud"."\\".ucfirst("kms")."\\"."V20190118\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}