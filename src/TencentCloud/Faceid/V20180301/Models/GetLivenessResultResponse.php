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
 * GetLivenessResult response structure.
 *
 * @method string getResult() Obtain The final verification result.
 * @method void setResult(string $Result) Set The final verification result.
 * @method string getDescription() Obtain The description of the final verification result.
 * @method void setDescription(string $Description) Set The description of the final verification result.
 * @method FileInfo getBestFrame() Obtain The face screenshot.
 * @method void setBestFrame(FileInfo $BestFrame) Set The face screenshot.
 * @method FileInfo getVideo() Obtain The video for the detection.
 * @method void setVideo(FileInfo $Video) Set The video for the detection.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetLivenessResultResponse extends AbstractModel
{
    /**
     * @var string The final verification result.
     */
    public $Result;

    /**
     * @var string The description of the final verification result.
     */
    public $Description;

    /**
     * @var FileInfo The face screenshot.
     */
    public $BestFrame;

    /**
     * @var FileInfo The video for the detection.
     */
    public $Video;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Result The final verification result.
     * @param string $Description The description of the final verification result.
     * @param FileInfo $BestFrame The face screenshot.
     * @param FileInfo $Video The video for the detection.
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("BestFrame",$param) and $param["BestFrame"] !== null) {
            $this->BestFrame = new FileInfo();
            $this->BestFrame->deserialize($param["BestFrame"]);
        }

        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = new FileInfo();
            $this->Video->deserialize($param["Video"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
