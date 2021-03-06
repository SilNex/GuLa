<?php

namespace SilNex\GuLa\Models\Gnu;

use SilNex\GuLa\G5Model;

class G5NewWin extends G5Model
{
    /**
     * 그누보드 테이블
     *
     * @var string
     */
    protected $table = 'g5_new_win';

    /**
     * PRIMARY KEY 설정
     * 
     * @var string
     */
    protected $primaryKey = 'nw_id';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['nw_id', 'nw_device', 'nw_begin_time', 'nw_end_time', 'nw_disable_hours', 'nw_left', 'nw_top', 'nw_height', 'nw_width', 'nw_subject', 'nw_content', 'nw_content_html'];

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
    protected $dates = ['nw_begin_time', 'nw_end_time'];

}
