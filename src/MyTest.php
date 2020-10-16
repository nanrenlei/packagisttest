<?php
/**
 * @author v_zhouyongchao@100tal.com
 * @date 2020/10/16 15:07
 */

namespace Package;


class MyTest
{
    public function test()
    {
        var_dump(...[1, 2, 3]);
    }

    /**
     * 这是一个测试
     * @return array
     * @author nanrenlei
     * @date 2020/10/16 16:04
     */
    public static function call()
    {
        return [
            'name' => 'Test',
            'age' => 21
        ];
    }
}