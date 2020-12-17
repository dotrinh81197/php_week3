<?php
class Dancer
{
    public $name;
    public $gender;
    public $queueMales = [];
    public $queueFemales = [];
    public $FemalesWaiting = [];
    public $MalesWaiting = [];
    // them 1 dancer
    public function enqueue($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;

        if ($this->gender == 'male') {
            $this->queueMales[] = $this->name;
        } else {
            $this->queueFemales[] = $this->name;
        }
    }

    public function matchCouple()
    {
        $maleCount = count($this->queueMales);
        $femaleCount = count($this->queueFemales);
        if ($maleCount > $femaleCount) {
            for ($i = 0; $i < $maleCount; $i++) {
                if (isset($this->queueFemales[$i])) {
                    echo "<br> Couple " . ($i + 1) . " is : " . $this->queueMales[$i] . " - " .  $this->queueFemales[$i];
                } else {
                    echo " <br> Couple " . ($i + 1) . " This couple not enough dancer";
                    $this->MalesWaiting[] = $this->queueMales[$i];
                }
            }
        } else {
            for ($i = 0; $i < $femaleCount; $i++) {
                if (isset($this->queueFemales[$i])) {
                    echo "<br> Couple " . ($i + 1) . " is : " . $this->queueMales[$i] . " - " .  $this->queueFemales[$i];
                } else {
                    echo " <br> Couple " . ($i + 1) . " This couple not enough dancer";
                    $this->FemalesWaiting[] = $this->queueFemales[$i];
                }
            }
            return $this->FemalesWaiting;
        }
    }
    public function showQueueWaiting()
    {
        echo "<pre>";
        print_r($this->FemalesWaiting);
        print_r($this->MalesWaiting);
        echo "</pre>";
    }
}

$objDancer = new Dancer();
$objDancer->enqueue('Vu', 'male');
$objDancer->enqueue('Vui', 'male');
$objDancer->enqueue('Vi', 'male');
$objDancer->enqueue('Cuong', 'male');
$objDancer->enqueue('Ychi', 'male');
$objDancer->enqueue('Tam', 'male');
$objDancer->enqueue('Trinh', 'female');
$objDancer->enqueue('Tra Long', 'female');
$objDancer->enqueue('Nhi', 'female');
$objDancer->enqueue('Nhung', 'female');

$objDancer->matchCouple();
echo "<pre>";
echo "<h4>Dancer in waiting queue</h4>";
$objDancer->showQueueWaiting();

// echo "<pre>";
// print_r($objDancer);
// echo "</pre>";
