<?php
/**
 * User.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/p2y2-demo
 * @class \p2m\demo\models\User
 */

namespace p2m\demo\models;

use yii\base\Model;

/**
 * User model
 *
 * @property string $username
 * @property string $email
 * @property string $password
 */
class User extends Model
{
	// User for demo pages
	protected const DEMO_USER      = 'Demo User';
	protected const DEMO_EMAIL     = 'demo@example.com';
	protected const DEMO_PASSWORD  = 'pa$sw0rd';

	/** @var string */
	public $email;
	/** @var string */
	public $password;

	/**
	 * Initialize defaults so the form is pre-filled.
	 */
	public function init(): void
	{
		parent::init();
		$this->email    = self::DEMO_EMAIL;
		$this->password = self::DEMO_PASSWORD;
	}

	/**
	 * Validation rules for the form.
	 */
	public function rules(): array
	{
		return [
			[['email','password'], 'required'],
			['email', 'email'],
			['password', 'string', 'min' => 8],
		];
	}

	/**
	 * “Log in” check against your demo credentials.
	 */
	public function validateDemo(): bool
	{
		return $this->email === self::DEMO_EMAIL
			&& $this->password === self::DEMO_PASSWORD;
	}

	/**
	 * What to show in the navbar after logging in.
	 */
	public function getDisplayName(): string
	{
		return self::DEMO_USER;
	}
}
