<?php

namespace SilNex\GuLa\Models\Young;

use SilNex\GuLa\G5Model;

class G5ShopInicisLog extends G5Model
{
    /**
     * 그누보드 테이블
     *
     * @var string
     */
    protected $table = 'g5_shop_inicis_log';

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
    protected $fillable = ['oid', 'P_TID', 'P_MID', 'P_AUTH_DT', 'P_STATUS', 'P_TYPE', 'P_OID', 'P_FN_NM', 'P_AUTH_NO', 'P_AMT', 'P_RMESG1', 'post_data', 'is_mail_send'];

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
    protected $dates = [];

}
