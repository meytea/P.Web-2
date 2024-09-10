<?php
// Kelas abstrak Course
abstract class Course {
    protected $courseName;
    protected $instructor;

    public function __construct($courseName, $instructor) {
        $this->courseName = $courseName;
        $this->instructor = $instructor;
    }

    // Metode abstrak
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse mengimplementasikan getCourseDetails()
class OnlineCourse extends Course {
    private $platform;
    private $duration; // Durasi dalam minggu

    public function __construct($courseName, $instructor, $platform, $duration) {
        parent::__construct($courseName, $instructor);
        $this->platform = $platform;
        $this->duration = $duration;
    }

    public function getCourseDetails() {
        return "Course: {$this->courseName}, Instructor: {$this->instructor}, Platform: {$this->platform}, Duration: {$this->duration} weeks (Online)";
    }
}

// Kelas OfflineCourse mengimplementasikan getCourseDetails()
class OfflineCourse extends Course {
    private $location;
    private $schedule; // Jadwal dalam bentuk string

    public function __construct($courseName, $instructor, $location, $schedule) {
        parent::__construct($courseName, $instructor);
        $this->location = $location;
        $this->schedule = $schedule;
    }

    public function getCourseDetails() {
        return "Course: {$this->courseName}, Instructor: {$this->instructor}, Location: {$this->location}, Schedule: {$this->schedule} (Offline)";
    }
}

// Contoh penggunaan
$onlineCourse = new OnlineCourse("Web Development", "John Doe", "Udemy", 8);
$offlineCourse = new OfflineCourse("Graphic Design", "Jane Smith", "Room 101, Art Building", "Mon-Wed-Fri, 9AM-12PM");

echo $onlineCourse->getCourseDetails();
echo "<br>";
echo $offlineCourse->getCourseDetails();
?>
