<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models;

use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeUserLogResponseBody\userLogs;
use AlibabaCloud\Tea\Model;

class DescribeUserLogResponseBody extends Model
{
    /**
     * @example -1001
     *
     * @var string
     */
    public $code;

    /**
     * @example PlatformResponseError.%s
     *
     * @var string
     */
    public $dynamicCode;

    /**
     * @example The specified store %s does not exist.
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @example MandatoryParameters
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example The specified resource type is invalid.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example E69C8998-1787-4999-8C75-D663FF1173CF
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;

    /**
     * @var userLogs[]
     */
    public $userLogs;
    protected $_name = [
        'code'           => 'Code',
        'dynamicCode'    => 'DynamicCode',
        'dynamicMessage' => 'DynamicMessage',
        'errorCode'      => 'ErrorCode',
        'errorMessage'   => 'ErrorMessage',
        'message'        => 'Message',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'totalCount'     => 'TotalCount',
        'userLogs'       => 'UserLogs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->dynamicCode) {
            $res['DynamicCode'] = $this->dynamicCode;
        }
        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->userLogs) {
            $res['UserLogs'] = [];
            if (null !== $this->userLogs && \is_array($this->userLogs)) {
                $n = 0;
                foreach ($this->userLogs as $item) {
                    $res['UserLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DynamicCode'])) {
            $model->dynamicCode = $map['DynamicCode'];
        }
        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['UserLogs'])) {
            if (!empty($map['UserLogs'])) {
                $model->userLogs = [];
                $n               = 0;
                foreach ($map['UserLogs'] as $item) {
                    $model->userLogs[$n++] = null !== $item ? userLogs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
