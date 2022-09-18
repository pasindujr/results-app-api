<?php

namespace App\Http\Resources\V1\ThirdSemResult;

use Illuminate\Http\Resources\Json\JsonResource;

class ThirdSemResultResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'studentId' => $this->student_id,
            'computerSystemsAndComputerSecurity' => $this->computer_systems_and_computer_security,
            'itProjectManagement' => $this->it_project_management,
            'principlesOfManagementAndAppliedEconomics' => $this->principles_of_management_and_applied_economics,
            'rapidApplicationDevelopment' => $this->rapid_application_development,
            'principlesOfSoftwareEngineering' => $this->principles_of_software_engineering,
            'objectOrientedAnalysisAndDesign' => $this->object_oriented_analysis_and_design,
            'groupProject' => $this->group_project,
            'englishForTechnology3' => $this->english_for_technology_3,
        ];
    }
}
