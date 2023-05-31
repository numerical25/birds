<?php

namespace App\Services;
class BirdService
{
    // Your service logic for bird operations
    function getBirds($id = null, $actionId = 0)
    {
        $birds = require base_path('tests/MockData/Birds.php');
        if ($this->isValidNumericInput($id)) {
            $birds[$id]['action'] = $this->getAction($actionId);
            $birds[$id]['current_image_state'] = $this->getCurrentStatusImage($id, $birds[$id]['action']);
            return $birds[$id];
        }
        for ($i = 0; $i < count($birds); $i++) {
            $birds[$i]['action'] = $this->getAction($actionId);
            $birds[$i]['current_image_state'] = $this->getCurrentStatusImage($i,$birds[$i]['action']);
        }
        return $birds;
    }

    function getAction($id)
    {
        $actions = require base_path('tests/MockData/BirdActions.php');
        if ($this->isValidNumericInput($id)) {
            return $actions[$id]['name'];
        }
        return $actions[0]['name'];
    }

    function getCurrentStatusImage($id , $actionName)
    {
        $types = require base_path('tests/MockData/BirdTypes.php');
        echo $id;
        if ($actionName != '') {
            if($actionName == 'Idle') {
                return $types[$id]['image_idle'];
            } else if ($actionName == 'Walk') {
                return $types[$id]['image_walking'];
            } else if ($actionName == 'Eat') {
                return $types[$id]['image_eating'];
            }
        }
        return '';
    }

    function buildABird($typdId = null, $actionId = 0, )
    {
        return $this->getBirds($typdId, $actionId);
    }
    function isValidNumericInput($value)
    {
        if (is_string($value) || is_int($value)) {
            $pattern = '/^[0-9]+$/';
            return preg_match($pattern, strval($value)) === 1;
        }
        return false;
    }
}
