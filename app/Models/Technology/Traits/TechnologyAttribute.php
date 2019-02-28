<?php

namespace App\Models\Technology\Traits;

/**
 * Class TechnologyAttribute.
 */
trait TechnologyAttribute
{
    // Make your attributes functions here
    // Further, see the documentation : https://laravel.com/docs/5.4/eloquent-mutators#defining-an-accessor


    /**
     * Action Button Attribute to show in grid
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group action-btn">
                '.$this->getEditButtonAttribute("edit-technology", "admin.technologies.edit").'
                '.$this->getDeleteButtonAttribute("delete-technology", "admin.technologies.destroy").'
                </div>';
    }
}
