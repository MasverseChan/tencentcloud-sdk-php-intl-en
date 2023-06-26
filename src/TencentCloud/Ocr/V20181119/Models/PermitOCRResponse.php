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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PermitOCR response structure.
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getEnglishName() Obtain Name in English
 * @method void setEnglishName(string $EnglishName) Set Name in English
 * @method string getNumber() Obtain ID number
 * @method void setNumber(string $Number) Set ID number
 * @method string getSex() Obtain Gender
 * @method void setSex(string $Sex) Set Gender
 * @method string getValidDate() Obtain Validity period
 * @method void setValidDate(string $ValidDate) Set Validity period
 * @method string getIssueAuthority() Obtain Issuing authority
 * @method void setIssueAuthority(string $IssueAuthority) Set Issuing authority
 * @method string getIssueAddress() Obtain Place of issue
 * @method void setIssueAddress(string $IssueAddress) Set Place of issue
 * @method string getBirthday() Obtain Date of birth
 * @method void setBirthday(string $Birthday) Set Date of birth
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class PermitOCRResponse extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Name in English
     */
    public $EnglishName;

    /**
     * @var string ID number
     */
    public $Number;

    /**
     * @var string Gender
     */
    public $Sex;

    /**
     * @var string Validity period
     */
    public $ValidDate;

    /**
     * @var string Issuing authority
     */
    public $IssueAuthority;

    /**
     * @var string Place of issue
     */
    public $IssueAddress;

    /**
     * @var string Date of birth
     */
    public $Birthday;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Name Name
     * @param string $EnglishName Name in English
     * @param string $Number ID number
     * @param string $Sex Gender
     * @param string $ValidDate Validity period
     * @param string $IssueAuthority Issuing authority
     * @param string $IssueAddress Place of issue
     * @param string $Birthday Date of birth
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EnglishName",$param) and $param["EnglishName"] !== null) {
            $this->EnglishName = $param["EnglishName"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("ValidDate",$param) and $param["ValidDate"] !== null) {
            $this->ValidDate = $param["ValidDate"];
        }

        if (array_key_exists("IssueAuthority",$param) and $param["IssueAuthority"] !== null) {
            $this->IssueAuthority = $param["IssueAuthority"];
        }

        if (array_key_exists("IssueAddress",$param) and $param["IssueAddress"] !== null) {
            $this->IssueAddress = $param["IssueAddress"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
