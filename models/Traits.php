<?php
trait Rating
{
    protected $rating = 0;

    public function setRating($_rating)
    {
        if ($_rating >= 1 && $_rating <= 5) {
            $this->rating = $_rating;
        } else {
            throw new Exception("Invalid rating. Rating must be between 1 and 5.");
        }
    }
    public function getRating()
    {
        return $this->rating;
    }
}
