<?php
/**
 * Globalizer
 * Copyright (c) 2019 Shopbase
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 * @version 1.0.0.0
 * @package de.themepoint.php.components.globalizer
 *
 */

namespace Shopbase\Globalizer;

class Globalizer
{
    /**
     * Contains the global instance
     *
     * @var Globalizer
     */
    protected static $instance;

    /**
     * Init new global instance
     *
     * @return Globalizer
     */
    public static function init() : Globalizer
    {
        self::$instance = new self;
        return self::get();
    }

    /**
     * Get global instance
     *
     * @return Globalizer
     */
    public static function get() : Globalizer
    {
        return self::$instance;
    }

    /**
     * Reset global instance
     *
     * @return Globalizer
     */
    public function reset() : Globalizer
    {
        return self::init();
    }

    /**
     * Delete global instance
     */
    public function delete()
    {
        self::$instance = null;
    }

    /**
     * Contains the classes
     *
     * @var array
     */
    protected $classes = array();

    /**
     * Set new class
     *
     * @param string $class
     * @return Globalizer
     */
    public function setClass(string $class) : Globalizer
    {
        if(!isset($this->classes[$class])) {
            $this->classes[$class] = new $class;
        }

        $this->syncWithGlobal();

        return $this;
    }

    /**
     * Remove class
     *
     * @param string $class
     * @return Globalizer
     */
    public function removeClass(string $class) : Globalizer
    {
        if(!isset($this->classes[$class])) {
            unset($this->classes[$class]);
        }

        $this->syncWithGlobal();

        return $this;
    }

    /**
     * Get the class
     *
     * @param string $class
     * @return mixed|null
     */
    public function getClass(string $class)
    {
        return isset($this->classes[$class]) ? $this->classes[$class] : null;
    }

    /**
     * Sync with global instance
     *
     * @return Globalizer
     */
    public function syncWithGlobal() : Globalizer
    {
        static::$instance = $this;
        return $this;
    }
}