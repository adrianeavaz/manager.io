<?php

namespace app\common\models\base;

/**
 * AbstractCoreRoleActions
 * 
 * @package app\common\models\base
 * @autogenerated by Phalcon Developer Tools
 * @date 2015-09-19, 11:17:46
 */
abstract class AbstractCoreRoleActions extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $role_id;

    /**
     *
     * @var integer
     */
    protected $action_id;

    /**
     * Method to set the value of field role_id
     *
     * @param integer $role_id
     * @return $this
     */
    public function setRoleId($role_id)
    {
        $this->role_id = $role_id;

        return $this;
    }

    /**
     * Method to set the value of field action_id
     *
     * @param integer $action_id
     * @return $this
     */
    public function setActionId($action_id)
    {
        $this->action_id = $action_id;

        return $this;
    }

    /**
     * Returns the value of field role_id
     *
     * @return integer
     */
    public function getRoleId()
    {
        return $this->role_id;
    }

    /**
     * Returns the value of field action_id
     *
     * @return integer
     */
    public function getActionId()
    {
        return $this->action_id;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('action_id', 'app\common\models\base\CoreActions', 'id', array('alias' => 'CoreActions'));
        $this->belongsTo('role_id', 'app\common\models\base\CoreRoles', 'id', array('alias' => 'CoreRoles'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'core_role_actions';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractCoreRoleActions[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractCoreRoleActions
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
