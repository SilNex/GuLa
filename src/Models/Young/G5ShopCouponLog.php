<?php

namespace SilNex\GuLa\Models\Young;

use SilNex\GuLa\G5Model;

class G5ShopCouponLog extends G5Model
{
    use \SilNex\GuLa\Traits\BelongToG5Member;
    use \SilNex\GuLa\Traits\BelongToG5ShopOrder;

    /**
     * 그누보드 테이블
     *
     * @var string
     */
    protected $table = 'g5_shop_coupon_log';

    /**
     * PRIMARY KEY 설정
     * 
     * @var string
     */
    protected $primaryKey = 'cl_id';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['cl_id', 'cp_id', 'mb_id', 'od_id', 'cp_price', 'cl_datetime'];

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
    protected $dates = ['cl_datetime'];

    public function g5ShopCoupon()
    {
        $this->belongsTo(G5ShopCoupon::class, 'cp_id', 'cp_id');
    }
}
