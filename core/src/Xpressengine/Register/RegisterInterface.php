<?php
/**
 * Container class. This file is part of the Xpressengine package.
 *
 * PHP version 5
 *
 * @category    Register
 * @package     Xpressengine\Register
 * @author      XE Team (developers) <developers@xpressengine.com>
 * @copyright   2015 Copyright (C) NAVER <http://www.navercorp.com>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL
 * @link        http://www.xpressengine.com
 */
namespace Xpressengine\Register;

use ArrayAccess;

/**
 * register가 구현해야 하는 인터페이스
 *
 * @category    Register
 * @package     Xpressengine\Register
 * @author      XE Team (developers) <developers@xpressengine.com>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL
 * @link        http://www.xpressengine.com
 */
interface RegisterInterface extends ArrayAccess
{
    /**
     * Determine if the given configuration value exists.
     *
     * @param  string $key key
     *
     * @return bool
     */
    public function has($key);

    /**
     * Get the specified configuration value.
     *
     * @param  string $key     key
     * @param  mixed  $default default value
     *
     * @return mixed
     */
    public function get($key, $default = null);

    /**
     * Set a given configuration value.
     * 키가 이미 등록되어 있다면 등록 할 수 없음
     * 새로 생성
     *
     * @param  array|string $key   key
     * @param  mixed        $value value for setting
     *
     * @return void
     */
    public function set($key, $value = null);

    /**
     * add item
     * 키가 없으면 등록할 수 없음 - Arr class spec
     * 있는거을 덮어 씀
     *
     * @param  array|string $key   key
     * @param  mixed        $value value for adding
     *
     * @return void
     */
    public function add($key, $value);

    /**
     * put item
     * 키가 있으면 수정
     *
     * @param  array|string $key   key
     * @param  mixed        $value value for putting
     *
     * @return void
     */
    public function put($key, $value);

    /**
     * Prepend a value onto an array configuration value.
     *
     * @param  string $key   key
     * @param  mixed  $value value for prepend
     *
     * @return void
     */
    public function prepend($key, $value);

    /**
     * Push a value onto an array configuration value.
     *
     * @param  string $key   key
     * @param  mixed  $id    pushed data's id
     * @param  mixed  $value pushed data's value
     *
     * @return void
     */
    public function push($key, $id, $value = null);

    /**
     * Get all of the configuration items for the application.
     *
     * @return array
     */
    public function all();
}