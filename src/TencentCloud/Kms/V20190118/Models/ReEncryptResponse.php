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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReEncrypt response structure.
 *
 * @method string getCiphertextBlob() Obtain Re-encrypted ciphertext
 * @method void setCiphertextBlob(string $CiphertextBlob) Set Re-encrypted ciphertext
 * @method string getKeyId() Obtain CMK used for re-encryption
 * @method void setKeyId(string $KeyId) Set CMK used for re-encryption
 * @method string getSourceKeyId() Obtain CMK used by ciphertext before re-encryption
 * @method void setSourceKeyId(string $SourceKeyId) Set CMK used by ciphertext before re-encryption
 * @method boolean getReEncrypted() Obtain `true` indicates that the ciphertext has been re-encrypted. When re-encryption is initiated by using the same CMK, as long as the CMK is not rotated, no actual re-encryption will be performed, and the original ciphertext will be returned
 * @method void setReEncrypted(boolean $ReEncrypted) Set `true` indicates that the ciphertext has been re-encrypted. When re-encryption is initiated by using the same CMK, as long as the CMK is not rotated, no actual re-encryption will be performed, and the original ciphertext will be returned
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ReEncryptResponse extends AbstractModel
{
    /**
     * @var string Re-encrypted ciphertext
     */
    public $CiphertextBlob;

    /**
     * @var string CMK used for re-encryption
     */
    public $KeyId;

    /**
     * @var string CMK used by ciphertext before re-encryption
     */
    public $SourceKeyId;

    /**
     * @var boolean `true` indicates that the ciphertext has been re-encrypted. When re-encryption is initiated by using the same CMK, as long as the CMK is not rotated, no actual re-encryption will be performed, and the original ciphertext will be returned
     */
    public $ReEncrypted;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $CiphertextBlob Re-encrypted ciphertext
     * @param string $KeyId CMK used for re-encryption
     * @param string $SourceKeyId CMK used by ciphertext before re-encryption
     * @param boolean $ReEncrypted `true` indicates that the ciphertext has been re-encrypted. When re-encryption is initiated by using the same CMK, as long as the CMK is not rotated, no actual re-encryption will be performed, and the original ciphertext will be returned
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("CiphertextBlob",$param) and $param["CiphertextBlob"] !== null) {
            $this->CiphertextBlob = $param["CiphertextBlob"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("SourceKeyId",$param) and $param["SourceKeyId"] !== null) {
            $this->SourceKeyId = $param["SourceKeyId"];
        }

        if (array_key_exists("ReEncrypted",$param) and $param["ReEncrypted"] !== null) {
            $this->ReEncrypted = $param["ReEncrypted"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
