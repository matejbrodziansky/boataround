<?php


class Task_model
{


    public function getNumbers()
    {
        return  $numbers = [7, 5, 1, 12, 7, 135, 1, -12];
    }

    public function getDudes()
    {

        return $dudes = [
            [
                'name' => 'John Doe',
                'age' => 55
            ],
            [
                'name' => 'Richard Roe',
                'age' => 36
            ],
            [
                'name' => 'Ben Dover',
                'age' => 99
            ],
            [
                'name' => 'Dev Null',
                'age' => 12
            ],
            [
                'name' => 'Mike Rotch',
                'age' => 43
            ]
        ];
    }
}
