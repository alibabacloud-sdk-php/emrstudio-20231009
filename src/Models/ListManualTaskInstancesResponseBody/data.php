<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20231009\Models\ListManualTaskInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description EMR集群ID
     *
     * @example c-b933c5aac7f7***
     *
     * @var string
     */
    public $emrClusterId;

    /**
     * @description 结束时间
     *
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 外部应用ID
     *
     * @example application_123_***
     *
     * @var string
     */
    public $externalAppId;

    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @example 123abc***
     *
     * @var string
     */
    public $manualTaskInstanceId;

    /**
     * @description 代表资源名称的资源属性字段
     *
     * @example test
     *
     * @var string
     */
    public $manualTaskInstanceName;

    /**
     * @description 资源组ID
     *
     * @example wg-123abc***
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description 开始时间
     *
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 状态
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @description 提交时间
     *
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $submitTime;

    /**
     * @description 任务参数
     *
     * @example {
     * }
     * @var string
     */
    public $taskParams;

    /**
     * @description 任务类型
     *
     * @example SHELL
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'emrClusterId'           => 'EmrClusterId',
        'endTime'                => 'EndTime',
        'externalAppId'          => 'ExternalAppId',
        'manualTaskInstanceId'   => 'ManualTaskInstanceId',
        'manualTaskInstanceName' => 'ManualTaskInstanceName',
        'resourceGroupId'        => 'ResourceGroupId',
        'startTime'              => 'StartTime',
        'status'                 => 'Status',
        'submitTime'             => 'SubmitTime',
        'taskParams'             => 'TaskParams',
        'taskType'               => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emrClusterId) {
            $res['EmrClusterId'] = $this->emrClusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->externalAppId) {
            $res['ExternalAppId'] = $this->externalAppId;
        }
        if (null !== $this->manualTaskInstanceId) {
            $res['ManualTaskInstanceId'] = $this->manualTaskInstanceId;
        }
        if (null !== $this->manualTaskInstanceName) {
            $res['ManualTaskInstanceName'] = $this->manualTaskInstanceName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->taskParams) {
            $res['TaskParams'] = $this->taskParams;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmrClusterId'])) {
            $model->emrClusterId = $map['EmrClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExternalAppId'])) {
            $model->externalAppId = $map['ExternalAppId'];
        }
        if (isset($map['ManualTaskInstanceId'])) {
            $model->manualTaskInstanceId = $map['ManualTaskInstanceId'];
        }
        if (isset($map['ManualTaskInstanceName'])) {
            $model->manualTaskInstanceName = $map['ManualTaskInstanceName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['TaskParams'])) {
            $model->taskParams = $map['TaskParams'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
