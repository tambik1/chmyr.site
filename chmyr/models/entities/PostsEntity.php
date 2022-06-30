<?php
namespace Chmyr\Models\Entities;

class PostsEntity extends Entity
{
	public string $id = '';
	public string $title = '';
	public string $description = '';
	public string $date_create = '';
	public string $date_update = '';
	public string $photo = '';
	public string $author_id = '';
	public string $name = '';
	public string $surname = '';
	public string $user_photo = '';
	public string $tags_name = '';


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

	public function getTitle(): string
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 */
	public function setTitle(string $title): void
	{
		$this->title = $title;
	}

	public function getDescription(): string
	{
		return $this->description;
	}

	/**
	 * @param string $description
	 */
	public function setDescription(string $description): void
	{
		$this->description = $description;
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

	public function getDateCreate(): string
	{
		return $this->date_create;
	}


	public function getDateUpdate(): string
	{
		return $this->date_update;
	}

	/**
	 * @param string $tags
	 */
	public function setTags(string $tags_name): void
	{
		$this->tags_name = $tags_name;
	}
	public function getTags(): string
	{
		return $this->tags_name;
	}



}