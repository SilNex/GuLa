<?php

namespace SilNex\GuLa\Models\Gnu;

use SilNex\GuLa\G5Model;

class G5Content extends G5Model
{
    /**
     * 그누보드 테이블
     *
     * @var string
     */
    protected $table = 'g5_content';

    /**
     * PRIMARY KEY 설정
     * 
     * @var string
     */
    protected $primaryKey = 'co_id';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['co_id', 'co_html', 'co_subject', 'co_content', 'co_seo_title', 'co_mobile_content', 'co_skin', 'co_mobile_skin', 'co_tag_filter_use', 'co_hit', 'co_include_head', 'co_include_tail'];

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
