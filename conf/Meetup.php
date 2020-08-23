<?php

include '../conf/db_conn.php';

class Meetup {

	protected $meetup_author;
	protected $meetup_title;
	protected $meetup_content;
	protected $meetup_publish_datetime;
	protected $meetup_date;
	protected $meeatup_location;
	protected $meetup_type;


	public  function __construct($authorid,$title,$content,$publish_datetime,$date,$type,$location) {
		$this->meetup_author = $authorid;
		$this->meetup_title = $title;
		$this->meetup_content = $content;
		$this->meetup_publish_datetime = $datetime;
		$this->meetup_date = $date;
		$this->meetup_type = $type;
		$this->meeatup_location = $location;
	}

	public function getAuthorId() {
		return $this->meetup_author;
	}

	public function getTitle() {
		return $this->meetup_title;
	}

	public function getContent() {
		return $this->meetup_content;
	}

	public function getPublDateTime () {
		return $this->meetup_publish_datetime;
	}

	public function getDate() {
		return $this->meetup_date;
	}

	public function getLocation() {
		return $this->meeatup_location;
	}

	public function getType() {
		return $this->meetup_type;
	}
	
	public function placeMeetUps(){
	    mysqli_query($conn,'INSERT INTO mitUps (date, name, descr, place, organisedBy, type, placementDate) VALUES ('.$this->getDate().','.$this->getTitle().','.$this->getContent().','.$this->getLocation.','.$this->getAuthorId().','.$this->getType().','.$this->getPublDateTime().')') or die(mysqli_error($conn));
	}
}

?>