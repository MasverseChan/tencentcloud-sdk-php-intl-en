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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetWebVerificationResult response structure.
 *
 * @method integer getErrorCode() Obtain The final result of this verification. `0` indicates that the person is the same as that in the photo.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorCode(integer $ErrorCode) Set The final result of this verification. `0` indicates that the person is the same as that in the photo.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorMsg() Obtain The description of the final verification result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorMsg(string $ErrorMsg) Set The description of the final verification result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVideoBestFrameUrl() Obtain The temporary URL of the best face screenshot collected from the video stream. It is valid for 10 minutes. Download the image if needed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVideoBestFrameUrl(string $VideoBestFrameUrl) Set The temporary URL of the best face screenshot collected from the video stream. It is valid for 10 minutes. Download the image if needed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVideoBestFrameMd5() Obtain The MD5 hash value of the best face screenshot collected from the video stream. It can be used to check whether the image content is consistent with the file content.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVideoBestFrameMd5(string $VideoBestFrameMd5) Set The MD5 hash value of the best face screenshot collected from the video stream. It can be used to check whether the image content is consistent with the file content.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getVerificationDetailList() Obtain The details list of this verification process.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVerificationDetailList(array $VerificationDetailList) Set The details list of this verification process.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVideoUrl() Obtain The temporary URL of the video collected from the video stream. It is valid for 10 minutes. Download the video if needed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVideoUrl(string $VideoUrl) Set The temporary URL of the video collected from the video stream. It is valid for 10 minutes. Download the video if needed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVideoMd5() Obtain The MD5 hash value of the video collected from the video stream. It can be used to check whether the video content is consistent with the file content.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVideoMd5(string $VideoMd5) Set The MD5 hash value of the video collected from the video stream. It can be used to check whether the video content is consistent with the file content.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetWebVerificationResultResponse extends AbstractModel
{
    /**
     * @var integer The final result of this verification. `0` indicates that the person is the same as that in the photo.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorCode;

    /**
     * @var string The description of the final verification result.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorMsg;

    /**
     * @var string The temporary URL of the best face screenshot collected from the video stream. It is valid for 10 minutes. Download the image if needed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VideoBestFrameUrl;

    /**
     * @var string The MD5 hash value of the best face screenshot collected from the video stream. It can be used to check whether the image content is consistent with the file content.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VideoBestFrameMd5;

    /**
     * @var array The details list of this verification process.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VerificationDetailList;

    /**
     * @var string The temporary URL of the video collected from the video stream. It is valid for 10 minutes. Download the video if needed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VideoUrl;

    /**
     * @var string The MD5 hash value of the video collected from the video stream. It can be used to check whether the video content is consistent with the file content.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VideoMd5;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $ErrorCode The final result of this verification. `0` indicates that the person is the same as that in the photo.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorMsg The description of the final verification result.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VideoBestFrameUrl The temporary URL of the best face screenshot collected from the video stream. It is valid for 10 minutes. Download the image if needed.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VideoBestFrameMd5 The MD5 hash value of the best face screenshot collected from the video stream. It can be used to check whether the image content is consistent with the file content.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $VerificationDetailList The details list of this verification process.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VideoUrl The temporary URL of the video collected from the video stream. It is valid for 10 minutes. Download the video if needed.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VideoMd5 The MD5 hash value of the video collected from the video stream. It can be used to check whether the video content is consistent with the file content.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("VideoBestFrameUrl",$param) and $param["VideoBestFrameUrl"] !== null) {
            $this->VideoBestFrameUrl = $param["VideoBestFrameUrl"];
        }

        if (array_key_exists("VideoBestFrameMd5",$param) and $param["VideoBestFrameMd5"] !== null) {
            $this->VideoBestFrameMd5 = $param["VideoBestFrameMd5"];
        }

        if (array_key_exists("VerificationDetailList",$param) and $param["VerificationDetailList"] !== null) {
            $this->VerificationDetailList = [];
            foreach ($param["VerificationDetailList"] as $key => $value){
                $obj = new VerificationDetail();
                $obj->deserialize($value);
                array_push($this->VerificationDetailList, $obj);
            }
        }

        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("VideoMd5",$param) and $param["VideoMd5"] !== null) {
            $this->VideoMd5 = $param["VideoMd5"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
