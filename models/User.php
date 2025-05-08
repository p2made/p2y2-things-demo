<?php
/**
 * User.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things-demo
 * @class \p2m\demo\models\User
 */

namespace p2m\demo\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\base\Model;
use yii\base\DynamicModel;
//use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * User model
 *
 * @property string $username
 * @property string $email
 * @property string $password
 */
class User extends Model implements IdentityInterface
{
	// User for demo pages
	protected const DEMO_USER      = 'Demo User';
	protected const DEMO_EMAIL     = 'demo@example.com';
	protected const DEMO_PASSWORD  = 'pa$sw0rd';

	protected static $username = 'Demo User';
	protected static $email    = 'demo@example.com';
	protected static $password = 'pa$sw0rd';
	//protected static $username = 'demo';
	//protected static $password = 'demo';

}
