<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models;

use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeEslModelByTemplateVersionResponseBody\eslModels;
use AlibabaCloud\Tea\Model;

class DescribeEslModelByTemplateVersionResponseBody extends Model
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
     * @var eslModels[]
     */
    public $eslModels;

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
     * @example 38F85526-14B8-54A8-A0BB-3B200BBC3682
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
     * @example 7
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code'           => 'Code',
        'dynamicCode'    => 'DynamicCode',
        'dynamicMessage' => 'DynamicMessage',
        'errorCode'      => 'ErrorCode',
        'errorMessage'   => 'ErrorMessage',
        'eslModels'      => 'EslModels',
        'message'        => 'Message',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'totalCount'     => 'TotalCount',
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
        if (null !== $this->eslModels) {
            $res['EslModels'] = [];
            if (null !== $this->eslModels && \is_array($this->eslModels)) {
                $n = 0;
                foreach ($this->eslModels as $item) {
                    $res['EslModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEslModelByTemplateVersionResponseBody
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
        if (isset($map['EslModels'])) {
            if (!empty($map['EslModels'])) {
                $model->eslModels = [];
                $n                = 0;
                foreach ($map['EslModels'] as $item) {
                    $model->eslModels[$n++] = null !== $item ? eslModels::fromMap($item) : $item;
                }
            }
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

        return $model;
    }
}
