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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUser response structure.
 *
 * @method integer getSdkAppId() Obtain The application ID.	
 * @method void setSdkAppId(integer $SdkAppId) Set The application ID.	
 * @method string getUserId() Obtain User ID	
 * @method void setUserId(string $UserId) Set User ID	
 * @method string getName() Obtain Username	
 * @method void setName(string $Name) Set Username	
 * @method string getAvatar() Obtain URL of user profile photo.	
 * @method void setAvatar(string $Avatar) Set URL of user profile photo.	
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeUserResponse extends AbstractModel
{
    /**
     * @var integer The application ID.	
     */
    public $SdkAppId;

    /**
     * @var string User ID	
     */
    public $UserId;

    /**
     * @var string Username	
     */
    public $Name;

    /**
     * @var string URL of user profile photo.	
     */
    public $Avatar;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $SdkAppId The application ID.	
     * @param string $UserId User ID	
     * @param string $Name Username	
     * @param string $Avatar URL of user profile photo.	
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
