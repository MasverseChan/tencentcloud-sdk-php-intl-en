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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartStreamIngest request structure.
 *
 * @method integer getSdkAppId() Obtain TRTC's [SdkAppId](https://intl.cloud.tencent.com/document/product/647/46351?from_cn_redirect=1#sdkappid), the same as the SdkAppId corresponding to the Record room.
 * @method void setSdkAppId(integer $SdkAppId) Set TRTC's [SdkAppId](https://intl.cloud.tencent.com/document/product/647/46351?from_cn_redirect=1#sdkappid), the same as the SdkAppId corresponding to the Record room.
 * @method string getRoomId() Obtain TRTC's [RoomId](https://intl.cloud.tencent.com/document/product/647/46351?from_cn_redirect=1#roomid), the RoomId corresponding to the Record TRTC room.
 * @method void setRoomId(string $RoomId) Set TRTC's [RoomId](https://intl.cloud.tencent.com/document/product/647/46351?from_cn_redirect=1#roomid), the RoomId corresponding to the Record TRTC room.
 * @method integer getRoomIdType() Obtain Type of TRTC RoomId. 【*Note】Must be the same as the RoomId type corresponding to the Record room: 0: String type RoomId 1: 32-bit Integer type RoomId (default)
 * @method void setRoomIdType(integer $RoomIdType) Set Type of TRTC RoomId. 【*Note】Must be the same as the RoomId type corresponding to the Record room: 0: String type RoomId 1: 32-bit Integer type RoomId (default)
 * @method string getUserId() Obtain UserId of the Pull stream Relay Robot, used to enter the room and initiate the Pull stream Relay Task.
 * @method void setUserId(string $UserId) Set UserId of the Pull stream Relay Robot, used to enter the room and initiate the Pull stream Relay Task.
 * @method string getUserSig() Obtain UserSig corresponding to the Pull stream Relay Robot UserId, i.e., UserId and UserSig are equivalent to the Robot's Login password for entering the room. For the specific Calculation method, please refer to the TRTC [UserSig](https://intl.cloud.tencent.com/document/product/647/45910?from_cn_redirect=1#UserSig) Scheme.
 * @method void setUserSig(string $UserSig) Set UserSig corresponding to the Pull stream Relay Robot UserId, i.e., UserId and UserSig are equivalent to the Robot's Login password for entering the room. For the specific Calculation method, please refer to the TRTC [UserSig](https://intl.cloud.tencent.com/document/product/647/45910?from_cn_redirect=1#UserSig) Scheme.
 * @method array getSourceUrl() Obtain 	
Source URL. Example value: https://a.b/test.mp4
 * @method void setSourceUrl(array $SourceUrl) Set 	
Source URL. Example value: https://a.b/test.mp4
 * @method string getPrivateMapKey() Obtain TRTC room permission Encryption ticket, only needed when advanced permission control is enabled in the Console. After enabling advanced permission control in the TRTC Console, TRTC's backend service system will verify a so-called [PrivateMapKey] 'Permission ticket', which contains an encrypted RoomId and an encrypted 'Permission bit list'. Since PrivateMapKey contains RoomId, providing only UserSig without PrivateMapKey does not allow entry into the specified room.
 * @method void setPrivateMapKey(string $PrivateMapKey) Set TRTC room permission Encryption ticket, only needed when advanced permission control is enabled in the Console. After enabling advanced permission control in the TRTC Console, TRTC's backend service system will verify a so-called [PrivateMapKey] 'Permission ticket', which contains an encrypted RoomId and an encrypted 'Permission bit list'. Since PrivateMapKey contains RoomId, providing only UserSig without PrivateMapKey does not allow entry into the specified room.
 * @method VideoEncodeParams getVideoEncodeParams() Obtain Video Codec Parameters. Optional, if not filled, Keep original stream Parameters.
 * @method void setVideoEncodeParams(VideoEncodeParams $VideoEncodeParams) Set Video Codec Parameters. Optional, if not filled, Keep original stream Parameters.
 * @method AudioEncodeParams getAudioEncodeParams() Obtain Audio Codec Parameters. Optional, if not filled, Keep original stream Parameters.
 * @method void setAudioEncodeParams(AudioEncodeParams $AudioEncodeParams) Set Audio Codec Parameters. Optional, if not filled, Keep original stream Parameters.
 */
class StartStreamIngestRequest extends AbstractModel
{
    /**
     * @var integer TRTC's [SdkAppId](https://intl.cloud.tencent.com/document/product/647/46351?from_cn_redirect=1#sdkappid), the same as the SdkAppId corresponding to the Record room.
     */
    public $SdkAppId;

    /**
     * @var string TRTC's [RoomId](https://intl.cloud.tencent.com/document/product/647/46351?from_cn_redirect=1#roomid), the RoomId corresponding to the Record TRTC room.
     */
    public $RoomId;

    /**
     * @var integer Type of TRTC RoomId. 【*Note】Must be the same as the RoomId type corresponding to the Record room: 0: String type RoomId 1: 32-bit Integer type RoomId (default)
     */
    public $RoomIdType;

    /**
     * @var string UserId of the Pull stream Relay Robot, used to enter the room and initiate the Pull stream Relay Task.
     */
    public $UserId;

    /**
     * @var string UserSig corresponding to the Pull stream Relay Robot UserId, i.e., UserId and UserSig are equivalent to the Robot's Login password for entering the room. For the specific Calculation method, please refer to the TRTC [UserSig](https://intl.cloud.tencent.com/document/product/647/45910?from_cn_redirect=1#UserSig) Scheme.
     */
    public $UserSig;

    /**
     * @var array 	
Source URL. Example value: https://a.b/test.mp4
     */
    public $SourceUrl;

    /**
     * @var string TRTC room permission Encryption ticket, only needed when advanced permission control is enabled in the Console. After enabling advanced permission control in the TRTC Console, TRTC's backend service system will verify a so-called [PrivateMapKey] 'Permission ticket', which contains an encrypted RoomId and an encrypted 'Permission bit list'. Since PrivateMapKey contains RoomId, providing only UserSig without PrivateMapKey does not allow entry into the specified room.
     */
    public $PrivateMapKey;

    /**
     * @var VideoEncodeParams Video Codec Parameters. Optional, if not filled, Keep original stream Parameters.
     */
    public $VideoEncodeParams;

    /**
     * @var AudioEncodeParams Audio Codec Parameters. Optional, if not filled, Keep original stream Parameters.
     */
    public $AudioEncodeParams;

    /**
     * @param integer $SdkAppId TRTC's [SdkAppId](https://intl.cloud.tencent.com/document/product/647/46351?from_cn_redirect=1#sdkappid), the same as the SdkAppId corresponding to the Record room.
     * @param string $RoomId TRTC's [RoomId](https://intl.cloud.tencent.com/document/product/647/46351?from_cn_redirect=1#roomid), the RoomId corresponding to the Record TRTC room.
     * @param integer $RoomIdType Type of TRTC RoomId. 【*Note】Must be the same as the RoomId type corresponding to the Record room: 0: String type RoomId 1: 32-bit Integer type RoomId (default)
     * @param string $UserId UserId of the Pull stream Relay Robot, used to enter the room and initiate the Pull stream Relay Task.
     * @param string $UserSig UserSig corresponding to the Pull stream Relay Robot UserId, i.e., UserId and UserSig are equivalent to the Robot's Login password for entering the room. For the specific Calculation method, please refer to the TRTC [UserSig](https://intl.cloud.tencent.com/document/product/647/45910?from_cn_redirect=1#UserSig) Scheme.
     * @param array $SourceUrl 	
Source URL. Example value: https://a.b/test.mp4
     * @param string $PrivateMapKey TRTC room permission Encryption ticket, only needed when advanced permission control is enabled in the Console. After enabling advanced permission control in the TRTC Console, TRTC's backend service system will verify a so-called [PrivateMapKey] 'Permission ticket', which contains an encrypted RoomId and an encrypted 'Permission bit list'. Since PrivateMapKey contains RoomId, providing only UserSig without PrivateMapKey does not allow entry into the specified room.
     * @param VideoEncodeParams $VideoEncodeParams Video Codec Parameters. Optional, if not filled, Keep original stream Parameters.
     * @param AudioEncodeParams $AudioEncodeParams Audio Codec Parameters. Optional, if not filled, Keep original stream Parameters.
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

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("RoomIdType",$param) and $param["RoomIdType"] !== null) {
            $this->RoomIdType = $param["RoomIdType"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserSig",$param) and $param["UserSig"] !== null) {
            $this->UserSig = $param["UserSig"];
        }

        if (array_key_exists("SourceUrl",$param) and $param["SourceUrl"] !== null) {
            $this->SourceUrl = $param["SourceUrl"];
        }

        if (array_key_exists("PrivateMapKey",$param) and $param["PrivateMapKey"] !== null) {
            $this->PrivateMapKey = $param["PrivateMapKey"];
        }

        if (array_key_exists("VideoEncodeParams",$param) and $param["VideoEncodeParams"] !== null) {
            $this->VideoEncodeParams = new VideoEncodeParams();
            $this->VideoEncodeParams->deserialize($param["VideoEncodeParams"]);
        }

        if (array_key_exists("AudioEncodeParams",$param) and $param["AudioEncodeParams"] !== null) {
            $this->AudioEncodeParams = new AudioEncodeParams();
            $this->AudioEncodeParams->deserialize($param["AudioEncodeParams"]);
        }
    }
}
