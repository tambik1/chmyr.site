<?php
namespace Chmyr\Models\Entities;

class PostsEntity
{
	public string $id = '';
	public string $title = '';
	public string $description = '';
	public string $date_create = '';
	public string $date_update = '';
	public string $photo = '';
	public string $author_id = '';


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

	public function getDateCreate(): string
	{
		return $this->date_create;
	}

	/**
	 * @param string $date_create
	 */
	public function setDateCreate(string $date_create): void
	{
		$this->date_create = $date_create;
	}

	public function getDateUpdate(): string
	{
		return $this->date_update;
	}

	/**
	 * @param string $date_Update
	 */
	public function setDateUpdate(string $date_update): void
	{
		$this->date_create = $date_update;
	}

	public function getPhoto(): string
	{
		return $this->photo;
	}

	/**
	 * @param string $photo
	 */
	public function setPhoto(string $photo): void
	{
		$this->id = $photo;
	}

	public function getAuthorId(): string
	{
		return $this->author_id;
	}

	/**
	 * @param string $id
	 */
	public function setAuthorId(string $author_id): void
	{
		$this->id = $author_id;
	}

}