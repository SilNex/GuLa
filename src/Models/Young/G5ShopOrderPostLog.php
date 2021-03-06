<?php

namespace SilNex\GuLa\Models\Young;

use SilNex\GuLa\G5Model;

class G5ShopOrderPostLog extends G5Model
{
    use \SilNex\GuLa\Traits\BelongToG5Member;

    /**
     * 그누보드 테이블
     *
     * @var string
     */
    protected $table = 'g5_shop_order_post_log';

    /**
     * PRIMARY KEY 설정
     * 
     * @var string
     */
    protected $primaryKey = 'oid';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['oid', 'mb_id', 'post_data', 'ol_code', 'ol_msg', 'ol_datetime', 'ol_ip'];

    /**
     * 숨길 속성(컬럼)
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * 속성별 결과 변환 설정
     *
     * @var array
     */
    protected $casts = [];

    /**
     * 시간 속성(컬럼)
     *
     * @var array
     */
    protected $dates = ['ol_datetime'];

}
