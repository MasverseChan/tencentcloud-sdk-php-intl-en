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

namespace TencentCloud\Trtc\V20190722;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Trtc\V20190722\Models as Models;

/**
 * @method Models\CreateCloudRecordingResponse CreateCloudRecording(Models\CreateCloudRecordingRequest $req) ### API description
This API is used to start an on-cloud recording task. It records the audio and video streams in a room and saves them to the specified cloud storage. You can use this API to record the streams in a room separately, or you can mix the streams first and then record the mixed stream.

### You can use this API to perform the following operations:
* Specify the anchors whose streams you want or do not want to record by using the `RecordParams` parameter
* Specify the storage service you want to save recording files to by using the `StorageParams` parameter
* Specify transcoding settings for mixed-stream recording, including video resolution, video bitrate, frame rate, and audio quality, by using `MixTranscodeParams`
* Specify the layout of different videos in mixed-stream recording mode or select an auto-arranged layout template

### Key concepts
* Single-stream recording: Record the audio and video of each subscribed user (`UserId`) in a room and save the recording files (M3U8/TS) to the cloud
* Mixed-stream recording: Mix the audios and videos of subscribed users (`UserId`) in a room, record the mixed stream, and save the recording files (M3U8/TS) to the cloud
 * @method Models\DeleteCloudRecordingResponse DeleteCloudRecording(Models\DeleteCloudRecordingRequest $req) This API is used to stop a recording task. It works only when a task is in progress. If the task has already ended when this API is called, an error will be returned. If a task is stopped successfully, but the uploading of recording files has not completed, the backend will continue to upload the files and will notify you via a callback when the upload is completed.
 * @method Models\DescribeCloudRecordingResponse DescribeCloudRecording(Models\DescribeCloudRecordingRequest $req) This API is used to query the status of a recording task after it starts. It works only when a task is in progress. If the task has already ended when this API is called, an error will be returned.
 * @method Models\DismissRoomResponse DismissRoom(Models\DismissRoomRequest $req) This API is used to remove all users from a room and dismiss the room. It supports all platforms. For Android, iOS, Windows, and macOS, the TRTC SDK needs to be upgraded to v6.6 or above.
 * @method Models\DismissRoomByStrRoomIdResponse DismissRoomByStrRoomId(Models\DismissRoomByStrRoomIdRequest $req) This API is used to remove all users from a room and close the room. It works on all platforms. For Android, iOS, Windows, and macOS, you need to update the TRTC SDK to version 6.6 or above.
 * @method Models\ModifyCloudRecordingResponse ModifyCloudRecording(Models\ModifyCloudRecordingRequest $req) This API is used to modify a recording task. It works only when a task is in progress. If the task has already ended when this API is called, an error will be returned. You need to specify all the parameters for each request instead of just the ones you want to modify.
 * @method Models\RemoveUserResponse RemoveUser(Models\RemoveUserRequest $req) This API is used to remove a user from a room. It is applicable to scenarios where the anchor, room owner, or admin wants to kick out a user. It supports all platforms. For Android, iOS, Windows, and macOS, the TRTC SDK needs to be upgraded to v6.6 or above.
 * @method Models\RemoveUserByStrRoomIdResponse RemoveUserByStrRoomId(Models\RemoveUserByStrRoomIdRequest $req) This API is used to remove a user from a room. It allows the anchor, room owner, or admin to kick out a user, and works on all platforms. For Android, iOS, Windows, and macOS, you need to update the TRTC SDK to version 6.6 or above.
 * @method Models\StartPublishCdnStreamResponse StartPublishCdnStream(Models\StartPublishCdnStreamRequest $req) This API is used to start a relaying task.
1. To ensure the stability of relaying, you cannot switch between relaying audio only, relaying audio and video, and relaying video only for the same task.
2. To ensure the stability of relaying, you cannot change the video codec, audio codec, sample rate, or number of sound channels during relay.
3. The `StartPublishCdnStream` API will return a task ID, which uniquely identifies a relaying task. You need to pass this task ID when making a request to change the relaying parameters or stop the relaying task.
4. When you relay a single stream, specify both `AudioParams` and `VideoParams` to publish both audio and video, and specify only `AudioParams` to publish audio only. You cannot switch between the two modes during the relaying process. For `VideoParams`, set `Width`, `Height`, `Fps`, `Bitrate`, and `Gop` according to the actual settings used for publishing.
5. When you make a request to change the relaying parameters, set `AudioParams.SubscribeAudioList` to specify the audios to mix and set `VideoParams.LayoutParams` to specify the video layout.
6. The `SequenceNumber` parameter is required when you make a request to change the relaying parameters. It ensures that multiple requests for the same relaying task are in the correct order. The value of `SequenceNumber` increases each time a new request is made for the same task. If `InternalError` is returned, try again using the same `SequenceNumber`. You don’t need to handle the `FailedOperation.OutdateRequest` error.
7. In a request to change the relaying parameters, it is OK to pass only the parameters you want to change, but the value of each parameter you pass must be complete.
For example, to change the destination URLs, you only need to pass `PublishCdnParams` plus the required parameters of the `UpdatePublishCdnStream` API, but make sure `PublishCdnParams` includes all the URLs you want to relay to.
Pass the following parameters to change different relaying parameters:
    a. WithTranscoding: Pass this parameter to switch from not transcoding to transcoding (this parameter is required).
    b. AudioParams.UserInfoList: Pass this parameter to change the users whose audios you want to mix.
    c. VideoParams.VideoEncode: Pass this parameter to change video parameters other than the codec, including the output resolution, bitrate, frame rate, and GOP. This parameter is valid only if streams are transcoded.
    d. LayoutParams: Pass this parameter to change the video layout. This parameter is valid only if streams are transcoded.
    e. BackGroundColor and BackgroundImageUrl: Pass these two parameters to change the background image and color. They are valid only when streams are transcoded.
    f. WaterMarkList: Pass this parameter to change the watermarks. This parameter is valid only if streams are transcoded.
    g. PublishCdnParams: Pass this parameter to change the destination URLs.
8. You can create a relaying task even when there are no anchors in the room, but make sure you manually stop the task when relaying is finished. If you don’t, after all the users whose streams are mixed leave the room, the TRTC backend will wait for the timeout period to elapse before stopping the relaying task.
9. You can specify at most 10 destination URLs for each relaying task.
10. When making a request to switch from not transcoding to transcoding, you need to specify all the parameters of the relaying task.
 * @method Models\StopPublishCdnStreamResponse StopPublishCdnStream(Models\StopPublishCdnStreamRequest $req) This API is used to stop a relaying task.
 * @method Models\UpdatePublishCdnStreamResponse UpdatePublishCdnStream(Models\UpdatePublishCdnStreamRequest $req) This API is used to change the parameters of a relaying task.
 */

class TrtcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "trtc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "trtc";

    /**
     * @var string
     */
    protected $version = "2019-07-22";

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
        $respClass = "TencentCloud"."\\".ucfirst("trtc")."\\"."V20190722\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
