<?php

namespace Chmyr\Models\Entities;

class UserEntity extends Entity
{
	public string $id = '';
	public string $name = '';
	public string $surname = '';
	public string $login = '';
	public string $email = '';
	public string $password = '';
	public string $photo = '';

	public function getId(): string
	{
		return $this->id;
	}

	/**
	 * @param string $id
	 */

	public function setId(string $id): void
	{
		$this->id = $id;
	}

	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */

	public function setName(string $name): void
	{
		$this->name = $name;
	}

	public function getSurname(): string
	{
		return $this->surname;
	}

	/**
	 * @param string $surname
	 */
	public function setSurname(string $surname): void
	{
		$this->surname = $surname;
	}

	public function getLogin(): string{
		return $this->login;
	}

	/**
	 * @param string login
	 */
	public function setLogin(string $login): void
	{
		$this->login = $login;
	}

	public function getEmail(): string
	{
		return $this->email;
	}

	/**
	 * @param string $email
	 */

	public function setEmail(string $email): void
	{
		$this->email = $email;
	}

	public function getPassword(): string
	{
		return $this->password;
	}

	/**
	 * @param string password
	 */

	public function setPassword(string $password): void
	{
		$this->password = $password;
	}

	public function getUserPhoto(): string
	{
		return $this->photo;
	}

	/**
	 * @param string $photo
	 */

	public function setUserPhoto(string $photo): void
	{
		$this->photo = $photo;
	}
}
