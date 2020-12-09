<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Meeting extends Model
{
    //attributes id, name, price, created_at, updated_at
    protected $fillable = ['place', 'date','details'];
    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getDate()
    {
        return $this->attributes['date'];
    }

    public function setDate($date)

    {
        $this->attributes['date'] = $date;
    }

    public function getPlace()
    {
        return $this->attributes['place'];
    }

    public function setPlace($place)
    {
        $this->attributes['place'] = $place;
    }
    public function getDetails()
    {
        return $this->attributes['details'];
    }

    public function setDetails($details)
    {
        $this->attributes['details'] = $details;
    }
    
}
