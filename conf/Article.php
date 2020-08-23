<?php

class Article {

	protected $article_author;
	protected $article_title;
	protected $article_content;
	protected $article_publish_datetime;
	protected $article_image_path;


	public  function __construct($authorid,$title,$content,$datetime,$imgpath) {
		$this->article_author = $authorid;
		$this->article_title = $title;
		$this->article_content = $content;
		$this->article_publish_datetime = $datetime;
		$this->article_image_path = $imgpath;
	}

	public function getAuthorId() {
		return $this->article_author;
	}

	public function getTittle() {
		return $this->article_title;
	}

	public function getContent() {
		return $this->article_content;
	}

	public function getDatetime() {
		return $this->article_publish_datetime;
	}

	public function getImagePath() {
		return $this->article_image_path;
	}

?>